-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ojaghkar
CREATE DATABASE IF NOT EXISTS `ojaghkar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ojaghkar`;

-- Dumping structure for table ojaghkar.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reporting_to` int(11) DEFAULT '0',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` enum('','Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('New','Active','Suspended','Locked') COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `email_verified_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_email_unique` (`email`),
  UNIQUE KEY `clients_api_token_unique` (`api_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.clients: ~0 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.contents
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.contents: ~2 rows (approximately)
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
REPLACE INTO `contents` (`id`, `name`, `text`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'فوتر', '«اجاق کار» بازار آنلاین خدمات است؛ مکانی برای یافتن متخصصان خوش‎نام. اجاق کار به عنوان مرجعی برای دریافت خدمات لوازم خانه و، دسترسی به متخصصان و تعمیرکاران را آسان می‌کند و با شفافیت قیمت‌ها و بالابردن کیفیت خدمات، موجب رضایت خاطر شما می‌شود. ثبت سفارش در اجاق کار رایگان است و هزینه خدمات بعد از اتمام کار به متخصص پرداخت می‌شود. در بسیاری از خدمات می‌توانید از مشاوره و کارشناسی رایگان متخصصان اجاق کار استفاده کنید تا تصمیم بهتری برای انجام کارهای خود بگیرید. قیمت انجام خدمات نیز متناسب با هر خدمت و قبل از شروع کار به شما اعلام می‌شود. امکان بررسی امتیاز متخصصان و نظر افرادی که از خدمات استفاده کرده‌اند به شما کمک می‌کند تا بهترین فرد را برای انجام کارهای خود انتخاب کنید. اجاق کار طیف گسترده‌ای از خدمات خانه، ساختمان، نظافت منزل، خودرو، سلامت و زیبایی را در بر می‌گیرد. برای انجام هر کاری که نیاز به کمک داشته باشید، می‌توانید از بهترین تعمیرکارها و متخصص‌ها بهره ببرید. بخشی از خدمات اجاق کار عبارتند از: تعمیر اجاق گاز، تعمیر اجاق و فر برقی ، تعمیر باربیکیو، تعمیر یخچال، تعمیر لباسشویی، تعمیر ظرفشویی . در حال حاضر اجاق کار در شهرهای تهران، کرج و حومه فعال است به زودی فعالیت خود را در سراسر ایران گسترش خواهد داد. با سفارش آنلاین خدمات و دسترسی سریع به هزاران متخصص قابل اعتماد، تجربه متفاوت و هوشمندانه‌ای از دریافت خدمات منزل و محل‌کار خواهید داشت. اجاق کار، انتخابی برای آسایش زندگی شماست. ', '0d623b4c-3262-4b4e-b2ba-645db7c17837.jpg', '2019-02-07 20:05:55', '2019-02-07 21:08:26'),
	(2, 'اجاق گاز', 'knjknjk bjbhjv  gh gfc', '1cdf4527-3ad2-4a4b-b961-c01423c9c32d.jpg', '2019-02-07 20:09:55', '2019-02-07 21:10:10');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_01_16_140425_create_orders_table', 1),
	(4, '2015_01_05_100001_create_clients_table', 2),
	(5, '2019_02_06_094228_create_contents_table', 3),
	(6, '2019_02_06_094259_create_prices_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tools` tinyint(1) DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problem` text COLLATE utf8mb4_unicode_ci,
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `place` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` tinyint(4) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`id`, `name`, `brand`, `tools`, `service`, `problem`, `finished`, `comment`, `date`, `place`, `time`, `address`, `lat`, `long`, `mobile`, `type`, `code`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'اجاق گاز', 'استیل البرز', NULL, '1', '1,5,7', 0, 'r w rtw qwc t', NULL, NULL, 20, 'erw', NULL, NULL, '78678', NULL, '2019241', 1, '2019-02-04 05:27:05', '2019-02-04 05:27:05'),
	(2, 'باربیکیو', NULL, 0, '1', '', 0, 'aw qwe q', NULL, 'بالکن', 32, 'qwe', NULL, NULL, '6578', '1', '2019242', 1, '2019-02-04 05:28:26', '2019-02-04 05:28:26'),
	(3, 'ماشین لباسشویی', 'ال‌جی', NULL, '1', '2,4,6,9', 0, 'srtf awrt', NULL, NULL, 21, 'e', NULL, NULL, '458', NULL, '2019243', 1, '2019-02-04 05:32:23', '2019-02-04 05:32:23');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.prices: ~0 rows (approximately)
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Dumping structure for table ojaghkar.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ojaghkar.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'oj', 'admin@admin.com', NULL, '$2y$10$9K6edrHE6sjmOnNSe0EU9u3mwA01MV.ig5KHzSHhpIChFx6tvH8nK', NULL, '2019-02-04 05:26:00', '2019-02-07 21:18:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
