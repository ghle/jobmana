<?php
/**
 * tpAdmin [a web admin based ThinkPHP5]
 *
 * @author yuan1994 <tianpian0805@gmail.com>
 * @link http://tpadmin.yuan1994.com/
 * @copyright 2016 yuan1994 all rights reserved.
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */


return [
    'model_path' => 'common',
    'validate_path' => 'common',

    'aeskey' => 'sgg45747ss223455',//aes 密钥 , 服务端和客户端必须保持一致

    'apptypes'=>[ // 手机类型
    	'ios',
    	'android'
    ],
    'app_sign_time' => 10000000000,// sign失效时间
    'app_sign_cache_time' => 20,// sign 缓存失效时间
];
