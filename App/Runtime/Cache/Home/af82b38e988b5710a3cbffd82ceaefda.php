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

        
    <!-- Content -->
    <div id="content" class="container">

        <h1 class="page-title">如果 , <span class="accent">梦想 , </span>有颜色</h1>

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="/Public/Home/images/slider/slider3.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>日出</h3>
                        <p class="ps">-------2015.10 黄山</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/slider/slider1.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>黄山</h3>
                        <p class="ps">-------2015.10 黄山</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/slider/slider4.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>日落</h3>
                        <p class="ps">-------2015.10 黄山</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/slider/slider6.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>溪水</h3>
                        <p class="ps">-------2015.10 黄山</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/slider/slider2.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>朝霞</h3>
                        <p class="ps">-------2015.10 黄山</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Slider -->


        <!-- Blog Carousel -->
        <div id="blog-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>From 博客</h4>
                <p> day day up </p>
                <p><a href="./blog.html">Read the blog</a></p>
                <div class="carousel-nav">
                    <a id="blog-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="blog-next" class="jcarousel-next" href="./index.html"></a>
                </div>
            </div>

            <ul class="blog-carousel">
                <li>
                    <a href="./blog_post.html">
                        <h4>Feeling the Wrath</h4>
                    </a>
                    <span class="date">05 Jul 2012 · 22 Comments</span>
                    <p>Nam ultricies dolor eu velit varius scelerisque. Vestibulum in lacus in felis pretium feugiat non sed elit. Duis pretium, urna sed pellentesque tincidunt, neque massa imperdiet nisi, sed cursus leo magna...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>Craig's List</h4>
                    </a>
                    <span class="date">04 Jul 2012 · 22 Comments</span>
                    <p>Sed nunc tortor, sagittis quis viverra id, molestie vitae nibh. Donec vitae lacus sed risus accumsan consectetur ut a ligula. Etiam vitae nisi diam, in rutrum dui. In facilisis, erat sed laoreet aliquet, mauris urna placerat enim...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>Summer Sounds</h4>
                    </a>
                    <span class="date">02 Jul 2012 · 22 Comments</span>
                    <p>Pellentesque ornare, risus et vulputate mollis, massa nulla aliquam neque, sed hendrerit orci quam eget ante. Morbi pulvinar ligula at sapien ultricies hendrerit. Morbi mollis dictum libero at ultrices...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>Following Our Dreams</h4>
                    </a>
                    <span class="date">05 Jul 2012 · 22 Comments</span>
                    <p>Nam ultricies dolor eu velit varius scelerisque. Vestibulum in lacus in felis pretium feugiat non sed elit. Duis pretium, urna sed pellentesque tincidunt, neque massa imperdiet nisi, sed cursus leo magna...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>Sleeping Easy</h4>
                    </a>
                    <span class="date">04 Jul 2012 · 22 Comments</span>
                    <p>Sed nunc tortor, sagittis quis viverra id, molestie vitae nibh. Donec vitae lacus sed risus accumsan consectetur ut a ligula. Etiam vitae nisi diam, in rutrum dui. In facilisis, erat sed laoreet aliquet, mauris urna placerat enim...</p>
                </li>
                <li>
                    <a href="./blog_post.html">
                        <h4>Discovery Channel</h4>
                    </a>
                    <span class="date">02 Jul 2012 · 22 Comments</span>
                    <p>Pellentesque ornare, risus et vulputate mollis, massa nulla aliquam neque, sed hendrerit orci quam eget ante. Morbi pulvinar ligula at sapien ultricies hendrerit. Morbi mollis dictum libero at ultrices...</p>
                </li>
            </ul>
        </div>
        <!-- /Blog Carousel -->

        <!-- Project Carousel -->
        <div id="project-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>From 分享</h4>
                <p>enjoy every day</p>
                <p><a href="./portfolio_4_col.html">View more share</a></p>
                <div class="carousel-nav">
                    <a id="project-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="project-next" class="jcarousel-next" href="./index.html"></a>
                </div>
            </div>

            <ul class="project-carousel">
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_05.jpg" alt="" />
                        <div class="overlay">
                            <h5>Enhancing the moment</h5>
                            <p>Web Design</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_06.jpg" alt="" />
                        <div class="overlay">
                            <h5>Connecting pictures</h5>
                            <p>Motion Graphics</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_07.jpg" alt="" />
                        <div class="overlay">
                            <h5>Real-world workflow</h5>
                            <p>Artwork</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_08.jpg" alt="" />
                        <div class="overlay">
                            <h5>Completing the story</h5>
                            <p>Web Design</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_09.jpg" alt="" />
                        <div class="overlay">
                            <h5>Through the roads</h5>
                            <p>Animation</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="./portfolio_details.html" class="project-item">
                        <img src="/Public/Home/images/content/project_4_10.jpg" alt="" />
                        <div class="overlay">
                            <h5>The past</h5>
                            <p>Print Design</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Project Carousel -->




    </div>
    <!-- /Content -->

        
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