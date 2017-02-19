<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function upImg(){
        if(count($_FILES)){
            $upload = new \Think\Upload();
            $upload->maxSize = 1000000;
            $upload->exts = array('png','gif','jpg');
            $upload->rootPath = './Uploads/';
            $info = $upload->upload();

            if($info){
                $path ='./Uploads/'.$info['file']['savepath'].$info['file']['savename'];
                $this->assign('upSuccess','上传成功');
                $this->assign('path',$path);
                $this->display();
            }else{
                $this->assign('upError',$upload->getError());
                $this->display();
            }
        }else{
            $this->assign('upError','请上传文件');
            $this->display();
        }
    }

    public function verify(){
        $this->display();
    }

    public function createVerify(){
        $config = array(
            'expire'=>1200,
            'fontSize'=>25,
            'useNoise'=>true,
            'useCouve'=>true,
        );
        $pageVerify = new \Think\Verify($config);
        $pageVerify->entry();
    }

    public function checkVerify(){
        $returnStr = array();
        $code = I('post.code');
        $res = check_verify($code);

        if($res){
            $returnStr['status'] = 'ok';
            $returnStr['str'] = '验证成功';
            $returnStr['res'] = $res;
        }else{
            $returnStr['status'] = 'false';
            $returnStr['str'] = '验证失败';
            $returnStr['res'] =$res;
        }
        $this->ajaxReturn($returnStr);
    }

    public function imgHandle(){
        $this->display();
    }

}