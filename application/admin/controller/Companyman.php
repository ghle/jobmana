<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Loader;


class Companyman extends Controller
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
        $item = Loader::model('Companyman')->alias('w')->field($field)
         
            ->where($map)->find();


        $this->view->assign('vo', $item);

        return $this->view->fetch();
    }


    /**
     * 格式化输出节点描述
     *
     * @param string $comment
     * @param array  $data
     *
     * @return array
     */
    private function parseComment($comment, array $data)
    {
        // 匿名函数递归，将多维数组转为二维数组
        $func = function (&$data) use (&$func) {
            foreach ($data as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $subK => $subV) {
                        $data[$k . '.' . $subK] = $subV;
                    }
                    unset($data[$k]);
                    $func($v);
                }
            }
        };
        $func($data);

        // 取出键值转为占位符
        $replace = array_keys($data);
        foreach ($replace as &$v) {
            $v = "{{$v}}";
        }

        return str_replace($replace, $data, $comment);
    }
}
