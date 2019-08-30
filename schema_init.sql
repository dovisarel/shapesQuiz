CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shape_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_currect` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
