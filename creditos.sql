-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2018 a las 17:11:34
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creditos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas`
--

CREATE TABLE `alertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(120) CHARACTER SET utf8 NOT NULL,
  `color` varchar(120) CHARACTER SET utf8 NOT NULL,
  `mensaje` text CHARACTER SET utf8 NOT NULL,
  `dias` int(11) NOT NULL,
  `sql_alerta` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(120) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alertas`
--

INSERT INTO `alertas` (`id`, `nombre`, `estado`, `color`, `mensaje`, `dias`, `sql_alerta`, `observaciones`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ALERTA VENCIMIENTO SUJETO DE CREDITO', 'activada', '#b54141', 'ALERTA VENCIMIENTO SUJETO DE CREDITO', 30, NULL, 'Esta Alerta estará activa cuando el proyecto tenga la Respuesta del Banco con fecha superior a los x días (según se complete en el campo correspondiente) y que NO ESTE APROBADO POR LA UEP', 'alerta-vencimiento-sujeto-de-credito9412', '2018-12-17 15:15:19', '2018-12-18 12:29:12'),
(2, 'ALERTA VENCIMIENTO PRESUPUESTOS', 'activada', '#b5d1c0', 'ALERTA VENCIMIENTO PRESUPUESTOS', 120, NULL, 'Esta Alerta se mostrará siempre que el campo Fecha Presupuesto tenga datos y el proyecto no esté Aprobado por la UEP ó Dato de Baja', 'alerta-vencimiento-presupuestos4300', '2018-12-18 12:43:22', '2018-12-18 12:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alerta_proyecto`
--

CREATE TABLE `alerta_proyecto` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `alerta_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos_proyectos`
--

CREATE TABLE `anexos_proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `file` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_archivo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `valor_anterior` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'BPN', 'bpn', '2018-10-16 15:39:49', '2018-10-16 15:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checklists`
--

