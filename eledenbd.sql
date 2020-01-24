/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3310
Source Database       : eledenbd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-24 17:45:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activities
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id_activities` int(11) NOT NULL AUTO_INCREMENT,
  `id_plan` int(11) NOT NULL,
  `id_workgroup` int(11) NOT NULL,
  `code_activities` varchar(10) NOT NULL,
  `name_activities` varchar(100) NOT NULL,
  `description_rol` varchar(100) NOT NULL,
  `fStart` date DEFAULT NULL,
  `fEnd` date DEFAULT NULL,
  `hour_activities` time DEFAULT NULL,
  `place_activities` varchar(100) DEFAULT NULL,
  `cost_activities` decimal(9,2) DEFAULT NULL,
  `status_activities` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_activities`),
  KEY `id_plan` (`id_plan`),
  KEY `id_workgroup` (`id_workgroup`),
  CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `workplan` (`id_plan`),
  CONSTRAINT `activities_ibfk_2` FOREIGN KEY (`id_workgroup`) REFERENCES `workgroup` (`id_workgroup`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('1', '1', '1', 'act_minjuv', 'Apertura Ministerio Juvenil', 'Apertura del Ministerio Juvenil 2020', '2020-01-04', '2020-01-04', '04:00:00', 'Templo El Eden', '500.00', '');
INSERT INTO `activities` VALUES ('2', '1', '1', 'act_minjuv', 'Celula Juvenil', 'Celula Juvenil', '2020-01-07', '2020-01-07', '00:00:00', 'Fuera del templo', '200.00', '');
INSERT INTO `activities` VALUES ('3', '1', '1', 'act_minjuv', 'Avivamiento Juvenil', 'Avivamiento Juvenil', '2020-01-25', '2020-01-25', '00:00:00', 'Templo', '1200.50', '');
INSERT INTO `activities` VALUES ('4', '1', '1', 'act_minjuv', 'Semana de la juventud', 'Semana de la juventud', '2020-02-10', '2020-02-15', '00:00:00', 'Fuera', '1200.00', '');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `code_rol` varchar(10) NOT NULL,
  `description_rol` varchar(100) NOT NULL,
  `status_rol` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrador del sistema', '');

-- ----------------------------
-- Table structure for user_at
-- ----------------------------
DROP TABLE IF EXISTS `user_at`;
CREATE TABLE `user_at` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `name_user` varchar(20) NOT NULL,
  `alias_user` varchar(20) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `description_user` varchar(100) DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  `status_user` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `user_at_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_at
-- ----------------------------
INSERT INTO `user_at` VALUES ('1', '1', 'Bismark Escobar', 'administrador', '123456', 'Administrador del sistema', '2020-01-21', '');

-- ----------------------------
-- Table structure for workgroup
-- ----------------------------
DROP TABLE IF EXISTS `workgroup`;
CREATE TABLE `workgroup` (
  `id_workgroup` int(11) NOT NULL AUTO_INCREMENT,
  `cod_workgroup` varchar(20) NOT NULL,
  `name_workgroup` varchar(100) NOT NULL,
  `description_workgroup` varchar(255) NOT NULL,
  `status_workgroup` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_workgroup`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of workgroup
-- ----------------------------
INSERT INTO `workgroup` VALUES ('1', 'min_juve', 'Ministerio Juvenil', 'El Ministerio de jovenes es un grupo de trabaja dedicado a velar por la vida espiritual de lo\'s', '');
INSERT INTO `workgroup` VALUES ('6', 'sociedad.femenil', 'Sociedad Femenil', 'Sociedad Femenil', '');

-- ----------------------------
-- Table structure for workplan
-- ----------------------------
DROP TABLE IF EXISTS `workplan`;
CREATE TABLE `workplan` (
  `id_plan` int(11) NOT NULL AUTO_INCREMENT,
  `cod_plan` varchar(20) NOT NULL,
  `name_plan` varchar(255) DEFAULT NULL,
  `description_plan` varchar(255) DEFAULT NULL,
  `date_init` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `status_plan` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_plan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of workplan
-- ----------------------------
INSERT INTO `workplan` VALUES ('1', 'plan2020', 'Plan anual 2020', 'Plan de trabajo para el año 2020', '2020-01-01', '2020-12-31', '');
