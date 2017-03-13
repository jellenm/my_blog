<?php
namespace Admin\Model;
use Think\Model;

class RecommendModel extends Model{
    private $_db;
    public function __construct(){
        $this->_db = M('Recommend');
    }
    public function findAllRecommends(){
        $res = $this->_db->order(array('id'))->select();
        return $res;
    }
    public function getRecommend($id){
        $res = $this->_db->where("id= '%d' ",$id)->select();
        return $res;
    }
    public function editRecommend($arr){
        $res = $this->_db->save($arr);
        return $res;
    }
    public function closeRecommend($data){
        $res = $this->_db->save($data);
        return $res;
    }

}