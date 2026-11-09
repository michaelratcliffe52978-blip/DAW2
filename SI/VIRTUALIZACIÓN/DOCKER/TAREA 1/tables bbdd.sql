-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.4.3 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para reto1
CREATE DATABASE IF NOT EXISTS `reto1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `reto1`;

-- Volcando estructura para tabla reto1.adjuntos
DROP TABLE IF EXISTS `adjuntos`;
CREATE TABLE IF NOT EXISTS `adjuntos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `respuesta_id` int NOT NULL,
  `nombre_original` varchar(255) NOT NULL,
  `ruta_almacenamiento` varchar(550) NOT NULL,
  `tipo_mime` varchar(100) NOT NULL,
  `fecha_subida` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `respuesta_id` (`respuesta_id`),
  CONSTRAINT `adjuntos_ibfk_1` FOREIGN KEY (`respuesta_id`) REFERENCES `respuestas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.adjuntos: ~1 rows (aproximadamente)
INSERT INTO `adjuntos` (`id`, `respuesta_id`, `nombre_original`, `ruta_almacenamiento`, `tipo_mime`, `fecha_subida`) VALUES
	(1, 1, 'explain_plan_ejemplo.png', '/uploads/adjuntos/2026/01/explain_plan_ejemplo.png', 'image/png', '2026-10-19 06:27:19');

-- Volcando estructura para tabla reto1.documentos
DROP TABLE IF EXISTS `documentos`;
CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `categoria` enum('Informes técnicos','Manuales','Ensayos y resultados','Planos y diseños') NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text,
  `nombre_archivo` varchar(255) NOT NULL,
  `ruta_almacenamiento` varchar(550) NOT NULL,
  `tipo_mime` varchar(100) NOT NULL,
  `fecha_subida` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.documentos: ~4 rows (aproximadamente)
INSERT INTO `documentos` (`id`, `usuario_id`, `categoria`, `titulo`, `descripcion`, `nombre_archivo`, `ruta_almacenamiento`, `tipo_mime`, `fecha_subida`) VALUES
	(1, 1, 'Informes técnicos', 'Informe de Rendimiento Q1', 'Análisis detallado de carga de servidores.', 'informe_q1_2026.pdf', '/uploads/docs/informe_q1_2026.pdf', 'application/pdf', '2026-10-19 06:27:19'),
	(2, 2, 'Manuales', 'Manual de Estilos SQL', 'Guía de buenas prácticas internas.', 'manual_sql_v2.pdf', '/uploads/docs/manual_sql_v2.pdf', 'application/pdf', '2026-10-19 06:27:19'),
	(3, 3, 'Planos y diseños', 'Arquitectura de Red Corporativa', 'Esquema de topología de red.', 'topologia_red.png', '/uploads/docs/topologia_red.png', 'image/png', '2026-10-19 06:27:19'),
	(4, 4, 'Ensayos y resultados', 'Pruebas de Carga API REST', 'Resultados de las pruebas de estrés.', 'resultados_jmeter.docx', '/uploads/docs/resultados_jmeter.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2026-10-19 06:27:19');

-- Volcando estructura para tabla reto1.notificaciones
DROP TABLE IF EXISTS `notificaciones`;
CREATE TABLE IF NOT EXISTS `notificaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `pregunta_id` int NOT NULL,
  `respuesta_id` int DEFAULT NULL,
  `mensaje` varchar(255) NOT NULL,
  `leida` tinyint(1) DEFAULT '0',
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `respuesta_id` (`respuesta_id`),
  CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `notificaciones_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `notificaciones_ibfk_3` FOREIGN KEY (`respuesta_id`) REFERENCES `respuestas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.notificaciones: ~18 rows (aproximadamente)
