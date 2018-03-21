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
    'DEFAULT_CONTROLLER'=>'Index',
    'DEFAULT_ACTION'=>'index',
    'URL_MODEL'=>2,
    'DATA_CACHE_TIME'=>'600',
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES' =>array(
        'blog$'=>array('Blog/index','type=0'),
        'blog/:id\d'=> array('Blog/article'),
        'blog/:type'=> array('Blog/index'),
        'share$'=>array('Share/index','type=0'),
        'share/:id\d'=> array('Share/article'),
        'share/:type'=> array('Share/index'),
    )

);