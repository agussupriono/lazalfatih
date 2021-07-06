-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table antoweb.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `slug_admin` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.admins: ~0 rows (approximately)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`admin_id`, `username`, `slug_admin`, `password`, `email`) VALUES
	(1, 'admin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'contact@compose.com');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table antoweb.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_blog` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `bs_class` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.blogs: ~20 rows (approximately)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`blog_id`, `user_id`, `category_id`, `title`, `slug_blog`, `content`, `image`, `bs_class`, `date_post`, `status`, `keywords`) VALUES
	(2, 1, 2, 'test111', '22-test111', '<p>testing</p>', 'property12.jpg', '', '2018-11-12 14:19:48', 'publish', 'testing'),
	(3, 1, 2, 'cara membuat anak', 'cara-membuat-anak', '<p>awdawd</p>', '8645-c-programming-1366x768-computer-wallpaper.jpg', '', '2017-02-16 15:26:28', 'publish', 'Cara membuat anak'),
	(5, 1, 2, 'sfsefsef1', '5-sfsefsef1', '<p>dsdfsdf</p>', '1385096_445510758888115_1423375145_n.jpg', '', '2017-02-16 15:45:03', 'draft', 'ssdvsfs'),
	(6, 1, 2, 'Apakah ahok akan menang?', 'apakah-ahok-akan-menang', '<p>Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor</p>', '3D-Scenery-HD-Macbook-Wallpaper4.jpg', '', '2017-02-17 16:20:08', 'publish', 'ahok kalah'),
	(7, 1, 3, 'testing', 'testing', '<p>test</p>', '114845.jpg', '', '2017-02-23 12:47:56', 'publish', 'test'),
	(8, 1, 3, 'adawda', 'adawda', '<p>awdawd</p>', '114846.jpg', '', '2017-02-23 13:31:47', 'publish', 'awdawd'),
	(9, 1, 2, 'dawdawd', 'dawdawd', '<p>awdawd</p>', '29006-art_alphacoders_com8.jpg', '', '2017-02-24 14:17:20', 'publish', 'awdaw'),
	(10, 1, 2, 'awdawd', 'awdawd', '<p>awdawd</p>', '29006-art_alphacoders_com9.jpg', '', '2017-02-24 14:21:10', 'publish', 'awdawd'),
	(11, 1, 4, 'bisnis1', '11-bisnis1', '<p>Testing bisnis PT. Nusa Kirana, RE ke satu</p>', '', 'fa fa-university', '2018-11-10 15:45:29', 'publish', 'Nusa Kirana Bisnis'),
	(12, 1, 4, 'bisnis2', 'bisnis2', '<p>Testing bisnis PT. Nusa Kirana, RE ke dua</p>', '', 'fa fa-diamond', '2018-11-10 15:46:10', 'publish', 'Nusa Kirana Bisnis'),
	(13, 1, 4, 'bisnis3', 'bisnis3', '<p>Bisnis PT. Nusa Kirana, RE ke tiga</p>', '', 'fa fa-road', '2018-11-10 15:47:02', 'publish', 'Nusa Kirana Bisnis'),
	(14, 1, 5, 'Tes', '22-tes', '<p style="text-align: center;"><strong>tesssssssssssssss</strong></p>\r\n<p style="text-align: left;">Test</p>', 'property1.jpg', '', '2018-11-19 12:58:55', 'publish', 'Nusa Kirana Subsdiaries'),
	(15, 1, 5, 'Rizal', 'rizal', '<p>Rizal TOHA</p>', 'property2.jpg', '', '2018-11-12 13:21:27', 'publish', 'Nusa Kirana Subsdiaries'),
	(16, 1, 5, 'Toha', 'toha', '<p>NUSA KIRANA testing</p>', 'property3.jpg', '', '2018-11-12 13:25:06', 'publish', 'Nusa Kirana Subsdiaries'),
	(17, 1, 6, 'Rizal', '19-rizal', '<p>Rizal Toha</p>', 'property11.jpg', '', '2018-11-12 13:40:58', 'publish', 'Nusa Kirana Project'),
	(18, 1, 6, 'Lukman', '19-lukman', '<p>Bang LUKMAN BARON</p>', 'property21.jpg', '', '2018-11-12 13:41:35', 'publish', 'Nusa Kirana Project'),
	(19, 1, 6, 'Dicky', '19-dicky', '<p>Bang Dicky Zaelani</p>', 'property31.jpg', '', '2018-11-12 13:42:00', 'publish', 'Nusa Kirana Project'),
	(20, 1, 6, 'Zainal', '20-zainal', '<p>Pak Zainal Abidin</p>', 'property4.jpg', '', '2018-11-12 13:43:39', 'publish', 'Nusa Kirana Project'),
	(21, 1, 6, 'Agus', 'agus', '<p>Pak AGUS SUPRIONO</p>', 'property5.jpg', '', '2018-11-12 13:44:44', 'publish', 'Nusa Kirana Project'),
	(22, 1, 6, 'Anonymous', 'anonymous', '<p>HACKER atau ANONYMOUS<em><strong>!!!</strong></em></p>', 'property6.jpg', '', '2018-11-12 13:45:12', 'publish', 'Nusa Kirana Project');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table antoweb.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `slug_category` varchar(225) NOT NULL,
  `order_category` int(11) NOT NULL,
  `category_description` text NOT NULL,
  `date_category` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.categories: ~5 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`category_id`, `user_id`, `category_name`, `slug_category`, `order_category`, `category_description`, `date_category`) VALUES
	(2, 1, 'News', '2-news', 1, 'News Update', '2017-02-15 21:31:39'),
	(3, 1, 'Politik', 'politik', 2, 'Seputar Politik', '2017-02-23 12:47:26'),
	(4, 1, 'Our Business', 'our-business', 3, 'Content for Our Business Menus', '2018-11-10 14:24:44'),
	(5, 1, 'Subsidiaries', 'subsidiaries', 4, 'Content for Subsidiaries Menus', '2018-11-12 11:04:38'),
	(6, 1, 'Project', 'project', 5, 'Content for Project Menus', '2018-11-12 13:38:06');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table antoweb.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(225) NOT NULL,
  `slug_client` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.clients: ~2 rows (approximately)
