/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:05:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for goods_type
-- ----------------------------
DROP TABLE IF EXISTS `goods_type`;
CREATE TABLE `goods_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `pathid` varchar(11) NOT NULL,
  `status` tinyint(255) NOT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_type
-- ----------------------------
INSERT INTO `goods_type` VALUES ('13', '男装', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('14', '女装', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('15', '手机', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('16', '华为', '15', '0,15', '0', null);
INSERT INTO `goods_type` VALUES ('17', '电脑', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('19', 'T恤', '14', '0,14', '0', null);
INSERT INTO `goods_type` VALUES ('20', '连衣裙', '14', '0,14', '0', null);
INSERT INTO `goods_type` VALUES ('22', '西装', '13', '0,13', '0', null);
INSERT INTO `goods_type` VALUES ('23', '台式机', '17', '0,17', '0', null);
INSERT INTO `goods_type` VALUES ('24', '笔记本电脑', '17', '0,17', '0', null);
INSERT INTO `goods_type` VALUES ('25', '平板电脑', '17', '0,17', '0', null);
INSERT INTO `goods_type` VALUES ('26', '美食', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('27', 'T恤', '13', '0,13', '0', null);
INSERT INTO `goods_type` VALUES ('29', '牛仔裤', '13', '0,13', '0', null);
INSERT INTO `goods_type` VALUES ('33', '李宁', '27', '0,13,27', '0', null);
INSERT INTO `goods_type` VALUES ('34', '耐克', '27', '0,13,27', '0', null);
INSERT INTO `goods_type` VALUES ('35', '阿迪达斯', '27', '0,13,27', '0', null);
INSERT INTO `goods_type` VALUES ('36', '茶叶', '26', '0,26', '0', null);
INSERT INTO `goods_type` VALUES ('37', '太平鸟', '22', '0,13,22', '0', null);
INSERT INTO `goods_type` VALUES ('38', '新郎希努尔', '22', '0,13,22', '0', null);
INSERT INTO `goods_type` VALUES ('39', '优衣库', '22', '0,13,22', '0', null);
INSERT INTO `goods_type` VALUES ('40', '李维斯', '29', '0,13,29', '0', null);
INSERT INTO `goods_type` VALUES ('41', 'GAP', '29', '0,13,29', '0', null);
INSERT INTO `goods_type` VALUES ('42', '佐丹奴', '29', '0,13,29', '0', null);
INSERT INTO `goods_type` VALUES ('46', 'D\'ZIIT', '19', '0,14,19', '0', null);
INSERT INTO `goods_type` VALUES ('47', 'UNIQLO', '19', '0,14,19', '0', null);
INSERT INTO `goods_type` VALUES ('48', '红茶', '36', '0,26,36', '0', null);
INSERT INTO `goods_type` VALUES ('49', '联想 ', '23', '0,17,23', '0', null);
INSERT INTO `goods_type` VALUES ('50', '无印良品', '19', '0,14,19', '0', null);
INSERT INTO `goods_type` VALUES ('51', '韩都衣舍', '20', '0,14,20', '0', null);
INSERT INTO `goods_type` VALUES ('52', 'SHOPTOP', '20', '0,14,20', '0', null);
INSERT INTO `goods_type` VALUES ('53', 'AMBLER', '20', '0,14,20', '0', null);
INSERT INTO `goods_type` VALUES ('54', '小米', '15', '0,15', '0', null);
INSERT INTO `goods_type` VALUES ('55', '零食', '26', '0,26', '1', null);
INSERT INTO `goods_type` VALUES ('56', '休闲零食', '55', '0,26,55', '1', null);
INSERT INTO `goods_type` VALUES ('57', 'vivo', '15', '0,15', '0', null);
INSERT INTO `goods_type` VALUES ('58', '戴尔', '23', '0,17,23', '0', null);
INSERT INTO `goods_type` VALUES ('59', '惠普', '23', '0,17,23', '0', null);
INSERT INTO `goods_type` VALUES ('60', 'OPPO ', '15', '0,15', '0', null);
INSERT INTO `goods_type` VALUES ('61', '联想', '24', '0,17,24', '0', null);
INSERT INTO `goods_type` VALUES ('62', '戴尔', '24', '0,17,24', '0', null);
INSERT INTO `goods_type` VALUES ('63', '华硕', '24', '0,17,24', '0', null);
INSERT INTO `goods_type` VALUES ('64', '绿茶', '36', '0,26,36', '0', null);
INSERT INTO `goods_type` VALUES ('65', '进口零食', '55', '0,26,55', '0', null);
INSERT INTO `goods_type` VALUES ('66', '魅族 ', '15', '0,15', '0', null);
INSERT INTO `goods_type` VALUES ('67', '华为', '25', '0,17,25', '0', null);
INSERT INTO `goods_type` VALUES ('68', 'apple ipad mini', '25', '0,17,25', '0', null);
INSERT INTO `goods_type` VALUES ('69', '乌龙茶', '36', '0,26,36', '0', null);
INSERT INTO `goods_type` VALUES ('70', '汽车', '0', '0', '0', null);
INSERT INTO `goods_type` VALUES ('71', '进口', '70', '0,70', '0', null);
