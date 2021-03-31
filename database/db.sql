-- --------------------------------------------------------
-- Host:                         D:\Laravel\freelancertraining\database\database.db
-- Server version:               3.30.1
-- Server OS:                    
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for database
-- CREATE DATABASE IF NOT EXISTS "database";
-- USE "database" neither supported nor required;

-- Dumping structure for table database.courses
CREATE TABLE IF NOT EXISTS "courses" ("id" integer not null primary key autoincrement, "category" varchar, "title" varchar not null, "slug" varchar, "description" varchar, "image" varchar, "rating" varchar, "price" integer, "status" varchar, "created_at" datetime, "updated_at" datetime);

-- Dumping data for table database.courses: 9 rows
/*!40000 ALTER TABLE "courses" DISABLE KEYS */;
INSERT INTO "courses" ("id", "category", "title", "slug", "description", "image", "rating", "price", "status", "created_at", "updated_at") VALUES
	(1, 'Graphics Design', 'Graphics design step by step from beginner', 'graphics-design-step-by-step-from-beginner', 'Learn Graphics design step by step from beginner by professional trainer.', 'img/courses/1.png', '4.5', 8000, NULL, '2021-03-25 16:47:18', '2021-03-25 16:47:18'),
	(2, 'UI/UX Design', 'UI/UX design with Adobe XD, Figma, Sketch from Startup', 'uiux-design-with-adobe-xd-figma-sketch-from-startup', NULL, 'img/courses/2.png', '4.0', 6000, NULL, '2021-03-25 16:48:42', '2021-03-25 16:48:42'),
	(3, 'Wordpress', 'Wordpress theme and plugin development from scratch', 'wordpress-theme-and-plugin-development-from-scratch', NULL, 'img/courses/3.png', '4.0', 7000, NULL, '2021-03-25 16:49:38', '2021-03-25 16:49:38'),
	(4, 'Mobile Application', 'Mobile App development step by step from beginner', 'mobile-app-development-step-by-step-from-beginner', NULL, 'img/courses/4.png', '5.0', 12000, NULL, '2021-03-25 16:50:11', '2021-03-25 16:50:11'),
	(5, 'Web Development', 'Learn fullstack web development from scratch', 'learn-fullstack-web-development-from-scratch', NULL, 'img/courses/8.png', '5.0', 12000, NULL, '2021-03-25 16:50:56', '2021-03-25 16:50:56'),
	(6, 'Digital Marketing', 'Learn digital marketing from startup', 'learn-digital-marketing-from-startup', NULL, 'img/courses/9.png', '4.0', 6000, NULL, '2021-03-25 16:51:25', '2021-03-25 16:51:25'),
	(7, 'SEO', 'Learn SEO from scratch with empty knowledge.', 'learn-seo-from-scratch-with-empty-knowledge', NULL, 'img/courses/seo.png', '4.0', 5000, NULL, '2021-03-25 16:52:12', '2021-03-25 16:52:12'),
	(8, 'Website Builds', 'Learn how to build a website and customize.', 'learn-how-to-build-a-website-and-customize', NULL, 'img/courses/website.png', '4.0', 4000, NULL, '2021-03-25 16:53:24', '2021-03-25 16:53:24'),
	(9, 'Website Design', 'Frontend web development, psd to html, template design.', 'frontend-web-development-psd-to-html-template-design', NULL, 'img/courses/template.png', '5.0', 6000, NULL, '2021-03-25 16:54:16', '2021-03-25 16:54:16');

/*!40000 ALTER TABLE "courses" ENABLE KEYS */;

-- Dumping structure for table database.users
-- CREATE TABLE IF NOT EXISTS "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "password" varchar not null, "remember_token" varchar, "created_at" datetime, "updated_at" datetime, "two_factor_secret" text, "two_factor_recovery_codes" text);

-- Dumping data for table database.users: 1 rows
/*!40000 ALTER TABLE "users" DISABLE KEYS */;
INSERT INTO "users" ("id", "name", "email", "email_verified_at", "phone","password", "remember_token", "created_at", "updated_at", "two_factor_secret", "two_factor_recovery_codes") VALUES
	(1, 'Sankar Bala', 'sankarbala232@gmail.com', NULL, '01742725606', '$2y$10$ki5mLiesPDXHd40nbMbLNOZosi6TZw3sEz47K.MTuscuMrYSTJGla', NULL, '2021-03-25 16:46:15', '2021-03-25 16:46:15', NULL, NULL);
/*!40000 ALTER TABLE "users" ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
