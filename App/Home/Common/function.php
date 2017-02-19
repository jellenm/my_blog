<?php
function check_verify($code,$id=''){
    $info = new \Think\Verify();
    return $info->check($code,$id);
}