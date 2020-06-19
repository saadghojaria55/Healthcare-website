-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 09:58 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snt`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `content`) VALUES
(1, '<p style=\"margin-bottom: 30px;\">SNT Distribution Private Ltd is known to be a leading distributor for Medical Imaging Products of Sony India Private Ltd. having branches across India in Bangalore, Chennai, Delhi, Kolkata, Mumbai & Telangana. The product range offered by us includes Medical Grade Monitors, Thermal Printers and Medical Grade Video Recorders which are manufactured by Sony Corporation, Japan.\n\n</p>\n\n\n\n				<p>We are the authorised distributors for Sony Medical division in India. Sony is known for its innovation across the imaging workflow, from leading 4K and 3D technologies to the very latest in IP conversion capabilities .</p>\n\n'),
(2, 'Surgical Monitors Lorem Ipsum is simply dummy text of the printing and typeseasdasdtting industry. Lorem Ipsum has been the industrys standard dummy text ever s'),
(3, 'Surgical Monitorssa'),
(4, 'Network Monitors'),
(5, 'Network Monitors Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever s'),
(6, 'Networking Cameras'),
(7, 'Network CAmeras Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever s');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image_source` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image_source`, `caption`, `link`) VALUES
(1, 'surgical-imaging-monitors', 'product/1.jpg', 'SURGICAL IMAGING MONITORS', 'category-1/surgical-imaging-monitors.php'),
(2, 'video-processing', 'product/2.jpg', 'VIDEO PROCESSING', 'category-2/video-processing.php'),
(3, 'wireless-video', 'product/3.jpg', 'WIRELESS VIDEO', 'category-3/wireless-video.php'),
(4, 'thermal-printers', 'product/4.png', 'THERMAL PRINTERS', 'category-4/thermal-printers.php'),
(5, 'visual-imaging-cameras', 'product/5.jpg', 'VISUAL IMAGING CAMERAS', 'category-5/visual-imaging-cameras.php'),
(6, 'radiology-monitors', 'product/6.jpg', 'RADIOLOGY MONITORS', 'category-6/radiology-monitors.php'),
(7, 'medical-print-media', 'product/7.jpeg', 'MEDICAL PRINT MEDIA', 'category-7/medical-print-media.php'),
(8, 'disinfectants', 'product/8.jpg', 'DISINFECTANTS', 'category-8/disinfectants.php'),
(9, 'medical-grade-recorders', 'product/9.jpg', 'MEDICAL GRADE RECORDERS', 'category-9/medical-grade-recorders.php'),
(10, 'medical-panel-pc', 'product/10.jpg', 'MEDICAL PANEL PC', 'category-10/medical-panel-pc.php'),
(11, 'medical-grade-tablet', 'product/11.jpg', 'MEDICAL GRADE TABLET', 'category-11/medical-grade-tablet.php');

-- --------------------------------------------------------

--
-- Table structure for table `featured_product`
--

CREATE TABLE `featured_product` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desp` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_product`
--

INSERT INTO `featured_product` (`id`, `image`, `desp`, `heading`) VALUES
(6, '4.jpeg', '', 'EVI-D100'),
(7, '1.jpg', 'asdas', 'SDA'),
(9, '1.jpg', '', ''),
(11, '3.jpg', 'sad', 'sad'),
(12, '1.jpg', 'sdas', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(2) NOT NULL,
  `user` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `user`, `email`, `company`, `number`, `interest`, `message`) VALUES
(52, 'sasd', 'oosadasd@gmail.com', 'sda', 34242, 'fdsf', 'dsfsf'),
(53, 'sharik', 'abc@abc.com', 'xyz', 3248388, 'iadasd', 'asdsahdasiod'),
(54, 'asd', 'asd@g.com', 'dasa', 234, 'asd', 'sadasd'),
(55, 'asdd', '\\', 'sad', 45643, '5sdfa', 'asdsad'),
(56, 'asd', 'saadgigani@ymail.com', 'sda', 45643, '5sdfa', 'sadasd'),
(57, 'ffds', 'saadgigani@ymail.com', 'sd', 23432, 'dsa', 'asdsad'),
(58, 'asd', 'saadgigani@ymail.com', 'sd', 0, '45', 'asdsad'),
(59, 'sadad', 'asd@g.com', 'sad', 45643, '5sdfa', 'sadsad'),
(60, 'sadas', 'asd@g.com', 'asd', 45643, '5sdfa', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `fp_primary`
--

CREATE TABLE `fp_primary` (
  `id` int(2) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fp_primary`
