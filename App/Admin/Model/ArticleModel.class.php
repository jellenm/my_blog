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
            $where['content'] = $data['content'];
            $where['pid'] = $res;
            $result = M('Content')->add($where);
        }
        if($res && $result){
            return true;
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
            $resL = $this->_db->where($where)->select();
            $wherec['pid'] = $resL[0]['id'];
            if($v){
                $res1 = $this->_db->where($where)->delete();
                $resC = M('Content')->where($wherec)->delete();
                if($resC && $res1){
                    array_push($arr,$v);
                }
            }
        }
        return $arr;

    }
    public function findArticlefromId($id){
        if($id){
            $res = $this->_db->where('id='.$id)->select();
            $content = M('content')->where('pid='.$id)->select();
            if($res&&$content){
                $res[0]['content'] = '"'.htmlspecialchars_decode($content[0]['content']).'"';
                return $res[0];
            }else{
                return false;
            }
        }
    }
}