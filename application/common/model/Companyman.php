<?php
namespace app\common\model;

use think\Model;

class Companyman extends Model
{
    public function user()
    {
        return $this->hasOne('AdminUser', "id", "uid", ["id" => "uuid"]);
    }
}


?>