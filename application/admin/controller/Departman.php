<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;

class Departman extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

     /**
     * 首页
     * @return mixed
     */
    public function index()
    {
       
        $list=db('departman')->where(['status'=>1,'isdelete'=>0])->select();

        $school=db('schoolman')->where(['status'=>1,'isdelete'=>0])->select();

        $num=[];
        foreach ($list as $key => $value) {
            $num[$key]=$list[$key]['classnum'];
        }

        // 总数班级
        $classnum='';
        foreach ($num as $key => $value) {
            $list[$key]['total']=db('Perman')
                                ->alias('p')
                                ->join('departman d','p.class=d.classnum')
                                ->where(['p.status'=>1,'p.isdelete'=>0,'d.classnum'=>$num[$key]])
                                ->count();
        }
        // 在职状态人数
        $worked='';
        foreach ($num as $key => $value) {
            $list[$key]['worked']=db('Perman')
                                ->alias('p')
                                ->join('departman d','p.class=d.classnum')
                                ->where(['p.status'=>1,'p.isdelete'=>0,'stustatus'=>1,'d.classnum'=>$num[$key]])
                                ->count();
        }
        // 求职状态人数
        $working='';
        foreach ($num as $key => $value) {
            $list[$key]['working']=db('Perman')
                                ->alias('p')
                                ->join('departman d','p.class=d.classnum')
                                ->where(['p.status'=>1,'p.isdelete'=>0,'stustatus'=>0,'d.classnum'=>$num[$key]])
                                ->count();
        }

        $this->view->assign('list', $list);

        $this->view->assign('school',$school);
     
        return $this->view->fetch();
    }


    /**
     * 添加
     * @return mixed
     */
    public function add()
    {

        $controller = $this->request->controller();

        if ($this->request->isAjax()) {

            
            // 插入
            $data = $this->request->except(['id']);
            
            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }

            // 写入数据
            if (
                class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
            ) {
                //使用模型写入，可以在模型中定义更高级的操作
                $model = new $modelClass();
                $ret = $model->isUpdate(false)->save($data);
            } else {
                // 简单的直接使用db写入
                Db::startTrans();
                try {
                    $model = Db::name($this->parseTable($controller));
                    $ret = $model->insert($data);
                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();

                    return ajax_return_adv_error($e->getMessage());
                }
            }

            return ajax_return_adv('添加成功');
        } else {
            // 添加
             $school=db('schoolman')->where(['status'=>1,'isdelete'=>0])->select();

            $this->view->assign('school',$school);

            $this->view->assign('edit','add');

            return $this->view->fetch(isset($this->template) ? $this->template : 'edit');
        }
    }

    /**
     * 编辑
     * @return mixed
     */
    public function edit()
    {
        $controller = $this->request->controller();

        if ($this->request->isAjax()) {
            // 更新
            $data = $this->request->post();
            if (!$data['id']) {
                return ajax_return_adv_error("缺少参数ID");
            }

            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }

            // 更新数据
            if (
                class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
            ) {
                // 使用模型更新，可以在模型中定义更高级的操作
                $model = new $modelClass();
                $ret = $model->isUpdate(true)->save($data, ['id' => $data['id']]);
            } else {
                // 简单的直接使用db更新
                Db::startTrans();
                try {
                    $model = Db::name($this->parseTable($controller));
                    $ret = $model->where('id', $data['id'])->update($data);
                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();

                    return ajax_return_adv_error($e->getMessage());
                }
            }

            return ajax_return_adv("编辑成功");
        } else {
            // 编辑
            $id = $this->request->param('id');
            if (!$id) {
                throw new HttpException(404, "缺少参数ID");
            }
            $vo = $this->getModel($controller)->find($id);
            if (!$vo) {
                throw new HttpException(404, '该记录不存在');
            }

            $school=db('schoolman')->where(['status'=>1,'isdelete'=>0])->select();

            $this->view->assign('school',$school);

            $this->view->assign('edit','edit');

            $this->view->assign("vo", $vo);

            return $this->view->fetch();
        }
    }


     /**
     * 查看详情
     */
    public function detail()
    {

        $id = $this->request->param('id');
        if (!$id) {
            throw new Exception('缺少必要参数ID');
        }

        $map=[
            'd.id'=>$id,
            
        ];

        // 获取学生的列表

        $res=db('Perman')->alias('p')->join('departman d','p.class=d.classnum')->where($map)->select();


        $this->view->assign('res', $res);
       
        return $this->view->fetch();

    }
    /**********发送通知************/
     public function publish()
    {

        if ($this->request->isPost()) {
            
            $params= $this->request->param();
          
            if ($params['advname']==0 && $params['advduty']=='') {
                return ajax_return_adv_error('职位名称 职位描述不能为空');
            }
            if (empty($params['id'])) {
                return ajax_return_adv_error('必要ID参数不能为空'); 
            }
           
            $res=db('Perman')->field('number')->where('class', $params['id'])->select();

            $hashids = new \getui\Demo();
                      
            $var=$hashids->pushMessageToList($res,$params['advname'],$params['advduty']);
            
            if (!$var) {
                  return ajax_return_adv_error('通知发送失败');
            }
            // 数据记录
            $data=[
                    'tittle'=>$params['advname'],
                    'content'=>$params['advduty'],
                    'sendtime'=>time()
            ];
            
            db('publog')->insert($data);

            return ajax_return_adv('发送成功');

        }

        $res=db('advertise')->field('advname,advduty,id')->select();
        
        $this->view->assign('vo',$res);

        return $this->view->fetch();
    }

    
}
