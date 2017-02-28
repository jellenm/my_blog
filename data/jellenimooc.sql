/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jellenimooc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-28 23:37:21
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'jellen', 'd2cda6a7ff06e1eba9d7f447cf498dc4', '127.0.0.1', '1488289696', '', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_menu
-- ----------------------------
INSERT INTO `think_menu` VALUES ('1', '菜单管理', '0', '2', '1', 'Admin', 'Menu', 'index');
INSERT INTO `think_menu` VALUES ('51', '推荐位管理', '0', '2', '1', 'Admin', 'Recommend', 'index');
INSERT INTO `think_menu` VALUES ('52', '文章管理', '0', '2', '1', 'Admin', 'Article', 'index');
