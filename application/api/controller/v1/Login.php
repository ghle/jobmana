<?php 

namespace app\api\controller\v1;

use app\api\Controller;



use app\common\lib\IAuth;

use think\Cache;
class Login extends Common
{
	/**
	 * [login 用户登录接口]
	 * @author lucky
	 * @DateTime 2018-08-18T11:30:10+0800
	 * @return   [type]                   [description]
	 */
	public function index()
	{
		
		
		// 验证参数
		$param=$this->params;
		// $token=$param['access_token'];
		$username=$param['username'];
		$password=$param['password'];

		// 验证手机格斯
		if (empty($username)) {
			$this->return_msg(0,'用户名不能为空',[]);	
		}
		if (!$this->isMobile($username)) {
			$this->return_msg(0,'用户名不正确1',[]);
		}
		if (empty($password)) {
			$this->return_msg(0,'密码不能为空',[]);	
		}
		// if (empty($token)) {
		// 	$this->return_msg(0,'token不能为空',[]);	
		// }
		
		$res=db('perman')->where('telphone',$username)->find();
			
	//1.用户不存在

		// 用户注册（添加token）---后续添加

		if (!isset($res)) {
			$this->return_msg(0,'该用户不存在',[]);
		}

		if ($res['telphone']!=$username) {
			$this->return_msg(0,'用户名不正确2',[]);
		}
		if ($res['number']!=$password) {
			$this->return_msg(0,'密码不正确',[]);
		}

	//2.用户存在 登录
		$updattoken=IAuth::setAppLoginToken();

		$data=[
			'token'=>$updattoken,
			'update_time'=> strtotime("-".'5'." days"),
		];

		$result=db('perman')->where('telphone',$username)->update($data);

		if (!$result) {
			$this->return_msg(0,'登陆失败，请重新输入',[]);
		}else{
			$result = [
                'token' =>$updattoken,
            ];
			$this->return_msg(0,'登陆成功哦',$result);
		}

	}

	
}


 ?>