<?php 

namespace app\api\controller\v1;

use app\api\Controller;

use app\common\lib\IAuth;

class UserAuth extends Common
{
	// 登录用户的基本信息
	public $user=[];

	// 初始化数据
	public function _initialize()
	{
		parent::_initialize();

		if (!$this->islogin()) {

			$this->return_msg(0,'您没有登录',401);
		}
	}
	// 判断是否登录
	public function islogin()
	{
		
		if (empty($this->params['access_token'])) {
			return false;
		}
		
		$res=db('perman')->where(['token'=>$this->params['access_token']])->find();
		
		if (empty($res)){

			return false;
		}
		// 判断是否过期
		if (time()>$res['update_time']) {
			return false;
		}

		$this->user=$res;

		return true;
	}

}
 ?>