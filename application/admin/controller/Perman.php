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
        $item = db('Perman')->alias('w')->field($field)
         
            ->where($map)->find();


        $this->view->assign('vo', $item);

        return $this->view->fetch();
    }

     public function publish()
    {
        $hashids = new \getui\Demo(); 
         // $hashids->pushMessageToApp();
        $id = $this->request->param('id');
        if (!$id) {
            throw new Exception('缺少必要参数ID');
        }
        // $res=db('Perman')->where('id',$id)->find();
        // dump($res);die;//number
        // $hashids->pushMessageToSingle($res['number']);

        $res=db('advertise')->field('advname,advduty,id')->where('id',$id)->select();
        
        $this->view->assign('vo',$res);

        return $this->view->fetch();
    }
}
