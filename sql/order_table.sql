/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:05:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for order_table
-- ----------------------------
DROP TABLE IF EXISTS `order_table`;
CREATE TABLE `order_table` (
  `orderid` bigint(15) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `goodsid` varchar(255) NOT NULL,
  `passnum` int(20) DEFAULT NULL,
  `shippost` varchar(255) DEFAULT NULL,
  `passstatus` tinyint(1) NOT NULL DEFAULT '0',
  `getaddress` varchar(255) NOT NULL,
  `ordertime` int(255) NOT NULL,
  `getphone` bigint(255) NOT NULL,
  `orderprice` float(100,2) NOT NULL,
  `getman` varchar(255) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_table
-- ----------------------------
INSERT INTO `order_table` VALUES ('1', '0', '38', null, null, '0', '河北石家庄顺丰福丰富', '1489543666', '13024076155', '299.00', '飞利浦');
INSERT INTO `order_table` VALUES ('2', '0', '38', '12345678', '顺丰快递', '1', '河北石家庄131', '1489543670', '2312', '299.00', '12312');
INSERT INTO `order_table` VALUES ('3', '0', '38', null, null, '0', '河北石家庄131', '1489543673', '2312', '299.00', '12312');
INSERT INTO `order_table` VALUES ('4', '0', '38', null, null, '0', '河北石家庄131', '1489543676', '2312', '299.00', '12312');
INSERT INTO `order_table` VALUES ('5', '0', '38', null, null, '0', '河北石家庄131', '1489543678', '2312', '299.00', '12312');
INSERT INTO `order_table` VALUES ('6', '107', '38', null, null, '1', '河北石家庄131', '1489543701', '2312', '299.00', '12312');
INSERT INTO `order_table` VALUES ('7', '0', '38', null, null, '3', '安徽亳州蒙城县啊哈哈哈哈', '1489544029', '111111111', '299.00', '无名');
INSERT INTO `order_table` VALUES ('8', '0', '85,80', null, null, '3', '安徽亳州蒙城县啊哈哈哈哈', '1489546422', '111111111', '466.00', '无名');
INSERT INTO `order_table` VALUES ('9', '107', '80,81', null, null, '0', '河北保定3123', '1489548304', '232222', '313.00', '2123');
INSERT INTO `order_table` VALUES ('11', '0', '81,82', null, null, '0', '安徽亳州蒙城县啊哈哈哈哈', '1489565628', '111111111', '158.00', '无名');
INSERT INTO `order_table` VALUES ('12', '4', '83,82', null, null, '0', '山西大同还是那个地方', '1489627027', '2147483647', '318.00', '小样');
INSERT INTO `order_table` VALUES ('13', '4', '85,84', null, null, '0', '山西大同还是那个地方', '1489630048', '2147483647', '1144.00', '小样');
INSERT INTO `order_table` VALUES ('14', '4', '82', null, null, '0', '山西大同还是那个地方', '1489630507', '2147483647', '99.00', '小样');
INSERT INTO `order_table` VALUES ('15', '4', '80', null, null, '3', '山西大同还是那个地方', '1489630574', '2147483647', '68.00', '小样');
INSERT INTO `order_table` VALUES ('16', '4', '80', null, null, '0', '山西大同还是那个地方', '1489630612', '2147483647', '68.00', '小样');
INSERT INTO `order_table` VALUES ('17', '4', '80', null, null, '0', '山西大同还是那个地方', '1489630660', '2147483647', '68.00', '小样');
INSERT INTO `order_table` VALUES ('18', '4', '38', null, null, '0', '山西大同还是那个地方', '1489630802', '2147483647', '299.00', '小样');
INSERT INTO `order_table` VALUES ('19', '4', '84', null, null, '3', '山西大同还是那个地方', '1489630943', '2147483647', '348.00', '小样');
INSERT INTO `order_table` VALUES ('20', '4', '84', null, null, '0', '山西大同还是那个地方', '1489631014', '2147483647', '348.00', '小样');
INSERT INTO `order_table` VALUES ('21', '4', '85', null, null, '0', '山西大同还是那个地方', '1489631601', '2147483647', '398.00', '小样');
INSERT INTO `order_table` VALUES ('22', '4', '82', null, null, '0', '山西大同还是那个地方', '1489632359', '2147483647', '99.00', '小样');
INSERT INTO `order_table` VALUES ('23', '11', '60,82', null, null, '4', '河北石家庄大东', '1489636880', '15856743467', '169.00', '南山');
INSERT INTO `order_table` VALUES ('24', '11', '41,82', null, null, '3', '河北石家庄大东', '1489714927', '15856743467', '298.00', '南山');
INSERT INTO `order_table` VALUES ('25', '11', '80', '23456789', '顺丰快递', '1', '河北石家庄大东', '1489714957', '15856743467', '68.00', '南山');
INSERT INTO `order_table` VALUES ('26', '1', '81', '111111', '顺丰快递', '1', '河北秦皇岛123122312', '1489715931', '15856734390', '59.00', '1222222');
INSERT INTO `order_table` VALUES ('28', '1', '83', null, null, '0', '河北秦皇岛123122312', '1489720822', '15856734390', '219.00', '1222222');
INSERT INTO `order_table` VALUES ('29', '1', '82', null, null, '0', '河北秦皇岛12ertuioertyuio', '1489721143', '15856734390', '297.00', '1222222');
INSERT INTO `order_table` VALUES ('30', '12', '38', null, null, '3', '河南开封阿得旺斯', '1489722863', '15678653421', '299.00', '任蒙');
INSERT INTO `order_table` VALUES ('31', '12', '41,34', null, null, '3', '河南开封交换机', '1489723574', '15856743467', '698.00', '任蒙');
INSERT INTO `order_table` VALUES ('32', '1', '38,41', null, null, '0', '河北秦皇岛123122312', '1489723688', '15856734390', '498.00', '1222222');
