<?php
namespace app\order\model;

use think\Model;
use \think\Validate;
use think\Db;

class Skin extends Model
{
	//商品列表分页并根据ajax修改
	public function skinList()
	{
		$list = Db::name('skin')
		->order('price','desc')
		->paginate(8);
		return $list;
	} 
	//精品皮肤
	public function skinJp()
	{
		$jp = Db::name('skin')
		->order('price','desc')
		->limit(1)
		->select();
		return $jp;
	}
}