<?php
namespace app\order\model;

use think\Model;
use \think\Validate;
use think\Db;

class Entity extends Model
{
	//热门周边top3
	public function entityRm()
	{
		$rm = Db::name('entity')
		->order('price','desc')
		->limit(3)
		->select();
		return $rm;
	}
	

}