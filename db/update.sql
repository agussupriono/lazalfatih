ALTER TABLE `config`
	ADD COLUMN `color` VARCHAR(225) NOT NULL AFTER `theme`;

INSERT INTO `categories` (`category_id`, `user_id`, `category_name`, `slug_category`, `order_category`, `category_description`, `date_category`) VALUES (5, 1, 'Subsidiaries', 'subsidiaries', 4, 'Content for Subsidiaries Menus', '2018-11-12 11:04:38');
INSERT INTO `categories` (`category_id`, `user_id`, `category_name`, `slug_category`, `order_category`, `category_description`, `date_category`) VALUES (6, 1, 'Project', 'project', 5, 'Content for Project Menus', '2018-11-12 13:38:06');

DELETE FROM `blogs`;

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
	(14, 1, 5, 'Tes', '14-tes', '<p>tesssssssssssssss</p>', 'property1.jpg', '', '2018-11-12 13:20:59', 'publish', 'Nusa Kirana Subsdiaries'),
	(15, 1, 5, 'Rizal', 'rizal', '<p>Rizal TOHA</p>', 'property2.jpg', '', '2018-11-12 13:21:27', 'publish', 'Nusa Kirana Subsdiaries'),
	(16, 1, 5, 'Toha', 'toha', '<p>NUSA KIRANA testing</p>', 'property3.jpg', '', '2018-11-12 13:25:06', 'publish', 'Nusa Kirana Subsdiaries'),
	(17, 1, 6, 'Rizal', '19-rizal', '<p>Rizal Toha</p>', 'property11.jpg', '', '2018-11-12 13:40:58', 'publish', 'Nusa Kirana Project'),
	(18, 1, 6, 'Lukman', '19-lukman', '<p>Bang LUKMAN BARON</p>', 'property21.jpg', '', '2018-11-12 13:41:35', 'publish', 'Nusa Kirana Project'),
	(19, 1, 6, 'Dicky', '19-dicky', '<p>Bang Dicky Zaelani</p>', 'property31.jpg', '', '2018-11-12 13:42:00', 'publish', 'Nusa Kirana Project'),
	(20, 1, 6, 'Zainal', '20-zainal', '<p>Pak Zainal Abidin</p>', 'property4.jpg', '', '2018-11-12 13:43:39', 'publish', 'Nusa Kirana Project'),
	(21, 1, 6, 'Agus', 'agus', '<p>Pak AGUS SUPRIONO</p>', 'property5.jpg', '', '2018-11-12 13:44:44', 'publish', 'Nusa Kirana Project'),
	(22, 1, 6, 'Anonymous', 'anonymous', '<p>HACKER atau ANONYMOUS<em><strong>!!!</strong></em></p>', 'property6.jpg', '', '2018-11-12 13:45:12', 'publish', 'Nusa Kirana Project');
