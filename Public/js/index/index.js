var allchecked = false;
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
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success('添加成功！',function(){
                    window.location.href='/Admin/Menu/index';
                })
            }else{
                layerTool.error('添加失败');
            }
        },
        error:function(){
            layerTool.error('网络连接失败！');
        }
    })

});

$('#menu_type').change(function(){
    var type = $('#menu_type').val();
    window.location.href = '/Admin/Menu/index/type/'+type;
});

$('#menu_order').click(function(){
    var arr = {};
    var menus = $('.menu_order');
    for(var i=0;i<menus.length;i++){
        var key = $(menus[i]).attr('data-id');
        var value = $(menus[i]).val();
        arr[key] = value;
    }

    $.ajax({
        url:'/Admin/Menu/orderMenu',
        type:'GET',
        data:{
            'arr':arr
        },
        success:function(data){
           var res = JSON.parse(data);
           if(res.status == 1){
               layerTool.success(res.msg,function(){
                   window.location.href='/Admin/Menu/index';
               });
           }else{
               layerTool.error('修改失败！');
           }
        },
        error:function(){
            layerTool.error('排序失败');
        }
    });
});

$('#menu_edit').click(function(){
    var category_name = $('#category_name').val();
    var category_type = $('#category_type').val();
    var category_m = $('#category_m').val();
    var category_c = $('#category_c').val();
    var category_a = $('#category_a').val();
    var category_status = $('#category_status').val();
    var category_menuid = $('#menu_id').val();

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
        url:'/Admin/Menu/editEve',
        type:'GET',
        data:{'title':category_name,'tm':category_m,'tc':category_c,'ta':category_a,'status':category_status,'type':category_type,'menu_id':category_menuid},
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success('修改成功！',function(){
                    window.location.href='/Admin/Menu/index';
                })
            }else{
                layerTool.error('修改失败');
            }
        },
        error:function(){
            layerTool.error('网络连接失败！');
        }
    })
});

$('#recommend_edit').click(function(){
    var category_name = $('#category_name').val();
    var category_num = parseInt($('#category_num').val());
    var category_status = $('#category_status').val();
    var recommend_id = $('#recommend_id').val();

    if(!category_name ){
        layerTool.error('没有填写推荐位名！');
        return;
    }
    if(!category_num ){
        layerTool.error('显示个数填写不正确或未填写数字！');
        return;
    }
    if(!category_status ){
        layerTool.error('状态为选择！');
        return;
    }

    $.ajax({
        url:'/Admin/Recommend/getEdit',
        type:'GET',
        data:{
            'category_name':category_name,
            'category_num':category_num,
            'category_status':category_status,
            'recommend_id':recommend_id
        },
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success(res.msg,function(){
                    window.location.href='/Admin/Recommend/index.html';
                })
            }else{
                layerTool.error('修改失败',function(){
                    window.location.href='/Admin/Recommend/index.html';
                })
            }
        },
        error:function(){
            layerTool.error('修改失败');
        }
    })

});

$('#addType').click(function(){
    var typeName = $('#typeName').val();
    if(!$.trim(typeName)){
        layerTool.error('请填入文章类别名');
        return;
    }
    $.ajax({
        url:'/Admin/Type/addEve',
        type:'GET',
        data:{
            'title':typeName
        },
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success(res.msg,function(){
                    window.location.href = '/Admin/Type/index';
                })

            }else{
                layerTool.error(res.msg);
            }

        },
        error:function(){

        }
    })
});

$('#articleUpImg').change(function(){
    var file = $(this)[0].files[0];
    // var src = window.URL.createObjectURL(file);
    // $('#articleImgShow').attr('src',src).removeClass('hide');
    var formData = new FormData();
    formData.append("upload_file", file);

    $.ajax({
        url:'/Admin/Article/uploadImg',
        type:'POST',
        contentType: false,    //不可缺
        processData: false,    //不可缺
        data:formData,
        success:function(data){
           var res = JSON.parse(data);
           if(res.status == 1){
               var src = res['msg'];
               layerTool.success('上传成功');
               $('#articleImgShow').attr('src',src).removeClass('hide');
           }else{
               layerTool.error(res['msg']);
           }
        },
        error:function(){

        }
    });

    //window.URL.createObjectURL(this.files[0])
});

$('#articleAdd').click(function(){
    var title = $('#articleTitle').val();
    var type = $('#articleType').val();
    var description = $('#articleDescription').val();
    var thumb = $('#articleImgShow').attr('src');
    var author = $('#articleAuthor').text();
    var keywords = $('#articleKeywords').val();
    var content = editor.$txt.html();

    if(!title){ layerTool.error('请填写标题'); return;}
    if(!description){ layerTool.error('请填写描述');return;}
    if(!thumb){ layerTool.error('请上传缩略图');return;}
    if(!keywords){ layerTool.error('请填写关键词');return;}
    if(!content){ layerTool.error('请填写内容');return;}

    $.ajax({
        url:'/Admin/Article/addArticle',
        type:'POST',
        data:{
            pid:type,
            title:title,
            description:description,
            thumb:thumb,
            author:author,
            status:1,
            keywords:keywords,
            content:content
        },
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success('创建成功',function(){
                    window.location.href='/Admin/Article/index'
                })
            }else{
                layerTool.error('创建失败');
            }
        },
        error:function(){
            layerTool.error('创建失败');
        }
    })

});

$('.select-all').click(function(){
    allchecked = !allchecked;
   if(allchecked){
       $('.article-input').prop('checked',true);
   }else{
       $('.article-input').removeAttr('checked');
   }
});

$('#articleDelete').click(function(){
    var $inputs = $("input.article-input");
    if($inputs.length == 0){ layerTool.error('请选择一个删除对象'); return;}
    var arr=[];
    for(var i=0;i<$inputs.length;i++){
        var uid = $($inputs[i]).attr('data-uid');
        arr.push(uid);
    }

    $.ajax({
        url:'/Admin/Article/delete',
        data:{'datas':arr},
        type:'POST',
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success(res.msg,function(){
                    window.location.href='/Admin/Article/index';
                });
            }else{
                layerTool.error(res.msg);
            }
        },
        error:function(){
            layerTool.error('删除失败');
        }
    })
});

$("#articleEdit").click(function(){
    var title = $('#articleTitle').val();
    var type = $('#articleType').val();
    var description = $('#articleDescription').val();
    var thumb = $('#articleImgShow').attr('src');
    var author = $('#articleAuthor').text();
    var keywords = $('#articleKeywords').val();
    var content = editor.$txt.html();
    var id =$('#cid').val();

    if(!title){ layerTool.error('请填写标题'); return;}
    if(!description){ layerTool.error('请填写描述');return;}
    if(!thumb){ layerTool.error('请上传缩略图');return;}
    if(!keywords){ layerTool.error('请填写关键词');return;}
    if(!content){ layerTool.error('请填写内容');return;}

    $.ajax({
        url:'/Admin/Article/editArticle',
        type:'POST',
        data:{
            pid:type,
            title:title,
            description:description,
            thumb:thumb,
            author:author,
            status:1,
            keywords:keywords,
            content:content,
            id:id
        },
        success:function(data){
            var res = JSON.parse(data);
            if(res.status == 1){
                layerTool.success('修改成功',function(){
                    window.location.href='/Admin/Article/index'
                })
            }else{
                layerTool.error('修改失败');
            }
        },
        error:function(){
            layerTool.error('修改失败');
        }
    })
});