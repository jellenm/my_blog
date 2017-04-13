<?php
namespace Home\Controller;
use Think\Controller;

class BlogController extends Controller{
    public function index($type){
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);

        if($type == '0'){
            $lists = D('Article')->where('gid=1')->select();
        }else{
            $data['title'] = $type;
            $id = D('Type')->where($data)->select();
            $lists = D('article')->where('pid='.$id[0]['id'])->select();
        }
        $this->assign('lists',$lists);
        $this->display();
    }
    public function article($id){
        dump($id);exit;
    }

    public function read($id){
        dump($id);exit;
    }


}