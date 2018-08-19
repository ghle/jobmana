<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller\v1;

use think\Controller;
use app\common\lib\exception\ApiException;
use app\common\lib\Aes;
use app\common\lib\IAuth;

class Index extends Common{

	/**
	 * [首页栏目通知或者新闻信息 description]
	 * @param string $value [description]
	 */
    public function publiclist($from=0,$size=2)
    {	

    	// 不可无限制的访问 在common中做了限制
    	$order=[
    		'id'=>'desc'
    	];
    	$res=db('publog')
	    	->field('tittle,content')
	    	->where(['status'=>0,'isdelete'=>0])
	    	->limit($from, $size)
	    	->order($order)
	    	->select();

    	$this->return_msg(1,'数据返回成功',$res);
    }

}