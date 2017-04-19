<?php
namespace Home\Controller;
class EmptyController extends IndexController {

    public function index(){
        $this->redirect('Index/error');
    }

    public function _empty(){

        $this->redirect('Index/error');
    }
}