<?php

namespace app\common\lib;
use app\common\lib\Aes;
use think\Cache;
/**
 * Iauth相关
 * Class IAuth
 */
class IAuth {

    /**
     * 生成每次请求的sign
     * @param array $data
     * @return string
     */
    public static function setSign($data = []) {
        // 1 按字段排序
        ksort($data);
        // 2拼接字符串数据  &   
        //http_build_query()功能 
            //$data=[
            //  'name'=>'wnagjinlu',
            //  'age'=>24
            //] 
            //转换成 name=wangjinlu&age=24
        $string = http_build_query($data);
        
        // 3通过aes来加密
        $string = (new Aes())->encrypt($string);

        return $string;
    }

    /**
     * 检查sign是否正常
     * @param array $data
     * @param $data
     * @return boolen
     */
    public static function checkSignPass($data) {

        $str = (new Aes())->decrypt($data['sign']);

        if(empty($str)) {
            return false;
        }

        // diid=xx&app_type=3
        parse_str($str, $arr);

        // 基于不同的场景验证不同的参数
       
        if(!is_array($arr) || empty($arr['target'])|| $arr['target'] != $data['target']) {
            return false;
        }

        if(!config('app_debug')) {
            if ((time() - ceil($arr['time'] / 1000)) > config('app.app_sign_time')) {
                return false;
            }
            // echo Cache::get($data['sign']);exit;
            // 唯一性判定
            if (Cache::get($data['sign'])) {
                return false;
            }
        }
        return true;
    }

    /**
     * 设置登录的token  - 唯一性的
     * @param string $phone
     * @return string
     */
    public  static function setAppLoginToken($phone = '') {
        $str = md5(uniqid(md5(microtime(true)), true));
        $str = sha1($str.$phone);
        return $str;
    }

/**
 * @function [13位时间戳]
 * @Author   lucky
 * @DateTime 2018-08-13
 * @return   [type]        [description]
 */
    public  static function timestamp()
    {
       list($t1, $t2) = explode(' ', microtime());
        return $t2 . ceil($t1 * 1000);
    }

}