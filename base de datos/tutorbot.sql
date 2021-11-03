-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2021 a las 02:25:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorbot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `codigoAlumno` int(11) NOT NULL,
  `nombreAlumno` varchar(45) DEFAULT NULL,
  `primerApellido` varchar(45) DEFAULT NULL,
  `segundoApellido` varchar(45) DEFAULT NULL,
  `correoAlumno` varchar(45) DEFAULT NULL,
  `carrera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigoAlumno`, `nombreAlumno`, `primerApellido`, `segundoApellido`, `correoAlumno`, `carrera`) VALUES
(212121215, 'Pancho', 'Barraza', 'Diaz', 'pancho.barraza@alumnos.udg.mx', 'INAP'),
(215455047, 'Pablo Armando', 'Telles', 'Rivera', 'pablo.telles@alumnos.udg.mx', 'INGC'),
(215740272, 'Luis ', 'Aguilar', 'Silva', 'luis.aguilar@alumnos.udg.mx', 'LINI'),
(216217867, 'Andres', 'Garcia', 'Tovalin', 'andres.garcia@alumnos.udg.mx', 'LITU'),
(219350568, 'Juan Carlos', 'Hernandez', 'Padilla', 'juan.hernandez3505@alumnos.udg.mx', 'INGC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasbecas`
--

CREATE TABLE `preguntasbecas` (
  `idpreguntasBecas` int(11) NOT NULL,
  `preguntabecas` varchar(500) DEFAULT NULL,
  `respuestasbecas` varchar(500) DEFAULT NULL,
  `linksbecas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntasbecas`
--

INSERT INTO `preguntasbecas` (`idpreguntasBecas`, `preguntabecas`, `respuestasbecas`, `linksbecas`) VALUES
(1, 'que becas hay disponibles', 'te invito a que revises la siguiente liga donde se ofertan las becas actuales en http://becas.cut.com', NULL),
(2, 'que becas hay de idiomas?', 'las becas son en jobs,busuu y proulex', NULL),
(3, '¿Que tipos de becas hay?', 'Hay beca por rendimiento, beca de apoyo economico, beca de apoyo social y becas para programas internacionales.', 'https://mextudia.com/becas/udg/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasderechosyobligaciones`
--

CREATE TABLE `preguntasderechosyobligaciones` (
  `idPreguntasControl` int(11) NOT NULL,
  `preguntaderechos` varchar(100) DEFAULT NULL,
  `respuestaderechos` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasidiomas`
--

CREATE TABLE `preguntasidiomas` (
  `idPreguntasCentroIdiomas` int(11) NOT NULL,
  `preguntaidiomas` varchar(500) DEFAULT NULL,
  `respuestasidiomas` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntasidiomas`
--

INSERT INTO `preguntasidiomas` (`idPreguntasCentroIdiomas`, `preguntaidiomas`, `respuestasidiomas`) VALUES
(1, 'que idiomas enseñan?', 'En cut tonala existe el centro global de idiomas que oferta varios cursos donde puedes aprender Ingles,Frances,aleman entre otros te invito a la siguiente liga para mas informacion http://centroglobaldeidiomas.com'),
(2, 'que becas de idiomas existen?', 'la respuesta en becas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntasorientacion`
--

CREATE TABLE `preguntasorientacion` (
  `idPreguntasPsicologia` int(11) NOT NULL,
  `preguntasorientacion` varchar(500) DEFAULT NULL,
  `respuestasorientacion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntasorientacion`
--

INSERT INTO `preguntasorientacion` (`idPreguntasPsicologia`, `preguntasorientacion`, `respuestasorientacion`) VALUES
(1, 'como hacer una cita con psicologia?', 'puedes ingresar a la siguiete pagina donde puedes agendar tus citas de psicologia http://cut.psicologia.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntastutoria`
--

CREATE TABLE `preguntastutoria` (
  `idPreguntasTutoria` int(11) NOT NULL,
  `PreguntasTutoria` varchar(500) DEFAULT NULL,
  `RespuestasTutoria` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntastutoria`
--

INSERT INTO `preguntastutoria` (`idPreguntasTutoria`, `PreguntasTutoria`, `RespuestasTutoria`) VALUES
(1, 'cual es el reglamento del estudiante?', 'El reglamente lo puedes encontrar en la siguiente liga para que puedas informarte mejor http://cut/tutorias/reglamento.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacionpreguntas`
--

CREATE TABLE `relacionpreguntas` (
  `idrelacionpreguntas` int(11) NOT NULL,
  `idPreguntasControl` int(11) DEFAULT NULL,
  `idPreguntasTutoria` int(11) DEFAULT NULL,
  `idPreguntasCentroIdiomas` int(11) DEFAULT NULL,
  `idPrentasPsicologia` int(11) DEFAULT NULL,
  `idpreguntasBecas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `relacionpreguntas`
--

INSERT INTO `relacionpreguntas` (`idrelacionpreguntas`, `idPreguntasControl`, `idPreguntasTutoria`, `idPreguntasCentroIdiomas`, `idPrentasPsicologia`, `idpreguntasBecas`) VALUES
(1, NULL, NULL, 2, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciontutoralumno`
--

CREATE TABLE `relaciontutoralumno` (
  `idRelacion` int(11) NOT NULL,
  `codigoAlumno` int(11) DEFAULT NULL,
  `codigoTutores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `relaciontutoralumno`
--

INSERT INTO `relaciontutoralumno` (`idRelacion`, `codigoAlumno`, `codigoTutores`) VALUES
(1, 216217867, 677889),
(2, 219350568, 12345),
(3, 215455047, 677889);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `codigoTutores` int(11) NOT NULL,
  `nombreTutor` varchar(45) DEFAULT NULL,
  `Apellido1Tutor` varchar(45) DEFAULT NULL,
  `Aplellido2Tutor` varchar(45) DEFAULT NULL,
  `correoTutor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`codigoTutores`, `nombreTutor`, `Apellido1Tutor`, `Aplellido2Tutor`, `correoTutor`) VALUES
(12345, 'Victor', 'Inturbide', 'piruly', 'victor@academicos.mx'),
(677889, 'Antonio', 'Aguilar', 'Fernandez', 'antonio@academicos.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigoAlumno`);

--
-- Indices de la tabla `preguntasbecas`
--
ALTER TABLE `preguntasbecas`
  ADD PRIMARY KEY (`idpreguntasBecas`);

--
-- Indices de la tabla `preguntasderechosyobligaciones`
--
ALTER TABLE `preguntasderechosyobligaciones`
  ADD PRIMARY KEY (`idPreguntasControl`);

--
-- Indices de la tabla `preguntasidiomas`
--
ALTER TABLE `preguntasidiomas`
  ADD PRIMARY KEY (`idPreguntasCentroIdiomas`);

--
-- Indices de la tabla `preguntasorientacion`
--
ALTER TABLE `preguntasorientacion`
  ADD PRIMARY KEY (`idPreguntasPsicologia`);

--
-- Indices de la tabla `preguntastutoria`
--
ALTER TABLE `preguntastutoria`
  ADD PRIMARY KEY (`idPreguntasTutoria`);

--
-- Indices de la tabla `relacionpreguntas`
--
ALTER TABLE `relacionpreguntas`
  ADD PRIMARY KEY (`idrelacionpreguntas`),
  ADD KEY `control_idx` (`idPreguntasControl`),
  ADD KEY `idiomas_idx` (`idPreguntasCentroIdiomas`),
  ADD KEY `tutoria_idx` (`idPreguntasTutoria`),
  ADD KEY `psicologia_idx` (`idPrentasPsicologia`),
  ADD KEY `becas_idx` (`idpreguntasBecas`);

--
-- Indices de la tabla `relaciontutoralumno`
--
ALTER TABLE `relaciontutoralumno`
  ADD PRIMARY KEY (`idRelacion`),
  ADD KEY `Falumno_idx` (`codigoAlumno`),
  ADD KEY `codigoTutor_idx` (`codigoTutores`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`codigoTutores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntasbecas`
--
ALTER TABLE `preguntasbecas`
  MODIFY `idpreguntasBecas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `preguntasderechosyobligaciones`
--
ALTER TABLE `preguntasderechosyobligaciones`
  MODIFY `idPreguntasControl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntasidiomas`
--
ALTER TABLE `preguntasidiomas`
  MODIFY `idPreguntasCentroIdiomas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `preguntasorientacion`
--
ALTER TABLE `preguntasorientacion`
  MODIFY `idPreguntasPsicologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preguntastutoria`
--
ALTER TABLE `preguntastutoria`
  MODIFY `idPreguntasTutoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relacionpreguntas`
--
ALTER TABLE `relacionpreguntas`
  MODIFY `idrelacionpreguntas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `relaciontutoralumno`
--
ALTER TABLE `relaciontutoralumno`
  MODIFY `idRelacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relacionpreguntas`
--
ALTER TABLE `relacionpreguntas`
  ADD CONSTRAINT `becas` FOREIGN KEY (`idpreguntasBecas`) REFERENCES `preguntasbecas` (`idpreguntasBecas`),
  ADD CONSTRAINT `control` FOREIGN KEY (`idPreguntasControl`) REFERENCES `preguntasderechosyobligaciones` (`idPreguntasControl`),
  ADD CONSTRAINT `idiomas` FOREIGN KEY (`idPreguntasCentroIdiomas`) REFERENCES `preguntasidiomas` (`idPreguntasCentroIdiomas`),
  ADD CONSTRAINT `psicologia` FOREIGN KEY (`idPrentasPsicologia`) REFERENCES `preguntasorientacion` (`idPreguntasPsicologia`),
  ADD CONSTRAINT `tutoria` FOREIGN KEY (`idPreguntasTutoria`) REFERENCES `preguntastutoria` (`idPreguntasTutoria`);

--
-- Filtros para la tabla `relaciontutoralumno`
--
ALTER TABLE `relaciontutoralumno`
  ADD CONSTRAINT `codigoAlumno` FOREIGN KEY (`codigoAlumno`) REFERENCES `alumnos` (`codigoAlumno`),
  ADD CONSTRAINT `codigoTutor` FOREIGN KEY (`codigoTutores`) REFERENCES `tutores` (`codigoTutores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
