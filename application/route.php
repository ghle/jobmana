<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

// 用户登陆
Route::post('api/:ver/login','api/:ver.Login/index');

// 用户信息
Route::post('api/:ver/user', 'api/:ver.user/read');

// 测试

Route::get('api/:ver/abc', 'api/:ver.test/index');

