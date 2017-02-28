<?php

//返回数据
function returnJson($status,$data){
    $datas['status'] = $status;
    $datas['msg'] = $data;
    exit(json_encode($datas));
}

//登陆或者注册密码转为md5值
function passwordToMd5($password){
    $code = C('Md5STRING');
    $str = $password.$code;
    return md5($str);
}

//验证是否存在session值
function checkSession($sessionName){
    if(session($sessionName)){
        return true;
    }else{
        redirect('/Admin/Login/login',1,'您还没有登陆');
    }
}

