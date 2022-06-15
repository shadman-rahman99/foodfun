/*
Navicat MySQL Data Transfer

Source Server         : MyDB
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : foodfun

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2020-05-10 09:20:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `desc` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Chicken Burger', '7.00', 'update1.jpg', 'Home grown chicken from the Himalayas. The best chicken meat there is combined with the bread made from the flour of the first bread ever baked by man. This is the greatest Chicken Burger of all time.');
INSERT INTO `menu` VALUES ('2', 'Beef Burger', '7.30', 'food2.jpg', 'The best cows from Kobe, Japan. Bred to perfection and then cooked by our chefs. Nothing more needs to be said. This is the greatest Beef Burger of all time.');
INSERT INTO `menu` VALUES ('3', 'Wagyu Steak', '13.00', 'update3.jpg', 'If we were going to make a burger made from the best beef in the world, of course the steak will not fall in comparison. This is the greatest Wagyu Steak of all time.');
INSERT INTO `menu` VALUES ('4', 'Thai Chicken', '11.00', 'food4.jpg', 'This is the greatest Thai Chicken of all time.');
INSERT INTO `menu` VALUES ('5', 'Salad', '5.00', 'food5.jpg', 'It might look simple. But this is the greatest Salad of all time.');
INSERT INTO `menu` VALUES ('6', 'Pufferfish Sandwich', '10.00', 'update2.jpg', 'This is the greatest Pufferfish Sandwich of all time.');
INSERT INTO `menu` VALUES ('7', 'Chicken and Beef Satay', '7.00', 'testimonial-bg.jpg', 'This is the greatest Satay combo of all time.');
INSERT INTO `menu` VALUES ('8', 'Vegan Fried Tofu', '21.00', 'food6.jpg', 'The greatest Vegan Fried Tofu of all time.');
INSERT INTO `menu` VALUES ('9', 'Teriyaki Salmon', '19.00', 'food3.jpg', 'Fresh from Alaska. This is the greatest Teriyaki Salmon of all time.');
INSERT INTO `menu` VALUES ('10', 'California Roll', '33.00', 'food1.jpg', 'California Roll go brrrrr.');