INSERT INTO `notificaciones` (`id`, `usuario_id`, `pregunta_id`, `respuesta_id`, `mensaje`, `leida`, `fecha_creacion`) VALUES
	(1, 1, 1, 1, 'David López ha respondido a tu pregunta.', 1, '2026-10-19 06:27:19'),
	(2, 1, 1, 2, 'Elena Torres ha respondido a tu pregunta.', 0, '2026-10-19 06:27:19'),
	(4, 3, 3, 4, 'Ana María Gómez ha respondido a tu pregunta.', 0, '2026-10-19 06:27:19'),
	(5, 100, 7, NULL, 'user ha dado like a tu pregunta', 1, '2026-10-28 08:33:15'),
	(6, 100, 1, NULL, 'prueba', 1, '2026-10-28 08:37:42'),
	(9, 11, 8, NULL, 'root ha dado like a tu pregunta', 1, '2026-10-28 08:45:05'),
	(13, 105, 10, NULL, 'ibai ha dado like a tu pregunta', 1, '2026-10-29 09:44:19'),
	(14, 105, 10, 19, 'root ha respondido a tu pregunta', 1, '2026-10-29 09:45:21'),
	(15, 100, 10, 19, 'michael ha dado like a tu respuesta', 1, '2026-10-29 09:45:41'),
	(16, 105, 10, 20, 'root ha respondido a tu pregunta', 1, '2026-10-29 09:46:15'),
	(17, 100, 10, 20, 'michael ha dado like a tu respuesta', 1, '2026-10-29 09:46:39'),
	(18, 105, 10, NULL, 'root ha dado like a tu pregunta', 1, '2026-10-29 09:47:04'),
	(19, 100, 7, 21, 'michael ha respondido a tu pregunta', 1, '2026-10-29 09:47:47'),
	(20, 100, 7, 22, 'michael ha respondido a tu pregunta', 1, '2026-10-29 09:47:50'),
	(21, 100, 7, 23, 'michael ha respondido a tu pregunta', 1, '2026-10-29 09:47:52'),
	(22, 100, 7, 24, 'michael ha respondido a tu pregunta', 1, '2026-10-29 09:47:53'),
	(23, 100, 7, NULL, 'michael ha dado like a tu pregunta', 1, '2026-10-29 09:47:56'),
	(24, 11, 9, NULL, 'root ha dado like a tu pregunta', 1, '2026-11-02 09:15:31');

-- Volcando estructura para tabla reto1.preguntas
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.preguntas: ~7 rows (aproximadamente)
INSERT INTO `preguntas` (`id`, `usuario_id`, `titulo`, `descripcion`, `fecha_creacion`) VALUES
	(1, 1, '¿Cómo optimizar una consulta JOIN en MySQL?', 'Tengo una tabla grande de ventas y al hacer JOIN tarda varios segundos.', '2026-10-19 06:27:19'),
	(2, 2, 'Error al conectar Node.js con base de datos', 'Me sale Connection Refused al intentar conectar Express con MySQL local.', '2026-10-19 06:27:19'),
	(3, 3, '¿Cuál es la mejor forma de almacenar contraseñas?', 'Estamos diseñando la autenticación. ¿Bcrypt o Argon2?', '2026-10-19 06:27:19'),
	(7, 100, 'avdav', 'advadv', '2026-10-28 08:29:24'),
	(8, 11, 'prueba respuesta', 'respuesta pribada', '2026-10-28 08:43:13'),
	(9, 11, 'c< vzcv', 'czv<cv<czv', '2026-10-28 09:39:15'),
	(10, 105, 'Mike', 'mike', '2026-10-29 09:43:57');

-- Volcando estructura para tabla reto1.preguntas_guardadas
DROP TABLE IF EXISTS `preguntas_guardadas`;
CREATE TABLE IF NOT EXISTS `preguntas_guardadas` (
  `usuario_id` int NOT NULL,
  `pregunta_id` int NOT NULL,
  `fecha_guardado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usuario_id`,`pregunta_id`),
  KEY `pregunta_id` (`pregunta_id`),
  CONSTRAINT `preguntas_guardadas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `preguntas_guardadas_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.preguntas_guardadas: ~9 rows (aproximadamente)
