<?php 
namespace app\common\lib\exception;

use think\exception\Handle;

class ApiHandleException extends Handle
{

     public $httpCode = 500;

	 public function render(\Exception $e)
    {
        // 如果开启debug则使用以下方法
        if(config('app_debug') == true) {
            return parent::render($e);
        }

        // throw new ApiException("",);实例化APiexcetion 时调用如下方法
        
        if ($e instanceof ApiException) {
            $this->httpCode = $e->httpCode;
        }
        return return_msg(0,$e->getMessage(),[],$e->httpCode);
    }

    


}




 ?>