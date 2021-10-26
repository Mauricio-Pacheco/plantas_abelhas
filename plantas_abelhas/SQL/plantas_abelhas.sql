/*
Navicat MySQL Data Transfer

Source Server         : MYSQL LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : plantas_abelhas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-10-26 10:25:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for abelhas
-- ----------------------------
DROP TABLE IF EXISTS `abelhas`;
CREATE TABLE `abelhas` (
  `codigo_abelha` int(11) NOT NULL AUTO_INCREMENT,
  `nome_abelha` varchar(255) DEFAULT NULL,
  `tipo_abelha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_abelha`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of abelhas
-- ----------------------------
INSERT INTO `abelhas` VALUES ('1', 'Uruçu', 'Melipona scutellaris');
INSERT INTO `abelhas` VALUES ('2', 'Uruçu-Amarela', 'Melipona rufiventris');
INSERT INTO `abelhas` VALUES ('3', 'Guarupu', 'Melipona bicolor');
INSERT INTO `abelhas` VALUES ('4', 'Iraí', 'Nannotrigona testaceicornes');

-- ----------------------------
-- Table structure for plantas
-- ----------------------------
DROP TABLE IF EXISTS `plantas`;
CREATE TABLE `plantas` (
  `codigo_planta` int(11) NOT NULL AUTO_INCREMENT,
  `nome_planta` varchar(255) DEFAULT NULL,
  `tipo_planta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo_planta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of plantas
-- ----------------------------
INSERT INTO `plantas` VALUES ('1', 'Cosmos', 'Polinizada');
INSERT INTO `plantas` VALUES ('2', 'Coentro', 'Polinizada');
INSERT INTO `plantas` VALUES ('3', 'Mirra', 'Florescem');
INSERT INTO `plantas` VALUES ('4', 'Tomilho', 'Florescem');
