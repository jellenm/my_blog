<?php
namespace Admin\Controller;
use Think\Controller;

class NavigationController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $navigationLists = M('Navigation')->select();
            foreach ($navigationLists as $key => $navigation){
                $where['pid'] = $navigation['id'];
                $res = M('Type')->where($where)->select();
                $navigationLists[$key]['children'] = $res;

            }
            $this->assign('navigation',$navigationLists);
            $this->display();
        }
    }

    public function add(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            if(IS_POST){
                $title = I('POST.title');
                $where['title'] = $title;
                $res = M('Navigation')->add($where);
                if($res){
                    returnJson(1,'添加成功');
                }else{
                    returnJson(0,'添加失败');
                }
            }

            $this->display();
        }
    }

}