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

//上传图片到服务器路径
function upload_article_img($maxSize=3145728,$savePath='',$saveName){
    $rootPath = C('UPROOTPATH');
    if(!$saveName){
        $saveName = time().mt_rand(10,20);
    }
    $config = array(
        'maxSize' => $maxSize,
        'rootPath' =>$rootPath,
        'savePath' =>$savePath,
        'saveName' =>$saveName
    );
    $upload = new \Think\Upload($config);
    $info = $upload->upload();
    if(!$info){
        $res['status'] = 0;
        $res['msg'] = $upload->getError();
    }else{
        $res['status'] = 1;
        $res['msg'] = $info;
    }
    return $res;
}

