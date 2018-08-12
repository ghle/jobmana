<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;

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

        $school= db('departman')->select();

        $this->view->assign('school',$school);

        return $this->view->fetch();
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
