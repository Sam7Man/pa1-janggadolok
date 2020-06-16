CREATE DATABASE `last_one`;

CREATE TABLE `booking` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `jenis_paket` CHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `booking` (`id`, `jenis_paket`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'Nginap + Makan', 700000, '2020-06-14 17:00:00', NULL),
(2, 'Trip + Nginap + Makan', 1000000, '2020-06-14 17:00:00', NULL);



CREATE TABLE `booking_user` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `id_paket` BIGINT(20) UNSIGNED NOT NULL,
  `id_user` BIGINT(20) UNSIGNED NOT NULL,
  `check_in` DATE NOT NULL,
  `check_out` DATE NOT NULL,
  `Total` BIGINT(20) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `booking_user` (`id`, `id_paket`, `id_user`, `check_in`, `check_out`, `Total`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '2020-06-15', '2020-06-16', 700000, '2020-06-14 21:14:37', '2020-06-14 22:14:20'),
(6, 2, 1, '2020-06-18', '2020-06-20', 1000000, '2020-06-14 21:58:34', '2020-06-14 22:06:51'),
(8, 1, 2, '2020-06-16', '2020-06-18', 700000, '2020-06-15 03:05:35', '2020-06-15 03:05:35'),
(9, 1, 2, '2020-06-16', '2020-06-17', 700000, '2020-06-15 04:42:34', '2020-06-15 04:42:34');



CREATE TABLE `comments` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `commenter_id` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` TINYINT(1) NOT NULL DEFAULT 1,
  `child_id` BIGINT(20) UNSIGNED DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'App\\User', NULL, NULL, 'App\\Post', '1', 'Website nya bagus', 1, NULL, NULL, '2020-06-15 01:25:52', '2020-06-15 01:26:36'),
(2, '1', 'App\\User', NULL, NULL, 'App\\Post', '1', 'Thanks', 1, 1, NULL, '2020-06-15 01:30:55', '2020-06-15 01:30:55'),
(3, NULL, NULL, 'Naldo', 'Nal@gmail.com', 'App\\Post', '1', 'Happy reading brothers !!', 1, NULL, NULL, '2020-06-15 01:35:18', '2020-06-15 01:35:18'),
(4, NULL, NULL, 'Samuel', 'Samuel@gmail.com', 'App\\Post', '1', 'Nice!!', 1, NULL, NULL, '2020-06-15 04:41:20', '2020-06-15 04:41:20'),
(5, '1', 'App\\User', NULL, NULL, 'App\\Post', '1', 'Thanks!!', 1, 4, NULL, '2020-06-15 05:04:39', '2020-06-15 05:04:39');



CREATE TABLE `failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `connection` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` LONGTEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` LONGTEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` INT(10) UNSIGNED NOT NULL,
  `migration` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_14_171321_create_post_table', 2),
(5, '2020_06_15_015212_create_booking_table', 3),
(6, '2020_06_15_015923_create_booking_table', 4),
(7, '2020_06_15_021059_create_booking_user_table', 5),
(8, '2020_06_15_022025_create_booking_user_table', 6),
(9, '2020_06_15_065704_create_views_table', 7),
(10, '2018_06_30_113500_create_comments_table', 8);



CREATE TABLE `password_resets` (
  `email` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `post` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `title` CHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `post` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'First Article', 'My first article', '2020-06-14 17:00:00', NULL),
(2, 'Second Article', 'My Second Article', '2020-06-14 17:00:00', NULL);



CREATE TABLE `users` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` ENUM('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` VARCHAR(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'zicoaritonang@gmail.com', 'admin', NULL, '$2y$10$ieCi7/2cy34pFX6cTszxiOV/d.WGGf.8D7hQCGEGkWZu.57b5qT1K', NULL, '2020-06-14 09:48:28', '2020-06-14 09:48:28'),
(2, 'tanisha', 'tanisha@gmail.com', 'user', NULL, '$2y$10$wtmmrt2ZGS2JJJYQoeazbunut0ezLqLM4NMGhCj9e4ELiJ9rLiT3.', NULL, '2020-06-14 09:49:33', '2020-06-14 09:49:33');



CREATE TABLE `views` (
  `id` BIGINT(20) UNSIGNED NOT NULL,
  `viewable_type` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` BIGINT(20) UNSIGNED NOT NULL,
  `visitor` TEXT COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `booking_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_user_id_user_foreign` (`id_user`),
  ADD KEY `booking_user_id_paket_foreign` (`id_paket`);


ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);


ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);


ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);


ALTER TABLE `booking`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `booking_user`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `comments`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `failed_jobs`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `migrations`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `post`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



ALTER TABLE `users`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `views`
  MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `booking_user`
  ADD CONSTRAINT `booking_user_id_paket_foreign` FOREIGN KEY (`id_paket`) REFERENCES `booking` (`id`),
  ADD CONSTRAINT `booking_user_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);


ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;