--

INSERT INTO `fp_primary` (`id`, `image`) VALUES
(6, '1.jpg'),
(7, '2.jpeg'),
(8, '3.jpg'),
(9, '4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `desp` text NOT NULL,
  `points` int(11) NOT NULL,
  `cat_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `label`, `desp`, `points`, `cat_tag`) VALUES
(1, 'Overview', '<p>The Nurse Tablet</p>\r\n\r\n<p>The Medical grade Tablet Baaske Docpad? 10c incl. Keyboard is your reliable buddy for day-to-day work which cannot be harmed by knocks, drops and shocks. The Docpad? 10c is also splash-proof in accordance to the IP52 standard. Take advantage of the flexibility offered by this tablet. It combines the benefits of a handy tablet with the convenience of a notebook keyboard. Answer your emails in everyday life or make notes. Wherever you are, all information will be available with the Baaske Docpad? 10c.</p>\r\n\r\n<p>fast</p>\r\n\r\n<p>fanless</p>\r\n\r\n<p>waterproof</p>\r\n\r\n<p>medical grade</p>', 3, 'cat_11');

-- --------------------------------------------------------

--
-- Table structure for table `primary_nav`
--

CREATE TABLE `primary_nav` (
  `id` int(2) NOT NULL,
  `nav_heading` varchar(100) NOT NULL,
  `href` varchar(100) NOT NULL,
  `active` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primary_nav`
--

INSERT INTO `primary_nav` (`id`, `nav_heading`, `href`, `active`) VALUES
(1, 'Home', 'snt1.php', 1),
(2, 'About Us', 'about-us.php', 1),
(3, 'Product', 'product.php', 1),
(4, 'Contact Us', 'contact-us.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `cat_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `tag`, `caption`, `img_src`, `cat_tag`) VALUES
(1, 'LMD-1530MD', '15-inch WXGA 2D LCD medical monitor', '1.jpeg', 'cat_1'),
(2, 'LMD-2435MD', '15-inch WXGA 2D LCD medical monitor', '2.jpeg', 'cat_1'),
(3, 'LMD-2735MD', '27-inch full HD 2D LCD medical monitor', '3.jpeg', 'cat_1'),
(4, '90K0084', 'Value Endoscopy Visualization', '4.jpg', 'cat_1'),
(5, 'LMD-2451MT', '24-inch Full HD 3D LCD medical monitor', '5.jpg', 'cat_1'),
(6, 'LMD-X550MT', '55-inch 4K 3D/2D LCD medical monitor', '6.jpg', 'cat_1'),
(7, 'LMD-X310MT', '31-inch 4K 3D/2D LCD medical monitor', '7.jpg', 'cat_1'),
(8, 'ScaleOR&trade; Video Scaling\r\n', 'Medical-Grade Video Management System', '1.jpg', 'cat_2'),
(9, 'ConductOR&trade; Video ', 'Medical-Grade Video Scaling', '2.jpg', 'cat_2'),
(10, 'ExpandOR&trade; HD Video ', 'Secure Multi-Node Video Streaming', '3.jpg', 'cat_2'),
(11, 'ZeroWire&reg; G2 Wireless Imaging\r\n', 'ZeroWire G2', '1_1.jpg', 'cat_3'),
(12, 'UP-X898MD\r\n', 'A6 Analog and Digital Black and White Thermal Printer', '1_4(1).jpeg', 'cat_4'),
(13, 'UP-25MD\r\n', 'A6 Analog Color Printer', '1_4(2).jpeg', 'cat_4'),
(14, 'UP-D25MD', 'A6 Digital Color Printer', '1_4(3).jpeg', 'cat_4'),
(15, 'UP-991AD\r\n', 'A4 Analog and Digital Printer for Black and White Thermal Paper and Blue Film', '1_4(4).jpeg', 'cat_4'),
(16, 'UP-971AD\r\n', 'A4 Analog and Digital Printer for Black and White Thermal Paper', '1_4(5).jpeg', 'cat_4'),
(18, 'EVI-D90P', 'EVI-D90/D90P(PAL)', '5(1).jpg', 'cat_5'),
(19, 'EVI-D80P', 'EVI-D80/D80P(PAL)', '5(8).jpg', 'cat_5'),
(20, 'EVI-D80P', 'EVI-D80/D80P(PAL)', '3.jpg', 'cat_5'),
(21, 'EVI-D70P', 'EVI-D70/D70P(PAL)', '5(6).jpg', 'cat_5'),
(22, 'SRG-360SHE\r\n', 'Capture and share high-quality Full HD images.', '5(5).jpg', 'cat_5'),
(23, 'EVI-HD3V\r\n', 'EVI-HD3V all-in-one Pan/Tilt Zoom (PTZ) Colour Video Camera from Sony. ', '5(4).jpg', 'cat_5'),
(24, 'SRG-300SE', 'Full HD remotely controlled PTZ colour video camera with IP streaming', '5(3).jpg', 'cat_5'),
(25, 'EVI-D100P', 'The EVI-D100P is ideal for video conferencing applications', '5(2).jpg', 'cat_5'),
(26, 'SRG-120DH', 'Full HD remotely operated PTZ camera', '5(1).jpeg', 'cat_5'),
(27, 'KT-D213Q5E', '14-bit Digital Mammography & Modality Imaging Solutions', '6(1).jpg', 'cat_6'),
(28, 'KT-D213U8B', '14-bit Digital Mammography & Modality Imaging Solutions', '6(2).jpg', 'cat_6'),
(29, 'KT-D213V5E', '14-bit Digital Mammography & Modality Imaging Solutions', '6(3).jpg', 'cat_6'),
(30, 'UPC-21L', 'A6 Small-size colour print pack', '7(3).jpg', 'cat_7'),
(31, 'UPP-110HG', 'A6 width B&W High Glossy print media (type V)', '7(3).jpeg', 'cat_7'),
(32, 'UPP-84S', 'Black and white thermal print media for UP-D711MD medical printer', '7(1).jpeg', 'cat_7'),
(33, 'UPP-84HG', 'High gloss black/white thermal print media for UP-D711MD printer', '7(2).jpeg', 'cat_7'),
(34, 'NDP Air Total ', 'Indicated for terminal disinfection of critical areas', '8.jpg', 'cat_8'),
(35, 'HVO-500MD', 'HD Medical Video Recorder, USB/NAS', '9(1).jpg', 'cat_9'),
(36, 'HVO-500MD', 'HD Medical Video Recorder, DVD/USB/NAS', '9(2).jpg', 'cat_9'),
(37, 'HVO-1000MD\r\n', 'HD Medical Video Recorder designed to record pristine video and images', '9(6).jpg', 'cat_9'),
(38, 'HVO-3300MT', '3D HD Video Recorder', '9(3).jpg', 'cat_9'),
(39, 'HVO-3000MT', '3D HD Video Recorder', '9(4).jpg', 'cat_9'),
(40, 'HVO-4000MT', '4K 3D Medical Video Recorder', '9(5).jpg', 'cat_9'),
(41, 'WMP-249', '', '10.jpg', 'cat_10'),
(42, 'Docpad 10c W', 'The Medical grade Tablet Baaske Docpad&trade; 10c incl.', '11.jpg', 'cat_11');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `p_id` text NOT NULL,
  `label` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `cat_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `p_id`, `label`, `name`, `link`, `cat_tag`) VALUES
(1, '42', 'Manual', 'Manual', 'asd.pdf', 'cat_11'),
(2, '42', '', 'Datasheet', 'asd.pdf', 'cat_11'),
(3, '1', 'sad', 'asd', 'asd', 'cat_1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(2) NOT NULL,
  `images` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `images`, `caption`) VALUES
(16, '4.jpeg', 'Surgical Monitors'),
(17, '2.jpeg', ''),
(18, '3.jpg', ''),
(19, '4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `id` int(10) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `css_id` int(100) NOT NULL,
  `cat_tag` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`id`, `p_id`, `heading`, `label`, `des`, `css_id`, `cat_tag`) VALUES
(0, '4', 'asd', 'sd', 'sd', 1, 'cat_1'),
(1, '42', 'Display', 'Display', '2\"3', 1, 'cat_11'),
(2, '42', 'Resolution', 'Resolution', '334 X 200, 390 mm (W/H, Diagonal) (13 1/4 × 7 7/8, 15 3/8 inches)\r\n', 2, 'cat_11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_product`
--
ALTER TABLE `featured_product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `featured_product` ADD FULLTEXT KEY `desp` (`desp`);
ALTER TABLE `featured_product` ADD FULLTEXT KEY `desp_2` (`desp`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fp_primary`
--
ALTER TABLE `fp_primary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primary_nav`
--
ALTER TABLE `primary_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `featured_product`
--
ALTER TABLE `featured_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `fp_primary`
--
ALTER TABLE `fp_primary`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
