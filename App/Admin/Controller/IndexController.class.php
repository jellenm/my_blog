<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        if(checkSession('UserInfo')){
            $this->display();
        }else{
            $this->error('您还没有登陆','/Admin/Login/login');
        }
    }
}