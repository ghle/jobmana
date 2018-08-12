<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;
class Perman extends Controller
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

        $class= db('departman')->where(['status'=>1,'isdelete'=>0])->select();

        $this->view->assign('class',$class);


        return $this->view->fetch();
    }
/**
     * 回收站
     * @return mixed
     */
    public function recycleBin()
    {
        $this::$isdelete = 1;

        return $this->index();
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
            $class =db('departman')->where(['status'=>1,'isdelete'=>0])->select();
            $this->view->assign('school',$school);
            $this->view->assign('class',$class);
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
            $class =db('departman')->where(['status'=>1,'isdelete'=>0])->select();
            $this->view->assign('school',$school);
            $this->view->assign('class',$class);
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

        // 条件
        $map['w.id'] = $id;

        // 查询字段
        $field = 'w.*';

        // 查询
        $item = db('Perman')->alias('w')->field($field)
         
            ->where($map)->find();


        $this->view->assign('vo', $item);

        $school= db('schoolman')->where(['status'=>1,'isdelete'=>0])->select();
        $class = db('departman')->where(['status'=>1,'isdelete'=>0])->select();
        $this->view->assign('school',$school);
        $this->view->assign('class',$class);

        return $this->view->fetch();
    }
    /**********发送通知************/
     public function publish()
    {
        $id = $this->request->param('id');

        if ($this->request->isPost()) {
            
            $params= $this->request->param();
         
            if ($params['advname']==0 && $params['advduty']=='') {
                return ajax_return_adv_error('职位名称 职位描述不能为空');
            }
            if ($params['id']=='') {
               return ajax_return_adv_error('基础参数缺失');
            }

            $hashids = new \getui\Demo();
             
            $res=db('Perman')->field('number')->where('id',$id)->find();


            if ($res['number']=='') {
                return ajax_return_adv_error('此用户数据异常1');
            }
            if (strlen($res['number'])!=32) {
                 return ajax_return_adv_error('此用户数据异常2');
            }

            $var=$hashids->pushMessageToSingle($res['number'],$params['advname'],$params['advduty']);

            return ajax_return_adv('发送成功');

        }

        if (!$id) {
            throw new Exception('缺少必要参数ID');
        }
        
        $res=db('advertise')->field('advname,advduty,id')->select();
        
        $this->view->assign('vo',$res);

        return $this->view->fetch();
    }
}
