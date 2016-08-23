-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2016 年 8 月 23 日 09:00
-- サーバのバージョン: 5.5.49-0ubuntu0.14.04.1
-- PHP のバージョン: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `plubito`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `user_id` int(11) NOT NULL,
  `talk_id` int(11) NOT NULL,
  `approved_flag` tinyint(1) NOT NULL,
  `paid_flag` tinyint(1) NOT NULL,
  `finished_flag` tinyint(1) NOT NULL,
  `applied_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `approved_at` timestamp NULL DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `finished_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `applications`
--

INSERT INTO `applications` (`user_id`, `talk_id`, `approved_flag`, `paid_flag`, `finished_flag`, `applied_at`, `approved_at`, `paid_at`, `finished_at`) VALUES
(4, 70, 0, 0, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 68, 0, 0, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 48, 0, 0, 0, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのデータのダンプ `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, '進学'),
(2, '就職'),
(3, '留学');

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `user_id` int(11) NOT NULL,
  `talk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `likes`
--

INSERT INTO `likes` (`user_id`, `talk_id`) VALUES
(1, 22),
(2, 22),
(13, 22),
(4, 70),
(4, 68),
(4, 48),
(3, 45);

-- --------------------------------------------------------

--
-- テーブルの構造 `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `talk_id` int(11) NOT NULL,
  `body` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mails`
--

INSERT INTO `mails` (`sender_id`, `receiver_id`, `talk_id`, `body`, `sent_at`) VALUES
(0, 0, 0, 'おなしゃす', '2016-08-22 15:51:55'),
(0, 0, 0, '2', '2016-08-22 15:53:06'),
(3, 1, 70, 'テストメール', '2016-08-23 13:45:13'),
(3, 1, 70, 'もいっちょ', '2016-08-23 13:49:28'),
(1, 3, 70, 'メンターから返信', '2016-08-23 13:50:47'),
(1, 3, 70, 'うまくいった', '2016-08-23 13:55:01');

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_03_231807_create_applications_table', 1),
('2016_08_07_003121_create_likes_table', 1),
('2016_08_10_172730_add_likes_count_to_talks_table', 2),
('2016_08_10_173132_add_applications_count_to_talks_table', 2),
('2016_07_31_174447_talk', 3),
('2016_08_21_223513_add_body_to_mails_table', 4),
('2016_08_21_231559_add_talk_time_to_talks_table', 5),
('2016_08_21_232225_add_role_to_users_table', 6);

-- --------------------------------------------------------

--
-- テーブルの構造 `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `occupation_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- テーブルのデータのダンプ `occupations`
--

INSERT INTO `occupations` (`id`, `occupation_name`) VALUES
(1, '高校生'),
(2, '大学生'),
(3, '自営業'),
(4, '個人事業主'),
(5, 'フリーター'),
(6, 'プログラマー'),
(7, 'ライター');

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `talks`
--

CREATE TABLE IF NOT EXISTS `talks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text CHARACTER SET utf8 NOT NULL,
  `pic0_path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pic1_path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `likes_count` int(11) NOT NULL,
  `applications_count` int(11) NOT NULL,
  `talk_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- テーブルのデータのダンプ `talks`
--

INSERT INTO `talks` (`id`, `mentor_id`, `title`, `category_id`, `price`, `detail`, `pic0_path`, `pic1_path`, `created_at`, `updated_at`, `likes_count`, `applications_count`, `talk_time`) VALUES
(21, 1, 'てす', 1, 17000, 'てすはいてすはい', '/assets/img/default_thumbnail.jpg', '/assets/img/default_thumbnail.jpg', '2016-08-03 15:39:16', '2016-08-03 15:39:16', 0, 0, 0),
(22, 1, 'てすてす', 1, 7000, 'あはい', '/talk_pictures/wtj7OrqawdkIGL21wiMZ.jpg', '', '2016-08-06 08:39:51', '2016-08-06 08:39:51', 0, 0, 0),
(23, 1, 'おおお', 1, 3000, '\r\n\r\nioiii', '/talk_pictures/xRhacsSE6oHTVT66GQoI.jpg', '', '2016-08-06 09:41:13', '2016-08-06 09:41:13', 0, 0, 0),
(24, 1, 'いえ', 1, 3000, 'ooo', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 09:42:38', '2016-08-06 09:42:38', 0, 0, 0),
(25, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(26, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(27, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(28, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(29, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(30, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(31, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(32, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(33, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(34, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(35, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(36, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(37, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(38, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(39, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(40, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(41, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(42, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(43, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(44, 1, 'はいはいテス', 1, 3000, '99999', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:00', '2016-08-06 10:17:00', 0, 0, 0),
(45, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-23 15:53:10', 1, 1, 0),
(46, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(47, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(48, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-22 13:14:19', 1, 1, 0),
(49, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(50, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(51, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(52, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(53, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(54, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(55, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(56, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(57, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(58, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(59, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(60, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(61, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(62, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(63, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(64, 1, 'は', 2, 3000, 'o', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 10:17:24', '2016-08-06 10:17:24', 0, 0, 0),
(65, 1, 'おおお', 1, 5000, 'ooo', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 13:25:56', '2016-08-06 13:25:56', 0, 0, 0),
(66, 1, 'あぷで', 3, 22000, 'はいアプデ', '/talk_pictures/bJlNsg7Xdy4jg3cyFRcT.jpg', '', '2016-08-06 13:55:53', '2016-08-06 13:55:53', 0, 0, 0),
(67, 1, 'あぷで', 3, 22000, 'はいアプデ', '/talk_pictures/D15bmNeQjHvyhtWmiYwv.JPG', '/talk_pictures/lIdxZTH69lp82VC3bsPc.JPG', '2016-08-06 14:32:24', '2016-08-06 14:32:24', 0, 0, 0),
(68, 1, '画像削除', 2, 43000, 'は', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 14:33:06', '2016-08-22 13:13:32', 2, 0, 0),
(69, 1, 'あぷで', 3, 22000, 'はいアプデ', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 14:37:53', '2016-08-06 14:37:53', 0, 0, 0),
(70, 1, 'おおおお', 2, 10000, 'おおおおおお', '/assets/img/default_thumbnail.jpg', '', '2016-08-06 15:20:12', '2016-08-21 23:30:28', 1, 1, 0),
(71, 4, '時間', 1, 8000, 'ooo', '/assets/img/default_thumbnail.jpg', '', '2016-08-22 13:49:39', '2016-08-22 13:49:39', 0, 0, 0),
(72, 4, '時間', 1, 3000, '101010', '/assets/img/default_thumbnail.jpg', '', '2016-08-22 14:40:57', '2016-08-22 14:40:57', 0, 0, 30);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `profile_picture_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `confirmation_sent_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `occupation_id`, `gender`, `profile_picture_path`, `introduction`, `birthday`, `password`, `remember_token`, `confirmation_token`, `confirmed_at`, `confirmation_sent_at`, `created_at`, `updated_at`, `role`) VALUES
(1, 'oo', 'noblun0405@gmail.com', 0, 0, 'sss', 'ほげる', '0000-00-00', '$2y$10$fHAhtSjPqvHe3wAPy7F3ye4QY7Ij.5Z8X45rxRDz7BQksFq8B8k5a', 'nCAdOfAcLjoZSiAi5O3Q3Rx1M9dMDHQqoxPBl5M9ApBDfL3ULMhtPYLzMtg3', 'c199feb428ff93180844fa3a4f57cd5baa28feb2d87f3eb6addcad1a604f9661', '2016-08-23 06:55:22', '2016-08-03 15:31:54', '2016-08-03 15:31:54', '2016-08-23 14:53:03', 1),
(2, 'おれ', 'uretisiaumier@gmail.com', 0, 0, '', '', '0000-00-00', '$2y$10$SerKlmb5O5vlaw/W.DVWmu9Yt/ESQiT3Khj3HuRPDWvffcbOM9lem', NULL, '6a2280b0d4c500d32d2e72d40b2851fc40315d24d41705cf9f7617e0f9cf01e5', '2016-08-11 13:13:17', '2016-08-11 13:13:17', '2016-08-11 13:13:17', '2016-08-11 13:13:17', 0),
(3, 'はい', 'rikuto_kon@yahoo.co.jp', 0, 0, '', '', '0000-00-00', '$2y$10$W7sVS4N.o3cPrmEEye5no.ZDGqn15WDrMjM2LUlLRU7Lc8fwLrAb6', 'XUoCyJM8moMwvooEOGqIbQAGVphtwJyW0oddiI6Ob9zuMW3BN78boZ05aq1d', '6e0bd4b021dff8fa6618e318dfeaa849031e7f6d06b930d3d8f63efba9fb9eaf', '2016-08-23 06:54:45', '2016-08-12 00:05:59', '2016-08-12 00:05:59', '2016-08-23 15:54:45', 1),
(4, 'テスト', 'rikutech@gmail.com', 0, 0, '', '', '0000-00-00', '$2y$10$XAfyFqwAF6b448aZc78bTuXm8jl.Vm8JuPrbDxSahHOHlD/7bZy3W', 'twGSp5P7OqfBh1BFAlgGSBA1DpQ8465873VqLQYGzfcVh5SnXUFxqGMOh83T', '98078a11f0c96820f6ac33aea9666e84d575defdff7780fffc7c5c275d179d0d', '2016-08-23 05:55:11', '2016-08-21 21:02:45', '2016-08-21 21:02:45', '2016-08-23 14:55:11', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
