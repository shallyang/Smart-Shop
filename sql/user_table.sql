/*
Navicat MariaDB Data Transfer

Source Server         : lamp
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : shopproject

Target Server Type    : MariaDB
Target Server Version : 100116
File Encoding         : 65001

Date: 2017-03-23 20:06:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_table
-- ----------------------------
DROP TABLE IF EXISTS `user_table`;
CREATE TABLE `user_table` (
  `userid` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `truename` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `userlevel` int(10) unsigned NOT NULL,
  `userhead` varchar(255) NOT NULL,
  `userphone` varchar(11) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userqq` varchar(15) NOT NULL DEFAULT '',
  `userstatus` tinyint(255) NOT NULL DEFAULT '1',
  `usermoney` double(255,0) DEFAULT NULL,
  `usersex` tinyint(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `userinfostatu` tinyint(255) DEFAULT '0',
  `street` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_table
-- ----------------------------
INSERT INTO `user_table` VALUES ('1', 'admin', '管理员', 'admin', '10000', '/upload/4495981489722983.png', '13867894321', '1766@qq.com', '123457787', '0', '98927', null, '', null, null, '0', null);
INSERT INTO `user_table` VALUES ('2', '小屁孩', null, 'haipixiao', '0', '/upload/2821451488550545.jpg', '', '1578430190@qq.com', '', '0', null, null, 'elXTuOzipgoeQFmsFhPLvCg3DHfLX4', null, null, '0', null);
INSERT INTO `user_table` VALUES ('4', 'yxc930708', '杨晓晨', 'yxc748914950', '0', '/upload/3277721488907585.jpg', '13312312321', '12313@qq.com', '111111', '0', '109471', '0', 'g2SoFlPny4OaCniAPWVMzx6XqbjRIM', '山西', '运城', '1', '');
INSERT INTO `user_table` VALUES ('5', 'xiaoyang', null, 'yxc748914950', '0', '/upload/3277721488907585.jpg', '', '748914950@qq.com', '', '0', null, null, 'EXS20CHJyAgtJRXGrwsTR3ygbRH9Eb', null, null, '0', null);
INSERT INTO `user_table` VALUES ('7', '任蒙', null, '660434rm', '0', '/upload/2213811489635501.jpg', '', '244876563@qq.com', '', '0', null, null, 'atvZsnCi1Tg6u9BHTmxQFTx4L5fl8B', null, null, '0', null);
INSERT INTO `user_table` VALUES ('8', '测试', null, '$2y$10$ReX2Oryf8n8ua9PB0UmpZ.4IEw44isIM4WixFZJSspHnfKerIu0yK', '0', '/upload/2493481489635740.jpg', '15296776548', 'ajs456@qq.com', '1140107677', '0', null, null, '', null, null, '0', null);
INSERT INTO `user_table` VALUES ('9', '测试1', null, '$2y$10$iJwyQwXfNHZ7M1xbXW7OAe96eBawmR8rTGhyGixiPn/LWrmyI74ve', '0', '/upload/1868211489635857.jpg', '15345678876', '1140107656@qq.com', '12345670', '1', null, null, '', null, null, '0', null);
INSERT INTO `user_table` VALUES ('10', 'zyhzyh', null, '$2y$10$ycGbj8y9XiXYUGu95gV1NuzTsnS3KKjvSVCuJ9i7jrGJH.YG0KIHy', '0', '/upload/7361381489635990.jpg', '15296777578', '1140107656@qq.com', '1140107656', '1', null, null, '', null, null, '0', null);
INSERT INTO `user_table` VALUES ('11', 'linanshan', null, 'linanshan', '0', '', '', '692285648@qq.com', '', '1', '111043', null, '6O21oTh0acJWvJWWXvod4gJEGBx88Q', null, null, '0', null);
INSERT INTO `user_table` VALUES ('12', '', '任蒙', 'bbbbbbbb', '0', '/upload/4318301489722648.png', '15296777578', '244876563@qq.com', '1140107656', '0', null, '1', 'tF7dufflEHp7wgPK1l92D6n5tEMtv9', '河南', '郑州', '1', '阿迪王所多无');
INSERT INTO `user_table` VALUES ('13', 'zhangyonghui', null, '$2y$10$1RrIEVnckjULb/aoj3p8xO2WqoKV06RtgPzXe1IVHL/RwZ8H07tOy', '0', '/upload/4182941489723045.png', '15296777578', '1140107656@qq.com', '1140107656', '1', null, null, '', null, null, '0', null);
