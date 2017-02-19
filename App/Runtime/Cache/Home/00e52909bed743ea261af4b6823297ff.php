<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>jellen</title>


    <link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />





    <script src="/Public/Home/js/jquery.min.js"></script>





</head>
<body>
    
    <h2>这是头部</h2>


    
    上传文件：<a href="<?php echo U('Index/upImg');?>" >上传文件页面</a><br><br>
    验证码功能：<a href="<?php echo U('Index/verify');?>">验证码页面</a><br><br>
    图像处理：<a href="<?php echo U('Index/imgHandle');?>">图像处理页面</a><br><br>


    
    <p>这是脚部</p>



</body>
</html>