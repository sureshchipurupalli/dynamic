-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2016 at 11:52 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajeshch_dynamic_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `description`) VALUES
(4, 'Deepak Raj Priyanshu', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(5, 'Priyanshu Raj', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(6, 'Mohit Kumar', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(7, 'Abhinandan Singh', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(8, 'Deepak Kumar', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `image`) VALUES
(1, '1', '220px-NDA_Insignia-1956.gif'),
(2, '2', '100-secure-website-site-lock-icon-shield.png'),
(3, '3', 'bird_st_columbas_600dpi.png'),
(5, '6', 'deepak (3).jpg'),
(6, '7', 'Ferrari-F80-Concept.jpg'),
(9, '7', 'Horror-Lady-Face-HD-Wallpaper-www.purehdwallpapers.in.jpg'),
(10, '8', 'LaFerrari007.jpg'),
(11, '9', 'maxresdefault.jpg'),
(12, '4', 'unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES
(5, 'How to create form in html', 'birt.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(9, 'How to create form in html', 'Internet-commerce.idaho_.govcommunitiesinternet-marketing4.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(10, 'How to create form in html', 'students-computer.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(11, 'How to create form in html', 'tumblr_inline_nl1zc1sNUv1t0ni1n.jpg', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(12, 'How to create form in html', 'application.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(13, 'How to create form in html', 'contact (2).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(14, 'How to create form in html', 'ecommerce (3).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(15, 'How to create form in html', 'Ecommerce-Website-Development-India1.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(16, 'How to create form in html', 'contact-us (1).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aboutus`
--

CREATE TABLE IF NOT EXISTS `tb_aboutus` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aboutus`
--

INSERT INTO `tb_aboutus` (`id`, `title`, `description`, `status`) VALUES
(1, '0', '', ''),
(3, 'rweretgrfgh', 'welcome......', 'Active'),
(4, 'about us', '<div style="text-align: justify;"><span style="vertical-align: super; font-family: Arial; font-size: 10pt;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac ante ut est finibus fringilla quis sed erat. Nullam eget libero semper, euismod ligula ac, posuere libero. Etiam sollicitudin blandit enim, porttitor commodo magna ornare et. Ut tincidunt sit amet quam sit amet efficitur. Sed rhoncus vel sem nec tincidunt. Praesent fringilla dignissim justo, pretium tempus orci laoreet sed. Nunc accumsan at justo ut lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla sit amet pellentesque mi. Pellentesque elementum massa diam. Etiam eget est ut diam vulputate consequat et a erat. Nam ac pulvinar nunc, vitae rutrum leo. Maecenas at est lacus. Donec orci mauris, porta a interdum quis, molestie at nisi. Proin hendrerit vel ligula quis sagittis.</span></div><div style="text-align: justify;"><font face="Arial"><sup><br></sup></font></div><div style="text-align: justify;"><font face="Arial"><sup>Sed sagittis, arcu sed malesuada vehicula, felis velit facilisis ante, \r\nquis placerat magna est eu orci. Maecenas in metus luctus, tincidunt \r\nlibero sit amet, varius mi. Nulla tincidunt tristique purus, non ornare \r\neros vehicula ut. Pellentesque vitae eleifend mi. Cras vitae velit \r\nporttitor, euismod risus at, tincidunt enim. Etiam ultricies quam sed ex\r\n rhoncus mattis. Proin ornare arcu neque, vitae facilisis tellus mattis \r\nvitae. Nam convallis ex quis sodales interdum. Proin vel porta nibh, ut \r\nrutrum dolor. Nullam sollicitudin erat id pellentesque fermentum. Proin \r\net varius dolor, non vehicula libero.</sup></font></div><div style="text-align: justify;"><font face="Arial"><sup><br></sup></font></div><div style="text-align: justify;"><font face="Arial"><sup><span style="font-size: 10pt;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet \r\nlibero eu nisi imperdiet sodales ut quis purus. Suspendisse pellentesque\r\n elementum massa at blandit. Donec at sodales ante. Mauris dapibus \r\nsuscipit neque sed lacinia. Nam euismod elit eget lacus malesuada, et \r\nlaoreet justo egestas. Sed dictum, mi et porttitor faucibus, risus \r\ntortor maximus diam, sit amet cursus erat purus id lacus. Sed leo justo,\r\n blandit ut tincidunt sit amet, convallis interdum eros. Donec vitae \r\nlectus efficitur, cursus elit consequat, bibendum purus. Fusce luctus \r\nrisus in arcu suscipit, non tempor nunc eleifend. Lorem ipsum dolor sit \r\namet, consectetur adipiscing elit. Praesent nisl elit, consectetur in \r\nmauris nec, pretium tincidunt orci. Vestibulum vel lectus dapibus, \r\ncursus eros ut, suscipit arcu. Nulla ultrices euismod tellus, eu \r\nvehicula massa. Cras eget enim eu eros tempus consectetur. Donec \r\ntincidunt felis id leo ultricies, nec molestie dolor porta.</span><span style="font-size: 10pt;">&nbsp;</span></sup></font></div>', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appform`
--

CREATE TABLE IF NOT EXISTS `tb_appform` (
  `id` int(3) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_appform`
--

INSERT INTO `tb_appform` (`id`, `title`, `description`, `status`) VALUES
(1, 'about Description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_banners`
--

CREATE TABLE IF NOT EXISTS `tb_banners` (
  `id` int(3) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banners`
--

INSERT INTO `tb_banners` (`id`, `banner_name`, `description`, `image_name`, `status`) VALUES
(21, 'banner1', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">banner1</span></font>', 'banners_147386194057d959344af13.jpg', 'Active'),
(25, 'banner9', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">banner9</span></font>', 'banners_147313960057ce53909d4d5.jpg', 'Active'),
(26, 'banner6', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">banner6</span></font>', 'banners_147313961557ce539f4786d.jpg', 'Active'),
(29, 'banner8', 'testing', 'banners_147331505457d100ee374c9.jpg', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `banner` varchar(300) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id`, `name`, `image`, `image1`, `description`, `banner`, `status`) VALUES
(1, 'ROADS', 'category_147410362257dd0946c309b.png', 'currency_147351059957d3fcc7085aa.png', '<span style="color: rgb(37, 37, 37); font-family: sans-serif; font-size: 14px; line-height: 22.4px; background-color: rgb(255, 255, 255);">Roads that are available for use by the public may be referred to as parkways, avenues, freeways, interstates, highways</span><span style="color: rgb(37, 37, 37); font-family: sans-serif; font-size: 14px; line-height: 22.4px; background-color: rgb(255, 255, 255);">, or primary, secondary, and tertiary local roads.</span>', 'banner_147402554757dbd84b16da5.jpg', 'Active'),
(2, 'GOVT OFFICES', 'category_147409685957dceedb6e9f8.png', 'currency_147351061357d3fcd5e2040.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402557857dbd86a077d7.jpg', 'Active'),
(3, 'PRIVATE COMPANIES', 'category_147410345757dd08a16a97a.png', 'currency_147351062757d3fce35decd.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402561057dbd88ac02c9.jpg', 'Active'),
(4, 'POLICE STATIONS', 'category_147410357757dd0919230cd.png', 'currency_147351064157d3fcf1bcc84.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402563657dbd8a4aea51.jpg', 'Active'),
(5, 'FRAUD', 'category_147409692657dcef1e2248d.png', 'currency_147351065657d3fd00bbae4.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402565157dbd8b3927cb.jpg', 'Active'),
(6, 'NEWS', 'category_147410351857dd08decfd84.png', 'currency_147351066957d3fd0dc8378.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402566557dbd8c132aaf.jpg', 'Active'),
(7, 'GET LEGAL EXPERT', 'category_147409695557dcef3b10f25.png', 'currency_147351068157d3fd19d88fa.png', '<span style="font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" text-align:="" justify;="" background-color:="" rgb(255,="" 255,="" 255);"="">Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>', 'banner_147402570457dbd8e899ef8.png', 'Active'),
(15, 'EDUCATION', 'category_147436691457e10dc2df3fe.png', 'currency_147436691457e10dc2e0b24.png', 'checking', '', 'Active'),
(16, 'GVMC', 'category_147437315857e1262621674.png', 'currency_147436699757e10e15a1383.png', 'testing testing', 'banner_147436699757e10e15a315b.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_certification`
--

CREATE TABLE IF NOT EXISTS `tb_certification` (
  `id` int(3) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_certification`
--

INSERT INTO `tb_certification` (`id`, `title`, `description`, `status`) VALUES
(1, 'about Description', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(255, 255, 255);">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</span><div><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(255, 255, 255);"><br></span></div><div><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(255, 255, 255);">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</span></div>', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_complaints`
--

CREATE TABLE IF NOT EXISTS `tb_complaints` (
  `id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `complaint_category` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `subdept_id` int(3) NOT NULL,
  `employee_id` int(3) NOT NULL,
  `price` varchar(255) NOT NULL,
  `country_id` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_date` date NOT NULL,
  `date_added` date NOT NULL,
  `posted_time` time NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `status` enum('Open','Closed') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_complaints`
--

INSERT INTO `tb_complaints` (`id`, `user_id`, `title`, `complaint_category`, `department`, `subdept_id`, `employee_id`, `price`, `country_id`, `description`, `image`, `posted_date`, `date_added`, `posted_time`, `user_ip`, `status`) VALUES
(1, 1, 'checking and testing', '1', '', 2, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-01-04', '00:00:00', '', 'Open'),
(3, 1, 'checking and testing', '1', '', 0, 0, '500', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-02-04', '00:00:00', '', 'Open'),
(4, 0, 'Roads are not gooddddd', '0', '0', 0, 2020, '10', '0', 'test', '', '0000-00-00', '2016-02-20', '00:00:00', '', 'Open'),
(5, 1, 'Lorem ipsum dolor sit amet consectetur adipiscing elit.', '2', '6', 0, 0, '1500', '16', 'Lorem ipsum dolor sit amet consectetur adipiscing elit.', '', '0000-00-00', '2016-01-06', '00:00:00', '', 'Open'),
(6, 1, 'checking and testing', '1', '', 0, 0, '1250', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-03-15', '00:00:00', '', 'Open'),
(7, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-03-24', '00:00:00', '', 'Open'),
(8, 1, 'checking and testing', '1', '', 0, 0, '2000', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-08-04', '00:00:00', '', 'Open'),
(9, 1, 'checking and testing', '1', '', 0, 0, '1000', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-05-04', '00:00:00', '', 'Open'),
(10, 1, 'checking and testing', '1', '', 0, 0, '1400', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-11-04', '00:00:00', '', 'Open'),
(11, 1, 'checking and testing', '1', '2', 2, 0, '1660', '1', 'checking 21-10-2016', '', '0000-00-00', '2016-10-26', '00:00:00', '183.83.100.130', 'Closed'),
(12, 1, 'checking and testing', '1', '', 0, 0, '1800', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-12-04', '00:00:00', '', 'Open'),
(13, 1, 'checking and testing', '1', '', 2, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-06-04', '00:00:00', '', 'Open'),
(14, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-01-19', '00:00:00', '', 'Open'),
(15, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(16, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-08-04', '00:00:00', '', 'Open'),
(17, 1, 'Lorem Ipsum is simply dummy testing', '4', '', 0, 0, '3200', '61', 'Lorem Ipsum is simply dummy text tester', '', '0000-00-00', '2016-05-27', '00:00:00', '', 'Open'),
(18, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '18', 0, 41256, '2000', '19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-01-06', '00:00:00', '', 'Open'),
(19, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '20', 0, 0, '', '51', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(20, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '6', '21', 0, 0, '', '23', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(21, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '19', 0, 0, '', '51', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(22, 1, 'checking and testing', '1', '', 0, 45897, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(23, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '19', 0, 0, '', '11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(24, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '6', '22', 0, 58964, '', '8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(25, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-01-04', '00:00:00', '', 'Open'),
(26, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '5', '17', 0, 0, '', '19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(27, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '5', '17', 0, 0, '', '4', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(28, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '4', '14', 0, 0, '2100', '56', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-02-14', '00:00:00', '', 'Open'),
(29, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '4', '13', 0, 0, '', '50', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-02-24', '00:00:00', '', 'Open'),
(30, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(31, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '4', '16', 0, 0, '', '20', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-08-14', '00:00:00', '', 'Open'),
(32, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '4', '16', 0, 0, '', '13', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(33, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '4', '15', 0, 0, '2000', '10', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-01-06', '00:00:00', '', 'Open'),
(34, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '5', '20', 0, 0, '', '15', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(35, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '8', 0, 0, '650', '6', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-01-25', '00:00:00', '', 'Open'),
(36, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '6', 0, 0, '2500', '20', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-03-24', '00:00:00', '', 'Open'),
(37, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '5', 0, 0, '', '18', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-08-16', '00:00:00', '', 'Open'),
(38, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '5', 0, 0, '', '6', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-04-11', '00:00:00', '', 'Open'),
(39, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '7', 0, 0, '', '17', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-12-04', '00:00:00', '', 'Open'),
(40, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '7', 0, 0, '4200', '42', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-09-06', '00:00:00', '', 'Open'),
(41, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '', 0, 0, '300', '50', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-12-15', '00:00:00', '', 'Open'),
(42, 1, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '2', '7', 0, 1000, '2000', '19', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', '', '0000-00-00', '2016-08-18', '00:00:00', '', 'Open'),
(48, 1, 'checking and testing', '1', '', 2, 0, '1660', '1', 'checking 4-10-2016', '', '2016-09-15', '2016-10-04', '00:00:00', '', 'Open'),
(49, 1, 'checking and testing', '1', '', 2, 0, '1660', '1', 'checking 4-10-2016', '', '2016-09-15', '2016-10-04', '00:00:00', '', 'Open'),
(51, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(52, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(53, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(54, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(56, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(57, 1, 'tester', '4', '13', 0, 0, '20000', '3', 'Test tester Afghan', '', '0000-00-00', '2016-01-26', '00:00:00', '', 'Open'),
(58, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(59, 1, 'tester', '4', '13', 0, 0, '10000', '7', 'Australia', '', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(60, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(61, 1, 'tester', '5', '17', 0, 0, '10000', '16', 'Brazil Investment fraud 10000', '', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(62, 1, 'tester', '2', '5', 0, 0, '10000', '19', 'Cameroon Govt Offices 10000 plus video', 'file_147489949657e92e280e828.gif', '0000-00-00', '2016-04-30', '00:00:00', '', 'Open'),
(63, 1, 'tester', '5', '18', 0, 0, '10000', '54', 'Jamaica Fraud 10000 plus pic JPG', 'file_147489974057e92f1c62328.JPG', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(64, 1, 'Exams not conducting', '15', '35', 0, 0, '', '3', 'testing.............', '', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(65, 1, 'Exams are delayed', '15', '35', 0, 0, '', '1', 'chexking and testing', '', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(66, 1, 'Exam fees is too high', '15', '36', 0, 0, '', '16', 'testing and checking', '', '0000-00-00', '2016-09-26', '00:00:00', '', 'Open'),
(67, 1, 'testing testing', '15', '37', 0, 0, '1260', '3', 'checking the page', '', '0000-00-00', '2016-09-27', '00:00:00', '', 'Open'),
(68, 1, 'checking page', '16', '34', 0, 0, '1400', '10', 'checking  page ', '', '0000-00-00', '2016-09-27', '00:00:00', '', 'Open'),
(69, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(70, 1, 'tester', '3', '10', 0, 0, '10000', '61', 'tester Kuwait tester Kuwait tester Kuwait 10000', '', '0000-00-00', '2016-01-28', '00:00:00', '', 'Open'),
(71, 1, 'tester', '3', '9', 0, 0, '23000000', '47', 'tester iceland  23,000,000', '', '0000-00-00', '2016-09-28', '00:00:00', '', 'Open'),
(72, 1, 'tester', '3', '11', 0, 0, '23000000', '11', 'Bermuda  23,000,000', '', '0000-00-00', '2016-05-28', '00:00:00', '', 'Open'),
(73, 1, 'tester', '6', '22', 0, 0, '23000000000', '53', 'Israel News 23000000000', '', '0000-00-00', '2016-09-28', '00:00:00', '', 'Open'),
(74, 0, '', '', '', 0, 0, '', '', '', '', '0000-00-00', '2016-09-29', '00:00:00', '', ''),
(75, 0, '', '', '', 0, 0, '', '', '', '', '0000-00-00', '2016-09-29', '00:00:00', '', ''),
(76, 0, '', '', '', 0, 0, '', '', '', '', '0000-00-00', '2016-09-29', '00:00:00', '', ''),
(77, 19, 'Sr ', '0', '0', 0, 0, '1000', '0', 'Testing is in progress', '', '0000-00-00', '2016-09-29', '00:00:00', '', 'Open'),
(78, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(79, 1, '', '2', '5', 0, 0, '1200', '1', 'testing', '', '0000-00-00', '2016-10-07', '00:00:00', '', 'Open'),
(80, 1, 'ramesh', '2', '5', 0, 0, '7777', '1', 'ramesh', '', '0000-00-00', '2016-10-12', '00:00:00', '', 'Open'),
(83, 12, 'jamadagni testing', '4', '15', 0, 0, '4500', '101', 'jamadagni testing', 'file_147530595957ef61e75734a.jpg', '0000-00-00', '2016-10-01', '00:00:00', '', 'Open'),
(84, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(85, 1, '', '4', '15', 0, 0, '', '64', 'security fail 4-10-16', 'file_147555599357f332996968e.jpg', '0000-00-00', '2016-10-03', '00:00:00', '', 'Open'),
(86, 1, 'checking and testing', '1', '', 0, 0, '1660', '1', 'checking 4-10-2016', '', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(87, 1, '', '3', '9', 0, 0, '', '18', 'No Network 4-10-16', 'file_147555789057f33a0298efa.jpg', '0000-00-00', '2016-03-04', '00:00:00', '', 'Open'),
(88, 1, '', '1', '2', 0, 0, '', '1', 'Roads are damaged', 'file_147555857257f33cac77cf3.jpg', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(89, 1, '', '4', '15', 0, 0, '', '82', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. 4-10-16', 'file_147555880857f33d98ddc44.jpg', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(90, 1, 'testing fraud', '3', '9', 0, 0, '2100', '109', 'testing fraud', 'file_147555919557f33f1b1a464.jpg', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(91, 1, 'checking govt offices', '2', '5', 0, 0, '3200', '64', 'checking govt offices', 'file_147555940157f33fe9aed84.jpg', '0000-00-00', '2016-10-04', '00:00:00', '', 'Open'),
(92, 12, 'checking media3', '1', '2', 0, 0, '1500', '13', 'checking media3', 'file_147581664257f72cc21afd6.jpg', '0000-00-00', '2016-10-07', '00:00:00', '', 'Open'),
(93, 1, '45645', '2', '5', 3, 0, '150', '2', '456456', '', '0000-00-00', '2016-10-07', '00:00:00', '', 'Open'),
(94, 1, 'xdggf', '2', '5', 3, 0, '1200', '12', 'fdhghjhju', '', '0000-00-00', '2016-05-02', '00:00:00', '', 'Open'),
(95, 12, 'testing expiry paypal', '4', '15', 5, 0, '100', '10', 'testing expiry paypal', '', '0000-00-00', '2016-06-14', '00:00:00', '', 'Open'),
(96, 1, 'checking 18-10-16', '2', '5', 3, 0, '1100', '117', 'checking 18-10-16', '', '0000-00-00', '2016-10-18', '00:00:00', '', 'Open'),
(97, 1, 'testing testing 18-10-16', '2', '6', 1, 0, '1200', '17', 'testing testing 18-10-16', '', '0000-00-00', '2016-10-18', '00:00:00', '', 'Open'),
(98, 1, 'testing 18-10-16', '3', '10', 0, 0, '15000', '181', 'testing 18-10-16', '', '0000-00-00', '2016-10-18', '00:00:00', '', 'Open'),
(99, 1, 'testing and checking', '3', '12', 0, 0, '10000', '18', 'testing and checking', '', '0000-00-00', '2016-10-16', '00:00:00', '', 'Open'),
(100, 1, 'testing 16-10-16', '4', '15', 5, 0, '21000', '160', 'testing 16-10-16', '', '0000-00-00', '2016-10-15', '00:00:00', '', 'Open'),
(101, 12, 'checking 18-10-16', '5', '20', 0, 0, '4700', '180', 'checking 18-10-16', '', '0000-00-00', '2016-10-07', '17:24:02', '', 'Open'),
(102, 12, 'testing and checking 12-10-16', '1', '2', 2, 25420, '15000', '14', 'testing and checking 12-10-16', '', '0000-00-00', '2016-10-12', '12:35:36', '183.83.127.126', 'Open'),
(103, 12, 'network issue', '3', '9', 4, 456456, '25000', '121', 'network issue 27-10-16', '', '0000-00-00', '2016-10-27', '10:31:06', '183.83.100.130', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `tb_conditions`
--

CREATE TABLE IF NOT EXISTS `tb_conditions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_conditions`
--

INSERT INTO `tb_conditions` (`id`, `title`, `description`, `status`) VALUES
(3, 'rajiv...vbvb', 'rajiv12345', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contentpages`
--

CREATE TABLE IF NOT EXISTS `tb_contentpages` (
  `id` int(3) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contentpages`
--

INSERT INTO `tb_contentpages` (`id`, `title`, `description`, `status`) VALUES
(1, 'WHAT WE DO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(2, 'PRIVACY AND POLICY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(3, 'TERMS AND CONDITIONS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(4, 'testing', 'testing', 'Active'),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_country`
--

CREATE TABLE IF NOT EXISTS `tb_country` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `country_name` varchar(150) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_country`
--

INSERT INTO `tb_country` (`id`, `sortname`, `country_name`, `status`) VALUES
(1, 'AF', 'Afghanistan', 'Active'),
(2, 'AL', 'Albania', 'Active'),
(3, 'DZ', 'Algeria', 'Active'),
(4, 'AS', 'American Samoa', 'Active'),
(5, 'AD', 'Andorra', 'Active'),
(6, 'AO', 'Angola', 'Active'),
(7, 'AI', 'Anguilla', 'Active'),
(8, 'AQ', 'Antarctica', 'Active'),
(9, 'AG', 'Antigua And Barbuda', 'Active'),
(10, 'AR', 'Argentina', 'Active'),
(11, 'AM', 'Armenia', 'Active'),
(12, 'AW', 'Aruba', 'Active'),
(13, 'AU', 'Australia', 'Active'),
(14, 'AT', 'Austria', 'Active'),
(15, 'AZ', 'Azerbaijan', 'Active'),
(16, 'BS', 'Bahamas The', 'Active'),
(17, 'BH', 'Bahrain', 'Active'),
(18, 'BD', 'Bangladesh', 'Active'),
(19, 'BB', 'Barbados', 'Active'),
(20, 'BY', 'Belarus', 'Active'),
(21, 'BE', 'Belgium', 'Active'),
(22, 'BZ', 'Belize', 'Active'),
(23, 'BJ', 'Benin', 'Active'),
(24, 'BM', 'Bermuda', 'Active'),
(25, 'BT', 'Bhutan', 'Active'),
(26, 'BO', 'Bolivia', 'Active'),
(27, 'BA', 'Bosnia and Herzegovina', 'Active'),
(28, 'BW', 'Botswana', 'Active'),
(29, 'BV', 'Bouvet Island', 'Active'),
(30, 'BR', 'Brazil', 'Active'),
(31, 'IO', 'British Indian Ocean Territory', 'Active'),
(32, 'BN', 'Brunei', 'Active'),
(33, 'BG', 'Bulgaria', 'Active'),
(34, 'BF', 'Burkina Faso', 'Active'),
(35, 'BI', 'Burundi', 'Active'),
(36, 'KH', 'Cambodia', 'Active'),
(37, 'CM', 'Cameroon', 'Active'),
(38, 'CA', 'Canada', 'Active'),
(39, 'CV', 'Cape Verde', 'Active'),
(40, 'KY', 'Cayman Islands', 'Active'),
(41, 'CF', 'Central African Republic', 'Active'),
(42, 'TD', 'Chad', 'Active'),
(43, 'CL', 'Chile', 'Active'),
(44, 'CN', 'China', 'Active'),
(45, 'CX', 'Christmas Island', 'Active'),
(46, 'CC', 'Cocos (Keeling) Islands', 'Active'),
(47, 'CO', 'Colombia', 'Active'),
(48, 'KM', 'Comoros', 'Active'),
(49, 'CG', 'Congo', 'Active'),
(50, 'CD', 'Congo The Democratic Republic Of The', 'Inactive'),
(51, 'CK', 'Cook Islands', 'Active'),
(52, 'CR', 'Costa Rica', 'Active'),
(53, 'CI', 'Cote D''Ivoire (Ivory Coast)', 'Active'),
(54, 'HR', 'Croatia (Hrvatska)', 'Active'),
(55, 'CU', 'Cuba', 'Active'),
(56, 'CY', 'Cyprus', 'Active'),
(57, 'CZ', 'Czech Republic', 'Active'),
(58, 'DK', 'Denmark', 'Active'),
(59, 'DJ', 'Djibouti', 'Active'),
(60, 'DM', 'Dominica', 'Active'),
(61, 'DO', 'Dominican Republic', 'Active'),
(62, 'TP', 'East Timor', 'Active'),
(63, 'EC', 'Ecuador', 'Active'),
(64, 'EG', 'Egypt', 'Active'),
(65, 'SV', 'El Salvador', 'Active'),
(66, 'GQ', 'Equatorial Guinea', 'Active'),
(67, 'ER', 'Eritrea', 'Active'),
(68, 'EE', 'Estonia', 'Active'),
(69, 'ET', 'Ethiopia', 'Active'),
(70, 'XA', 'External Territories of Australia', 'Active'),
(71, 'FK', 'Falkland Islands', 'Active'),
(72, 'FO', 'Faroe Islands', 'Active'),
(73, 'FJ', 'Fiji Islands', 'Active'),
(74, 'FI', 'Finland', 'Active'),
(75, 'FR', 'France', 'Active'),
(76, 'GF', 'French Guiana', 'Active'),
(77, 'PF', 'French Polynesia', 'Active'),
(78, 'TF', 'French Southern Territories', 'Active'),
(79, 'GA', 'Gabon', 'Active'),
(80, 'GM', 'Gambia The', 'Active'),
(81, 'GE', 'Georgia', 'Active'),
(82, 'DE', 'Germany', 'Active'),
(83, 'GH', 'Ghana', 'Active'),
(84, 'GI', 'Gibraltar', 'Active'),
(85, 'GR', 'Greece', 'Active'),
(86, 'GL', 'Greenland', 'Active'),
(87, 'GD', 'Grenada', 'Active'),
(88, 'GP', 'Guadeloupe', 'Active'),
(89, 'GU', 'Guam', 'Active'),
(90, 'GT', 'Guatemala', 'Active'),
(91, 'XU', 'Guernsey and Alderney', 'Active'),
(92, 'GN', 'Guinea', 'Active'),
(93, 'GW', 'Guinea-Bissau', 'Active'),
(94, 'GY', 'Guyana', 'Active'),
(95, 'HT', 'Haiti', 'Active'),
(96, 'HM', 'Heard and McDonald Islands', 'Active'),
(97, 'HN', 'Honduras', 'Active'),
(98, 'HK', 'Hong Kong S.A.R.', 'Active'),
(99, 'HU', 'Hungary', 'Active'),
(100, 'IS', 'Iceland', 'Active'),
(101, 'IN', 'India', 'Active'),
(102, 'ID', 'Indonesia', 'Active'),
(103, 'IR', 'Iran', 'Active'),
(104, 'IQ', 'Iraq', 'Active'),
(105, 'IE', 'Ireland', 'Active'),
(106, 'IL', 'Israel', 'Active'),
(107, 'IT', 'Italy', 'Active'),
(108, 'JM', 'Jamaica', 'Active'),
(109, 'JP', 'Japan', 'Active'),
(110, 'XJ', 'Jersey', 'Active'),
(111, 'JO', 'Jordan', 'Active'),
(112, 'KZ', 'Kazakhstan', 'Active'),
(113, 'KE', 'Kenya', 'Active'),
(114, 'KI', 'Kiribati', 'Active'),
(115, 'KP', 'Korea North', 'Active'),
(116, 'KR', 'Korea South', 'Active'),
(117, 'KW', 'Kuwait', 'Active'),
(118, 'KG', 'Kyrgyzstan', 'Active'),
(119, 'LA', 'Laos', 'Active'),
(120, 'LV', 'Latvia', 'Active'),
(121, 'LB', 'Lebanon', 'Active'),
(122, 'LS', 'Lesotho', 'Active'),
(123, 'LR', 'Liberia', 'Active'),
(124, 'LY', 'Libya', 'Active'),
(125, 'LI', 'Liechtenstein', 'Active'),
(126, 'LT', 'Lithuania', 'Active'),
(127, 'LU', 'Luxembourg', 'Active'),
(128, 'MO', 'Macau S.A.R.', 'Active'),
(129, 'MK', 'Macedonia', 'Active'),
(130, 'MG', 'Madagascar', 'Active'),
(131, 'MW', 'Malawi', 'Active'),
(132, 'MY', 'Malaysia', 'Active'),
(133, 'MV', 'Maldives', 'Active'),
(134, 'ML', 'Mali', 'Active'),
(135, 'MT', 'Malta', 'Active'),
(136, 'XM', 'Man (Isle of)', 'Active'),
(137, 'MH', 'Marshall Islands', 'Active'),
(138, 'MQ', 'Martinique', 'Active'),
(139, 'MR', 'Mauritania', 'Active'),
(140, 'MU', 'Mauritius', 'Active'),
(141, 'YT', 'Mayotte', 'Active'),
(142, 'MX', 'Mexico', 'Active'),
(143, 'FM', 'Micronesia', 'Active'),
(144, 'MD', 'Moldova', 'Active'),
(145, 'MC', 'Monaco', 'Active'),
(146, 'MN', 'Mongolia', 'Active'),
(147, 'MS', 'Montserrat', 'Active'),
(148, 'MA', 'Morocco', 'Active'),
(149, 'MZ', 'Mozambique', 'Active'),
(150, 'MM', 'Myanmar', 'Active'),
(151, 'NA', 'Namibia', 'Active'),
(152, 'NR', 'Nauru', 'Active'),
(153, 'NP', 'Nepal', 'Active'),
(154, 'AN', 'Netherlands Antilles', 'Active'),
(155, 'NL', 'Netherlands The', 'Active'),
(156, 'NC', 'New Caledonia', 'Active'),
(157, 'NZ', 'New Zealand', 'Active'),
(158, 'NI', 'Nicaragua', 'Active'),
(159, 'NE', 'Niger', 'Active'),
(160, 'NG', 'Nigeria', 'Active'),
(161, 'NU', 'Niue', 'Active'),
(162, 'NF', 'Norfolk Island', 'Active'),
(163, 'MP', 'Northern Mariana Islands', 'Active'),
(164, 'NO', 'Norway', 'Active'),
(165, 'OM', 'Oman', 'Active'),
(166, 'PK', 'Pakistan', 'Active'),
(167, 'PW', 'Palau', 'Active'),
(168, 'PS', 'Palestinian Territory Occupied', 'Active'),
(169, 'PA', 'Panama', 'Active'),
(170, 'PG', 'Papua new Guinea', 'Active'),
(171, 'PY', 'Paraguay', 'Active'),
(172, 'PE', 'Peru', 'Active'),
(173, 'PH', 'Philippines', 'Active'),
(174, 'PN', 'Pitcairn Island', 'Active'),
(175, 'PL', 'Poland', 'Active'),
(176, 'PT', 'Portugal', 'Active'),
(177, 'PR', 'Puerto Rico', 'Active'),
(178, 'QA', 'Qatar', 'Active'),
(179, 'RE', 'Reunion', 'Active'),
(180, 'RO', 'Romania', 'Active'),
(181, 'RU', 'Russia', 'Active'),
(182, 'RW', 'Rwanda', 'Active'),
(183, 'SH', 'Saint Helena', 'Active'),
(184, 'KN', 'Saint Kitts And Nevis', 'Active'),
(185, 'LC', 'Saint Lucia', 'Active'),
(186, 'PM', 'Saint Pierre and Miquelon', 'Active'),
(187, 'VC', 'Saint Vincent And The Grenadines', 'Active'),
(188, 'WS', 'Samoa', 'Active'),
(189, 'SM', 'San Marino', 'Active'),
(190, 'ST', 'Sao Tome and Principe', 'Active'),
(191, 'SA', 'Saudi Arabia', 'Active'),
(192, 'SN', 'Senegal', 'Active'),
(193, 'RS', 'Serbia', 'Active'),
(194, 'SC', 'Seychelles', 'Active'),
(195, 'SL', 'Sierra Leone', 'Active'),
(196, 'SG', 'Singapore', 'Active'),
(197, 'SK', 'Slovakia', 'Active'),
(198, 'SI', 'Slovenia', 'Active'),
(199, 'XG', 'Smaller Territories of the UK', 'Active'),
(200, 'SB', 'Solomon Islands', 'Active'),
(201, 'SO', 'Somalia', 'Active'),
(202, 'ZA', 'South Africa', 'Active'),
(203, 'GS', 'South Georgia', 'Active'),
(204, 'SS', 'South Sudan', 'Active'),
(205, 'ES', 'Spain', 'Active'),
(206, 'LK', 'Sri Lanka', 'Active'),
(207, 'SD', 'Sudan', 'Active'),
(208, 'SR', 'Suriname', 'Active'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 'Active'),
(210, 'SZ', 'Swaziland', 'Active'),
(211, 'SE', 'Sweden', 'Active'),
(212, 'CH', 'Switzerland', 'Active'),
(213, 'SY', 'Syria', 'Active'),
(214, 'TW', 'Taiwan', 'Active'),
(215, 'TJ', 'Tajikistan', 'Active'),
(216, 'TZ', 'Tanzania', 'Active'),
(217, 'TH', 'Thailand', 'Active'),
(218, 'TG', 'Togo', 'Active'),
(219, 'TK', 'Tokelau', 'Active'),
(220, 'TO', 'Tonga', 'Active'),
(221, 'TT', 'Trinidad And Tobago', 'Active'),
(222, 'TN', 'Tunisia', 'Active'),
(223, 'TR', 'Turkey', 'Active'),
(224, 'TM', 'Turkmenistan', 'Active'),
(225, 'TC', 'Turks And Caicos Islands', 'Active'),
(226, 'TV', 'Tuvalu', 'Active'),
(227, 'UG', 'Uganda', 'Active'),
(228, 'UA', 'Ukraine', 'Active'),
(229, 'AE', 'United Arab Emirates', 'Active'),
(230, 'GB', 'United Kingdom', 'Active'),
(231, 'US', 'United States', 'Active'),
(232, 'UM', 'United States Minor Outlying Islands', 'Active'),
(233, 'UY', 'Uruguay', 'Active'),
(234, 'UZ', 'Uzbekistan', 'Active'),
(235, 'VU', 'Vanuatu', 'Active'),
(236, 'VA', 'Vatican City State (Holy See)', 'Active'),
(237, 'VE', 'Venezuela', 'Active'),
(238, 'VN', 'Vietnam', 'Active'),
(239, 'VG', 'Virgin Islands (British)', 'Active'),
(240, 'VI', 'Virgin Islands (US)', 'Active'),
(241, 'WF', 'Wallis And Futuna Islands', 'Active'),
(242, 'EH', 'Western Sahara', 'Active'),
(243, 'YE', 'Yemen', 'Active'),
(244, 'YU', 'Yugoslavia', 'Active'),
(245, 'ZM', 'Zambia', 'Active'),
(246, 'ZW', 'Zimbabwe', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departments`
--

CREATE TABLE IF NOT EXISTS `tb_departments` (
  `id` int(3) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departments`
--

INSERT INTO `tb_departments` (`id`, `cat_id`, `department_name`, `status`) VALUES
(1, 1, 'freeway', 'Active'),
(2, 1, 'Major Highway', 'Active'),
(3, 1, 'Streets', 'Active'),
(4, 1, 'National HighWay', 'Active'),
(5, 2, 'Revenue Department', 'Active'),
(6, 2, 'Education Department', 'Active'),
(7, 2, 'Electrical Department', 'Active'),
(8, 2, 'Civil Department', 'Active'),
(9, 3, 'Reliance  Power', 'Active'),
(10, 3, 'Jindal Steels', 'Active'),
(11, 3, 'HPCL', 'Active'),
(12, 3, 'ABC power plant', 'Active'),
(13, 4, 'TrafficSection', 'Active'),
(14, 4, 'RPF', 'Active'),
(15, 4, 'crime department', 'Active'),
(16, 4, 'Civil Department', 'Active'),
(17, 5, 'Investment fraud', 'Active'),
(18, 5, 'Credit card  fraud', 'Active'),
(19, 5, 'Mass marketing fraud', 'Active'),
(20, 5, 'Payment scams', 'Active'),
(21, 6, 'editing', 'Active'),
(22, 6, 'broadcast', 'Active'),
(23, 6, 'coverage', 'Active'),
(24, 6, 'QA', 'Active'),
(25, 7, 'Family court', 'Active'),
(26, 7, 'Civil court', 'Active'),
(27, 7, 'Legal issues', 'Active'),
(28, 7, 'family issues', 'Active'),
(32, 16, 'Water Supply', 'Active'),
(33, 16, 'Mee Seva', 'Active'),
(34, 16, 'Zonal Offices', 'Active'),
(35, 15, 'Examinations', 'Active'),
(36, 15, 'fees', 'Active'),
(37, 15, 'Transport', 'Active'),
(38, 16, 'Zonal Ofices', 'Active'),
(39, 15, 'Universities', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_description`
--

CREATE TABLE IF NOT EXISTS `tb_description` (
  `id` int(3) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(15000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_description`
--

INSERT INTO `tb_description` (`id`, `title`, `description`, `status`) VALUES
(1, 'Our 360 Perpective', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Active'),
(2, 'Our 360 Perpective', '', 'Active'),
(3, 'Vision and Mission', '', 'Active'),
(4, 'Leadership', '', 'Active'),
(5, 'History', '', 'Active'),
(6, 'Careers', '', 'Active'),
(7, 'Contact us', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_footertabs`
--

CREATE TABLE IF NOT EXISTS `tb_footertabs` (
  `id` int(3) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(20) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_footertabs`
--

INSERT INTO `tb_footertabs` (`id`, `cat_id`, `title`, `status`) VALUES
(1, 0, 'Roads', 'Active'),
(2, 0, 'Govt Offices', 'Active'),
(3, 0, 'Private Companies', 'Active'),
(4, 0, 'Police Station', 'Active'),
(5, 0, 'News', 'Active'),
(6, 0, 'Get Legal Expert', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_getinvolved`
--

CREATE TABLE IF NOT EXISTS `tb_getinvolved` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_getinvolved`
--

INSERT INTO `tb_getinvolved` (`id`, `title`, `description`, `status`) VALUES
(2, 'How To Get Involved', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(3, 'Report Corruption', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(4, 'Stay Informed', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(5, 'Unmask The Corrupt Compaign', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(6, 'Competitions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(7, 'Anti-Corruption Award', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(8, 'More Ways To Join Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_legal`
--

CREATE TABLE IF NOT EXISTS `tb_legal` (
  `id` int(3) NOT NULL,
  `sid` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cases_handled` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_legal`
--

INSERT INTO `tb_legal` (`id`, `sid`, `name`, `address`, `cases_handled`, `status`) VALUES
(1, 25, 'darren', 'newyork', 'divorce, family issues', 'Active'),
(2, 26, 'sudheer varma', 'kolkata', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">land issues, and etc</span></font>', 'Active'),
(3, 27, 'manoj kumar', 'lucknow', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">property cases and etc</span></font>', 'Active'),
(4, 28, 'karthik ', 'hyderabad', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">marriage issues, property &nbsp;and divorce</span></font>', 'Active'),
(5, 25, 'ankita', 'delhi', 'women rights,dowry, property etc', 'Active'),
(6, 26, 'vinod sharma', 'ahmedabad', 'land issues, property issues and etc', 'Active'),
(7, 27, 'vamsi krishna', 'washinton', 'property rights, wealth and etc', 'Active'),
(8, 28, 'soumya agarwaal', 'jaipur', 'property issues, divorce and etc', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE IF NOT EXISTS `tb_news` (
  `id` int(3) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `description`, `status`) VALUES
(2, 'Rain denies India chance to level series vs WI', 'The short T2O series between India and the West Indies ended with abandonment of the second match, giving the Caribbean a 1-0 series win.Asked to comment on crickets debut in the US, Dhoni said they would like to come back and play here more."This is one place where we can come back and play lot of cricket maybe a triangular or a four-nation ODI or T20 series.</span></p></div>', 'Active'),
(6, 'India is the fourth country to demonstrate the flight testing of Scramjet Engine after the United States, Russia and European Space Agency.', 'Joining a select club of nations, India on Sunday successfully test fired its futuristic Scramjet (Supersonic Combustion Ramjet) Rocket Engine using oxygen from the atmosphere that could cut the cost of the launches several fold and help in Indian Space Research Organisationï¿½s bid to design advanced air breathing engines.The first experimental mission of Scramjet Engine was successfully conducted from the Satish Dhawan Space Centre at Sriharikota in Andhra Pradesh at 6 am, the ISRO said.It described the mission as a ï¿½modestï¿½ yet important milestone in its bid to design and develop advanced air breathing engines, including ones for its future space transport system.India is the fourth country to demonstrate the flight testing of Scramjet Engine after the United States, Russia and European Space Agency.After a smooth countdown of 12 hours, the solid rocket booster Advanced Technology Vehicle carrying the Scramjet Engines lifted off at 6 am and en', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE IF NOT EXISTS `tb_orders` (
  `id` int(11) NOT NULL,
  `amount` int(250) NOT NULL,
  `orderno` varchar(250) NOT NULL,
  `transactionid` varchar(250) NOT NULL,
  `posteddate` datetime NOT NULL,
  `payment_status` enum('Inactive','paypal','card') NOT NULL,
  `type` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `temprandid` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`id`, `amount`, `orderno`, `transactionid`, `posteddate`, `payment_status`, `type`, `username`, `email`, `address`, `zipcode`, `city`, `country`, `status`, `temprandid`) VALUES
(1, 1500, 'DYNDTBS0001', '6PP69145YW026563B', '2016-10-03 11:10:41', 'paypal', 'Donate', 'pavani', 'pavanireddy026@gmail.com', 'gvk plaza', '21315', 'VISAKHAPATNAM', 1, 'Active', '10c3502b32cb004c2c45620dd0703efb0fd854dc2e1475476571'),
(2, 4000, 'DYNDTBS0001', '7ME81771DY261243R', '2016-10-03 14:47:13', 'paypal', 'Donate', 'ghjgh', 'nag11@gmail.com', 'dssf', '41545', 'sdsd', 1, 'Active', '106a27abe25d77e2d71255fb1aa51ff36fbf1e13231475498635'),
(3, 2100, 'DYNDTBS0002', '4H436078PV338842D', '2016-10-03 09:52:21', 'paypal', 'Donate', '', 'jamadagni18@gmail.com', 'visakhaptnam', '530029', 'vizag', 101, 'Active', '1009770ec8525ffdb5ba60a7b2284a06986ff9e0591475506239'),
(4, 1200, 'DYNDTBS0001', '1AH9693656412083G', '2016-10-03 23:39:58', 'paypal', 'Donate', '', 'pavanireddy026@gmail.com', 'gvk plaza', '21315', 'VISAKHAPATNAM', 0, 'Active', '10d9e088ebf7b9e5f2fcf114483c448eb666d1dd941475555955'),
(5, 30, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dfsdf@gmail.com', 'fdfgff', 'fsdfsds', 'sdfsdd', 3, 'Active', '107e0f0cea75a0386622b9bc5fca78227486d368dd1476072796'),
(6, 100, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'sdsdf@gmail.com', 'rfwre', '32423ffsdsdfsdfsfs', 'fdsdsfsd', 1, 'Active', '107e0f0cea75a0386622b9bc5fca78227486d368dd1476072796'),
(7, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dsfsd@gmail.com', 'asdasdad, asddas', '11111', 'asdasd', 2, 'Active', '102c4f4c6fc211a502363a77be1ed88a29d2fc63fe1477482849'),
(8, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dfgdf@gmail.com', 'dsfdsfds, dsfsd', '11111', 'dfsdf', 4, 'Active', '102c4f4c6fc211a502363a77be1ed88a29d2fc63fe1477482849'),
(9, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dda@gmail.com', 'dfdsfds, fdsff', '11111', 'dsfsdf', 3, 'Active', '102c4f4c6fc211a502363a77be1ed88a29d2fc63fe1477482849'),
(10, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dda@gmail.com', 'dfdsfds, fdsff', '11111', 'dsfsdf', 3, 'Active', '102c4f4c6fc211a502363a77be1ed88a29d2fc63fe1477482849'),
(11, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dfgdfg@gmail.com', 'dsfdfds, dsfdsf', '11111', 'dsffdsf', 2, 'Active', '10ebd1770afd12238e2d2f44d6b45905857b55102b1477545178'),
(12, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'dsfds@gmail.com', 'gffhfg', '12345', 'gfghfg', 5, 'Active', '1054390b3d7ed497fa9484f34162412c340f948bb71477549982'),
(13, 0, '', '', '0000-00-00 00:00:00', 'Inactive', '', '', 'jamadagni_t@gmail.com', 'Flat:no303, Gvk palaza, Seethampeta', '530016', 'visakhapatnam', 101, 'Active', '10c740ad3e58b09a80a7ca03647bc630ed7771fb841477566763');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panchayat`
--

CREATE TABLE IF NOT EXISTS `tb_panchayat` (
  `id` int(3) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_panchayat`
--

INSERT INTO `tb_panchayat` (`id`, `title`, `description`, `status`) VALUES
(1, 'about Description', '<span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify; background-color: rgb(255, 255, 255);">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</span>', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_policy`
--

CREATE TABLE IF NOT EXISTS `tb_policy` (
  `id` int(3) NOT NULL,
  `policy_name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_policy`
--

INSERT INTO `tb_policy` (`id`, `policy_name`, `description`, `status`) VALUES
(2, 'good evening', 'edwfrgrhh', 'Active'),
(5, 'human rights', 'fdgfhgjhk576', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regusers`
--

CREATE TABLE IF NOT EXISTS `tb_regusers` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `random_id` int(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_regusers`
--

INSERT INTO `tb_regusers` (`id`, `username`, `password`, `profile_image`, `firstname`, `lastname`, `email`, `phone_number`, `address`, `random_id`, `status`) VALUES
(1, 'ravi', 'TVRJek5EVTI=', 'Tulips.jpg', 'Rajiv', 'Gandhi', 'rajiv@gmail.com', '8341853496', 'dasdasdasdasd', 0, 'Active'),
(2, 'prithvi', 'TVRJek5EVTI=', '', 'mahendra', 'Nath', 'mahendra@gmail.com', '8885896666', 'Nasik', 0, 'Active'),
(12, '', 'TVRJek5EVTI=', '', 'jamadagni', 't', 'jamadagni18@gmail.com', '8341853496', 'visakhapatnam', 0, 'Active'),
(13, '', 'TVRJek5EVTI=', '', 'sravanthi', 'T', 'sravanthi@gmail.com', '9848022338', 'vizianagaram', 0, 'Active'),
(14, '', 'TVRJek5EVTI=', '', 'prashanth', 'kumar', 'prasanth@gmail.com', '9985478966', 'amritsar', 0, 'Active'),
(16, 'lavanya lavs', 'TVRJek5EVTI=', '', 'lavanya', 'lavs', 'lavanya.media3@gmail.com', '8885856967', 'Flat:no303, Gvk palaza', 0, 'Active'),
(17, ' ', 'TVRFeE1URTBOUT09', '', 'srimanikanta', 'media3', 'srimanikanta.tmedia3@gmail.com', '9966799067', 'gvk plaza, vizag', 0, 'Active'),
(19, ' ', 'YzNKcGJXRnVhUT09', '', 'srimanikanta', 'media3', 'srimanikanta.tmedia3@gmail.com', '1313213333', 'gvk plaza, vizag', 0, 'Active'),
(20, ' ', 'TVRJek5EVTI=', '', 'srimanikanta', 'media3', 'srimanikanta.tmedia3@gmail.com', '1222333866', 'gvk plaza, vizag', 0, 'Active'),
(23, 'yamini N', 'TVRJek5EVTJOemc1', '', 'yamini', 'N', 'yamini@gmail.com', '798946598', 'gopalapatnam', 22598, 'Inactive'),
(36, 'nagesh rao', 'TVRJek5EVTJOemc1', '', 'nagesh', 'rao', 'nagesh.0302@gmail.com', '8341853496', 'paturu', 56203, 'Inactive'),
(37, 'ravindra sharma', 'TVRJek5EVTJOemc1', '', 'ravindra', 'sharma', 'nagesh.0301@gmail.com', '831853496', 'vizag', 31266, 'Inactive'),
(38, 'sai bhaskar', 'TVRJek5EVTJOemc1', '', 'sai', 'bhaskar', 'sai@gmail.com', '8945678999', 'pune', 38497, 'Active'),
(39, 'vijay antony', 'TVRJek5EVTJOemc1', '', 'vijay', 'antony', 'vijay@gmail.com', '7888965478', 'kakinada', 69822, 'Inactive'),
(40, 'govind raj', 'TVRJek1USXpNVEl6', '', 'govind', 'raj', 'govind@gmail.com', '774859687', 'vellore', 92009, 'Inactive'),
(41, 'anitha chowdary', 'TVRJek1USXpNVEl6', '', 'anitha', 'chowdary', 'anitha@gmail.com', '748596522', 'palakkad', 32217, 'Active'),
(46, 'Test Lastname', 'VkdWemRERXlNekV5TXc9PQ==', '', 'Test', 'Lastname', 'Lastname@yahoo.com', '0', 'na', 6966, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sitesettings`
--

CREATE TABLE IF NOT EXISTS `tb_sitesettings` (
  `id` int(11) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `fax` varchar(250) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `site_image` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `footer_txt` varchar(1000) NOT NULL,
  `mail_fromname` varchar(50) NOT NULL,
  `mail_frommail` varchar(250) NOT NULL,
  `contactusmail` varchar(250) NOT NULL,
  `facebook_link` varchar(250) NOT NULL,
  `twitter_link` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `googleplus` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sitesettings`
--

INSERT INTO `tb_sitesettings` (`id`, `phone`, `fax`, `title`, `site_image`, `address`, `footer_txt`, `mail_fromname`, `mail_frommail`, `contactusmail`, `facebook_link`, `twitter_link`, `linkedin`, `youtube`, `googleplus`) VALUES
(1, '933-933-933', '555', 'Metro', 'logo_147488508057e8f5d8d5cea.png', 'puterico', 'ï¿½ 2016 Dynamic Database. All rights reserved | Privacy Policy | Terms and Conditions', 'Metro', 'igohyotuioy', 'turyutiyi', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://in.linkedin.com/', 'https://www.youtube.com/?gl=IN', 'https://plus.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subdeparts`
--

CREATE TABLE IF NOT EXISTS `tb_subdeparts` (
  `id` int(3) NOT NULL,
  `c_id` int(3) NOT NULL,
  `s_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_subdeparts`
--

INSERT INTO `tb_subdeparts` (`id`, `c_id`, `s_id`, `title`, `status`) VALUES
(1, 2, 6, 'Examination Dept', 'Active'),
(2, 1, 2, 'flyovers', 'Active'),
(3, 2, 5, 'stamps and documents', 'Active'),
(4, 3, 9, 'Jio', 'Active'),
(5, 4, 15, 'CID', 'Active'),
(6, 6, 22, 'telecasting', 'Active'),
(7, 1, 4, 'bridges', 'Active'),
(8, 0, 0, '', ''),
(9, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_submenu`
--

CREATE TABLE IF NOT EXISTS `tb_submenu` (
  `id` int(3) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_submenu`
--

INSERT INTO `tb_submenu` (`id`, `title`, `description`, `status`) VALUES
(4, 'Common Application Form', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Active'),
(2, 'Self Certification', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Active'),
(3, 'Grama Panchayat NOC', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Active'),
(1, 'Description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n\n\n\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Active'),
(5, 'About Us', '<span style="color: rgb(51, 51, 51); font-family: " open="" sans",="" sans-serif;="" font-size:="" 14px;="" line-height:="" 20px;="" background-color:="" rgb(249,="" 249,="" 249);"="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'Active'),
(6, 'Tester', '<font face="Arial, Verdana"><span style="font-size: 13.3333px;">TesterTesterTester</span></font><span style="font-family: Arial, Verdana; font-size: 13.3333px;">TesterTesterTester</span>', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subscribers`
--

CREATE TABLE IF NOT EXISTS `tb_subscribers` (
  `id` int(3) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_subscribers`
--

INSERT INTO `tb_subscribers` (`id`, `username`, `email`, `status`) VALUES
(1, '', 'jamadagni18@gmail.com', 'Active'),
(2, '', 'yamini@gmail.com', 'Active'),
(3, '', 'yamini.laxmi21@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `roletype` enum('Admin','Superadmin') NOT NULL,
  `profile_image` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `user_name`, `password`, `firstname`, `email`, `phone_number`, `status`, `roletype`, `profile_image`) VALUES
(1, 'admin', 'TVRJek1USXo=', '  admin', 'admin@gmail.com', '2147483647', 'Active', 'Superadmin', 'Lighthouse.jpg'),
(4, 'demo', 'TVRJek5EVTI=', 'demo', 'demo@gmail.com', '563214789', 'Active', 'Admin', 'Tulips.jpg'),
(5, 'jamadagni18', 'TVRJek5EVTI=', 'jamadagni ', 'jamadagni18@gmail.com', '8341853496', 'Active', 'Superadmin', 'step0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_videos`
--

CREATE TABLE IF NOT EXISTS `tb_videos` (
  `id` int(3) NOT NULL,
  `video_name` varchar(20) NOT NULL,
  `date_added` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_videos`
--

INSERT INTO `tb_videos` (`id`, `video_name`, `date_added`, `description`, `status`) VALUES
(1, 'rajiv birthday', '2016-07-22', 'dfdgfjhk', 'Active'),
(4, 'Hotel  Inaguration', '2016-10-29', 'novatel .....', 'Active'),
(5, 'Marriage video', '2016-07-22', '54545454', 'Active'),
(6, 'media3', '2016-10-20', 'dsdserw3re3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_videosdisplay`
--

CREATE TABLE IF NOT EXISTS `tb_videosdisplay` (
  `id` int(3) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `country_id` int(255) NOT NULL,
  `category_id` int(3) NOT NULL,
  `department_id` int(3) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_videosdisplay`
--

INSERT INTO `tb_videosdisplay` (`id`, `user_id`, `country_id`, `category_id`, `department_id`, `video_name`, `video`, `date_added`, `description`, `status`) VALUES
(1, '1', 3, 0, 0, 'Video1', 'file_147204139757bd91b5dc272.mp4', '2016-08-24', 'dfzdfs zdsz zsdfsdf ', 'Active'),
(2, '1', 50, 0, 0, 'Video2', 'file_147204273057bd96ea8a3bd.mp4', '2016-08-24', 'd zsdzs d', 'Active'),
(3, '1', 5, 0, 0, 'Video3', 'file_147204342057bd999c923ce.mp4', '2016-08-24', 'sdf sfsrdfs xf', 'Active'),
(4, '1', 10, 0, 0, 'Video4', 'file_147204577657bda2d00ad8e.mp4', '2016-08-24', 'zdsf sdfsdfsfsed', 'Active'),
(5, '1', 1, 1, 1, 'roads need to wide', 'file_147289371257ca93104b772.jpg', '2016-09-03', 'roads need to wide123123', 'Active'),
(6, '18', 30, 2, 0, 'fdfd', 'file_147340217757d25541e8022.wmv', '2016-09-09', 'dadsa', 'Inactive'),
(7, '8', 1, 2, 2, 'fgfghghfgh', 'file_147403271657dbf44d0261b.jpg', '2016-09-16', 'gfgfgdfg', 'Active'),
(8, '8', 4, 1, 10, 'fgfghghfgh', '', '2016-09-16', 'dsfsdfdf', 'Active'),
(9, '1', 3, 0, 2, 'checking checking', 'file_147403336557dbf6d513ae7.mp4', '2016-09-16', 'checking checking..........', 'Active'),
(10, '1', 7, 1, 1, 'checkin and testing', '', '2016-09-22', 'checking and testing', 'Active'),
(11, '', 0, 0, 0, '', '', '2016-09-29', '', 'Active'),
(12, '', 0, 0, 0, '', '', '2016-09-29', '', 'Active'),
(13, '', 0, 0, 0, '', '', '2016-09-29', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_whatwedo`
--

CREATE TABLE IF NOT EXISTS `tb_whatwedo` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_whatwedo`
--

INSERT INTO `tb_whatwedo` (`id`, `title`, `description`, `status`) VALUES
(1, 'How To Get Involved', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(3, 'Report Corruption', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(4, 'Stay Informed', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(5, 'Unmask The Corrupt Compaign', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active'),
(6, 'Competitions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum	Active	\r\n2	PRIVACY AND POLICY	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_appform`
--
ALTER TABLE `tb_appform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_banners`
--
ALTER TABLE `tb_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_certification`
--
ALTER TABLE `tb_certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_complaints`
--
ALTER TABLE `tb_complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_conditions`
--
ALTER TABLE `tb_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contentpages`
--
ALTER TABLE `tb_contentpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_departments`
--
ALTER TABLE `tb_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_description`
--
ALTER TABLE `tb_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_footertabs`
--
ALTER TABLE `tb_footertabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_getinvolved`
--
ALTER TABLE `tb_getinvolved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_legal`
--
ALTER TABLE `tb_legal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panchayat`
--
ALTER TABLE `tb_panchayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_policy`
--
ALTER TABLE `tb_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_regusers`
--
ALTER TABLE `tb_regusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sitesettings`
--
ALTER TABLE `tb_sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subdeparts`
--
ALTER TABLE `tb_subdeparts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subscribers`
--
ALTER TABLE `tb_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_videosdisplay`
--
ALTER TABLE `tb_videosdisplay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_whatwedo`
--
ALTER TABLE `tb_whatwedo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_aboutus`
--
ALTER TABLE `tb_aboutus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_appform`
--
ALTER TABLE `tb_appform`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_banners`
--
ALTER TABLE `tb_banners`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_certification`
--
ALTER TABLE `tb_certification`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_complaints`
--
ALTER TABLE `tb_complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `tb_conditions`
--
ALTER TABLE `tb_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_contentpages`
--
ALTER TABLE `tb_contentpages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_country`
--
ALTER TABLE `tb_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `tb_departments`
--
ALTER TABLE `tb_departments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tb_description`
--
ALTER TABLE `tb_description`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_footertabs`
--
ALTER TABLE `tb_footertabs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_getinvolved`
--
ALTER TABLE `tb_getinvolved`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_legal`
--
ALTER TABLE `tb_legal`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_panchayat`
--
ALTER TABLE `tb_panchayat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_policy`
--
ALTER TABLE `tb_policy`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_regusers`
--
ALTER TABLE `tb_regusers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tb_sitesettings`
--
ALTER TABLE `tb_sitesettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_subdeparts`
--
ALTER TABLE `tb_subdeparts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_subscribers`
--
ALTER TABLE `tb_subscribers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_videosdisplay`
--
ALTER TABLE `tb_videosdisplay`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_whatwedo`
--
ALTER TABLE `tb_whatwedo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
