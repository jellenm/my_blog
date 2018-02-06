SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `think_admin`;
CREATE TABLE `think_admin` (
  `id` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastloginip` varchar(15) DEFAULT NULL,
  `lastlogintime` int(10) unsigned DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

insert into `think_admin`(`id`,`username`,`password`,`lastloginip`,`lastlogintime`,`email`,`status`) values
('2','jellen','d2cda6a7ff06e1eba9d7f447cf498dc4','36.5.152.105','1517814043','','1');
DROP TABLE IF EXISTS  `think_article`;
CREATE TABLE `think_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pid` tinyint(3) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `creattime` datetime DEFAULT '0000-00-00 00:00:00',
  `author` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `thumb` varchar(50) NOT NULL,
  `keywords` varchar(20) NOT NULL,
  `gid` tinyint(3) unsigned NOT NULL,
  `modifytime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

insert into `think_article`(`id`,`pid`,`title`,`description`,`creattime`,`author`,`status`,`thumb`,`keywords`,`gid`,`modifytime`) values
('4','11','有些想说的','我一直觉得我自己是个幸运的人，毕业之后，我误打误撞进入了游戏行业，然而由于本身对于游戏的兴趣并没有那么强烈，所以，我最后','2017-04-16 00:00:00','jellen','1','/Uploads/2017-04-15/149226373315.jpg','入行，随想','2','0000-00-00 00:00:00'),
('5','4','js书籍推荐','从上学开始，我们获取全面，权威的知识，一般都是通过书籍，如果想要深入了解JavaScript，我觉得还是来读书比较直接。','2017-04-16 00:00:00','jellen','1','/Uploads/2017-04-15/149226757318.jpg','JavaScript，推荐书籍，经典','1','0000-00-00 00:00:00'),
('6','11','美好的书写风格，从注释和学习开始吧！','昨天领导给我说了点东西，起初我是比较赞同，然后我觉得不对，再然后我有点失望，到现在我觉得我又有了努力的方向了，我想把我的','2017-12-26 12:55:24','jellen','1','/Uploads/2017-12-26/151426351115.jpg','奋斗,改变,学习','2','0000-00-00 00:00:00'),
('7','11',' 久别重逢，失而复得，虚惊一场',' 久别重逢，失而复得，虚惊一场','2018-02-05 15:19:07','jellen','1','/Uploads/2018-02-05/151781514116.jpg','外婆','2','0000-00-00 00:00:00');
DROP TABLE IF EXISTS  `think_content`;
CREATE TABLE `think_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `pid` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

insert into `think_content`(`id`,`content`,`pid`) values
('4','&lt;p&gt;我一直觉得我自己是个幸运的人，毕业之后，我误打误撞进入了游戏行业，然而由于本身对于游戏的兴趣并没有那么强烈，所以，我最后决定放弃了两年的游戏行业的经验，进入了IT行业。&lt;/p&gt;&lt;p&gt;我并不是计算机专业毕业的学生，自学的方式是痛苦的，我一度怀疑自己的水平是否已经适合找工作了。在2016年初，我抱着试试的心态去投了几份简历，总共有三家公司向我发送了面试邀请。第一家是一个医疗机构，2016年出了一个莆田系，后来我想想，那个医疗机构可能和莆田系有关吧，通过简单的面试，他们是答应录取我了。这个是第一家，有了第一家的邀约，我可以去放心去面试第二家了。第二家是个上市的外包和培训机构，当时首先是笔试，笔试的内容比较偏向于java，然而我当时是面试前端，笔试分数可想而知，通过大概半个小时的面试后，对方对我的评价是前端知识学的还行，但是他们的要求是需要的是有java基础的，所以给我的答复是，希望我继续学习，有了java知识之后再去他们公司试试，当然这也是委婉的拒绝我了。此时我内心意识到的是对java的一种向往，或者想要去学习的欲望吧。那第三家，就是我现在就职的公司了，老板是个很年轻的男生，然而他并没有问我多少前端知识，要让我去做个性格倾向测试，然而我大学本科学习的是应用心理学，之前接触过这方面的知识，他询问我关于以后的职业规划，是倾向于技术还是倾向于管理，这个很任性化，了解员工的想法，通过员工的想法，为员工提供他们想要发展的路径。然而最终让我决定留下来的是，他说“对比自学和培训出来的应聘的人，我更倾向于自学的人”。在工资差不多的情况下，我当然会选择有想法的老板。&lt;/p&gt;&lt;p&gt;就这样我就进入了IT行业了，在后续的工作中，我深刻理解到了老板说的倾向于自学的人，因为我们的工作弹性很大，工作的性质也是比较前卫的，项目结束后有大量的时间是自己的，如果是自学的人，他的主观能动性会促使他去学习更多的东西，而不会在闲暇时间只是浪费时间了。&lt;/p&gt;&lt;p&gt;其实我是个幸运的人，选择了好的公司，遇到了好的老板，然后遇到了一个好的领导。现在，我怀着一颗感恩的心，谦卑的姿态在这个行业中继续学习。我也希望把有些我觉得值得和大家分享的东西发出来和大家分享。&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','4'),
('5','&lt;p&gt;从上学开始，我们获取全面，权威的知识，一般都是通过书籍，如果想要深入了解JavaScript，我觉得还是来读书比较直接。&lt;/p&gt;&lt;p&gt;前端知识比较琐碎，从html到css，再从css到 JavaScript，有些同学，在了解JavaScript的时候，就遇到了各种各样的问题。那么接下来我将要介绍以下几本书。&lt;/p&gt;&lt;p&gt;1、各大书籍网站和知识问答类网站第一推荐的JavaScript书籍 &amp;nbsp;—— 《JavaScript高级程序设计》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226846418.jpg&quot; alt=&quot;下载&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;这本书才开始读起来肯定是比较痛苦的，当通读一遍后，再细看几遍，相信你会有很大的收获！&lt;/p&gt;&lt;p&gt;2、前端入门实战 —— 《JavaScript&amp;nbsp;dom编程艺术》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226864920.jpg&quot; alt=&quot;552e7594N5f9833e9&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;入门小白照着书上的例子写一遍，原生的写法，相信你会有收获的。&lt;/p&gt;&lt;p&gt;3、如果说写原生是痛并快乐着，那么用jQuery写的话，那估计是只有快乐了 —— 《锋利的jQuery》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226901913.jpg&quot; alt=&quot;77656cb9-ce03-4b2a-b1bb-9d30f69e6e45&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;当然jQuery没必要必须看书，看看官网的文档或者网站手册也行啦！&lt;/p&gt;&lt;p&gt;4、是时候要对咱的JavaScript代码进行改进了—— 《高性能JavaScript》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226922815.jpg&quot; alt=&quot;55ec039eNb9a5ff3e&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;看完这本书，再应用到你的JavaScript代码中，你的代码性能应该会提升不少。养成好的代码习惯，小处着手！&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;好了，基础的就说这么多了，这几本看完，并且深入了解，那么相信，你的JavaScript应该不错咯！&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','5'),
('6','&lt;p&gt;2017年8月8日，我去到另一家公司，我怀着对前公司满满的歉意，投了简历，经过面试，被录取。&lt;/p&gt;&lt;p&gt;前两个月是试用期，我经过了昏天暗地的加班之后终于转正... 我相信所有人都看到我的努力，然而我却觉得我现在要做的更多的是学习！&lt;/p&gt;&lt;p&gt;昨天晚上吃完饭，领导来到我的桌边，和我说了点我的问题，大致的意思是 我的代码比较凌乱和不规整，其实老早之前我就发现了这个问题，我也比较羡慕别人写的一手好看的代码，但是我都没把这些付诸行动，总是用时间仓促为接口，有时候就乱起名字也不写注释，导致别人看我的代码比较凌乱！ 我虽然有点难过，但是感觉领导说的是对的，而且只有真心希望我好的人才会和我说这些，我很感激和感谢！当然，接下来就要看我自己的改变了。良好的代码风格，先审视自己的代码，寻找缺点，然后调整代码，再看看github上面别人的优秀的代码风格去模仿和学习！相信我会改掉那些坏习惯的！！！&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','6'),
('7','&lt;p&gt;&amp;nbsp;久别重逢，失而复得，虚惊一场&lt;/p&gt;&lt;p&gt;&amp;nbsp;儿时，我有一个很好的很好的盆友，她的外婆家住在我家对面。我们家是住在古镇上，&amp;nbsp; 对面的距离可能只有三四米，邻里之间格外亲近，当然偶尔也会争吵，现在那边都已经拆了，每次回去都只有回忆。从小一起长大，到了小学三年级的时候，她要回她那边读书了，我们就这样分别了。我时常会想到她，虽然忘了我们曾经是如何玩闹了。我希望未来的我们有一次久别重逢...&lt;br&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;我的外婆，在我大学毕业那年去世了。我走在马路上，看到老奶奶我会想到她对我笑，我在厨房，我会想到我曾经因为她烧饭给我吃，而她年纪大了，烧饭不好吃了，说了她。我想念她慈祥的模样。我多么希望她得的病只是虚惊一场，可是我再也见不到她了，我多么希望她再回来我身边.....&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','7');
DROP TABLE IF EXISTS  `think_menu`;
CREATE TABLE `think_menu` (
  `menu_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL COMMENT '1：前台，2：后台',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:正常',
  `m` varchar(20) NOT NULL,
  `c` varchar(20) NOT NULL,
  `a` varchar(20) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

insert into `think_menu`(`menu_id`,`title`,`order`,`type`,`status`,`m`,`c`,`a`) values
('76','菜单管理','0','2','1','Admin','Menu','index'),
('77','推荐位管理','0','2','1','Admin','Recommend','index'),
('78','文章添加','0','2','1','Admin','article','index'),
('79','文章类型','0','2','1','Admin','Type','index'),
('80','前台导航','0','2','1','Admin','Navigation','index');
DROP TABLE IF EXISTS  `think_navigation`;
CREATE TABLE `think_navigation` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `url` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

insert into `think_navigation`(`id`,`title`,`url`) values
('1','博客','blog'),
('2','分享','share');
DROP TABLE IF EXISTS  `think_recommend`;
CREATE TABLE `think_recommend` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `think_type`;
CREATE TABLE `think_type` (
  `pid` tinyint(4) NOT NULL,
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

insert into `think_type`(`pid`,`id`,`title`) values
('1','4','JavaScript'),
('1','5','html'),
('1','6','css'),
('1','7','nodejs'),
('1','8','php'),
('1','10','thinkphp'),
('2','11','mood');
SET FOREIGN_KEY_CHECKS = 1;

