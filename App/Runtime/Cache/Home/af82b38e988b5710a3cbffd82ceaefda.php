<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<meta type="description" content="" />
<meta type="keywords" content="" />
<meta type="author" content="" />
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
            <li class="current">
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/Home/Blog/index">Blog</a>
                <ul>
                    <li><a href="./blog_post.html">Single Post</a></li>
                    <li><a href="./blog_v2.html">Alternative Version</a></li>
                </ul>
            </li>
            <li>
                <a href="/Home/Share/index">Share</a>
                <ul>
                    <li><a href="./portfolio_2_col.html">2 Columns</a></li>
                    <li><a href="./portfolio_3_col.html">3 Columns</a></li>
                    <li><a href="./portfolio_4_col.html">4 Columns</a></li>
                    <li><a href="./portfolio_details.html">Single Project</a></li>
                    <li><a href="./portfolio_v2.html">Alternative Version</a></li>
                </ul>
            </li>
        </ul>
        <!-- /Navigation -->

    </div>
    <!-- /Header -->

        
    <!-- Content -->
    <div id="content" class="container clearfix">

        <h1 class="page-title">Hello, <span class="accent">we are Rework</span><br />glad to see you</h1>

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="/Public/Home/images/content/slide_01.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Responsive Design</h3> <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> <input type="submit" value="Learn More" class="red" />
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/content/slide_02.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Unique page layouts</h3> <p>Mauris sodales neque vitae justo sollicitudin aliquet sit amet diam. Curabitur sed fermentum dolor.</p> <input type="submit" value="Learn More" class="red" />
                    </div>
                </li>
                <li>
                    <img src="/Public/Home/images/content/slide_03.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Even more innovation</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui orci, dapibus non luctus, ultrices vel nunc. Donec lacinia mattis erat sit amet blandit.</p> <input type="submit" value="Learn More" class="red" />
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Slider -->

        <!-- Project Carousel -->
        <div id="project-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>Latest Work</h4>
                <p>Phasellus id augue ligula, nec ultrices augue. Aliquam erat volutpat.</p>
                <p><a href="./portfolio_4_col.html">View more projects</a></p>
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

        <!-- Blog Carousel -->
        <div id="blog-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>From the blog</h4>
                <p>Phasellus id augue ligula, nec ultrices augue. Aliquam erat volutpat.</p>
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

        <!-- Logo List -->
        <div class="logo-list">
            <ul>
                <li><a href="./index.html"><div class="bw-wrapper"><img src="/Public/Home/images/content/logo_list_01.png" alt="" /></div></a></li>
                <li><a href="./index.html"><div class="bw-wrapper"><img src="/Public/Home/images/content/logo_list_02.png" alt="" /></div></a></li>
                <li><a href="./index.html"><div class="bw-wrapper"><img src="/Public/Home/images/content/logo_list_03.png" alt="" /></div></a></li>
                <li><a href="./index.html"><div class="bw-wrapper"><img src="/Public/Home/images/content/logo_list_04.png" alt="" /></div></a></li>
                <li><a href="./index.html"><div class="bw-wrapper"><img src="/Public/Home/images/content/logo_list_05.png" alt="" /></div></a></li>
            </ul>
        </div>
        <!-- /Logo List -->

    </div>
    <!-- /Content -->

        
    <!-- Footer -->
    <div id="footer">
        <div class="container clearfix">

            <!-- About -->
            <div class="one-fourth">
                <a href="./index.html" class="logo"><img src="/Public/Home/images/logo_footer.png" alt="" /></a>
                <p>Proin fermentum sollicitudin ante, sed tempor eros molestie id. Donec volutpat odio eu mi imperdiet nec laoreet diam venenatis. Nunc ac purus aliquet mauris interdum accumsan.</p>
            </div>
            <!-- /About -->

            <!-- Twitter Feed -->
            <div class="one-fourth">
                <h5>Latest Tweets</h5>
                <div class="twitter-feed">
                    <p>
                        12 Outstanding Videos That Make Good Creative Use of AudioJungle Tracks <a href="./index.html">http://t.co/7USabnpS</a>
                        <span class="tweet-time">7 hours ago</span>
                    </p>
                    <p>
                        Farewell Envato – I Will Miss You! <a href="./index.html">http://t.co/ommJTJgp</a>
                        <span class="tweet-time">Sep 5 (1 day ago)</span>
                    </p>
                </div>
            </div>
            <!-- /Twitter Feed -->

            <!-- Contacts -->
            <div class="one-fourth">
                <h5>Contact Details</h5>
                <p class="address">3200 Sepulveda Blvd. <br />Manhattan Beach, CA 90266, USA</p>
                <p class="phone">Phone: (415) 124-5678 <br />Fax: (415) 124-5678</p>
                <p class="email">support@reworkmedia.com</p>
            </div>
            <!-- /Contacts -->

            <!-- Photo Stream -->
            <div class="one-fourth last">
                <h5>Photo Stream</h5>
                <ul class="photo-stream">
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_01.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_02.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_03.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_04.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_05.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_06.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_07.jpg" alt="" /></a></li>
                    <li><a href="./index.html"><img src="/Public/Home/images/content/photo_stream_08.jpg" alt="" /></a></li>
                </ul>
            </div>
            <!-- /Photo Stream -->

        </div>

        <div class="clear"></div>

        <div class="info container clearfix">

            <!-- Copyright -->
            <ul class="copyright">
                <li>© 2012 REWORK MEDIA. All rights reserved</li>
                <li><a href="./index.html">Legal Notice</a></li>
                <li><a href="./index.html">Terms & Conditions</a></li>
            </ul>
            <!-- /Copyright -->

            <!-- Social Links -->
            <ul class="social-links">
                <li class="twitter"><a href="./index.html">Twitter</a></li>
                <li class="facebook"><a href="./index.html">Facebook</a></li>
                <li class="linkedin"><a href="./index.html">LinkedIn</a></li>
                <li class="digg"><a href="./index.html">Digg</a></li>
                <li class="vimeo"><a href="./index.html">Vimeo</a></li>
            </ul>
            <!-- /Social Links -->

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
<script src="/Public/Home/js/selectnav.min.js"></script>
<script src="/Public/Home/js/custom.js"></script>

    </div>
</body>
</html>