DELETE FROM `clients`;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`client_id`, `user_id`, `client_name`, `slug_client`, `image`, `website`, `date`, `status`) VALUES
	(2, 1, 'Hutan', 'hutan', '29006-art_alphacoders_com6.jpg', 'hutan.com', '2017-02-16 16:59:09', 'publish'),
	(3, 1, 'C Programming', 'c-programming', '8645-c-programming-1366x768-computer-wallpaper1.jpg', 'http://indrarukmana.com', '2017-02-23 17:15:17', 'publish');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table antoweb.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.comments: ~6 rows (approximately)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`comment_id`, `blog_id`, `name`, `email`, `website`, `message`, `date_comment`) VALUES
	(1, 0, 'Indra', 'indrkmna@gmail.com', 'http://indrarukmana.com', 'testing', '2017-02-20 10:54:40'),
	(2, 0, 'awda', 'wdqdq@gmail.com', 'http://indrarukmana.com', 'qwdq', '2017-02-20 10:55:42'),
	(3, 2, 'rats', 'rats123@gmail.com', 'http://indrarukmana.com', 'rats', '2017-02-20 10:56:37'),
	(4, 2, 'xaxsa', 'scascasc@gmail.com', 'http://indrarukmana.com', 'ascasc', '2017-02-20 11:07:27'),
	(5, 2, 'adwd', 'awda@gmail.com', 'http://indrarukmana.com', 'dawd', '2017-02-20 11:20:42'),
	(6, 3, 'awd', 'apoyaja@gmail.com', 'http://indrarukmana.com', 'qwdqwd', '2017-02-24 14:22:53');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table antoweb.config
