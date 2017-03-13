<?php
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
    private $_db = '';
    public function __construct(){
        $this->_db = M('Article');
    }
    public function getAllArticle(){
        $res = $this->_db->select();
        return $res;
    }
}