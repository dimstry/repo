/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - db_dimas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_dimas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_dimas`;

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `kode_jurusan` char(5) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`kode_jurusan`,`nama_jurusan`) values 
('001','REKAYASA PERANGKAT LUNAK'),
('002','TEKNIK KOMPUTER DAN JARINGAN'),
('003','TEKNIK KENDARAAN RINGAN'),
('004','PERHOTELAN'),
('005','OTOMATISASI DAN TATA KELOLA PERKANTORAN'),
('006','akuntansi');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `kode_kelas` char(5) NOT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`kode_kelas`,`nama_kelas`) values 
('011','XII RPL'),
('022','XII TKJ'),
('033','XII AKL'),
('044','XII TKRO 1'),
('055','XII TKRO 2'),
('066','XII HTL 1'),
('077','XII HTL 2'),
('088','XII OTKP 1'),
('099','XII OTKP 2'),
('111','XI RPL'),
('122','XI TKJ'),
('133','XI AKL'),
('144','XI TKRO 1'),
('155','XI TKRO 2'),
('166','XI HTL 1'),
('177','XI HTL 2'),
('188','XI OTKP 1'),
('199','XI OTKP 2'),
('211','X RPL'),
('222','X TKJ'),
('233','X AKL'),
('244','X TKRO 1'),
('255','X TKRO 2'),
('266','X HTL 1'),
('277','X HTL 2'),
('288','X OTKP 1'),
('299','X OTKP 3');

/*Table structure for table `peserta_didik` */

DROP TABLE IF EXISTS `peserta_didik`;

CREATE TABLE `peserta_didik` (
  `NIS` char(12) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Gender` enum('L','P') DEFAULT NULL,
  `Tempat_Lahir` varchar(50) DEFAULT NULL,
  `Tgl_Lahir` date DEFAULT NULL,
  `kode_jurusan` char(5) DEFAULT NULL,
  `kode_kelas` char(5) DEFAULT NULL,
  PRIMARY KEY (`NIS`),
  KEY `kode_jurusan` (`kode_jurusan`),
  KEY `kode_kelas` (`kode_kelas`),
  CONSTRAINT `peserta_didik_ibfk_1` FOREIGN KEY (`kode_jurusan`) REFERENCES `jurusan` (`kode_jurusan`),
  CONSTRAINT `peserta_didik_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peserta_didik` */

insert  into `peserta_didik`(`NIS`,`Nama`,`Gender`,`Tempat_Lahir`,`Tgl_Lahir`,`kode_jurusan`,`kode_kelas`) values 
('101010','ACHMAD FERDIAN K','L','SUBANG','2004-01-15','001','011'),
('111111','ADITIYA H','L','SUBANG','2003-03-08','001','011'),
('131313','ADITIYA D','L','SUBANG','2003-07-09','001','011'),
('141414','ADLIYANA','L','SUBANG','2003-03-08','001','011'),
('151515','AKHDAN ','L','SUBANG','2003-08-09','001','011'),
('161616','ALDA','P','SUBANG','2003-03-07','001','011'),
('171717','CIKA','L','SUBANG','2003-02-08','001','011'),
('181818','DELA','P','SUBANG','2003-03-08','001','011'),
('191919','DIMAS TRIANA','L','SUBANG','2003-08-05','001','011'),
('202020','ENDANG','L','SUBANG','2003-03-08','001','011'),
('212121','FAJAR A','L','BANDUNG','2003-07-22','001','011'),
('222222','FIKO R','L','BANDUNG','2003-03-08','001','011'),
('232323','GILANG','L','SUBANG','2003-03-08','001','011'),
('242424','KRESNA','L','SUBANG','2003-06-08','001','011'),
('252525','MILA','P','SUBANG','2003-08-08','001','011');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
