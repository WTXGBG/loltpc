<?php
namespace app\order\controller;

use app\order\model\Skin as SkinModel;
use app\order\model\Entity as EntityModel;

use think\Controller;
use \think\Validate;

class Skin extends Controller
{
	protected $skin;
	protected $entity;
	public function _initialize()
	{
		$this->skin = new SkinModel;
		$this->entity = new EntityModel;
	}
//========================================
	public function skin()
	{
		$list = $this->skin->skinList();
		$this->assign('list', $list);
	//精品皮肤最贵的
		$jp = $this->skin->skinJp();
		$this->assign('jp',$jp[0]);
	//三个热门周边
		$rm = $this->entity->entityRm();
		$this->assign('rm',$rm);
	//=================================
		return $this->fetch();
	}
	
	
}