<?php
namespace Admin\Controller;
use Think\Controller;

class RecommendController extends Controller{
    public function index(){
        if(checkSession('UserInfo')){
            $where['status'] = 1;
            $where['type'] = 2;
            $res = D('Menu')->findAllMenu($where);
            $this->assign('menus',$res);

            $recomments = D('Recommend')->findAllRecommends();
            $this->assign('recommends',$recomments);
            $this->display();
        }

    }

    public function edit(){
        if(checkSession('UserInfo')){
            if(I('get.id')){
                $where['status'] = 1;
                $where['type'] = 2;
                $res = D('Menu')->findAllMenu($where);
                $this->assign('menus',$res);

                $id = I('get.id');
                $res = D('Recommend')->getRecommend($id);
                $this->assign('recommend',$res[0]);
                $this->display();
            }else{
                $this->error('推荐位不存在','/Admin/Recommend/index');
            }
        }
    }
    public function getEdit(){
        $id = I('get.recommend_id');
        $title = I('get.category_name');
        $size = I('get.category_num');
        $status = I('get.category_status');
        if($id && $title && $size && $status){
            $data['id'] = $id;
            $data['title'] = $title;
            $data['size'] = $size;
            $data['status'] = $status;

            $res = D('Recommend')->editRecommend($data);
           if($res){
               returnJson(1,'修改成功');
           }else{
               returnJson(2,'修改失败');
           }
        }else{
            $this->error('修改失败','/Admin/Recommend/index');
        }
    }
    public function closeRecommend(){
        if(checkSession('UserInfo')){
            if(I('get.id')){
                $data['id'] = I('get.id');
                $data['status'] = 2;
                $res = D('Recommend')->closeRecommend($data);
                if($res){
                    $this->success('关闭成功','/Admin/Recommend/index');
                }else{
                    $this->success('关闭失败','Admin/Recommend/index');
                }
            }else{
                $this->error('不合法请求',U('/Admin/Recommend/index'));
            }
        }
    }
}