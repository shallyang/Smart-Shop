/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:06:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_money
-- ----------------------------
DROP TABLE IF EXISTS `user_money`;
CREATE TABLE `user_money` (
  `moneyid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `moneydiff` float(255,0) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `paystatu` int(255) DEFAULT '0',
  PRIMARY KEY (`moneyid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_money
-- ----------------------------
INSERT INTO `user_money` VALUES ('1', '12', '1', '1489585215', '0');
INSERT INTO `user_money` VALUES ('2', '2221', '1', '1489585767', '0');
INSERT INTO `user_money` VALUES ('3', '20', '1', '1489587317', '1');
INSERT INTO `user_money` VALUES ('4', '1400', '1', '1489587389', '1');
INSERT INTO `user_money` VALUES ('5', '0', '107', '1489587718', '0');
INSERT INTO `user_money` VALUES ('6', '2', '107', '1489588027', '0');
INSERT INTO `user_money` VALUES ('7', '1', '110', '1489588383', '0');
INSERT INTO `user_money` VALUES ('8', '1', '110', '1489588428', '1');
INSERT INTO `user_money` VALUES ('9', '1', '110', '1489588963', '0');
INSERT INTO `user_money` VALUES ('10', '100000', '112', '1489589301', '0');
INSERT INTO `user_money` VALUES ('11', '112233', '114', '1489625458', '0');
INSERT INTO `user_money` VALUES ('12', '112312', '4', '1489626918', '0');
INSERT INTO `user_money` VALUES ('13', '398', '4', '1489631601', '2');
INSERT INTO `user_money` VALUES ('14', '111111', '11', '1489636894', '0');
