/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:03:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for collect_table
-- ----------------------------
DROP TABLE IF EXISTS `collect_table`;
CREATE TABLE `collect_table` (
  `collectid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(255) DEFAULT NULL,
  `goodsid` int(255) DEFAULT NULL,
  PRIMARY KEY (`collectid`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collect_table
-- ----------------------------
INSERT INTO `collect_table` VALUES ('1', '8', '4');
INSERT INTO `collect_table` VALUES ('2', '8', '5');
INSERT INTO `collect_table` VALUES ('18', null, '84');
INSERT INTO `collect_table` VALUES ('19', null, '84');
INSERT INTO `collect_table` VALUES ('21', '4', '49');
INSERT INTO `collect_table` VALUES ('23', '11', '74');
INSERT INTO `collect_table` VALUES ('65', '11', '34');
INSERT INTO `collect_table` VALUES ('66', '11', '26');
INSERT INTO `collect_table` VALUES ('67', '1', '81');
INSERT INTO `collect_table` VALUES ('68', '12', '38');
