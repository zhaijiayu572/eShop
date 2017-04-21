/*
Navicat MySQL Data Transfer

Source Server         : example
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : eshop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-21 17:23:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_blog`
-- ----------------------------
DROP TABLE IF EXISTS `t_blog`;
CREATE TABLE `t_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_blog
-- ----------------------------

-- ----------------------------
-- Table structure for `t_blog_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_blog_comment`;
CREATE TABLE `t_blog_comment` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `add_time` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_blog_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `t_cart`
-- ----------------------------
DROP TABLE IF EXISTS `t_cart`;
CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_cart
-- ----------------------------

-- ----------------------------
-- Table structure for `t_category`
-- ----------------------------
DROP TABLE IF EXISTS `t_category`;
CREATE TABLE `t_category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_category
-- ----------------------------
INSERT INTO `t_category` VALUES ('1', '男士', '0');
INSERT INTO `t_category` VALUES ('2', '女士', '0');
INSERT INTO `t_category` VALUES ('3', '儿童', '0');
INSERT INTO `t_category` VALUES ('4', '上衣', '1');
INSERT INTO `t_category` VALUES ('5', '裤子', '1');
INSERT INTO `t_category` VALUES ('6', '上衣', '2');
INSERT INTO `t_category` VALUES ('7', '裤子', '2');
INSERT INTO `t_category` VALUES ('8', '西装', '4');
INSERT INTO `t_category` VALUES ('9', '化妆品', '2');
INSERT INTO `t_category` VALUES ('10', '粉底', '9');
INSERT INTO `t_category` VALUES ('11', '眼霜', '9');

-- ----------------------------
-- Table structure for `t_order`
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_order
-- ----------------------------

-- ----------------------------
-- Table structure for `t_order_item`
-- ----------------------------
DROP TABLE IF EXISTS `t_order_item`;
CREATE TABLE `t_order_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_order_item
-- ----------------------------

-- ----------------------------
-- Table structure for `t_product`
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product` (
  `cata_id` int(11) DEFAULT NULL,
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_price` float(8,2) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_product
-- ----------------------------
INSERT INTO `t_product` VALUES ('7', '1', 'BELLE B&W', '187.95', '11111');
INSERT INTO `t_product` VALUES ('7', '2', 'CLUBYORK', '187.95', '22222');
INSERT INTO `t_product` VALUES ('6', '3', 'ROADSTER', '220.95', '33333');
INSERT INTO `t_product` VALUES ('10', '4', 'BLACKFLPS', '150.95', '44444');
INSERT INTO `t_product` VALUES ('11', '5', 'RED CHECKS', '140.95', '55555');
INSERT INTO `t_product` VALUES ('11', '6', 'NEW LOOK', '100.00', '6666');
INSERT INTO `t_product` VALUES ('4', '7', 'aaaa', '133.00', '7777');
INSERT INTO `t_product` VALUES ('4', '8', 'bbbb', '123.00', '8888');
INSERT INTO `t_product` VALUES ('4', '9', 'cccc', '222.00', '9999');

-- ----------------------------
-- Table structure for `t_product_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_product_comment`;
CREATE TABLE `t_product_comment` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_content` text,
  `comm_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_product_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `t_product_img`
-- ----------------------------
DROP TABLE IF EXISTS `t_product_img`;
CREATE TABLE `t_product_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_title` varchar(255) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL COMMENT '大图路径',
  `thumb_img_src` varchar(255) DEFAULT NULL COMMENT '缩略图路径',
  `is_main` varchar(1) DEFAULT '0' COMMENT '1：主图',
  `prod_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_product_img
-- ----------------------------
INSERT INTO `t_product_img` VALUES ('1', '1111', 'uploads/products/bs1.jpg', 'uploads/products/bs1.jpg', '1', '1');
INSERT INTO `t_product_img` VALUES ('2', '2222', 'uploads/products/bs2.jpg', 'uploads/products/bs2.jpg', '1', '2');
INSERT INTO `t_product_img` VALUES ('3', '3333', 'uploads/products/bs3.jpg', 'uploads/products/bs3.jpg', '1', '3');
INSERT INTO `t_product_img` VALUES ('4', '4444', 'uploads/products/ab1.jpg', 'uploads/products/ab1.jpg', '0', '1');
INSERT INTO `t_product_img` VALUES ('5', '5555', 'uploads/products/bs4.jpg', 'uploads/products/bs4.jpg', '1', '4');
INSERT INTO `t_product_img` VALUES ('6', '6666', 'uploads/products/bs5.jpg', 'uploads/products/bs5.jpg', '1', '5');
INSERT INTO `t_product_img` VALUES ('7', '7777', 'uploads/products/bs6.jpg', 'uploads/products/bs6.jpg', '1', '6');
INSERT INTO `t_product_img` VALUES ('8', '8888', 'uploads/products/m1.jpg', 'uploads/products/m1.jpg', '1', '7');
INSERT INTO `t_product_img` VALUES ('9', '9999', 'uploads/products/m2.jpg', 'uploads/products/m2.jpg', '1', '8');
INSERT INTO `t_product_img` VALUES ('10', '101010', 'uploads/products/m3.jpg', 'uploads/products/m3.jpg', '1', '9');

-- ----------------------------
-- Table structure for `t_product_tag`
-- ----------------------------
DROP TABLE IF EXISTS `t_product_tag`;
CREATE TABLE `t_product_tag` (
  `prod_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`prod_tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_product_tag
-- ----------------------------
INSERT INTO `t_product_tag` VALUES ('1', '3', '1');
INSERT INTO `t_product_tag` VALUES ('2', '3', '2');
INSERT INTO `t_product_tag` VALUES ('3', '5', '1');
INSERT INTO `t_product_tag` VALUES ('4', '9', '1');

-- ----------------------------
-- Table structure for `t_tag`
-- ----------------------------
DROP TABLE IF EXISTS `t_tag`;
CREATE TABLE `t_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_tag
-- ----------------------------
INSERT INTO `t_tag` VALUES ('1', '潮人推荐');
INSERT INTO `t_tag` VALUES ('2', '免税商品');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `portrait` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
