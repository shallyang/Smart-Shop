/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:05:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for review_table
-- ----------------------------
DROP TABLE IF EXISTS `review_table`;
CREATE TABLE `review_table` (
  `reciewid` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `goodsid` int(15) NOT NULL,
  `commnet` varchar(255) NOT NULL,
  `commentpic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reciewid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_table
-- ----------------------------
INSERT INTO `review_table` VALUES ('1', '38', 'asdfghjk', null);
INSERT INTO `review_table` VALUES ('2', '34', 'jhvhj', null);
INSERT INTO `review_table` VALUES ('3', '34', 'asd', null);
INSERT INTO `review_table` VALUES ('4', '34', 'asd', null);
INSERT INTO `review_table` VALUES ('5', '34', 'asdasd', null);
INSERT INTO `review_table` VALUES ('6', '83', '时间的话发生的', null);
INSERT INTO `review_table` VALUES ('7', '85', '2312313', null);
INSERT INTO `review_table` VALUES ('8', '85', 'dwasdwa', null);
