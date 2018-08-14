<?php 

namespace app\api\controller;

use app\common\lib\exception\ApiException;

use app\common\lib\Aes;

use app\common\lib\IAuth;

use app\api\Controller;


class Test extends Common
{
	
	public function index()
	{
		// 一级数据异常校验 validate 
		$param=$this->params;

		$param['time']=IAuth::timestamp();

		//1、 二级数据异常校验----> 逻辑处理异常校验(异常抛出案例)
		// if ($param['mt']!=1) {
		// 	throw new ApiException("数据不合法哦", 400);
		// }
		// 2、加解密算法案例
		// $enstr="username=wangjinlu&password=bffa4e4683558905ace9581770c18a59&age=24";
		// $destr="6sQ6kZr4inenqWOvTohyTLNLkmCY1zWWWRuYWXb0u8a6qbCBsveNCLgW5a2QlOhAeipFn2DzikFO5tlPZCjA1tdNyRz6mBscuIWwdbgB49s=";
		// echo (new Aes())->encrypt($enstr);
		// echo (new Aes())->decrypt($destr);
		// 3、生成sign
	
		// echo IAuth::setSign($param);
		// return return_msg(0,'OK',$param,201);
		

	}
	
}

 ?>