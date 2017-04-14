<?php
/*  获取
 *
 */
function get_header_blog($type){
    $lists = D('Type')->where('pid='.$type)->select();
    return $lists;
}