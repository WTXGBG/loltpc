<?php
namespace app\admin\model;

use think\Model;
use \think\Validate;
use think\Db;

class Skin extends Model
{
    //用户注册
   public function skinList()
    {
        
      
            /*$data = [
                        'name' => $_POST['name'],
                        'phone' => $_POST['phone'],
                        'password' => md5($_POST['password']),
                        'xingming' => $_POST['xingming'],
                        'cardid' => $_POST['cardid'],
                        'createtime' => time(),
                    ];*/
            $list = Db::name('skin')
            ->select();
            dump($list);
        
    } 

}