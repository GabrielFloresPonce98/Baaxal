-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla baaxal.comentario
CREATE TABLE IF NOT EXISTS `comentario` (
  `ID_Comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Autor` int(11) DEFAULT NULL,
  `ID_Publicacion` int(11) DEFAULT NULL,
  `textoComentarios` varchar(50) DEFAULT NULL,
  `fechaComentado` date DEFAULT NULL,
  PRIMARY KEY (`ID_Comentarios`),
  KEY `FK_comentario_usuario` (`ID_Autor`),
  KEY `FK_comentario_publicacion` (`ID_Publicacion`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla baaxal.comentario: 3 rows
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT IGNORE INTO `comentario` (`ID_Comentarios`, `ID_Autor`, `ID_Publicacion`, `textoComentarios`, `fechaComentado`) VALUES
	(1, 13, 3, 'Thank you so much for your help!', '2021-05-27'),
	(2, 17, 1, 'Quita tu chingadera, no esta divertida.', '2021-05-28'),
	(3, 14, 1, 'No sea grosero joven no manche', '2021-05-28');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;

-- Volcando estructura para tabla baaxal.leecion
CREATE TABLE IF NOT EXISTS `leecion` (
  `ID_Leccion` int(11) NOT NULL AUTO_INCREMENT,
  `NombreLeccion` varchar(50) DEFAULT NULL,
  `porcentajeAvance` varchar(50) DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `ID_UsuaLeccion` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Leccion`),
  KEY `FK_leecion_usuario` (`ID_UsuaLeccion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla baaxal.leecion: 0 rows
/*!40000 ALTER TABLE `leecion` DISABLE KEYS */;
/*!40000 ALTER TABLE `leecion` ENABLE KEYS */;

-- Volcando estructura para tabla baaxal.publicacion
CREATE TABLE IF NOT EXISTS `publicacion` (
  `ID_Publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `tituloPublicacion` varchar(200) DEFAULT NULL,
  `detalle` mediumtext,
  `fechaPublicacion` date DEFAULT NULL,
  PRIMARY KEY (`ID_Publicacion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla baaxal.publicacion: 5 rows
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
INSERT IGNORE INTO `publicacion` (`ID_Publicacion`, `tituloPublicacion`, `detalle`, `fechaPublicacion`) VALUES
	(1, ' Â¿CÃ³mo se dice QUÃ‰ en inglÃ©s sin que sea pregunta?', 'WHAT (quÃ© en inglÃ©s) se utiliza para preguntas, pero..., cuando no te refieres a una pregunta, Â¿CÃ³mo se dice?', '2021-05-27'),
	(2, 'Â¿Alguien me puede explicar la diferencia entre: Thank you very much, y Thank you so much?', 'Plis', '2021-05-27'),
	(3, 'Diferentes usos de la palabras "Mean" en inglÃ©s [Entra aquÃ­]', 'Esta vez harÃ© algo diferente a lo que suelo hacer. Esta vez explicarÃ© alguno de los usos de la palabra Mean en InglÃ©s ya que esta palabra puede ser confusa si no conoces sus significados. Ahora empezemos', '2021-05-27'),
	(4, 'Auxiliar Does ,do and Did', 'I would like to know how use auxiliar Do, Does and Did. In general the auxiliar use for phrase in Simple Present ,how I realize when I have to use them and why in some cases it means "to do"', '2021-05-27'),
	(5, 'No le entiendo al inglish', 'Ayuda', '2021-05-28');
/*!40000 ALTER TABLE `publicacion` ENABLE KEYS */;

-- Volcando estructura para tabla baaxal.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCompleto` varchar(80) NOT NULL DEFAULT '0',
  `Correo` varchar(80) NOT NULL DEFAULT '0',
  `NombreUsuario` varchar(80) NOT NULL DEFAULT '0',
  `Contra` varchar(80) NOT NULL DEFAULT '0',
  `Nivel` varchar(50) NOT NULL DEFAULT '0',
  `DiaRegistro` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_Usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla baaxal.usuario: 5 rows
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT IGNORE INTO `usuario` (`ID_Usuario`, `NombreCompleto`, `Correo`, `NombreUsuario`, `Contra`, `Nivel`, `DiaRegistro`) VALUES
	(14, 'Adan Gabriel Flores Ponce', 'adangabrielf@gmail.com', 'gabriel123', '123', 'BAJO', '2021-05-04 02:44:19'),
	(13, 'Perla Ixchel Estrella Hernandez', 'perla@gmail.com', 'adan123', '123', 'MEDIO', '2021-05-04 02:38:12'),
	(15, 'Adan Gabriel Ponce Flores', 'gabrieladanfp@gmail.com', 'Adan123', '123', 'BAJO', '2021-05-04 19:53:56'),
	(16, 'Brenda Medina Arroyo', 'brendamedina@gmail.com', 'bren123', '123', 'BAJO', '2021-05-24 17:32:48'),
	(17, 'DAVID JUAREZ VAZQUEZ', 'peque@gmail.com', 'David', '9898', 'BAJO', '2021-05-28 01:06:27');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla baaxal.usuario_publicacion
CREATE TABLE IF NOT EXISTS `usuario_publicacion` (
  `ID_UsuCont` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Publicacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_UsuCont`),
  KEY `FK_usuario_publicacion_usuario` (`ID_Usuario`),
  KEY `FK_usuario_publicacion_publicacion` (`ID_Publicacion`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla baaxal.usuario_publicacion: 5 rows
/*!40000 ALTER TABLE `usuario_publicacion` DISABLE KEYS */;
INSERT IGNORE INTO `usuario_publicacion` (`ID_UsuCont`, `ID_Usuario`, `ID_Publicacion`) VALUES
	(1, 16, 1),
	(2, 13, 2),
	(3, 15, 3),
	(4, 13, 4),
	(5, 17, 5);
/*!40000 ALTER TABLE `usuario_publicacion` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
