/*
Navicat MySQL Data Transfer

Source Server         : MyDB
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : foodfun

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2020-05-10 09:20:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'Johnny B. Good', 'johnbgood@yahoo.com', 'Location', 'How do I get here? ');
INSERT INTO `contact` VALUES ('2', 'Jahseh', 'tentacion@gmail.com', 'Job Application', 'I would like a job here. Any openings?');
