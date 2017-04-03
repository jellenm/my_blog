<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'=>array(
        '__PUBLIC__'=>'/Public',
        '__HOME__'=>'/Public/Home',
        '__CSS__'=>'/Public/Home/css',
        '__JS__'=>'/Public/Home/js',
        '__IMG__'=>'/Public/Home/images',
    ),
    'DEFAULT_MODULE'=>'Home',
//    'DEFAULT_CONTROLLER'=>'Index',
//    'DEFAULT_ACTION'=>'index',
    'URL_MODEL'=>2,
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES' =>array(
        'blog$'=>array('Blog/index','name=0'),
//        'blog/:name'=> array('/Blog/list'),
        'share$'=>array('Share/index'),
    )
);