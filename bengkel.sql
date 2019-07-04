/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : bengkel

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2019-07-04 21:44:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_barang
-- ----------------------------
DROP TABLE IF EXISTS `data_barang`;
CREATE TABLE `data_barang` (
  `KD_BARANG` varchar(20) NOT NULL,
  `JENIS_BARANG` varchar(20) DEFAULT NULL,
  `NM_BARANG` varchar(40) DEFAULT NULL,
  `HARGA_JUAL` int(11) DEFAULT NULL,
  `JML_BARANG` varchar(20) DEFAULT NULL,
  `STOK` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`KD_BARANG`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_barang
-- ----------------------------
INSERT INTO `data_barang` VALUES ('B001', 'BAN', 'BAN DALAM', '100000', '1', '-90');

-- ----------------------------
-- Table structure for data_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE `data_pegawai` (
  `ID_PEG` int(11) NOT NULL AUTO_INCREMENT,
  `NM_PEG` varchar(40) DEFAULT NULL,
  `ALMT_PEG` varchar(40) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_PEG`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_pegawai
-- ----------------------------
INSERT INTO `data_pegawai` VALUES ('5', 'Candra', 'gubeng', null, null);
INSERT INTO `data_pegawai` VALUES ('6', 'Ardi', 'Semolo', null, null);

-- ----------------------------
-- Table structure for data_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `data_pelanggan`;
CREATE TABLE `data_pelanggan` (
  `ID_PEL` int(11) NOT NULL AUTO_INCREMENT,
  `NM_PEL` varchar(40) DEFAULT NULL,
  `ALMT_PEL` varchar(20) DEFAULT NULL,
  `NO_TELP_PEL` decimal(12,0) DEFAULT NULL,
  PRIMARY KEY (`ID_PEL`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_pelanggan
-- ----------------------------
INSERT INTO `data_pelanggan` VALUES ('1', 'WIJAYA', 'Jolotundo', '50312121');

-- ----------------------------
-- Table structure for data_suplayer
-- ----------------------------
DROP TABLE IF EXISTS `data_suplayer`;
CREATE TABLE `data_suplayer` (
  `ID_SUP` int(11) NOT NULL AUTO_INCREMENT,
  `NM_SUP` varchar(40) DEFAULT NULL,
  `ALMT_SUP` varchar(40) DEFAULT NULL,
  `KOTA_SUP` varchar(30) DEFAULT NULL,
  `NO_HP_SUP` decimal(12,0) DEFAULT NULL,
  PRIMARY KEY (`ID_SUP`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_suplayer
-- ----------------------------
INSERT INTO `data_suplayer` VALUES ('1', 'DANTO', 'JL', 'SURABAYA', '8080');
INSERT INTO `data_suplayer` VALUES ('2', 'ONY', 'sas', 'SIDOARJO', null);

-- ----------------------------
-- Table structure for data_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `data_transaksi`;
CREATE TABLE `data_transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PEG` int(11) NOT NULL,
  `ID_PEL` int(11) NOT NULL,
  `TGL_TRANSAKSI` date DEFAULT NULL,
  `JENIS_TRANSAKSI` varchar(25) DEFAULT NULL,
  `KET_TRANSAKSI` varchar(30) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_4` (`ID_PEL`),
  KEY `FK_RELATIONSHIP_8` (`ID_PEG`),
  CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_PEL`) REFERENCES `data_pelanggan` (`ID_PEL`),
  CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_PEG`) REFERENCES `data_pegawai` (`ID_PEG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_transaksi
-- ----------------------------
INSERT INTO `data_transaksi` VALUES ('2', '5', '1', '2019-07-01', null, null, null);
INSERT INTO `data_transaksi` VALUES ('3', '5', '1', '2019-07-01', null, null, null);

-- ----------------------------
-- Table structure for detail_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi` (
  `ID_DETAIL` int(11) NOT NULL AUTO_INCREMENT,
  `KD_BARANG` varchar(20) DEFAULT NULL,
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_JASA` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `DETAIL_HARGA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DETAIL`),
  KEY `FK_RELATIONSHIP_10` (`ID_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_12` (`ID_JASA`),
  KEY `FK_RELATIONSHIP_9` (`KD_BARANG`),
  CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `data_transaksi` (`ID_TRANSAKSI`),
  CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_JASA`) REFERENCES `jasa` (`ID_JASA`),
  CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`KD_BARANG`) REFERENCES `data_barang` (`KD_BARANG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_transaksi
-- ----------------------------
INSERT INTO `detail_transaksi` VALUES ('2', 'B001', '2', null, '1', '100');
INSERT INTO `detail_transaksi` VALUES ('3', 'B001', '3', null, '1', '100');

-- ----------------------------
-- Table structure for det_pengiriman
-- ----------------------------
DROP TABLE IF EXISTS `det_pengiriman`;
CREATE TABLE `det_pengiriman` (
  `ID_DETIAL` int(11) NOT NULL AUTO_INCREMENT,
  `KD_BARANG` varchar(20) NOT NULL,
  `ID_PENGIRIMAN` int(11) NOT NULL,
  `ATTRIBUTE_11` varchar(25) DEFAULT NULL,
  `JML_BRG` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_DETIAL`),
  KEY `FK_RELATIONSHIP_11` (`ID_PENGIRIMAN`),
  KEY `FK_RELATIONSHIP_3` (`KD_BARANG`),
  CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_PENGIRIMAN`) REFERENCES `pengiriman` (`ID_PENGIRIMAN`),
  CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`KD_BARANG`) REFERENCES `data_barang` (`KD_BARANG`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of det_pengiriman
-- ----------------------------
INSERT INTO `det_pengiriman` VALUES ('1', 'B001', '14', null, '1');
INSERT INTO `det_pengiriman` VALUES ('5', 'B001', '18', null, '6');
INSERT INTO `det_pengiriman` VALUES ('6', 'B001', '19', null, '6');
INSERT INTO `det_pengiriman` VALUES ('7', 'B001', '20', null, '6');
INSERT INTO `det_pengiriman` VALUES ('8', 'B001', '21', null, '6');

-- ----------------------------
-- Table structure for jasa
-- ----------------------------
DROP TABLE IF EXISTS `jasa`;
CREATE TABLE `jasa` (
  `ID_JASA` int(11) NOT NULL AUTO_INCREMENT,
  `JENIS_JASA` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  PRIMARY KEY (`ID_JASA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jasa
-- ----------------------------

-- ----------------------------
-- Table structure for pengiriman
-- ----------------------------
DROP TABLE IF EXISTS `pengiriman`;
CREATE TABLE `pengiriman` (
  `ID_PENGIRIMAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PEG` int(11) NOT NULL,
  `ID_SUP` int(11) NOT NULL,
  `TANGGAL` date NOT NULL,
  `TOTAL` int(11) NOT NULL,
  PRIMARY KEY (`ID_PENGIRIMAN`),
  KEY `FK_RELATIONSHIP_6` (`ID_SUP`),
  KEY `FK_RELATIONSHIP_7` (`ID_PEG`),
  CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_SUP`) REFERENCES `data_suplayer` (`ID_SUP`),
  CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_PEG`) REFERENCES `data_pegawai` (`ID_PEG`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengiriman
-- ----------------------------
INSERT INTO `pengiriman` VALUES ('14', '5', '2', '2019-07-01', '0');
INSERT INTO `pengiriman` VALUES ('18', '5', '1', '2019-07-01', '0');
INSERT INTO `pengiriman` VALUES ('19', '5', '1', '2019-07-01', '0');
INSERT INTO `pengiriman` VALUES ('20', '5', '1', '2019-07-01', '0');
INSERT INTO `pengiriman` VALUES ('21', '5', '1', '2019-07-01', '0');
SET FOREIGN_KEY_CHECKS=1;
