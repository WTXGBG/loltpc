<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\admin\model\Skin as SkinModel;
use fast\Tree;

/**
 * 分类管理
 *
 * @icon fa fa-list
 * @remark 用于统一管理网站的所有分类,分类可进行无限级分类
 */
class Skin extends Backend
{

    protected $model = null;
    protected $skinlist = [];
    protected $noNeedRight = ['selectpage'];

    public function _initialize()
    {
        parent::_initialize();
        $this->request->filter(['strip_tags']);
        $this->model = model('Skin');

        $tree = Tree::instance();
        $tree->init($this->model->order('weigh desc,id desc')->select(), 'pid');
        $this->skinlist = $tree->getTreeList($tree->getTreeArray(0), 'name');
        $skindata = [0 => ['type' => 'all', 'name' => __('None')]];
        foreach ($this->skinlist as $k => $v)
        {
            $skindata[$v['id']] = $v;
        }
        $this->view->assign("flagList", $this->model->getFlagList());
        $this->view->assign("typeList", SkinModel::getTypeList());
        $this->view->assign("parentList", $skindata);
    }

    /**
     * 查看
     */
    public function index()
    {
        if ($this->request->isAjax())
        {
            $search = $this->request->request("search");
            //构造父类select列表选项数据
            $list = [];
            if ($search)
            {
                foreach ($this->skinlist as $k => $v)
                {
                    if (stripos($v['name'], $search) !== false || stripos($v['nickname'], $search) !== false)
                    {
                        $list[] = $v;
                    }
                }
            }
            else
            {
                $list = $this->skinlist;
            }
            $total = count($list);
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }

    /**
     * Selectpage搜索
     * 
     * @internal
     */
    public function selectpage()
    {
        return parent::selectpage();
    }

}