CREATE TABLE IF NOT EXISTS `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `google_plus` varchar(225) NOT NULL,
  `pinterest` varchar(225) NOT NULL,
  `theme` varchar(225) NOT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.config: ~0 rows (approximately)
DELETE FROM `config`;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`config_id`, `nameweb`, `email`, `keywords`, `google_maps`, `logo`, `icon`, `about`, `address`, `city`, `zip_code`, `phone_number`, `metatext`, `fax`, `facebook`, `twitter`, `instagram`, `google_plus`, `pinterest`, `theme`, `color`) VALUES
	(1, 'Anto Website', 'agus.supriono@gmail.com', 'Software developer, web developer, IT Consultant', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.780606179473!2d106.81194969999999!3d-6.6226642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c118e7fe877e90a!2sLippo+Plaza+Ekalokasari+Bogor!5e0!3m2!1sid!2sid!4v1482767277891', 'logo-hosting.png', 'apple-touch-icon.png', '<div class="row text-center">\r\n<div class="col-md-4" data-sr="enter top over 1s, wait 0.3s, move 24px, reset">\r\n<h3>Responsive Design</h3>\r\n<div class="colored-line-small-center">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n<div class="col-md-4 middle" data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset">\r\n<h3>Creative Design</h3>\r\n<div class="colored-line-small-center">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n<div class="col-md-4" data-sr="enter top over 1s, wait 0.3s, move 24px, reset">\r\n<h3>Mailchimp Ready</h3>\r\n<div class="colored-line-small-center">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n</div>', 'Cikoko Pancoran', 'Jakarta Selatan', '12780', '081284850965', 'AS Production Team - Your Software & Web Developer Partner', '081284850965', 'https://www.facebook.com/indrkmna/', '', 'https://www.instagram.com/indra.97/', '', '', 'default', 'rgba(52,165,177,1)');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;

-- Dumping structure for table antoweb.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.contacts: ~2 rows (approximately)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`message_id`, `name`, `email`, `subject`, `messages`, `date`) VALUES
	(1, 'indra', 'indrkmna@gmail.com', 'testign', 'testing', '2017-02-24 09:56:55'),
	(3, 'testing', 'testing@gmail.com', 'testing', 'testing', '2017-02-24 10:00:30');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table antoweb.downloads
CREATE TABLE IF NOT EXISTS `downloads` (
  `download_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `slug_download` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_description` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.downloads: ~3 rows (approximately)
DELETE FROM `downloads`;
/*!40000 ALTER TABLE `downloads` DISABLE KEYS */;
INSERT INTO `downloads` (`download_id`, `user_id`, `file_name`, `slug_download`, `file`, `date_upload`, `file_description`, `status`) VALUES
	(3, 1, 'Template', '3-template', '153-P101.pdf', '2017-02-16 20:19:05', 'asas', 'publish'),
	(4, 1, 'PDF 1', '4-pdf-1', '153-P09.pdf', '2017-02-17 15:03:08', 'test', 'draft'),
	(5, 1, 'Matematika (Matrix)', 'matematika-matrix', '153-P091.pdf', '2017-03-06 19:29:22', 'Silahkan download materi ini untuk di pelajari', 'publish');
/*!40000 ALTER TABLE `downloads` ENABLE KEYS */;

-- Dumping structure for table antoweb.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gallery_name` varchar(225) NOT NULL,
  `slug_gallery` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `gallery_description` text NOT NULL,
  `position` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.galleries: ~6 rows (approximately)
DELETE FROM `galleries`;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`gallery_id`, `user_id`, `gallery_name`, `slug_gallery`, `image`, `gallery_description`, `position`, `url`, `date`, `status`) VALUES
	(8, 1, 'Hi Welcome to Dealer Hino Jabodetabek', '14-hi-welcome-to-dealer-hino-jabodetabek', 'banner1.jpeg', 'Welcome to Dealer Hino Jabodetabek', 'slider', '', '2019-05-18 00:44:23', 'publish'),
	(9, 1, 'Hi Welcome to Dealer Hino Jabodetabek', '14-hi-welcome-to-dealer-hino-jabodetabek', 'banner2.jpeg', 'Dealer Hino Jabodetabek', 'slider', '', '2019-05-18 00:44:51', 'publish'),
	(10, 1, 'Hi Welcome to Dealer Hino Jabodetabek', '14-hi-welcome-to-dealer-hino-jabodetabek', 'banner3.jpeg', 'Dealer Hino Jabodetabek', 'slider', '', '2019-05-18 00:45:15', 'publish'),
	(12, 1, 'We Are Anon!!!', 'we-are-anon', '1385096_445510758888115_1423375145_n2.jpg', 'Testing', 'profil', '', '2017-02-17 20:58:14', 'publish'),
	(13, 1, 'Hutan', '14-hutan', '29006-art_alphacoders_com7.jpg', 'hutan', 'harga', '', '2017-03-07 15:51:02', 'publish'),
	(14, 1, 'Adaw', 'adaw', '361783.jpg', 'awdawd', 'footer', '', '2017-02-24 13:36:05', 'publish');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;

