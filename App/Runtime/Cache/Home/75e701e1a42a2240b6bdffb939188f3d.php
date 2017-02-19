<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> 图片上传</title>


    <link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />





    <script src="/Public/Home/js/jquery.min.js"></script>





</head>
<body>
    
    <h2>这是头部</h2>


    
    <form method="post" action="<?php echo U('Home/Index/upImg');?>" enctype="multipart/form-data">
        <input type="file" name="file" />
        <br>
        <br>
        <br>
        <input type="submit" value="提交" />
    </form>
    <?php if($upError): ?><div>
            <?php echo ($upError); ?>
        </div><?php endif; ?>
    <?php if($upSuccess): ?><div>
            <?php echo ($upSuccess); ?>
            路劲为：<?php echo ($path); ?>
        </div><?php endif; ?>


    
    <p>这是脚部</p>



</body>
</html>