-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 10:31 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(2, 'Muntaaha Rahman', 'muntaaha@gmail.com', '123456', 'tatiana-saphira.jpg', 'Indonesia', 'Change the about description for Tatiana from chelsea Islan', '+8801849112288', 'LOL'),
(4, 'Shahreen Haque', 'shahreenhaque11@gmail.com', '123456', 'juie.jpg', 'Bangladesh', 'A girl with a passionate soul who loves creative things. Currently completing BSc in CSE at Daffodil International Univerity', '+8801685823660', 'Student'),
(5, 'Ifrath Jahan', 'ifrathmukta@gmail.com', '123456', 'mukta.jpg', 'Bangladesh', 'I\'m currently studying BSc in CSE at Daffodil International University. Beside that I like designing stuffs. Be it clothes or anything else.I believe in enjoying the task at present.', '+8801969272291', 'Student'),
(6, 'Shohana Dalia', 'shohanaridhi86@gmail.com', '123456', 'Shohana.jpg', 'Bangladesh', 'I\'m a running student of CSE department at Daffodil International University. Now working as a Brand Ambassador at Microsoft Bangladesh and like to create new designs and platforms to works together. ', '+8801777608352', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `description`) VALUES
(1, 'Hello World', 'image.jpeg', 'I am your first Blog!!!! Hurray I am working ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `customer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`, `customer`) VALUES
(21, '::1', 1, '', 'mitu@gmail.com'),
(25, '::1', 1, '', 'mitu@gmail.com'),
(62, '::1', 1, '', ''),
(67, '::1', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `seller` int(111) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`seller`, `cat_id`, `cat_title`) VALUES
(5, 4, 'Other'),
(3, 5, ' Apparel for Men '),
(3, 6, ' Apparel for Women '),
(0, 7, ' Raw Products '),
(0, 8, '  Home & Gardening  '),
(0, 9, 'Tools'),
(0, 10, ' Craft Materials '),
(0, 11, ' Jewelry & Accessories '),
(0, 12, ' Nakshi Kantha '),
(0, 13, ' Beauty & Health '),
(0, 14, 'Cellphone & Telecommunication'),
(0, 15, ' Shoe '),
(5, 16, 'Luggage & Bags'),
(5, 17, 'Mother & Kids'),
(5, 18, 'Food Item');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(5, 'Rianti', 'Riannti@gmail.com', 'rianti123', 'India', 'Calcuta', '8891822', 'Anywhere you want', 'member1.jpg', '::1'),
(6, 'James Bono', 'jamesbono@gmail.com', 'james1123', 'England', 'London', '555-2255-222', 'Hyde Park', 'member2.jpg', '::1'),
(8, 'mitu', 'mitu@gmail.com', '1234', 'bangladesh', 'dhaka', '01730985674', 'uttara', 'erika.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(11, 6, 300, 206863956, 1, 'Small', '2019-02-06', 'Complete'),
(12, 6, 10, 206863956, 1, 'Small', '2019-02-06', 'Complete'),
(13, 7, 166, 2002430815, 1, '', '2020-02-06', 'pending'),
(14, 7, 20, 2002430815, 2, 'Medium', '2020-02-06', 'pending'),
(15, 8, 80, 952886812, 1, '', '2020-06-11', 'pending'),
(16, 8, 200, 152398492, 1, 'Small', '2020-06-11', 'pending'),
(17, 8, 1100, 703139470, 1, 'Medium', '2020-06-11', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(6, 206863956, 10, 'Western Union', 123123, 321321, '02-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(11, 7, 2002430815, '9', 1, '', 'pending'),
(12, 7, 2002430815, '15', 2, 'Medium', 'pending'),
(14, 8, 152398492, '21', 1, 'Small', 'pending'),
(15, 8, 703139470, '24', 1, 'Medium', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `seller` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `seller`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(17, 23, 6, '6', '2020-07-09 16:40:02', 'Red Half Silk Jamdani Saree', 'red1.jpg', 'red2.jpg', 'red3.jpg', 4000, 'Red jamdani, Half Silk Jamdani, Handloomed Jamdani.', '<p>Handloomed jamdani silk saree with allover work. Alltogether 14haat sharee which comes together with blouse piece.</p>'),
(18, 28, 7, '', '2020-07-09 16:39:02', 'Black and White Embroidery Lace', 'lc1.jpg', 'lc2.jpg', 'lc3.jpg', 200, 'white lace,black lace,embroidery lace, lace', '<p>3Yards 22cm black white embroidery lace fabric sewing supplies for garments elastic lace.</p>'),
(19, 24, 7, '7', '2020-07-09 16:37:58', 'Sewing Needle', 'n1.jpg', 'n2.jpg', 'n3.jpg', 50, 'sewing needle, needle set', '<p>Sewing needle set with needles with different thickness to help you sew with threads with different thicknes.</p>'),
(20, 25, 7, '7', '2020-07-09 16:39:36', 'Black Silk Thread', 'bl1.jpg', 'bl2.jpg', 'bl3.PNG', 80, 'silk thread, black', '<p>New 1 roll black silk thread String Cord 0.2mm Thickness with great smoothness.</p>'),
(21, 26, 7, '7', '2020-07-09 16:44:26', 'Wooden Buttons', 'btn1.jpg', 'btn2.jpg', 'btn3.jpg', 200, 'buttons,wooden', '<p>High quality 50pcs 10mm-25mm 2-holes and 4-holes round wooden buttons for clothing, scrapbooking, sewing accessories</p>'),
(22, 41, 11, '5', '2020-07-09 16:42:19', 'Wooden Bangles', 'ch1.jpg', 'ch2.jpg', 'ch3.jpg', 300, 'wooden, bangles', '<p>handmade wooden bangles</p>'),
(23, 41, 11, '5', '2020-07-09 16:42:26', 'Wooden Necklace', 'pn1.jpg', 'pn2.jpg', 'pn3.jpg', 400, 'wooden, Necklace', '<p>Handmade wooden necklace</p>'),
(24, 18, 5, '3', '2020-07-09 18:25:26', 'Black Panjabi', 'pj.jpg', 'pj.jpg', 'pj.jpg', 1100, 'cotton, panjabi, black, panjabi', '<p>Black cotton panjabi</p>'),
(25, 5, 5, '5', '2020-07-07 15:47:56', 'White Printed Cotton T-Shirt', '1.jpg', '2.jpg', '1.jpg', 500, 'White T-Shirt,Cotton T-Shirt,Round Neck.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">White single jersey knit cotton t-shirt with black and green prints. Rib-knit round neck.</span></p>'),
(26, 5, 5, '5', '2020-07-07 15:54:42', 'Mint Green Printed Cotton T-Shirt', '3.jpg', '4.jpg', '3.jpg', 350, 'Mint Green,Cotton,Multicolour Prints.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Mint green single jersey knit cotton t-shirt with multicolour prints. Rib-knit round neck.</span></p>'),
(27, 5, 5, '5', '2020-07-07 16:00:20', 'Orange Printed Cotton T-Shirt', '6.jpg', '7.jpg', '6.jpg', 300, 'Orange,T-Shirt.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">This t-shirt is made from single jersey knit cotton.Features crew neck and black flock prints.</span></p>'),
(28, 5, 5, '5', '2020-07-07 16:09:56', 'Dark Red Mixed Cotton Polo T-Shirt', '10.jpg', '11.jpg', '10.jpg', 550, 'Polo T-Shirt,Dark Red,Ribbed Collar.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Dark red cotton-polyester polo shirt. Features three button placket, slit on both side and ribbed collar.</span></p>'),
(29, 5, 5, '5', '2020-07-07 16:22:41', 'Sea Blue Cotton-Polyester Polo T-Shirt', '8.jpg', '9.jpg', '8.jpg', 550, 'Sea Blue,Polo T-Shirt.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Sea blue pique cotton-polyester polo shirt. Features three button placket and slit on both side.</span></p>'),
(30, 18, 5, '5', '2020-07-07 16:58:08', 'White Dyed Panjabi', 'p1.JPG', 'p2.JPG', 'p1.JPG', 1500, 'White,Panjabi.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">White and yellow dyed viscose-cotton panjabi with prints. Embroidery detailing on arm. Features in-seam side pockets.</span></p>'),
(31, 18, 5, '5', '2020-07-07 17:02:56', 'Deep Orange Printed Slim Fit Viscose-Cotton Panjabi', 'p3.JPG', 'p4.JPG', 'p3.JPG', 1150, 'White,Yellow,Blue,Printed Panjabi.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Deep orange slim fit viscose-cotton panjabi with white, yellow and blue prints.</span></p>'),
(32, 19, 5, '5', '2020-07-07 17:07:26', 'Maroon Check Cotton Lungi', 'lng1.JPG', 'lng2.JPG', 'lng1.JPG', 800, 'Cotton,Lungi.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Maroon, black and yellow check mercerized cotton lungi.</span></p>'),
(33, 20, 5, '5', '2020-07-07 17:17:31', 'Pink Embroidered Cotton Fatua', 'ft1.JPG', 'ft2.JPG', 'ft1.JPG', 1448, 'Pink,Cotton,Embroidered Fatua.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Pink jacquard cotton fatua with embroidery. Features two in-seam side pocket. Embroidery work is completed with pink thread.</span></p>'),
(34, 20, 5, '5', '2020-07-07 17:25:47', 'Mint Green Embroidered Silk-Cotton Fatua', 'ft3.JPG', 'ft4.JPG', 'ft3.JPG', 2643, 'Mint Green,Silk,Cotton,Fatua.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Mint green silk-cotton fatua with embroidery and dual bottom pockets. Embroidery work is completed with mustard and green thread.</span></p>'),
(35, 10, 6, '5', '2020-07-07 17:34:36', 'Cotton T-Shirt', 'girltee1.JPG', 'girltee2.JPG', 'girltee3.JPG', 380, 'Cotton T-shirt.', '<p>Cotton Graphic T-Shirt.</p>'),
(36, 10, 6, '5', '2020-07-07 17:44:08', 'Cotton T-Shirt', 'girltee4.JPG', 'girltee5.JPG', 'girltee3.JPG', 380, 'Black,Cotton T-Shirt.', '<p>Cotton Graphic T-Shirt.</p>'),
(37, 13, 6, '5', '2020-07-07 17:58:29', 'Deep Purple Printed and Embroidered Viscose Salwar Kamiz Set', 'sk1.JPG', 'sk2.JPG', 'sk1.JPG', 4799, 'Embroidery Salwar Kamiz.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Deep purple printed viscose kamiz with embroidery. Comes with viscose salwar and light teal printed cotton dupatta.</span></p>'),
(38, 15, 6, '5', '2020-07-07 18:11:57', 'Olive Embroidered Viscose Top', 'top1.JPG', 'top3.JPG', 'top2.JPG', 1659, 'Olive Viscose Top,Embroidery.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Olive viscose top with embroidery. Embroidery work is completed with red, blue-grey, brown and olive thread.</span></p>'),
(39, 11, 5, '5', '2020-07-07 18:18:14', 'Slim Fit Mixed Cotton Formal Pant', 'pant1.JPG', 'pant3.JPG', 'pant2.JPG', 2249, 'Cotton Formal Pant.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Charcoal grey pinstriped slim fit mixed cotton formal pant. This pant has four pockets, hook-button closure, belt loops and zip fly.</span></p>'),
(40, 21, 5, '5', '2020-07-07 18:24:48', 'Light Blue Slim Fit Cotton Shirt', 'shirt1.JPG', 'shirt3.JPG', 'shirt2.JPG', 2406, 'Light Blue,Cotton Shirt.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Light blue executive premium slim fit cotton shirt. Chest pocket, french placket and round cuffs with adjustable buttoning.</span></p>'),
(41, 16, 6, '5', '2020-07-07 18:32:50', 'Red Printed Cotton Skirt', 'skirt1.JPG', 'skirt2.JPG', 'skirt3.JPG', 1400, 'Red Cotton Skirt.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Red cotton skirt with golden prints and sequin detail. Zip opening on left.</span></p>'),
(42, 22, 6, '5', '2020-07-07 18:38:50', 'Pastel Green Printed and Embroidered Voile Kurti', 'kurti1.JPG', 'kurti3.JPG', 'kurti2.JPG', 2199, 'Pastel Green,Printed Kurti.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Pastel green printed voile kurti with multicolour embroidery.</span></p>'),
(43, 23, 6, '5', '2020-07-07 18:45:20', 'Printed and Embroidered Half Silk Saree', 'sr1.JPG', 'sr3.JPG', 'sr2.JPG', 5255, 'Half Silk Saree.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Half silk saree with white embroidery around pink and green prints. Aanchal with tassel trim and comes with unstitched blouse piece.</span></p>'),
(44, 60, 17, '5', '2020-07-07 19:07:28', 'Red Embroidered Voile Nima', 'nima1.JPG', 'nima3.JPG', 'nima2.JPG', 250, 'Red Nima,Voile Pant.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Red voile nima with white embroidery. Comes with voile pant or nappy.</span></p>'),
(45, 60, 17, '5', '2020-07-07 19:14:32', 'Aqua Printed Voile Frock with Bottom', 'fr1.JPG', 'fr2.JPG', 'fr1.JPG', 499, 'Aqua Printed Voile Frock,Pant,Nappy.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Aqua printed voile frock with lace trim. Comes with matching voile pant or nappy.</span></p>'),
(46, 61, 17, '5', '2020-07-07 19:19:07', 'Light Blue Voile Nima with Bottom', 'ghh.JPG', 'hgf.JPG', 'jfjfjfj.JPG', 380, 'Light Blue Voile Nima.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Light blue voile nima with white prints. Comes with matching voile pant or nappy.</span></p>'),
(47, 42, 12, '5', '2020-07-08 14:25:39', 'Blue Nakshi Kantha Embroidered Silk Saree', 'nk1.JPG', 'nk3.JPG', 'nk2.JPG', 17000, 'Blue Slik Saree,Nakshi Kantha.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Blue silk saree with multicolour Nakshi Kantha embroidery and muslin panel. Comes with tassel trimmed aanchal and matching unstitched blouse piece.</span></p>'),
(48, 42, 12, '5', '2020-07-08 14:36:03', 'Hot Pink Nakshi Kantha Embroidered Silk Saree', 'nk4.JPG', 'nk6.JPG', 'nk5.JPG', 21999, 'Hot Pink Slik Saree,Nakshi Kantha.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Hot pink silk saree with Nakshi Kantha embroidery and tassel trimmed aanchal. Comes with matching unstitched blouse piece. Embroidery work is completed with green, yellow and lavender thread.</span></p>'),
(49, 43, 12, '5', '2020-07-08 14:42:52', 'Printed and Embroidered Silk Shawl', 'sh1.JPG', 'sh3.JPG', 'sh2.JPG', 5999, 'Slik Shawl.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Printed silk shawl with multicolour Nakshi Kantha embroidery and tassel trimmed border.</span></p>'),
(50, 45, 12, '5', '2020-07-08 14:49:22', 'Red Nakshi Kantha Embroidered Cotton Bed Cover', 'bd1.JPG', 'bd2.JPG', 'bd1.JPG', 18650, 'Red Cotton Bed Cover.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Red cotton bed cover with multicolour Nakshi Kantha embroidery.</span></p>'),
(51, 46, 12, '5', '2020-07-08 15:12:59', 'Blue Embroidered Cotton Nakshi Kantha.', 'nk7.JPG', 'nk8.JPG', 'nk9.JPG', 11999, 'Blue Cotton Nakshi Kantha.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Blue cotton Nakshi Kantha with all over three shades of brown embroidery.</span></p>'),
(52, 33, 8, '5', '2020-07-09 16:51:19', 'Pastel Orange Appliqued Cotton Curtain', '12.JPG', '13.JPG', '12.JPG', 1400, 'Cotton Curtain,Multicolour.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Pastel orange cotton curtain with multicolour applique. Hang with loops.</span></p>'),
(53, 33, 8, '5', '2020-07-09 16:55:29', 'Mustard Pillow Cover', '14.JPG', '15.JPG', '14.JPG', 298, 'Cotton Pillow,Printed Pillow.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Mustard printed cotton pillow cover.</span></p>'),
(54, 34, 8, '5', '2020-07-09 17:02:20', 'Jute Placemat', '16.JPG', '18.JPG', '16.JPG', 65, 'Yellow,Teal Jute,Placemat.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Yellow and teal jute weaved placemat.</span></p>'),
(55, 34, 8, '5', '2020-07-09 17:08:08', 'Kitchen Paper Towel Holder', '19.JPG', '20.JPG', '19.JPG', 999, 'Kitchen Paper Towel Roll Holder.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Brass leaves etched golden kitchen paper towel roll holder.</span></p>'),
(56, 66, 16, '5', '2020-07-09 17:29:37', 'Jute Bag', 'jute bag1.JPG', 'jute bag2.JPG', 'jute bag3.JPG', 250, 'Jute Bag.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">jute bag with zippered main compartment and fabric lining. Multicolour fabric and lace trim on exterior. A thread made strap for comfortable movement.</span></p>'),
(57, 66, 16, '5', '2020-07-09 17:43:30', 'Black Hand Painted Jute Bag', 'jute bag7.JPG', 'jute bag8.JPG', 'jute bag9.JPG', 950, 'Black,Pink,Painted Jute Bag.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Black and pink hand painted jute bag with cotton lining, zip closure and two carrying strap.</span></p>'),
(58, 65, 16, '5', '2020-07-09 17:52:32', 'Maroon Leather Bag', 'leather bag1.JPG', 'leather bag2.JPG', 'leather bag3.JPG', 2542, 'Maroon,Leather Bag.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Maroon leather bag with a zippered main compartment and gabardine lined interior. Two inner zip pockets, one outside zip pocket and two slip pockets for organizing small essentials. Two top handles and a detachable and adjustable strap for your comfortable movement. Brown leather pieces trimmed on both sides.</span></p>'),
(59, 66, 16, '5', '2020-07-09 17:55:30', 'Jute Pouches', 'jute bag4.JPG', 'jute bag5.JPG', 'jute bag6.JPG', 300, 'Jute,Bags.', '<p>Jute Pouches bags.</p>'),
(60, 62, 17, '5', '2020-07-09 17:59:55', 'Pant Diapers.', 'dp1.JPG', 'dp2.JPG', 'dp3.JPG', 380, 'Cotton,Diapers.', '<p>Baby Cotton Washable Pant Diapers.</p>'),
(61, 38, 11, '5', '2020-07-09 18:04:56', 'Stud Earrings', 'er1.JPG', 'er2.JPG', 'er3.JPG', 250, 'Stud Earrings.', '<p>Silver Stud Round Circle Earrings.</p>'),
(62, 37, 11, '5', '2020-07-09 18:10:14', 'Butterfly Necklace.', 'nk10.JPG', 'nk12.JPG', 'nk11.JPG', 399, 'Necklace.', '<p>Women Designed For Micro Butterfly Necklace.</p>'),
(63, 51, 13, '5', '2020-07-09 18:16:45', 'Nose Clip.', 'hr1.JPG', 'hr2.JPG', 'hr3.JPG', 450, 'Nose Clip.', '<p>Mini Nasal Stopper Nose Clip Snoring Magnetic Nose Clip For Adult Suitable With Box.</p>'),
(64, 35, 8, '5', '2020-07-09 18:24:08', 'Black Rose Seeds ', '23.JPG', '22.JPG', '21.JPG', 159, 'Black,Rose,Seeds.', '<p>Rare Black Rose Seeds.</p>'),
(65, 44, 12, '5', '2020-07-09 18:31:43', 'Nakshi Kantha Scarf.', 'scarf1.JPG', 'scarf2.JPG', 'scarf1.JPG', 4000, 'Slik Scarf.', '<p>Nakshi Kantha Embroidered Pure Silk Scarf.</p>'),
(66, 64, 16, '5', '2020-07-09 18:39:05', 'Black Fabric Bag', 'fabric bag1.JPG', 'fabric bag2.JPG', 'fabric bag1.JPG', 1150, 'Fabric Bag.', '<p><span style=\"color: #333333; font-family: helveticaregular, arial, sans-serif; font-size: 13px; text-align: justify;\">Black, white and navy blue weaving fabric bag with gabardine lining and leather hand carrying strap.</span></p>'),
(67, 52, 13, '5', '2020-07-09 18:52:59', 'Blackhead Removal', 'skin1.JPG', 'skin2.JPG', 'skin3.JPG', 90, 'Acne Removal.', '<p>Acne Blackhead Removal Stainless</p>'),
(68, 50, 13, '5', '2020-07-09 19:01:32', 'Makeup Brushes Set', 'makeup4.JPG', 'makeup5.JPG', 'makeup6.JPG', 450, 'Makeup,Brushes Set.', '<p>professonal Makeup Brushes Set.</p>'),
(69, 50, 13, '5', '2020-07-09 19:06:01', 'Eyelashes', 'makeup.JPG', 'makeup3.JPG', 'makeup2.JPG', 199, 'Fake Eyelashes.', '<p>Natural Volumn Fake Soft Eyelashes.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `categories` varchar(200) NOT NULL,
  `cid` int(11) NOT NULL,
  `seller` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `categories`, `cid`, `seller`) VALUES
(5, ' T-Shirt ', ' Apparel for Men ', 5, 5),
(10, '  T-Shirt  ', ' Apparel for Women ', 6, 5),
(11, ' Pant ', ' Apparel for Men ', 5, 5),
(13, ' Salwar Kamiz ', ' Apparel for Women ', 6, 5),
(15, ' Top ', ' Apparel for Women ', 6, 5),
(16, ' Skirt ', ' Apparel for Women ', 6, 5),
(17, 'Wooden Jewelry', ' Jewelry & Accessories ', 0, 5),
(18, 'Panjabi', ' Apparel for Men ', 5, 5),
(19, 'Lungi', ' Apparel for Men ', 5, 5),
(20, 'Fatua', ' Apparel for Men ', 5, 5),
(21, 'Shirt', ' Apparel for Men ', 5, 5),
(22, 'Kurti', ' Apparel for Women ', 6, 5),
(23, 'Saree', ' Apparel for Women ', 6, 5),
(24, 'Needle', ' Raw Products ', 7, 5),
(25, 'Thread', ' Raw Products ', 7, 5),
(26, 'Button', ' Raw Products ', 7, 5),
(27, 'Fabric', ' Raw Products ', 7, 5),
(28, 'Lace', ' Raw Products ', 7, 5),
(29, 'Gift Wrapping Supplies', ' Craft Materials ', 10, 5),
(30, 'Paper', ' Craft Materials ', 10, 5),
(31, 'Painting & Drawing', ' Craft Materials ', 10, 5),
(32, 'Party Supplies', ' Craft Materials ', 10, 5),
(33, 'Home Decor', '  Home & Gardening  ', 8, 5),
(34, 'Household Items', '  Home & Gardening  ', 8, 5),
(35, 'Seed', '  Home & Gardening  ', 8, 5),
(36, 'Gardening Tools', ' Home & Gardening  ', 8, 5),
(37, 'Necklaces & Pendants', ' Jewelry & Accessories ', 11, 5),
(38, 'Earrings', ' Jewelry & Accessories ', 11, 5),
(39, 'Rings', ' Jewelry & Accessories ', 11, 5),
(40, 'Bracelets & Bangles', ' Jewelry & Accessories ', 11, 5),
(41, 'Handmade Jewelry', ' Jewelry & Accessories ', 11, 5),
(42, 'Sharee', ' Nakshi Kantha ', 12, 5),
(43, 'Shawl', ' Nakshi Kantha ', 12, 5),
(44, 'Scarf', ' Nakshi Kantha ', 12, 5),
(45, 'Bedcover', ' Nakshi Kantha ', 12, 5),
(46, 'Kantha', ' Nakshi Kantha ', 12, 5),
(47, 'Men', ' Shoe ', 15, 5),
(48, 'Women', ' Shoe ', 15, 5),
(49, 'Kids', ' Shoe ', 15, 5),
(50, 'Makeup', ' Beauty & Health ', 13, 5),
(51, 'Healthcare', ' Beauty & Health ', 13, 5),
(52, 'Skincare', ' Beauty & Health ', 13, 5),
(53, 'Cellphones', 'Cellphone & Telecommunication', 14, 5),
(54, 'Cellphone Parts', 'Cellphone & Telecommunication', 14, 5),
(55, 'Cellphone Accessories', 'Cellphone & Telecommunication', 14, 5),
(56, 'Telephone Accessories', 'Cellphone & Telecommunication', 14, 5),
(57, 'Frozen Food', 'Food Item', 18, 5),
(58, 'Home Made Food', 'Food Item', 18, 5),
(59, 'Coffee & Tea', 'Food Item', 18, 5),
(60, 'Girls Baby Clothing', 'Mother & Kids', 17, 5),
(61, 'Boys Baby Clothing', 'Mother & Kids', 17, 5),
(62, 'Baby Items', 'Mother & Kids', 17, 5),
(63, 'Luggage & Travel Bags', 'Luggage & Bags', 16, 5),
(64, 'Fabric Bags', 'Luggage & Bags', 16, 5),
(65, 'Leather Bags', 'Luggage & Bags', 16, 5),
(66, 'Jute Bags', 'Luggage & Bags', 16, 5),
(67, 'Others', 'Other', 4, 5),
(68, 'Measurement & Analysis Instruments', 'Tools', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(200) NOT NULL,
  `seller_email` varchar(200) NOT NULL,
  `seller_image` text NOT NULL,
  `seller_password` varchar(200) NOT NULL,
  `seller_contact` varchar(200) NOT NULL,
  `seller_location` text NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `seller_ip` varchar(20) NOT NULL,
  `business_desc` text NOT NULL,
  `business_image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `seller_name`, `seller_email`, `seller_image`, `seller_password`, `seller_contact`, `seller_location`, `company_name`, `business_type`, `seller_ip`, `business_desc`, `business_image`, `status`) VALUES
(3, 'rahima', 'rahima@gmail.com', '72049528_2479748668760873_1368916114297323520_n.jpg', '1234', '016245367383', 'Dhaka', 'Shadakalo', 'Appareal', '::1', 'Clothing', 'shadakaala.jpg', 1),
(5, 'Tahia Jaman', 'tahia.jaman@gmail.com', 'tahia.jpg', '1234', '+8801717456788', 'Dhaka', 'Tahia', 'Handmade Jewelry', '::1', 'We provide different handmade jewelries.', 'tahiap.jpg', 1),
(6, 'shoshi', 'shoshi@gmail.com', '72049528_2479748668760873_1368916114297323520_n.jpg', '1234', '01720983444', 'Dhaka', 'Perfecto', 'deshi saree', '::1', 'Deshi Shari Store', '17.jpg', 1),
(7, 'Mahmuda Hasan', 'mahmuda.hasan@gmail.com', 'shui_shuta.jpg', '1234', '+8801712784488', 'Dhaka', 'Shui Shutar Karshaji', 'sewing materials', '::1', 'Sewing materials', 'shui.jpg', 1),
(8, 'Palash Kabir', 'palash_kabir@gmail.com', 'IMG_7601.jpg', '1234', '+8801822667455', 'Chattogram', 'Palash', 'Cellphone & Telecommunication', '::1', 'Cellphone & Telecommunication', 'redmi-note-9-pro-18.jpg', 1),
(9, 'Ishika Rahman', 'ishika.rahman@gmail.com', 'CI.jpg', '1234', '+880155778900', 'Chattogram', 'Ifsha', 'Craft Materials', '::1', 'Craft Materials', 'ifsha-pp.jpg', 1),
(10, 'Roddur Hasan', 'roddur_hasan1@gmail.com', 'eker-bhitor-shob_seller.pp.JPG', '1234', '+8801716774566', 'Dhaka', 'Eker Bhitor Shob', 'various category', '::1', 'Variety of products at your door', 'eker-bhitor-shob.PNG', 1),
(11, 'Jeba Noor', 'jeba12.noor@gmail.com', 'food-seller-pp.JPG', '1234', '+8801811445000', 'Chattogram', 'à¦˜à¦°à§‡ à¦¬à¦¸à§‡ à¦¦à§‡à¦¶à§€ à¦¬à¦¿à¦¦à§‡à¦¶à§€ à¦°à¦¾à¦¨à§à¦¨à¦¾', 'Food Items', '::1', 'Various homemde Food', 'food.PNG', 1),
(12, 'Sabbir Hossain', 'sabbir_hossain@gmail.com', 'Nakshi_kanthar_shomahar-seller.pp.JPG', '1234', '+8801717654435', 'Sylhet', 'Nakshi Kanthar Shomahar', 'Different nakshi kantha motif products', '::1', 'Different nakshi kantha motif products', 'nakhi-kantha-pp.PNG', 1),
(13, 'Shukh kabir', 'shukh_kabir@gmail.com', 'shuksari-seller-pp.JPG', '1234', '+8801718775886', 'Dhaka', 'Shuksari', 'shoes', '::1', 'Unique and pretty shoes', 'shuksari-pp.jpg', 1),
(14, 'Tamin Shahriar', 'tamin11_shahriar@gmail.com', 'ghor_shajai-seller.pp.JPG', '1234', '+8801876644578', 'Dhaka', 'Ghor Shajai', 'Home & Gardening', '::1', 'Home & Gardening products', 'ghor_shajai.pp.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `seller` int(11) NOT NULL,
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`seller`, `slide_id`, `slide_name`, `slide_image`) VALUES
(0, 8, 'Slide Number 6', 'slide-6.jpg'),
(0, 9, 'Slide Number 7', 'slide-7.jpg'),
(0, 10, 'Editing Slide Number 8', 'slide-5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
