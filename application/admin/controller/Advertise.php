<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;

class Advertise extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

      /**
     * 详情
     */
    public function detail()
    {
        $id = $this->request->param('id');
        if (!$id) {
            throw new Exception('缺少必要参数ID');
        }

        // 条件
        $map['w.id'] = $id;

        // 查询字段
        $field = 'w.*';

        // 查询
        $item = db('Advertise')->alias('w')->field($field)
         
            ->where($map)->find();


        $this->view->assign('vo', $item);

        return $this->view->fetch();
    }

     /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        $model = $this->getModel();

        // 列表过滤器，生成查询Map对象
        $map = $this->search($model, [$this->fieldIsDelete => $this::$isdelete]);

        // 特殊过滤器，后缀是方法名的
        $actionFilter = 'filter' . $this->request->action();
        if (method_exists($this, $actionFilter)) {
            $this->$actionFilter($map);
        }

        // 自定义过滤器
        if (method_exists($this, 'filter')) {
            $this->filter($map);
        }

        $this->datalist($model, $map);

        $field='comname,id';
        // $res=db('companyman')->alias('com')->join('Advertise adv','adv.comid=com.id')->field($field)->where(['adv.status'=>1,'adv.isdelete'=>0])->select();
        $res=db('companyman')->field($field)->where(['status'=>1,'isdelete'=>0,'comtfpass'=>1])->select();
        
  
        $this->view->assign('res',$res);
    
        return $this->view->fetch();
    }

       /**
     * 添加 重新构造
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

            // 公司尚未通过审核不能发布招聘信息
            $res=db('companyman')->field('comname,id')->where('comtfpass',1)->select();

            $this->view->assign('res',$res);
   
             $this->view->assign("vo", '');

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

            // 公司尚未通过审核不能发布招聘信息
            $res=db('companyman')->field('comname,id')->where('comtfpass',1)->select();

            $this->view->assign('res',$res);


            $this->view->assign("vo", $vo);

            return $this->view->fetch();
        }
    }
        /**********发送通知************/
     public function publish()
    {

        if ($this->request->isPost()) {
            
            $params= $this->request->param();
            
            if ($params['advname']==0 || $params['classesid']==0) {
                return ajax_return_adv_error('请选择学校或者班级'); 
            }

            if (empty($params['classesid'])) {
                return ajax_return_adv_error('必要classesid参数不能为空'); 
            }
        
            $work=db('advertise')->where(['isdelete'=>0,'status'=>1,'id'=>$params['id']])->find();
           
            // 1、查看指定班级的人员 
            $res=db('Perman')->field('number,id,fullname,sex')->where('class', $params['classesid'])->select();

            if (empty($res)) {
                return ajax_return_adv_error('没有人数，请重新选择班级');
            }

            $hashids = new \getui\Demo();
             // 2、之后进行定向的通知处理         
            $var=$hashids->pushMessageToList($res,$work['advname'],$work['advduty']);
            
            if (!$var) {
                  return ajax_return_adv_error('通知发送失败');
            }
            // 3、数据记录
            $data=[];
            foreach ($res as $key => $value) {
                $data[$key]=[
                    'tittle'  =>$work['advname'],
                    'content' =>$work['advduty'],
                   
                    'username'=>$res[$key]['fullname'],
                    'usersex' =>$res[$key]['sex'],
                    'sendtime'=>date("Y-m-d")
                ];

            }

            
            db('publog')->insertAll($data);

            return ajax_return_adv('发送成功');

        }

        return $this->view->fetch();
    }


    public function school()
    {
       
       $school=db('schoolman')->where(['status'=>1,'isdelete'=>0])->select();

       $data=[
            'code'=>200,
            'dats'=>$school,
            'msg'=>'数据返回成功啦',
        ];

       return json($data);
    }

    public function classes()
    {
        $params=input();

        if (empty($params)) {
           return json('数据不合法');
        }
        if (empty($params['schoolnum'])) {
            return json('数据不合法不能为空');
        }
        $class=db('departman')->where(['status'=>1,'isdelete'=>0,'schoolid'=>$params['schoolnum']])->select();
        // 数据返回

        $data=[
            'code'=>200,
            'dats'=>$class,
            'msg'=>'数据返回成功啦',
        ];
        return json($data);

    }

  
}
