-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 20:04:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activations`
--

CREATE TABLE `activations` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_activations`
--

CREATE TABLE `admin_activations` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `forbidden` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `activated`, `forbidden`, `language`, `deleted_at`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'Administrator', 'Administrator', 'administrator@brackets.sk', '$2y$10$ktEni9DVhcZ4CTmowifmHenX2UGxRqGKqOuy3MUnWx.U9I1OYkKtC', '9fk3mbxdecStnR01EE92DNXAxdlIKAQG2fU4SSUC0YXAxi4rZ0CTTTWUIaJk', 1, 0, 'en', NULL, '2022-06-26 07:04:36', '2022-06-26 07:42:44', '2022-06-26 07:42:44'),
(2, 'Alexander Israel', 'Algodon Jesus', 'a.israel23aj@gmail.com', '$2y$10$FLUsUcrHKK85jV/E1.jIuehaSmUmUlFxNqzJEmuw1Eff8QeUC/evu', 'fnhOKYiyIEI5h03ZcVZMZh0EmUi6uZLQy3peVG4DQVSO4oFkIdLZy3rilDpp', 1, 0, 'en', NULL, '2022-06-26 07:43:36', '2022-06-26 08:15:10', '2022-06-26 08:15:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biometricos`
--

CREATE TABLE `biometricos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ubicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_area` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesión` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puesto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_departamento` bigint(20) UNSIGNED DEFAULT NULL,
  `id_turno` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_extras`
--

CREATE TABLE `horas_extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_registro` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_activations_table', 1),
(4, '2017_08_24_000000_create_admin_activations_table', 1),
(5, '2017_08_24_000000_create_admin_password_resets_table', 1),
(6, '2017_08_24_000000_create_admin_users_table', 1),
(7, '2018_07_18_000000_create_wysiwyg_media_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2020_10_21_000000_add_last_login_at_timestamp_to_admin_users_table', 1),
(11, '2022_06_26_030354_create_media_table', 1),
(12, '2022_06_26_030354_create_permission_tables', 1),
(13, '2022_06_26_030359_fill_default_admin_user_and_permissions', 1),
(14, '2022_06_26_030354_create_translations_table', 2),
(15, '2022_06_26_031532_create_areas_table', 3),
(16, '2022_06_26_031554_create_turnos_table', 3),
(17, '2022_06_26_031622_create_biometricos_table', 3),
(18, '2022_06_26_031653_create_departamentos_table', 3),
(19, '2022_06_26_031717_create_empleados_table', 3),
(20, '2022_06_26_031748_create_permisos_table', 3),
(21, '2022_06_26_031833_create_registros_table', 3),
(22, '2022_06_26_031911_create_retrasos_table', 3),
(23, '2022_06_26_031939_create_multas_table', 3),
(24, '2022_06_26_032014_create_horas_extras_table', 3),
(25, '2022_06_26_033111_fill_permissions_for_area', 4),
(26, '2022_06_26_033219_fill_permissions_for_turno', 5),
(27, '2022_06_26_033304_fill_permissions_for_biometrico', 6),
(28, '2022_06_26_033342_fill_permissions_for_departamento', 7),
(29, '2022_06_26_033552_fill_permissions_for_empleado', 8),
(30, '2022_06_26_033631_fill_permissions_for_permiso', 9),
(31, '2022_06_26_033722_fill_permissions_for_registro', 10),
(32, '2022_06_26_033757_fill_permissions_for_retraso', 11),
(33, '2022_06_26_033829_fill_permissions_for_multa', 12),
(34, '2022_06_26_033904_fill_permissions_for_horas-extra', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 1),
(1, 'Brackets\\AdminAuth\\Models\\AdminUser', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_registro` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `nro_dias` int(11) DEFAULT NULL,
  `motivo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_permiso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoriza` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(2, 'admin.translation.index', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(3, 'admin.translation.edit', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(4, 'admin.translation.rescan', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(5, 'admin.admin-user.index', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(6, 'admin.admin-user.create', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(7, 'admin.admin-user.edit', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(8, 'admin.admin-user.delete', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(9, 'admin.upload', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(10, 'admin.admin-user.impersonal-login', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36'),
(11, 'admin.area', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(12, 'admin.area.index', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(13, 'admin.area.create', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(14, 'admin.area.show', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(15, 'admin.area.edit', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(16, 'admin.area.delete', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(17, 'admin.area.bulk-delete', 'admin', '2022-06-26 07:31:15', '2022-06-26 07:31:15'),
(18, 'admin.turno', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(19, 'admin.turno.index', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(20, 'admin.turno.create', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(21, 'admin.turno.show', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(22, 'admin.turno.edit', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(23, 'admin.turno.delete', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(24, 'admin.turno.bulk-delete', 'admin', '2022-06-26 07:32:21', '2022-06-26 07:32:21'),
(25, 'admin.biometrico', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(26, 'admin.biometrico.index', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(27, 'admin.biometrico.create', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(28, 'admin.biometrico.show', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(29, 'admin.biometrico.edit', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(30, 'admin.biometrico.delete', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(31, 'admin.biometrico.bulk-delete', 'admin', '2022-06-26 07:33:06', '2022-06-26 07:33:06'),
(32, 'admin.departamento', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(33, 'admin.departamento.index', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(34, 'admin.departamento.create', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(35, 'admin.departamento.show', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(36, 'admin.departamento.edit', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(37, 'admin.departamento.delete', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(38, 'admin.departamento.bulk-delete', 'admin', '2022-06-26 07:34:36', '2022-06-26 07:34:36'),
(39, 'admin.empleado', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(40, 'admin.empleado.index', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(41, 'admin.empleado.create', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(42, 'admin.empleado.show', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(43, 'admin.empleado.edit', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(44, 'admin.empleado.delete', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(45, 'admin.empleado.bulk-delete', 'admin', '2022-06-26 07:35:58', '2022-06-26 07:35:58'),
(46, 'admin.permiso', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(47, 'admin.permiso.index', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(48, 'admin.permiso.create', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(49, 'admin.permiso.show', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(50, 'admin.permiso.edit', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(51, 'admin.permiso.delete', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(52, 'admin.permiso.bulk-delete', 'admin', '2022-06-26 07:36:34', '2022-06-26 07:36:34'),
(53, 'admin.registro', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(54, 'admin.registro.index', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(55, 'admin.registro.create', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(56, 'admin.registro.show', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(57, 'admin.registro.edit', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(58, 'admin.registro.delete', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(59, 'admin.registro.bulk-delete', 'admin', '2022-06-26 07:37:31', '2022-06-26 07:37:31'),
(60, 'admin.retraso', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(61, 'admin.retraso.index', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(62, 'admin.retraso.create', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(63, 'admin.retraso.show', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(64, 'admin.retraso.edit', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(65, 'admin.retraso.delete', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(66, 'admin.retraso.bulk-delete', 'admin', '2022-06-26 07:38:00', '2022-06-26 07:38:00'),
(67, 'admin.multa', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(68, 'admin.multa.index', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(69, 'admin.multa.create', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(70, 'admin.multa.show', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(71, 'admin.multa.edit', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(72, 'admin.multa.delete', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(73, 'admin.multa.bulk-delete', 'admin', '2022-06-26 07:38:37', '2022-06-26 07:38:37'),
(74, 'admin.horas-extra', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(75, 'admin.horas-extra.index', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(76, 'admin.horas-extra.create', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(77, 'admin.horas-extra.show', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(78, 'admin.horas-extra.edit', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(79, 'admin.horas-extra.delete', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06'),
(80, 'admin.horas-extra.bulk-delete', 'admin', '2022-06-26 07:39:06', '2022-06-26 07:39:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora_entrada_am` time DEFAULT NULL,
  `hora_salida_am` time DEFAULT NULL,
  `hora_entrada_pm` time DEFAULT NULL,
  `hora_salida_pm` time DEFAULT NULL,
  `codigo_empleado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_biometrico` bigint(20) UNSIGNED DEFAULT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retrasos`
--

CREATE TABLE `retrasos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date DEFAULT NULL,
  `minutos` int(11) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `id_empleado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_registro` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '2022-06-26 07:04:36', '2022-06-26 07:04:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`text`)),
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `namespace`, `group`, `key`, `text`, `metadata`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brackets/admin-ui', 'admin', 'operation.succeeded', '{\"en\":\"Operaci\\u00f3n Exitosa\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:32:16', NULL),
(2, 'brackets/admin-ui', 'admin', 'operation.failed', '{\"en\":\"Falla en la Operaci\\u00f3n\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:32:36', NULL),
(3, 'brackets/admin-ui', 'admin', 'operation.not_allowed', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(4, '*', 'admin', 'admin-user.columns.first_name', '{\"en\":\"Nombres\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:32:50', NULL),
(5, '*', 'admin', 'admin-user.columns.last_name', '{\"en\":\"Apellidos\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:32:56', NULL),
(6, '*', 'admin', 'admin-user.columns.email', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(7, '*', 'admin', 'admin-user.columns.password', '{\"en\":\"Contrase\\u00f1a\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:33:09', NULL),
(8, '*', 'admin', 'admin-user.columns.password_repeat', '{\"en\":\"Confirmar Contrase\\u00f1a\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:33:17', NULL),
(9, '*', 'admin', 'admin-user.columns.activated', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(10, '*', 'admin', 'admin-user.columns.forbidden', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(11, '*', 'admin', 'admin-user.columns.language', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(12, 'brackets/admin-ui', 'admin', 'forms.select_an_option', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(13, '*', 'admin', 'admin-user.columns.roles', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(14, 'brackets/admin-ui', 'admin', 'forms.select_options', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(15, '*', 'admin', 'admin-user.actions.create', '{\"en\":\"Nuevo Usuario\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:33:37', NULL),
(16, 'brackets/admin-ui', 'admin', 'btn.save', '{\"en\":\"Guardar\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:33:44', NULL),
(17, '*', 'admin', 'admin-user.actions.edit', '[]', NULL, '2022-06-26 07:07:27', '2022-06-26 07:07:27', NULL),
(18, '*', 'admin', 'admin-user.actions.index', '{\"en\":\"Usuarios\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:33:52', NULL),
(19, 'brackets/admin-ui', 'admin', 'placeholder.search', '{\"en\":\"Buscar\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:31:55', NULL),
(20, 'brackets/admin-ui', 'admin', 'btn.search', '{\"en\":\"Buscar\"}', NULL, '2022-06-26 07:07:27', '2022-06-26 08:21:23', NULL),
(21, '*', 'admin', 'admin-user.columns.id', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(22, '*', 'admin', 'admin-user.columns.last_login_at', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(23, 'brackets/admin-ui', 'admin', 'btn.edit', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(24, 'brackets/admin-ui', 'admin', 'btn.delete', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(25, 'brackets/admin-ui', 'admin', 'pagination.overview', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(26, 'brackets/admin-ui', 'admin', 'index.no_items', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(27, 'brackets/admin-ui', 'admin', 'index.try_changing_items', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(28, 'brackets/admin-ui', 'admin', 'btn.new', '{\"en\":\"Nuevo\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:21:59', NULL),
(29, 'brackets/admin-ui', 'admin', 'profile_dropdown.account', '{\"en\":\"Cuenta\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:34:29', NULL),
(30, 'brackets/admin-auth', 'admin', 'profile_dropdown.profile', '{\"en\":\"Perfil\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:34:23', NULL),
(31, 'brackets/admin-auth', 'admin', 'profile_dropdown.password', '{\"en\":\"Contrase\\u00f1a\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:34:36', NULL),
(32, 'brackets/admin-auth', 'admin', 'profile_dropdown.logout', '{\"en\":\"Cerrar Sesi\\u00f3n\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:34:58', NULL),
(33, 'brackets/admin-ui', 'admin', 'sidebar.content', '{\"en\":\"Contenido\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:20:59', NULL),
(34, 'brackets/admin-ui', 'admin', 'sidebar.settings', '{\"en\":\"Opciones\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:31:20', NULL),
(35, '*', 'admin', 'admin-user.actions.edit_password', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(36, '*', 'admin', 'admin-user.actions.edit_profile', '{\"en\":\"Editar Perfil\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:35:05', NULL),
(37, 'brackets/admin-auth', 'admin', 'activation_form.title', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(38, 'brackets/admin-auth', 'admin', 'activation_form.note', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(39, 'brackets/admin-auth', 'admin', 'auth_global.email', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(40, 'brackets/admin-auth', 'admin', 'activation_form.button', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(41, 'brackets/admin-auth', 'admin', 'login.title', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(42, 'brackets/admin-auth', 'admin', 'login.sign_in_text', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(43, 'brackets/admin-auth', 'admin', 'auth_global.password', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(44, 'brackets/admin-auth', 'admin', 'login.button', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(45, 'brackets/admin-auth', 'admin', 'login.forgot_password', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(46, 'brackets/admin-auth', 'admin', 'forgot_password.title', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(47, 'brackets/admin-auth', 'admin', 'forgot_password.note', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(48, 'brackets/admin-auth', 'admin', 'forgot_password.button', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(49, 'brackets/admin-auth', 'admin', 'password_reset.title', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(50, 'brackets/admin-auth', 'admin', 'password_reset.note', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(51, 'brackets/admin-auth', 'admin', 'auth_global.password_confirm', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(52, 'brackets/admin-auth', 'admin', 'password_reset.button', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(53, 'brackets/admin-auth', 'activations', 'email.line', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(54, 'brackets/admin-auth', 'activations', 'email.action', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(55, 'brackets/admin-auth', 'activations', 'email.notRequested', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(56, 'brackets/admin-auth', 'admin', 'activations.activated', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(57, 'brackets/admin-auth', 'admin', 'activations.invalid_request', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(58, 'brackets/admin-auth', 'admin', 'activations.disabled', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(59, 'brackets/admin-auth', 'admin', 'activations.sent', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(60, 'brackets/admin-auth', 'admin', 'passwords.sent', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(61, 'brackets/admin-auth', 'admin', 'passwords.reset', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(62, 'brackets/admin-auth', 'admin', 'passwords.invalid_token', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(63, 'brackets/admin-auth', 'admin', 'passwords.invalid_user', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(64, 'brackets/admin-auth', 'admin', 'passwords.invalid_password', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(65, 'brackets/admin-auth', 'resets', 'email.line', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(66, 'brackets/admin-auth', 'resets', 'email.action', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(67, 'brackets/admin-auth', 'resets', 'email.notRequested', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(68, '*', 'auth', 'failed', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(69, '*', 'auth', 'throttle', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL),
(70, '*', '*', 'Manage access', '{\"en\":\"Administrar Acceso\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:22:28', NULL),
(71, '*', '*', 'Translations', '{\"en\":\"Traducciones\"}', NULL, '2022-06-26 07:07:28', '2022-06-26 08:22:56', NULL),
(72, '*', '*', 'Configuration', '[]', NULL, '2022-06-26 07:07:28', '2022-06-26 07:07:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo_turno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_turno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horas_trabajo` int(11) DEFAULT NULL,
  `hora_entrada_am` int(11) DEFAULT NULL,
  `hora_salida_am` int(11) DEFAULT NULL,
  `hora_entrada_pm` int(11) DEFAULT NULL,
  `hora_salida_pm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wysiwyg_media`
--

CREATE TABLE `wysiwyg_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wysiwygable_id` int(10) UNSIGNED DEFAULT NULL,
  `wysiwygable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activations`
--
ALTER TABLE `activations`
  ADD KEY `activations_email_index` (`email`);

--
-- Indices de la tabla `admin_activations`
--
ALTER TABLE `admin_activations`
  ADD KEY `admin_activations_email_index` (`email`);

--
-- Indices de la tabla `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indices de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `biometricos`
--
ALTER TABLE `biometricos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamentos_id_area_foreign` (`id_area`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_id_departamento_foreign` (`id_departamento`),
  ADD KEY `empleados_id_turno_foreign` (`id_turno`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `horas_extras`
--
ALTER TABLE `horas_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horas_extras_id_empleado_foreign` (`id_empleado`),
  ADD KEY `horas_extras_id_registro_foreign` (`id_registro`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `multas_id_empleado_foreign` (`id_empleado`),
  ADD KEY `multas_id_registro_foreign` (`id_registro`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permisos_id_empleado_foreign` (`id_empleado`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registros_id_biometrico_foreign` (`id_biometrico`),
  ADD KEY `registros_id_empleado_foreign` (`id_empleado`);

--
-- Indices de la tabla `retrasos`
--
ALTER TABLE `retrasos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `retrasos_id_empleado_foreign` (`id_empleado`),
  ADD KEY `retrasos_id_registro_foreign` (`id_registro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_namespace_index` (`namespace`),
  ADD KEY `translations_group_index` (`group`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wysiwyg_media_wysiwygable_id_index` (`wysiwygable_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `biometricos`
--
ALTER TABLE `biometricos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horas_extras`
--
ALTER TABLE `horas_extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `multas`
--
ALTER TABLE `multas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retrasos`
--
ALTER TABLE `retrasos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wysiwyg_media`
--
ALTER TABLE `wysiwyg_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_id_departamento_foreign` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_id_turno_foreign` FOREIGN KEY (`id_turno`) REFERENCES `turnos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `horas_extras`
--
ALTER TABLE `horas_extras`
  ADD CONSTRAINT `horas_extras_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `horas_extras_id_registro_foreign` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `multas_id_registro_foreign` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_id_biometrico_foreign` FOREIGN KEY (`id_biometrico`) REFERENCES `biometricos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `registros_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `retrasos`
--
ALTER TABLE `retrasos`
  ADD CONSTRAINT `retrasos_id_empleado_foreign` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `retrasos_id_registro_foreign` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
