<?php
namespace Admin\Controller;
use Think\Controller;


class ArticleController extends Controller{
    public function index(){

        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $res = D('Recommend')->findAllRecommends();
            $this->assign('recommend',$res);

            $res = D('Article')->getAllArticle();
            $this->assign('articles',$res);
            $this->display();
        }


    }
    public function add(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $res = D('Type')->select();
            $this->assign('type',$res);

            $this->assign('username',session('UserInfo'));
            $this->display();
        }
    }

    public function uploadImg(){
        $res = upload_article_img();
        if($res['status'] == 1){
            $info = $res['msg']['upload_file'];
            $path = '/Uploads/'.$info['savepath'].$info['savename'];
            returnJson($res['status'],$path);
        }else{
            returnJson($res['status'],$res['msg']);
        }

    }

}