-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 01:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litsbd_computer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `about_us_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `about_us_img`, `created_at`, `modified_at`, `status`) VALUES
('20170821124428-127001', 'Helping and providing <span class="p-color">best service</span> to our client <span>business over 20 years!!</span>', '<div class="about-greentech-text">\r\n							<h1>Wellcome to <strong>GreenTech</strong></h1>\r\n							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel,</p>\r\n							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>\r\n							<ul>\r\n								<li>We love products that work perfec and look beautiful.</li>\r\n								<li>We create base on a deep analysis of your project.</li>\r\n								<li>We are create design with really high quality stand.</li>\r\n							</ul>\r\n						</div>', 'default.jpg', '2017-08-21 16:44:28', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `status`, `created_at`, `modified_at`) VALUES
('20170921060418-127001', 'Sumsung', 'samsungpardaphash-101148.jpg', 1, '2017-09-21 16:04:18', NULL),
('20170921060446-127001', 'ASUS', 'index.png', 1, '2017-09-21 16:04:46', NULL),
('20170921060511-127001', 'DELL', 'index.jpg', 1, '2017-09-21 16:05:11', NULL),
('20170921060549-127001', 'IBM', 'ibm.png', 1, '2017-09-21 16:05:49', NULL),
('20170921060604-127001', 'Apple', 'apple.jpg', 1, '2017-09-21 16:06:04', NULL),
('20170922084528-127001', 'New Brand', 'default.jpg', 1, '2017-09-22 18:45:28', NULL),
('20180405090905-1', 'BENQ', 'benq-120x90.png', 1, '2018-04-05 09:09:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `icon`, `status`, `created_at`, `modified_at`) VALUES
('20170921061609-127001', 'NOTEBOOK', 'cellphone-hoarding2.jpg', 1, '2017-09-21 16:16:09', NULL),
('20170921061627-127001', 'TABLET', 'laptop.jpg', 1, '2017-09-21 16:16:27', NULL),
('20170921061655-127001', 'DESKTOP', 'brand_desktop.jpg', 1, '2017-09-21 16:16:55', NULL),
('20170921061724-127001', 'SOFTWARE', 'clone_desktops.jpg', 1, '2017-09-21 16:17:24', NULL),
('20170921061805-127001', 'SERVER', 'category_df84e43e2375fd2b52ea2305db55b88d.jpg', 1, '2017-09-21 16:18:05', NULL),
('20170921061818-127001', 'DESKTOP COMPONENT', 'tmp781061955837231106.jpg', 1, '2017-09-21 16:18:18', NULL),
('20170921061925-127001', 'MONITOR', 'ipad-mini-ipad-air-ipad-pro-stack-angle-hero_1.jpg', 1, '2017-09-21 16:19:25', NULL),
('20180113103128-10323736248', 'STORAGE', 'default.jpg', 1, '2018-01-13 10:31:28', NULL),
('20180113103223-10323736248', 'CAMERA', 'default.jpg', 1, '2018-01-13 10:32:23', NULL),
('20180113103246-10323736248', 'OFFICE EQUIPMENT', 'default.jpg', 1, '2018-01-13 10:32:46', NULL),
('20180113103305-10323736248', 'PRINTER', 'default.jpg', 1, '2018-01-13 10:33:05', NULL),
('20180113103337-10323736248', 'SCANNER', 'default.jpg', 1, '2018-01-13 10:33:37', NULL),
('20180113103354-10323736248', 'NETWORK', 'default.jpg', 1, '2018-01-13 10:33:54', NULL),
('20180113103432-10323736248', 'ACCESSORIES', 'default.jpg', 1, '2018-01-13 10:34:32', NULL),
('20180405091009-1', 'Projector', 'default.jpg', 1, '2018-04-05 09:10:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecomm_customers`
--

CREATE TABLE `ecomm_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecomm_customers`
--

