<?php
namespace app\admin\controller;

use app\admin\model\Skin as SkinModel;

use think\Controller;
use \think\Validate;
class Skin extends Controller
{

    protected $skin;
    public function  _initialize()
    {
        $this->skin = new SkinModel;
    }
//==================================================
    public function skin()
    {
   /* //判断用户名是否存在
        $name = $this->request->param('name');
        $result = $this->user->get(['name'=>$name]);
        if ($result){
            return json_encode(['code'=>1, 'register'=>'yijingcunzai']);
        }
        elseif($name&&empty($_POST)) 
        {
            return json_encode(['code'=>0, 'register'=>'keyizhuce']);   
        }
    //判断验证码是否正确
        //验证验证码
        $validate = new Validate([
            'captcha|验证码'=>'require|captcha'
            ]);
        $data = [
                    'captcha'=>input('yzm'),
                ];
        /*if (!$validate->check($data)&&!empty($_POST)) 
            {
                return 0;
            }
            elseif($validate&&!empty($_POST))
            {
                return 1;
      /*      }*/
        /*if ($validate->check($data)) 
            {
                return 1;
            }
            elseif(!$validate->check($data)&&!empty($_POST))
            {
                return 0;
            }*/

    //==================================================
       $re = $this->skin->skinList();
        return $this->fetch();
    }
}