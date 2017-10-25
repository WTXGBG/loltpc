<?php
namespace app\order\controller;

use app\order\model\User as UserModel;

use think\Controller;
use \think\Validate;

class Tpcsy extends Controller
{
	//protected $user;
	public function _initialize()
	{
		
	}
	public function tpcsy()
	{
		return $this->fetch();
	}
	

}