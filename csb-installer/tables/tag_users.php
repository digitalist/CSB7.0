<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/19/19
 * Time: 10:16 AM
 */

$structure = "CREATE TABLE `tag_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_users_tag_id_user_id_unique` (`tag_id`,`user_id`),
  KEY `tag_users_user_id_foreign` (`user_id`),
  CONSTRAINT `tag_users_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tag_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";