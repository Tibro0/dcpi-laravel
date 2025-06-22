-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2025 at 12:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcpi-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_counter_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_counter_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_counter_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_counter_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_counter_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_counter_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_counter_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_counter_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `description`, `first_counter_name`, `first_counter_number`, `second_counter_name`, `second_counter_number`, `third_counter_name`, `third_counter_number`, `fourth_counter_name`, `fourth_counter_number`, `created_at`, `updated_at`) VALUES
(1, 'uploads/about_us_page_image/1826012444416158.jpg', '<h2 class=\"section-title\" style=\"margin-top: 0px; margin-bottom: 30px; font-family: futura-bold; color: rgb(30, 30, 75); font-size: 40px;\">ABOUT OUR JOURNY</h2><p style=\"color: rgb(92, 92, 119); font-size: 15px; line-height: 1.9; font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ipsa illo quod veritatis, magni debitis fugiat dolore voluptates! Consequatur, aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat perferendis sint optio similique. Et amet magni facilis vero corporis quos.</p><p style=\"color: rgb(92, 92, 119); font-size: 15px; line-height: 1.9; font-family: Poppins, sans-serif;\">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum a, facere fugit error accusamus est officiis vero in, nostrum laboriosam corrupti explicabo, cumque repudiandae deleniti perspiciatis quae consectetur enim. Laboriosam!</p>', 'TEACHERS', '60', 'COURSES', '50', 'STUDENTS', '1000', 'SATISFIED CLIENT', '3737', '2025-03-08 02:04:06', '2025-03-08 02:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `banner_features`
--

CREATE TABLE `banner_features` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_features`
--

INSERT INTO `banner_features` (`id`, `icon`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ti-pencil-alt', 'Admission Now', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad', 1, '2025-03-02 05:16:14', '2025-03-02 06:55:31'),
(3, 'ti-bookmark-alt', 'Our Achievements', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus nisi quae. Repellat itaque enim maiores cumque rerum.', 1, '2025-03-02 05:16:53', '2025-03-02 06:55:10'),
(4, 'ti-desktop', 'Our Notice Board', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus nisi quae. Repellat itaque enim maiores cumque rerum.', 1, '2025-03-02 05:17:13', '2025-03-02 06:54:49'),
(5, 'ti-book', 'Scholorship News', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus nisi quae. Repellat itaque enim maiores cumque rerum.', 1, '2025-03-02 05:17:30', '2025-03-02 06:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `user_id`, `title`, `slug`, `category`, `date`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/blog_image/1825866387136729.jpg', 1, 'Blog Blog Blog Blog Blog Blog Blog Blog', 'blog-blog-blog-blog-blog-blog-blog-blog', 'Blog Category', '2025-03-30', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; font-weight: 600; letter-spacing: 0.5px;\">Long Description</span></p>', 1, '2025-03-06 11:24:39', '2025-03-07 12:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `bteb_courses`
--

CREATE TABLE `bteb_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bteb_courses`
--

INSERT INTO `bteb_courses` (`id`, `image`, `name`, `slug`, `month`, `duration`, `course_fee`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/bteb_course_image/1826822170886259.jpg', 'Computer', 'computer', '06 Month', '03 Hours', '6000 taka', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; letter-spacing: 0.5px;\">Long Description</span></p>', 1, 1, '2025-03-17 00:36:26', '2025-03-17 00:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `bteb_course_routines`
--

CREATE TABLE `bteb_course_routines` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bteb_course_routines`
--

INSERT INTO `bteb_course_routines` (`id`, `image`, `course_name`, `course_duration`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/bteb_course_routine/media_67f92c6559e8e.png', 'Laravel 9 Build Complete Learning Management System LMS A-Z', '100 Hours', 1, 1, '2025-04-11 08:51:17', '2025-04-11 08:51:17'),
(3, 'uploads/bteb_course_routine/media_67f92c6559e8e.png', 'Laravel 9 Build Complete Learning Management System LMS A-Z', '100 Hours', 1, 1, '2025-04-11 08:51:17', '2025-04-11 08:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_static_pages`
--

CREATE TABLE `custom_static_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `key` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_static_pages`
--

INSERT INTO `custom_static_pages` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'our_identity_page_content', '<h4 class=\"elementor-heading-title elementor-size-default\" style=\"box-sizing: border-box; margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; color: var( --e-global-color-primary ); font-size: 1.5rem; padding: 0px; margin: 0px;\"><font style=\"box-sizing: border-box; vertical-align: inherit;\"><font style=\"box-sizing: border-box; background-color: transparent !important; box-shadow: none !important; position: initial !important; vertical-align: inherit;\"><span style=\"font-family: Nunito;\">History of establishment</span></font></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-a7cc25b elementor-widget elementor-widget-heading\" data-id=\"a7cc25b\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-7d6c0c7 elementor-widget elementor-widget-text-editor\" data-id=\"7d6c0c7\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: Roboto, sans-serif; font-size: 14px; font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">DCPI has been accredited by the Bangladesh Technical Education Board (BTEB) under the Ministry of Education since 2006.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">BTEB Code No. 50239</span></font></p></div></div></h4><h4 class=\"elementor-heading-title elementor-size-default\" style=\"margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Vision</span></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-f7d9246 elementor-widget elementor-widget-heading\" data-id=\"f7d9246\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-7b5d296 elementor-widget elementor-widget-text-editor\" data-id=\"7b5d296\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">To build a sustainable society with human values ​​and dignity by providing appropriate knowledge and technology to qualified people.</span></font></p></div></div></h4><h4 class=\"elementor-heading-title elementor-size-default\" style=\"margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Mission</span></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-1228011 elementor-widget elementor-widget-heading\" data-id=\"1228011\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-cf2e1d5 elementor-widget elementor-widget-text-editor\" data-id=\"cf2e1d5\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">To provide quality education to meet the technological challenges of the 21st century and to develop a competent workforce for the national and international workplace.</span></font></p></div></div><div class=\"elementor-element elementor-element-9b3798a elementor-widget elementor-widget-text-editor\" data-id=\"9b3798a\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Dhaka Central Polytechnic Institute&nbsp;</span></font><span style=\"font-weight: bolder; font-family: Nunito;\">(DCPI)</span><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit; background-color: transparent !important; box-shadow: none !important; position: initial !important;\"><span style=\"font-family: Nunito;\">&nbsp;was established in 2006. It is located at Darus Salam, Mirpur Road, Dhaka. It is committed to developing students into skilled Diploma Engineers by providing quality technical education and training. It&nbsp;</span></font><font style=\"vertical-align: inherit; background-color: transparent !important; box-shadow: none !important; position: initial !important;\"><span style=\"font-family: Nunito;\">is being run by&nbsp;&nbsp; the non-profit organization Lead Education Foundation&nbsp;</span></font></font><span style=\"font-weight: bolder; font-family: Nunito;\">(LEF) .</span><font style=\"vertical-align: inherit;\"></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">It goes without saying that the tireless work of the LEF Executive Committee members and the DCPI Management Committee members has added a special dimension to the realization of the long-cherished aspirations of the conscious people of our country.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">In fact, they have done a difficult job. The institution is practically working for the economic development of the country by transforming the country’s large population into a skilled workforce and providing self-employment and employment opportunities at home and abroad. The institution is contributing to the achievement of the Sustainable Development Goal,&nbsp;</span></font><span style=\"font-weight: bolder; font-family: Nunito;\">SDG 4: “Ensure inclusive and equitable education and promote lifelong learning opportunities for all”</span><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">&nbsp;which is titled&nbsp;</span></font><span style=\"font-weight: bolder; font-family: Nunito;\">“Transforming Our World: The 2030 Agenda for Sustainable Development”</span><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">&nbsp;and was officially adopted by the United Nations in 2015. At the same time, it is in line with the 8th Five Year Plan (FYP) of Bangladesh, which mentions “&nbsp;</span></font><span style=\"font-weight: bolder; font-family: Nunito;\">Addressing the skills constraint to accelerate growth under the fourth industrial revolution (4IR)</span><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">&nbsp;”.</span></font></p></div></div></h4><h4 class=\"elementor-heading-title elementor-size-default\" style=\"margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Objectives</span></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-efc3583 elementor-widget elementor-widget-heading\" data-id=\"efc3583\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-f47a3fa elementor-widget elementor-widget-text-editor\" data-id=\"f47a3fa\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><span style=\"font-weight: bolder; font-family: Nunito;\">&nbsp;</span><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">1. To provide quality technical education for the purpose of imparting useful knowledge among the people or target groups.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">2. To create income/employment opportunities for unemployed youth, helpless women, marginal farmers and the landless and make them self-reliant.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">3. Undertake research, surveys, studies, advocacy and consultancy activities to support and monitor development initiatives at the local and national levels and advance good governance.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">4. To study the changes in technology worldwide and to apply it in industry by achieving improved productivity and efficiency and to provide technical training. To conserve natural resources by applying advanced techniques.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">4. Maintaining environmental balance through renewable energy, such as biogas, solar power and other initiatives, intensive social forestry, biodiversity and other initiatives to adapt to climate change.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">5. Conserve natural resources through the application of advanced techniques.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">6. To eliminate gender discrimination and social injustice through women\'s empowerment and various measures and to ensure legal aid and human rights.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">7. To take action against illiteracy, child labor and for their rights to better education and to obtain the desired opportunities for health and happiness.</span></font></p></div></div></h4><h4 class=\"elementor-heading-title elementor-size-default\" style=\"margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Values</span></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-28011c3 elementor-widget elementor-widget-heading\" data-id=\"28011c3\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-0486151 elementor-widget elementor-widget-text-editor\" data-id=\"0486151\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px; margin-bottom: 20px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">Serving humanity, preserving moral values, such as honesty and fairness, respecting individual rights and beliefs.</span></font></p></div></div></h4><h4 class=\"elementor-heading-title elementor-size-default\" style=\"margin-block: 0.5rem 1rem; font-family: SolaimanLipi; font-weight: var( --e-global-typography-primary-font-weight ); line-height: 1; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">The specific objectives of DCPI are:</span></font></h4><h4 style=\"margin-bottom: 0px; font-family: Nunito, \" segoe=\"\" ui\",=\"\" arial;=\"\" line-height:=\"\" 28px;=\"\" color:=\"\" rgb(108,=\"\" 117,=\"\" 125);=\"\" font-size:=\"\" 16px;=\"\" padding-right:=\"\" 10px;\"=\"\"><div class=\"elementor-element elementor-element-4e616c6 elementor-widget elementor-widget-heading\" data-id=\"4e616c6\" data-element_type=\"widget\" data-widget_type=\"heading.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; width: 1120px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: SolaimanLipi; font-size: 16px; font-weight: 400;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"></div></div><div class=\"elementor-element elementor-element-0488c23 elementor-widget elementor-widget-text-editor\" data-id=\"0488c23\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\" style=\"--flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; flex-basis: var(--flex-basis); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); order: var(--order); align-self: var(--align-self); flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); justify-content: var(--justify-content); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); position: relative; --swiper-theme-color: #000; --swiper-navigation-size: 44px; --swiper-pagination-bullet-size: 6px; --swiper-pagination-bullet-horizontal-gap: 6px; --widgets-spacing: 20px; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-size: var( --e-global-typography-text-font-size ); font-weight: 400; width: 1120px;\"><div class=\"elementor-widget-container\" style=\"transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,transform var(--e-transform-transition-duration,.4s);\"><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">1. To produce productive and skilled diploma engineers at a relatively low cost.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">2. To create skilled technical manpower through adequate teaching-learning activities.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">3. To create profitable employment opportunities at home and abroad.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">4. Contributing to poverty alleviation.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">5. Contributing to socio-economic development.</span></font></p><p style=\"margin-block: 0px 0.9rem; font-family: SolaimanLipi;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: Nunito;\">6. Contributing to achieving the United Nations Sustainable Development Goals (SDGs).</span></font></p></div></div></h4>', '2025-03-19 04:34:51', '2025-03-19 04:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `diploma_engineering_courses`
--

CREATE TABLE `diploma_engineering_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diploma_engineering_courses`
--

INSERT INTO `diploma_engineering_courses` (`id`, `image`, `name`, `slug`, `month`, `duration`, `course_fee`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/diploma_engineering_course_image/1825580316164733.jpg', 'Photography edit', 'photography-edit', '06 Month', '03 Hours', '6000 taka', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; letter-spacing: 0.5px;\">Long Description</span></p>', 1, 1, '2025-03-03 07:36:11', '2025-03-07 04:31:29'),
(2, 'uploads/diploma_engineering_course_image/1826015712247183.jpg', 'Phyllis Valdez', 'phyllis-valdez', '7', 'Earum quaerat est ve', 'Et excepturi atque v', 'Nulla dolor beatae r', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; font-weight: 600; letter-spacing: 0.5px;\">Long Description</span></p>', 2, 1, '2025-03-08 02:31:01', '2025-03-08 02:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `diploma_in_engineering_class_routines`
--

CREATE TABLE `diploma_in_engineering_class_routines` (
  `id` bigint UNSIGNED NOT NULL,
  `civil_1st_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_2nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_3nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_4nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_5nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_6nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_7nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_1st_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_2nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_3nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_4nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_5nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_6nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_7nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_1st_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_2nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_3nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_4nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_5nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_6nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electrical_7nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_1st_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_2nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_3nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_4nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_5nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_6nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electronics_7nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_1st_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_2nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_3nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_4nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_5nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_6nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telecommunication_7nd_semester_routine_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diploma_in_engineering_class_routines`
--

INSERT INTO `diploma_in_engineering_class_routines` (`id`, `civil_1st_semester_routine_image`, `civil_2nd_semester_routine_image`, `civil_3nd_semester_routine_image`, `civil_4nd_semester_routine_image`, `civil_5nd_semester_routine_image`, `civil_6nd_semester_routine_image`, `civil_7nd_semester_routine_image`, `computer_1st_semester_routine_image`, `computer_2nd_semester_routine_image`, `computer_3nd_semester_routine_image`, `computer_4nd_semester_routine_image`, `computer_5nd_semester_routine_image`, `computer_6nd_semester_routine_image`, `computer_7nd_semester_routine_image`, `electrical_1st_semester_routine_image`, `electrical_2nd_semester_routine_image`, `electrical_3nd_semester_routine_image`, `electrical_4nd_semester_routine_image`, `electrical_5nd_semester_routine_image`, `electrical_6nd_semester_routine_image`, `electrical_7nd_semester_routine_image`, `electronics_1st_semester_routine_image`, `electronics_2nd_semester_routine_image`, `electronics_3nd_semester_routine_image`, `electronics_4nd_semester_routine_image`, `electronics_5nd_semester_routine_image`, `electronics_6nd_semester_routine_image`, `electronics_7nd_semester_routine_image`, `telecommunication_1st_semester_routine_image`, `telecommunication_2nd_semester_routine_image`, `telecommunication_3nd_semester_routine_image`, `telecommunication_4nd_semester_routine_image`, `telecommunication_5nd_semester_routine_image`, `telecommunication_6nd_semester_routine_image`, `telecommunication_7nd_semester_routine_image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/diplomaIn_engineering_class_routine/media_67f6c55a046a5.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab88706.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab88ab9.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab88f0a.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab89261.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab895a6.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6c4ab898fe.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf85b4ac4.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf3312165.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf33125da.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf3312a50.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf3312e78.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf3313295.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6cf33136be.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd4ede.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd562d.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd5af7.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd6045.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd64d7.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd6953.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d31cd6e61.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a68ee.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a6f03.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a73a0.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a781b.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a7c8f.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a80cf.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d683a8524.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d94030ed5.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d9403156c.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d94031aa5.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d94031f74.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d9403246a.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d9403290d.png', 'uploads/diplomaIn_engineering_class_routine/media_67f6d94032e30.png', NULL, '2025-04-09 14:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `name`, `slug`, `location`, `date`, `time`, `fee`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/event_image/1825655289049557.jpg', 'Toward a public philosophy of justice', 'toward-a-public-philosophy-of-justice', 'Dhanmondi, Dhaka', '2025-03-31', '04:00 pm', '00 Taka', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; letter-spacing: 0.5px;\">Long Description</span></p>', 1, 1, '2025-03-04 03:29:20', '2025-03-04 03:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_page_about_us_sections`
--

CREATE TABLE `front_page_about_us_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_about_us_sections`
--

INSERT INTO `front_page_about_us_sections` (`id`, `image`, `title`, `description`, `button_name`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'uploads/front_page_about_us_section_image/1825563205940530.jpg', 'About Educenter', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat  cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'Learn more', 'http://127.0.0.1:8000/', '2025-03-03 02:50:53', '2025-03-03 03:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `front_page_cta_sections`
--

CREATE TABLE `front_page_cta_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `top_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_cta_sections`
--

INSERT INTO `front_page_cta_sections` (`id`, `top_title`, `main_title`, `button_name`, `button_url`, `created_at`, `updated_at`) VALUES
(1, 'Click to Join the Advance Workshop', 'Training In Advannce Networking', 'join now', 'http://127.0.0.1:8000/', '2025-03-03 07:55:17', '2025-03-03 07:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `front_page_success_story_sections`
--

CREATE TABLE `front_page_success_story_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_success_story_sections`
--

INSERT INTO `front_page_success_story_sections` (`id`, `image`, `video_link`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'uploads/front_page_success_story_section_image/1825596374211822.jpg', 'http://127.0.0.1:8000/', 'Success Stories', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', '2025-03-03 11:52:55', '2025-03-03 11:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management_committees`
--

CREATE TABLE `management_committees` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_committees`
--

INSERT INTO `management_committees` (`id`, `image`, `name`, `slug`, `designation`, `email`, `whatsapp`, `facebook_id_name`, `facebook_url`, `linkedin_id_name`, `linkedin_url`, `twitter_id_name`, `twitter_url`, `website_url`, `address`, `address_url`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/management_committee_image/1826741887474403.jpg', 'Md. Mozammel Haque', 'md-mozammel-haque', 'Chairman', 'dcpibd123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sub-Divisional Engineer (Retd)', '<p><span style=\"color: rgb(122, 122, 122); font-family: SolaimanLipi; text-align: center;\">Roads and Highways Department</span></p>', 1, 1, '2025-03-16 03:20:21', '2025-03-16 03:20:21'),
(3, 'uploads/management_committee_image/1826741996277332.jpg', 'A. K. M. Harun-ur-Rashid', 'a-k-m-harun-ur-rashid', 'Vice-Chairman', 'harun150976@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lalmatia, Dhaka', NULL, 'Businessman and Social Worker', '<p>Businessman and Social Worker</p>', 2, 1, '2025-03-16 03:22:04', '2025-03-16 03:22:04'),
(4, 'uploads/management_committee_image/1826742179077785.png', 'Md. Barkat Ullah', 'md-barkat-ullah', 'Executive Director', 'barkat27@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Former Officer', '<p><span style=\"color: rgb(122, 122, 122); font-family: SolaimanLipi; text-align: center;\">United Nations Children\'s Fund (UNICEF)</span></p>', 3, 1, '2025-03-16 03:24:59', '2025-03-16 03:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_02_082153_create_sliders_table', 2),
(5, '2025_03_02_091435_create_banner_features_table', 3),
(6, '2025_03_03_074142_create_front_page_about_us_sections_table', 4),
(9, '2025_03_03_092304_create_diploma_engineering_courses_table', 5),
(11, '2025_03_03_134020_create_front_page_cta_sections_table', 6),
(12, '2025_03_03_141752_create_front_page_success_story_sections_table', 7),
(14, '2025_03_03_180415_create_events_table', 8),
(19, '2025_03_04_095528_create_teachers_table', 9),
(21, '2025_03_05_100743_create_blogs_table', 10),
(22, '2025_03_08_072508_create_about_us_table', 11),
(23, '2025_03_08_090922_create_research_table', 12),
(25, '2025_03_08_170901_create_notices_table', 13),
(26, '2025_03_14_151321_create_short_courses_table', 14),
(27, '2025_03_16_043724_create_bteb_courses_table', 15),
(28, '2025_03_16_070452_create_management_committees_table', 16),
(29, '2025_03_19_092520_create_subscribers_table', 17),
(32, '2025_03_19_093652_create_custom_static_pages_table', 18),
(33, '2025_04_09_182307_create_diploma_in_engineering_class_routines_table', 19),
(35, '2025_04_10_091710_create_short_course_routines_table', 20),
(36, '2025_04_11_142533_create_bteb_course_routines_table', 21),
(37, '2025_06_14_065844_create_social_links_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `image`, `title`, `slug`, `date`, `description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/notice_image/1826223940816411.png', 'Teaching Materials and Testing Methods Methods Methods Methods Methods', 'teaching-materials-and-testing-methods-methods-methods-methods-methods', '2025-03-10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perferendis saepe omnis officia! Doloribus quae maiores laboriosam praesentium enim fugiat ipsam laudantium assumenda!', 1, 1, '2025-03-10 10:07:53', '2025-03-10 10:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `image`, `title`, `description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/research_image/1826018732087384.jpg', 'Geography', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 1, 1, '2025-03-08 03:46:06', '2025-03-08 03:46:06'),
(3, 'uploads/research_image/1826019407668166.jpg', 'Mathematical', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 2, 1, '2025-03-08 03:46:27', '2025-03-08 03:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('t3YfRL7d46vwO5Aot9dPVcBggTvhQiSUZDK9Hgjt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVdiSmRaY3ZtbVhkTlBBcEdnQTI5c2E5SER0anJxWUlhVTZFbGdoVSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749889162),
('zH5IeheeWjvU4ufMWHT39fDvSV1zBxgtYmNOUWzU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTzJsa01EMExiTTRxeGlnemVRMUtZbE9ZOXUwSU5tTFZac0xkbk1sRiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3NvY2lhbC1saW5rIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1749887104);

-- --------------------------------------------------------

--
-- Table structure for table `short_courses`
--

CREATE TABLE `short_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_courses`
--

INSERT INTO `short_courses` (`id`, `image`, `name`, `slug`, `month`, `duration`, `course_fee`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/short_course_image/1826749636964773.jpg', 'Computer', 'computer', '3 Month', '360 Hours', '00 taka', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; font-weight: 600; letter-spacing: 0.5px;\">Long Description</span></p>', 1, 1, '2025-03-16 05:23:31', '2025-03-16 05:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `short_course_routines`
--

CREATE TABLE `short_course_routines` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_course_routines`
--

INSERT INTO `short_course_routines` (`id`, `image`, `course_name`, `course_duration`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 'uploads/short_course_routine/media_67f912c60ff7e.png', 'Programming Course', '100 Hours', 1, 1, '2025-04-11 07:01:58', '2025-04-11 07:01:58'),
(3, 'uploads/short_course_routine/media_67f912c60ff7e.png', 'Programming Course', '100 Hours', 1, 1, '2025-04-11 07:01:58', '2025-04-11 07:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `button_text`, `button_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Your bright future is our mission', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer', 'Apply now', 'http://127.0.0.1:8000/', 1, '2025-03-02 03:08:53', '2025-03-02 03:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ti-arrow-up', 'http://127.0.0.1:8000/admin/social-link/create', 1, '2025-06-14 01:44:09', '2025-06-14 01:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_id_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_number` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `image`, `name`, `slug`, `designation`, `email`, `whatsapp`, `facebook_id_name`, `facebook_url`, `linkedin_id_name`, `linkedin_url`, `twitter_id_name`, `twitter_url`, `website_url`, `address`, `address_url`, `short_description`, `long_description`, `priority_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/teacher_image/1825686335974214.jpg', 'MD. Faysal Hossain Tibro', 'md-faysal-hossain-tibro', 'Computer', 'faysaltibro@gmail.com', '01734449023', 'Facebook ID Name', 'http://127.0.0.1:8000/Facebook', 'Linkedin ID Name', 'http://127.0.0.1:8000/Linkedin', 'Twitter ID Name', 'http://127.0.0.1:8000/Twitter', 'https://www.witakogafyhujen.ws', 'Monsurabad, Adabor, Dhaka.', 'http://127.0.0.1:8000/admin/teacher/create', 'Short Description', '<p><span style=\"color: rgb(52, 57, 94); font-size: 12px; letter-spacing: 0.5px;\">Long Description</span></p>', 1, 1, '2025-03-04 11:42:48', '2025-03-04 11:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/uploads/avatar.png',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `phone`, `address`, `department`, `semester`, `student_type`, `session`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '/uploads/avatar.png', 'Admin user', 'admin@gmail.com', '', '', '', '', '', '', 'admin', NULL, '$2y$12$QblLibIImqTFKwXjTuCtRe.zvrgG1OTBbGKX8xNeujjkPHTxbfucS', 'UyvBrg3sLnh00RZyBcZLquuQWz8sam5TEcOHshQtSZgWfXjFpLkyCByjtB9n', '2025-02-28 03:41:18', '2025-03-15 23:47:49'),
(2, 'uploads/profile_image/1828858414373839.png', 'User', 'user@gmail.com', '01734449023', 'Monsurabad, Adabor, Dhaka.', 'Computer', '8th', 'Regular', '2018-19', 'user', NULL, '$2y$12$PAp3JsD926n9ua8XPmjUuOxzWAb4mpCHJZ2x7OdwFI1w12h8Yh/GK', NULL, '2025-02-28 03:41:18', '2025-04-08 12:01:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_features`
--
ALTER TABLE `banner_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `bteb_courses`
--
ALTER TABLE `bteb_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bteb_courses_name_unique` (`name`);

--
-- Indexes for table `bteb_course_routines`
--
ALTER TABLE `bteb_course_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `custom_static_pages`
--
ALTER TABLE `custom_static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diploma_engineering_courses`
--
ALTER TABLE `diploma_engineering_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `diploma_engineering_courses_name_unique` (`name`);

--
-- Indexes for table `diploma_in_engineering_class_routines`
--
ALTER TABLE `diploma_in_engineering_class_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_page_about_us_sections`
--
ALTER TABLE `front_page_about_us_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page_cta_sections`
--
ALTER TABLE `front_page_cta_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page_success_story_sections`
--
ALTER TABLE `front_page_success_story_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_committees`
--
ALTER TABLE `management_committees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `management_committees_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notices_title_unique` (`title`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `short_courses`
--
ALTER TABLE `short_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short_courses_name_unique` (`name`);

--
-- Indexes for table `short_course_routines`
--
ALTER TABLE `short_course_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_features`
--
ALTER TABLE `banner_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bteb_courses`
--
ALTER TABLE `bteb_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bteb_course_routines`
--
ALTER TABLE `bteb_course_routines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custom_static_pages`
--
ALTER TABLE `custom_static_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diploma_engineering_courses`
--
ALTER TABLE `diploma_engineering_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diploma_in_engineering_class_routines`
--
ALTER TABLE `diploma_in_engineering_class_routines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_page_about_us_sections`
--
ALTER TABLE `front_page_about_us_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_page_cta_sections`
--
ALTER TABLE `front_page_cta_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_page_success_story_sections`
--
ALTER TABLE `front_page_success_story_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_committees`
--
ALTER TABLE `management_committees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `short_courses`
--
ALTER TABLE `short_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `short_course_routines`
--
ALTER TABLE `short_course_routines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
