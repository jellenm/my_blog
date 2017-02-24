<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

    private $_db = '123123';


    public function __construct(){
        $this->_db = M('Admin');
    }

    public function checkUserByPwd($username,$password){
        $data['username'] = $username;
        $data['password'] = $password;
        $res = $this->_db->where($data)->find();
        return $res;
    }

    public function loginTimeRecord($id){
        $time['lastlogintime'] = time();
        $time['lastloginip'] = get_client_ip();
        $this->_db->where('id='.$id)->save($time);
    }

}