/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:06:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_content
-- ----------------------------
DROP TABLE IF EXISTS `user_content`;
CREATE TABLE `user_content` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `time` bigint(255) NOT NULL,
  `user_text` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_content
-- ----------------------------
INSERT INTO `user_content` VALUES ('1', '现代城', '748914950@qq.com', '0', '老地方开个房噶add老价格路公交可大家反馈', '1');
INSERT INTO `user_content` VALUES ('2', '现代城', '748914950@qq.com', '0', '老地方开个房噶add老价格路公交可大家反馈', '1');
INSERT INTO `user_content` VALUES ('3', '现代城', '748914950@qq.com', '0', '老地方开个房噶add老价格路公交可大家反馈', '1');
INSERT INTO `user_content` VALUES ('4', '现代城', '748914950@qq.com', '0', '老地方开个房噶add老价格路公交可大家反馈', '0');
INSERT INTO `user_content` VALUES ('5', '12', 'yxc930708@gmail.com', '1490099164', '12312423412', '1');
INSERT INTO `user_content` VALUES ('6', '12', 'yxc930708@gmail.com', '1490099216', '12312423412', '0');
