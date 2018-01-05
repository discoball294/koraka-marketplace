/*
 Navicat Premium Data Transfer

 Source Server         : Connection
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : localhost:3306
 Source Schema         : koraka

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : 65001

 Date: 05/01/2018 18:15:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alamat
-- ----------------------------
DROP TABLE IF EXISTS `alamat`;
CREATE TABLE `alamat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of alamat
-- ----------------------------
BEGIN;
INSERT INTO `alamat` VALUES (1, 3, 'Jl Burung Perumahan Bandulan', 'Jawa Timur', 'Kota Malang', '08123456789', '65122', '2018-01-01 16:43:12', '2018-01-04 09:43:43');
INSERT INTO `alamat` VALUES (2, 4, 'Jl Belakang Sengkaling', 'Jawa Timur', 'Kota Malang', '08123456789', '65100', '2018-01-01 16:54:13', '2018-01-01 16:54:13');
INSERT INTO `alamat` VALUES (3, 5, 'Jl Karang Widoro', 'Jawa Timur', 'Kota Malang', '08123456789', '65111', '2018-01-02 04:18:45', '2018-01-02 04:18:45');
INSERT INTO `alamat` VALUES (4, 6, 'Villa Puncak Tidar N00', 'Jawa Timur', 'Kota Malang', '08123456789', '65123', '2018-01-02 11:48:03', '2018-01-02 11:48:03');
INSERT INTO `alamat` VALUES (5, 7, 'Pondok Blimbing Indah', 'Jawa Timur', 'Kota Malang', '08123456789', '65123', '2018-01-02 12:27:16', '2018-01-02 12:27:16');
INSERT INTO `alamat` VALUES (6, 2, 'Jl Siguragura 69', 'Jawa Timur', 'Kota Malang', '08123456789', '65133', '2018-01-03 10:24:09', '2018-01-03 10:24:09');
COMMIT;

-- ----------------------------
-- Table structure for bukti_transfer
-- ----------------------------
DROP TABLE IF EXISTS `bukti_transfer`;
CREATE TABLE `bukti_transfer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of bukti_transfer
-- ----------------------------
BEGIN;
INSERT INTO `bukti_transfer` VALUES (1, 1, 'bukti/MNj6Wa65c2Fqxwc3QKgrJOVWKm429JNkVQq9Aced.jpeg', '2018-01-04 06:03:16', '2018-01-04 06:04:37');
INSERT INTO `bukti_transfer` VALUES (2, 2, 'bukti/7EtjnTOpaHhxK8blo77J6k5S7BRRkVZdvLVRHF2R.jpeg', '2018-01-04 06:15:46', '2018-01-04 06:15:46');
INSERT INTO `bukti_transfer` VALUES (3, 4, 'bukti/jlzP55wK5bXs9b4rQvJfeFBs0NI4kmTaHSOnH2Qj.jpeg', '2018-01-05 03:18:51', '2018-01-05 03:18:51');
COMMIT;

-- ----------------------------
-- Table structure for detail_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of detail_transaksi
-- ----------------------------
BEGIN;
INSERT INTO `detail_transaksi` VALUES (1, 1, 6, 1200000, 1, 1200000, '2018-01-04 17:22:41', '2018-01-04 17:22:41');
INSERT INTO `detail_transaksi` VALUES (2, 2, 18, 349900, 1, 349900, '2018-01-04 17:22:41', '2018-01-04 17:22:41');
INSERT INTO `detail_transaksi` VALUES (3, 3, 17, 340000, 1, 340000, '2018-01-04 17:22:41', '2018-01-04 17:22:41');
INSERT INTO `detail_transaksi` VALUES (4, 4, 9, 4000000, 1, 4000000, '2018-01-04 17:24:27', '2018-01-04 17:24:27');
INSERT INTO `detail_transaksi` VALUES (5, 5, 13, 600000, 1, 600000, '2018-01-04 17:24:27', '2018-01-04 17:24:27');
INSERT INTO `detail_transaksi` VALUES (6, 6, 20, 899900, 1, 899900, '2018-01-04 17:24:27', '2018-01-04 17:24:27');
COMMIT;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kategori
-- ----------------------------
BEGIN;
INSERT INTO `kategori` VALUES (1, 'Pria', 'Fashion Pria', 'gambar', NULL, NULL);
INSERT INTO `kategori` VALUES (2, 'Wanita', 'Fashion Wanita', 'gambar', NULL, NULL);
INSERT INTO `kategori` VALUES (3, 'Lain-lain', 'Lain-lain', 'gambar', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (15, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (16, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_12_24_152944_create_alamats_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_12_24_153047_create_stores_table', 1);
INSERT INTO `migrations` VALUES (19, '2017_12_24_153454_create_kategoris_table', 1);
INSERT INTO `migrations` VALUES (20, '2017_12_24_153613_create_transaksis_table', 1);
INSERT INTO `migrations` VALUES (21, '2017_12_24_153630_create_detail_transaksis_table', 1);
INSERT INTO `migrations` VALUES (22, '2017_12_24_154806_create_page_views_table', 1);
INSERT INTO `migrations` VALUES (23, '2017_12_24_160820_product', 1);
INSERT INTO `migrations` VALUES (24, '2017_12_27_001321_create_permission_tables', 2);
INSERT INTO `migrations` VALUES (25, '2016_05_17_221000_create_promocodes_table', 3);
INSERT INTO `migrations` VALUES (26, '2017_12_29_145454_create_shoppingcart_table', 3);
INSERT INTO `migrations` VALUES (27, '2018_01_03_112423_create_reviews_table', 4);
INSERT INTO `migrations` VALUES (28, '2018_01_04_052937_create_bukti_transfers_table', 5);
COMMIT;

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
BEGIN;
INSERT INTO `model_has_roles` VALUES (1, 1, 'App\\User');
INSERT INTO `model_has_roles` VALUES (1, 2, 'App\\User');
INSERT INTO `model_has_roles` VALUES (1, 3, 'App\\User');
INSERT INTO `model_has_roles` VALUES (1, 4, 'App\\User');
INSERT INTO `model_has_roles` VALUES (1, 8, 'App\\User');
INSERT INTO `model_has_roles` VALUES (2, 9, 'App\\User');
COMMIT;

-- ----------------------------
-- Table structure for page-views
-- ----------------------------
DROP TABLE IF EXISTS `page-views`;
CREATE TABLE `page-views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitable_id` bigint(20) unsigned NOT NULL,
  `visitable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=457 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of page-views
-- ----------------------------
BEGIN;
INSERT INTO `page-views` VALUES (1, 2, 'App\\Product', '127.0.0.1', '2017-12-27 16:54:58', '2017-12-27 16:54:58');
INSERT INTO `page-views` VALUES (2, 3, 'App\\Product', '127.0.0.1', '2017-12-27 16:55:05', '2017-12-27 16:55:05');
INSERT INTO `page-views` VALUES (3, 1, 'App\\Product', '127.0.0.1', '2017-12-27 16:56:05', '2017-12-27 16:56:05');
INSERT INTO `page-views` VALUES (4, 2, 'App\\Product', '127.0.0.1', '2017-12-27 16:57:05', '2017-12-27 16:57:05');
INSERT INTO `page-views` VALUES (5, 3, 'App\\Product', '127.0.0.1', '2017-12-27 16:57:11', '2017-12-27 16:57:11');
INSERT INTO `page-views` VALUES (6, 2, 'App\\Product', '127.0.0.1', '2017-12-27 16:57:35', '2017-12-27 16:57:35');
INSERT INTO `page-views` VALUES (7, 3, 'App\\Product', '127.0.0.1', '2017-12-27 16:57:53', '2017-12-27 16:57:53');
INSERT INTO `page-views` VALUES (8, 2, 'App\\Product', '127.0.0.1', '2017-12-27 16:59:28', '2017-12-27 16:59:28');
INSERT INTO `page-views` VALUES (9, 6, 'App\\Product', '127.0.0.1', '2017-12-27 17:00:02', '2017-12-27 17:00:02');
INSERT INTO `page-views` VALUES (10, 2, 'App\\Product', '127.0.0.1', '2017-12-27 17:03:59', '2017-12-27 17:03:59');
INSERT INTO `page-views` VALUES (11, 3, 'App\\Product', '127.0.0.1', '2017-12-27 17:04:30', '2017-12-27 17:04:30');
INSERT INTO `page-views` VALUES (12, 4, 'App\\Product', '127.0.0.1', '2017-12-27 17:04:46', '2017-12-27 17:04:46');
INSERT INTO `page-views` VALUES (13, 5, 'App\\Product', '127.0.0.1', '2017-12-27 17:05:01', '2017-12-27 17:05:01');
INSERT INTO `page-views` VALUES (14, 7, 'App\\Product', '127.0.0.1', '2017-12-27 17:06:07', '2017-12-27 17:06:07');
INSERT INTO `page-views` VALUES (15, 8, 'App\\Product', '127.0.0.1', '2017-12-27 17:06:18', '2017-12-27 17:06:18');
INSERT INTO `page-views` VALUES (16, 9, 'App\\Product', '127.0.0.1', '2017-12-27 17:06:34', '2017-12-27 17:06:34');
INSERT INTO `page-views` VALUES (17, 10, 'App\\Product', '127.0.0.1', '2017-12-27 17:06:49', '2017-12-27 17:06:49');
INSERT INTO `page-views` VALUES (18, 1, 'App\\Product', '127.0.0.1', '2017-12-28 01:07:05', '2017-12-28 01:07:05');
INSERT INTO `page-views` VALUES (19, 7, 'App\\Product', '127.0.0.1', '2017-12-28 01:22:56', '2017-12-28 01:22:56');
INSERT INTO `page-views` VALUES (20, 7, 'App\\Product', '127.0.0.1', '2017-12-28 01:34:49', '2017-12-28 01:34:49');
INSERT INTO `page-views` VALUES (21, 7, 'App\\Product', '127.0.0.1', '2017-12-28 01:35:27', '2017-12-28 01:35:27');
INSERT INTO `page-views` VALUES (22, 7, 'App\\Product', '127.0.0.1', '2017-12-28 01:35:52', '2017-12-28 01:35:52');
INSERT INTO `page-views` VALUES (23, 4, 'App\\Product', '127.0.0.1', '2017-12-28 04:01:32', '2017-12-28 04:01:32');
INSERT INTO `page-views` VALUES (24, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:10:36', '2017-12-28 04:10:36');
INSERT INTO `page-views` VALUES (25, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:10:44', '2017-12-28 04:10:44');
INSERT INTO `page-views` VALUES (26, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:10:49', '2017-12-28 04:10:49');
INSERT INTO `page-views` VALUES (27, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:16:02', '2017-12-28 04:16:02');
INSERT INTO `page-views` VALUES (28, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:16:10', '2017-12-28 04:16:10');
INSERT INTO `page-views` VALUES (29, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:18:07', '2017-12-28 04:18:07');
INSERT INTO `page-views` VALUES (30, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:18:17', '2017-12-28 04:18:17');
INSERT INTO `page-views` VALUES (31, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:18:48', '2017-12-28 04:18:48');
INSERT INTO `page-views` VALUES (32, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:19:33', '2017-12-28 04:19:33');
INSERT INTO `page-views` VALUES (33, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:19:41', '2017-12-28 04:19:41');
INSERT INTO `page-views` VALUES (34, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:19:47', '2017-12-28 04:19:47');
INSERT INTO `page-views` VALUES (35, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:20:15', '2017-12-28 04:20:15');
INSERT INTO `page-views` VALUES (36, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:20:28', '2017-12-28 04:20:28');
INSERT INTO `page-views` VALUES (37, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:21:13', '2017-12-28 04:21:13');
INSERT INTO `page-views` VALUES (38, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:21:30', '2017-12-28 04:21:30');
INSERT INTO `page-views` VALUES (39, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:21:51', '2017-12-28 04:21:51');
INSERT INTO `page-views` VALUES (40, 1, 'App\\Product', '127.0.0.1', '2017-12-28 04:22:48', '2017-12-28 04:22:48');
INSERT INTO `page-views` VALUES (41, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:23:38', '2017-12-28 04:23:38');
INSERT INTO `page-views` VALUES (42, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:23:45', '2017-12-28 04:23:45');
INSERT INTO `page-views` VALUES (43, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:23:50', '2017-12-28 04:23:50');
INSERT INTO `page-views` VALUES (44, 2, 'App\\Product', '127.0.0.1', '2017-12-28 04:24:29', '2017-12-28 04:24:29');
INSERT INTO `page-views` VALUES (45, 7, 'App\\Product', '127.0.0.1', '2017-12-28 04:25:04', '2017-12-28 04:25:04');
INSERT INTO `page-views` VALUES (46, 3, 'App\\Product', '127.0.0.1', '2017-12-28 04:32:57', '2017-12-28 04:32:57');
INSERT INTO `page-views` VALUES (47, 4, 'App\\Product', '127.0.0.1', '2017-12-28 05:03:12', '2017-12-28 05:03:12');
INSERT INTO `page-views` VALUES (48, 3, 'App\\Product', '127.0.0.1', '2017-12-28 05:19:11', '2017-12-28 05:19:11');
INSERT INTO `page-views` VALUES (49, 1, 'App\\Product', '127.0.0.1', '2017-12-28 06:32:11', '2017-12-28 06:32:11');
INSERT INTO `page-views` VALUES (50, 1, 'App\\Product', '127.0.0.1', '2017-12-28 06:33:53', '2017-12-28 06:33:53');
INSERT INTO `page-views` VALUES (51, 4, 'App\\Product', '127.0.0.1', '2017-12-28 06:34:42', '2017-12-28 06:34:42');
INSERT INTO `page-views` VALUES (52, 8, 'App\\Product', '127.0.0.1', '2017-12-28 06:35:05', '2017-12-28 06:35:05');
INSERT INTO `page-views` VALUES (53, 10, 'App\\Product', '127.0.0.1', '2017-12-28 06:35:25', '2017-12-28 06:35:25');
INSERT INTO `page-views` VALUES (54, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:07:40', '2017-12-28 07:07:40');
INSERT INTO `page-views` VALUES (55, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:12:28', '2017-12-28 07:12:28');
INSERT INTO `page-views` VALUES (56, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:13:12', '2017-12-28 07:13:12');
INSERT INTO `page-views` VALUES (57, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:13:22', '2017-12-28 07:13:22');
INSERT INTO `page-views` VALUES (58, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:13:43', '2017-12-28 07:13:43');
INSERT INTO `page-views` VALUES (59, 7, 'App\\Product', '127.0.0.1', '2017-12-28 07:15:42', '2017-12-28 07:15:42');
INSERT INTO `page-views` VALUES (60, 4, 'App\\Product', '127.0.0.1', '2017-12-28 07:35:13', '2017-12-28 07:35:13');
INSERT INTO `page-views` VALUES (61, 10, 'App\\Product', '127.0.0.1', '2017-12-28 07:36:13', '2017-12-28 07:36:13');
INSERT INTO `page-views` VALUES (62, 8, 'App\\Product', '127.0.0.1', '2017-12-28 07:37:13', '2017-12-28 07:37:13');
INSERT INTO `page-views` VALUES (63, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:26:33', '2017-12-28 15:26:33');
INSERT INTO `page-views` VALUES (64, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:27:02', '2017-12-28 15:27:02');
INSERT INTO `page-views` VALUES (65, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:27:56', '2017-12-28 15:27:56');
INSERT INTO `page-views` VALUES (66, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:28:04', '2017-12-28 15:28:04');
INSERT INTO `page-views` VALUES (67, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:28:13', '2017-12-28 15:28:13');
INSERT INTO `page-views` VALUES (68, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:28:25', '2017-12-28 15:28:25');
INSERT INTO `page-views` VALUES (69, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:28:32', '2017-12-28 15:28:32');
INSERT INTO `page-views` VALUES (70, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:28:45', '2017-12-28 15:28:45');
INSERT INTO `page-views` VALUES (71, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:32:19', '2017-12-28 15:32:19');
INSERT INTO `page-views` VALUES (72, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:43:22', '2017-12-28 15:43:22');
INSERT INTO `page-views` VALUES (73, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:45:24', '2017-12-28 15:45:24');
INSERT INTO `page-views` VALUES (74, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:48:02', '2017-12-28 15:48:02');
INSERT INTO `page-views` VALUES (75, 1, 'App\\Product', '127.0.0.1', '2017-12-28 15:50:23', '2017-12-28 15:50:23');
INSERT INTO `page-views` VALUES (76, 3, 'App\\Product', '127.0.0.1', '2017-12-28 15:50:30', '2017-12-28 15:50:30');
INSERT INTO `page-views` VALUES (77, 3, 'App\\Product', '127.0.0.1', '2017-12-28 15:52:20', '2017-12-28 15:52:20');
INSERT INTO `page-views` VALUES (78, 3, 'App\\Product', '127.0.0.1', '2017-12-28 16:02:58', '2017-12-28 16:02:58');
INSERT INTO `page-views` VALUES (79, 3, 'App\\Product', '127.0.0.1', '2017-12-28 16:05:17', '2017-12-28 16:05:17');
INSERT INTO `page-views` VALUES (80, 3, 'App\\Product', '127.0.0.1', '2017-12-28 16:11:08', '2017-12-28 16:11:08');
INSERT INTO `page-views` VALUES (81, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:11:59', '2017-12-28 16:11:59');
INSERT INTO `page-views` VALUES (82, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:12:15', '2017-12-28 16:12:15');
INSERT INTO `page-views` VALUES (83, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:13:47', '2017-12-28 16:13:47');
INSERT INTO `page-views` VALUES (84, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:14:00', '2017-12-28 16:14:00');
INSERT INTO `page-views` VALUES (85, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:14:48', '2017-12-28 16:14:48');
INSERT INTO `page-views` VALUES (86, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:20:33', '2017-12-28 16:20:33');
INSERT INTO `page-views` VALUES (87, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:29:35', '2017-12-28 16:29:35');
INSERT INTO `page-views` VALUES (88, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:29:49', '2017-12-28 16:29:49');
INSERT INTO `page-views` VALUES (89, 3, 'App\\Product', '127.0.0.1', '2017-12-28 16:39:34', '2017-12-28 16:39:34');
INSERT INTO `page-views` VALUES (90, 3, 'App\\Product', '127.0.0.1', '2017-12-28 16:51:30', '2017-12-28 16:51:30');
INSERT INTO `page-views` VALUES (91, 1, 'App\\Product', '127.0.0.1', '2017-12-28 16:51:31', '2017-12-28 16:51:31');
INSERT INTO `page-views` VALUES (92, 5, 'App\\Product', '127.0.0.1', '2017-12-28 17:02:19', '2017-12-28 17:02:19');
INSERT INTO `page-views` VALUES (93, 5, 'App\\Product', '127.0.0.1', '2017-12-28 18:02:31', '2017-12-28 18:02:31');
INSERT INTO `page-views` VALUES (94, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:26:24', '2017-12-29 01:26:24');
INSERT INTO `page-views` VALUES (95, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:26:36', '2017-12-29 01:26:36');
INSERT INTO `page-views` VALUES (96, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:28:50', '2017-12-29 01:28:50');
INSERT INTO `page-views` VALUES (97, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:29:41', '2017-12-29 01:29:41');
INSERT INTO `page-views` VALUES (98, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:30:22', '2017-12-29 01:30:22');
INSERT INTO `page-views` VALUES (99, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:31:55', '2017-12-29 01:31:55');
INSERT INTO `page-views` VALUES (100, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:39:19', '2017-12-29 01:39:19');
INSERT INTO `page-views` VALUES (101, 1, 'App\\Product', '127.0.0.1', '2017-12-29 01:42:26', '2017-12-29 01:42:26');
INSERT INTO `page-views` VALUES (102, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:03:57', '2017-12-29 06:03:57');
INSERT INTO `page-views` VALUES (103, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:04:01', '2017-12-29 06:04:01');
INSERT INTO `page-views` VALUES (104, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:04:47', '2017-12-29 06:04:47');
INSERT INTO `page-views` VALUES (105, 3, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:14', '2017-12-29 06:06:14');
INSERT INTO `page-views` VALUES (106, 3, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:20', '2017-12-29 06:06:20');
INSERT INTO `page-views` VALUES (107, 3, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:36', '2017-12-29 06:06:36');
INSERT INTO `page-views` VALUES (108, 7, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:41', '2017-12-29 06:06:41');
INSERT INTO `page-views` VALUES (109, 7, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:46', '2017-12-29 06:06:46');
INSERT INTO `page-views` VALUES (110, 7, 'App\\Product', '127.0.0.1', '2017-12-29 06:06:51', '2017-12-29 06:06:51');
INSERT INTO `page-views` VALUES (111, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:10:20', '2017-12-29 06:10:20');
INSERT INTO `page-views` VALUES (112, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:10:25', '2017-12-29 06:10:25');
INSERT INTO `page-views` VALUES (113, 6, 'App\\Product', '127.0.0.1', '2017-12-29 06:13:31', '2017-12-29 06:13:31');
INSERT INTO `page-views` VALUES (114, 6, 'App\\Product', '127.0.0.1', '2017-12-29 06:13:55', '2017-12-29 06:13:55');
INSERT INTO `page-views` VALUES (115, 6, 'App\\Product', '127.0.0.1', '2017-12-29 06:15:38', '2017-12-29 06:15:38');
INSERT INTO `page-views` VALUES (116, 6, 'App\\Product', '127.0.0.1', '2017-12-29 06:15:52', '2017-12-29 06:15:52');
INSERT INTO `page-views` VALUES (117, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:20:01', '2017-12-29 06:20:01');
INSERT INTO `page-views` VALUES (118, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:21:00', '2017-12-29 06:21:00');
INSERT INTO `page-views` VALUES (119, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:21:17', '2017-12-29 06:21:17');
INSERT INTO `page-views` VALUES (120, 2, 'App\\Product', '127.0.0.1', '2017-12-29 06:22:04', '2017-12-29 06:22:04');
INSERT INTO `page-views` VALUES (121, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:25:45', '2017-12-29 06:25:45');
INSERT INTO `page-views` VALUES (122, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:25:49', '2017-12-29 06:25:49');
INSERT INTO `page-views` VALUES (123, 3, 'App\\Product', '127.0.0.1', '2017-12-29 06:26:08', '2017-12-29 06:26:08');
INSERT INTO `page-views` VALUES (124, 3, 'App\\Product', '127.0.0.1', '2017-12-29 06:26:15', '2017-12-29 06:26:15');
INSERT INTO `page-views` VALUES (125, 1, 'App\\Product', '127.0.0.1', '2017-12-29 06:40:10', '2017-12-29 06:40:10');
INSERT INTO `page-views` VALUES (126, 3, 'App\\Product', '127.0.0.1', '2017-12-29 07:07:17', '2017-12-29 07:07:17');
INSERT INTO `page-views` VALUES (127, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:07:17', '2017-12-29 07:07:17');
INSERT INTO `page-views` VALUES (128, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:23:24', '2017-12-29 07:23:24');
INSERT INTO `page-views` VALUES (129, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:23:52', '2017-12-29 07:23:52');
INSERT INTO `page-views` VALUES (130, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:24:14', '2017-12-29 07:24:14');
INSERT INTO `page-views` VALUES (131, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:24:19', '2017-12-29 07:24:19');
INSERT INTO `page-views` VALUES (132, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:24:26', '2017-12-29 07:24:26');
INSERT INTO `page-views` VALUES (133, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:24:52', '2017-12-29 07:24:52');
INSERT INTO `page-views` VALUES (134, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:24:59', '2017-12-29 07:24:59');
INSERT INTO `page-views` VALUES (135, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:28:06', '2017-12-29 07:28:06');
INSERT INTO `page-views` VALUES (136, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:33:32', '2017-12-29 07:33:32');
INSERT INTO `page-views` VALUES (137, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:33:43', '2017-12-29 07:33:43');
INSERT INTO `page-views` VALUES (138, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:34:15', '2017-12-29 07:34:15');
INSERT INTO `page-views` VALUES (139, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:34:26', '2017-12-29 07:34:26');
INSERT INTO `page-views` VALUES (140, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:34:48', '2017-12-29 07:34:48');
INSERT INTO `page-views` VALUES (141, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:44:04', '2017-12-29 07:44:04');
INSERT INTO `page-views` VALUES (142, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:44:22', '2017-12-29 07:44:22');
INSERT INTO `page-views` VALUES (143, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:45:01', '2017-12-29 07:45:01');
INSERT INTO `page-views` VALUES (144, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:45:15', '2017-12-29 07:45:15');
INSERT INTO `page-views` VALUES (145, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:45:37', '2017-12-29 07:45:37');
INSERT INTO `page-views` VALUES (146, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:45:48', '2017-12-29 07:45:48');
INSERT INTO `page-views` VALUES (147, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:46:07', '2017-12-29 07:46:07');
INSERT INTO `page-views` VALUES (148, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:47:18', '2017-12-29 07:47:18');
INSERT INTO `page-views` VALUES (149, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:47:29', '2017-12-29 07:47:29');
INSERT INTO `page-views` VALUES (150, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:48:34', '2017-12-29 07:48:34');
INSERT INTO `page-views` VALUES (151, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:48:39', '2017-12-29 07:48:39');
INSERT INTO `page-views` VALUES (152, 12, 'App\\Product', '127.0.0.1', '2017-12-29 07:50:53', '2017-12-29 07:50:53');
INSERT INTO `page-views` VALUES (153, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:57:14', '2017-12-29 07:57:14');
INSERT INTO `page-views` VALUES (154, 1, 'App\\Product', '127.0.0.1', '2017-12-29 07:57:17', '2017-12-29 07:57:17');
INSERT INTO `page-views` VALUES (155, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:59:08', '2017-12-29 07:59:08');
INSERT INTO `page-views` VALUES (156, 11, 'App\\Product', '127.0.0.1', '2017-12-29 07:59:11', '2017-12-29 07:59:11');
INSERT INTO `page-views` VALUES (157, 3, 'App\\Product', '127.0.0.1', '2017-12-29 07:59:29', '2017-12-29 07:59:29');
INSERT INTO `page-views` VALUES (158, 3, 'App\\Product', '127.0.0.1', '2017-12-29 07:59:33', '2017-12-29 07:59:33');
INSERT INTO `page-views` VALUES (159, 1, 'App\\Product', '127.0.0.1', '2017-12-29 08:20:24', '2017-12-29 08:20:24');
INSERT INTO `page-views` VALUES (160, 1, 'App\\Product', '127.0.0.1', '2017-12-29 08:20:28', '2017-12-29 08:20:28');
INSERT INTO `page-views` VALUES (161, 3, 'App\\Product', '127.0.0.1', '2017-12-29 08:20:35', '2017-12-29 08:20:35');
INSERT INTO `page-views` VALUES (162, 3, 'App\\Product', '127.0.0.1', '2017-12-29 08:20:38', '2017-12-29 08:20:38');
INSERT INTO `page-views` VALUES (163, 11, 'App\\Product', '127.0.0.1', '2017-12-29 08:20:59', '2017-12-29 08:20:59');
INSERT INTO `page-views` VALUES (164, 11, 'App\\Product', '127.0.0.1', '2017-12-29 08:21:02', '2017-12-29 08:21:02');
INSERT INTO `page-views` VALUES (165, 13, 'App\\Product', '127.0.0.1', '2017-12-29 08:21:08', '2017-12-29 08:21:08');
INSERT INTO `page-views` VALUES (166, 13, 'App\\Product', '127.0.0.1', '2017-12-29 08:21:11', '2017-12-29 08:21:11');
INSERT INTO `page-views` VALUES (167, 11, 'App\\Product', '127.0.0.1', '2017-12-29 08:44:20', '2017-12-29 08:44:20');
INSERT INTO `page-views` VALUES (168, 12, 'App\\Product', '127.0.0.1', '2017-12-29 08:51:20', '2017-12-29 08:51:20');
INSERT INTO `page-views` VALUES (169, 2, 'App\\Product', '127.0.0.1', '2017-12-29 08:52:09', '2017-12-29 08:52:09');
INSERT INTO `page-views` VALUES (170, 3, 'App\\Product', '127.0.0.1', '2017-12-29 09:00:20', '2017-12-29 09:00:20');
INSERT INTO `page-views` VALUES (171, 14, 'App\\Product', '127.0.0.1', '2017-12-29 09:06:17', '2017-12-29 09:06:17');
INSERT INTO `page-views` VALUES (172, 11, 'App\\Product', '127.0.0.1', '2017-12-29 09:06:58', '2017-12-29 09:06:58');
INSERT INTO `page-views` VALUES (173, 13, 'App\\Product', '127.0.0.1', '2017-12-29 09:21:21', '2017-12-29 09:21:21');
INSERT INTO `page-views` VALUES (174, 14, 'App\\Product', '127.0.0.1', '2017-12-29 10:07:21', '2017-12-29 10:07:21');
INSERT INTO `page-views` VALUES (175, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:10:36', '2017-12-29 13:10:36');
INSERT INTO `page-views` VALUES (176, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:16:40', '2017-12-29 13:16:40');
INSERT INTO `page-views` VALUES (177, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:17:06', '2017-12-29 13:17:06');
INSERT INTO `page-views` VALUES (178, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:17:48', '2017-12-29 13:17:48');
INSERT INTO `page-views` VALUES (179, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:18:07', '2017-12-29 13:18:07');
INSERT INTO `page-views` VALUES (180, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:20:07', '2017-12-29 13:20:07');
INSERT INTO `page-views` VALUES (181, 11, 'App\\Product', '127.0.0.1', '2017-12-29 13:21:06', '2017-12-29 13:21:06');
INSERT INTO `page-views` VALUES (182, 8, 'App\\Product', '127.0.0.1', '2017-12-29 14:09:56', '2017-12-29 14:09:56');
INSERT INTO `page-views` VALUES (183, 8, 'App\\Product', '127.0.0.1', '2017-12-29 14:10:14', '2017-12-29 14:10:14');
INSERT INTO `page-views` VALUES (184, 8, 'App\\Product', '127.0.0.1', '2017-12-29 14:10:32', '2017-12-29 14:10:32');
INSERT INTO `page-views` VALUES (185, 2, 'App\\Product', '127.0.0.1', '2017-12-29 14:10:48', '2017-12-29 14:10:48');
INSERT INTO `page-views` VALUES (186, 2, 'App\\Product', '127.0.0.1', '2017-12-29 14:10:52', '2017-12-29 14:10:52');
INSERT INTO `page-views` VALUES (187, 11, 'App\\Product', '127.0.0.1', '2017-12-29 14:10:58', '2017-12-29 14:10:58');
INSERT INTO `page-views` VALUES (188, 11, 'App\\Product', '127.0.0.1', '2017-12-29 14:11:03', '2017-12-29 14:11:03');
INSERT INTO `page-views` VALUES (189, 13, 'App\\Product', '127.0.0.1', '2017-12-29 14:13:26', '2017-12-29 14:13:26');
INSERT INTO `page-views` VALUES (190, 13, 'App\\Product', '127.0.0.1', '2017-12-29 14:13:29', '2017-12-29 14:13:29');
INSERT INTO `page-views` VALUES (191, 14, 'App\\Product', '127.0.0.1', '2017-12-29 14:13:35', '2017-12-29 14:13:35');
INSERT INTO `page-views` VALUES (192, 14, 'App\\Product', '127.0.0.1', '2017-12-29 14:13:39', '2017-12-29 14:13:39');
INSERT INTO `page-views` VALUES (193, 8, 'App\\Product', '127.0.0.1', '2017-12-29 15:10:14', '2017-12-29 15:10:14');
INSERT INTO `page-views` VALUES (194, 14, 'App\\Product', '127.0.0.1', '2017-12-29 15:14:13', '2017-12-29 15:14:13');
INSERT INTO `page-views` VALUES (195, 11, 'App\\Product', '127.0.0.1', '2017-12-30 02:41:59', '2017-12-30 02:41:59');
INSERT INTO `page-views` VALUES (196, 2, 'App\\Product', '127.0.0.1', '2017-12-30 04:27:48', '2017-12-30 04:27:48');
INSERT INTO `page-views` VALUES (197, 15, 'App\\Product', '127.0.0.1', '2017-12-30 04:28:48', '2017-12-30 04:28:48');
INSERT INTO `page-views` VALUES (198, 15, 'App\\Product', '127.0.0.1', '2018-01-01 07:20:17', '2018-01-01 07:20:17');
INSERT INTO `page-views` VALUES (199, 15, 'App\\Product', '127.0.0.1', '2018-01-01 07:20:23', '2018-01-01 07:20:23');
INSERT INTO `page-views` VALUES (200, 11, 'App\\Product', '127.0.0.1', '2018-01-01 07:20:31', '2018-01-01 07:20:31');
INSERT INTO `page-views` VALUES (201, 11, 'App\\Product', '127.0.0.1', '2018-01-01 07:20:34', '2018-01-01 07:20:34');
INSERT INTO `page-views` VALUES (202, 1, 'App\\Product', '127.0.0.1', '2018-01-01 09:42:30', '2018-01-01 09:42:30');
INSERT INTO `page-views` VALUES (203, 1, 'App\\Product', '127.0.0.1', '2018-01-01 09:42:33', '2018-01-01 09:42:33');
INSERT INTO `page-views` VALUES (204, 11, 'App\\Product', '127.0.0.1', '2018-01-01 09:42:56', '2018-01-01 09:42:56');
INSERT INTO `page-views` VALUES (205, 11, 'App\\Product', '127.0.0.1', '2018-01-01 09:42:58', '2018-01-01 09:42:58');
INSERT INTO `page-views` VALUES (206, 2, 'App\\Product', '127.0.0.1', '2018-01-01 09:45:15', '2018-01-01 09:45:15');
INSERT INTO `page-views` VALUES (207, 2, 'App\\Product', '127.0.0.1', '2018-01-01 09:45:19', '2018-01-01 09:45:19');
INSERT INTO `page-views` VALUES (208, 1, 'App\\Product', '127.0.0.1', '2018-01-01 09:48:50', '2018-01-01 09:48:50');
INSERT INTO `page-views` VALUES (209, 1, 'App\\Product', '127.0.0.1', '2018-01-01 09:48:54', '2018-01-01 09:48:54');
INSERT INTO `page-views` VALUES (210, 2, 'App\\Product', '127.0.0.1', '2018-01-01 09:49:06', '2018-01-01 09:49:06');
INSERT INTO `page-views` VALUES (211, 2, 'App\\Product', '127.0.0.1', '2018-01-01 09:49:08', '2018-01-01 09:49:08');
INSERT INTO `page-views` VALUES (212, 11, 'App\\Product', '127.0.0.1', '2018-01-01 09:49:17', '2018-01-01 09:49:17');
INSERT INTO `page-views` VALUES (213, 11, 'App\\Product', '127.0.0.1', '2018-01-01 09:49:20', '2018-01-01 09:49:20');
INSERT INTO `page-views` VALUES (214, 3, 'App\\Product', '127.0.0.1', '2018-01-01 09:58:02', '2018-01-01 09:58:02');
INSERT INTO `page-views` VALUES (215, 3, 'App\\Product', '127.0.0.1', '2018-01-01 09:58:05', '2018-01-01 09:58:05');
INSERT INTO `page-views` VALUES (216, 11, 'App\\Product', '127.0.0.1', '2018-01-01 10:21:05', '2018-01-01 10:21:05');
INSERT INTO `page-views` VALUES (217, 1, 'App\\Product', '127.0.0.1', '2018-01-01 10:45:52', '2018-01-01 10:45:52');
INSERT INTO `page-views` VALUES (218, 3, 'App\\Product', '127.0.0.1', '2018-01-01 10:45:59', '2018-01-01 10:45:59');
INSERT INTO `page-views` VALUES (219, 1, 'App\\Product', '127.0.0.1', '2018-01-01 10:46:08', '2018-01-01 10:46:08');
INSERT INTO `page-views` VALUES (220, 4, 'App\\Product', '127.0.0.1', '2018-01-01 10:46:16', '2018-01-01 10:46:16');
INSERT INTO `page-views` VALUES (221, 3, 'App\\Product', '127.0.0.1', '2018-01-01 10:58:58', '2018-01-01 10:58:58');
INSERT INTO `page-views` VALUES (222, 11, 'App\\Product', '127.0.0.1', '2018-01-01 10:58:58', '2018-01-01 10:58:58');
INSERT INTO `page-views` VALUES (223, 4, 'App\\Product', '127.0.0.1', '2018-01-01 11:46:57', '2018-01-01 11:46:57');
INSERT INTO `page-views` VALUES (224, 1, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:35', '2018-01-01 14:16:35');
INSERT INTO `page-views` VALUES (225, 1, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:43', '2018-01-01 14:16:43');
INSERT INTO `page-views` VALUES (226, 3, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:45', '2018-01-01 14:16:45');
INSERT INTO `page-views` VALUES (227, 3, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:48', '2018-01-01 14:16:48');
INSERT INTO `page-views` VALUES (228, 11, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:50', '2018-01-01 14:16:50');
INSERT INTO `page-views` VALUES (229, 11, 'App\\Product', '127.0.0.1', '2018-01-01 14:16:54', '2018-01-01 14:16:54');
INSERT INTO `page-views` VALUES (230, 13, 'App\\Product', '127.0.0.1', '2018-01-01 14:17:10', '2018-01-01 14:17:10');
INSERT INTO `page-views` VALUES (231, 13, 'App\\Product', '127.0.0.1', '2018-01-01 14:17:13', '2018-01-01 14:17:13');
INSERT INTO `page-views` VALUES (232, 1, 'App\\Product', '127.0.0.1', '2018-01-01 14:57:06', '2018-01-01 14:57:06');
INSERT INTO `page-views` VALUES (233, 1, 'App\\Product', '127.0.0.1', '2018-01-01 14:57:10', '2018-01-01 14:57:10');
INSERT INTO `page-views` VALUES (234, 3, 'App\\Product', '127.0.0.1', '2018-01-01 14:57:11', '2018-01-01 14:57:11');
INSERT INTO `page-views` VALUES (235, 3, 'App\\Product', '127.0.0.1', '2018-01-01 14:57:14', '2018-01-01 14:57:14');
INSERT INTO `page-views` VALUES (236, 11, 'App\\Product', '127.0.0.1', '2018-01-01 15:09:13', '2018-01-01 15:09:13');
INSERT INTO `page-views` VALUES (237, 11, 'App\\Product', '127.0.0.1', '2018-01-01 15:09:17', '2018-01-01 15:09:17');
INSERT INTO `page-views` VALUES (238, 14, 'App\\Product', '127.0.0.1', '2018-01-01 15:09:29', '2018-01-01 15:09:29');
INSERT INTO `page-views` VALUES (239, 14, 'App\\Product', '127.0.0.1', '2018-01-01 15:09:31', '2018-01-01 15:09:31');
INSERT INTO `page-views` VALUES (240, 1, 'App\\Product', '127.0.0.1', '2018-01-01 17:00:07', '2018-01-01 17:00:07');
INSERT INTO `page-views` VALUES (241, 1, 'App\\Product', '127.0.0.1', '2018-01-01 17:00:10', '2018-01-01 17:00:10');
INSERT INTO `page-views` VALUES (242, 1, 'App\\Product', '127.0.0.1', '2018-01-02 03:51:30', '2018-01-02 03:51:30');
INSERT INTO `page-views` VALUES (243, 1, 'App\\Product', '127.0.0.1', '2018-01-02 03:51:33', '2018-01-02 03:51:33');
INSERT INTO `page-views` VALUES (244, 4, 'App\\Product', '127.0.0.1', '2018-01-02 03:51:44', '2018-01-02 03:51:44');
INSERT INTO `page-views` VALUES (245, 4, 'App\\Product', '127.0.0.1', '2018-01-02 03:51:47', '2018-01-02 03:51:47');
INSERT INTO `page-views` VALUES (246, 1, 'App\\Product', '127.0.0.1', '2018-01-02 03:59:44', '2018-01-02 03:59:44');
INSERT INTO `page-views` VALUES (247, 1, 'App\\Product', '127.0.0.1', '2018-01-02 03:59:49', '2018-01-02 03:59:49');
INSERT INTO `page-views` VALUES (248, 4, 'App\\Product', '127.0.0.1', '2018-01-02 04:52:23', '2018-01-02 04:52:23');
INSERT INTO `page-views` VALUES (249, 1, 'App\\Product', '127.0.0.1', '2018-01-02 06:52:00', '2018-01-02 06:52:00');
INSERT INTO `page-views` VALUES (250, 1, 'App\\Product', '127.0.0.1', '2018-01-02 06:52:07', '2018-01-02 06:52:07');
INSERT INTO `page-views` VALUES (251, 1, 'App\\Product', '127.0.0.1', '2018-01-02 06:52:20', '2018-01-02 06:52:20');
INSERT INTO `page-views` VALUES (252, 3, 'App\\Product', '127.0.0.1', '2018-01-02 06:55:42', '2018-01-02 06:55:42');
INSERT INTO `page-views` VALUES (253, 3, 'App\\Product', '127.0.0.1', '2018-01-02 06:55:45', '2018-01-02 06:55:45');
INSERT INTO `page-views` VALUES (254, 11, 'App\\Product', '127.0.0.1', '2018-01-02 06:55:54', '2018-01-02 06:55:54');
INSERT INTO `page-views` VALUES (255, 11, 'App\\Product', '127.0.0.1', '2018-01-02 06:55:56', '2018-01-02 06:55:56');
INSERT INTO `page-views` VALUES (256, 3, 'App\\Product', '127.0.0.1', '2018-01-02 10:44:27', '2018-01-02 10:44:27');
INSERT INTO `page-views` VALUES (257, 3, 'App\\Product', '127.0.0.1', '2018-01-02 10:44:30', '2018-01-02 10:44:30');
INSERT INTO `page-views` VALUES (258, 11, 'App\\Product', '127.0.0.1', '2018-01-02 10:44:31', '2018-01-02 10:44:31');
INSERT INTO `page-views` VALUES (259, 11, 'App\\Product', '127.0.0.1', '2018-01-02 10:44:34', '2018-01-02 10:44:34');
INSERT INTO `page-views` VALUES (260, 1, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:10', '2018-01-02 11:15:10');
INSERT INTO `page-views` VALUES (261, 1, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:12', '2018-01-02 11:15:12');
INSERT INTO `page-views` VALUES (262, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:14', '2018-01-02 11:15:14');
INSERT INTO `page-views` VALUES (263, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:16', '2018-01-02 11:15:16');
INSERT INTO `page-views` VALUES (264, 3, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:17', '2018-01-02 11:15:17');
INSERT INTO `page-views` VALUES (265, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:38', '2018-01-02 11:15:38');
INSERT INTO `page-views` VALUES (266, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:40', '2018-01-02 11:15:40');
INSERT INTO `page-views` VALUES (267, 13, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:51', '2018-01-02 11:15:51');
INSERT INTO `page-views` VALUES (268, 13, 'App\\Product', '127.0.0.1', '2018-01-02 11:15:54', '2018-01-02 11:15:54');
INSERT INTO `page-views` VALUES (269, 1, 'App\\Product', '127.0.0.1', '2018-01-02 11:36:17', '2018-01-02 11:36:17');
INSERT INTO `page-views` VALUES (270, 1, 'App\\Product', '127.0.0.1', '2018-01-02 11:36:20', '2018-01-02 11:36:20');
INSERT INTO `page-views` VALUES (271, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:36:22', '2018-01-02 11:36:22');
INSERT INTO `page-views` VALUES (272, 11, 'App\\Product', '127.0.0.1', '2018-01-02 11:36:24', '2018-01-02 11:36:24');
INSERT INTO `page-views` VALUES (273, 3, 'App\\Product', '127.0.0.1', '2018-01-02 12:25:53', '2018-01-02 12:25:53');
INSERT INTO `page-views` VALUES (274, 3, 'App\\Product', '127.0.0.1', '2018-01-02 12:25:56', '2018-01-02 12:25:56');
INSERT INTO `page-views` VALUES (275, 6, 'App\\Product', '127.0.0.1', '2018-01-02 12:26:10', '2018-01-02 12:26:10');
INSERT INTO `page-views` VALUES (276, 6, 'App\\Product', '127.0.0.1', '2018-01-02 12:26:12', '2018-01-02 12:26:12');
INSERT INTO `page-views` VALUES (277, 11, 'App\\Product', '127.0.0.1', '2018-01-02 14:49:25', '2018-01-02 14:49:25');
INSERT INTO `page-views` VALUES (278, 17, 'App\\Product', '127.0.0.1', '2018-01-02 17:15:52', '2018-01-02 17:15:52');
INSERT INTO `page-views` VALUES (279, 17, 'App\\Product', '127.0.0.1', '2018-01-02 17:18:07', '2018-01-02 17:18:07');
INSERT INTO `page-views` VALUES (280, 17, 'App\\Product', '127.0.0.1', '2018-01-02 17:18:27', '2018-01-02 17:18:27');
INSERT INTO `page-views` VALUES (281, 17, 'App\\Product', '127.0.0.1', '2018-01-02 18:16:23', '2018-01-02 18:16:23');
INSERT INTO `page-views` VALUES (282, 1, 'App\\Product', '127.0.0.1', '2018-01-03 01:51:48', '2018-01-03 01:51:48');
INSERT INTO `page-views` VALUES (283, 1, 'App\\Product', '127.0.0.1', '2018-01-03 01:51:52', '2018-01-03 01:51:52');
INSERT INTO `page-views` VALUES (284, 11, 'App\\Product', '127.0.0.1', '2018-01-03 01:51:55', '2018-01-03 01:51:55');
INSERT INTO `page-views` VALUES (285, 11, 'App\\Product', '127.0.0.1', '2018-01-03 01:51:58', '2018-01-03 01:51:58');
INSERT INTO `page-views` VALUES (286, 17, 'App\\Product', '127.0.0.1', '2018-01-03 01:52:15', '2018-01-03 01:52:15');
INSERT INTO `page-views` VALUES (287, 17, 'App\\Product', '127.0.0.1', '2018-01-03 01:52:19', '2018-01-03 01:52:19');
INSERT INTO `page-views` VALUES (288, 17, 'App\\Product', '127.0.0.1', '2018-01-03 02:53:02', '2018-01-03 02:53:02');
INSERT INTO `page-views` VALUES (289, 20, 'App\\Product', '127.0.0.1', '2018-01-03 05:32:28', '2018-01-03 05:32:28');
INSERT INTO `page-views` VALUES (290, 1, 'App\\Product', '127.0.0.1', '2018-01-03 07:30:54', '2018-01-03 07:30:54');
INSERT INTO `page-views` VALUES (291, 20, 'App\\Product', '127.0.0.1', '2018-01-03 07:34:21', '2018-01-03 07:34:21');
INSERT INTO `page-views` VALUES (292, 1, 'App\\Product', '127.0.0.1', '2018-01-03 09:13:49', '2018-01-03 09:13:49');
INSERT INTO `page-views` VALUES (293, 1, 'App\\Product', '127.0.0.1', '2018-01-03 09:13:51', '2018-01-03 09:13:51');
INSERT INTO `page-views` VALUES (294, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:21:32', '2018-01-03 10:21:32');
INSERT INTO `page-views` VALUES (295, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:21:35', '2018-01-03 10:21:35');
INSERT INTO `page-views` VALUES (296, 2, 'App\\Product', '127.0.0.1', '2018-01-03 10:21:37', '2018-01-03 10:21:37');
INSERT INTO `page-views` VALUES (297, 2, 'App\\Product', '127.0.0.1', '2018-01-03 10:21:40', '2018-01-03 10:21:40');
INSERT INTO `page-views` VALUES (298, 13, 'App\\Product', '127.0.0.1', '2018-01-03 10:21:53', '2018-01-03 10:21:53');
INSERT INTO `page-views` VALUES (299, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:22:03', '2018-01-03 10:22:03');
INSERT INTO `page-views` VALUES (300, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:22:08', '2018-01-03 10:22:08');
INSERT INTO `page-views` VALUES (301, 18, 'App\\Product', '127.0.0.1', '2018-01-03 10:22:14', '2018-01-03 10:22:14');
INSERT INTO `page-views` VALUES (302, 18, 'App\\Product', '127.0.0.1', '2018-01-03 10:22:17', '2018-01-03 10:22:17');
INSERT INTO `page-views` VALUES (303, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:14', '2018-01-03 10:30:14');
INSERT INTO `page-views` VALUES (304, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:16', '2018-01-03 10:30:16');
INSERT INTO `page-views` VALUES (305, 1, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:19', '2018-01-03 10:30:19');
INSERT INTO `page-views` VALUES (306, 1, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:21', '2018-01-03 10:30:21');
INSERT INTO `page-views` VALUES (307, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:43', '2018-01-03 10:30:43');
INSERT INTO `page-views` VALUES (308, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:45', '2018-01-03 10:30:45');
INSERT INTO `page-views` VALUES (309, 19, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:54', '2018-01-03 10:30:54');
INSERT INTO `page-views` VALUES (310, 19, 'App\\Product', '127.0.0.1', '2018-01-03 10:30:56', '2018-01-03 10:30:56');
INSERT INTO `page-views` VALUES (311, 1, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:23', '2018-01-03 10:35:23');
INSERT INTO `page-views` VALUES (312, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:27', '2018-01-03 10:35:27');
INSERT INTO `page-views` VALUES (313, 3, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:29', '2018-01-03 10:35:29');
INSERT INTO `page-views` VALUES (314, 6, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:42', '2018-01-03 10:35:42');
INSERT INTO `page-views` VALUES (315, 6, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:44', '2018-01-03 10:35:44');
INSERT INTO `page-views` VALUES (316, 19, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:51', '2018-01-03 10:35:51');
INSERT INTO `page-views` VALUES (317, 19, 'App\\Product', '127.0.0.1', '2018-01-03 10:35:53', '2018-01-03 10:35:53');
INSERT INTO `page-views` VALUES (318, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:36:03', '2018-01-03 10:36:03');
INSERT INTO `page-views` VALUES (319, 17, 'App\\Product', '127.0.0.1', '2018-01-03 10:36:05', '2018-01-03 10:36:05');
INSERT INTO `page-views` VALUES (320, 1, 'App\\Product', '127.0.0.1', '2018-01-03 10:37:38', '2018-01-03 10:37:38');
INSERT INTO `page-views` VALUES (321, 1, 'App\\Product', '127.0.0.1', '2018-01-03 10:37:40', '2018-01-03 10:37:40');
INSERT INTO `page-views` VALUES (322, 17, 'App\\Product', '127.0.0.1', '2018-01-03 11:22:28', '2018-01-03 11:22:28');
INSERT INTO `page-views` VALUES (323, 1, 'App\\Product', '127.0.0.1', '2018-01-03 11:23:12', '2018-01-03 11:23:12');
INSERT INTO `page-views` VALUES (324, 18, 'App\\Product', '127.0.0.1', '2018-01-03 11:23:28', '2018-01-03 11:23:28');
INSERT INTO `page-views` VALUES (325, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:06:00', '2018-01-04 02:06:00');
INSERT INTO `page-views` VALUES (326, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:06:46', '2018-01-04 02:06:46');
INSERT INTO `page-views` VALUES (327, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:07:24', '2018-01-04 02:07:24');
INSERT INTO `page-views` VALUES (328, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:08:06', '2018-01-04 02:08:06');
INSERT INTO `page-views` VALUES (329, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:25:26', '2018-01-04 02:25:26');
INSERT INTO `page-views` VALUES (330, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:26:20', '2018-01-04 02:26:20');
INSERT INTO `page-views` VALUES (331, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:26:32', '2018-01-04 02:26:32');
INSERT INTO `page-views` VALUES (332, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:27:39', '2018-01-04 02:27:39');
INSERT INTO `page-views` VALUES (333, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:30:13', '2018-01-04 02:30:13');
INSERT INTO `page-views` VALUES (334, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:30:15', '2018-01-04 02:30:15');
INSERT INTO `page-views` VALUES (335, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:31:31', '2018-01-04 02:31:31');
INSERT INTO `page-views` VALUES (336, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:38:05', '2018-01-04 02:38:05');
INSERT INTO `page-views` VALUES (337, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:38:54', '2018-01-04 02:38:54');
INSERT INTO `page-views` VALUES (338, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:39:00', '2018-01-04 02:39:00');
INSERT INTO `page-views` VALUES (339, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:39:35', '2018-01-04 02:39:35');
INSERT INTO `page-views` VALUES (340, 2, 'App\\Product', '127.0.0.1', '2018-01-04 02:39:53', '2018-01-04 02:39:53');
INSERT INTO `page-views` VALUES (341, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:39:58', '2018-01-04 02:39:58');
INSERT INTO `page-views` VALUES (342, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:40:15', '2018-01-04 02:40:15');
INSERT INTO `page-views` VALUES (343, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:40:22', '2018-01-04 02:40:22');
INSERT INTO `page-views` VALUES (344, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:40:49', '2018-01-04 02:40:49');
INSERT INTO `page-views` VALUES (345, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:41:30', '2018-01-04 02:41:30');
INSERT INTO `page-views` VALUES (346, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:41:37', '2018-01-04 02:41:37');
INSERT INTO `page-views` VALUES (347, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:42:37', '2018-01-04 02:42:37');
INSERT INTO `page-views` VALUES (348, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:42:46', '2018-01-04 02:42:46');
INSERT INTO `page-views` VALUES (349, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:43:28', '2018-01-04 02:43:28');
INSERT INTO `page-views` VALUES (350, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:43:36', '2018-01-04 02:43:36');
INSERT INTO `page-views` VALUES (351, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:44:16', '2018-01-04 02:44:16');
INSERT INTO `page-views` VALUES (352, 2, 'App\\Product', '127.0.0.1', '2018-01-04 02:44:38', '2018-01-04 02:44:38');
INSERT INTO `page-views` VALUES (353, 1, 'App\\Product', '127.0.0.1', '2018-01-04 02:44:43', '2018-01-04 02:44:43');
INSERT INTO `page-views` VALUES (354, 6, 'App\\Product', '127.0.0.1', '2018-01-04 02:48:45', '2018-01-04 02:48:45');
INSERT INTO `page-views` VALUES (355, 6, 'App\\Product', '127.0.0.1', '2018-01-04 03:07:46', '2018-01-04 03:07:46');
INSERT INTO `page-views` VALUES (356, 1, 'App\\Product', '127.0.0.1', '2018-01-04 03:07:53', '2018-01-04 03:07:53');
INSERT INTO `page-views` VALUES (357, 1, 'App\\Product', '127.0.0.1', '2018-01-04 03:09:32', '2018-01-04 03:09:32');
INSERT INTO `page-views` VALUES (358, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:09:39', '2018-01-04 03:09:39');
INSERT INTO `page-views` VALUES (359, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:50:33', '2018-01-04 03:50:33');
INSERT INTO `page-views` VALUES (360, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:50:45', '2018-01-04 03:50:45');
INSERT INTO `page-views` VALUES (361, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:50:51', '2018-01-04 03:50:51');
INSERT INTO `page-views` VALUES (362, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:50:58', '2018-01-04 03:50:58');
INSERT INTO `page-views` VALUES (363, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:50:58', '2018-01-04 03:50:58');
INSERT INTO `page-views` VALUES (364, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:51:40', '2018-01-04 03:51:40');
INSERT INTO `page-views` VALUES (365, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:51:57', '2018-01-04 03:51:57');
INSERT INTO `page-views` VALUES (366, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:52:07', '2018-01-04 03:52:07');
INSERT INTO `page-views` VALUES (367, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:52:24', '2018-01-04 03:52:24');
INSERT INTO `page-views` VALUES (368, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:53:06', '2018-01-04 03:53:06');
INSERT INTO `page-views` VALUES (369, 11, 'App\\Product', '127.0.0.1', '2018-01-04 03:53:40', '2018-01-04 03:53:40');
INSERT INTO `page-views` VALUES (370, 1, 'App\\Product', '127.0.0.1', '2018-01-04 03:53:51', '2018-01-04 03:53:51');
INSERT INTO `page-views` VALUES (371, 11, 'App\\Product', '127.0.0.1', '2018-01-04 04:22:32', '2018-01-04 04:22:32');
INSERT INTO `page-views` VALUES (372, 20, 'App\\Product', '127.0.0.1', '2018-01-04 05:09:16', '2018-01-04 05:09:16');
INSERT INTO `page-views` VALUES (373, 11, 'App\\Product', '127.0.0.1', '2018-01-04 05:40:50', '2018-01-04 05:40:50');
INSERT INTO `page-views` VALUES (374, 20, 'App\\Product', '127.0.0.1', '2018-01-04 06:10:21', '2018-01-04 06:10:21');
INSERT INTO `page-views` VALUES (375, 17, 'App\\Product', '127.0.0.1', '2018-01-04 06:17:17', '2018-01-04 06:17:17');
INSERT INTO `page-views` VALUES (376, 17, 'App\\Product', '127.0.0.1', '2018-01-04 06:18:22', '2018-01-04 06:18:22');
INSERT INTO `page-views` VALUES (377, 17, 'App\\Product', '127.0.0.1', '2018-01-04 06:18:59', '2018-01-04 06:18:59');
INSERT INTO `page-views` VALUES (378, 17, 'App\\Product', '127.0.0.1', '2018-01-04 06:19:13', '2018-01-04 06:19:13');
INSERT INTO `page-views` VALUES (379, 17, 'App\\Product', '127.0.0.1', '2018-01-04 06:19:47', '2018-01-04 06:19:47');
INSERT INTO `page-views` VALUES (380, 2, 'App\\Product', '127.0.0.1', '2018-01-04 06:20:02', '2018-01-04 06:20:02');
INSERT INTO `page-views` VALUES (381, 3, 'App\\Product', '127.0.0.1', '2018-01-04 06:20:54', '2018-01-04 06:20:54');
INSERT INTO `page-views` VALUES (382, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:21:19', '2018-01-04 06:21:19');
INSERT INTO `page-views` VALUES (383, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:25:51', '2018-01-04 06:25:51');
INSERT INTO `page-views` VALUES (384, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:27:09', '2018-01-04 06:27:09');
INSERT INTO `page-views` VALUES (385, 1, 'App\\Product', '127.0.0.1', '2018-01-04 06:27:29', '2018-01-04 06:27:29');
INSERT INTO `page-views` VALUES (386, 3, 'App\\Product', '127.0.0.1', '2018-01-04 06:27:52', '2018-01-04 06:27:52');
INSERT INTO `page-views` VALUES (387, 6, 'App\\Product', '127.0.0.1', '2018-01-04 06:28:12', '2018-01-04 06:28:12');
INSERT INTO `page-views` VALUES (388, 5, 'App\\Product', '127.0.0.1', '2018-01-04 06:28:22', '2018-01-04 06:28:22');
INSERT INTO `page-views` VALUES (389, 3, 'App\\Product', '127.0.0.1', '2018-01-04 06:28:51', '2018-01-04 06:28:51');
INSERT INTO `page-views` VALUES (390, 3, 'App\\Product', '127.0.0.1', '2018-01-04 06:28:57', '2018-01-04 06:28:57');
INSERT INTO `page-views` VALUES (391, 2, 'App\\Product', '127.0.0.1', '2018-01-04 06:29:02', '2018-01-04 06:29:02');
INSERT INTO `page-views` VALUES (392, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:29:49', '2018-01-04 06:29:49');
INSERT INTO `page-views` VALUES (393, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:31:32', '2018-01-04 06:31:32');
INSERT INTO `page-views` VALUES (394, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:31:46', '2018-01-04 06:31:46');
INSERT INTO `page-views` VALUES (395, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:43:37', '2018-01-04 06:43:37');
INSERT INTO `page-views` VALUES (396, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:44:39', '2018-01-04 06:44:39');
INSERT INTO `page-views` VALUES (397, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:44:55', '2018-01-04 06:44:55');
INSERT INTO `page-views` VALUES (398, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:45:19', '2018-01-04 06:45:19');
INSERT INTO `page-views` VALUES (399, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:45:32', '2018-01-04 06:45:32');
INSERT INTO `page-views` VALUES (400, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:45:39', '2018-01-04 06:45:39');
INSERT INTO `page-views` VALUES (401, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:45:47', '2018-01-04 06:45:47');
INSERT INTO `page-views` VALUES (402, 11, 'App\\Product', '127.0.0.1', '2018-01-04 06:45:57', '2018-01-04 06:45:57');
INSERT INTO `page-views` VALUES (403, 2, 'App\\Product', '127.0.0.1', '2018-01-04 07:36:01', '2018-01-04 07:36:01');
INSERT INTO `page-views` VALUES (404, 11, 'App\\Product', '127.0.0.1', '2018-01-04 07:36:07', '2018-01-04 07:36:07');
INSERT INTO `page-views` VALUES (405, 1, 'App\\Product', '127.0.0.1', '2018-01-04 07:36:50', '2018-01-04 07:36:50');
INSERT INTO `page-views` VALUES (406, 17, 'App\\Product', '127.0.0.1', '2018-01-04 07:41:53', '2018-01-04 07:41:53');
INSERT INTO `page-views` VALUES (407, 5, 'App\\Product', '127.0.0.1', '2018-01-04 07:42:53', '2018-01-04 07:42:53');
INSERT INTO `page-views` VALUES (408, 11, 'App\\Product', '127.0.0.1', '2018-01-04 08:00:54', '2018-01-04 08:00:54');
INSERT INTO `page-views` VALUES (409, 17, 'App\\Product', '127.0.0.1', '2018-01-04 08:19:20', '2018-01-04 08:19:20');
INSERT INTO `page-views` VALUES (410, 17, 'App\\Product', '127.0.0.1', '2018-01-04 08:21:12', '2018-01-04 08:21:12');
INSERT INTO `page-views` VALUES (411, 17, 'App\\Product', '127.0.0.1', '2018-01-04 08:26:34', '2018-01-04 08:26:34');
INSERT INTO `page-views` VALUES (412, 17, 'App\\Product', '127.0.0.1', '2018-01-04 08:32:53', '2018-01-04 08:32:53');
INSERT INTO `page-views` VALUES (413, 17, 'App\\Product', '127.0.0.1', '2018-01-04 09:19:54', '2018-01-04 09:19:54');
INSERT INTO `page-views` VALUES (414, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:40:12', '2018-01-04 09:40:12');
INSERT INTO `page-views` VALUES (415, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:40:16', '2018-01-04 09:40:16');
INSERT INTO `page-views` VALUES (416, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:41:36', '2018-01-04 09:41:36');
INSERT INTO `page-views` VALUES (417, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:41:44', '2018-01-04 09:41:44');
INSERT INTO `page-views` VALUES (418, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:41:54', '2018-01-04 09:41:54');
INSERT INTO `page-views` VALUES (419, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:42:25', '2018-01-04 09:42:25');
INSERT INTO `page-views` VALUES (420, 3, 'App\\Product', '127.0.0.1', '2018-01-04 09:42:29', '2018-01-04 09:42:29');
INSERT INTO `page-views` VALUES (421, 21, 'App\\Product', '127.0.0.1', '2018-01-04 09:42:47', '2018-01-04 09:42:47');
INSERT INTO `page-views` VALUES (422, 21, 'App\\Product', '127.0.0.1', '2018-01-04 09:42:52', '2018-01-04 09:42:52');
INSERT INTO `page-views` VALUES (423, 3, 'App\\Product', '127.0.0.1', '2018-01-04 10:40:55', '2018-01-04 10:40:55');
INSERT INTO `page-views` VALUES (424, 21, 'App\\Product', '127.0.0.1', '2018-01-04 10:42:55', '2018-01-04 10:42:55');
INSERT INTO `page-views` VALUES (425, 15, 'App\\Product', '127.0.0.1', '2018-01-04 14:44:18', '2018-01-04 14:44:18');
INSERT INTO `page-views` VALUES (426, 21, 'App\\Product', '127.0.0.1', '2018-01-04 14:44:53', '2018-01-04 14:44:53');
INSERT INTO `page-views` VALUES (427, 15, 'App\\Product', '127.0.0.1', '2018-01-04 15:42:17', '2018-01-04 15:42:17');
INSERT INTO `page-views` VALUES (428, 21, 'App\\Product', '127.0.0.1', '2018-01-04 15:55:24', '2018-01-04 15:55:24');
INSERT INTO `page-views` VALUES (429, 1, 'App\\Product', '127.0.0.1', '2018-01-04 17:09:30', '2018-01-04 17:09:30');
INSERT INTO `page-views` VALUES (430, 1, 'App\\Product', '127.0.0.1', '2018-01-04 17:09:33', '2018-01-04 17:09:33');
INSERT INTO `page-views` VALUES (431, 3, 'App\\Product', '127.0.0.1', '2018-01-04 17:09:39', '2018-01-04 17:09:39');
INSERT INTO `page-views` VALUES (432, 18, 'App\\Product', '127.0.0.1', '2018-01-04 17:09:50', '2018-01-04 17:09:50');
INSERT INTO `page-views` VALUES (433, 18, 'App\\Product', '127.0.0.1', '2018-01-04 17:09:53', '2018-01-04 17:09:53');
INSERT INTO `page-views` VALUES (434, 21, 'App\\Product', '127.0.0.1', '2018-01-04 17:12:11', '2018-01-04 17:12:11');
INSERT INTO `page-views` VALUES (435, 21, 'App\\Product', '127.0.0.1', '2018-01-04 17:12:14', '2018-01-04 17:12:14');
INSERT INTO `page-views` VALUES (436, 6, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:00', '2018-01-04 17:22:00');
INSERT INTO `page-views` VALUES (437, 6, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:04', '2018-01-04 17:22:04');
INSERT INTO `page-views` VALUES (438, 18, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:19', '2018-01-04 17:22:19');
INSERT INTO `page-views` VALUES (439, 18, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:21', '2018-01-04 17:22:21');
INSERT INTO `page-views` VALUES (440, 17, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:27', '2018-01-04 17:22:27');
INSERT INTO `page-views` VALUES (441, 17, 'App\\Product', '127.0.0.1', '2018-01-04 17:22:30', '2018-01-04 17:22:30');
INSERT INTO `page-views` VALUES (442, 9, 'App\\Product', '127.0.0.1', '2018-01-04 17:23:45', '2018-01-04 17:23:45');
INSERT INTO `page-views` VALUES (443, 9, 'App\\Product', '127.0.0.1', '2018-01-04 17:23:47', '2018-01-04 17:23:47');
INSERT INTO `page-views` VALUES (444, 13, 'App\\Product', '127.0.0.1', '2018-01-04 17:23:56', '2018-01-04 17:23:56');
INSERT INTO `page-views` VALUES (445, 13, 'App\\Product', '127.0.0.1', '2018-01-04 17:23:58', '2018-01-04 17:23:58');
INSERT INTO `page-views` VALUES (446, 20, 'App\\Product', '127.0.0.1', '2018-01-04 17:24:06', '2018-01-04 17:24:06');
INSERT INTO `page-views` VALUES (447, 20, 'App\\Product', '127.0.0.1', '2018-01-04 17:24:09', '2018-01-04 17:24:09');
INSERT INTO `page-views` VALUES (448, 18, 'App\\Product', '127.0.0.1', '2018-01-04 18:10:26', '2018-01-04 18:10:26');
INSERT INTO `page-views` VALUES (449, 21, 'App\\Product', '127.0.0.1', '2018-01-04 18:12:26', '2018-01-04 18:12:26');
INSERT INTO `page-views` VALUES (450, 17, 'App\\Product', '127.0.0.1', '2018-01-04 18:23:26', '2018-01-04 18:23:26');
INSERT INTO `page-views` VALUES (451, 2, 'App\\Product', '127.0.0.1', '2018-01-05 04:37:00', '2018-01-05 04:37:00');
INSERT INTO `page-views` VALUES (452, 2, 'App\\Product', '127.0.0.1', '2018-01-05 04:37:04', '2018-01-05 04:37:04');
INSERT INTO `page-views` VALUES (453, 2, 'App\\Product', '127.0.0.1', '2018-01-05 04:54:25', '2018-01-05 04:54:25');
INSERT INTO `page-views` VALUES (454, 1, 'App\\Product', '127.0.0.1', '2018-01-05 07:01:53', '2018-01-05 07:01:53');
INSERT INTO `page-views` VALUES (455, 22, 'App\\Product', '127.0.0.1', '2018-01-05 07:07:44', '2018-01-05 07:07:44');
INSERT INTO `page-views` VALUES (456, 23, 'App\\Product', '127.0.0.1', '2018-01-05 07:11:59', '2018-01-05 07:11:59');
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
INSERT INTO `password_resets` VALUES ('bryan.kristian478@gmail.com', '$2y$10$lXb9CEow09whIiL6AlaiauxP7AA.agoGBMEPd5m/tPjCoAR78Ew5K', '2018-01-03 04:07:47');
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 1, 1, 'NERMAL PORTRAIT L/S (NAVY)', 'THIS IS NOT A COTTON SHIRT\r\nTHIS IS WHAT \r\nA SEX ON THE BEACH \r\nWHILE WATCHING SUNDAY FOOTBALL', 4000000, 'images/M0yda1QocbvDM1xyEyvB55QD1rpNkfXYhNROPXLq.jpeg', 50, '2017-12-27 15:40:23', '2017-12-27 15:40:23');
INSERT INTO `products` VALUES (2, 1, 2, 'WARRIOR COTTON JACKET (SEA FOAM)', 'Constructed from the cotton found\r\nin a hidden valley\r\ndeep in the ruins of an ancient city\r\nCotton Jacket\r\nBurgundy Satin Lining\r\nScreen Printed Graphics\r\nEmbroidered Sleeve LogoL', 1500000, 'images/YSvEVbmPMZ8n8J0cAIdOznd7z9ZBH1IqEPXkgkrM.jpeg', 50, '2017-12-27 15:43:24', '2017-12-27 15:43:24');
INSERT INTO `products` VALUES (3, 1, 2, 'MUST BE NICE BOOBIES RAIN COAT (PINK)', 'Custom Rain Coat\r\nPrinted artwork on Front and Back\r\n100% Nylon\r\nWHAT DID YOU DO IN THIS JACKET?\r\nWE WANNA HEAR ALL ABOUT IT', 1000000, 'images/qq0zbvIVJFqxEYrGM7x7wcfFfYevUeuHk8gjgQKa.jpeg', 50, '2017-12-27 16:02:25', '2017-12-27 16:02:25');
INSERT INTO `products` VALUES (4, 1, 1, 'Scarface™ Embroidered Leather Jacket', 'Cowhide leather with satin lining and full zip closure. Hand pockets at lower front with interior chest pocket and elasticized leather cuffs and waistband. Embroideries on front, back and sleeves.', 16000000, 'images/VZH4Gxc7QTVxzn4HMeWhgWVZBMrE7A1M87f0jLfb.jpeg', 2, '2017-12-27 16:05:30', '2017-12-27 16:05:30');
INSERT INTO `products` VALUES (5, 1, 1, 'I.D.C Hoodie', 'White graphic I.D.C Hoodie. Features hand-drawn style graphics all over the body of the hoodie including the front, back and sleeves. l', 1600000, 'images/1-IDC-Hoodie-Collection-Front-Flat.jpg', 2, '2017-12-27 16:10:54', '2017-12-27 16:10:54');
INSERT INTO `products` VALUES (6, 1, 3, 'Supreme®/Hanes® Realtree® Boxer Briefs (2 Pack)', 'All cotton classic Hanes® boxer brief with Realtree® camo print.', 1200000, 'images/m7H3ZcjA50ROgE5JP378QSqIs9VIue3S0kXVkBUI.jpeg', 2, '2017-12-27 16:12:43', '2017-12-27 16:12:43');
INSERT INTO `products` VALUES (7, 1, 1, 'WHEREABOUTS', 'Green camouflage all over printed Whereabouts T-shirt. Features a large branded beige print to the front with a black print. Split hem at the bottom and a oversized fit.', 700000, 'images/JUFjq6t3rKPh4tVXUqHlI0WKbOqYHoYhD6gwkJ1z.jpeg', 2, '2017-12-27 16:19:56', '2017-12-27 16:19:56');
INSERT INTO `products` VALUES (8, 1, 1, 'ABC BE@R MILO TEE MENS', 'MEDICOM TOY CORPORATION', 1500000, 'images/7XtacVeSLv8thUc15lfOGTPh3fORSCmTuVO9VVK7.jpeg', 2, '2017-12-27 16:21:48', '2017-12-27 16:21:48');
INSERT INTO `products` VALUES (9, 1, 1, 'BAPE X GRAN TURISMO PULLOVER HOODIE MENS', 'Gran Turismo X Bape', 4000000, 'images/iHBiPOVBdOznwZ96OZ4Ds9pUxPUV5465AFMxRbnN.jpeg', 2, '2017-12-27 16:23:39', '2017-12-27 16:23:39');
INSERT INTO `products` VALUES (10, 1, 2, 'BABY MILO CREWNECK LADIES', '100% Cotton', 3000000, 'images/Olto0A1DAaHvi5a9Z0PqMEMDFQFgthsfjc9TvQCd.jpeg', 2, '2017-12-27 16:25:09', '2017-12-27 16:25:09');
INSERT INTO `products` VALUES (11, 2, 1, 'Quilted Athletic SD-Windcheater Jacket', 'Superdry men’s Quilted Athletic SD-Windcheater jacket. Part of our iconic wind family, this hoodless jacket features a double collar with the inner collar layer ribbed, a triple layer zip fastening and an all over quilted design. There are two external zip pockets and one internal pocket, ribbed cuffs with thumbholes and a bungee cord hem. This jacket is finished off with an embroidered Superdry logo on the sleeve and back as well as Superdry logo detailing on the zip pulls.', 2000000, 'images/yfkEAT0NHwLWOHusxEnp86Y9cgxo41UuRURWWZPX.jpeg', 20, '2017-12-29 07:43:32', '2017-12-29 07:43:32');
INSERT INTO `products` VALUES (12, 2, 1, 'Arctic Hooded Cliff Hiker Jacket', 'Superdry men\'s Arctic Cliff Hiker hooded jacket. This lightweight hooded jacket features a double layer collar and a cosy fleece lined hood for comfort and a storm seal zip fastening to help keep the elements out. The Cliff Hiker jacket is made from a ripstop fabric and the two zipped front pockets also feature storm seal zips. The cuffs on the jacket are adjustable by hook & loop fasteners and bungee cord adjusters for the hem and hood. Inside, the jacket has a fleece lined body with a single inner pocket fastened with a popper. Finishing touches include branded zip pullers, a logo badge on the right sleeve and embroidered Superdry logos on the shoulders.', 1800000, 'images/6L1cfH50EtWowqIIfXWlOk3mZC13NiTWSLZcGYXS.jpeg', 20, '2017-12-29 07:50:34', '2017-12-29 07:50:34');
INSERT INTO `products` VALUES (13, 2, 3, 'Sport Boxers Double Pack', 'Superdry men\'s Sport Boxers Double Pack. These boxer shorts have your comfort in mind featuring a panelled design, Superdry branded elasticated waistband and signature orange stitch. The boxers are finished with a Superdry logo tab on the back of the waistband. \r\n\r\nPlease note due to hygiene reasons, we are unable to offer an exchange or refund on underwear, unless they are sealed in their original packaging. This does not affect your statutory rights. Please note due to hygiene reasons, we are unable to offer an exchange or refund on underwear, unless they are sealed in their original packaging. This does not affect your statutory rights.', 600000, 'images/dTdNiQy7H46V4gFZp2zVz7iHnJuPpjlKFrnMVxid.jpeg', 10, '2017-12-29 07:52:48', '2017-12-29 07:52:48');
INSERT INTO `products` VALUES (14, 2, 3, 'Sport Mid Athletic Triple Pack', 'Superdry men’s Sport mid Athletic triple pack. A triple pack of socks in soft cotton rich ribbed fabric featuring a thicker sole and ankle for comfort whilst training. The socks are finished with Superdry Sport logo on the side of the socks.', 400000, 'images/KSixH6zRt06vRXqmej6XAXKNBu8OHkCdpLNoZOrP.jpeg', 20, '2017-12-29 07:54:35', '2017-12-29 07:54:35');
INSERT INTO `products` VALUES (15, 2, 2, 'Microfibre Toggle Puffle Jacket', 'Superdry women’s Microfibre Toggle Puffle jacket. Stay warm whilst still being stylish in this fleece lined jacket that features a zipper and toggle fastening, two front zip fastened pockets, ribbed hem and a fleece lined hooded with a faux fur trim. Also featuring ribbed cuffs with thumbholes, the Microfibre Toggle Puffle jacket is finished with an embroidered Superdry logo on the back and an Original Superdry logo badge on one sleeve.', 2100000, 'images/QBnBiQ7PyG0QzioQx3t6METi0kGt9g8FNwfchtpy.jpeg', 10, '2017-12-29 11:57:42', '2017-12-29 11:57:42');
INSERT INTO `products` VALUES (16, 3, 1, 'ASSC x Gran Turismo Hoodie', 'ASSC x Gran Turismo Hoodie\r\n\r\nLoose fit\r\n\r\nPink Hoodie with Black Logos\r\n\r\n100% Cotton Fleece\r\n\r\n8.0 oz', 1100000, 'images/onznD0X0L2CWDnKcMGw4LiMvfKNYPvTmUFi1eP4V.jpeg', 10, '2018-01-02 17:13:01', '2018-01-02 17:13:01');
INSERT INTO `products` VALUES (17, 3, 3, 'Lit Vest', 'Lit - Safety Vest', 340000, 'images/jcX4IDDHSSXOQdn3VutfirrAI2SBcRIa5kPrxYUt.jpeg', 10, '2018-01-02 17:15:30', '2018-01-04 09:21:58');
INSERT INTO `products` VALUES (18, 4, 2, 'H&M Short dress', 'Short dress in woven fabric with a round neckline and opening with a button at the back of the neck. Long sleeves with narrow cuffs and ties, a yoke with concealed pleats at the back, and side pockets.', 349900, 'images/MseuT8LtmhYG0E9R04gbqKbKSBzSgXwaPp2k6IJT.jpeg', 10, '2018-01-03 05:29:18', '2018-01-03 05:29:18');
INSERT INTO `products` VALUES (19, 4, 2, 'H&M Flounced dress', 'Short dress in an airy weave with long raglan sleeves and a decorative drawstring and opening at the top. Elasticated seam at the waist and flounces at the cuffs and hem. Lined.', 449900, 'images/raPart2Z4IJuFqNcDU7u0UlN2dgwn1Wk5b5TUFpb.jpeg', 10, '2018-01-03 05:30:18', '2018-01-03 05:30:18');
INSERT INTO `products` VALUES (20, 4, 2, 'NICKI MINAJ X HM Faux fur jacket', 'NICKI MINAJ x H&M. Short faux fur jacket with a fabric appliqué and embroidery on the back, dropped shoulders and concealed hook-and-eye fasteners at the front. Satin lining.', 899900, 'images/Olqogon0jEGeALQNaY5hM8uDOmuWygE77vFc2lgz.jpeg', 10, '2018-01-03 05:31:55', '2018-01-03 05:31:55');
INSERT INTO `products` VALUES (21, 3, 3, 'ASSC Towel', 'ASSC Towel', 300000, 'images/OwLlE2kXMNFwKqJ3BY3EOgmagVhNB9zSkyPoXiaE.jpeg', 10, '2018-01-04 09:24:12', '2018-01-04 09:24:12');
INSERT INTO `products` VALUES (22, 1, 3, 'SAME SHIT RUG', 'SAME SHIT DIFFERENT DAY\r\nPERFECT GIFT FOR FRIENDS AND NEIGHBORS', 700000, 'images/NTsBIH3hOUoKah5Ptt1wTX37vBYxfhU76CNuvsa1.jpeg', 10, '2018-01-05 07:07:28', '2018-01-05 07:07:28');
INSERT INTO `products` VALUES (23, 1, 3, 'CUDDLE SOCKS (MULTI)', 'I had a deaf uber driver last night\r\nWe had to convince him to take us to the Taco Bell\r\nDrive thru\r\nIt was a mission\r\nJacquard Knit Sock\r\nReally Soft', 150000, 'images/mXcwZJcxT4I2JPXqrDeoKpsq9rQNNBxZOBGGmJ10.jpeg', 10, '2018-01-05 07:11:46', '2018-01-05 07:11:46');
COMMIT;

-- ----------------------------
-- Table structure for promocode_user
-- ----------------------------
DROP TABLE IF EXISTS `promocode_user`;
CREATE TABLE `promocode_user` (
  `user_id` int(10) unsigned NOT NULL,
  `promocode_id` int(10) unsigned NOT NULL,
  `used_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`promocode_id`),
  KEY `promocode_user_promocode_id_foreign` (`promocode_id`),
  CONSTRAINT `promocode_user_promocode_id_foreign` FOREIGN KEY (`promocode_id`) REFERENCES `promocodes` (`id`),
  CONSTRAINT `promocode_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for promocodes
-- ----------------------------
DROP TABLE IF EXISTS `promocodes`;
CREATE TABLE `promocodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reward` double(10,2) DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `is_disposable` tinyint(1) NOT NULL DEFAULT '0',
  `expires_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `promocodes_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reviews
-- ----------------------------
BEGIN;
INSERT INTO `reviews` VALUES (1, 1, 2, 'Barang bagus', 5, '2018-01-04 02:31:58', '2018-01-04 02:31:58');
COMMIT;

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES (1, 'User', 'web', '2017-12-27 00:24:10', '2017-12-27 00:24:10');
INSERT INTO `roles` VALUES (2, 'Admin', 'web', '2017-12-27 00:24:10', '2017-12-27 00:24:10');
COMMIT;

-- ----------------------------
-- Table structure for shoppingcart
-- ----------------------------
DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`url_toko`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stores
-- ----------------------------
BEGIN;
INSERT INTO `stores` VALUES (1, 1, 'RIPNDIP Store', 'Best Fashion Supplier', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'img/DbM6msvRmRX6MKv9NN405YcMUBB3Fz7CemHEDQ4H.jpeg', 'hmstore', '2017-12-27 05:36:22', '2017-12-27 05:36:22');
INSERT INTO `stores` VALUES (2, 2, 'Kelana', 'Fashion First', 'They call him Flipper Flipper faster than lightning. No one you see is smarter than he. In a freak mishap Ranger 3 and its pilot Captain William Buck Rogers are blown out of their trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later.', 'img/FFNGtr9EIjf67gI5k34aSTbTUu0ILNvywDqjQQLD.jpeg', 'tokokelana', '2017-12-29 07:36:35', '2017-12-29 07:36:35');
INSERT INTO `stores` VALUES (3, 4, 'Aing Maung', 'Men\'s Outwear', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.', 'img/mgHIBNTr1yg6bU2tJhVEXXsKJuX1iEnLafOpNVFo.jpeg', 'aingmaung', '2018-01-02 17:08:18', '2018-01-02 17:08:18');
INSERT INTO `stores` VALUES (4, 8, 'Girls & Girls', 'Dress to Impress', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'img/EogdWzda0TMCRif0D8QV36n9iVahIiLvYC0BGcWs.jpeg', 'gngstore', '2018-01-03 05:27:54', '2018-01-03 05:27:54');
COMMIT;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `resi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
BEGIN;
INSERT INTO `transaksi` VALUES (1, 2, 1200000, 3, '011130004021518', 'INV201801041722411', '2018-01-04 17:22:41', '2018-01-05 02:30:09');
INSERT INTO `transaksi` VALUES (2, 2, 349900, 0, NULL, 'INV201801041722411', '2018-01-04 17:22:41', '2018-01-04 17:22:41');
INSERT INTO `transaksi` VALUES (3, 2, 340000, 0, NULL, 'INV201801041722411', '2018-01-04 17:22:41', '2018-01-04 17:22:41');
INSERT INTO `transaksi` VALUES (4, 4, 4000000, 0, NULL, 'INV201801041724271', '2018-01-04 17:24:27', '2018-01-04 17:24:27');
INSERT INTO `transaksi` VALUES (5, 4, 600000, 0, NULL, 'INV201801041724271', '2018-01-04 17:24:27', '2018-01-04 17:24:27');
INSERT INTO `transaksi` VALUES (6, 4, 899900, 0, NULL, 'INV201801041724271', '2018-01-04 17:24:27', '2018-01-04 17:24:27');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Bryan Asa Kristian', 'bryan.kristian478@gmail.com', '$2y$10$4wfxQCkCzaZ5roodfzOYBeFPgL5v/ZKylXSJotzQhhYzhY9fDBVm2', 'YvoiVkajE7hFbz5TtUjcoH1ktSnCq4anBz3odmqqnRi8lRPxuvzYuZbftiLQ', '2017-12-27 00:26:00', '2017-12-27 00:26:00');
INSERT INTO `users` VALUES (2, 'Denny Sugianto', 'sugiantodenny@gmail.com', '$2y$10$jQXmJEoj71g/kragI.kIE.KulWsaVbLV8S6D5i1OMvABzVfktqZ7q', 'omPRNfvDNeyDm9zvCtvbdoR8iItevW4kXYrCAJrzRpav74ILj6J65voo5cfU', '2017-12-27 05:59:39', '2017-12-27 05:59:39');
INSERT INTO `users` VALUES (3, 'Adrianus Handhata', 'adrianus@gmail.com', '$2y$10$.1ecEhw18Stj5v.Q39nGV.ZtGSECqziYZLtIjWQdv6j2Vep35VaKG', 'o14nfRJryDHi8g8phNiSVM1XfJdAupnYb5BqjNjtKdoQnQMINZS55Lq9SuZn', '2018-01-01 16:43:12', '2018-01-01 16:43:12');
INSERT INTO `users` VALUES (4, 'Virginia Hendras', 'henderas@gmail.com', '$2y$10$uoTtChBT0EhlOZN/b2FKPesxvN5Qll.XS.yRkJYTW9tt9u.HOdqMy', 'FePWn0ZDPeLDbvvGVjqi1u83UnYMEm3VPjmC30KiATNZwPRKvDpFRkO7CU33', '2018-01-01 16:54:13', '2018-01-01 16:54:13');
INSERT INTO `users` VALUES (5, 'Mohamad Risaldy', 'risaldy@gmail.com', '$2y$10$RZ3/.74sw.CBmHNs8x8dAOKbW7cg1gq2..CvTDmJXVoPRpVZGMb.O', '9wS5WZx17Jixm2TbpxLSB1m5wNxdREy2TBls9UP9KWYdlmfl7UqhJEWeYsz2', '2018-01-02 04:18:45', '2018-01-02 04:18:45');
INSERT INTO `users` VALUES (6, 'Kielvien LES', 'congxing@gmail.com', '$2y$10$J9EC3pnWGoNo3oBljcZQwefTZ96grh8WA.BYduydLzPFqyqn35Ca2', NULL, '2018-01-02 11:48:03', '2018-01-02 11:48:03');
INSERT INTO `users` VALUES (7, 'Sandi Sutoyo', 'sutoyosandi@gmail.com', '$2y$10$zImH0huIAe7x76LhHBIkgObI9sD0nIGMFe.us.xnc/sU8C6tMLzEe', NULL, '2018-01-02 12:27:16', '2018-01-02 12:27:16');
INSERT INTO `users` VALUES (8, 'Alaena Reni', 'alaena@gmail.com', '$2y$10$WHoZ/r4GTmeDWwUTCoM2K.OGaxKpgk8EwH5PChUlZhsBe9fTQrcp6', 'Y9zg3PL4RbcuJXcs1UVmTXscgM33n0GGwe2ZGb1W94pdMCLTF97n0RmWRCUk', '2018-01-03 05:22:48', '2018-01-03 05:22:48');
INSERT INTO `users` VALUES (9, 'Admin Satu', 'admin@koraka.id', '$2y$10$SnU5OC0inP8ZhF/rfD1E..T7nqlD9cOyzprfGoNDDR7qqqTld29hq', 'xkzttvvJvtPPWykp6GaRftDdHRbRwT7qstoefBPF0b0TovbzwghEvAz6ggEX', '2018-01-05 04:20:29', '2018-01-05 04:20:29');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
