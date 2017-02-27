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
                <li role="presentation" <?php if(CONTROLLER_NAME == 'Menu'): ?>class="active"<?php endif; ?> ><a href="/Admin/Menu/index"> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> 菜单管理</a></li>
                <li role="presentation"  ><a href="#"> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Messages</a></li>
            </ul>
        </div>
    
    
    <div class="bodyRight category">
        <h3>菜单管理/列表</h3>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label"><a class="btn btn-primary" href="/Admin/Menu/add">添加</a></label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option value="0">选择分类</option>
                        <option value="1">前台网站</option>
                        <option value="2">后台网站</option>
                    </select>
                </div>
            </div>
            <table class="table table-bordered">
               <tr><th>排序</th><th>id</th><th>菜单名</th><th>模块</th><th>类型</th><th>状态</th><th>操作</th></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
               <tr><td>排序</td><td>id</td><td>菜单名</td><td>模块</td><td>类型</td><td>状态</td><td>操作</td></tr>
            </table>

            <button type="button" class="btn btn-primary">确定排序</button>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </form>
    </div>



    <script src="/Public/js/index/layer.js" ></script>
    <script src="/Public/js/index/index.js" ></script>

</body>
</html>