-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 03:59:31
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas`
--
CREATE DATABASE IF NOT EXISTS `practicas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `practicas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_escuelas`
--

CREATE TABLE `datos_escuelas` (
  `id_escuela` int(11) NOT NULL,
  `nombre_plantel` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sector_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `bienvenidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `becas` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `oferta_educativa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `caso_exito` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_escuelas`
--

INSERT INTO `datos_escuelas` (`id_escuela`, `nombre_plantel`, `sector_id`, `municipio_id`, `bienvenidos`, `becas`, `oferta_educativa`, `caso_exito`) VALUES
(1, 'Conalep 2', 3, 8, 'https://www.youtube.com/embed/o-ZPo6tcUc8', 'Bien', 'Como estas', 'https://www.youtube.com/embed/o-ZPo6tcUc8'),
(2, 'Sofia', 0, 8, 'https://www.youtube.com/embed/oWanBjnWtIE', 'd', 'Hello', 'https://www.youtube.com/embed/'),
(3, 'Cecyte Cancún 1', 0, 2, 'https://www.youtube.com/embed/LmMa8PpIYQc', 'd', 'd', 'https://www.youtube.com/embed/OFY3oYL8588'),
(4, 'Carlos Alberto', 0, 1, 'HHHH', 'd', 'd', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(5, 'Bachilleres', 0, 10, 'https://www.youtube.com/embed/C-p9YlwExhM', '', '', 'https://www.youtube.com/embed/OFY3oYL8588'),
(6, 'Conalep', 0, 5, 'https://www.youtube.com/embed/oWanBjnWtIE', '', '', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(7, 'Sofia', 0, 5, 'https://www.youtube.com/embed/C-p9YlwExhM', '', '', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(8, 'Josue', 0, 4, 'https://www.youtube.com/embed/0gYB-e4Pa9c', '', '', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(9, 'Josue', 0, 3, 'https://www.youtube.com/embed/0gYB-e4Pa9c', '', '', 'https://www.youtube.com/embed/OFY3oYL8588'),
(10, 'Bachilleres', 0, 9, 'https://www.youtube.com/embed/oWanBjnWtIE', '', '', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(13, 'Sofia', 0, 4, 'https://www.youtube.com/embed/C-p9YlwExhM', '', '', 'Eso espero'),
(14, 'Sofia', 0, 4, 'https://www.youtube.com/embed/C-p9YlwExhM', '', '', 'Eso espero'),
(15, 'CBTIS', 0, 6, 'https://www.youtube.com/embed/0gYB-e4Pa9c', 'EXAMEN 2 - questions.pdf', 'Bryan y equipo - 4G es.pdf', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(16, 'Conalep', 0, 3, 'https://www.youtube.com/embed/oWanBjnWtIE', 'Joel Herrera - CCNA Security.pdf', 'Josue Herrera - Azure Fundamentals.pdf', 'https://www.youtube.com/embed/OFY3oYL8588'),
(17, 'Conalep', 0, 2, 'https://www.youtube.com/embed/oWanBjnWtIE', 'CABELLO.jpg.pdf', 'CLASE 5 RECTAS EN EL ESPACIO.pdf', 'https://www.youtube.com/embed/OFY3oYL8588'),
(18, 'Bachilleres', 0, 9, 'https://www.youtube.com/embed/oWanBjnWtIE', 'Problemario_Final_ACPRE-101.pdf', '11.5.1.2 Packet Tracer - Skills Integration Challenge.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(19, 'Bachilleres', 0, 9, 'https://www.youtube.com/embed/oWanBjnWtIE', 'Problemario_Final_ACPRE-101.pdf', '11.5.1.2 Packet Tracer - Skills Integration Challenge.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(20, 'Salle Cancun', 0, 2, 'https://www.youtube.com/embed/OkbuBASZJIc', 'WEEKLY ACTIVITIES UQROO.pdf', 'Administracion_de_Memoria_x86.pdf', 'https://www.youtube.com/embed/o4IrNAvikoM'),
(21, 'Cecyte 1', 0, 2, 'https://www.youtube.com/embed/oWanBjnWtIE', 'BECAS CECYTE.pdf', 'OFERTA EDUCATIVA.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(22, 'Bachilleres', 0, 3, 'https://www.youtube.com/embed/0gYB-e4Pa9c', 'CABELLO.jpg.pdf', '11.5.1.2 Packet Tracer - Skills Integration Challenge.pdf', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(23, 'Bachilleres', 0, 3, 'https://www.youtube.com/embed/0gYB-e4Pa9c', 'CABELLO.jpg.pdf', '11.5.1.2 Packet Tracer - Skills Integration Challenge.pdf', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(24, 'Bachilleres', 0, 3, 'https://www.youtube.com/embed/0gYB-e4Pa9c', 'CABELLO.jpg.pdf', '11.5.1.2 Packet Tracer - Skills Integration Challenge.pdf', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(25, 'Cecyte Cancún 1', 0, 2, 'https://www.youtube.com/embed/2YPTsMKmeeo', 'BECAS CECYTE.pdf', 'OFERTA EDUCATIVA.pdf', 'https://www.youtube.com/embed/A7l2vzZT0eo'),
(26, 'Bachilleres Plantel Cancún 1', 0, 2, 'https://www.youtube.com/embed/OkbuBASZJIc', 'Protocolos y Recursos - Herrera Reyes Joel Josue.pdf', '16.3.1-packet-tracer - Herrera Reyes Joel Josue.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(27, 'Bachilleres Plantel Cancún 1', 0, 2, 'https://www.youtube.com/embed/OkbuBASZJIc', 'Protocolos y Recursos - Herrera Reyes Joel Josue.pdf', '16.3.1-packet-tracer - Herrera Reyes Joel Josue.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(28, 'Colegio de Bachilleres Plantel Bacalar', 0, 1, 'https://www.youtube.com/embed/hJwsFBbSQuo', 'BECAS - diana ortega Lozada.pdf', 'Oferta educativa - diana ortega Lozada.pdf', 'https://www.youtube.com/embed/LC3oKvMgiGs'),
(33, 'Colegio de Bachilleres Plantel Bacalar', 0, 1, 'https://www.youtube.com/embed/0gYB-e4Pa9c', 'BECAS CECYTE.pdf', 'OFERTA EDUCATIVA.pdf', 'https://www.youtube.com/embed/A5EGvaAdgkU'),
(34, 'carlos', 2, 9, 'Hola soy josue', '', '', 'Eso espero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_escuelas`
--

CREATE TABLE `imagenes_escuelas` (
  `id_img` int(11) NOT NULL,
  `logo_escolar` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `instalacion_1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `instalacion_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `instalacion_3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cultural_1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cultural_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cultural_3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `deporte_1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `deporte_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `deporte_3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `curricular_1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `curricular_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `curricular_3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pabellon_1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pabellon_2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pabellon_3` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes_escuelas`
--

INSERT INTO `imagenes_escuelas` (`id_img`, `logo_escolar`, `instalacion_1`, `instalacion_2`, `instalacion_3`, `cultural_1`, `cultural_2`, `cultural_3`, `deporte_1`, `deporte_2`, `deporte_3`, `curricular_1`, `curricular_2`, `curricular_3`, `pabellon_1`, `pabellon_2`, `pabellon_3`) VALUES
(1, '1749045187.jpg', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png'),
(2, 'cecyte_logo.jpeg', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png'),
(3, 'cecyte_logo.jpeg', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png'),
(4, 'cecyte_logo.jpeg', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png'),
(5, '', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png', '', '', ''),
(6, 'bachilleres_logo.png', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png'),
(7, 'bachilleres_logo.png', 'act_cult_1.png', 'act_cult_2.png', 'act_cult_3.png', 'act_dep_1.png', 'act_dep_2.png', 'act_dep_3.png', 'act_ext_1.png', 'act_ext_2.png', 'act_ext_3.png', 'pab_tec_1.png', 'pab_tec_2.png', 'pab_tec_3.png', 'instalacion_1.png', 'instalacion_2.png', 'instalacion_3.png'),
(8, 'bachilleres_logo.png', 'instalacion__3.png', 'instalacion__1.png', 'instalacion__2.png', 'Cultural_2a.png', 'Cultural_3a.png', 'Cultural_1a.png', 'Deportiva_1.png', 'Deportiva_3.png', 'Deportiva_2.png', 'extracurricular_3.png', 'extracurricular_1.png', 'extracurricular_2.png', 'pabellón_2.png', 'pabellón_1.png', 'pabellón_3.png'),
(9, 'telebachilerato.jpg', 'TBC PETCACAB (1).jpeg', 'TBC PETCACAB (2).jpeg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'salle_logo.jpg', 'instalacion_salle_1.JPG', 'instalacion_salle_2.JPG', 'instalacion_salle_3.png', 'salle_cult_1.jpeg', 'salle_cult_2.JPG', 'salle_cult_3.jpeg', 'salle_dep_1.jpg', 'salle_dep_2.jpg', 'salle_dep_3.jpg', 'salle_ext_1.jpeg', 'salle_ext_2.jpg', 'salle_ext_3.jpg', 'pab_salle_1.jpg', 'pab_salle_2.jpg', 'pab_salle_3.jpg'),
(11, 'bloqueo.jpg', 'Diagrama de flujo feria educativa - Equipo 2.png', 'Mapa Mental.png', 'Cultural_2a.png', 'bachilleres_logo.png', 'Deportiva_1.png', 'extracurricular_1.png', 'Deportiva_2.png', 'TBC PETCACAB (1).jpeg', 'extracurricular_1.png', 'act_dep_1.png', 'act_dep_3.png', 'fondo.jpg', 'act_ext_1.png', 'salle_cult_1.jpeg', 'act_ext_2.png'),
(14, '', '624917748.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '519427996.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '258295840.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipios` int(11) NOT NULL,
  `municipio` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipios`, `municipio`) VALUES
(1, 'Bacalar'),
(2, 'Benito Juárez'),
(3, 'Cozumel'),
(4, 'Felipe Carrillo Puerto'),
(5, 'Isla Mujeres'),
(6, 'Jose Maria Morelos'),
(7, 'Lazaro Cardenas'),
(8, 'Othon P. Blanco'),
(9, 'Puerto Morelos'),
(10, 'Solidaridad'),
(11, 'Tulum');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id_red_social` int(11) NOT NULL,
  `facebook` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `twitter` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `instagram` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tiktok` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `pagina_web` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `whatsapp` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `maps` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id_red_social`, `facebook`, `twitter`, `instagram`, `tiktok`, `pagina_web`, `direccion`, `whatsapp`, `telefono`, `email`, `maps`) VALUES
(2, 'https://www.facebook.com/CecyteQuintanaRooPla', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-2', 'SI disponible', '9981688942 ', 'josue.uqroo.2022@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(3, 'https://www.facebook.com/CecyteQuintanaRooPla', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-2', 'No disponibl', '9981688942 ', 'josue.uqroo.2022@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.817016637201!2d-86.853338!3d21.175925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1666062196974!5m2!1ses-419!2sus'),
(4, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/LaSalleCancun', 'No disponible', '', 'https://www.admisioneslasallecancun.info/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5', 'https://api.', '9982229764 ', 'admisiones@lasallecancun.edu.mx ', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(5, 'https://www.facebook.com/CecyteQuintanaRooPlantelCancun1', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-28, Lte. 1, Reg. 229 ', 'No disponibl', '9981688942 ', 'glenty.aviles@cecyteqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.816966327973!2d-86.853339!3d21.175926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1668986067993!5m2!1ses-419!2sus'),
(6, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://www.admisioneslasallecancun.info/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-28, Lte. 1, Reg. 229 ', 'https://api.', '9982229764 ', 'cev6807@innovaccion.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.816966327973!2d-86.853339!3d21.175926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1668986067993!5m2!1ses-419!2sus'),
(7, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://www.admisioneslasallecancun.info/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-28, Lte. 1, Reg. 229 ', 'https://api.', '9982229764 ', 'cev6807@innovaccion.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.816966327973!2d-86.853339!3d21.175926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1668986067993!5m2!1ses-419!2sus'),
(8, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://www.admisioneslasallecancun.info/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-28, Lte. 1, Reg. 229 ', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '9982229764 ', 'cev6807@innovaccion.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.816966327973!2d-86.853339!3d21.175926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1668986067993!5m2!1ses-419!2sus'),
(9, 'https://www.facebook.com/CecyteQuintanaRooPlantelCancun1', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'Calle 71 S/N, Esquina AV. Leona Vicario, Mz-28, Lte. 1, Reg. 229 ', 'No disponible', '9981688942 ', 'glenty.aviles@cecyteqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7440.816966327973!2d-86.853339!3d21.175926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61923d1bd1196645!2sCECyTE%20Canc%C3%BAn%201!5e0!3m2!1ses-419!2sus!4v1668986067993!5m2!1ses-419!2sus'),
(10, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '9982229764 ', 'cev6807@innovaccion.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(11, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/CecyteUno', 'https://www.instagram.com/cecyte1cancun/', '', 'https://qroo.gob.mx/cecyte/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '9982229764 ', 'cev6807@innovaccion.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(12, 'https://www.facebook.com/Colegio-De-Bachilleres-Plantel-Bacalar', 'No disponible', 'No disponible', '', 'http://www.cobaqroo.edu.mx/', 'AV. 15 ENTRE CALLE 16, 18 Y 20 COLONIA SERAPIO FLOTA MAAS ', 'No disponible', '983 126 8745', 'danielblanqueto@cobaqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3774.1800147613035!2d-88.50015700265503!3d18.923424532631103!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5a37f19af8d5df%3A0x415608c9ff1a860d!2sColegio%20de%20Bachilleres!5e0!3m2!1ses-419!2sus!4v1669039879608!5m2!1ses-419!2sus'),
(13, 'No disponible', 'No disponible', 'No disponible', '', 'No disponible', 'No disponible', 'No disponible', '983 8350770', 'depto.educacionmediasuperior@seq.edu.mx', 'No disponible'),
(14, 'https://www.facebook.com/lasallecancun', 'https://twitter.com/LaSalleCancun', 'No disponible', '', 'https://www.admisioneslasallecancun.info/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5 MZA.1 LT. 1 SM 299 C.P. 77560 CANCUN, QUINTANA ROO.', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '998 2229 764', 'admisiones@lasallecancun.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(15, 'https://www.facebook.com/Colegio-De-Bachilleres-Plantel-Bacalar', 'https://twitter.com/LaSalleCancun', 'https://www.instagram.com/cecyte1cancun/', '', 'http://www.cobaqroo.edu.mx/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '998 2229 764', 'glenty.aviles@cecyteqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3774.1800147613035!2d-88.50015700265503!3d18.923424532631103!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5a37f19af8d5df%3A0x415608c9ff1a860d!2sColegio%20de%20Bachilleres!5e0!3m2!1ses-419!2sus!4v1669039879608!5m2!1ses-419!2sus'),
(16, 'https://www.facebook.com/CecyteQuintanaRooPlantelCancun1', 'https://twitter.com/LaSalleCancun', 'https://www.instagram.com/cecyte1cancun/', '', 'http://www.cobaqroo.edu.mx/', 'No disponible', 'No disponible', '9982229764 ', 'glenty.aviles@cecyteqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(17, 'No disponible', 'No disponible', 'https://www.instagram.com/cecyte1cancun/', '', 'https://www.admisioneslasallecancun.info/', 'AV. 15 ENTRE CALLE 16, 18 Y 20 COLONIA SERAPIO FLOTA MAAS ', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '9981688942 ', 'glenty.aviles@cecyteqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx'),
(18, 'https://www.facebook.com/CecyteQuintanaRooPlantelCancun1', 'No disponible', 'https://www.instagram.com/cecyte1cancun/', 'No disponible', 'http://www.cobaqroo.edu.mx/', 'CARRETERA CANCUN-PLAYA DEL CARMEN KM 11.5', 'https://api.whatsapp.com/message/4GLKRUS6WZM7D1?autoload=1&app_absent=0', '9982010419', 'danielblanqueto@cobaqroo.edu.mx', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7447.034278237918!2d-86.846617!3d21.051998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeee6561a11617042!2sUniversidad%20La%20Salle%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1668992019687!5m2!1ses-419!2smx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_educativo`
--

CREATE TABLE `sector_educativo` (
  `id_sector` int(11) NOT NULL,
  `sector_educativo` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sector_educativo`
--

INSERT INTO `sector_educativo` (`id_sector`, `sector_educativo`) VALUES
(1, 'Público'),
(2, 'Privado'),
(3, 'Modular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `escuela_id` int(11) NOT NULL,
  `redes_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `escuela_id`, `redes_id`, `img_id`) VALUES
(1, 'Cecyte_Cancun1', '12345', 2, 2, 2),
(2, 'Salle_Cancun', '54321', 3, 3, 3),
(3, 'Bachilleres_Cancun1', '15963', 4, 4, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_escuelas`
--
ALTER TABLE `datos_escuelas`
  ADD PRIMARY KEY (`id_escuela`),
  ADD KEY `id_municipio` (`municipio_id`),
  ADD KEY `sector_id` (`sector_id`);

--
-- Indices de la tabla `imagenes_escuelas`
--
ALTER TABLE `imagenes_escuelas`
  ADD PRIMARY KEY (`id_img`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipios`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id_red_social`);

--
-- Indices de la tabla `sector_educativo`
--
ALTER TABLE `sector_educativo`
  ADD PRIMARY KEY (`id_sector`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_escuela` (`escuela_id`),
  ADD KEY `id_red_social` (`redes_id`),
  ADD KEY `id_img` (`img_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_escuelas`
--
ALTER TABLE `datos_escuelas`
  MODIFY `id_escuela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `imagenes_escuelas`
--
ALTER TABLE `imagenes_escuelas`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id_red_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sector_educativo`
--
ALTER TABLE `sector_educativo`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_escuelas`
--
ALTER TABLE `datos_escuelas`
  ADD CONSTRAINT `id_municipio` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id_municipios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_escuela` FOREIGN KEY (`escuela_id`) REFERENCES `datos_escuelas` (`id_escuela`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_img` FOREIGN KEY (`img_id`) REFERENCES `imagenes_escuelas` (`id_img`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_red_social` FOREIGN KEY (`redes_id`) REFERENCES `redes_sociales` (`id_red_social`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
