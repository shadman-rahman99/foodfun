/*
Navicat MySQL Data Transfer

Source Server         : MyDB
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : foodfun

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2020-05-10 09:20:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for review
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Description` longtext NOT NULL,
  `DateUploaded` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('1', 'Ayaz123', 'Never been happier! Ivae been liking there fucking food for a long time. I dont knw why but my diabetes has dramatically increased. I am suffering from dirriahoe and my brain has stopped functioning after having their brainSmacker burger. But tried their veg option and felt like a cow', '2020-06-26', 'customer5.jpg');
INSERT INTO `review` VALUES ('2', 'Jamee', 'Ivae been liking there fucking food for a long time. I dont knw why but my diabetes has dramatically increased. I am suffering from dirriahoe and my brain has stopped functioning after having their brainSmacker burger. But tried their veg option and felt like a cow ', '2020-06-26', 'customer1.png');
INSERT INTO `review` VALUES ('3', 'John Smith', 'Praise the culinary gods. I was blind but then I had a bite of their Beef Burger and like a miracle I was able to walk again. Amazing!', '2020-06-26', 'customer3.png');
INSERT INTO `review` VALUES ('4', 'Karen', 'This might be the first time where I called the manager and did not complain. Amazing food and service. Truly the best!', '2020-06-26', 'customer4.png');
INSERT INTO `review` VALUES ('5', 'Xiao Piao Piao', 'Best japanese food I ever tasted. 11 out of 7.', '2020-06-26', 'c5.jpg');