INSERT INTO `preguntas_guardadas` (`usuario_id`, `pregunta_id`, `fecha_guardado`) VALUES
	(1, 3, '2026-10-19 06:27:19'),
	(2, 1, '2026-10-19 06:27:19'),
	(4, 1, '2026-10-19 06:27:19'),
	(4, 3, '2026-10-19 06:27:19'),
	(100, 7, '2026-10-29 08:27:08'),
	(100, 8, '2026-10-28 11:26:33'),
	(100, 9, '2026-10-28 11:26:34'),
	(100, 10, '2026-10-29 09:47:07'),
	(105, 7, '2026-10-29 09:47:55');

-- Volcando estructura para tabla reto1.pregunta_likes
DROP TABLE IF EXISTS `pregunta_likes`;
CREATE TABLE IF NOT EXISTS `pregunta_likes` (
  `usuario_id` int NOT NULL,
  `pregunta_id` int NOT NULL,
  `fecha_like` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usuario_id`,`pregunta_id`),
  KEY `pregunta_id` (`pregunta_id`),
  CONSTRAINT `fk_pl_pregunta` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_pl_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.pregunta_likes: ~18 rows (aproximadamente)
INSERT INTO `pregunta_likes` (`usuario_id`, `pregunta_id`, `fecha_like`) VALUES
	(1, 1, '2026-10-26 11:40:18'),
	(1, 2, '2026-10-26 11:40:18'),
	(2, 1, '2026-10-26 11:40:18'),
	(3, 1, '2026-10-26 11:40:18'),
	(3, 3, '2026-10-26 11:40:18'),
	(4, 1, '2026-10-26 11:40:18'),
	(11, 2, '2026-10-28 08:31:56'),
	(11, 3, '2026-10-28 08:30:49'),
	(11, 7, '2026-10-28 08:33:15'),
	(11, 8, '2026-10-28 08:43:33'),
	(100, 1, '2026-10-26 12:03:39'),
	(100, 7, '2026-10-29 08:23:57'),
	(100, 8, '2026-10-28 08:45:05'),
	(100, 9, '2026-11-02 09:15:31'),
	(100, 10, '2026-10-29 09:47:04'),
	(104, 10, '2026-10-29 09:44:19'),
	(105, 7, '2026-10-29 09:47:56'),
	(105, 10, '2026-10-29 09:44:49');

-- Volcando estructura para tabla reto1.pregunta_temas
DROP TABLE IF EXISTS `pregunta_temas`;
CREATE TABLE IF NOT EXISTS `pregunta_temas` (
  `pregunta_id` int NOT NULL,
  `tema_id` int NOT NULL,
  PRIMARY KEY (`pregunta_id`,`tema_id`),
  KEY `tema_id` (`tema_id`),
  CONSTRAINT `fk_pt_pregunta` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_pt_tema` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.pregunta_temas: ~11 rows (aproximadamente)
INSERT INTO `pregunta_temas` (`pregunta_id`, `tema_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(8, 1),
	(10, 1),
	(1, 2),
	(8, 2),
	(2, 3),
	(10, 3),
	(3, 4),
	(10, 5);

-- Volcando estructura para tabla reto1.respuestas
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pregunta_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `contenido` text NOT NULL,
  `es_favorita` tinyint(1) DEFAULT '0',
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `respuestas_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.respuestas: ~10 rows (aproximadamente)
INSERT INTO `respuestas` (`id`, `pregunta_id`, `usuario_id`, `contenido`, `es_favorita`, `fecha_creacion`) VALUES
	(1, 1, 3, 'Asegúrate de tener un índice en la clave foránea cliente_id.', 1, '2026-10-19 06:27:19'),
	(2, 1, 4, 'Revisa si el buffer de MySQL tiene suficiente memoria asignada.', 0, '2026-10-19 06:27:19'),
	(4, 3, 2, 'Argon2id es la opción recomendada actualmente por OWASP.', 1, '2026-10-19 06:27:19'),
	(8, 3, 102, 'eknbafhv i', 0, '2026-10-27 08:34:55'),
	(19, 10, 100, 'sagftsvha', 0, '2026-10-29 09:45:21'),
	(20, 10, 100, 'iuasdbuiasdaoi', 0, '2026-10-29 09:46:15'),
	(21, 7, 105, '1', 0, '2026-10-29 09:47:47'),
	(22, 7, 105, '2', 0, '2026-10-29 09:47:50'),
	(23, 7, 105, '3', 0, '2026-10-29 09:47:52'),
	(24, 7, 105, '4', 0, '2026-10-29 09:47:53');

-- Volcando estructura para tabla reto1.respuesta_likes
DROP TABLE IF EXISTS `respuesta_likes`;
CREATE TABLE IF NOT EXISTS `respuesta_likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `respuesta_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_respuesta_like` (`respuesta_id`,`usuario_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `respuesta_likes_ibfk_1` FOREIGN KEY (`respuesta_id`) REFERENCES `respuestas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `respuesta_likes_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.respuesta_likes: ~6 rows (aproximadamente)
INSERT INTO `respuesta_likes` (`id`, `respuesta_id`, `usuario_id`) VALUES
	(4, 1, 102),
	(3, 8, 102),
	(9, 19, 100),
	(7, 19, 105),
	(10, 20, 100),
	(8, 20, 105);

-- Volcando estructura para tabla reto1.temas
DROP TABLE IF EXISTS `temas`;
CREATE TABLE IF NOT EXISTS `temas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.temas: ~5 rows (aproximadamente)
INSERT INTO `temas` (`id`, `nombre`, `descripcion`) VALUES
	(1, 'Programación y Software', 'Consultas relativas a desarrollo de código y frameworks.'),
	(2, 'Bases de Datos', 'Diseño, optimización y administración de SQL/NoSQL.'),
	(3, 'Hardware y Redes', 'Infraestructura, servidores y configuración de redes.'),
	(4, 'Seguridad Informática', 'Ciberseguridad, encriptación y autenticación.'),
	(5, 'Materiales', 'Materiales aeronáuticos y ensayos.');

-- Volcando estructura para tabla reto1.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL DEFAULT 'user',
  `fecha_registro` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla reto1.usuarios: ~11 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `passwd`, `rol`, `fecha_registro`) VALUES
	(1, 'Carlos', 'Mendoza', 'carlos.mendoza@example.com', '$2y$10$e8T3Gz7Z1wK3V9Xy1Q2u3e4R5t6Y7u8I9o0P1a2S3d4F5g6H7j8K', 'user', '2026-10-19 06:27:19'),
	(2, 'Ana', 'Maria', 'ana.gomez@example.com', '$2y$10$A1b2C3d4E5f6G7h8I9j0K1L2M3N4O5P6Q7R8S9T0U1V2W3X4Y5Z6a', 'user', '2026-10-19 06:27:19'),
	(3, 'David', '', 'david.lopez@example.com', 'david', 'user', '2026-10-19 06:27:19'),
	(4, 'Elena Torres', 'Torres', 'elena.torres@example.com', '$2y$10$9876543210qwertyuiopasdfghjklzxcvbnm1234567890abcdefg', 'user', '2026-10-19 06:27:19'),
	(11, 'user', '', 'user@gmail.com', 'user', 'user', '2026-10-27 08:03:45'),
	(100, 'root', '', 'root@gmail.com', 'root', 'admin', '2026-10-20 05:24:03'),
	(101, 'admin', '', 'admin123', 'admin', 'admin', '2026-10-27 08:28:24'),
	(102, 'admin2', '', 'adminasjfa', 'admin2', 'admin', '2026-10-27 08:30:22'),
	(103, 'Laura', 'Pérez', 'laura.perez@gmail.com', 'laura123', 'user', '2026-10-29 09:39:39'),
	(104, 'ibai', 'jimenez', 'ibai.jimenez@ikasle.egibide.org', '12345Abcde', 'user', '2026-10-29 09:40:09'),
	(105, 'michael', 'ratcliffe', 'mike@gmail.com', 'mike1234', 'user', '2026-10-29 09:41:37');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
