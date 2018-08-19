<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller\v1;

use think\Controller;


class Time extends Controller {

    public function index() {
        return return_msg(1, 'OK', time());
    }
}