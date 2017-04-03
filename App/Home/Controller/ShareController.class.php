<?php
namespace Home\Controller;
use Think\Controller;

class ShareController extends Controller{
    public function index(){
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);

        $this->display();
    }
}