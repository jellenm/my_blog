<?php
namespace Home\Controller;
use Think\Controller;

class ShareController extends Controller{
    public function index($type){
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);

        if($type == '0'){
            $lists = D('Article')->where('gid=2')->order('creattime desc')->select();
        }else{
            $data['title'] = $type;
            $id = D('Type')->where($data)->select();
            $lists = D('article')->where('pid='.$id[0]['id'])->order('creattime desc')->select();
        }
        $this->assign('lists',$lists);

        $latelyLists = D('article')->where('gid=2')->order('creattime desc')->limit(4)->select();
        $this->assign('latelyLists',$latelyLists);
        $this->display();
    }
    public function article($id){
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);

        $articleInfo = D('Article')->where('id='.$id)->select();
        $articleCon = D('Content')->where('pid='.$id)->field('content')->select();

        $this->assign('info',$articleInfo[0]);
        $this->assign('content',htmlspecialchars_decode($articleCon[0]['content']));

        $latelyLists = D('article')->where('gid=2')->order('creattime')->limit(4)->select();
        $this->assign('latelyLists',$latelyLists);

        $this->display();
    }
}