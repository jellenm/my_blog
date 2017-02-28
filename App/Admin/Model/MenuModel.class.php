<?php
namespace Admin\Model;
use Think\Model;

class MenuModel extends Model{
    private $_db ;

    public function __construct(){
        $this->_db = M('Menu');
    }
    public function add($data){
        $res = $this->_db->add($data);
        return $res;
    }
    public function findAllMenu($where=array()){
        $res =$this->_db->order(array('status','order'=>'desc'))->where($where)->select();
        return $res;
    }
    public function menuPage($where,$firstRow,$listRow){
        $res = $this->_db->where($where)->order(array('status','order'=>'desc'))->limit($firstRow,$listRow)->select();
        return $res;
    }
    public function orderMenu($get){
        $str = '';
        foreach ( $get as $key=>$value){
            $data['order'] = $value;
            $res = $this->_db->where('menu_id='.$key)->save($data);
            if($res){
                $str .= $key.'、';
            }
        }
        return $str;
    }
    public function editMenu($data){
        $res = $this->_db->save($data);
        return $res;
    }
    public function closeMenu($id){
        $data['status'] = 2;
        $res = $this->_db->where('menu_id='.$id)->save($data);
        return $res;
    }

}