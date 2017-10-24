<?php
namespace app\home\controller;

//use app\home\model\User as UserModel;

use think\Controller;
use \think\Validate;
class Tpcsy extends Controller
{

	/*protected $user;
	public function  _initialize()
	{
		$this->user = new UserModel;
	}*/
//==================================================
	public function tpcsy()
	{


	//==================================================
		//$re = $this->user->yonghuZhuce();
		return $this->fetch();
	}
}