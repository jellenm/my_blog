<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);

        $latelyLists = D('article')->where('gid=1')->order('creattime')->limit(6)->select();
        $this->assign('blatelyLists',$latelyLists);

        $latelyLists = D('article')->where('gid=2')->order('creattime')->limit(4)->select();
        $this->assign('slatelyLists',$latelyLists);

        $this->display();
    }
    public function add(){

        $this->display();
    }
}