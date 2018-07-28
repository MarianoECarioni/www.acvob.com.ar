-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-07-2018 a las 03:19:26
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `b7_11184280_uco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=71 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fixture`
--

CREATE TABLE IF NOT EXISTS `fixture` (
  `id_fixture` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_torneo` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  `semana` int(4) unsigned NOT NULL,
  `anio` int(4) unsigned NOT NULL,
  `numero` int(11) unsigned NOT NULL,
  `local` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `visitante` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `sede` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `hora` char(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_fixture`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6976 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_notas`
--

CREATE TABLE IF NOT EXISTS `img_notas` (
  `id_imagen` int(10) NOT NULL COMMENT 'Identificador de imágen ',
  `id_nota` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de nota.',
  `url_img` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'URL de la imágen.',
  PRIMARY KEY (`id_img`),
  KEY `id_nota` (`id_nota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de imagenes de notas.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `ID_NOTA` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id de la nota',
  `TIPO_DE_NOTA` int(11) NOT NULL COMMENT 'Tipo de Nota: 1 -Principal, 2-Secundaria',
  `TITULO` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Titulo de la nota',
  `PIE` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pie de la nota',
  `DETALLE_CORTO` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Resumen de la nota',
  `DETALLE_LARGO` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Detalle de la nota',
  `LINK_IMAGEN` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Link de la imágen de fondo',
  PRIMARY KEY (`ID_NOTA`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Notas de la Web' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`ID_NOTA`, `TIPO_DE_NOTA`, `TITULO`, `PIE`, `DETALLE_CORTO`, `DETALLE_LARGO`, `LINK_IMAGEN`) VALUES
(1, 1, 'INSCRIBITE!', 'APERTURA 2017', 'Veni a inscribirte al torneo mas emocionante de zona oeste. Un torneo que no se defina hasta llegar al final. Anotate y se parte del mejor Volley del Oeste! No te lo pierdas!', 'Espectacular partido de ida de la final de Sub-18 en UCV. Las chicas de San Clemente derrotaron a las chicas de Acquarellas por dos sets a cero, metiendose así en la semifinal del torneo apertura 2014 de la UCV. San Clemente es la primera vez, desde que ingresó a la UCV, que clasifica a la semifinal del torneo.\r\nEl entrenador dió las gracias a sus jugadoras, comentó que está contento con el equipo porque ellas dejaron todo en la cancha para lograr la clasificación.', '../Imagenes/VolleyPrincipal.jpg'),
(2, 2, 'BIENVENIDAS!', 'TORNEO 2018', 'Muy bienvenidas todas las instituciones que nos acompa&ntilde;an este nuevo a&ntilde;o de competencia!<br>\r\nNos espera un a&ntilde;o con muchas actividades y un hermoso y competitivo torneo.<br>\r\nMuchas gracias a todos por habernos  elegido y ser parte de nuestros torneos.<br> Les damos la bienvenida y esperamos que compitan con alegr&iacute;a! ', 'Desde 2016, la ACVOB es una Asociaci&oacute;n Civil reconocida legalmente como la &uacute;nica instituci&oacute;n organizadora de torneos de voley en la zona Oeste del Gran Buenos Aires.<br>\r\nDesde entonces nos esforzamos d&iacute;a a d&iacute;a para organizar torneos ordenados, justos, competitivos, flexibles y por sobre todo alegres, con su muy esperada fiesta entrega de premios.<br>\r\nEsto es posible gracias a la participaci&oacute;n de todos ustedes. \r\nICM<br> \r\nCASA DE PADUA<br>\r\nVERDAS<br>\r\nMUNICIPALIDAD DE MARCOS PAZ<br>\r\nGIMNASIA<br>\r\nHURACAN DE SAN JUSTO<br>\r\nFRENCH<br>\r\nSAAVEDRA<br>\r\nAKUA<br>\r\nENERGY<br>\r\nUVC<br>\r\nCLUB DEPORTIVO MORON<br>\r\nFRAGIO<br>\r\nSPORTIVO PONTEVEDRA<br>\r\nCEPA<br> \r\nCLUB ATLETICO ITUZAINGO<br>\r\nCOUNTRY CLUB BANCO PROVINCIA<br>\r\nTRIANGULO<br>\r\nPARQUE SAN MARTIN<br>\r\nV.AMELIA<br>\r\nINDEPENDIENTE DE MERLO<br>\r\nACQUARELLAS<br>\r\nHAEDO JRS.<br>\r\nJUMU<br>\r\nGORKI<br>\r\nWARRIORN.<br>\r\nEs por ello que les damos las gracias y la  bienvenida a todos ustedes que este a&ntilde;o comparten nuestra pasi&oacute;n por el Voley.\r\n ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE IF NOT EXISTS `posiciones` (
  `anio` int(4) unsigned NOT NULL,
  `id_torneo` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  `equipo` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `PJugado` int(4) unsigned NOT NULL,
  `PGanado` int(4) unsigned NOT NULL,
  `PPerdido` int(4) unsigned NOT NULL,
  `GanaP` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `PierdeP` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `SGanado` int(4) unsigned NOT NULL,
  `SPerdido` int(4) unsigned NOT NULL,
  `DSet` int(5) NOT NULL,
  `puntos` int(4) unsigned NOT NULL,
  `DTantos` int(7) NOT NULL,
  PRIMARY KEY (`anio`,`id_torneo`,`id_categoria`,`equipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `anio` int(4) unsigned NOT NULL,
  `id_torneo` int(11) unsigned NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  `numero` int(11) unsigned NOT NULL,
  `semana` int(4) unsigned NOT NULL,
  `fecha` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `local` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `visitante` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `ptsloc` int(4) unsigned NOT NULL,
  `ptsvis` int(4) unsigned NOT NULL,
  `s1l` int(2) unsigned NOT NULL,
  `s1v` int(2) unsigned NOT NULL,
  `s2l` int(2) unsigned NOT NULL,
  `s2v` int(2) unsigned NOT NULL,
  `s3l` int(2) unsigned NOT NULL,
  `s3v` int(2) unsigned NOT NULL,
  `s4l` int(2) unsigned NOT NULL,
  `s4v` int(2) unsigned NOT NULL,
  `s5l` int(2) unsigned NOT NULL,
  `s5v` int(2) unsigned NOT NULL,
  PRIMARY KEY (`anio`,`id_torneo`,`id_categoria`,`numero`,`semana`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE IF NOT EXISTS `torneo` (
  `id_torneo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_torneo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` char(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `clave`) VALUES
('ucovoley', 'ezequiel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
