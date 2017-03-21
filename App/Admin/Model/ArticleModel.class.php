<?php
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{
    private $_db = '';
    public function __construct(){
        $this->_db = M('Article');
    }
    public function getAllArticle($where){
        $res = $this->_db->where($where)->select();
        return $res;
    }
    public function addArticle($data){
        $res = $this->_db->add($data);
        if($res){
            $where['pid'] = $res;
            $where['content'] = $data['content'];
            $result = M('Content')->add($where);
            if($result){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }
    public function articlePageLists($firstRow,$listsRows){
        $res = $this->_db->limit($firstRow.','.$listsRows)->select();
        return $res;
    }
    public function deleteArticle($lists){
        $arr = array();
        foreach ($lists as $v){
            $where['id'] = $v;
            $resL = $this->_db->where($where)->delete();
            if($v){
                $wherec['pid'] = $v;
                $resC = M('Content')->where($wherec)->delete();
                if($resC){
                    array_push($arr,$resC);
                }
            }
        }
        return $arr;

    }
}