-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Volcando estructura para tabla test.db_cuotas_pagadas
CREATE TABLE IF NOT EXISTS `db_cuotas_pagadas` (
  `id_cuotas` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL DEFAULT '0',
  `usuario` varchar(50) DEFAULT NULL,
  `recibido` decimal(10,0) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  PRIMARY KEY (`id_cuotas`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla test.db_cuotas_pagadas: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `db_cuotas_pagadas` DISABLE KEYS */;
INSERT INTO `db_cuotas_pagadas` (`id_cuotas`, `codigo`, `usuario`, `recibido`, `estado`, `fecha_pago`) VALUES
	(1, 'COBRO0001', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(2, 'COBRO0001', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(3, 'COBRO0001', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(4, 'COBRO0001', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(5, 'COBRO0004', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(6, 'COBRO0005', 'YORDIS', 15000, 'Pagada', '2020-11-15'),
	(7, 'COBRO0007', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(8, 'COBRO0007', 'YORDIS', 30000, 'Pagada', '2020-11-15'),
	(9, 'COBRO0008', 'YORDIS', 55000, 'Pagada', '2020-11-15'),
	(10, 'COBRO0009', 'YORDIS', 90000, 'Pagada', '2020-11-15'),
	(11, 'COBRO0009', 'YORDIS', 90000, 'Pagada', '2020-11-15'),
	(12, 'COBRO0009', 'YORDIS', 90000, 'Pagada', '2020-11-15'),
	(13, 'COBRO0003', 'YORDIS', 120000, 'Pagada', '2020-11-15'),
	(14, 'COBRO0009', 'YORDIS', 40000, 'Pagada', '2020-11-15'),
	(15, 'COBRO0005', 'YORDIS', 15000, 'Pagada', '2020-11-19'),
	(16, 'COBRO0002', 'YORDIS', 60000, 'Pagada', '2020-11-19'),
	(17, 'COBRO0009', 'YORDIS', 50000, 'Pagada', '2020-11-19'),
	(18, 'COBRO0006', 'YORDIS', 50000, 'Pagada', '2020-11-20'),
	(19, 'COBRO0007', 'YORDIS', 30000, 'Pagada', '2020-11-22'),
	(20, 'COBRO0004', 'YORDIS', 30000, 'Pagada', '2020-11-22'),
	(21, 'COBRO0011', 'YORDIS', 5000, 'Pagada', '2020-11-22'),
	(22, 'COBRO0011', 'YORDIS', 5000, 'Pagada', '2020-11-22');
/*!40000 ALTER TABLE `db_cuotas_pagadas` ENABLE KEYS */;

-- Volcando estructura para tabla test.db_historial
CREATE TABLE IF NOT EXISTS `db_historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diacita` date DEFAULT NULL,
  `horacita` varchar(50) DEFAULT NULL,
  `especialista` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `pnombre` varchar(50) DEFAULT NULL,
  `papellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `estadocita` varchar(50) DEFAULT NULL,
  `fechacomentario` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla test.db_historial: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `db_historial` DISABLE KEYS */;
INSERT INTO `db_historial` (`id`, `diacita`, `horacita`, `especialista`, `numero`, `pnombre`, `papellido`, `usuario`, `estadocita`, `fechacomentario`) VALUES
	(2, '2020-10-26', '14:49', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'yordis', 'ATENDIDO', '2020-05-29'),
	(3, '2020-10-26', '14:53', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'yordis', 'AUSENTE', '2020-05-29'),
	(4, '2020-10-26', '16:50', 'YORDIS ESCORCIA', '10283388', 'AVIS', 'BARRIOS', 'yordis', 'POR ATENDER', '2020-05-29'),
	(5, '2020-10-26', '18:39', 'DAIRO BARRIOS', '105830384', 'DANIELA', 'CASSIANI', 'yordis', 'POR ATENDER', '2020-05-29'),
	(6, '2020-10-26', '17:39', 'DAIRO BARRIOS', '878787878', 'JOSE', 'YEPES', 'yordis', 'POR ATENDER', '2020-05-29'),
	(7, '2020-10-26', '16:16', 'YORDIS ESCORCIA', '12232454', 'DAYANA', 'REALES', 'yordis', 'ATENDIDO', '2020-05-29'),
	(8, '2020-10-26', '13:46', 'DAIRO BARRIOS', '102834466', 'CARDONA', 'SALAZAR', 'yordis.escorcia', 'ATENDIDO', '2020-05-30'),
	(9, '2020-10-26', '15:46', 'DAIRO BARRIOS', '10283388', 'AVIS', 'BARRIOS', 'yordis.escorcia', 'POR ATENDER', '2020-05-30'),
	(10, '2020-10-26', '15:50', 'YORDIS ESCORCIA', '104372662', 'MANUELA2', 'REALES2', 'yordis.escorcia', 'POR ATENDER', '2020-05-30'),
	(11, '2020-10-26', '17:53', 'YORDIS ESCORCIA', '212121', 'MORELA', 'ESCORCIA', 'yordis.escorcia', 'POR ATENDER', '2020-05-30'),
	(12, '2020-10-26', '16:52', 'DAIRO BARRIOS', '123456789', 'NENA', 'CASTRO', 'yordis.escorcia', 'POR ATENDER', '2020-05-30'),
	(13, '2020-10-26', '15:18', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'yordis', 'POR ATENDER', '2020-06-03'),
	(16, '2020-10-26', '23:25', 'YORDIS ESCORCIA', '104372662', ' MANUELA2', 'REALES2', 'YORDIS', 'POR ATENDER', '2020-06-09'),
	(17, '2020-10-26', '17:40', 'YORDIS ESCORCIA', '10283388', 'AVIS', 'BARRIOS', 'YORDIS', 'POR ATENDER', '2020-06-10'),
	(19, '2020-10-26', '17:45', 'YORDIS ESCORCIA', '10283388', 'AVIS', 'BARRIOS', 'YORDIS', 'POR ATENDER', '2020-06-10'),
	(20, '2020-10-26', '17:45', 'YORDIS ESCORCIA', '12232454', 'DAYANA', 'REALES', 'YORDIS', 'POR ATENDER', '2020-06-10'),
	(21, '2020-10-26', '19:45', 'YORDIS ESCORCIA', '10283388', 'AVIS', 'BARRIOS', 'YORDIS', 'POR ATENDER', '2020-06-10'),
	(22, '2020-10-26', '19:43', 'YORDIS ESCORCIA', '10342765', 'DANIEL', 'CARDONA', 'YORDIS', 'ATENDIDO', '2020-06-10'),
	(23, '2020-10-26', '22:11', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'YORDIS', 'POR ATENDER', '2020-06-10'),
	(24, '2020-10-26', '22:12', 'YORDIS ESCORCIA', '12232454', 'DAYANA', 'REALES', 'YORDIS', 'ATENDIDO', '2020-06-10'),
	(25, '2020-10-26', '14:21', 'DAIRO BARRIOS', '34343434', 'TEST', 'TEST2', 'YORDIS', 'ATENDIDO', '2020-06-10');
/*!40000 ALTER TABLE `db_historial` ENABLE KEYS */;

-- Volcando estructura para tabla test.db_usuarios
CREATE TABLE IF NOT EXISTS `db_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `fechan` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permisos` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla test.db_usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `db_usuarios` DISABLE KEYS */;
INSERT INTO `db_usuarios` (`id`, `documento`, `numero`, `nombre`, `apellido`, `fechan`, `sexo`, `username`, `password`, `permisos`, `status`) VALUES
	(5, 'CC', '2873273', 'ANDRES', 'REALES', '2020-06-05', 'MASCULINO', 'andres', '231badb19b93e44f47da1bd64a8147f2', 'USER', 'activo'),
	(6, 'CC', '1045307221', 'YORDIS', 'ESCORCIA', '2020-06-05', 'MASCULINO', 'yordis', 'd80e86803fc053d3a21bea1c824554c2', 'USER', 'activo'),
	(7, 'CC', '147547537', 'DAIRO', 'BARRIOS', '2020-06-06', 'MASCULINO', 'dairo', '72ac9051bf804b13209fd78611705a7b', 'ADMIN', 'activo');
/*!40000 ALTER TABLE `db_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla test.db_usuarios_cobrar
CREATE TABLE IF NOT EXISTS `db_usuarios_cobrar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `prestado` decimal(10,0) DEFAULT NULL,
  `acobrar` decimal(10,0) DEFAULT NULL,
  `recibido` decimal(10,0) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fechapc` date DEFAULT NULL,
  `fechauc` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla test.db_usuarios_cobrar: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `db_usuarios_cobrar` DISABLE KEYS */;
INSERT INTO `db_usuarios_cobrar` (`id`, `codigo`, `nombres`, `apellidos`, `direccion`, `estado`, `prestado`, `acobrar`, `recibido`, `fecha_entrega`, `fechapc`, `fechauc`) VALUES
	(1, 'COBRO0001', 'DUBA', 'ROMERO', 'calle 44 # 32-45', 'Inactivo', 100000, 120000, 120000, '2020-10-24', '2020-10-24', '2020-11-14'),
	(2, 'COBRO0002', 'YUBERLIS', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 200000, 240000, 60000, '2020-11-14', '2020-11-21', '2020-12-12'),
	(3, 'COBRO0003', 'NENE', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 200000, 240000, 120000, '2020-11-08', '2020-11-28', '2020-11-30'),
	(4, 'COBRO0004', 'MICHELL', 'TRILLO', 'calle 44 # 32-45', 'Activo', 100000, 120000, 60000, '2020-11-08', '2020-11-13', '2020-12-04'),
	(5, 'COBRO0005', 'KATERINE', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 50000, 60000, 30000, '2020-11-03', '2020-11-10', '2020-12-01'),
	(6, 'COBRO0006', 'SAPO', 'APELLIDO', 'calle 44 # 32-45', 'Inactivo', 40000, 50000, 50000, '2020-11-03', '2020-11-17', '2020-11-17'),
	(7, 'COBRO0007', 'ELI', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 100000, 120000, 90000, '2020-10-30', '2020-11-06', '2020-11-27'),
	(8, 'COBRO0008', 'DEYA', 'ESCORCIA', 'calle 44 # 32-45', 'Inactivo', 50000, 55000, 55000, '2020-10-24', '2020-10-24', '2020-11-08'),
	(9, 'COBRO0009', 'KENDRI', 'SANSO', 'calle 44 # 32-45', 'Inactivo', 300000, 360000, 360000, '2020-10-24', '2020-10-24', '2020-11-14'),
	(10, 'COBRO0010', 'LUIS', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 100000, 120000, 0, '2020-11-20', '2020-11-27', '2020-12-18'),
	(11, 'COBRO0011', 'NOEMI', 'QUINTERO', 'calle 44 # 32-45', 'Activo', 100000, 120000, 10000, '2020-11-19', '2020-11-20', '2020-12-18'),
	(12, 'COBRO0012', 'DUBA2', 'ROMERO', 'calle 44 # 32-45', 'Activo', 150000, 180000, 0, '2020-11-20', '2020-11-20', '2020-12-18'),
	(13, 'COBRO0013', 'AMIGO ELIZABETH', 'APELLIDO', 'calle 44 # 32-45', 'Activo', 100000, 120000, 0, '2020-11-21', '2020-11-28', '2020-12-19');
/*!40000 ALTER TABLE `db_usuarios_cobrar` ENABLE KEYS */;

-- Volcando estructura para tabla test.login
CREATE TABLE IF NOT EXISTS `login` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.login: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id_usuario`, `nombre`, `apellido`, `fecha`, `sexo`, `password`, `foto`, `estado`, `rol`, `usuario`) VALUES
	(1, 'JUAN', 'PEREZ', '2017-11-01', '0', 'aaaaa1', 'user1_128x128.jpg', 1, 0, 'juan'),
	(2, 'MARIAN', 'RODRIGUEZ', '2017-11-03', '1', 'aaaaa1', 'user7_128x128.jpg', 1, 0, 'marian'),
	(4, 'LAURA', 'LOPEZ', '2017-11-16', '0', 'aaaaa1', 'user4_128x128.jpg', 0, 0, 'laura'),
	(6, 'PEDRO', 'LEON', '2017-11-25', '0', 'aaaaa1', 'user8_128x128.jpg', 1, 0, 'pedro'),
	(53, 'CARMEN', 'LANDERSS', '2017-11-27', '0', 'aaaaa1', 'user7_128x128.jpg', 0, 0, 'carmen'),
	(54, 'PABLO', 'MIGUEL', '2017-11-06', '0', 'pabloperez123', 'usuario.png', 1, 0, 'pablo'),
	(55, 'DRAGON', 'REALES', '2020-11-27', '0', 'Cajacopi123', 'usuario.png', 0, 0, 'yordis.esc');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
