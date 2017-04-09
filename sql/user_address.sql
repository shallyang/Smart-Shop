/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:05:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_address
-- ----------------------------
DROP TABLE IF EXISTS `user_address`;
CREATE TABLE `user_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(255) NOT NULL COMMENT '1为默认地址',
  `userid` int(255) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_address
-- ----------------------------
INSERT INTO `user_address` VALUES ('5', '河北', '保定', '131', '1223', '222', '111111', '0', '7');
INSERT INTO `user_address` VALUES ('6', '安徽', '亳州', '蒙城县啊哈哈哈哈', '1111111', '无名', '111111111', '0', '0');
INSERT INTO `user_address` VALUES ('7', '安徽', '合肥', '21', '123123', '213', '123', '0', '8');
INSERT INTO `user_address` VALUES ('8', '河北', '石家庄', '131', '1312', '12312', '2312', '0', '0');
INSERT INTO `user_address` VALUES ('9', '河南', '开封', '123', '2313', '3123', '123123', '0', '9');
INSERT INTO `user_address` VALUES ('11', '河北', '保定', '3123', '123123', '2123', '232222', '0', '107');
INSERT INTO `user_address` VALUES ('12', '河北', '秦皇岛', '看后感但他又有点甜有点甜', '112233', ' 请问', '13311223344', '1', '0');
INSERT INTO `user_address` VALUES ('13', '河北', '保定', 'iugiih', '123123', 'dajgdw', '12312312', '1', '110');
INSERT INTO `user_address` VALUES ('14', '山西', '太原', '132123', '123123', '123131', '13123', '1', '107');
INSERT INTO `user_address` VALUES ('15', '山西', '大同', '还是那个地方', '111111', '小样', '13111122334', '1', '4');
INSERT INTO `user_address` VALUES ('16', '河北', '石家庄', '大东', '111111', '南山', '15856743467', '1', '11');
INSERT INTO `user_address` VALUES ('18', '河北', '秦皇岛', '123122312', '111111', '1222222', '15856734390', '1', '1');
INSERT INTO `user_address` VALUES ('19', '河南', '开封', '阿得旺斯', '222222', '任蒙', '15856743467', '0', '12');
INSERT INTO `user_address` VALUES ('20', '河北', '保定', '我低俗与冬天热  ', '999999', '任蒙', '15856743467', '0', '12');
INSERT INTO `user_address` VALUES ('21', '河南', '开封', '交换机', '888888', '任蒙', '15856743467', '1', '12');
