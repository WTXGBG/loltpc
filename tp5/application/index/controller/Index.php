<?php

namespace app\index\controller;

// use app\common\controller\Frontend;
use think\Controller;

class Index extends controller
{
    public function index()
    {
        return $this->fetch();
    }
}
