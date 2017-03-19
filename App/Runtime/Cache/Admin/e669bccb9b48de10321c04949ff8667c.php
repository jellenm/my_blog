<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>jellen</title>


    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="/Public/js/index/jquery.js"></script>
    <script src="/Public/js/index/bootstrap.min.js"></script>
    <script src="/Public/js/libs/layer/layer.js"></script>
    <link href="/Public/css/index.css" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" type="text/css" href="/Public/js/libs/wangEdit/css/wangEditor.min.css">
    <script src="/Public/js/libs/wangEdit/js/wangEditor.js"></script>

</head>
<body>

    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">jellen内容管理系统</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="navbarLi"><a href="#"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 个人中心</a></li>
                                <li class="navbarLi"><a href="javascript:;" id="logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> 退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>


    
        <div class="bodyLeft">
            <ul class="nav nav-pills nav-stacked navbar-inverse">
                <li role="presentation" <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> ><a href="/Admin/Index/index"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li role="presentation" <?php if(CONTROLLER_NAME == $vo['c']): ?>class="active"<?php endif; ?> ><a href="/<?php echo ($vo['m']); ?>/<?php echo ($vo['c']); ?>/<?php echo ($vo['a']); ?>"> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> <?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    
    
    <div class="bodyRight category ">
        <h3>文章管理/添加</h3>
        <div class="article-add-form">
            <div class="form-group">
                <label for="articleTitle" class="col-sm-2 control-label">文章名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="articleTitle" placeholder="请输入文章标题">
                </div>
            </div>
            <div class="article-parent form-group">
                <label for="articleTitle" class="col-sm-2 control-label">类型</label>
                <div class="col-sm-10">
                    <select class="form-control" >
                        <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$types): $mod = ($i % 2 );++$i;?><option value="<?php echo ($types["id"]); ?>"><?php echo ($types["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="articleDescription" class="col-sm-2 control-label">文章描述</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="请输入文章描述,最多三十二个字" id="articleDescription"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-10">
                    <div class="up-img">
                        +
                        <input type="file"  id="articleUpImg"  />
                    </div>
                    <img src="" alt="已上传图片" class="img-rounded hide" id="articleImgShow" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">作者</label>
                <div class="col-sm-10">
                    <span><?php echo ($username); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">关键词</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="输入文章关键词，以逗号分隔" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">文章内容</label>
                <br>
                <div id="editor-container" class="container col-sm-10">
                    <div id="editor-trigger"><p>请输入内容</p></div>
                    <!-- <textarea id="editor-trigger" style="display:none;">
                        <p>请输入内容...</p>
                    </textarea> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        var editor = new wangEditor('editor-trigger');

        // 上传图片
        editor.config.uploadImgUrl = '/upload';
        editor.config.uploadParams = {
            // token1: 'abcde',
            // token2: '12345'
        };
        editor.config.uploadHeaders = {
            // 'Accept' : 'text/x-json'
        }
        // editor.config.uploadImgFileName = 'myFileName';

        // 隐藏网络图片
        // editor.config.hideLinkImg = true;

        // 表情显示项
        editor.config.emotionsShow = 'value';
        editor.config.emotions = {
            'default': {
                title: '默认',
                data: '/Public/js/libs/wangEdit/json/emotions.data'
            },
            'weibo': {
                title: '微博表情',
                data: [
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/7a/shenshou_thumb.gif',
                        value: '[草泥马]'
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/60/horse2_thumb.gif',
                        value: '[神马]'
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/bc/fuyun_thumb.gif',
                        value: '[浮云]'
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/c9/geili_thumb.gif',
                        value: '[给力]'
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/f2/wg_thumb.gif',
                        value: '[围观]'
                    },
                    {
                        icon: 'http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/70/vw_thumb.gif',
                        value: '[威武]'
                    }
                ]
            }
        };

        // 插入代码时的默认语言
        // editor.config.codeDefaultLang = 'html'

        // 只粘贴纯文本
        // editor.config.pasteText = true;

        // 跨域上传
        // editor.config.uploadImgUrl = 'http://localhost:8012/upload';

        // 第三方上传
        // editor.config.customUpload = true;

        // 普通菜单配置
        // editor.config.menus = [
        //     'img',
        //     'insertcode',
        //     'eraser',
        //     'fullscreen'
        // ];
        // 只排除某几个菜单（兼容IE低版本，不支持ES5的浏览器），支持ES5的浏览器可直接用 [].map 方法
        // editor.config.menus = $.map(wangEditor.config.menus, function(item, key) {
        //     if (item === 'insertcode') {
        //         return null;
        //     }
        //     if (item === 'fullscreen') {
        //         return null;
        //     }
        //     return item;
        // });

        // onchange 事件
        editor.onchange = function () {
            console.log(this.$txt.html());
        };

        // 取消过滤js
        // editor.config.jsFilter = false;

        // 取消粘贴过来
        // editor.config.pasteFilter = false;

        // 设置 z-index
        // editor.config.zindex = 20000;

        // 语言
        // editor.config.lang = wangEditor.langs['en'];

        // 自定义菜单UI
        // editor.UI.menus.bold = {
        //     normal: '<button style="font-size:20px; margin-top:5px;">B</button>',
        //     selected: '.selected'
        // };
        // editor.UI.menus.italic = {
        //     normal: '<button style="font-size:20px; margin-top:5px;">I</button>',
        //     selected: '<button style="font-size:20px; margin-top:5px;"><i>I</i></button>'
        // };
        editor.create();
    </script>



    <script src="/Public/js/index/layer.js" ></script>
    <script src="/Public/js/index/index.js" ></script>

</body>
</html>