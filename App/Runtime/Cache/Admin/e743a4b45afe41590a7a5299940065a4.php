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
    
    
    <div class="bodyRight category">
        <h3>菜单管理/编辑</h3>
        <div>
            <div class="form-group">
                <label for="category_name">菜单名</label>
                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="菜单名" value="<?php echo ($menu['title']); ?>">
            </div>
            <div class="form-group">
                <label for="category_type">菜单类型</label>
                <select class="form-control"  id="category_type">
                    <option value="1" <?php if($menu["type"] == 1): ?>selected<?php endif; ?> >前台网站</option>
                    <option value="2" <?php if($menu["type"] == 2): ?>selected<?php endif; ?> >后台网站</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category_m">模块名</label>
                <input type="text" class="form-control" id="category_m" name="category_m" placeholder="模块名" value="<?php echo ($menu['m']); ?>">
            </div>
            <div class="form-group">
                <label for="category_m">控制器名</label>
                <input type="text" class="form-control" id="category_c" name="category_c" placeholder="控制器名" value="<?php echo ($menu['c']); ?>">
            </div>
            <div class="form-group">
                <label for="category_m">操作名</label>
                <input type="text" class="form-control" id="category_a" name="category_a" placeholder="操作名" value="<?php echo ($menu['a']); ?>">
            </div>
            <div class="form-group">
                <label for="category_status">状态</label>
                <select class="form-control"  id="category_status">
                    <option value="1" <?php if($menu["status"] == 1): ?>selected<?php endif; ?>  >正常</option>
                    <option value="2" <?php if($menu["status"] == 2): ?>selected<?php endif; ?>  >关闭</option>
                </select>
            </div>
            <input type="hidden" name="menu_id" value="<?php echo ($menu['menu_id']); ?>" id="menu_id" />
            <button type="submit" class="btn btn-primary" id="menu_edit">提交</button>
        </div>
    </div>



    <script src="/Public/js/index/layer.js" ></script>
    <script src="/Public/js/index/index.js" ></script>

</body>
</html>