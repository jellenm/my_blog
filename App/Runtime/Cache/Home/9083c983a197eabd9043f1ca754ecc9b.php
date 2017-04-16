<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<meta type="description" content="" />
<meta type="keywords" content="" />
<meta type="author" content="" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="/Public/Home/css/style.css" type="text/css" />
<link rel="stylesheet" href="/Public/Home/css/flexslider.css" type="text/css" />


</head>
<body>
    <div id="body-wrapper">
        
    <!-- Header -->
    <div id="header" class="container clearfix">

        <a href="/" id="logo"><img src="/Public/Home/images/logo.png" alt="" /></a>

        <!-- Navigation -->
        <ul id="navigation">
            <?php if(is_array($navigation)): $i = 0; $__LIST__ = $navigation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li>
                    <a href="/<?php echo ($nav['url']); ?>" ><?php echo ($nav['title']); ?></a>
                    <ul>
                        <?php if(is_array($nav['children'])): $i = 0; $__LIST__ = $nav['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li><a href="/<?php echo ($nav['url']); ?>/<?php echo ($child['title']); ?>" ><?php echo ($child['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /Navigation -->

    </div>
    <!-- /Header -->

        
    <div id="content" class="container clearfix">
    
        <h1 class="page-title-inner">
            <span class="section-title">博客</span>
            Amazing things that<br /> bring
            <span class="accent">positive results</span>
        </h1>
    
    
        <div id="main">
            <!-- Normal Post -->
            <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post clearfix">
                    <a href="/blog/<?php echo ($vo['id']); ?>"><h2><?php echo ($vo['title']); ?></h2></a>
                    <ul class="post-meta">
                        <li class="author">By <a href="./blog.html"><?php echo ($vo['author']); ?></a></li>
                        <li class="date"><?php echo ($vo['creattime']); ?></li>
                        <li class="tags"><?php echo ($vo['keywords']); ?></li>
                    </ul>
                    <div class="post-entry">
                        <a href="/blog/<?php echo ($vo['id']); ?>" title=""><img src="<?php echo ($vo['thumb']); ?>" alt="" class="image" /></a>
                        <p>
                            <?php echo ($vo['description']); ?>
                        </p>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- /Normal Post -->

        </div>
    
    
        <!-- Sidebar -->
        <div id="sidebar">

            <input type="text" value="搜索" default-value="搜索" class="search" />

            <!-- Blog Categories -->
            <div class="widget">
                <h5>博客分类 </h5>
                <ul class="categories">
                    <?php $_result=get_header_blog(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog/<?php echo ($vo['title']); ?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <!-- Accordion -->
            <div class="widget">
                <h5>最新文章</h5>
                <?php if(is_array($latelyLists)): $i = 0; $__LIST__ = $latelyLists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="accordion-button"><a href="/blog/<?php echo ($list['id']); ?>"><?php echo ($list['title']); ?></a></div>
                    <div class="accordion-content">
                        <?php echo ($list['description']); ?>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!-- Accordion -->

        </div>
        <!-- /Sidebar -->
    
    </div>

        
    <!-- Footer -->
    <div id="footer">
        <div class="clear"></div>

        <div class="info">
            Design by Jellen
        </div>
    </div>
    <!-- /Footer -->

        <script src="/Public/Home/js/jquery-1.7.2.min.js"></script>
<script src="/Public/Home/js/jQuery.BlackAndWhite.min.js"></script>
<script src="/Public/Home/js/jquery.easing-1.3.min.js"></script>
<script src="/Public/Home/js/jquery.flexslider-min.js"></script>
<script src="/Public/Home/js/jquery.isotope.min.js"></script>
<script src="/Public/Home/js/jquery.jcarousel.min.js"></script>
<script src="/Public/Home/js/jquery.touchSwipe.min.js"></script>
<script src="/Public/Home/js/respond.min.js"></script>
<!--<script src="/Public/Home/js/selectnav.min.js"></script>-->
<script src="/Public/Home/js/custom.js"></script>

    </div>
</body>
</html>