-- Dumping structure for table antoweb.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `menu_image` varchar(200) DEFAULT NULL,
  `menu_image_hover` varchar(200) DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dates` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.menus: ~9 rows (approximately)
DELETE FROM `menus`;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`menu_id`, `menu_name`, `menu_url`, `menu_image`, `menu_image_hover`, `parent_menu_id`, `status`, `dates`) VALUES
	(1, 'Home', 'index.php', NULL, NULL, 0, 'publish', '2018-09-08 23:28:56'),
	(2, 'About Us', '#about', NULL, NULL, 0, 'publish', '2018-09-08 23:28:56'),
	(3, 'Subsidiaries', '#subsidiaries', NULL, NULL, 0, 'publish', NULL),
	(4, 'Our Business', '#ourbusiness', NULL, NULL, 0, 'publish', NULL),
	(5, 'Projects', '#property', NULL, NULL, 0, 'publish', NULL),
	(6, 'CSR', '#csr', NULL, NULL, 0, 'publish', '2018-09-08 23:28:56'),
	(7, 'News & Evens', '#news', NULL, NULL, 0, 'publish', '2018-09-08 23:28:56'),
	(8, 'Contact Us', '#contact', NULL, NULL, 0, 'publish', '2018-09-08 23:28:56'),
	(9, 'Projects 1', '#property', NULL, NULL, 5, 'publish', NULL),
	(10, 'Proj1 Detail', '#test', '', NULL, 9, 'publish', '2021-06-20 16:32:37'),
	(11, 'Yuhu', '#yuhu', '', NULL, 0, 'publish', '2021-06-20 23:18:40');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table antoweb.price
CREATE TABLE IF NOT EXISTS `price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `price_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `with_service` varchar(100) NOT NULL,
  `no_with_service` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.price: ~6 rows (approximately)
DELETE FROM `price`;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` (`price_id`, `user_id`, `price_name`, `price`, `headline`, `description`, `with_service`, `no_with_service`, `status`, `date`) VALUES
	(4, 1, 'Industri Setup Awal', '90.000/3 Bulan/ Unit', '', '', 'Free', '90.000/3 Bulan/ Unit', 'publish', '2017-03-07 07:50:38'),
	(5, 1, 'Industri Kecil', '500.000/ Unit', '', '', 'Free', '270.000/3 Bulan/ Unit', 'publish', '2017-03-07 07:33:55'),
	(6, 1, 'Industri Menengah', '750.000/ Unit', '', '', '270.000/3 Bulan/ Unit', 'Call', 'publish', '2017-03-07 07:34:29'),
	(7, 1, 'Industri Besar', 'Call', '', '', 'Call', 'Call', 'publish', '2017-03-07 07:34:49'),
	(8, 1, 'Pemerintah', 'Call', '', '', 'Call', 'Call', 'publish', '2017-03-07 07:35:01'),
	(9, 0, '', '', 'awdawd', '', '', '', '', '2017-03-07 15:41:35');
/*!40000 ALTER TABLE `price` ENABLE KEYS */;

-- Dumping structure for table antoweb.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `slug_product` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `product_description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.products: ~3 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `user_id`, `product_name`, `slug_product`, `image`, `product_description`, `date`, `status`) VALUES
	(2, 1, 'Anonymous1', '5-anonymous1', '29006-art_alphacoders_com4.jpg', 'test', '2017-02-24 14:00:28', 'publish'),
	(4, 1, 'tefesefs', 'tefesefs', '361782.jpg', 'sefsef', '2017-02-16 16:34:49', 'publish'),
	(5, 1, 'Product 1', 'product-1', '3D-Scenery-HD-Macbook-Wallpaper5.jpg', 'Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 ', '2017-02-17 16:27:40', 'publish');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table antoweb.themes
CREATE TABLE IF NOT EXISTS `themes` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(100) DEFAULT NULL,
  `theme_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`theme_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table antoweb.themes: ~1 rows (approximately)
DELETE FROM `themes`;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` (`theme_id`, `theme_name`, `theme_code`) VALUES
	(1, 'Default', 'default');
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;

-- Dumping structure for table antoweb.types
CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_name` varchar(225) NOT NULL,
  `slug_type` varchar(225) NOT NULL,
  `order_type` int(11) NOT NULL,
  `type_description` text NOT NULL,
  `date_type` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table antoweb.types: ~2 rows (approximately)
DELETE FROM `types`;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`type_id`, `user_id`, `type_name`, `slug_type`, `order_type`, `type_description`, `date_type`) VALUES
	(4, 1, 'testing', '', 1, 'testing type', '2017-02-16 20:56:38'),
	(5, 1, 'Odol', 'odol', 2, 'odol', '2017-02-16 20:57:21');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
