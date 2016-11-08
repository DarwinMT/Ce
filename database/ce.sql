/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : ce

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-11-07 21:52:57
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
  `fechan` date DEFAULT NULL,
  `estado` varchar(1) DEFAULT '1',
  PRIMARY KEY (`id_pe`),
  KEY `id_tp` (`id_tp`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_tp`) REFERENCES `tipopersona` (`id_tp`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES ('1', '1', null, 'DARWIN', 'TARAPUEZ', null, '1990-12-04', '1');
INSERT INTO `persona` VALUES ('5', '4', '0123456789', 'Gabriel', 'Bonilla', null, '1990-01-31', '1');
INSERT INTO `persona` VALUES ('6', '4', '9874561230', 'Cristhian', 'Ballesteros', null, '1992-03-02', '1');
INSERT INTO `persona` VALUES ('10', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('11', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('12', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('13', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('14', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('15', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('16', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('17', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('18', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('19', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('20', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('21', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('22', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('23', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('24', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('25', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('26', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('27', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('28', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('29', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('30', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('31', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('32', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('33', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('34', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('35', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('36', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('37', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('38', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('39', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('40', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('41', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('42', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('43', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('44', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('45', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('46', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('47', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('48', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('49', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('50', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('51', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('52', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('53', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('54', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('55', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('56', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('57', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('58', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('59', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('60', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('61', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('62', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('63', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('64', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('65', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('66', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');
INSERT INTO `persona` VALUES ('67', '4', '123456789', 'SDFGHJK', 'asdasda', null, '1990-12-01', '1');

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
