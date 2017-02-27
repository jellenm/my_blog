<?php
namespace Admin\Controller;
use Think\Controller;

class MenuController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $this->display();
        }
    }

    public function add(){
        if(checkSession('UserInfo')){
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

        $res = D('Menu')->add($data);
        if($res){
            returnJson(1,'添加成功');
        }else{
            returnJson(0,'添加失败');
        }
    }


}