INSERT INTO `ecomm_customers` (`customer_id`, `first_name`, `last_name`, `address_1`, `address_2`, `city`, `state`, `zip_code`, `phone`, `email`) VALUES
(26, 'dfgsgsgss', 'gsgsgsgs', 'gsgsgsgsg', 'gsgsgsg', 'gsgsg', 'sd', 'cjjcj', 'cjcjcjc', 'admin@gmail.com'),
(27, 'dfgsgsgss', 'jcjccj', 'gsgsgsgsg', 'gsgsgsg', 'gsgsg', 'sd', 'sgsgs', 'sgsdgsg', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ecomm_orders`
--

CREATE TABLE `ecomm_orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `cost_subtotal` decimal(7,2) NOT NULL,
  `cost_shipping` decimal(6,2) DEFAULT NULL,
  `cost_tax` decimal(6,2) DEFAULT NULL,
  `cost_total` decimal(7,2) NOT NULL,
  `shipping_first_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `shipping_last_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `shipping_address_1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `shipping_address_2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `shipping_city` varchar(20) CHARACTER SET utf8 NOT NULL,
  `shipping_state` char(2) CHARACTER SET utf8 NOT NULL,
  `shipping_zip_code` char(5) CHARACTER SET utf8 NOT NULL,
  `shipping_phone` char(12) CHARACTER SET utf8 NOT NULL,
  `shipping_email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecomm_orders`
--

INSERT INTO `ecomm_orders` (`order_id`, `order_date`, `customer_id`, `cost_subtotal`, `cost_shipping`, `cost_tax`, `cost_total`, `shipping_first_name`, `shipping_last_name`, `shipping_address_1`, `shipping_address_2`, `shipping_city`, `shipping_state`, `shipping_zip_code`, `shipping_phone`, `shipping_email`) VALUES
(42, '2018-04-06', 2018, '99999.99', '9999.99', '9999.99', '99999.99', 'dfgsgsgss', 'gsgsgsgs', 'gsgsgsgsg', 'gsgsgsg', 'gsgsg', 'sd', 'cjjcj', 'cjcjcjc', 'admin@gmail.com'),
(43, '2018-04-06', 2018, '0.00', NULL, NULL, '0.00', 'dfgsgsgss', 'jcjccj', 'gsgsgsgsg', 'gsgsgsg', 'gsgsg', 'sd', 'sgsgs', 'sgsdgsg', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ecomm_order_details`
--

CREATE TABLE `ecomm_order_details` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_qty` int(10) UNSIGNED NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecomm_order_details`
--

INSERT INTO `ecomm_order_details` (`order_id`, `order_qty`, `product_code`) VALUES
(42, 5, '20170921093107-127001');

-- --------------------------------------------------------

--
-- Table structure for table `ecomm_products`
--

CREATE TABLE `ecomm_products` (
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `product_overview` text COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(50) NOT NULL,
  `present_stock` int(20) NOT NULL,
  `new_arrival` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `offer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `percentance` int(3) NOT NULL,
  `free_product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `free_product_short_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `free_product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `product_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecomm_products`
--

INSERT INTO `ecomm_products` (`product_code`, `name`, `description`, `product_overview`, `product_img`, `cat_id`, `sub_cat_id`, `brand_id`, `old_price`, `price`, `total_price`, `present_stock`, `new_arrival`, `offer`, `percentance`, `free_product_name`, `free_product_short_description`, `free_product_img`, `created_at`, `modified_at`, `product_status`) VALUES
('20170921090323-127001', 'Simple Hand Set', '<p>fgsgs</p>', '', 'ICON_LOGO.jpg', '20170921061609-127001', '', '20170921060418-127001', '0', '10000', 0, 0, '1', '0', 0, '', '', '', '2017-09-22 01:03:23', '2018-04-17 10:03:03', 0),
('20170921091053-127001', 'Another Simple Hand Set', '<p>sdffsfs</p>', '', 'cellphone-hoarding21.jpg', '20170921061609-127001', '20170921062058-127001', '20170921060549-127001', '0', '20000', 0, 0, '', '0', 0, '', '', '', '2017-09-22 01:10:53', '2018-03-30 12:05:03', 0),
('20170921091243-127001', 'Android Phone One', '<p>sgddsgdg</p>', '', 'category_df84e43e2375fd2b52ea2305db55b88d.jpg', '20170921061609-127001', '20170921062035-127001', '20170921060511-127001', '0', '50000', 0, 0, '0', '0', 0, '', '', '', '2017-09-22 01:12:43', '0000-00-00 00:00:00', 0),
('20170921093107-127001', 'Cromia LX Laptop', '\r\n<b>Details</b><br>\r\n\r\nModel - Asus S510UA,<br> Processor - Intel Core i5 8250U, Generation - 8th Gen, <br>Processor Clock Speed - 1.60-3.40GHz,<br> CPU Cache - 6MB, Display Size - 15.6",<br> Display Type - FHD LED Display, <br>Display Resolution - 1920 x 1080, <br>RAM - 8GB, <br>RAM Type - DDR4,<br> HDD - 1TB,<br> Part No - BQ564T, <br>Warranty - 2 year (Battery, Adapter 1 year)<br>\r\n', '<h3>Overview</h3><br>\r\n\r\n \r\n\r\nThe Asus S510UA gives you the perfect combination of beauty and performance. With its slim NanoEdge bezel, Gold Metal finish, the latest Intel Core i5 processor with 8GB RAM, VivoBook S15 is designed for today’s fast-paced urban lifestyle.<br>\r\n\r\n<b>Thinner and lighter</b><br>\r\n\r\nThe Asus S510UA is thinner and lighter than ever: it weighs just 1.5kg and has an amazingly thin 17.9mm profile. It’s an everyday laptop with the weight and compactness of an ultrabook.<br>\r\n\r\n\r\n<b>NanoEdge display with ultra-narrow bezel</b><br>\r\n\r\nThe Asus S510UA fits the panel of a 15.6” Full HD display into a typical 14-inch laptop frame. This is possible due to the ultra-narrow 7.8mm NanoEdge bezel that gives it an incredible 80% screen-to-body ratio. The display also includes 178° wide-view technology to ensure that colors and contrast remain vivid and bold, even when viewed at sharp angles. It’s the perfect solution for sharing content with friends and colleagues.<br>\r\n\r\n \r\n\r\n<b>Incredible performance</b><br>\r\n\r\nExceptional performance has always been the hallmark of the ASUS VivoBook S15. Powered by up to the latest Intel Core i5 processor, with up to 16GB DDR4 2133MHz RAM. And with ultra-fast dual-band 802.11ac Wi-Fi, you can enjoy speeds of up to 867Mbps that’s up to 6x faster than 802.11n! It’s everything you need for versatility and performance.<br>\r\n\r\n \r\n\r\n<b>Supercharged data transfers</b><br>\r\n\r\nThe dual-storage design of the Asus S510UA provides the best of both worlds Use the HDD to house large files like movies, music libraries and photo albums. Experience a drastic improvement in read/write speeds, PCMark performance, boot-up times, and physical data protection when you specify your VivoBook S15 laptop.\r\n\r\n \r\n\r\n<b>Complete connectivity</b><br>\r\n\r\nThe ASUS VivoBook S15 is equipped with a USB 3.1 port with reversible USB Type-C connector with an any-way-up design that makes connecting devices simple and quick. USB 3.1 also delivers data transfer speeds up to 10x faster than older USB 2.0 connections! Its USB 3.1 port, HDMI and SD card slot support hassle-free compatibility with a wide range of peripherals, displays and projectors.\r\n\r\n \r\n\r\n<b>Ergonomic backlit keyboard</b><br>\r\n\r\nThe ASUS VivoBook S15 has a full-size backlit keyboard* that’s perfect for low-light settings. The sturdy, single-piece keyboard construction with 1.4mm key travel offers ergonomic and comfortable typing experiences.<br>\r\n\r\n \r\n\r\n\r\n<b>Fingerprint sensor for one-touch access with Windows Hello</b><br>\r\n\r\nAccessing your ASUS VivoBook S15 has never been easier or more secure. With the built-in fingerprint sensor in the touchpad and Windows Hello, there’s no need to type in your password every time to log in just a single touch is all it takes!\r\n\r\n \r\n\r\n<b>Enjoy a world of color with ASUS Splendid technology</b><br>\r\n\r\nASUS Splendid visual optimization technology provides the very best visuals for different kinds of content. It features four display modes, which can be accessed with a single click. Normal mode is ideal for daily tasks. Vivid mode optimizes contrast to deliver stunning photos and video; Eye Care mode reduces blue light levels to ease eye strain; and Manual mode allows for personalized color adjustments.<br>\r\n\r\n \r\n\r\n<b>Pixel-perfect video every source, every time!</b><br>\r\n\r\nASUS Tru2Life Video technology makes any video look amazing. Through intelligent algorithms, it optimizes the sharpness and contrast of every pixel in every frame by 150% to produce incredibly vivid and realistic imagery every time!<br>\r\n\r\n \r\n\r\n<b>Expansive audio, tuned by experts</b><br>\r\n\r\nASUS SonicMaster is a combination of hardware, software and audio tuning designed with the goal of giving you the very best audio experience. A professional-grade codec ensures precise audio encoding and decoding; while amplifiers, large speakers and resonance chambers perfectly-suited for your specific device ensure a powerful audio delivery and deeper bass. Additional signal processing and tuning help refine minute details, filter noise and improve audio clarity so you get truly immersive sound.<br>\r\n\r\n \r\n\r\n<b>Stay cool even after hours of use</b><br>\r\n\r\nLaptop cooling is important as it directly affects your computing experience. ASUS IceCool Technology uses smart fan control, thin heat pipes and a clever internal layout to create an efficient cooling system that keeps the average palm rest temperature below 35°C lower than body temperature to provide you with ultimate computing performance and a comfortable user experience.<br>\r\n\r\n \r\n\r\n<b>A safe fast-charging and longer-lasting battery</b><br>\r\n\r\nASUS VivoBook S15 laptops feature ASUS SuperBattery technology that offers a 3x longer lifespan than standard Lithium-ion cylinder batteries. The new ASUS Battery Health Charging Technology prolongs battery lifespan, decreases battery expansion rate and helps ensures the battery stays in a good condition. Fast-charge technology also charges the battery to 60 percent in just 49 minutes in Asus S510UA notebook.<br>\r\n', 'laptop.jpg', '20170921061627-127001', '20170921083723-127001', '20170921060549-127001', '0', '59000', 0, 0, '1', '2', 0, 'One Hand Bag', 'Excellent Quality is main focus of this Hand Bag', '6.jpg', '2017-09-22 01:31:07', '0000-00-00 00:00:00', 0),
('20180113110906-10323736248', 'rdrggszgsgag', '<p>gcnh</p>', '', 'logo.png', '20170921061724-127001', '20180113104040-10323736248', '20170921060418-127001', '0', 'cncnc', 0, 0, '', '0', 0, '', '', '', '2018-01-13 17:09:06', '2018-04-17 10:03:38', 0),
('20180120105138-1', 'ffdgdfgdfgdfgfdg', '<p>dfgfddgdfgd</p>', '', 'default.jpg', '20170921061627-127001', '', '20170921060418-127001', '0', '6368', 0, 0, '', '0', 0, '', '', '', '2018-01-20 16:51:38', '2018-03-30 12:04:33', 0),
('20180330113654-1', 'New and New Product', '<p>dhdfhd</p>', '', '12512822_445391995654954_2098626723186539947_n2.jpg', '20170921061655-127001', '20170921062058-127001', '20170921060418-127001', '0', '456', 0, 0, '0', '0', 0, '', '', '', '2018-03-30 17:36:54', '0000-00-00 00:00:00', 0),
('20180405085609-1', 'selim', '<p>nvnbvnv</p>', '<p>dzvzvzvz</p>', 'default.jpg', '20170921061609-127001', '', '20170921060418-127001', '0', '13000', 0, 0, '1', '1', 10, '', '', '', '2018-04-05 14:56:09', '2018-04-05 08:59:50', 1),
('20180405091254-1', 'BENQ LU9235 # 6000 LUMENS WUXGA BLUECORE LASER PROJECTOR', '<p><strong>Brand:</strong> <a href="http://smart-bd.com/index.php?route=product/manufacturer/info&amp;manufacturer_id=14">Benq</a></p>\r\n<p><strong>Product Code:</strong> LU9235</p>\r\n<p><strong>Availability:</strong>Pre-Order</p>', '<table border="0" width="691" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td style="height: 19px; width: 196px;" height="19">Brand</td>\r\n<td style="width: 495px;">BenQ</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Country of Origin</td>\r\n<td style="width: 495px;">TAIWAN</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Country of Manufacture</td>\r\n<td style="width: 495px;">China</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Model Name</td>\r\n<td style="width: 495px;">LU9235</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Projection System</td>\r\n<td style="width: 495px;" align="left">DLP</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Native Resolution</td>\r\n<td style="width: 495px;" align="left">WUXGA (1920 x 1200)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Light Source Type</td>\r\n<td style="width: 495px;" align="left">Laser Diodes</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Brightness*</td>\r\n<td style="width: 495px;" align="left">6000 ANSI Lumens</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Contrast Ratio</td>\r\n<td style="width: 495px;" align="left">100000:1</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Display Color</td>\r\n<td style="width: 495px;" align="left">1.07 Billion Colors</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 152px;" rowspan="8" height="152">Lens (Lens not included)</td>\r\n<td align="left">Ultra Short Throw (5J.JCY37.001) F=2.0, f=5.64 mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Wide Fix(5J.JAM37.011) F=1.85, f=11.6mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Ultra Wide (5J.JAM37.061) F=1.96~2.3mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Wide Zoom(5J.JAM37.021) F=1.85~2.5, f=18.7~26.5mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Standard(5J.JAM37.001) F=1.7~1.9, f=26~34mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Semi Long(5J.JAM37.051) F=1.86~2.48, f=32.9~54.2mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Long Zoom1(5J.JAM37.031) F=1.85~2.41, f=52.8~79.1mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Long Zoom2 (5J.JAM37.041) F=1.85~2.48, f=78.5~121.9mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Aspect Ratio</td>\r\n<td style="width: 495px;" align="left">Native 16:10 (5 aspect ratio selectable)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 95px;" rowspan="5" height="95">Throw Ratio</td>\r\n<td style="width: 495px;" align="left">LS2ST3 Wide Fix: 0.778</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">LS2ST1 Wide Zoom: 1.1 ~ 1.3</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">LS2SD2 Standard: 1.54 ~ 1.93</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">LS2LT1 Semi Long: 1.93 ~ 2.9</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">LS2LT2 Long Zoom: 3 ~ 5</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Image Size (Diagonal)</td>\r\n<td style="width: 495px;" align="left">50"~500" (Standard lens)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 95px;" rowspan="5" height="95">Zoom Ratio</td>\r\n<td style="width: 495px;" align="left">LS2ST3 Wide Fix: 1X</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px; width: 495px;" align="left" height="19">LS2ST1 Wide Zoom: 1.18X</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px; width: 495px;" align="left" height="19">LS2SD2 Standard: 1.25X</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px; width: 495px;" align="left" height="19">LS2LT1 Semi Long: 1.5X</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px; width: 495px;" align="left" height="19">LS2LT2 Long Zoom:1.67X</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Lamp Type</td>\r\n<td style="width: 495px;" align="left">N/A</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Lamp Life</td>\r\n<td style="width: 495px;" align="left">Dimming 75000 hr / Eco 38000 hr /&nbsp; Normal 20000 hr</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Projection Offset</td>\r\n<td style="width: 495px;" align="left">N/A</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Resolution Support</td>\r\n<td style="width: 495px;" align="left">Up to WUXGA(1920 x 1200)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Horizontal Frequency</td>\r\n<td style="width: 495px;" align="left">15~102KHz</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Vertical Scan Rate</td>\r\n<td style="width: 495px;" align="left">23~120Hz</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Keystone Adjustment</td>\r\n<td style="width: 495px;" align="left">2D, Vertical &amp; Horizontal &plusmn; 30 degrees</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 380px;" rowspan="20" height="380">Interface</td>\r\n<td align="left">HDMI 1</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">HDMI 2/MHL</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Computer In-1 D-sub in 15pin</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Computer In-2 YBPBR</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Monitor out (D-sub 15pin)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">DVI-D</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">HDBaseT (RJ45 for Display)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">LAN Port(RJ45 for Network control)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Composite Video (RCA)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Audio in(mini jack)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">RCA Audio in L/R</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">RCA Audio out L/R</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">3D Sync out</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">D-sub 9pin (RS232)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">USB Type A (1.5A power)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">USB Type B (Service)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Wire remote in</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Wire remote out</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">IR Receiver</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">12V Trigger</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Dimensions(W x H x D)</td>\r\n<td align="left">470 x 216 x 525mm</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">HDTV Compatibility</td>\r\n<td align="left">720@50P/60P,1080@50i/60i/24p/25p/30p/50p/60p</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Video Compatibility</td>\r\n<td style="width: 495px;" align="left">NTSC/ NTSC4.43/ PAL (Including PAL-M, PAL-N)/ SECAM/ PAL60)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">3D Support and Compatibility</td>\r\n<td style="width: 495px;" align="left">N/A</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Weight</td>\r\n<td style="width: 495px;" align="left">25kg&nbsp; (Lens excluded)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Audible Noise</td>\r\n<td style="width: 495px;" align="left">36/33 dBA (Normal/Economic mode)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Power Supply</td>\r\n<td style="width: 495px;" align="left">AC100 to 240 V, 50 to 60 Hz</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Picture Modes</td>\r\n<td style="width: 495px;" align="left">Bright/ Presentation/ Cinema</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 114px;" rowspan="6" height="114">Accessories (Standard)</td>\r\n<td align="left">Remote Control without Battery&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">VGA(D-sub 15pin) Cable</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Power Cord (by region)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">User Manual CD</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Quick Start Guide</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" align="left" height="19">Warranty Card (by region)</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 19px;" height="19">Warranty</td>\r\n<td style="width: 495px;">Parts 2 year &amp; Lamp 1 year or 1000 hours Warranty</td>\r\n</tr>\r\n<tr>\r\n<td style="height: 20px;" align="left" height="20">Source Link</td>\r\n<td style="width: 495px;" align="left"><a href="http://ap.benq.com/product/projector/lu9235" target="_blank">http://ap.benq.com/product/projector/lu9235</a></td>\r\n</tr>\r\n</tbody>\r\n</table>', 'BenQ_LU9235-500x554.jpg', '20180405091009-1', '', '20180405090905-1', '0', '35000', 0, 0, '1', '2', 0, 'Projection Screen', '70X70 Inch', '', '2018-04-05 15:12:54', '2018-04-05 09:14:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ecomm_temp_cart`
--

CREATE TABLE `ecomm_temp_cart` (
  `session` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ecomm_temp_cart`
--

INSERT INTO `ecomm_temp_cart` (`session`, `product_code`, `qty`) VALUES
('a4fu2ccg6o0mfkg3v9abkrlp0htl5gm4', '20170921090323-127001', 6),
('a4fu2ccg6o0mfkg3v9abkrlp0htl5gm4', '20170921093107-127001', 7),
('h5f3p44lppignspf9a62cprji19vvp6o', '20170921090323-127001', 6),
('tkikea35jqni9p8o6qs8okdkf7mb9inv', '20170921090323-127001', 4),
('tkikea35jqni9p8o6qs8okdkf7mb9inv', '20170921093107-127001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `img_name`, `img_title`, `created_at`, `modified_at`, `status`) VALUES
('20170815064624-127001', 'default.jpg', 'New Slider Image', '2017-08-15 22:46:24', '0000-00-00 00:00:00', 1),
('20170815065017-127001', 'default.jpg', 'fgffjf', '2017-08-15 22:50:17', '0000-00-00 00:00:00', 1),
('20170815065043-127001', '33.jpg', 'dfgdgdg', '2017-08-15 22:50:43', '0000-00-00 00:00:00', 1),
('20170815073342-127001', 'default.jpg', 'dfgdgdg', '2017-08-15 23:33:42', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `cat_id`, `icon`, `status`, `created_at`, `modified_at`) VALUES
('20170921062035-127001', 'Brand Desktop PC', '20170921061655-127001', 'default.jpg', 1, '2017-09-21 16:20:35', NULL),
('20170921062058-127001', 'All in One PC', '20170921061655-127001', 'default.jpg', 1, '2017-09-21 16:20:58', NULL),
('20180113103954-10323736248', 'Antivirus', '20170921061724-127001', 'default.jpg', 1, '2018-01-13 10:39:54', NULL),
('20180113104040-10323736248', 'Operating System', '20170921061724-127001', 'default.jpg', 1, '2018-01-13 10:40:40', NULL),
('20180113104059-10323736248', 'Office & Bussiness', '20170921061724-127001', 'default.jpg', 1, '2018-01-13 10:40:59', NULL),
('20180113110828-10323736248', 'Processor', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:08:28', NULL),
('20180113110956-10323736248', 'Desktop RAM', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:09:56', NULL),
('20180113111100-10323736248', 'Mainboard', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:11:00', NULL),
('20180113111155-10323736248', 'Graphics Card', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:11:55', NULL),
('20180113111216-10323736248', 'Optical Device', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:12:16', NULL),
('20180113111240-10323736248', 'Power Supply', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:12:40', NULL),
('20180113111252-10323736248', 'Casing', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:12:52', NULL),
('20180113111331-10323736248', 'Cooling Fan', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:13:31', NULL),
('20180113111345-10323736248', 'UPS', '20170921061818-127001', 'default.jpg', 1, '2018-01-13 11:13:45', NULL),
('20180113111435-10323736248', 'External HDD', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:14:35', NULL),
('20180113111456-10323736248', 'Internal HDD', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:14:56', NULL),
('20180113111519-10323736248', 'SSD', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:15:19', NULL),
('20180113111550-10323736248', 'Pen Drive', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:15:50', NULL),
('20180113111610-10323736248', 'Memory Card', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:16:10', NULL),
('20180113111627-10323736248', 'Card Reader', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:16:27', NULL),
('20180113111717-10323736248', 'HDD Case', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:17:17', NULL),
('20180113111732-10323736248', 'Network Storage', '20180113103128-10323736248', 'default.jpg', 1, '2018-01-13 11:17:32', NULL),
('20180113111859-10323736248', 'DSLR Camera', '20180113103223-10323736248', 'default.jpg', 1, '2018-01-13 11:18:59', NULL),
('20180113111918-10323736248', 'Camera Accessories', '20180113103223-10323736248', 'default.jpg', 1, '2018-01-13 11:19:18', NULL),
('20180113111940-10323736248', ' Compact Digital Camera', '20180113103223-10323736248', 'default.jpg', 1, '2018-01-13 11:19:40', NULL),
('20180113111954-10323736248', 'Camera Lens', '20180113103223-10323736248', 'default.jpg', 1, '2018-01-13 11:19:54', NULL),
('20180113112112-10323736248', 'Phone Set ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:21:12', NULL),
('20180113112134-10323736248', 'Projector', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:21:34', NULL),
('20180113112148-10323736248', ' Projector Screen', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:21:48', NULL),
('20180113112213-10323736248', ' DVR/NVR', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:22:13', NULL),
('20180113112232-10323736248', ' Photocopier ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:22:32', NULL),
('20180113112246-10323736248', 'Fax Machine', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:22:46', NULL),
('20180113112256-10323736248', ' Barcode Scanner', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:22:56', NULL),
('20180113112345-10323736248', 'Pole Display', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:23:45', NULL),
('20180113112415-10323736248', ' Money Counter & Binder ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:24:15', NULL),
('20180113112431-10323736248', 'Cash Register Machine', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:24:31', NULL),
('20180113112443-10323736248', ' Access Control', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:24:43', NULL),
('20180113112515-10323736248', 'CC Camera ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:25:15', NULL),
('20180113112538-10323736248', 'IP Camera ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:25:38', NULL),
('20180113112551-10323736248', 'Presenter ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:25:51', NULL),
('20180113112604-10323736248', 'Smart Door Bell ', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:26:04', NULL),
('20180113112616-10323736248', 'Paper Shredder', '20180113103246-10323736248', 'default.jpg', 1, '2018-01-13 11:26:16', NULL),
('20180113112650-10323736248', 'Document Printer ', '20180113103305-10323736248', 'default.jpg', 1, '2018-01-13 11:26:50', NULL),
('20180113112704-10323736248', 'Card Printer', '20180113103305-10323736248', 'default.jpg', 1, '2018-01-13 11:27:04', NULL),
('20180113112720-10323736248', ' Label Printer', '20180113103305-10323736248', 'default.jpg', 1, '2018-01-13 11:27:20', NULL),
('20180113112735-10323736248', ' POS Printer', '20180113103305-10323736248', 'default.jpg', 1, '2018-01-13 11:27:35', NULL),
('20180113112746-10323736248', ' Barcode Printer', '20180113103305-10323736248', 'default.jpg', 1, '2018-01-13 11:27:46', NULL),
('20180113112840-10323736248', 'Router ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:28:40', NULL),
('20180113112858-10323736248', 'Network Accessories', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:28:58', NULL),
('20180113112918-10323736248', ' Access Point ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:29:18', NULL),
('20180113112936-10323736248', 'USB HUB', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:29:36', NULL),
('20180113112957-10323736248', ' Switch ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:29:57', NULL),
('20180113113011-10323736248', 'LAN Card ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:30:11', NULL),
('20180113113026-10323736248', 'Edge Modem ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:30:26', NULL),
('20180113113040-10323736248', 'FAX Modem ', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:30:40', NULL),
('20180113113051-10323736248', 'UTP Cable', '20180113103354-10323736248', 'default.jpg', 1, '2018-01-13 11:30:51', NULL),
('20180113113151-10323736248', 'Keyboard ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:31:51', NULL),
('20180113113208-10323736248', 'Mouse ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:32:08', NULL),
('20180113113228-10323736248', 'Trackpad ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:32:28', NULL),
('20180113113244-10323736248', 'Power Strip ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:32:44', NULL),
('20180113113257-10323736248', 'Power Bank', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:32:57', NULL),
('20180113113340-10323736248', 'Gaming ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:33:40', NULL),
('20180113113400-10323736248', 'Cable & Converter ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:34:00', NULL),
('20180113113419-10323736248', 'Kits', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:34:19', NULL),
('20180113113436-10323736248', ' Power & Charger ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:34:36', NULL),
('20180113113450-10323736248', 'Adapter ', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:34:50', NULL),
('20180113113502-10323736248', 'Bags', '20180113103432-10323736248', 'default.jpg', 1, '2018-01-13 11:35:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_setup`
--

CREATE TABLE `system_setup` (
  `id` int(10) NOT NULL,
  `shop_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_setup`
--

INSERT INTO `system_setup` (`id`, `shop_name`, `email`, `mobile_no`, `address`, `owner`, `logo`, `status`) VALUES
(2, 'LITS | Total IT Solutions Online Shop', 'selimbd_07@yahoo.com', '+8801730 610242 | +88 01911 192280', 'LITS | total IT solution<br>\r\nKhan Mansion | 6th Floor | 28/A-5 | Room No. 7-F<br>\r\nToynbee Circular Road | Motijheel C/A | Dhaka- 1000.<br>\r\nCell: +8801730 610242 | +88 01911 192280<br>\r\nE-mail: selimbd_07@yahoo.com, www.lits-bd.com ', 'Engr. Selim Reza', '122.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `email`, `phone`, `designation`, `photo`, `created_at`, `modified_at`) VALUES
('2', 'Engr. Selim Reza', 'newuser@gmail.com', '456456464', 'Managing Director', NULL, '2017-09-16 12:08:14', NULL),
('20170711072506-2', 'S.M. Shaidur Rahman', 'raton98083@gmail.com', '+880 1716787416', 'Web Developer', 'default.png', '2017-07-06 04:11:40', NULL),
('3', 'Shohid Hasan Shuvo', 'shuvo2014ovi@gmail.com', '01732827536', 'Web Desinger', NULL, '2018-01-13 12:24:58', NULL),
('4', 'Md.Samrat Hossain', 'samratlits@gmail.com', '01731942143', 'Hardware Engineer', NULL, '2018-01-13 12:24:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `designation`, `work_place`, `password`, `role`, `photo`, `created_at`, `modified_at`) VALUES
('2', 'new user', 'newuser@gmail.com', 'user', '', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '2017-09-16 12:08:14', NULL),
('20170711072506-2', 'Mr. Admin', 'admin@gmail.com', 'Supper Admin', 'Rajshahi', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'default.png', '2017-07-06 04:11:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecomm_customers`
--
ALTER TABLE `ecomm_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `ecomm_orders`
--
ALTER TABLE `ecomm_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `ecomm_order_details`
--
ALTER TABLE `ecomm_order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `ecomm_products`
--
ALTER TABLE `ecomm_products`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `ecomm_temp_cart`
--
ALTER TABLE `ecomm_temp_cart`
  ADD PRIMARY KEY (`session`,`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_setup`
--
ALTER TABLE `system_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecomm_customers`
--
ALTER TABLE `ecomm_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `ecomm_orders`
--
ALTER TABLE `ecomm_orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `system_setup`
--
ALTER TABLE `system_setup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
