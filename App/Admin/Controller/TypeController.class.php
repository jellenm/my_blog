<?php
namespace Admin\Controller;
use Think\Controller;

class TypeController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $navigationLists = M('Navigation')->select();
            $this->assign('navigation',$navigationLists);

            $res = M('type')->select();
            $this->assign('types',$res);

            $this->display();
        }
    }

    public function add(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);


            $navigationLists = M('Navigation')->select();
            $this->assign('navigation',$navigationLists);

            $this->display();
        }
    }

    public function addEve(){
        if(checkSession('UserInfo')){
            if(I('get.title')){
                $data['title'] = I('get.title');
                $data['pid'] = I('get.pid');
                $res = M('Type')->add($data);
                if($res){
                    returnJson(1,'添加成功');
                }else{
                    returnJson(0,'添加失败');
                }

            }else{
                $this->error('非法操作','/Admin/Type/index');
            }
        }
    }

}