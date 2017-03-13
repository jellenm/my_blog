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

}