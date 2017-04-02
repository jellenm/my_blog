<?php
namespace Admin\Controller;
use Think\Controller;

class NavigationController extends Controller{
    public function index(){
        $where['status'] = 1;
        $where['type'] = 2;
        $res = D('Menu')->findAllMenu($where);
        $this->assign('menus',$res);


        $this->display();
    }
}