<?php
namespace Admin\Model;
use Think\Model;

class MenuModel extends Model{
    private $_db ;

    public function __construct(){
        $this->_db = M('Menu');

    }

    public function add($data){

        $res = $this->_db->save($data);
        dump($res);
        return $res;
    }
}