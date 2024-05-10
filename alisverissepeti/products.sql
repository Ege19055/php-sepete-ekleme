/*
Navicat MySQL Data Transfer

Source Server         : php_kurs
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cart

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-03-17 03:13:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Kedi Maması', 'Çok Lezzetli bir kedi maması', '100.00', 'kedi.jpg');
INSERT INTO `products` VALUES ('2', 'Köpek Maması', 'Çok lezzetli bir köpek maması', '80.00', 'kopek.jpg');
INSERT INTO `products` VALUES ('3', 'Kolye', 'Kediniz bunu çok sevecek', '50.00', 'kolye.jpg');
INSERT INTO `products` VALUES ('4', 'Köpek Tasması', 'Köpeğiniz bunu çok sevecek', '60.00', 'tasma.jpg');
