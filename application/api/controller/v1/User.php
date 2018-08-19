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

class User extends UserAuth {

    /**
     * 获取用户信息
     * 用户的基本信息非常隐私、需要加密处理
     */
    public function read() { 
        $this->return_msg(1,'数据返回成功',$this->user);
    }

}