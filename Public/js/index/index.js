
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

$('#menu_add').click(function(){
    var category_name = $('#category_name').val();
    var category_type = $('#category_type').val();
    var category_m = $('#category_m').val();
    var category_c = $('#category_c').val();
    var category_a = $('#category_a').val();
    var category_status = $('#category_status').val();

    console.log(category_name,category_type,category_m,category_c,category_a,category_status)

    if(!$.trim(category_name)){
        layerTool.error('请输入正确的菜单名');
        return;
    }
    if(!$.trim(category_type)){
        layerTool.error('请输入正确的类型');
        return;
    }
    if(!$.trim(category_m)){
        layerTool.error('请输入正确的模块');
        return;
    }
    if(!$.trim(category_c)){
        layerTool.error('请输入正确的控制器');
        return;
    }
    if(!$.trim(category_a)){
        layerTool.error('请输入正确的操作名');
        return;
    }
    if(!$.trim(category_status)){
        layerTool.error('请输入正确的状态');
        return;
    }

    $.ajax({
        url:'/Admin/Menu/addEve',
        type:'GET',
        data:{'title':category_name,'tm':category_m,'tc':category_c,'ta':category_a,'status':category_status,'type':category_type},
        success:function(data){
            console.log(data);
        },
        error:function(){
            
        }
    })

})
