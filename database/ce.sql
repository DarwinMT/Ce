/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : ce

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2016-11-15 22:26:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `persona`
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `id_pe` int(11) NOT NULL AUTO_INCREMENT,
  `id_tp` int(11) DEFAULT NULL,
  `ci` varchar(20) DEFAULT NULL,
  `nombre` varchar(400) DEFAULT NULL,
  `apellido` varchar(400) DEFAULT NULL,
  `avatar` text,
  `genero` varchar(25) DEFAULT NULL,
  `fechan` date DEFAULT NULL,
  `estado` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id_pe`),
  KEY `id_tp` (`id_tp`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_tp`) REFERENCES `tipopersona` (`id_tp`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES ('1', '1', null, 'DARWIN', 'TARAPUEZ', null, null, '1990-12-04', '1');
INSERT INTO `persona` VALUES ('5', '4', '0123456789', 'Gabriel', 'Bonilla', null, null, '1990-01-31', '1');
INSERT INTO `persona` VALUES ('6', '4', '9874561230', 'Cristhian', 'Ballesteros', null, null, '1992-03-02', '1');

-- ----------------------------
-- Table structure for `tipopersona`
-- ----------------------------
DROP TABLE IF EXISTS `tipopersona`;
CREATE TABLE `tipopersona` (
  `id_tp` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id_tp`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipopersona
-- ----------------------------
INSERT INTO `tipopersona` VALUES ('1', 'SUPERADMIN', '1');
INSERT INTO `tipopersona` VALUES ('2', 'ADMINISTRADOR', '1');
INSERT INTO `tipopersona` VALUES ('3', 'PROVEEDOR', '1');
INSERT INTO `tipopersona` VALUES ('4', 'CLIENTE', '1');
INSERT INTO `tipopersona` VALUES ('5', 'EMPLEADO', '1');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `id_pe` int(11) DEFAULT NULL,
  `username` varchar(600) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `estado` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id_u`),
  KEY `id_ud` (`id_pe`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_pe`) REFERENCES `persona` (`id_pe`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', '1', 'dcharle02@hotmail.com', '202cb962ac59075b964b07152d234b70', '1');
INSERT INTO `usuario` VALUES ('2', null, 'darwinMT@gmail.com', '202cb962ac59075b964b07152d234b70', '1');
INSERT INTO `usuario` VALUES ('3', null, 'darwinAl@gmail.com', '202cb962ac59075b964b07152d234b70', '2');
