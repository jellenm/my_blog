/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jellenimooc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-16 20:59:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_admin
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
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

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('2', 'jellen', 'd2cda6a7ff06e1eba9d7f447cf498dc4', '127.0.0.1', '1492261004', '', '1');

-- ----------------------------
-- Table structure for think_article
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('4', '11', '有些想说的', '我一直觉得我自己是个幸运的人，毕业之后，我误打误撞进入了游戏行业，然而由于本身对于游戏的兴趣并没有那么强烈，所以，我最后', '2017-04-16 00:00:00', 'jellen', '1', '/Uploads/2017-04-15/149226373315.jpg', '入行，随想', '2', '0000-00-00 00:00:00');
INSERT INTO `think_article` VALUES ('5', '4', 'js书籍推荐', '从上学开始，我们获取全面，权威的知识，一般都是通过书籍，如果想要深入了解JavaScript，我觉得还是来读书比较直接。', '2017-04-16 00:00:00', 'jellen', '1', '/Uploads/2017-04-15/149226757318.jpg', 'JavaScript，推荐书籍，经典', '1', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for think_content
-- ----------------------------
DROP TABLE IF EXISTS `think_content`;
CREATE TABLE `think_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `pid` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_content
-- ----------------------------
INSERT INTO `think_content` VALUES ('4', '&lt;p&gt;我一直觉得我自己是个幸运的人，毕业之后，我误打误撞进入了游戏行业，然而由于本身对于游戏的兴趣并没有那么强烈，所以，我最后决定放弃了两年的游戏行业的经验，进入了IT行业。&lt;/p&gt;&lt;p&gt;我并不是计算机专业毕业的学生，自学的方式是痛苦的，我一度怀疑自己的水平是否已经适合找工作了。在2016年初，我抱着试试的心态去投了几份简历，总共有三家公司向我发送了面试邀请。第一家是一个医疗机构，2016年出了一个莆田系，后来我想想，那个医疗机构可能和莆田系有关吧，通过简单的面试，他们是答应录取我了。这个是第一家，有了第一家的邀约，我可以去放心去面试第二家了。第二家是个上市的外包和培训机构，当时首先是笔试，笔试的内容比较偏向于java，然而我当时是面试前端，笔试分数可想而知，通过大概半个小时的面试后，对方对我的评价是前端知识学的还行，但是他们的要求是需要的是有java基础的，所以给我的答复是，希望我继续学习，有了java知识之后再去他们公司试试，当然这也是委婉的拒绝我了。此时我内心意识到的是对java的一种向往，或者想要去学习的欲望吧。那第三家，就是我现在就职的公司了，老板是个很年轻的男生，然而他并没有问我多少前端知识，要让我去做个性格倾向测试，然而我大学本科学习的是应用心理学，之前接触过这方面的知识，他询问我关于以后的职业规划，是倾向于技术还是倾向于管理，这个很任性化，了解员工的想法，通过员工的想法，为员工提供他们想要发展的路径。然而最终让我决定留下来的是，他说“对比自学和培训出来的应聘的人，我更倾向于自学的人”。在工资差不多的情况下，我当然会选择有想法的老板。&lt;/p&gt;&lt;p&gt;就这样我就进入了IT行业了，在后续的工作中，我深刻理解到了老板说的倾向于自学的人，因为我们的工作弹性很大，工作的性质也是比较前卫的，项目结束后有大量的时间是自己的，如果是自学的人，他的主观能动性会促使他去学习更多的东西，而不会在闲暇时间只是浪费时间了。&lt;/p&gt;&lt;p&gt;其实我是个幸运的人，选择了好的公司，遇到了好的老板，然后遇到了一个好的领导。现在，我怀着一颗感恩的心，谦卑的姿态在这个行业中继续学习。我也希望把有些我觉得值得和大家分享的东西发出来和大家分享。&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '4');
INSERT INTO `think_content` VALUES ('5', '&lt;p&gt;从上学开始，我们获取全面，权威的知识，一般都是通过书籍，如果想要深入了解JavaScript，我觉得还是来读书比较直接。&lt;/p&gt;&lt;p&gt;前端知识比较琐碎，从html到css，再从css到 JavaScript，有些同学，在了解JavaScript的时候，就遇到了各种各样的问题。那么接下来我将要介绍以下几本书。&lt;/p&gt;&lt;p&gt;1、各大书籍网站和知识问答类网站第一推荐的JavaScript书籍 &amp;nbsp;—— 《JavaScript高级程序设计》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226846418.jpg&quot; alt=&quot;下载&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;这本书才开始读起来肯定是比较痛苦的，当通读一遍后，再细看几遍，相信你会有很大的收获！&lt;/p&gt;&lt;p&gt;2、前端入门实战 —— 《JavaScript&amp;nbsp;dom编程艺术》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226864920.jpg&quot; alt=&quot;552e7594N5f9833e9&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;入门小白照着书上的例子写一遍，原生的写法，相信你会有收获的。&lt;/p&gt;&lt;p&gt;3、如果说写原生是痛并快乐着，那么用jQuery写的话，那估计是只有快乐了 —— 《锋利的jQuery》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226901913.jpg&quot; alt=&quot;77656cb9-ce03-4b2a-b1bb-9d30f69e6e45&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;当然jQuery没必要必须看书，看看官网的文档或者网站手册也行啦！&lt;/p&gt;&lt;p&gt;4、是时候要对咱的JavaScript代码进行改进了—— 《高性能JavaScript》&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/2017-04-15/149226922815.jpg&quot; alt=&quot;55ec039eNb9a5ff3e&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;看完这本书，再应用到你的JavaScript代码中，你的代码性能应该会提升不少。养成好的代码习惯，小处着手！&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;好了，基础的就说这么多了，这几本看完，并且深入了解，那么相信，你的JavaScript应该不错咯！&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '5');

-- ----------------------------
-- Table structure for think_menu
-- ----------------------------
DROP TABLE IF EXISTS `think_menu`;
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

-- ----------------------------
-- Records of think_menu
-- ----------------------------
INSERT INTO `think_menu` VALUES ('76', '菜单管理', '0', '2', '1', 'Admin', 'Menu', 'index');
INSERT INTO `think_menu` VALUES ('77', '推荐位管理', '0', '2', '1', 'Admin', 'Recommend', 'index');
INSERT INTO `think_menu` VALUES ('78', '文章添加', '0', '2', '1', 'Admin', 'article', 'index');
INSERT INTO `think_menu` VALUES ('79', '文章类型', '0', '2', '1', 'Admin', 'Type', 'index');
INSERT INTO `think_menu` VALUES ('80', '前台导航', '0', '2', '1', 'Admin', 'Navigation', 'index');

-- ----------------------------
-- Table structure for think_navigation
-- ----------------------------
DROP TABLE IF EXISTS `think_navigation`;
CREATE TABLE `think_navigation` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(5) NOT NULL,
  `url` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_navigation
-- ----------------------------
INSERT INTO `think_navigation` VALUES ('1', '博客', 'blog');
INSERT INTO `think_navigation` VALUES ('2', '分享', 'share');

-- ----------------------------
-- Table structure for think_recommend
-- ----------------------------
DROP TABLE IF EXISTS `think_recommend`;
CREATE TABLE `think_recommend` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_recommend
-- ----------------------------

-- ----------------------------
-- Table structure for think_type
-- ----------------------------
DROP TABLE IF EXISTS `think_type`;
CREATE TABLE `think_type` (
  `pid` tinyint(4) NOT NULL,
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_type
-- ----------------------------
INSERT INTO `think_type` VALUES ('1', '4', 'JavaScript');
INSERT INTO `think_type` VALUES ('1', '5', 'html');
INSERT INTO `think_type` VALUES ('1', '6', 'css');
INSERT INTO `think_type` VALUES ('1', '7', 'nodejs');
INSERT INTO `think_type` VALUES ('1', '8', 'php');
INSERT INTO `think_type` VALUES ('1', '10', 'thinkphp');
INSERT INTO `think_type` VALUES ('2', '11', 'mood');
