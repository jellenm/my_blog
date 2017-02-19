<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> 验证码</title>


    <link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />





    <script src="/Public/Home/js/jquery.min.js"></script>





</head>
<body>
    
    <h2>这是头部</h2>


    
    <div class="yzm">
        <img src="/index.php/Home/Index/createVerify/" />
        <button id="change" >更换验证码</button>
    </div>
    <br>
    <br>
    <div class="yz">
        <input type="text" name="yz" id="yz" placeholder="请填写验证码" />
        <input type="submit" value="提交" id='tj' />
    </div>


    
    <p>这是脚部</p>


    <script>
        $('#change').click(function(){
            $('img').attr('src','/index.php/Home/Index/createVerify/'+'?'+Math.random());
        });
        $('#tj').click(function(){
            var code = $('#yz').val();
            if(!code){ console.log('验证码不能为空');return;}
            $.ajax({
                type:'POST',
                url:'/index.php/Home/Index/checkVerify',
                data:{
                    code:code
                },
                success:function(data){
                    console.log(data);
                },
                error:function(data){
                    console.log(data);
                }
            });

        });
    </script>


</body>
</html>