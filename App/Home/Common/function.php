<?php

function get_header_blog(){
    $lists = D('Type')->where('pid=1')->select();
    return $lists;
}