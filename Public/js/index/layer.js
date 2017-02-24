var layerTool ={
    success:function(content,callback){
        layer.alert(content, {icon: 1},callback)
    },
    error:function(content){
        layer.alert(content, {icon: 2})
    },
    confirm:function(question,rMsg,callback){
        layer.confirm(question, {
            btn: ['确定','取消'] //按钮
        }, function(){
            callback();
            if(rMsg){
                layer.msg(rMsg);
            }
        }, function(){

        });
    }
}
