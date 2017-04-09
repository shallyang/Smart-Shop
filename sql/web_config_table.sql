/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:06:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for web_config_table
-- ----------------------------
DROP TABLE IF EXISTS `web_config_table`;
CREATE TABLE `web_config_table` (
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `open` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_config_table
-- ----------------------------
INSERT INTO `web_config_table` VALUES ('/upload/12611489977920.jpg', 'luku', 'ki', 'kiukik', 'ukuiki', '0');
INSERT INTO `web_config_table` VALUES ('/upload/12611489977920.jpg', 'luku', 'ki', 'kiukik', 'ukuiki', '0');
INSERT INTO `web_config_table` VALUES ('/upload/12611489977920.jpg', 'luku', 'ki', 'kiukik', 'ukuiki', '0');
INSERT INTO `web_config_table` VALUES ('/upload/12611489977920.jpg', 'luku', 'ki', 'kiukik', 'ukuiki', '0');
INSERT INTO `web_config_table` VALUES ('/upload/12611489977920.jpg', 'luku', 'ki', 'kiukik', 'ukuiki', '0');
