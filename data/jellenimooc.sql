/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jellenimooc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-13 08:11:28
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
INSERT INTO `think_admin` VALUES ('2', 'jellen', 'd2cda6a7ff06e1eba9d7f447cf498dc4', '127.0.0.1', '1491978646', '', '1');

-- ----------------------------
-- Table structure for think_article
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
CREATE TABLE `think_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pid` tinyint(3) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `creattime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifytime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `author` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `thumb` varchar(50) NOT NULL,
  `keywords` varchar(20) NOT NULL,
  `gid` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('1', '4', '123', '123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'jellen', '1', '/Uploads/2017-04-03/149120338720.png', '123', '1');

-- ----------------------------
-- Table structure for think_content
-- ----------------------------
DROP TABLE IF EXISTS `think_content`;
CREATE TABLE `think_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `pid` mediumint(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_content
-- ----------------------------
INSERT INTO `think_content` VALUES ('1', '&lt;p&gt;123&lt;/p&gt;', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_type
-- ----------------------------
INSERT INTO `think_type` VALUES ('1', '4', 'javascript');
INSERT INTO `think_type` VALUES ('1', '5', 'html');
INSERT INTO `think_type` VALUES ('1', '6', 'css');
INSERT INTO `think_type` VALUES ('1', '7', 'nodejs');
INSERT INTO `think_type` VALUES ('1', '8', 'php');
INSERT INTO `think_type` VALUES ('1', '10', 'thinkphp');
