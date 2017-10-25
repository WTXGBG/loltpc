<?php
namespace app\order\controller;

use think\Controller;
use \think\Validate;

class Entity extends Controller
{
	//protected $user;
	public function _initialize()
	{
		
	}
	
	public function entity()
	{
		return $this->fetch();
	}

}