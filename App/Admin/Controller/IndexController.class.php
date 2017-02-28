<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $this->display();
        }
    }
}