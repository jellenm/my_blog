<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class MenuController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $where = array();
            if(I('get.type')){
                $where['type'] = I('get.type');
                $this->assign('type',I('get.type'));
            }
            $res = D('Menu')->findAllMenu($where);
            $counts = count($res);
            $page = new Page($counts,20);
            $pageShow = $page->show();
            $lists = D('Menu')->menuPage($where,$page->firstRow,$page->listRows);
            $this->assign('menu',$lists);
            $this->assign('page',$pageShow);
            $this->display();
        }
    }

    public function add(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $this->display();
        }
    }

    public function addEve(){
        $data['title'] = I('get.title');
        $data['m'] = I('get.tm');
        $data['a'] = I('get.ta');
        $data['c'] = I('get.tc');
        $data['status'] = I('get.status');
        $data['type'] = I('get.type');


        if(!trim($data['title'])){
            returnJson(0,'请输入正确的菜单名');
            return;
        }
        if(!trim($data['type'])){
            returnJson(0,'请输入正确的类型');
            return;
        }
        if(!trim($data['m'])){
            returnJson(0,'请输入正确的模块');
            return;
        }
        if(!trim($data['c'])){
            returnJson(0,'请输入正确的控制器');
            return;
        }
        if(!trim($data['a'])){
            returnJson(0,'请输入正确的操作名');
            return;
        }
        if(!trim($data['status'])){
            returnJson(0,'请输入正确的状态');
            return;
        }

        $res =D('Menu')->add($data);
        if($res){
            returnJson(1,'添加成功');
        }else{
            returnJson(0,'添加失败');
        }
    }

    public function orderMenu(){
        if(IS_GET){
            $get = I('get.arr');
            $res = D('Menu')->orderMenu($get);
            if($res == ''){
                returnJson(0,'修改失败！');
            }else{
                $res .= '修改成功';
                returnJson(1,'menu_id为'.$res);
            }
        }
    }

    public function edit(){
        if(checkSession('UserInfo')){
            if(I('get.id')){
                $where['status'] = 1;
                $where['type'] = 2;
                $res = D('Menu')->findAllMenu($where);
                $this->assign('menus',$res);

                $where2['menu_id'] = I('get.id');
                $res = D('Menu')->findAllMenu($where2);
                if($res){
                    $this->assign('menu',$res[0]);
                    $this->display();
                }else{
                    $this->error('菜单不存在','/Admin/Menu/index');
                }

            }
        }

    }

    public function editEve(){
        $data['title'] = I('get.title');
        $data['m'] = I('get.tm');
        $data['a'] = I('get.ta');
        $data['c'] = I('get.tc');
        $data['status'] = I('get.status');
        $data['type'] = I('get.type');
        $data['menu_id'] = I('get.menu_id');


        if(!trim($data['title'])){
            returnJson(0,'请输入正确的菜单名');
            return;
        }
        if(!trim($data['type'])){
            returnJson(0,'请输入正确的类型');
            return;
        }
        if(!trim($data['m'])){
            returnJson(0,'请输入正确的模块');
            return;
        }
        if(!trim($data['c'])){
            returnJson(0,'请输入正确的控制器');
            return;
        }
        if(!trim($data['a'])){
            returnJson(0,'请输入正确的操作名');
            return;
        }
        if(!trim($data['status'])){
            returnJson(0,'请输入正确的状态');
            return;
        }
        if(!trim($data['menu_id'])){
            returnJson(0,'不存在的菜单');
            return;
        }

        $res = D('Menu')->editMenu($data);
        if($res){
            returnJson(1,'修改成功！');
        }else{
            returnJson(0,'修改失败！');
        }
    }

    public function closeMenu(){
        $id = I('get.id');
        if($id ){
            $res = D('Menu')->closeMenu($id);
            if($res){
                $this->success('关闭成功！','/Admin/Menu/index');
            }else{
                $this->error('关闭失败！','/Admin/Menu/index');
            }
        }
    }


}