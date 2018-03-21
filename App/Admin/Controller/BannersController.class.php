<?php
namespace Admin\Controller;
use Think\Controller;


class BannersController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $menus = D('menu')->findAllMenu($where);
            $this->assign('menus',$menus);


            $banners = D('banners')->select();
            $this->assign('banners',$banners);
            $this->display();

        }
    }
    public function add(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $menus = D('menu')->findAllMenu($where);
            $this->assign('menus',$menus);


            $this->display();
        }
    }
    public function addBanner(){
        if(checkSession('UserInfo')){
            $data = I('post.');
            $where['title'] = $data['title'];
            $where['description'] = $data['description'];
            $where['path'] = $data['thumb'];
            $where['createtime'] = date('Y-m-d H:i:s');

            $res = M('Banners')->add($where);
            if($res){
                returnJson(1,'创建成功');
            }else{
                returnJson(0,'创建失败');
            }
        }
    }
    public function delete(){
        if(checkSession('UserInfo')){
            $data = I('post.datas');
            $str = '';
            if($data){
                foreach ($data as $v){
                    $where['id'] = $v;
                    $resL = M('Banners')->where($where)->delete();
                    if($resL){
                        $str .= $v.'，';
                    }
                }
                $str .= '删除成功';
                returnJson(1,$str);
            }else{
                returnJson(0,'删除失败');
            }
        }

    }
    public function edit(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $menus = D('menu')->findAllMenu($where);
            $this->assign('menus',$menus);

            $where['id'] = I('get.id');
            $res = M('Banners')->where($where)->select();

            if($res){
                $this->assign('banner',$res[0]);

                $this->display();
            }else{
                $this->error('没有该文章','/Admin/Banners/index');
            }

        }
    }
    public function editBanner(){
        if(checkSession('UserInfo')){
            $postList = I('post.');
            $where['id'] = $postList['id'];
            $where['title'] = $postList['title'];
            $where['description'] = $postList['description'];
            $where['path'] = $postList['path'];

            $res = M('Banners')->save($where);
            if($res){
                returnJson(1,'编辑成功');
            }else{
                returnJson(0,'编辑失败');
            }
        }
    }

}