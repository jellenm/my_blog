
$('#loginSubmit').click(function(e){
    var username = $.trim($('input[name=username]').val());
    var password = $.trim($('input[name=password]').val());

    if(!username){
        layerTool.error('请填写用户名!');return;
    }
    if(!password){
        layerTool.error('请填写密码!');return;
    }
    if(password.length < 6){
        layerTool.error('密码要超过六位!');return;
    }

    var data = {
        'username':username,
        'password':password
    };
    $.ajax({
        url:'/Admin/Login/login',
        type:'POST',
        data:data,
        success:function(data){
            var msg = JSON.parse(data);
            if(msg.status ){
                layerTool.success('登陆成功！',function(){ window.location.href='/Admin/Index/index' });
            }else{
                layerTool.error(msg.msg);
            }
        },
        error:function(){
            layerTool.error('登陆失败！');
        }
    })





    

});


$('#logout').click(function(){
    layerTool.confirm('确定退出？','退出成功',function(){
        $.ajax({
            url:'/Admin/Login/logout',
            success:function(data){
                var res = JSON.parse(data);
                if(res.status == 1){
                    window.location.href='/Admin/Login/login';
                }else{
                    layerTool.error('退出失败');
                }
            },
            error:function(){
                layerTool.error('退出失败');
            }
        })
    })
    

});

