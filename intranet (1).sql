-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-05-2024 a las 14:21:05
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ID_AREA` int NOT NULL,
  `AREA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ID_AREA`, `AREA`) VALUES
(1, 'Presidencia\r\n'),
(2, 'Proyecto'),
(3, 'Consultoria Juridica'),
(4, 'Planificación y Presupuesto'),
(5, 'Gestion Humana\r\n'),
(6, 'Procura\r\n'),
(7, 'Administración y Finanzas'),
(8, 'Tic'),
(9, 'Atencion al ciudadno'),
(10, '\r\nComercializacion\r\n'),
(11, 'Seguridad\r\n'),
(12, 'Seguridad Integral\r\n'),
(13, 'Producción\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `archivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `nombre`, `descripcion`, `archivo`) VALUES
(1, 'Prueba', 'Ejemplo', 'Hola xd.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `ID` int NOT NULL,
  `GENDER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `gender`
--

INSERT INTO `gender` (`ID`, `GENDER`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `ID_GRADO` int NOT NULL,
  `grado` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`ID_GRADO`, `grado`) VALUES
(11, 'Primaria'),
(12, 'Secundaria'),
(13, 'Universitario'),
(14, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `cod_imagen` int NOT NULL,
  `imagen` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `comentario` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`cod_imagen`, `imagen`, `nombre`, `comentario`) VALUES
(1, '1.jpg', 'Canaima', 'Canaima celebra 12° aniversario como sistema operativo libre al servicio del pueblo Distribución Canaima GNU/Linux cumple 12 años promulgando y promoviendo el uso del Software Libre como herramienta emancipadora e innovadora del país. Un 18 de octubre de 2007 ocurre el lanzamiento oficial de la versión 1.0 de la distribución Canaima GNU/Linux, actualmente basada en Linux Mint Debian Edition desde diciembre del año 2016. Esta medida obedeció al Decreto Presidencial N° 3.390 del Comandante Hugo Chávez, publicado en Gaceta Oficial Nº 38.095 el 28 de diciembre de 2004 sobre el uso de tecnologías libres en la Administración Pública Nacional (APN), Su primera versión constituyó una remasterización de Debian. Su impulsor, Ernesto Hernández-Novich, comentaba en esa época que Canaima ”es una adaptación de Debian, utilizando prácticamente el mismo instalador haciendo menos preguntas y tomando decisiones a priori”'),
(19, 'im.png ', 'Feliz Aniversario', 'Industria Canaima es una empresa creada el 30 de agosto del año 2011, por el comandante Hugo Chávez, encargada de la fabricación y comercialización de equipos de informática y telecomunicaciones a nivel nacional.'),
(21, '2.jpg', 'Parque Canaima', 'Industria Canaima es una empresa creada el 30 de agosto del año 2011, por el comandante Hugo Chávez, encargada de la fabricación y comercialización de equipos de informática y telecomunicaciones a nivel nacional.'),
(34, 'Venezuela-apuesta-por-la-robotica-educativa-para-potenciar-vocaciones-tempranas-de-ninos-ninas-y-jovenes-4.jpg ', 'Venezuela apuesta por la robotica educativa', 'La vicepresidenta sectorial de Ciencia, Tecnología, Educación y Salud, Gabriela Jiménez Ramírez, participó en una nueva jornada de la I Cohorte de Formación Especializada de Robótica Educativa que se desarrolla desde el 26 de febrero en las instalaciones de Industria Canaima.\r\n\r\nDurante la actividad, que reúne a 60 docentes y facilitadores del país, la también ministra del Poder Popular para Ciencia y Tecnología, indicó que los participantes de este taller son quienes van a nutrir las aulas de clases, Infocentro, núcleos de robótica y otros espacios educativos, para capacitar a los niños, niñas y jóvenes en esta área.\r\n\r\nEn ese sentido, señaló que estos formadores tienen la tarea de fomentar en la generación de relevo el pensamiento lógico estructurado que les permita desarrollar capacidades para la producción y creación en beneficio de la Patria.'),
(35, 'Industria-Canaima-C.A.-abre-sus-puertas-para-la-formacion-especializada-en-Robotica-Educativa-4.jpg ', ' formacion especializada en robotica educativa', 'Industria Canaima, C.A. abre sus puertas para la formación especializada en Robótica Educativa\r\nVenezuela apuesta por la robótica educativa para potenciar vocaciones tempranas de niños, niñas y jóvenes\r\nIsabel Piña Sierralta: Semilleros Científicos son la piedra fundamental para fomentar las vocaciones tempranas hacia las ciencias\r\nHijos e hijas de trabajadores de Industria Canaima se divierten y aprenden en el Museo de Ciencias\r\nIndustria Canaima: Herramientas informáticas hechas con amor para el pueblo venezolano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `level`
--

CREATE TABLE `level` (
  `ID_LEVEL` int NOT NULL,
  `LEVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `level`
--

INSERT INTO `level` (`ID_LEVEL`, `LEVEL`) VALUES
(1, 'Urgente'),
(2, 'Alta'),
(3, 'Normal'),
(4, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `TIPO` int NOT NULL,
  `TIPO_USUARIOS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`TIPO`, `TIPO_USUARIOS`) VALUES
(1, 'habilitado'),
(2, 'deshabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalida`
--

CREATE TABLE `nacionalida` (
  `ID_NACIONALIDA` int NOT NULL,
  `nacionalidad` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `nacionalida`
--

INSERT INTO `nacionalida` (`ID_NACIONALIDA`, `nacionalidad`) VALUES
(1, 'Venezolano'),
(2, 'Extranjero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report`
--

CREATE TABLE `report` (
  `ID_REPORT` tinyint NOT NULL,
  `TITLE` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name_surname` varchar(100) NOT NULL,
  `ID_NAME` int DEFAULT NULL,
  `area` int NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `DATE_FINAL` date DEFAULT NULL,
  `FECHA_SOLUTION` text,
  `STATUS` int NOT NULL,
  `ID_LEVEL` int NOT NULL,
  `SOLUTION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `report`
--

INSERT INTO `report` (`ID_REPORT`, `TITLE`, `name_surname`, `ID_NAME`, `area`, `CREATION_DATE`, `DATE_FINAL`, `FECHA_SOLUTION`, `STATUS`, `ID_LEVEL`, `SOLUTION`) VALUES
(1, 'No me enciende el equipo', ' Danyerbert jose Brito rangel ', 98, 8, '2024-02-29', NULL, NULL, 1, 1, NULL),
(2, 'Mi equipo no enciende', ' Danyerbert jose Brito rangel ', 98, 8, '2024-03-06', NULL, NULL, 1, 3, NULL),
(3, 'Computadora no enciende', ' Danyerbert jose Brito rangel ', 98, 8, '2024-03-15', NULL, NULL, 1, 3, NULL),
(4, 'falla con el internet\r\n', ' luis manuel navarro moreno ', 154, 11, '2024-03-18', NULL, NULL, 1, 3, NULL),
(5, 'sdsds', ' Luis manuel Navarro Moreno ', 149, 8, '2024-04-24', NULL, NULL, 1, 2, NULL),
(6, 'dfs', ' Luis manuel Navarro Moreno ', 149, 3, '2024-04-24', NULL, NULL, 1, 4, NULL),
(7, 'fallas a la hora de crear copia de seguridad en la carpeta compartida', ' Luis manuel Navarro Moreno ', 2, 3, '2024-04-24', NULL, NULL, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `IDROLS` int NOT NULL,
  `PRIVILEGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`IDROLS`, `PRIVILEGE`) VALUES
(1, 'SUPER-ADMINISTRADOR'),
(2, 'USUARIO'),
(3, 'TECNICO'),
(4, 'Gestion Humano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID_STATUS` int NOT NULL,
  `STATUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`ID_STATUS`, `STATUS`) VALUES
(1, 'Activo'),
(2, 'Cerrado'),
(3, 'En espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_datos`
--

CREATE TABLE `user_datos` (
  `IDDATOS` int NOT NULL,
  `NAME` text NOT NULL,
  `NACIONALIDAD` int NOT NULL,
  `CEDULA` varchar(20) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `FECHA` varchar(10) NOT NULL,
  `SURNAME` text NOT NULL,
  `DIRECCION` varchar(1000) NOT NULL,
  `CIUDAD` varchar(100) NOT NULL,
  `MUNICIPIO` varchar(100) NOT NULL,
  `PARROQUIA` varchar(100) NOT NULL,
  `GENDER` int NOT NULL,
  `USER` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `EMAIL` text NOT NULL,
  `IDROLS` int NOT NULL,
  `LOGIN` int NOT NULL,
  `ASSIGNED_AREA` varchar(100) NOT NULL,
  `PASSWORD_ID` text,
  `NUMERO_DE_HIJOS` varchar(50) NOT NULL,
  `NOBRE_Y_APELLIDO` varchar(100) NOT NULL,
  `FECHA_DE_NACIMIENTO` varchar(50) NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `user_datos`
--

INSERT INTO `user_datos` (`IDDATOS`, `NAME`, `NACIONALIDAD`, `CEDULA`, `telefono`, `FECHA`, `SURNAME`, `DIRECCION`, `CIUDAD`, `MUNICIPIO`, `PARROQUIA`, `GENDER`, `USER`, `PASSWORD`, `EMAIL`, `IDROLS`, `LOGIN`, `ASSIGNED_AREA`, `PASSWORD_ID`, `NUMERO_DE_HIJOS`, `NOBRE_Y_APELLIDO`, `FECHA_DE_NACIMIENTO`, `foto`, `no_hay`) VALUES
(1, 'Reinaldo', 1, '2658439', '', '2024-01-01', 'MORALES CERTAD', '', '', '', '', 1, '2658439', '46ad1784cf775c2dea5b7dc2b8f4f2537e6c5b62', '', 2, 1, 'jubilado', NULL, '', '', '', '../images/defect.jpg', 'No Hay Cumpleañeros hoy'),
(2, 'Luis manuel', 1, '31158004', '04241871113', '2024-04-30', 'Navarro Moreno', '', '', '', '', 1, '31158004', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'lm395746@gmail.com', 1, 1, 'Asistente de informática III', NULL, '', '', '', '../images/WhatsApp Image 2024-04-11 at 11.53.14.jpeg', ''),
(3, 'Melvin daniel', 1, '30512676', '', '2003-03-26', 'Añez berrio', '', '', '', '', 1, 'admin', '9afbd981bb2da1514e74fb95c00fc85ed9fcafa6', '', 1, 1, 'Asistente de informática III ', NULL, '', '', '', '../images/pexels-roberto-nickson-2478248.jpg', ''),
(4, 'Danyerbert jose', 1, '27047631', '', '0000-00-00', 'Brito rangel', '', '', '', '', 1, '27047631', '5b636adac1d67aa8fd1745a0f5ad63616138dcca', 'danyerbertbrito@gmail.com', 1, 1, 'Asistente de informática III', NULL, '', '', '', '../images/Canaima.png', ''),
(5, 'Alfredo', 1, '3533098', '', '0000-00-00', 'Aguilar Rodriguez', '', '', '', '', 1, '3533098', 'e25230fac2bc24154e02f14c5cde36559123014b', '', 2, 1, 'Honorarios Profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(6, 'Francisco Jose', 1, '3701529', '', '0000-00-00', 'Millan Lopez', '', '', '', '', 1, '3701529', '6dde560fb4cdc704dc1f4fcf520bdd07de43de9c', '', 2, 1, 'Aseador', NULL, '', '', '', '../images/defect.jpg', ''),
(7, 'Benjamin', 1, '3738644', '', '0000-00-00', 'Torres Chaustre', '', '', '', '', 1, '3738644', 'a8b82e58ae6d298de7a2c967a671362dcac241ce', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(8, 'Carlos Miguel', 1, '4246771', '', '0000-00-00', 'Aular', '', '', '', '', 1, '4246771', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', 2, 1, 'Analista atención al ciudadano ', NULL, '', '', '', '../images/defect.jpg', ''),
(9, 'Graciela Maria ', 1, '4808999', '', '0000-00-00', '', '', '', '', '', 2, '4808999', 'a77028d2d9b7762b7bfb266aada3cd01ea5644ec', '', 2, 1, 'Ayudante de servicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(10, 'Alfonzo Rafael', 1, '4979040', '', '0000-00-00', 'Torres Marchena', '', '', '', '', 1, '4979040', '8275dfe02e9760c91d828414c5edb12a3ae5f712', '', 2, 1, 'Asistente de proyecto III', NULL, '', '', '', '../images/defect.jpg', ''),
(11, 'Carlos Alberto', 1, '5116374', '', '0000-00-00', 'Gonzalez Guevara', '', '', '', '', 1, '5116374', 'f4ead4f0898983683abe8cb1674c446bf1095a10', '', 2, 1, '', NULL, '', '', '', '../images/defect.jpg', ''),
(12, 'Jose Salvador ', 1, '5224461', '', '0000-00-00', 'Lo cuerto ocando', '', '', '', '', 1, '5224461', '33fcddb57db37d8edc1f5bc9288a5e010c778922', '', 2, 1, 'Operador-almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(13, 'Pedro trino', 1, '5431151', '', '0000-00-00', 'Pinango Ruiz', '', '', '', '', 1, '5431151', '33433c2c1fb4d30e6294d72a45f04bc1ec56f844', '', 2, 1, 'Supervisor de seguridad', NULL, '', '', '', '../images/defect.jpg', ''),
(14, 'Manuel Ramon', 1, '5760449', '', '0000-00-00', '', '', '', '', '', 1, '5760449', '00200d99a584d9b02e18942bdec4e4b0d224c923', '', 2, 1, 'Supervisor de seguridad', NULL, '', '', '', '../images/defect.jpg', ''),
(15, 'Bernardo Antonio', 1, '5885838', '', '0000-00-00', 'Zamora', '', '', '', '', 1, '5885838', 'a61d58091dbf6567b9d7e0821272e2867a2721ac', '', 2, 1, 'VIGILANTE', NULL, '', '', '', '../images/defect.jpg', ''),
(16, 'Tomas Enrique ', 1, '5961998', '', '0000-00-00', 'Blanco Tejada', '', '', '', '', 1, '5961998', '931542d4d1ef610201b59626e43cb0147b9329df', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(17, 'Lenin Jaime', 1, '6101414', '', '0000-00-00', 'Ocampo Gonzalez', '', '', '', '', 1, '6101414', 'c2fa3e6645ef20a802eefebeac8f30f3039cf960', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(18, 'Milagros Coromoto', 1, '6172780', '', '0000-00-00', 'Mujica', '', '', '', '', 2, '6172780', '1ce7f407509227297f363038365d3375660c8ce7', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(19, 'Jesune Soledad', 1, '6209232', '', '0000-00-00', 'Gonzalez Vera', '', '', '', '', 1, '6209232', '168bc2dfb565cb6223c5b47175430ad4637af5de', '', 2, 1, 'Pensionado', NULL, '', '', '', '../images/defect.jpg', ''),
(20, 'Arelis Josefina ', 1, '6302827', '', '0000-00-00', 'CAstillo Velis', '', '', '', '', 2, '6302827', 'd58fc22b936ed1d17463f51b0846110197c4a7fd', '', 2, 1, 'Supervisora de control de calidad', NULL, '', '', '', '../images/defect.jpg', ''),
(21, 'Marven Coromoto', 1, '6315017', '', '0000-00-00', '', '', '', '', '', 2, '6315017', '2e3d04c9f13e839af99a30e66e43b6c9eb55f88c', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(22, 'Ronald Alberto', 1, '6368639', '', '0000-00-00', 'Toledo Marin', '', '', '', '', 1, '6368639', '3935420240b28c8b979a89e62e903765a322caa3', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(23, 'Luisa ', 1, '6402338', '', '0000-00-00', 'Duarte Diaz', '', '', '', '', 2, '6402338', 'ae449605cd0e1cf41ff4b194312dd09eb627f209', '', 2, 1, 'Honoraios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(24, 'Isabel Cristina ', 1, '6442830', '', '0000-00-00', 'Piña Sierralta', '', '', '', '', 2, '6442830', 'd310ad15f21ca32da7d56fd9b45b557450078cdc', '', 2, 1, 'Prisidenta', NULL, '', '', '', '../images/defect.jpg', ''),
(25, 'Yaneyth Cecilia', 1, '6452224', '', '0000-00-00', 'Parada de Noriega', '', '', '', '', 2, '6452224', 'e48f1b1995bf2fe9a17064b127384500ec760c18', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(26, 'Silvino', 1, '6517444', '', '0000-00-00', 'Rojas Sanchez', '', '', '', '', 1, '6517444', 'a2204318984fd1ea66f19299d3938c8b5b2383a9', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(27, 'Jose Antonio', 1, '6520918', '', '0000-00-00', 'Medina', '', '', '', '', 1, '6520918', 'd62926392449ae6322b049297d0e9f6a70b6464d', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(28, 'Jesus Armando', 1, '6853175', '', '0000-00-00', 'Barbas Gainze', '', '', '', '', 1, '6853175', '827ecfdca01bd5f32d736cd717089789f28d6e4a', '', 2, 1, 'Tecnico de Mantenimiento', NULL, '', '', '', '../images/defect.jpg', ''),
(29, 'Jorge', 1, '6893746', '', '0000-00-00', 'Bicelis Pena', '', '', '', '', 1, '6893746', 'd42653feca3272d70456f0b0957aada571f5e477', '', 2, 1, 'Tecnico de Reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(30, 'Yelitza Chiquinquira', 1, '6898243', '', '0000-00-00', 'Gonzalez Indriago', '', '', '', '', 2, '6898243', '9e649461bec23f70bfce742e1a21542fc83cf5f8', '', 2, 1, 'Consultora Juridica', NULL, '', '', '', '../images/defect.jpg', ''),
(31, 'Raquel Ysolina', 1, '6968640', '', '0000-00-00', 'Marcano', '', '', '', '', 2, '6968640', '574b413384b732ce8f207eb9bfbcf8e52d3a9b8c', '', 2, 1, 'Directora de general de planificacion y presupuesto', NULL, '', '', '', '../images/defect.jpg', ''),
(32, 'Francisco Alfredo', 1, '7510530', '', '0000-00-00', 'Meza', '', '', '', '', 1, '7510530', '741791c1da793c95c5b35ca8dbe149169325ceb2', '', 2, 1, 'Ayudante de servicios generales ', NULL, '', '', '', '../images/defect.jpg', ''),
(33, 'Ramona Ofelia', 1, '8046000', '', '0000-00-00', 'Leon de Lazo', '', '', '', '', 2, '8046000', '783244483f92e8fd4a71c66e422873599eca7396', '', 2, 1, 'Tecnico en personal II', NULL, '', '', '', '../images/defect.jpg', ''),
(34, 'Jose Orlando', 1, '8587086', '', '', 'Utriz', '', '', '', '', 1, '8587086', 'e3e172f826ae7aa7221055292a68f9e30c367233', '', 2, 1, 'Tecnico de reparacion', NULL, '', '', '', '../images/defect.jpg', ''),
(35, 'Felicia', 1, '9293024', '', '', 'Pereira Figuera', '', '', '', '', 2, '9293024', '18f24e5b48ca3b65b770d87d9cb9b68149152304', '', 2, 1, 'Directora de linea de nomina', NULL, '', '', '', '../images/defect.jpg', ''),
(36, 'Freddy Omar', 1, '10090087', '', '', 'Becerra Rivas', '', '', '', '', 1, '10090087', 'b7516d8145baf80c55efb15ca56ff7a3c8d1937d', '', 2, 1, 'Asistente de procura I', NULL, '', '', '', '../images/defect.jpg', ''),
(37, 'Doris Nathali', 1, '10115000', '', '', 'Gonzalez Buitriago', '', '', '', '', 2, '10115000', '7baa9fb1a75db6c8e59379bb467230ea4d042164', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(38, 'Elvis Alberto', 1, '10186539', '', '', 'Ramirez Parra', '', '', '', '', 1, '10186539', '7741a57056f9b39847915ec3625cf35f40179924', '', 2, 1, 'Director de linea de control y seguimiento de proyecto', NULL, '', '', '', '../images/defect.jpg', ''),
(39, 'Guillermo Alejandro', 1, '10379094', '', '', 'Mendez Pulido', '', '', '', '', 1, '10379094', 'dd04bbfb89bbfaeb0d34bd1819a99fdd94134123', '', 2, 1, 'Director de linea de servicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(40, 'Nelly Josefina', 1, '10381915', '', '', 'Chacon Morales', '', '', '', '', 2, '10381915', 'c95158126ac583210e8f20e9cc65b1904db08d2c', '', 2, 1, 'Tecnico de reparacion', NULL, '', '', '', '../images/defect.jpg', ''),
(41, 'Hermelinda Yasmin', 1, '10506544', '', '', 'Vegas Mendoza', '', '', '', '', 1, '10506544', '25f156a8f8fd330c5e7947ddfb8d89f130a6274e', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(44, 'Ana Hilda', 1, '10527404', '', '', '', '', '', '', '', 2, '10527404', '70e88f0e0864e881c170de4bcd7f54dae30c5b5f', '', 2, 1, 'supervisora de servicios internos', NULL, '', '', '', '../images/defect.jpg', ''),
(45, 'Juan Carlos ', 1, '10537379', '', '', 'Barrios Bravo', '', '', '', '', 1, '10537379', '0b889171f8e525a7817ea9c6f8dc56d14d851e48', '', 2, 1, 'Operador - almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(46, 'Cleixis Maria ', 1, '10547930', '', '', 'Rijo de la rosa', '', '', '', '', 2, '10547930', 'ebd00498f178d3b06b8cc4c7e6962f9159ea8b5b', '', 2, 1, 'Operador-almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(47, 'Ysolina del Carmen', 1, '10547930', '', '', 'Alvarado Rodriguez', '', '', '', '', 2, '10547930', 'ebd00498f178d3b06b8cc4c7e6962f9159ea8b5b', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(48, 'Jose LUis', 1, '10633392', '', '', 'Hernandez Zambrano', '', '', '', '', 1, '10633392', '880b1ae842da33f0525dff67e4aa11d20b23ece5', '', 2, 1, 'Operador de montacargas', NULL, '', '', '', '../images/defect.jpg', ''),
(49, 'Yndriani Suyin', 1, '10692164', '', '', 'Aponte Poleo', '', '', '', '', 2, '10692164', 'fcdadc109959586d92a884ba6afba76a45c555d2', '', 2, 1, 'Tecnico', NULL, '', '', '', '../images/defect.jpg', ''),
(50, 'Luis Alfonzo', 1, '10814831', '', '', 'Garcia', '', '', '', '', 1, '10814831', 'f750a98a48826e3c483ccae48b80b200a59d7c72', '', 2, 1, 'Pensionado', NULL, '', '', '', '../images/defect.jpg', ''),
(51, 'Karin Coromoto', 1, '10867977', '', '', 'Escalona Gutierrez', '', '', '', '', 2, '10867977', '6a37db82c178c365a1bcefd6dc53b958dc516dea', '', 2, 1, 'Operador almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(52, 'Simon Lope', 1, '10888588', '', '', 'Torrealba Olivo', '', '', '', '', 1, '10888588', 'c82c7593b43f46dd64b55ed9905ce6ed634f5b4f', '', 2, 1, 'Ayudante de sevicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(53, 'Jesus Javier', 1, '11158578', '', '', 'Escalona Moreno', '', '', '', '', 1, '11158578', '', '', 2, 1, 'Asistente de proyecto III', NULL, '', '', '', '../images/defect.jpg', ''),
(54, 'Edgar Javier', 1, '11506160', '', '', 'Guerrero Bonilla', '', '', '', '', 1, '11506160', '0dc3b12a46e84ea967bead07049115284c30b0c9', '', 2, 1, 'Tecnico reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(55, 'Angel Omar', 1, '11671743', '', '', 'Huerfano Guirigay', '', '', '', '', 1, '11671743', '508077506e0bf7509c7bbef0042e63e413c341dd', '', 2, 1, 'Operador-Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(56, 'Mirka del Carmen', 1, '11671743', '', '', 'Arraiz Palacios', '', '', '', '', 2, '11671743', '508077506e0bf7509c7bbef0042e63e413c341dd', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(57, 'Elena Maria', 1, '11916691', '', '', 'Barcenas Santos', '', '', '', '', 2, '11916691', '3c93076224eb68a42c62869875924840c7cb7753', '', 2, 1, 'Operador - almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(58, 'Jorge Asisclo', 1, '11919825', '', '', 'Viez Castro', '', '', '', '', 1, '11919825', '2a0f88d090407e674b654d584e727cb48f5b5e3b', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(59, 'Cesar Enrique', 1, '12172989', '', '', 'Diaz Silva', '', '', '', '', 1, '12172989', 'ec0feeaf2b8ca0e6379af995a754a37d926503ab', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(60, 'Raiza Magaly', 1, '12261025', '', '', 'Vegas Rangel', '', '', '', '', 2, '12261025', '3c096debbad2dfbfdd93b1bfabd944aad861b04b', '', 2, 1, 'Directora General de despacho', NULL, '', '', '', '../images/defect.jpg', ''),
(61, 'Gustavo Adolfo', 1, '12261557', '', '', 'Espinoza Silva', '', '', '', '', 1, '12261557', '23561b6260af4fd7da69f582ea3b545f438ac8aa', '', 2, 1, 'Director General de procura', NULL, '', '', '', '../images/defect.jpg', ''),
(62, 'Luis Gerardo', 1, '12301278', '', '', 'Martinez Rojas', '', '', '', '', 1, '12301278', 'ad84771ddb1dd74f6481e64838a189ed37732c72', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(67, 'Luis Edgardo', 1, '12302894', '', '', 'Vargas Ramirez', '', '', '', '', 1, '12302894', '856353b67ba8a1fa292a71fed8d0c41ceaf3543d', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(68, 'Jhonny Alberto', 1, '12357312', '', '', 'Soto Barrios', '', '', '', '', 1, '12357312', '42e96ea55ae53a12effbd2e4927545630f6bf297', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(69, 'Helen Karina ', 1, '12419906', '', '', 'Espina Barboza', '', '', '', '', 2, '12419906', 'c6987711268196933bd3e3758f8e40c1ff2456de', '', 2, 1, 'Asistente de seguridad integral III', NULL, '', '', '', '../images/defect.jpg', ''),
(70, 'Miguel Alexander', 1, '12508754', '', '', 'Marquez Jimenes', '', '', '', '', 1, '12508754', 'f25bdc44ee2686bbb743bb831617a836ba13a27d', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../iamges/defect.jpg', ''),
(71, 'Sonia', 1, '12668225', '', '', 'Gomez Acha', '', '', '', '', 2, '12668225', '85dfb16eba0cd3d9c5cad680b69d6f648930d946', '', 2, 1, 'Asistente planificación III', NULL, '', '', '', '../images/defect.jpg', ''),
(72, 'Marli Josefina', 1, '12670273', '', '', 'Mata Matos', '', '', '', '', 1, '12670273', '2d9f0aaa1840b9aaec72d224dddb1d5367fc7056', '', 2, 1, 'Tecnico de repacion ', NULL, '', '', '', '../images/defect.jpg', ''),
(73, 'Oneida Edernys', 1, '12747170', '', '', 'Noria Guaramato', '', '', '', '', 2, '12747170', '532e3ac01c508403e18bde31cd8d793a3d075615', '', 2, 1, 'Ayudante de servicios generales', NULL, '', '', '', '../imagess/defect.jpg', ''),
(74, 'Niurka Yarisbeth', 1, '13066822', '', '', 'Benavides Belmonte', '', '', '', '', 2, '13066822', '49294c602d22b9119e903c83233b8f48f1de6ba8', '', 2, 1, 'Director de linea de presupuesto', NULL, '', '', '', '../images/defect.jpg', ''),
(75, 'Josmary', 1, '13067745', '', '', 'Gonzales Diaz', '', '', '', '', 2, '13067745', '4c7ea20807c0078de4600019fdce86fdd75aae68', '', 2, 1, 'Supervisor de reparacion', NULL, '', '', '', '../images/defect.jpg', ''),
(76, 'Joaquin', 1, '13139814', '', '', 'Ortiz Vargas', '', '', '', '', 1, '13139814', 'bc85a0322ec642b66905be05f8441fcfdf918329', '', 2, 1, 'Tecnico de reparacion', NULL, '', '', '', '../images/defect.jpg', ''),
(77, 'Yolimar', 1, '13302169', '', '', '', '', '', '', '', 2, '13302169', '880f4f061133c89c155ed46ffea0b8d08df8f850', '', 2, 1, 'Vereficador', NULL, '', '', '', '../images/defect.jpg', ''),
(78, 'Karolyn Joanka', 1, '13465671', '', '', 'Campos Rojas', '', '', '', '', 2, '13465671', '13465671', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(79, 'Heydi Carol', 1, '13465671', '', '', 'Soto Arias', '', '', '', '', 2, '13465671', '8ce9e6daf43940752b0c394fafa8e3be69edab78', '', 2, 1, 'Tecnico de reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(80, 'Sury Yusmary', 1, '13493929', '', '', 'Bastidas Sanchez', '', '', '', '', 2, '13493929', 'b2aceb97a393a9f601ee99e510c4142ae684b871', '', 2, 1, '', NULL, '', '', '', '../images/defect.jpg', ''),
(81, 'Yetzabeth del Carmen', 1, '13608535', '', '', 'Moreno Gonzalez', '', '', '', '', 2, '13608535', 'ca515f18bf40aa39d16e3828592da3b241fdde1f', '', 2, 1, 'Supervisor de control de calidad', NULL, '', '', '', '../images/defect.jpg', ''),
(82, 'Luis Guillermo', 1, '13852391', '', '', 'Salazar Chacon', '', '', '', '', 1, '13852391', 'cb995f056932da705ed8284c80eebbc37788ff94', '', 2, 1, 'Tecnico en procura I', NULL, '', '', '', '../images/defecct.jpg', ''),
(83, 'Dervis Joel', 1, '13852597', '', '', 'Medina  Linares', '', '', '', '', 1, '13852597', '32bbd7fd94fef15ccaa673b46f4036f239792c8f', '', 2, 1, 'Operador - alacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(84, 'Lucelis ', 1, '13860983', '', '', 'Florez Quiroz', '', '', '', '', 2, '13860983', 'b234207fc9df065df60e0b1de3b166ee6c03529d', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(85, 'Skarlin Migdeth', 1, '13886254', '', '', 'LOggioviniz Orozco', '', '', '', '', 2, '13886254', '931ecb34fceb2d7196f105853393e0ad26f8ff2a', '', 2, 1, 'Director de linea de organizacion de proceso', NULL, '', '', '', '../images/defect.jpg', ''),
(86, 'Maria Alejandra', 1, '13992639', '', '', 'Malave Bueno', '', '', '', '', 2, '13992639', '04cd8252f74d27ac01f54b06d1ca56fa21558e93', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(87, 'Victor Ramon', 1, '14047089', '', '', 'Soledad', '', '', '', '', 3, '14047089', 'e62abcd5b2da45a3102e0a3f8a5737477502e8c5', '', 2, 1, 'Tecnico de reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(88, 'Jose Rafael', 1, '14128464', '', '', 'Arevalo', '', '', '', '', 1, '14128464', 'fad1091bafbc008d76de195d56df1377367838e6', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(89, 'Yuleima Marisel', 1, '14165692', '', '', 'Medina', '', '', '', '', 2, '14165692', 'afb3362877cd2aba81131bb60cd3bdc9ee3f97a3', '', 2, 1, 'Ayudante de servicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(90, 'Jonathan Ramon', 1, '14298196', '', '', 'Querales Bastidas', '', '', '', '', 1, '14298196', 'f4f6f00d96f7427e1cc5b5eec54ef741323e1720', '', 2, 1, 'Vigilante', NULL, '', '', '', '../images/defect.jpg', ''),
(91, 'Gilsa lourden', 1, '14301987', '', '', 'Vegas Fuentes', '', '', '', '', 2, '14301987', 'a03ab5f2f8f3a4ebe89ac1e40015b151c5abe025', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defent.jpg', ''),
(92, 'Angelica Yane', 1, '14362270', '', '', 'Carrasquel Cardenas', '', '', '', '', 2, '14362270', 'e84cc5ce76e7e7b46b74ff1ca046eabe226af782', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(93, 'Humberto Jose', 1, '14363604', '', '', 'Torres Ojeda', '', '', '', '', 1, '14363604', 'c14d744cc0fad3002d869aaf864e4bd21297fd2f', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(94, 'Jackeline Maria ', 1, '14378771', '', '', 'Rincon de lizcano', '', '', '', '', 2, '14378771', '93d8f520f35b4c8d87367e91dbc0ea0810eed1b7', '', 2, 1, '', NULL, '', '', '', '../images/defect.jpg', ''),
(95, 'Erika Lisbeth', 1, '14427701', '', '', 'Ponce Colmenare', '', '', '', '', 2, '14427701', '9c556153211a3acb7296fbcf76c588136a9e59f8', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(96, 'Richard Alberto', 1, '14451887', '', '', 'Landaeta Alvarado', '', '', '', '', 1, '14451887', '256a0e4183347fd7b97239b93ec34d09955858e1', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '..images/defect.jpg', ''),
(97, 'Diana Jacqueline', 1, '14547118', '', '', 'Escalante Moreno', '', '', '', '', 2, '14547118', 'a19b9f8b842eb889f36d5e4da6e28b4fd26f455b', '', 2, 1, 'Operador', NULL, '', '', '', '../images/defect.jpg', ''),
(98, 'Lesky Eduardo', 1, '14547977', '', '', 'Cedillo Silva', '', '', '', '', 1, '14547977', '922dbd2964faf98b6d7c2b165aed49a6ba20e863', '', 3, 1, 'Tecnico de tecnologia II', NULL, '', '', '', '../images/defect.jpg', ''),
(99, 'Douglas Eduardo', 1, '14583883', '', '', 'Zambrano Teran', '', '', '', '', 1, '14583883', 'f2a647b27c46a73446ec249e3404c7144678d1d1', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(100, 'Milena', 1, '14757225', '', '', 'Diaz Henao', '', '', '', '', 2, '14757225', '3f54e64054d00e8462de5858596eb3ab614a6a4c', '', 2, 1, 'Directora de linea de ordenamiento de pago', NULL, '', '', '', '../images/defect.jpg', ''),
(101, 'Maria de Jesus', 1, '14989336', '', '', 'Gonzalez Ascano', '', '', '', '', 2, '14989336', '2acccdc9d8e7fbfe0d082e1d0f7ed495e5de0f45', '', 2, 1, 'Directora de linea de compras internacionales', NULL, '', '', '', '../images/defect.jpg', ''),
(102, 'Antony Rafael', 1, '14989798', '', '', 'Plaza Reveron ', '', '', '', '', 1, '14989798', '73ff4ef2f479102a24c50225afb24f785e7a6e28', '', 2, 1, 'Tecnico de reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(103, 'Roger Rafael', 1, '15021706', '', '', 'Castellanos Perez', '', '', '', '', 1, '15021706', '10e827b86923dc52306288adb059a811351b5022', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(104, 'Calixto Jose', 1, '15040884', '', '', 'Lopez Perez', '', '', '', '', 1, '15040884', 'd45de1551069854f3f78e676d60fb3472cfb0e94', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(105, 'Nathalie Josefina', 1, '15153014', '', '', 'Gonzalez Palmas', '', '', '', '', 2, '15153014', '1d0e63024de8747354c8bf1561f9628d14340174', '', 2, 1, 'Operador - Almacenista ', NULL, '', '', '', '../images/defect.jpg', ''),
(106, 'Dorianis Joseline', 1, '15167912', '', '', 'Fuenmayor Escobar', '', '', '', '', 2, '15167912', '51b14837898b68ca4b9523cf83ac5248db5a2747', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(107, 'Barbara Edwina ', 1, '15170361', '', '', 'Aguilar Tolosa', '', '', '', '', 2, '15170361', '5341fd6256c1c78dc3305e821966e20174f43248', '', 1, 1, 'Directora general de tecnologias de la informacion y la comunicacion', NULL, '', '', '', '../images/defect.jpg', ''),
(108, 'Beronica Beathris', 1, '15373289', '', '', 'Guillen de la Hoz', '', '', '', '', 2, '15373289', 'a2e9feb45f6a96a42a124a6fef08df0fdf3fdf14', '', 2, 1, 'Directora general de gestion Administrativa', NULL, '', '', '', '../images/defect.jpg', ''),
(109, 'Oscar Eduardo', 1, '15615671', '', '', 'Palacios Martinez', '', '', '', '', 1, '15615671', 'fbdf123f1ec478f5fc313867dbf9152d9f5d5606', '', 2, 1, 'Director de linea de planificacion y control de gestion', NULL, '', '', '', '../images/defect.jpg', ''),
(110, 'Julio cesar', 1, '15616490', '', '', 'Carrasquel Castillo', '', '', '', '', 1, '15616490', '519244615b91ea72ba1c240b6077ba1e21d1a603', '', 2, 1, 'Supervisor de control de calidad', NULL, '', '', '', '../images/defect.jpg', ''),
(111, 'Ismael Gregorio', 1, '15643843', '', '', 'Pineda Acosta', '', '', '', '', 1, '15643843', '03e9ac2cf1d34d8ca7b95925de31983628be5a39', '', 2, 1, 'Operador - almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(112, 'Adriana Josefina ', 1, '15800575', '', '', 'Medina Acosta', '', '', '', '', 2, '15800575', '4bdaddee313408fb7e1fe0c098dd72214ac09fc3', '', 2, 1, 'Directora general de Atenion ciudadana', NULL, '', '', '', '../images/defect.jpg', ''),
(113, 'Elide Josefina', 1, '15821910', '', '', 'Pacheco Aresjula', '', '', '', '', 2, '15821910', '97c156b0ac44e659e653345ce732fabdf2888622', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(114, 'Oscar Alexander', 1, '16322494', '', '', 'Marques Duran', '', '', '', '', 1, '16322494', '5c2961adfddf5efc16ef5ea3b59daccfdf2608db', '', 2, 1, 'Electricista de alta tension', NULL, '', '', '', '../images/defect.jpg', ''),
(115, 'Beisy Giuliana', 1, '16432004', '', '', 'Cisneros Aguilar', '', '', '', '', 2, '16432004', 'ae3713be4eec91cdb320ad508f9b0decacb81499', '', 2, 1, 'Honorarios profecionles', NULL, '', '', '', '../images/defect.jpg', ''),
(116, 'Yoselin del Valle', 1, '16472010', '', '', 'Berrios Bello', '', '', '', '', 2, '16472010', '387b29f30cad17bc6d6025cbe348df09e24d9209', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(117, 'Carmen Julia', 1, '16474258', '', '', 'Castillo Arroyo', '', '', '', '', 2, '16474258', '3706b8e32bd6a73b1f0a3020484c9f0a4131f011', '', 2, 1, '', NULL, '', '', '', '../images/defect.jpg', ''),
(118, 'Nohelia Josefina ', 1, '16542618', '', '', 'Orozco Toscano', '', '', '', '', 2, '16542618', 'a72e2615ed9e402f4f0c8b79d6c2a63191b5e27f', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(119, 'Eric Alfonso', 1, '16620658', '', '', 'Castillo Briceño', '', '', '', '', 1, '16620658', '1e0a8e739fdc6f8c1f9c39ab36b1c4ddf25d62cc', '', 2, 1, 'Tecnico Reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(120, 'Barbara Emperatriz', 1, '16682568', '', '', 'De la Hoz', '', '', '', '', 2, '16682568', '67972089913682aa46051951c39623c7a97f0a42', '', 2, 1, 'Ayudante de servicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(121, 'Denis Nailet', 1, '16870505', '', '', 'Moreno Naranjo ', '', '', '', '', 2, '16870505', '1db0538bffa1d3c610072ddb10a1d1aca91168a1', '', 2, 1, 'Tecnico reparador', NULL, '', '', '', '../images/desfect.jpg', ''),
(122, 'Raul Alberto', 1, '17245652', '', '', 'Rodriguez Chacon', '', '', '', '', 1, '17245652', '3960696f0480022244ebf6a9b3a8ce2fc75b5577', '', 2, 1, 'Tecnico de reparador', NULL, '', '', '', '../images/defect.jpg', ''),
(123, 'Evelyn  Nairobi', 1, '17301498', '', '', 'Arquizones castellanos', '', '', '', '', 2, '17301498', 'a51729c395b478bd597fa7946c5f825b74ba4d5c', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(124, 'Heybori Providencia', 1, '17443954', '', '', 'Fernandez Ollarvez', '', '', '', '', 2, '17443954', 'e784279bf3db09fab382f03fcce631b33fbb01f6', '', 2, 1, 'Pensionado', NULL, '', '', '', '../images/defect.jpg', ''),
(125, 'Yordalis Andreina', 1, '17477715', '', '', 'Leon Castro', '', '', '', '', 2, '17477715', '505867a181141efd21a718c2154d9304d7cf407d', '', 2, 1, 'Recepcionista', NULL, '', '', '', '../images/defect.jpg', ''),
(126, 'Julia Anita', 1, '17535084', '', '', 'Caruto', '', '', '', '', 2, '17535084', '2053e3c9ef57e4f6b941149f8bd2c07e05c310a9', '', 2, 1, 'Ayudante de servicios Generales', NULL, '', '', '', '../images/defect.jpg', ''),
(127, 'Victor Manuel', 1, '17560696', '', '', 'Azuaje Canizalez', '', '', '', '', 1, '17560696', '33de3f6062628e15ed48230d202ec8768e1ee999', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(128, 'Ana Elena ', 1, '17562236', '', '', 'Gil Mendez', '', '', '', '', 2, '17562236', 'c3f5caa49cb9f12549b07ff85aef39b4004a68ed', '', 2, 1, 'Directora de linea de compras nacionales', NULL, '', '', '', '../images/defect.jpg', ''),
(129, 'Jose Ramon', 1, '17727567', '', '', 'Barrera', '', '', '', '', 1, '17727567', '43d84d18671cc0efd294c30b264ec007910ac4f4', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(130, 'Katiuska Virginia', 1, '17735624', '', '', 'Gonzalez Quintini', '', '', '', '', 2, '17735624', '83a6ec66e3fc6ef4dea8e90fc3fc84ac7cb9b065', '', 2, 1, 'Honorarios profecionales', NULL, '', '', '', '../images/defect.jpg', ''),
(131, 'Hilda Coromoto', 1, '17864497', '', '', 'Mejia', '', '', '', '', 2, '17864497', '04799c9d76666801b4bf3c91f0df76f8d060527c', '', 2, 1, 'Directora de linea de bienes nacionales', NULL, '', '', '', '../images/defect.jpg', ''),
(132, 'Marvelis  mairobi', 1, '17875215', '', '', 'Borrero Calderon', '', '', '', '', 2, '17875215', 'ccdc7bd8489812a70a04f9c3aca41651e4b5ce8d', '', 2, 1, 'Analista de mantenimiento', NULL, '', '', '', '../images/defect.jpg', ''),
(133, 'Jercson Enrique ', 1, '17975516', '', '', 'Ariass Flores', '', '', '', '', 1, '17975516', 'a33a2bfd713e3485e4ac8da4d28138387b137705', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(134, 'Indira Maria', 1, '18023814', '', '', 'Hernandez Ramos', '', '', '', '', 2, '18023814', '18023814', '', 2, 1, 'Ayudante de servicios generales', NULL, '', '', '', '../images/defect.jpg', ''),
(135, 'Yusleiki Clarisa', 1, '18185317', '', '', 'Gutierrez Rosales', '', '', '', '', 2, '18185317', '18185317', '', 2, 1, 'Supervisor de logistica', NULL, '', '', '', '../images/defect.jpg', ''),
(136, 'Erika Eylin ', 1, '18223171', '', '', 'Perez Andrade', '', '', '', '', 2, '18223171', '6147e455725bee8ebf44c67f1bc018cdcb3794fb', '', 2, 1, 'supervisor de linea', NULL, '', '', '', '../images/deffect.jpg', ''),
(137, 'Richard ferronas', 1, '18329468', '', '', 'Zapata Vasquez', '', '', '', '', 1, '18329468', '9f4a20dc557922acb78f9df1605b1a952828e2f8', '', 2, 1, 'Supervisor de linea', NULL, '', '', '', '../images/defect.jpg', ''),
(138, 'Yessica Carolina ', 1, '18367498', '', '', 'Rodriguez Moya', '', '', '', '', 2, '18367498', '260d12e83b50209bc836e0d9839b7defe5d42c2c', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(139, 'Elisa Fernanda', 1, '18565882', '', '', 'Martinez', '', '', '', '', 2, '18565882', '8e03bc3e0fd61211ef8568e00ee8cae5fe0c33bc', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(140, 'Arlen de Jesus ', 1, '18646523', '', '', 'LLamas Correa ', '', '', '', '', 1, '18646523', '18646523', '', 2, 1, 'Director de linea de servicios generales linea 1', NULL, '', '', '', '../images/defect.jpg', ''),
(141, 'Jose Gregorio', 1, '18675091', '', '', 'Mujica Tribiño', '', '', '', '', 1, '18675091', '015dce3131ac4a9e9f77a74e7781d370e4204b64', '', 2, 1, 'Honorarios profecionales ', NULL, '', '', '', '../images/defect.jpg', ''),
(142, 'Tamara Mariana', 1, '18745200', '', '', 'Chauran Torrealba', '', '', '', '', 1, '18745200', '18745200', '', 2, 1, 'Operador  - almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(143, 'Lubaibanoba Marilyn', 1, '18817304', '', '', 'Blanco Salazar', '', '', '', '', 2, '18817304', 'bd31a54f0723517772b36cd15d9a1a7c7ae9ef69', '', 2, 1, 'Verificador', NULL, '', '', '', '../images/defect.jpg', ''),
(144, 'Frandy Scarlet', 1, '18936983', '', '', 'Ortiz Centeno', '', '', '', '', 2, '18936983', '8b1527444a6d26515d49ba72d94a3ffb62c84779', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../imges/defect.jpg', ''),
(145, 'Carlos Eduardo', 1, '19088645', '', '', 'Fajardo', '', '', '', '', 1, '19088645', '07ab403bde5cfe65951eb2ecf192c10c0070170f', '', 2, 1, 'Director general de seguridad integrla', NULL, '', '', '', '../images/defect.jpg', ''),
(146, 'Robert Alexander ', 1, '19089843', '', '', 'Matos Rodriguez', '', '', '', '', 1, '19089843', '029d4d6a7255c8de2ea24512544a38e89876dbc0', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(147, 'Theyde Deyanira', 1, '19267177', '', '', 'Paraco Rondon', '', '', '', '', 2, '19267177', '19267177', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(148, 'Yosibel Axibel', 1, '19314053', '', '', 'Garcia Sanchez', '', '', '', '', 2, '19314053', '30e00a513b181967c4bd1b7bc4bb85893362fc1f', '', 2, 1, 'Operador - Almacenista', NULL, '', '', '', '../images/defect.jpg', ''),
(149, 'Mildred Coromoto ', 1, '19351559', '', '2024-03-15', 'Salazar Rodriguez', '', '', '', '', 2, '19351559', '3b37bd472089247d28b6ed67b66645cf33d2c429', '', 3, 1, 'Directora de linea. Atencion Tecnologica', NULL, '', '', '', '../images/defect.jpg', ''),
(152, 'desarrollo', 1, '20010288-8', '', '', '', '', '', '', '', 1, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 1, 1, '', NULL, '', '', '', '../images/Industria-Canaima-C.A.-abre-sus-puertas-para-la-formacion-especializada-en-Robotica-Educativa-4.jpg', ''),
(153, 'desarrollo', 1, '20010288-8', '', '', '', '', '', '', '', 1, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 2, 1, '', NULL, '', '', '', '../images/Industria-Canaima-C.A.-abre-sus-puertas-para-la-formacion-especializada-en-Robotica-Educativa-4.jpg', ''),
(154, 'desarrollo', 1, '20010288-8', '', '', '', '', '', '', '', 1, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 3, 1, '', NULL, '', '', '', '../images/Industria-Canaima-C.A.-abre-sus-puertas-para-la-formacion-especializada-en-Robotica-Educativa-4.jpg', ''),
(155, 'desarrollo', 1, '20010288-8', '', '', '', '', '', '', '', 1, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 4, 1, '', NULL, '', '', '', '../images/Industria-Canaima-C.A.-abre-sus-puertas-para-la-formacion-especializada-en-Robotica-Educativa-4.jpg', ''),
(156, 'andres', 1, '31158004', '', '2003-03-09', 'pedro', '', '', '', '', 1, '31158001', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', 2, 1, 'analista', NULL, '', '', '', '../images/defect.jpg', 'no_hay');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID_AREA`),
  ADD KEY `ID_AREA` (`ID_AREA`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`ID_GRADO`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`cod_imagen`);

--
-- Indices de la tabla `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD KEY `TIPO` (`TIPO`);

--
-- Indices de la tabla `nacionalida`
--
ALTER TABLE `nacionalida`
  ADD PRIMARY KEY (`ID_NACIONALIDA`);

--
-- Indices de la tabla `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID_REPORT`),
  ADD KEY `ID_NAME` (`ID_NAME`) USING BTREE,
  ADD KEY `ID_LEVEL` (`ID_LEVEL`) USING BTREE,
  ADD KEY `STATUS` (`STATUS`) USING BTREE,
  ADD KEY `area` (`area`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`IDROLS`) USING BTREE;

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indices de la tabla `user_datos`
--
ALTER TABLE `user_datos`
  ADD PRIMARY KEY (`IDDATOS`),
  ADD KEY `NAME` (`NAME`(1024)),
  ADD KEY `ASSIGNED_AREA` (`ASSIGNED_AREA`),
  ADD KEY `ID-ROLS` (`IDROLS`) USING BTREE,
  ADD KEY `LOGIN` (`LOGIN`),
  ADD KEY `GENDER` (`GENDER`),
  ADD KEY `NACIONALIDAD` (`NACIONALIDAD`),
  ADD KEY `CEDULA` (`CEDULA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `ID_GRADO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `cod_imagen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `level`
--
ALTER TABLE `level`
  MODIFY `ID_LEVEL` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nacionalida`
--
ALTER TABLE `nacionalida`
  MODIFY `ID_NACIONALIDA` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `report`
--
ALTER TABLE `report`
  MODIFY `ID_REPORT` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `IDROLS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `ID_STATUS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_datos`
--
ALTER TABLE `user_datos`
  MODIFY `IDDATOS` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`ID_NAME`) REFERENCES `user_datos` (`IDDATOS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`ID_LEVEL`) REFERENCES `level` (`ID_LEVEL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`STATUS`) REFERENCES `status` (`ID_STATUS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_4` FOREIGN KEY (`area`) REFERENCES `area` (`ID_AREA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_datos`
--
ALTER TABLE `user_datos`
  ADD CONSTRAINT `IDROLS` FOREIGN KEY (`IDROLS`) REFERENCES `rols` (`IDROLS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `LOGIN` FOREIGN KEY (`LOGIN`) REFERENCES `login` (`TIPO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_datos_ibfk_1` FOREIGN KEY (`GENDER`) REFERENCES `gender` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_datos_ibfk_2` FOREIGN KEY (`NACIONALIDAD`) REFERENCES `nacionalida` (`ID_NACIONALIDA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
