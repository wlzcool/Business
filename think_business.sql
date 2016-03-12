/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : think_business

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-12 23:06:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bu_column
-- ----------------------------
DROP TABLE IF EXISTS `bu_column`;
CREATE TABLE `bu_column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '栏目名称',
  `foldName` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '文件夹名',
  `fileName` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '文件名（用来给活动使用）',
  `parentClass` int(11) DEFAULT NULL COMMENT '父类',
  `module` int(11) DEFAULT NULL COMMENT '模块（和foldname关联）',
  `orderNumber` int(11) DEFAULT NULL COMMENT '次序',
  `newWindow` int(11) DEFAULT NULL COMMENT '在新窗口打开',
  `isIn` int(11) DEFAULT NULL COMMENT '是否内部链接',
  `outUrl` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '外部链接',
  `isShow` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for bu_news
-- ----------------------------
DROP TABLE IF EXISTS `bu_news`;
CREATE TABLE `bu_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `columuId` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `description` text COLLATE utf8mb4_bin,
  `content` longtext COLLATE utf8mb4_bin,
  `orderNumber` int(11) DEFAULT NULL,
  `createUser` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `updateUser` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `createTime` datetime NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `IsDelete` int(11) NOT NULL,
  `hits` int(11) DEFAULT NULL,
  `tagIDs` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `IsTop` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for bu_tag
-- ----------------------------
DROP TABLE IF EXISTS `bu_tag`;
CREATE TABLE `bu_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagName` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `createUser` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `updateUser` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `createTime` datetime DEFAULT NULL,
  `updateTime` datetime DEFAULT NULL,
  `tagType` int(11) DEFAULT NULL COMMENT '新闻还是商品',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Table structure for bu_user
-- ----------------------------
DROP TABLE IF EXISTS `bu_user`;
CREATE TABLE `bu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
