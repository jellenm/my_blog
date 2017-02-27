<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(checkSession('UserInfo')){
            $this->display();
        }
    }
}