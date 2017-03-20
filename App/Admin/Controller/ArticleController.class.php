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

            $res = D('Article')->getAllArticle($where['status']=1);
            $count = count($res);
            $page = new \Think\Page($count,25);
            $show = $page->show();
            $lists =D('Article')->articlePageLists($page->firstRow,$page->listRows);
            $this->assign('articles',$lists);
            $this->assign('page',$show);
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
    public function uploadArticleImg(){
        $res = upload_article_img();
        if($res['status'] == 1){
            $info = $res['msg']['wangEditorH5File'];
            $path = '/Uploads/'.$info['savepath'].$info['savename'];
            echo $path;
        }

    }
    public function addArticle(){
        $data = I('post.');
        $res = D('Article')->addArticle($data);
        if($res){
            returnJson(1,'创建成功');
        }else{
            returnJson(0,'创建失败');
        }
    }

}