CREATE TABLE `checklists` (
  `id` int(10) UNSIGNED NOT NULL,
  `nota_oficial` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicitud_financiamiento` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotocopia_dni` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificado_domicilio` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inscripcion_afip_rentas` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_civil` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddjj` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota_banco` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta_banco` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_propiedad_inmuebles` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habilitaciones` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_propiedad_muebles` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proformas` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guia_proyecto` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadisticas` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promeva` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informe_uep` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `columnasexcel`
--

CREATE TABLE `columnasexcel` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `seleccionada` varchar(3) DEFAULT NULL,
  `tabla` varchar(100) DEFAULT 'proyectos',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `columnasexcel`
--

INSERT INTO `columnasexcel` (`id`, `nombre`, `descripcion`, `orden`, `seleccionada`, `tabla`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'fechaIngreso', 'Fecha de Ingreso', 1, 'ON', 'proyectos', NULL, '2018-11-02 15:36:03', 'fechaingreso'),
(2, 'nombre', 'Nombre del Proyecto', 2, 'ON', 'proyectos', NULL, NULL, 'nombre_del_proyecto'),
(3, 'numeroInterno', 'Número Interno', 3, 'ON', 'proyectos', NULL, '2018-11-02 15:36:07', 'numerointerno'),
(4, 'numeroCfi', 'Número CFI', 4, 'ON', 'proyectos', NULL, NULL, 'numero_cfi'),
(5, 'localidad_id', 'Localidad', 5, 'ON', 'proyectos', NULL, NULL, 'localidad'),
(6, 'lineaCredito_id', 'Línea de Créditos', 6, 'ON', 'proyectos', NULL, NULL, 'linea_de_creditos'),
(7, 'estado_id', 'Estado', 7, 'ON', 'proyectos', NULL, NULL, 'estado'),
(8, 'estadoInterno_id', 'Estado Interno', 8, 'ON', 'proyectos', NULL, NULL, 'estado_interno'),
(9, 'sector_id', 'Sector', 9, 'ON', 'proyectos', NULL, NULL, 'sector'),
(10, 'titular', 'Titular', 10, 'ON', 'proyectos', NULL, NULL, 'titular'),
(11, 'monto', 'Monto', 11, 'ON', 'proyectos', NULL, NULL, 'monto'),
(12, 'tamanio', 'Tamanio', 12, 'ON', 'proyectos', NULL, NULL, 'tamanio'),
(13, 'tipo', 'Tipo', 13, 'OFF', 'proyectos', NULL, NULL, 'tipo'),
(14, 'domicilioProyecto', 'Domicilio del Proyecto', 14, 'ON', 'proyectos', NULL, NULL, 'domicilio_del_proyecto'),
(15, 'domicilioLegal', 'Domicilio Legal', 15, 'OFF', 'proyectos', NULL, NULL, 'domicilio_legal'),
(16, 'telefono', 'Teléfono', 16, 'ON', 'proyectos', NULL, NULL, 'telefono'),
(17, 'email', 'E-mail', 17, 'OFF', 'proyectos', NULL, NULL, 'email'),
(18, 'web', 'Web', 18, 'OFF', 'proyectos', NULL, NULL, 'web'),
(19, 'productos', 'Productos', 19, 'OFF', 'proyectos', NULL, NULL, 'productos'),
(20, 'ciuu', 'CIUU', 20, 'OFF', 'proyectos', NULL, NULL, 'ciuu'),
(21, 'mo', 'MO', 21, 'OFF', 'proyectos', NULL, NULL, 'mo'),
(22, 'enuep', 'En UEP', 22, 'OFF', 'proyectos', NULL, NULL, 'en_uep'),
(23, 'descripcion', 'Descripción', 23, 'OFF', 'proyectos', NULL, NULL, 'descripcion'),
(24, 'inversionTotal', 'Inv. Total', 24, 'ON', 'proyectos', NULL, NULL, 'inv_total'),
(25, 'inversionRealizada', 'Inversión Realizada', 25, 'ON', 'proyectos', NULL, NULL, 'inv_realizada'),
(26, 'inversionARealizar_ct', 'Inv. a Realizar en Capital de Trabajo', 26, 'ON', 'proyectos', NULL, NULL, 'inv_a_realizar_en_capital_de_trabajo'),
(27, 'inversionARealizar_af', 'Inv. a Realizar en Activo Fijo', 27, 'ON', 'proyectos', NULL, NULL, 'inv_a_realizar_en_activo_fijo'),
(28, 'figuraLegal_id', 'Figura Legal', 28, 'OFF', 'proyectos', NULL, NULL, 'figura_legal'),
(29, 'periodicidad_id', 'Periodicidad', 29, 'ON', 'proyectos', NULL, NULL, 'periodicidad'),
(30, 'destinoCredito_id', 'Destino del Crédito', 30, 'OFF', 'proyectos', NULL, NULL, 'destino_del_credito'),
(31, 'refinanciado', 'Refinanciado?', 31, 'OFF', 'proyectos', NULL, NULL, 'refinanciado'),
(32, 'plazoGracia', 'Plazo de Gracia', 32, 'ON', 'proyectos', NULL, NULL, 'plazo_de_gracia'),
(33, 'plazoAmortizacion', 'Plazo de Amortiz.', 33, 'ON', 'proyectos', NULL, NULL, 'plazo_de_amortizacion'),
(34, 'cantidadDesembolsos', 'Cant. Desembolsos', 34, 'OFF', 'proyectos', NULL, NULL, 'cantidad_de_desembolsos'),
(35, 'tasa', 'Tasa', 35, 'OFF', 'proyectos', NULL, NULL, 'tasa'),
(36, 'garantia_id', 'Garantía', 36, 'OFF', 'proyectos', NULL, NULL, 'garantia'),
(37, 'descripcionGarantia', 'Descripción de la Garantía', 37, 'OFF', 'proyectos', NULL, NULL, 'descripcion_de_la_garantia'),
(38, 'sujetoCredito', 'Sujeto Crédito', 38, 'ON', 'proyectos', NULL, NULL, 'sujeto_credito'),
(39, 'fechaEnvioBanco', 'Fecha de Envío al Bco', 39, 'ON', 'proyectos', NULL, NULL, 'fecha_de_envio_al_banco'),
(40, 'fechaRespuestaBanco', 'Fecha de Respuesta del Bco', 40, 'ON', 'proyectos', NULL, NULL, 'fecha_de_respuesta_del_banco'),
(41, 'fechaCaducoBanco', 'Fecha Caduco Banco', 41, 'OFF', 'proyectos', NULL, NULL, 'fecha_caduco_banco'),
(42, 'fechaAprobadoUep', 'Fecha Aprobado UEP', 42, 'ON', 'proyectos', NULL, NULL, 'fecha_aprobado_uep'),
(43, 'fechaEnviadoCfi', 'Fecha Enviado CFI', 43, 'ON', 'proyectos', NULL, NULL, 'fecha_envio_cfi'),
(44, 'fechaAprobadoCfi', 'Fecha Aprobado CFI', 44, 'ON', 'proyectos', NULL, NULL, 'fecha_aprobado_cfi'),
(45, 'fechaTramdispo', 'Fecha Trámite de Disposición', 45, 'OFF', 'proyectos', NULL, NULL, 'fecha_tramite_de_disposicion'),
(46, 'fechaComunicaTran', 'Fecha Comunicación Transferencia', 46, 'OFF', 'proyectos', NULL, NULL, 'fecha_comunicacion_transferencia'),
(47, 'fechaDesembolso', 'Fecha Desembolso', 47, 'ON', 'proyectos', NULL, NULL, 'fecha_desembolso'),
(48, 'fechaEfectivizacion', 'Fecha Efectivización', 48, 'ON', 'proyectos', NULL, NULL, 'fecha_efectivizacion'),
(49, 'fechaDesistido', 'Fecha Desistido', 49, 'OFF', 'proyectos', NULL, NULL, 'fecha_desistido'),
(50, 'fechaJudicial', 'Fecha Pase a Judicial', 50, 'OFF', 'proyectos', NULL, NULL, 'fecha_pase_a_judicial'),
(51, 'fechaCancelado', 'Fecha Cancelado', 51, 'OFF', 'proyectos', NULL, NULL, 'fecha_cancelado'),
(52, 'fechaArchivado', 'Fecha Archivado', 52, 'OFF', 'proyectos', NULL, NULL, 'fecha_archivado'),
(53, 'fechaUltimoMovimiento', 'Fecha Último Movimiento', 53, 'ON', 'proyectos', NULL, NULL, 'fecha_ultimo_movimiento'),
(54, 'observaciones', 'Observaciones', 54, 'OFF', 'proyectos', NULL, NULL, 'observaciones'),
(55, 'sucursal_id', 'Sucursal del Banco', 55, 'OFF', 'proyectos', NULL, NULL, 'sucursal_del_banco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `columnasview`
--

CREATE TABLE `columnasview` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) DEFAULT NULL,
  `seleccionada` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `tabla` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proyectos',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `columnasview`
--

INSERT INTO `columnasview` (`id`, `nombre`, `descripcion`, `orden`, `seleccionada`, `tabla`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'fechaIngreso', 'Ingreso', 1, 'ON', 'proyectos', NULL, NULL, 'fecha_ingreso'),
(2, 'nombre', 'Nombre del Proyecto', 2, 'ON', 'proyectos', NULL, NULL, 'nombre_del_proyecto'),
(3, 'numeroInterno', 'Número Interno', 3, 'OFF', 'proyectos', NULL, NULL, 'numero_interno'),
(4, 'numeroCfi', 'Número CFI', 4, 'OFF', 'proyectos', NULL, NULL, 'numero_cfi'),
(5, 'localidad_id', 'Localidad', 5, 'ON', 'proyectos', NULL, NULL, 'localidad'),
(6, 'lineaCredito_id', 'Línea de Créditos', 6, 'ON', 'proyectos', NULL, NULL, 'linea_de_credito'),
(7, 'estado_id', 'Estado', 7, 'ON', 'proyectos', NULL, NULL, 'estado'),
(8, 'estadoInterno_id', 'Estado Interno', 8, 'OFF', 'proyectos', NULL, NULL, 'estado_interno'),
(9, 'sector_id', 'Sector', 9, 'ON', 'proyectos', NULL, NULL, 'sector'),
(10, 'titular', 'Titular', 10, 'ON', 'proyectos', NULL, NULL, 'titular'),
(11, 'monto', 'Monto', 11, 'ON', 'proyectos', NULL, NULL, 'monto'),
(12, 'tamanio', 'Tamanio', 12, 'OFF', 'proyectos', NULL, NULL, 'tamanio'),
(13, 'tipo', 'Tipo', 13, 'OFF', 'proyectos', NULL, NULL, 'tipo'),
(14, 'domicilioProyecto', 'Domicilio del Proyecto', 14, 'OFF', 'proyectos', NULL, NULL, 'domicilio_del_proyecto'),
(15, 'domicilioLegal', 'Domicilio Legal', 15, 'OFF', 'proyectos', NULL, NULL, 'domicilio_legal'),
(16, 'telefono', 'Teléfono', 16, 'OFF', 'proyectos', NULL, NULL, 'telefono'),
(17, 'email', 'E-mail', 17, 'OFF', 'proyectos', NULL, NULL, 'e_mail'),
(18, 'web', 'Web', 18, 'OFF', 'proyectos', NULL, NULL, 'web'),
(19, 'productos', 'Productos', 19, 'OFF', 'proyectos', NULL, NULL, 'productos'),
(20, 'ciuu', 'CIUU', 20, 'OFF', 'proyectos', NULL, NULL, 'ciuu'),
(21, 'mo', 'MO', 21, 'OFF', 'proyectos', NULL, NULL, 'mo'),
(22, 'enuep', 'En UEP', 22, 'OFF', 'proyectos', NULL, NULL, 'enuep'),
(23, 'descripcion', 'Descripción', 23, 'OFF', 'proyectos', NULL, NULL, 'descripcion'),
(24, 'inversionTotal', 'Inv. Total', 24, 'OFF', 'proyectos', NULL, NULL, 'invsersion_total'),
(25, 'inversionRealizada', 'Inversión Realizada', 25, 'OFF', 'proyectos', NULL, NULL, 'inversion_realizda'),
(26, 'inversionARealizar_ct', 'Inv. a Realizar en Capital de Trabajo', 26, 'OFF', 'proyectos', NULL, NULL, 'inv_realizada_en_capital_de_trabajo'),
(27, 'inversionARealizar_af', 'Inv. a Realizar en Activo Fijo', 27, 'OFF', 'proyectos', NULL, NULL, 'inv_realizada_en_activo_fijo'),
(28, 'figuraLegal_id', 'Figura Legal', 28, 'OFF', 'proyectos', NULL, NULL, 'figura_legal'),
(29, 'periodicidad_id', 'Periodicidad', 29, 'OFF', 'proyectos', NULL, NULL, 'periodicidad'),
(30, 'destinoCredito_id', 'Destino del Crédito', 30, 'OFF', 'proyectos', NULL, NULL, 'destino_del_credito'),
(31, 'refinanciado', 'Refinanciado?', 31, 'OFF', 'proyectos', NULL, NULL, 'refinanciado'),
(32, 'plazoGracia', 'Plazo de Gracia', 32, 'OFF', 'proyectos', NULL, NULL, 'plazo_de_gracia'),
(33, 'plazoAmortizacion', 'Plazo de Amortiz.', 33, 'OFF', 'proyectos', NULL, NULL, 'plazo_de_amortizacion'),
(34, 'cantidadDesembolsos', 'Cant. Desembolsos', 34, 'OFF', 'proyectos', NULL, NULL, 'cantidad_de_desembolsos'),
(35, 'tasa', 'Tasa', 35, 'OFF', 'proyectos', NULL, NULL, 'tasa'),
(36, 'garantia_id', 'Garantía', 36, 'OFF', 'proyectos', NULL, NULL, 'garantia'),
(37, 'descripcionGarantia', 'Descripción de la Garantía', 37, 'OFF', 'proyectos', NULL, NULL, 'descripcion_de_garantias'),
(38, 'sujetoCredito', 'Sujeto Crédito', 38, 'OFF', 'proyectos', NULL, NULL, 'sujeto_credito'),
(39, 'fechaEnvioBanco', 'Envío al Bco', 39, 'OFF', 'proyectos', NULL, NULL, 'fecha_envio_banco'),
(40, 'fechaRespuestaBanco', 'Respuesta del Bco', 40, 'OFF', 'proyectos', NULL, NULL, 'fecha_respuesta_del_banco'),
(41, 'fechaCaducoBanco', 'Caduco Banco', 41, 'OFF', 'proyectos', NULL, NULL, 'fecha_caduco_banco'),
(42, 'fechaAprobadoUep', 'Aprobado UEP', 42, 'OFF', 'proyectos', NULL, NULL, 'fecha_aprobado_uep'),
(43, 'fechaEnviadoCfi', 'Enviado CFI', 43, 'OFF', 'proyectos', NULL, NULL, 'fecha_enviado_cfi'),
(44, 'fechaAprobadoCfi', 'Aprobado CFI', 44, 'OFF', 'proyectos', NULL, NULL, 'fecha_aprobado_cfi'),
(45, 'fechaTramdispo', 'Trámite de Disposición', 45, 'OFF', 'proyectos', NULL, NULL, 'fecha_tramite_de_disposicon'),
(46, 'fechaComunicaTran', 'Comun. Transf.', 46, 'OFF', 'proyectos', NULL, NULL, 'comunicacion_transferencia_fecha'),
(47, 'fechaDesembolso', 'Desembolso', 47, 'OFF', 'proyectos', NULL, NULL, 'fecha_desembolso'),
(48, 'fechaEfectivizacion', 'Efectivización', 48, 'OFF', 'proyectos', NULL, NULL, 'fecha_efectivizacion'),
(49, 'fechaDesistido', 'Desistido', 49, 'OFF', 'proyectos', NULL, NULL, 'fecha_desistido'),
(50, 'fechaJudicial', 'Judicial', 50, 'OFF', 'proyectos', NULL, NULL, 'fecha_pase_a_judicial'),
(51, 'fechaCancelado', 'Cancelado', 51, 'OFF', 'proyectos', NULL, NULL, 'fecha_cancelado'),
(52, 'fechaArchivado', 'Archivado', 52, 'OFF', 'proyectos', NULL, NULL, 'fecha_archivado'),
(53, 'fechaUltimoMovimiento', 'Último Movimiento', 53, 'ON', 'proyectos', NULL, NULL, 'fecha_ultimo_movimiento'),
(54, 'observaciones', 'Observaciones', 54, 'OFF', 'proyectos', NULL, NULL, 'observaciones'),
(55, 'sucursal_id', 'Sucursal del Banco', 55, 'OFF', 'proyectos', NULL, NULL, 'sucursal_del_banco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ALUMINÉ', 'alumine', '2018-10-16 16:28:22', '2018-10-16 16:28:22'),
(2, 'AÑELO', 'anelo', '2018-10-16 16:28:29', '2018-10-16 16:28:29'),
(3, 'CATÁN LIL', 'catan-lil', '2018-10-16 16:28:47', '2018-10-16 16:28:47'),
(4, 'CHOS MALAL', 'chos-malal', '2018-10-16 16:29:00', '2018-10-16 16:29:00'),
(5, 'COLLÓN CURÁ', 'collon-cura', '2018-10-16 16:29:12', '2018-10-16 16:29:12'),
(6, 'CONFLUENCIA', 'confluencia', '2018-10-16 16:29:25', '2018-10-16 16:29:25'),
(7, 'HUILICHES', 'huiliches', '2018-10-16 16:29:41', '2018-10-16 16:29:41'),
(8, 'LÁCAR', 'lacar', '2018-10-16 16:29:54', '2018-10-16 16:29:54'),
(9, 'LONCOPUÉ', 'loncopue', '2018-10-16 16:30:03', '2018-10-16 16:30:03'),
(10, 'LOS LAGOS', 'los-lagos', '2018-10-16 16:30:13', '2018-10-16 16:30:13'),
(11, 'MINAS', 'minas', '2018-10-16 16:30:22', '2018-10-16 16:30:22'),
(12, 'ÑORQUÍN', 'norquin', '2018-10-16 16:30:40', '2018-10-16 16:30:40'),
(13, 'PEHUENCHES', 'pehuenches', '2018-10-16 16:30:53', '2018-10-16 16:30:53'),
(14, 'PICÚN LEUFÚ', 'picun-leufu', '2018-10-16 16:31:09', '2018-10-16 16:31:09'),
(15, 'PICUNCHES', 'picunches', '2018-10-16 16:31:22', '2018-10-16 16:31:22'),
(16, 'ZAPALA', 'zapala', '2018-10-16 16:31:30', '2018-10-16 16:31:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desembolsos`
--

CREATE TABLE `desembolsos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nro` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `pago` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `desembolsos`
--

INSERT INTO `desembolsos` (`id`, `proyecto_id`, `fecha`, `nro`, `monto`, `descripcion`, `pago`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-06', '1', 1000000, 'ttthfhjfhfhjfh', NULL, '2018-12-06_430', '2018-11-12 12:22:23', '2018-12-20 13:29:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino_credito`
--

CREATE TABLE `destino_credito` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TITULAR', 'titular', '2018-10-16 15:49:03', '2018-10-16 15:49:03'),
(2, 'UEP', 'uep', '2018-10-16 15:49:11', '2018-10-16 15:49:11'),
(3, 'BANCO', 'banco', '2018-10-16 15:49:18', '2018-10-16 15:49:18'),
(4, 'CFI', 'cfi', '2018-10-16 15:49:29', '2018-10-16 15:49:29'),
(5, 'CANCELADO', 'cancelado', '2018-10-16 15:49:38', '2018-10-16 15:49:38'),
(6, 'AMORTIZANDO', 'amortizando', '2018-10-16 15:49:49', '2018-10-16 15:49:49'),
(7, 'GESTION JUDICIAL', 'gestion-judicial', '2018-10-16 15:49:57', '2018-10-16 15:49:57'),
(8, 'DESISTIDO', 'desistido', '2018-10-16 15:50:23', '2018-10-16 15:50:23'),
(9, 'EFECTIVIZADO', 'efectivizado', '2018-10-16 15:50:32', '2018-10-16 15:50:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_civiles`
--

CREATE TABLE `estados_civiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados_civiles`
--

INSERT INTO `estados_civiles` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CASADO', 'casado', '2018-10-16 15:51:19', '2018-10-16 15:51:19'),
(2, 'SOLTERO', 'soltero', '2018-10-16 15:51:27', '2018-10-16 15:51:27'),
(3, 'DIVORCIADO', 'divorciado', '2018-10-16 15:51:34', '2018-10-16 15:51:34'),
(4, 'VIUDO', 'viudo', '2018-10-16 15:51:40', '2018-10-16 15:51:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_internos`
--

CREATE TABLE `estados_internos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados_internos`
--

INSERT INTO `estados_internos` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'EN TITULAR PARA COMPLETAR INFORMACION', 'en-titular-para-completar-informacion', '2018-10-17 11:47:25', '2018-10-17 11:47:25'),
(2, 'EN LA UEP EN EVALUACION', 'en-la-uep-en-evaluacion', '2018-10-17 11:47:44', '2018-10-17 11:47:44'),
(3, 'EN EL BANCO PARA SUJETO DE CRÉDITO', 'en-el-banco-para-sujeto-de-credito', '2018-10-17 11:48:06', '2018-10-17 11:48:06'),
(4, 'EN EL BANCO PARA CONSTITUCIÓN DE GARANTÍAS', 'en-el-banco-para-constitucion-de-garantias', '2018-10-17 11:48:20', '2018-10-17 11:48:20'),
(5, 'EN TITULAR PARA COMPELTAR GUÍA', 'en-titular-para-compeltar-guia', '2018-10-17 11:48:32', '2018-10-17 11:48:32'),
(6, 'EN EVALUACIÓN EN EL CFI', 'en-evaluacion-en-el-cfi', '2018-10-17 11:48:48', '2018-10-17 11:48:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figuras_legales`
--

CREATE TABLE `figuras_legales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `figuras_legales`
--

INSERT INTO `figuras_legales` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'SOCIEDAD DE HECHO', 'sociedad-de-hecho', '2018-10-16 15:51:54', '2018-10-16 15:51:54'),
(2, 'SOCIEDAD ANÓNIMA (SA)', 'sociedad-anonima-sa', '2018-10-16 15:52:00', '2018-10-16 15:52:00'),
(3, 'MONOTRIBUTISTA', 'monotributista', '2018-10-16 15:52:26', '2018-10-16 15:52:26'),
(4, 'SOCIEDAD DE RESPONSABILIDAD LIMITADA (SRL)', 'sociedad-de-responsabilidad-limitada-srl', '2018-10-16 15:52:39', '2018-10-16 15:52:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantias`
--

CREATE TABLE `garantias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `garantias`
--

INSERT INTO `garantias` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PRENDARIAS', 'prendarias', '2018-10-16 15:53:04', '2018-10-16 15:53:04'),
(2, 'HIPOTECARIAS', 'hipotecarias', '2018-10-16 15:53:14', '2018-10-16 15:53:14'),
(3, 'MIXTAS', 'mixtas', '2018-10-16 15:53:19', '2018-10-16 15:53:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_creditos`
--

CREATE TABLE `lineas_creditos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto_maximo` int(11) NOT NULL,
  `gracia_maximo` tinyint(4) NOT NULL,
  `amortizacion_maximo` tinyint(4) NOT NULL,
  `tasa` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineas_creditos`
--

INSERT INTO `lineas_creditos` (`id`, `nombre`, `descripcion`, `monto_maximo`, `gracia_maximo`, `amortizacion_maximo`, `tasa`, `user_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'REACTIVACION PRODUCTIVA', 'Línea de Créditos para la Reactivación Productiva', 2500000, 18, 36, 9, 1, 'reactivacion-productiva', '2018-10-16 16:00:14', '2018-10-16 16:00:14'),
(2, 'PROGRAMA ALFALFA', 'Línea de Créditos para la Alfalfa', 150000, 18, 36, 9, 1, 'programa-alfalfa', '2018-10-16 16:01:10', '2018-10-16 16:01:10'),
(3, 'PROGRAMA ENERGÍAS ALTERNATIVAS', 'Línea de Créditos para la Adquisición de Generadores de Energías Alternativas', 150000, 18, 36, 9, 1, 'programa-energias-alternativas', '2018-10-16 16:02:18', '2018-10-16 16:02:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `zona_id` int(10) UNSIGNED DEFAULT NULL,
  `dpto_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`, `cp`, `provincia_id`, `zona_id`, `dpto_id`, `user_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, '11 DE OCTUBRE', '1111', 2, NULL, 6, 1, '11-de-octubre', '2018-10-16 16:43:07', '2018-10-16 16:43:07'),
(2, 'AGUADA SAN ROQUE', '2222', 2, NULL, 2, 1, 'aguada-san-roque', '2018-10-16 16:48:50', '2018-10-16 16:48:50'),
(3, 'ALUMINÉ', '2333', 2, NULL, 1, 1, 'alumine', '2018-10-16 16:49:47', '2018-10-16 16:49:47'),
(4, 'ANDACOLLO', '4444', 2, NULL, 11, 1, 'andacollo', '2018-10-16 16:50:04', '2018-10-16 16:50:04'),
(5, 'AÑELO', '4444', 2, NULL, 2, 1, 'anelo', '2018-10-16 16:50:24', '2018-10-16 16:50:24'),
(6, 'ARROYITO', '4444', 2, NULL, 6, 1, 'arroyito', '2018-10-16 16:50:47', '2018-10-16 16:50:47'),
(7, 'BAJADA DEL AGRIO', '4444', 2, NULL, 15, 1, 'bajada-del-agrio', '2018-10-16 16:51:18', '2018-10-16 16:51:18'),
(8, 'BARRANCAS', '4444', 2, NULL, 13, 1, 'barrancas', '2018-10-16 16:51:36', '2018-10-16 16:51:36'),
(9, 'BARRIO RUCA RUHÉ', '4444', 2, NULL, 6, 1, 'barrio-ruca-ruhe', '2018-10-16 16:52:30', '2018-10-16 16:52:30'),
(10, 'BUTA RANQUIL', '4445', 2, NULL, 13, 1, 'buta-ranquil', '2018-10-16 16:54:11', '2018-10-16 16:54:11'),
(11, 'CAVIAHUE', '5555', 2, NULL, 12, 1, 'caviahue', '2018-10-16 16:54:31', '2018-10-16 16:54:31'),
(12, 'CENTENARIO', '1111', 2, NULL, 6, 1, 'centenario', '2018-10-17 11:41:58', '2018-10-17 11:41:58'),
(13, 'CHORRIACA', '1111', 2, NULL, 9, 1, 'chorriaca', '2018-10-17 11:42:25', '2018-10-17 11:42:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_01_20_084450_create_roles_table', 1),
(4, '2015_01_20_084525_create_role_user_table', 1),
(5, '2015_01_24_080208_create_permissions_table', 1),
(6, '2015_01_24_080433_create_permission_role_table', 1),
(7, '2015_12_04_003040_add_special_role_column', 1),
(8, '2017_10_17_170735_create_permission_user_table', 1),
(9, '2018_05_05_135208_create_profile_table', 1),
(10, '2018_05_20_132058_create_bancos_table', 1),
(11, '2018_05_20_132208_create_sectores_table', 1),
(12, '2018_05_20_132435_create_lineas_creditos_table', 1),
(13, '2018_05_20_132502_create_estados_civiles_table', 1),
(14, '2018_05_20_132523_create_estados_table', 1),
(15, '2018_05_20_132549_create_estados_internos_table', 1),
(16, '2018_05_20_132618_create_figuras_legales_table', 1),
(17, '2018_05_20_132646_create_periodicidades_table', 1),
(18, '2018_05_20_132702_create_zonas_table', 1),
(19, '2018_05_20_132721_create_provincias_table', 1),
(20, '2018_05_20_132740_create_garantias_table', 1),
(21, '2018_05_27_114537_create_auditoria_table', 1),
(22, '2018_05_27_130653_create_localidades_table', 1),
(23, '2018_06_22_105125_create_destino_credito_table', 1),
(24, '2018_06_23_095825_create_sucursales_table', 1),
(25, '2018_06_23_101615_create_proyectos_table', 1),
(26, '2018_06_24_095239_create_sujeto_credito_table', 1),
(27, '2018_06_24_120231_create_movimientos_proyectos_table', 1),
(28, '2018_07_08_120231_create_refinanciaciones_table', 1),
(29, '2018_07_10_143915_create_anexos_proyectos_table', 1),
(30, '2018_10_08_132928_create_checklists_table', 1),
(31, '2018_10_16_114917_create_alertas_table', 2),
(32, '2018_10_16_115545_create_alerta_proyectos_table', 3),
(33, '2018_10_16_131319_create_departamentos_table', 4),
(34, '2018_10_17_111039_create_titular_table', 5),
(35, '2018_10_17_112628_create_desembolsos_table', 6),
(36, '2018_11_01_082839_create_seguimientos_table', 7),
(37, '2018_11_02_084748_create_columnasview_table', 8),
(38, '2018_11_02_085005_create_columnasexcel_table', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos_proyectos`
--

CREATE TABLE `movimientos_proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` tinyint(1) DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movimientos_proyectos`
--

INSERT INTO `movimientos_proyectos` (`id`, `user_id`, `proyecto_id`, `fecha`, `descripcion`, `file`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-12-07', 'ggffgfgfgd', NULL, '07-12-2018741', '2018-12-20 13:34:26', '2018-12-20 13:34:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('maurotello73@gmail.com', '$2y$10$mG5VpxJ1OSWZdYJymoIFueWLsQu92gMfGxaniONgozQjmhHnBkcYy', '2018-10-19 12:10:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodicidades`
--

CREATE TABLE `periodicidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `periodicidades`
--

INSERT INTO `periodicidades` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'MENSUAL', 'mensual', '2018-10-16 15:53:31', '2018-10-16 15:53:31'),
(2, 'TRIMESTRAL', 'trimestral', '2018-10-16 15:53:37', '2018-10-16 15:53:37'),
(3, 'SEMESTRAL', 'semestral', '2018-10-16 15:53:44', '2018-10-16 15:53:44'),
(4, 'ANUAL', 'anual', '2018-10-16 15:53:50', '2018-10-16 15:53:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Listar Usuarios', 'users.index', 'Lista y Navega todos los usuarios del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(2, 'Ver detalle de Usuario', 'users.show', 'Ver en detalle cada usuario del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(3, 'Editar Usuario', 'users.edit', 'Editar cualquier usuario del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(4, 'Eliminar Usuario', 'users.destroy', 'Eliminar cualquier usuario del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(5, 'Crear Usuario', 'users.create', 'Crear un usuario del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(6, 'Listar Roles', 'roles.index', 'Lista y Navega todos los roles del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(7, 'Ver detalle de Roles', 'roles.show', 'Ver en detalle cada rol del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(8, 'Editar Roles', 'roles.edit', 'Editar cualquier rol del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(9, 'Eliminar Rol', 'roles.destroy', 'Eliminar cualquier rol del sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(10, 'Crear Rol', 'roles.create', 'Crear un rol para sistema', '2018-10-19 14:14:15', '2018-10-19 14:14:15'),
(11, 'Listar Sectores', 'sector.index', 'Es el permiso que nos permite listar los sectores cargados en el sistema', NULL, '2018-11-09 12:12:37'),
(12, 'Crear un nuevo Sector', 'sector.create', 'Es el permiso que nos habilita a crear un nuevo sector en el sistema', NULL, '2018-11-09 12:13:05'),
(13, 'Guardar nuevo Sector', 'sector.store', 'Es el permiso que nos habilita a guardar un nuevo Sector', NULL, '2018-11-09 12:13:30'),
(14, 'Actualizar Sector', 'sector.update', 'Nos habilita a Actualizar un Sector existente', NULL, '2018-11-09 12:13:52'),
(15, 'Borrar Sector', 'sector.destroy', 'Nos permite Borrar del sistema un Sector', NULL, '2018-11-09 12:14:35'),
(16, 'Editar Sector', 'sector.edit', 'Nos habilita a Editar un sector ya cargado', NULL, '2018-11-09 12:14:58'),
(17, 'Visualizar Sector', 'sector.show', 'Nos habilita a Visualizar en detalle un Sector si fuese necesario', NULL, '2018-11-09 12:15:26'),
(18, 'Crear Nuevo Permiso', 'permission.create', 'Esta acción habilita al usuario o rol a crear un nuevo permiso para el sistema', NULL, '2018-11-09 12:16:05'),
(19, 'Guardar Permiso', 'permission.store', 'Habilita al usuario a Guardar la creación de un nuevo permiso', NULL, '2018-11-09 12:16:30'),
(20, 'Editar Permiso', 'permission.edit', 'Nos habilita a Editar un permiso existente', '2018-10-29 14:16:23', '2018-11-09 12:16:50'),
(21, 'Actualizar Permiso', 'permission.update', 'permission.update', '2018-10-29 14:18:12', '2018-10-29 14:18:12'),
(22, 'Borrar Permiso', 'permission.destroy', 'permission.destroy', '2018-10-29 14:18:39', '2018-10-29 14:18:39'),
(23, 'permission.show', 'permission.show', 'permission.show', '2018-10-29 14:19:06', '2018-10-29 14:19:06'),
(24, 'Listar Bancos', 'banco.index', 'banco.index', NULL, NULL),
(25, 'Nuevo Banco', 'banco.create', 'Habilita al usuario para cargar un Nuevo Banco al sistema', NULL, NULL),
(26, 'Editar Banco', 'banco.edit', 'banco.edit', NULL, NULL),
(27, 'Mostrar Banco', 'banco.show', 'banco.show', NULL, NULL),
(28, 'Borrar Banco', 'banco.destroy', 'Nos habilita a borrar un Banco cargado en el sistema', NULL, NULL),
(29, 'Listar Departamentos', 'departamento.index', 'departamento.index', NULL, NULL),
(30, 'Nuevo Departamento', 'departamento.create', 'departamento.create', NULL, NULL),
(31, 'Editar Departamento', 'departamento.edit', 'departamento.edit', NULL, NULL),
(32, 'Mostrar Departamento', 'Mostrar Departamento', 'departamento.show', NULL, NULL),
(33, 'departamento.destroy', 'Borrar Departamento', 'departamento.destroy', NULL, NULL),
(34, 'Listado de Desembolsos', 'desembolso.index', 'desembolso.index', NULL, NULL),
(35, 'Nuevo Desembolso', 'desembolso.create\r\n', 'desembolso.create', NULL, NULL),
(36, 'Guardar Desembolso', 'desembolso.store', 'desembolso.store', NULL, NULL),
(37, 'Editar Desembolso', 'desembolso.edit', 'desembolso.edit', NULL, NULL),
(38, 'Mostrar Desembolso', 'desembolso.show', 'desembolso.show', NULL, NULL),
(39, 'Actualizar Desembolso', 'desembolso.update', 'desembolso.update', NULL, NULL),
(40, 'ActualizarAjax Desembolso', 'desembolso.updateAjax', 'desembolso.updateAjax', NULL, NULL),
(41, 'desembolso.delete', 'Borrar Desembolso', 'desembolso.delete', NULL, NULL),
(42, 'Buscar Desembolso', 'desembolso.search', 'desembolso.search', NULL, NULL),
(43, 'Listar Destinos de Créditos', 'destinoCredito.index', 'destinoCredito.index', NULL, NULL),
(44, 'Nuevo Destino Crédito', 'destinoCredito.create', 'destinoCredito.create', NULL, NULL),
(45, 'Editar Destino Crédito', 'destinoCredito.edit', 'destinoCredito.edit', NULL, NULL),
(46, 'Mostrar Destino Crédito', 'destinoCredito.show', 'destinoCredito.show', NULL, NULL),
(47, 'Borrar Destino Crédito', 'destinoCredito.destroy', 'destinoCredito.destroy', NULL, NULL),
(48, 'Listar Estados Civiles', 'estadoCivil.index', 'estadoCivil.index', NULL, NULL),
(49, 'Nuevo Estado Civil', 'estadoCivil.create', 'estadoCivil.create', NULL, NULL),
(50, 'Editar Estado Civil', 'estadoCivil.edit', 'estadoCivil.edit', NULL, NULL),
(51, 'Mostrar Estado Civil', 'estadoCivil.show', 'estadoCivil.show', NULL, NULL),
(52, 'Borrar Estado Civil', 'estadoCivil.destroy', 'estadoCivil.destroy', NULL, NULL),
(53, 'Listar Estados', 'estado.index', 'estado.index', NULL, NULL),
(54, 'Nuevo Estado', 'estado.create', 'estado.create', NULL, NULL),
(55, 'Editar Estado', 'estado.edit', 'estado.edit', NULL, NULL),
(56, 'Mostrar Estado', 'estado.show', 'estado.show', NULL, NULL),
(57, 'Borrar Estado', 'estado.destroy', 'estado.destroy', NULL, NULL),
(58, 'Listar Estados Internos', 'estadoInterno.index', 'estadoInterno.index', NULL, NULL),
(59, 'Nuevo Estado Interno', 'estadoInterno.create', 'estadoInterno.create', NULL, NULL),
(60, 'Editar Estado Interno', 'estadoInterno.edit', 'estadoInterno.edit', NULL, NULL),
(61, 'Mostrar Estado Interno', 'estadoInterno.show', 'estadoInterno.show', NULL, NULL),
(62, 'Borrar Estado Interno', 'estadoInterno.destroy', 'estadoInterno.destroy', NULL, NULL),
(63, 'Listar Figura Legal', 'figuraLegal.index', 'figuraLegal.index', NULL, NULL),
(64, 'Nueva Figura Legal', 'figuraLegal.create', 'figuraLegal.create', NULL, NULL),
(65, 'Editar Figura Legal', 'figuraLegal.edit', 'figuraLegal.edit', NULL, NULL),
(66, 'Mostrar Figura Legal', 'figuraLegal.show', 'figuraLegal.show', NULL, NULL),
(67, 'Borrar Figura Legal', 'figuraLegal.destroy', 'figuraLegal.destroy', NULL, NULL),
(68, 'Listar Garantías', 'garantia.index', 'garantia.index', NULL, NULL),
(69, 'Nueva Garantía', 'garantia.create', 'garantia.create', NULL, NULL),
(70, 'Editar Garantía', 'garantia.edit', 'garantia.edit', NULL, NULL),
(71, 'Mostrar Garantía', 'garantia.show', 'garantia.show', NULL, NULL),
(72, 'Borrar Garantía', 'garantia.destroy', 'garantia.destroy', NULL, NULL),
(73, 'Listar Línea de Crédito', 'lineacredito.index', 'lineacredito.index', NULL, NULL),
(74, 'Nueva Línea de Crédito', 'lineacredito.create', 'lineacredito.create', NULL, NULL),
(75, 'Editar Línea de Crédito', 'lineacredito.edit', 'lineacredito.edit', NULL, NULL),
(76, 'Mostrar Línea de Crédito', 'lineacredito.show', 'lineacredito.show', NULL, NULL),
(77, 'Actualizar Línea de Crédito', 'lineacredito.update', 'lineacredito.update', NULL, NULL),
(78, 'Borrar Línea de Crédito', 'lineacredito.delete', 'lineacredito.delete', NULL, NULL),
(79, 'Exportar Línea de Crédito', 'lineacredito.export', 'lineacredito.export', NULL, NULL),
(80, 'Listar Localidades', 'localidad.index', 'localidad.index', NULL, NULL),
(81, 'Nueva Localidad', 'localidad.create', 'localidad.create', NULL, NULL),
(82, 'Guardar Localidad', 'localidad.store', 'localidad.store', NULL, NULL),
(83, 'Editar Localidad', 'localidad.edit', 'localidad.edit', NULL, NULL),
(84, 'Mostrar Localidad', 'localidad.show', 'localidad.show', NULL, NULL),
(85, 'Actualizar Localidad', 'localidad.update', 'localidad.update', NULL, NULL),
(86, 'Borrar Localidad', 'localidad.delete', 'localidad.delete', NULL, NULL),
(87, 'Listar Movimientos', 'movimiento.index', 'movimiento.index', NULL, NULL),
(88, 'Nuevo Movimiento', 'movimiento.create', 'movimiento.create', NULL, NULL),
(89, 'Editar Movimiento', 'movimiento.edit', 'movimiento.edit', NULL, NULL),
(90, 'Mostrar Movimiento', 'movimiento.show', 'movimiento.show', NULL, NULL),
(91, 'Borrar Movimiento', 'movimiento.destroy', 'movimiento.destroy', NULL, NULL),
(92, 'Listar Periodicidades', 'periodicidad.index', 'periodicidad.index', NULL, NULL),
(93, 'Nueva Periodicidad', 'periodicidad.create', 'periodicidad.create', NULL, NULL),
(94, 'Editar Periodicidad', 'periodicidad.edit', 'periodicidad.edit', NULL, NULL),
(95, 'Mostrar Periodicidad', 'periodicidad.show', 'periodicidad.show', NULL, NULL),
(96, 'Borrar Periodicidad', 'periodicidad.destroy', 'periodicidad.destroy', NULL, NULL),
(97, 'Listar Perfiles', 'profile.index', 'profile.index', NULL, NULL),
(98, 'Nuevo Perfil', 'profile.create', 'profile.create', NULL, NULL),
(99, 'Guardar Perfil', 'profile.store', 'rofile.store', NULL, NULL),
(100, 'Editar Perfil', 'profile.edit', 'profile.edit', NULL, NULL),
(101, 'Mostrar Perfil', 'profile.show', 'profile.show', NULL, NULL),
(102, 'Actualizar Perfil', 'profile.update', 'profile.update', NULL, NULL),
(103, 'Borrar Perfil', 'profile.destroy', 'profile.destroy', NULL, NULL),
(104, 'Listar Provincias', 'provincia.index', 'provincia.index', NULL, NULL),
(105, 'Nueva Provincia', 'provincia.create', 'provincia.create', NULL, NULL),
(106, 'Actualizar Provincia', 'provincia.edit', 'provincia.edit', NULL, NULL),
(107, 'Mostrar Provincia', 'provincia.show', 'provincia.show', NULL, NULL),
(108, 'Borrar Provincia', 'provincia.destroy', 'provincia.destroy', NULL, NULL),
(109, 'Listar Proyectos', 'proyecto.index', 'proyecto.index', NULL, NULL),
(110, 'Nuevo Proyecto', 'proyecto.create', 'proyecto.create', NULL, NULL),
(111, 'Guardar Proyecto', 'proyecto.store', 'proyecto.store', NULL, NULL),
(112, 'Editar Proyecto', 'proyecto.edit', 'proyecto.edit', NULL, NULL),
(113, 'Editar Proyecto 1', 'proyecto.editar', 'proyecto.editar', NULL, NULL),
(114, 'Mostrar Proyecto', 'proyecto.show', 'proyecto.show', NULL, NULL),
(115, 'Filtrar Proyectos', 'proyecto.filtrar', 'proyecto.filtrar', NULL, NULL),
(116, 'Actualizar Proyecto', 'proyecto.update', 'proyecto.update', NULL, NULL),
(117, 'Borrar Proyecto', 'proyecto.delete', 'proyecto.delete', NULL, NULL),
(118, 'Listar Refinanciaciones', 'refinanciacion.index', 'refinanciacion.index', NULL, NULL),
(119, 'Nueva Refinanciación', 'refinanciacion.create', 'refinanciacion.create', NULL, NULL),
(120, 'Nueva Refinanciación desde Proyecto', 'refinanciacion.create1', 'refinanciacion.create1', NULL, NULL),
(121, 'Guardar Refinanciación', 'refinanciacion.store', 'refinanciacion.store', NULL, NULL),
(122, 'Editar Refinanciación desde Proyecto', 'refinanciacion.edit', 'refinanciacion.edit', NULL, NULL),
(123, 'Editar Refinanciación', 'refinanciacion.editar', 'refinanciacion.editar', NULL, NULL),
(124, 'Mostrar Refinanciación', 'refinanciacion.show', 'refinanciacion.show', NULL, NULL),
(125, 'Actualizar Refinanciación', 'refinanciacion.update', 'refinanciacion.update', NULL, NULL),
(126, 'Borrar Refinanciación', 'refinanciacion.delete', 'refinanciacion.delete', NULL, NULL),
(127, 'Listar Sucursales', 'sucursal.index', 'sucursal.index', NULL, NULL),
(128, 'Nueva Sucursal', 'sucursal.create', 'sucursal.create', NULL, NULL),
(129, 'Guardar Sucursal', 'sucursal.store', 'sucursal.store', NULL, NULL),
(130, 'Editar Sucursal', 'sucursal.edit', 'sucursal.edit', NULL, NULL),
(131, 'Mostrar Sucursal', 'sucursal.show', 'sucursal.show', NULL, NULL),
(132, 'Actualizar Sucusal', 'sucursal.update', 'sucursal.update', NULL, NULL),
(133, 'Borrar Sucursal', 'sucursal.delete', 'sucursal.delete', NULL, NULL),
(134, 'Listar Titulares', 'titular.index', 'titular.index', NULL, NULL),
(135, 'Nuevo Titular', 'titular.create', 'titular.create', NULL, NULL),
(136, 'Nuevo Titular desde Proyecto', 'titular.create1', 'titular.create1', NULL, NULL),
(137, 'Guardar Titular', 'titular.store', 'titular.store', NULL, NULL),
(138, 'Editar Titular desde Proyecto', 'titular.edit', 'titular.edit', NULL, NULL),
(139, 'Editar Titular', 'titular.editar', 'titular.editar', NULL, NULL),
(140, 'Mostrar titular', 'titular.show', 'titular.show', NULL, NULL),
(141, 'Actualizar titular', 'titular.update', 'titular.update', NULL, NULL),
(142, 'Borrar Titular', 'titular.delete', 'titular.delete', NULL, NULL),
(143, 'Listar Zonas', 'zona.index', 'zona.index', NULL, NULL),
(144, 'Nueva Zona', 'zona.create', 'zona.create', NULL, NULL),
(145, 'Editar Zona', 'zona.edit', 'zona.edit', NULL, NULL),
(146, 'Mostrar Zona', 'zona.show', 'zona.show', NULL, NULL),
(147, 'Borrar Zona', 'zona.destroy', 'zona.destroy', NULL, NULL),
(148, 'columnasexcel.index', 'columnasexcel.index', 'columnasexcel.index', NULL, NULL),
(149, 'columnasexcel.create', 'columnasexcel.create', 'columnasexcel.create', NULL, NULL),
(150, 'columnasexcel.store', 'columnasexcel.store', 'columnasexcel.store', NULL, NULL),
(151, 'columnasexcel.edit', 'columnasexcel.edit', 'columnasexcel.edit', NULL, NULL),
(152, 'columnasexcel.update', 'columnasexcel.update', 'columnasexcel.update', NULL, NULL),
(153, 'columnasexcel.delete', 'columnasexcel.delete', 'columnasexcel.delete', NULL, NULL),
(154, 'columnasview.create', 'columnasview.create', 'columnasview.create', NULL, NULL),
(155, 'columnasview.store', 'columnasview.store', 'columnasview.store', NULL, NULL),
(156, 'columnasview.edit', 'columnasview.edit', 'columnasview.edit', NULL, NULL),
(157, 'columnasview.update', 'columnasview.update', 'columnasview.update', NULL, NULL),
(158, 'columnasview.delete', 'columnasview.delete', 'columnasview.delete', NULL, NULL),
(159, 'columnasview.index', 'columnasview.index', 'columnasview.index', NULL, NULL),
(160, 'Listar los Sujetos de Créditos', 'sujetoCredito.index', '', NULL, NULL),
(161, 'Nuevo Sujeto de Crédito', 'sujetoCredito.create', NULL, NULL, NULL),
(162, 'Guardar Nuevo Sujeto de Crédito', 'sujetoCredito.store', NULL, NULL, NULL),
(163, 'Editar Sujeto de Crédito', 'sujetoCredito.edit', NULL, NULL, NULL),
(164, 'Mostrar detalle del Sujeto de Crédito', 'sujetoCredito.show', NULL, NULL, NULL),
(165, 'Actualizar Sujeto de Crédito', 'sujetoCredito.update', NULL, NULL, NULL),
(166, 'Borrar Sujeto de Crédito', 'sujetoCredito.delete', NULL, NULL, NULL),
(167, 'Actualizar Sujeto de Crédito desde Proyectos', 'sujetoCredito.updateAjax', NULL, NULL, NULL),
(168, 'Buscar Sujetos de Créditos para Editarlos', 'sujetoCredito.search', NULL, NULL, NULL),
(169, 'Borrar un movimiento desde Proeyctos', 'movimiento.deleteAjax', NULL, NULL, NULL),
(170, 'movimiento.removedata', 'movimiento.removedata', NULL, NULL, NULL),
(171, 'movimiento.store', 'movimiento.store', NULL, NULL, NULL),
(172, 'movimiento.update', 'movimiento.update', NULL, NULL, NULL),
(173, 'titular.removedata', 'titular.removedata', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 11, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(7, 12, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(8, 13, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(9, 14, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(10, 15, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(11, 16, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(12, 17, 2, '2018-10-26 14:37:54', '2018-10-26 14:37:54'),
(13, 18, 2, NULL, NULL),
(14, 19, 2, NULL, NULL),
(15, 1, 2, NULL, NULL),
(16, 2, 2, NULL, NULL),
(17, 3, 2, NULL, NULL),
(19, 6, 2, NULL, NULL),
(20, 7, 2, NULL, NULL),
(21, 8, 2, NULL, NULL),
(22, 20, 2, '2018-10-29 15:31:05', '2018-10-29 15:31:05'),
(23, 21, 2, '2018-10-29 15:31:05', '2018-10-29 15:31:05'),
(24, 23, 2, '2018-10-29 15:31:05', '2018-10-29 15:31:05'),
(25, 24, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(26, 25, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(27, 26, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(28, 27, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(29, 29, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(30, 30, 2, '2018-10-29 15:33:43', '2018-10-29 15:33:43'),
(31, 31, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(32, 32, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(33, 34, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(34, 35, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(35, 36, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(36, 37, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(37, 38, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(38, 39, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(39, 40, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(40, 41, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(41, 42, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(42, 43, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(43, 44, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(44, 45, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(45, 46, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(46, 48, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(47, 49, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(48, 50, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(49, 51, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(50, 53, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(51, 56, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(52, 58, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(53, 59, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(54, 60, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(55, 61, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(56, 62, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(57, 63, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(58, 64, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(59, 65, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(60, 66, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(61, 67, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(62, 68, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(63, 69, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(64, 70, 2, '2018-10-29 15:33:44', '2018-10-29 15:33:44'),
(65, 71, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(66, 72, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(67, 73, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(68, 74, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(69, 75, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(70, 76, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(71, 77, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(72, 78, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(73, 79, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(74, 80, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(75, 81, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(76, 82, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(77, 83, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(78, 84, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(79, 85, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(80, 86, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(81, 87, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(82, 88, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(83, 89, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(84, 90, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(85, 92, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(86, 93, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(87, 94, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(88, 95, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(89, 96, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(90, 97, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(91, 99, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(92, 100, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(93, 101, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(94, 102, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(95, 104, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(96, 106, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(97, 107, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(98, 109, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(99, 110, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(100, 111, 2, '2018-10-29 15:33:45', '2018-10-29 15:33:45'),
(101, 112, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(102, 113, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(103, 114, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(104, 115, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(105, 116, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(106, 117, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(107, 118, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(108, 119, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(109, 120, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(110, 121, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(111, 122, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(112, 123, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(113, 124, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(114, 125, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(115, 126, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(116, 127, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(117, 128, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(118, 129, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(119, 130, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(120, 131, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(121, 132, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(122, 133, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(123, 134, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(124, 135, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(125, 136, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(126, 137, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(127, 138, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(128, 139, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(129, 140, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(130, 141, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(131, 142, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(132, 143, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(133, 144, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(134, 145, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(135, 146, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(136, 147, 2, '2018-10-29 15:33:46', '2018-10-29 15:33:46'),
(137, 149, 2, NULL, NULL),
(138, 150, 2, NULL, NULL),
(139, 151, 2, NULL, NULL),
(140, 152, 2, NULL, NULL),
(141, 153, 2, NULL, NULL),
(142, 148, 2, NULL, NULL),
(143, 154, 2, NULL, NULL),
(144, 155, 2, NULL, NULL),
(145, 156, 2, NULL, NULL),
(146, 157, 2, NULL, NULL),
(147, 158, 2, NULL, NULL),
(148, 159, 2, NULL, NULL),
(149, 160, 2, NULL, NULL),
(150, 161, 2, NULL, NULL),
(151, 162, 2, NULL, NULL),
(152, 163, 2, NULL, NULL),
(153, 164, 2, NULL, NULL),
(154, 165, 2, NULL, NULL),
(155, 166, 2, NULL, NULL),
(156, 167, 2, NULL, NULL),
(157, 168, 2, NULL, NULL),
(158, 169, 2, NULL, NULL),
(159, 170, 2, NULL, NULL),
(160, 171, 2, NULL, NULL),
(161, 172, 2, NULL, NULL),
(162, 173, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `avatar`, `apellido`, `nombre`, `telefono`, `estado`, `slug`, `created_at`, `updated_at`) VALUES
(2, 10, NULL, 'Carlos Carrasco', NULL, NULL, 1, 'carlos-carrasco-6', '2018-10-31 14:17:58', '2018-10-31 14:17:58'),
(8, 3, 'upload/profile/gesisE.png', 'Tello', 'Mauro Gabriel', '2920 538998', 1, 'tello-8', '2018-10-31 15:52:12', '2018-11-07 12:35:07'),
(9, 1, NULL, 'Mauro Tello', NULL, NULL, 1, 'mauro-tello-9', '2018-11-01 11:21:26', '2018-11-01 11:21:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`, `codigo`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'RIO NEGRO', 'RN', 'rio-negro', '2018-10-16 15:54:05', '2018-10-16 15:54:05'),
(2, 'NEUQUÉN', 'NQN', 'neuquen', '2018-10-16 15:54:15', '2018-10-16 15:54:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fechaIngreso` date NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroInterno` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `numeroCfi` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `localidad_id` int(10) UNSIGNED DEFAULT NULL,
  `lineaCredito_id` int(10) UNSIGNED DEFAULT NULL,
  `estado_id` int(10) UNSIGNED DEFAULT NULL,
  `estadoInterno_id` int(10) UNSIGNED DEFAULT NULL,
  `sector_id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titular` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` double NOT NULL,
  `tamanio` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `domicilioProyecto` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `domicilioLegal` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `web` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `productos` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `ciuu` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `mo` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `enuep` varchar(3) CHARACTER SET utf8 DEFAULT 'OFF',
  `descripcion` text CHARACTER SET utf8,
  `inversionTotal` double DEFAULT NULL,
  `inversionRealizada` double DEFAULT NULL,
  `inversionARealizar_ct` double DEFAULT NULL,
  `inversionARealizar_af` double DEFAULT NULL,
  `figuraLegal_id` int(10) UNSIGNED DEFAULT NULL,
  `periodicidad_id` int(10) UNSIGNED DEFAULT NULL,
  `destinoCredito_id` int(10) UNSIGNED DEFAULT NULL,
  `refinanciado` int(11) DEFAULT '0',
  `plazoGracia` int(11) DEFAULT NULL,
  `plazoAmortizacion` int(11) DEFAULT NULL,
  `cantidadDesembolsos` int(11) DEFAULT NULL,
  `tasa` double DEFAULT NULL,
  `garantia_id` int(10) UNSIGNED DEFAULT NULL,
  `descripcionGarantia` text CHARACTER SET utf8,
  `sujetoCredito` int(11) DEFAULT '0',
  `fechaEnvioBanco` date DEFAULT NULL,
  `fechaRespuestaBanco` date DEFAULT NULL,
  `fechaPresupuestos` date DEFAULT NULL,
  `fechaCaducoBanco` date DEFAULT NULL,
  `fechaAprobadoUep` date DEFAULT NULL,
  `fechaEnviadoCfi` date DEFAULT NULL,
  `fechaAprobadoCfi` date DEFAULT NULL,
  `fechaTramdispo` date DEFAULT NULL,
  `fechaComunicaTran` date DEFAULT NULL,
  `fechaDesembolso` date DEFAULT NULL,
  `fechaEfectivizacion` date DEFAULT NULL,
  `fechaDesistido` date DEFAULT NULL,
  `fechaJudicial` date DEFAULT NULL,
  `fechaCancelado` date DEFAULT NULL,
  `fechaArchivado` date DEFAULT NULL,
  `fechaUltimoMovimiento` date DEFAULT NULL,
  `observaciones` text CHARACTER SET utf8,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `sucursal_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `fechaIngreso`, `nombre`, `numeroInterno`, `numeroCfi`, `localidad_id`, `lineaCredito_id`, `estado_id`, `estadoInterno_id`, `sector_id`, `tipo`, `titular`, `monto`, `tamanio`, `domicilioProyecto`, `domicilioLegal`, `telefono`, `email`, `web`, `productos`, `ciuu`, `mo`, `enuep`, `descripcion`, `inversionTotal`, `inversionRealizada`, `inversionARealizar_ct`, `inversionARealizar_af`, `figuraLegal_id`, `periodicidad_id`, `destinoCredito_id`, `refinanciado`, `plazoGracia`, `plazoAmortizacion`, `cantidadDesembolsos`, `tasa`, `garantia_id`, `descripcionGarantia`, `sujetoCredito`, `fechaEnvioBanco`, `fechaRespuestaBanco`, `fechaPresupuestos`, `fechaCaducoBanco`, `fechaAprobadoUep`, `fechaEnviadoCfi`, `fechaAprobadoCfi`, `fechaTramdispo`, `fechaComunicaTran`, `fechaDesembolso`, `fechaEfectivizacion`, `fechaDesistido`, `fechaJudicial`, `fechaCancelado`, `fechaArchivado`, `fechaUltimoMovimiento`, `observaciones`, `user_id`, `sucursal_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, '2018-12-20', 'NOMBRE DEL PROYECTO', NULL, NULL, 9, 1, 1, 1, 1, NULL, 'CARLOS', 1200000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2018-12-03', '2018-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'nombre-del-proyecto', '2018-10-17 14:02:15', '2018-12-20 16:05:07'),
(2, '2018-12-20', 'Prueba Eventos', NULL, NULL, 8, 1, 1, 1, 2, NULL, 'Mauro Gabriel TELLO', 500000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'prueba-eventos', '2018-12-20 16:02:24', '2018-12-20 16:02:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refinanciaciones`
--

CREATE TABLE `refinanciaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `nroResolucion` int(11) NOT NULL,
  `montoRefinanciar` double NOT NULL,
  `tasa` double NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plazoGracia` int(11) NOT NULL,
  `plazoAmortizacion` int(11) NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'admin', 'admin_role', NULL, '2018-10-01 03:00:00', '2018-10-19 09:29:32', 'all-access'),
(2, 'Supervisor', 'supervisor', NULL, '2018-10-26 14:37:54', '2018-10-26 14:37:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2018-10-26 14:22:03', '2018-10-26 14:22:03'),
(3, 2, 3, '2018-10-26 14:38:06', '2018-10-26 14:38:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'INDUSTRIAL', 'industrial', '2018-10-16 15:54:28', '2018-10-16 15:54:28'),
(2, 'AGRICOLA', 'agricola', '2018-10-16 15:54:37', '2018-10-16 15:54:37'),
(3, 'GANADERO', 'ganadero', '2018-10-16 15:54:48', '2018-10-16 15:54:48'),
(4, 'MINERO', 'minero', '2018-10-16 15:54:54', '2018-10-16 15:54:54'),
(5, 'FORESTAL', 'forestal', '2018-10-16 15:55:07', '2018-10-16 15:55:07'),
(6, 'PESCA', 'pesca', '2018-10-16 15:55:24', '2018-10-16 15:55:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE `seguimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED DEFAULT NULL,
  `fecha_seguimiento` date DEFAULT NULL,
  `profesional_cfi` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesional_uep` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grado_morosidad` int(11) DEFAULT NULL,
  `nro_entrevista` int(11) DEFAULT NULL,
  `evaluador_sectorial_cfi` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localizacion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_proyecto` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_permanente` int(11) DEFAULT NULL,
  `personal_temporario` int(11) DEFAULT NULL,
  `personal_a_incorporar` int(11) DEFAULT NULL,
  `credito_cfi` double DEFAULT NULL,
  `credito_otros_bancos` double DEFAULT NULL,
  `aporte_propio` double DEFAULT NULL,
  `credito_proveedores` double DEFAULT NULL,
  `inv_preinversion` double DEFAULT NULL,
  `inv_activo_fijo` double DEFAULT NULL,
  `inv_ct` double DEFAULT NULL,
  `prefinanciacion` double DEFAULT NULL,
  `detalle_inversiones` text COLLATE utf8mb4_unicode_ci,
  `plazos_frecuencias_vigentes` text COLLATE utf8mb4_unicode_ci,
  `cant_cuotas` int(11) DEFAULT NULL,
  `frecuencia_amortizacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frecuencia_gracia` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_activa` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_inactiva` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa_parcial` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cambio_nomina` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cambio_afectan_empresa` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cambio_afectan_empresa_medida` text COLLATE utf8mb4_unicode_ci,
  `especificar_nombre1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_domicilio_telefono1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_nombre2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_domicilio_telefono2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_nombre3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_domicilio_telefono3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_nombre4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especificar_domicilio_telefono4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cambios_localizacion` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cambios_localizacion_causas` text COLLATE utf8mb4_unicode_ci,
  `nueva_localizacion_domicilio` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nueva_localizacion_localidad` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nueva_localizacion_telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nueva_localizacion_cp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nueva_localizacion_provincia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puesta_en_marcha_nuevo_ampliacion` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puesta_en_marcha_si_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_1` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_2` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_3` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_4` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_5` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_6` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problema_7` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10_2_describir_razones_consignadas` text COLLATE utf8mb4_unicode_ci,
  `inv_previstas_si_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_previstas_desvios` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_1` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_2` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_3` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_4` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_5` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_6` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_7` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desvio_inv_problema_8` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `11_2_describir_razones_consignadas` text COLLATE utf8mb4_unicode_ci,
  `inv_verificacion_si_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_de_verificacion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_proyectadas_si_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `11_5_inv_proyectadas_razones` text COLLATE utf8mb4_unicode_ci,
  `nuevas_inv_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_aprox_nuevas_inversiones` double DEFAULT NULL,
  `12_1_detalle_nuevas_inversiones` text COLLATE utf8mb4_unicode_ci,
  `nuevas_inv_verificacion_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forma_verificacion_nuevas_inv` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12_3_aumento_produccion` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12_3_calidad_productos` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12_3_disminucion_costos` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `12_3_otros` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_materia_prima_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_materia_prima_porcentaje` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_materia_prima_razones` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_insumos_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_insumos_porcentaje` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_insumos_razones` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_mano_obra_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_mano_obra_porcentaje` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_mano_obra_razones` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_otros_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_otros_porcentaje` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `13_otros_razones` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_antes_del_credito` int(11) DEFAULT NULL,
  `mo_con_el_credito` int(11) DEFAULT NULL,
  `mo_permanente` int(11) DEFAULT NULL,
  `mo_temporaria` int(11) DEFAULT NULL,
  `14_mo_aclaraciones` text COLLATE utf8mb4_unicode_ci,
  `problemas_funcionamiento_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_administrativos_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_provision_mp_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_disponibilidad_mo_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_calificacion_mo_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_proceso_prod_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_comercializacion_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_financieros_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_servicios_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_comunicaciones_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_climaticos_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_1_problemas_otros_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `15_2_descripcion_problmeas` text COLLATE utf8mb4_unicode_ci,
  `16_ingresos_aumentaron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_ingresos_disminuyeron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_ingresos_no_variaron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_ingresos_proporcion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_precio_productos_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_precio_productos_variacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_volumen_vta_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_volumen_vta_variacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_gtos_comercializacion_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_gtos_comercializacion_variacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_nivel_prod_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_nivel_prod_variacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_otros_si_no` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_1_otros_variacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_2_observaciones` text COLLATE utf8mb4_unicode_ci,
  `16_3_periodo_anterior_ingresos_aumentaron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_3_periodo_anterior_ingresos_disminuyeron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_3_periodo_anterior_ingresos_no_variaron` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_3_periodo_anterior_ingresos_proporcion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `16_4_periodo_anterior_ingresos_porque` text COLLATE utf8mb4_unicode_ci,
  `17_perspectiva_futuro` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `17_perspectiva_futuro_porque` text COLLATE utf8mb4_unicode_ci,
  `18_problemas_pago_credito` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `18_problemas_pago_si_actuales_futuros` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `18_problmeas_pago_razones` text COLLATE utf8mb4_unicode_ci,
  `19_problemas_entrevista_anterior` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `19_problemas_entrevista_anterior_como` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `19_1_entrevista_anterior_razones` text COLLATE utf8mb4_unicode_ci,
  `20_asistencia_financiera` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20_asistencia_financiera_en_que` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20_1_asistencia_financiera_ampliacion` text COLLATE utf8mb4_unicode_ci,
  `20_2_anteriormente_capacitacion` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20_2_anteriormente_capac_tipo_cargo` text COLLATE utf8mb4_unicode_ci,
  `20_3_recibir_capacitacion` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `20_3_en_que_temas` text COLLATE utf8mb4_unicode_ci,
  `21_importancia_actividad` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `21_1_actividad_ppal_perspectiva` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `21_2_observaciones` text COLLATE utf8mb4_unicode_ci,
  `22_opinion_responsable` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(10) UNSIGNED NOT NULL,
  `banco_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `localidad_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerente` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `banco_id`, `user_id`, `localidad_id`, `nombre`, `direccion`, `telefono`, `email`, `contacto`, `gerente`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 3, 'BPN SUCURSAL 1', 'Jaime Harris 118', '2920538998', 'maurotello73@gmail.com', 'pedro@pedro.com.ar', 'Pedro', 'bpn-sucursal-1', '2018-11-12 11:47:35', '2018-11-12 11:48:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sujeto_credito`
--

CREATE TABLE `sujeto_credito` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `sucursal_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fecha_envio_banco` date NOT NULL,
  `fecha_respuesta_banco` date DEFAULT NULL,
  `sujeto_credito` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sujeto_credito`
--

INSERT INTO `sujeto_credito` (`id`, `proyecto_id`, `sucursal_id`, `user_id`, `fecha_envio_banco`, `fecha_respuesta_banco`, `sujeto_credito`, `descripcion`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2018-12-03', '2018-12-05', 'SI', 'ggg', '1-1-150', '2018-11-12 12:23:36', '2018-12-20 13:28:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titular`
--

CREATE TABLE `titular` (
  `id` int(10) UNSIGNED NOT NULL,
  `apeynom` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `dni` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuit` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilioLegal` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_civil_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `proyecto_id` int(10) UNSIGNED DEFAULT NULL,
  `localidad_id` int(10) UNSIGNED DEFAULT NULL,
  `apeynom_conyuge` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni_conyuge` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_conyuge` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuit_conyuge` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_nacimiento_conyuge` date DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `titular`
--

INSERT INTO `titular` (`id`, `apeynom`, `fecha_nacimiento`, `dni`, `cuit`, `domicilioLegal`, `telefono`, `mail`, `estado_civil_id`, `user_id`, `proyecto_id`, `localidad_id`, `apeynom_conyuge`, `dni_conyuge`, `telefono_conyuge`, `cuit_conyuge`, `fecha_nacimiento_conyuge`, `descripcion`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TELLO MAURO GABRIEL', '1973-11-07', '22512547', '20230638897', 'Jaime Harris 118', '02920-538998', NULL, 1, 1, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, 'tello-mauro-gabriel', '2018-10-18 12:02:04', '2018-10-18 13:28:34'),
(4, 'Carrasco gua', '2025-07-19', '55412541', '20230638897', 'Jaime Harris 118', '02920-538998', NULL, 3, 3, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'carrasco-gua', '2018-11-12 16:14:13', '2018-11-12 16:14:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `telefono`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Mauro Tello', 'maurotello73@gmail.com', '$2y$10$zZNRSzPhHDlvSQsJ7HLaKergufw02ZEl8BU4VNRguk67IKPTx4a4a', NULL, NULL, NULL, '2018-10-16 14:46:11', '2018-10-16 14:46:11'),
(3, 'Mauro Gabriel', 'mauro-tello@hotmail.com', '$2y$10$Wmx79xIWhPLnMVrHCg8nFOqWVQsh0GO6XVjpyG5DUdWRzRe3nLJZm', 'KFbwXumfPTdATXut0OD6O37p4oEzaInj6QMMOj9g0yuQENOjETheWhZoz74T', NULL, NULL, '2018-10-19 12:25:17', '2018-10-19 12:25:17'),
(4, 'Magdalena Perini', 'mperini@neuquen.gov.ar', '$2y$10$ec4x5eoGbcnEExIfgkKOjOYqIMr0w3tMPq5qn2Bfx2v9YvSTO4mta', 'zLbM6yIWBSlMKUpo2q0EGpFAIJozKYFfruM57vwdWFUjXaHRDDKBaaavmUwk', NULL, NULL, '2018-10-30 12:29:31', '2018-10-30 12:29:31'),
(5, 'Gabriela Lavacara', 'glavacara@neuquen.gov.ar', '$2y$10$orPNyLxZPeYOVW8nffGMYuNkDHkULxewoaHs/tJIutsPif0XJaMgG', 'C9BHigLslWXSpYhJho4nILMuv3UAA36f9iV8vDV3l03yZcwOJI0zFqLnzgNo', NULL, NULL, '2018-10-30 12:30:35', '2018-10-30 12:30:35'),
(6, 'Nadia Bravo', 'bravonadia@neuquen.gov.ar', '$2y$10$WSuvuEAeBHgH6iYF8uUN7e9ZYAOQupIHnAxgV.OmCZfxCaux8cLJC', 'BvFBB7hFisUC9tKFohiTzjLgIEObgUkKNtZpUbqwbkv2DVJFSGVk4ETFGToQ', NULL, NULL, '2018-10-30 12:31:22', '2018-10-30 12:31:22'),
(7, 'Francisco Epul', 'epulfrancisco@neuquen.gov.ar', '$2y$10$VoTqfG51YV5pKUOK.YM.uOmrh1/mz6t2DHNRei550IUkvqUU9uqyO', 'ysxoDmr6W6OSN2hcqkmjI5SsidDoVPVobquFvsDdG5WfjvqIY0y5ebu09wDP', NULL, NULL, '2018-10-30 12:32:05', '2018-10-30 12:32:05'),
(10, 'Carlos Carrasco', 'carrasco@ca.com.ar', '$2y$10$8SW6dkeFvqAyE2qlu8OhxuhgGeHFiczTDvoa5IR/nbDAx04JqL5Ci', 'DLWNcAF1omEoaAiyXkb4lP0mWH1tEbHLEfroTTpWQWRl2Hi7cwQsSytqBZcY', NULL, NULL, '2018-10-31 14:09:50', '2018-10-31 14:09:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ANDINA', 'andina', '2018-10-16 16:04:22', '2018-10-16 16:04:22'),
(2, 'ATLÁNTICA', 'atlantica', '2018-10-16 16:04:40', '2018-10-16 16:04:40'),
(3, 'ALTO VALLE', 'alto-valle', '2018-10-16 16:05:54', '2018-10-16 16:05:54'),
(4, 'VALLE MEDIO', 'valle-medio', '2018-10-16 16:06:01', '2018-10-16 16:06:01'),
(5, 'SUR', 'sur', '2018-10-16 16:06:39', '2018-10-16 16:06:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alertas_slug_unique` (`slug`);

--
-- Indices de la tabla `alerta_proyecto`
--
ALTER TABLE `alerta_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alerta_proyecto_slug_unique` (`slug`),
  ADD KEY `alerta_proyecto_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `alerta_proyecto_alerta_id_foreign` (`alerta_id`);

--
-- Indices de la tabla `anexos_proyectos`
--
ALTER TABLE `anexos_proyectos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anexos_proyectos_nombre_unique` (`nombre_archivo`),
  ADD UNIQUE KEY `anexos_proyectos_slug_unique` (`slug`),
  ADD KEY `anexos_proyectos_user_id_foreign` (`user_id`),
  ADD KEY `anexos_proyectos_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auditoria_slug_unique` (`slug`),
  ADD KEY `auditoria_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bancos_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `bancos_slug_unique` (`slug`);

--
-- Indices de la tabla `checklists`
--
ALTER TABLE `checklists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `checklists_slug_unique` (`slug`),
  ADD KEY `checklists_user_id_foreign` (`user_id`),
  ADD KEY `checklists_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `columnasexcel`
--
ALTER TABLE `columnasexcel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `columnasview`
--
ALTER TABLE `columnasview`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departamentos_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `departamentos_slug_unique` (`slug`);

--
-- Indices de la tabla `desembolsos`
--
ALTER TABLE `desembolsos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `desembolsos_slug_unique` (`slug`),
  ADD KEY `desembolsos_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `destino_credito`
--
ALTER TABLE `destino_credito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `destino_credito_slug_unique` (`slug`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estados_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `estados_slug_unique` (`slug`);

--
-- Indices de la tabla `estados_civiles`
--
ALTER TABLE `estados_civiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estados_civiles_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `estados_civiles_slug_unique` (`slug`);

--
-- Indices de la tabla `estados_internos`
--
ALTER TABLE `estados_internos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estados_internos_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `estados_internos_slug_unique` (`slug`);

--
-- Indices de la tabla `figuras_legales`
--
ALTER TABLE `figuras_legales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `figuras_legales_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `figuras_legales_slug_unique` (`slug`);

--
-- Indices de la tabla `garantias`
--
ALTER TABLE `garantias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `garantias_slug_unique` (`slug`);

--
-- Indices de la tabla `lineas_creditos`
--
ALTER TABLE `lineas_creditos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lineas_creditos_slug_unique` (`slug`),
  ADD KEY `user_id_index` (`user_id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `localidades_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `localidades_slug_unique` (`slug`),
  ADD KEY `localidades_user_id_foreign` (`user_id`),
  ADD KEY `localidades_provincia_id_foreign` (`provincia_id`),
  ADD KEY `localidades_zona_id_foreign` (`zona_id`),
  ADD KEY `dpto_index` (`dpto_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos_proyectos`
--
ALTER TABLE `movimientos_proyectos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movimientos_proyectos_slug_unique` (`slug`),
  ADD KEY `movimientos_proyectos_user_id_foreign` (`user_id`),
  ADD KEY `movimientos_proyectos_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `periodicidades`
--
ALTER TABLE `periodicidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `periodicidades_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `periodicidades_slug_unique` (`slug`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_slug_unique` (`slug`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provincias_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `provincias_slug_unique` (`slug`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proyectos_numerointerno_unique` (`numeroInterno`),
  ADD UNIQUE KEY `proyectos_numerocfi_unique` (`numeroCfi`),
  ADD UNIQUE KEY `proyectos_slug_unique` (`slug`),
  ADD KEY `proyectos_user_id_foreign` (`user_id`),
  ADD KEY `proyectos_sucursal_id_foreign` (`sucursal_id`),
  ADD KEY `proyectos_figuralegal_id_foreign` (`figuraLegal_id`),
  ADD KEY `proyectos_destinocredito_id_foreign` (`destinoCredito_id`),
  ADD KEY `proyectos_garantia_id_foreign` (`garantia_id`),
  ADD KEY `proyectos_lineacredito_id_foreign` (`lineaCredito_id`),
  ADD KEY `proyectos_localidad_id_foreign` (`localidad_id`),
  ADD KEY `proyectos_estado_id_foreign` (`estado_id`),
  ADD KEY `proyectos_periodicidad_id_foreign` (`periodicidad_id`),
  ADD KEY `proyectos_sector_id_foreign` (`sector_id`),
  ADD KEY `proyectos_estadointerno_id_foreign` (`estadoInterno_id`);

--
-- Indices de la tabla `refinanciaciones`
--
ALTER TABLE `refinanciaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refinanciaciones_slug_unique` (`slug`),
  ADD KEY `refinanciaciones_user_id_foreign` (`user_id`),
  ADD KEY `refinanciaciones_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sectores_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `sectores_slug_unique` (`slug`);

--
-- Indices de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seguimientos_slug_unique` (`slug`),
  ADD KEY `seguimientos_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sucursales_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `sucursales_slug_unique` (`slug`),
  ADD KEY `sucursales_user_id_foreign` (`user_id`),
  ADD KEY `sucursales_banco_id_foreign` (`banco_id`),
  ADD KEY `sucursales_localidad_id_foreign` (`localidad_id`);

--
-- Indices de la tabla `sujeto_credito`
--
ALTER TABLE `sujeto_credito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sujeto_credito_slug_unique` (`slug`),
  ADD KEY `sujeto_credito_user_id_foreign` (`user_id`),
  ADD KEY `sujeto_credito_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `sujeto_credito_sucursal_id_foreign` (`sucursal_id`);

--
-- Indices de la tabla `titular`
--
ALTER TABLE `titular`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titular_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `titular_user_id_foreign` (`user_id`),
  ADD KEY `titular_localidad_id_foreign` (`localidad_id`),
  ADD KEY `titular_estado_civil_id_foreign` (`estado_civil_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zonas_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `zonas_slug_unique` (`slug`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alerta_proyecto`
--
ALTER TABLE `alerta_proyecto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `anexos_proyectos`
--
ALTER TABLE `anexos_proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `checklists`
--
ALTER TABLE `checklists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `columnasexcel`
--
ALTER TABLE `columnasexcel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `columnasview`
--
ALTER TABLE `columnasview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `desembolsos`
--
ALTER TABLE `desembolsos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `destino_credito`
--
ALTER TABLE `destino_credito`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estados_civiles`
--
ALTER TABLE `estados_civiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estados_internos`
--
ALTER TABLE `estados_internos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `figuras_legales`
--
ALTER TABLE `figuras_legales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `garantias`
--
ALTER TABLE `garantias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lineas_creditos`
--
ALTER TABLE `lineas_creditos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `movimientos_proyectos`
--
ALTER TABLE `movimientos_proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodicidades`
--
ALTER TABLE `periodicidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `refinanciaciones`
--
ALTER TABLE `refinanciaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sujeto_credito`
--
ALTER TABLE `sujeto_credito`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `titular`
--
ALTER TABLE `titular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alerta_proyecto`
--
ALTER TABLE `alerta_proyecto`
  ADD CONSTRAINT `alerta_proyecto_alerta_id_foreign` FOREIGN KEY (`alerta_id`) REFERENCES `alertas` (`id`),
  ADD CONSTRAINT `alerta_proyecto_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `anexos_proyectos`
--
ALTER TABLE `anexos_proyectos`
  ADD CONSTRAINT `anexos_proyectos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `anexos_proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `checklists`
--
ALTER TABLE `checklists`
  ADD CONSTRAINT `checklists_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `checklists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `desembolsos`
--
ALTER TABLE `desembolsos`
  ADD CONSTRAINT `desembolsos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `localidades_dpto_id_foreign` FOREIGN KEY (`dpto_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `localidades_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`),
  ADD CONSTRAINT `localidades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `localidades_zona_id_foreign` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`);

--
-- Filtros para la tabla `movimientos_proyectos`
--
ALTER TABLE `movimientos_proyectos`
  ADD CONSTRAINT `movimientos_proyectos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `movimientos_proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_destinocredito_id_foreign` FOREIGN KEY (`destinoCredito_id`) REFERENCES `destino_credito` (`id`),
  ADD CONSTRAINT `proyectos_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `proyectos_estadointerno_id_foreign` FOREIGN KEY (`estadoInterno_id`) REFERENCES `estados_internos` (`id`),
  ADD CONSTRAINT `proyectos_figuralegal_id_foreign` FOREIGN KEY (`figuraLegal_id`) REFERENCES `figuras_legales` (`id`),
  ADD CONSTRAINT `proyectos_garantia_id_foreign` FOREIGN KEY (`garantia_id`) REFERENCES `garantias` (`id`),
  ADD CONSTRAINT `proyectos_lineacredito_id_foreign` FOREIGN KEY (`lineaCredito_id`) REFERENCES `lineas_creditos` (`id`),
  ADD CONSTRAINT `proyectos_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidades` (`id`),
  ADD CONSTRAINT `proyectos_periodicidad_id_foreign` FOREIGN KEY (`periodicidad_id`) REFERENCES `periodicidades` (`id`),
  ADD CONSTRAINT `proyectos_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectores` (`id`),
  ADD CONSTRAINT `proyectos_sucursal_id_foreign` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursales` (`id`),
  ADD CONSTRAINT `proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `refinanciaciones`
--
ALTER TABLE `refinanciaciones`
  ADD CONSTRAINT `refinanciaciones_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `refinanciaciones_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `seguimientos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursales_banco_id_foreign` FOREIGN KEY (`banco_id`) REFERENCES `bancos` (`id`),
  ADD CONSTRAINT `sucursales_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidades` (`id`),
  ADD CONSTRAINT `sucursales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sujeto_credito`
--
ALTER TABLE `sujeto_credito`
  ADD CONSTRAINT `sujeto_credito_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `sujeto_credito_sucursal_id_foreign` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursales` (`id`),
  ADD CONSTRAINT `sujeto_credito_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `titular`
--
ALTER TABLE `titular`
  ADD CONSTRAINT `titular_estado_civil_id_foreign` FOREIGN KEY (`estado_civil_id`) REFERENCES `estados_civiles` (`id`),
  ADD CONSTRAINT `titular_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidades` (`id`),
  ADD CONSTRAINT `titular_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `titular_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
