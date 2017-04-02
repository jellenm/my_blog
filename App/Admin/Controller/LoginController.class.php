<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function login(){
        if(IS_POST){
            $username = I('post.username');
            $password = I('post.password');
            if(!trim($username)){
                $msg['msg'] = '请输入正确的用户名！';
                returnJson(0,$msg);
            }
            if(!trim($password)){
                $msg['msg'] = '请输入正确的用户名！';
                returnJson(0,$msg);
            }
            $password = passwordToMd5($password);

            $Dadmin = D('Admin');
            $res = $Dadmin->checkUserByPwd($username,$password);

            if($res){
                session('UserInfo',$username);
                $Dadmin->loginTimeRecord($res['id']);
                returnJson(1,'登陆成功');
            }else{
                returnJson(0,'用户名或者密码错误');
            }
        }else{
            $this->display();
        }
    }

    public function logout(){
        session('UserInfo',null);
        returnJson(1,'退出成功');
    }

//    public function register(){
//        if(I('post.username') && I('post.password')){
//            $username = I('post.username');
//            $password = I('post.password');
//            $password = passwordToMd5($password);
//            $data['username'] = $username;
//            $data['password'] = $password;
//            $res = D('Admin')->register($data);
//
//            if($res){
//                returnJson(1,'注册成功');
//            }else{
//                returnJson(0,'注册失败');
//            }
//
//
//        }
//        $this->display();
//    }
    
}