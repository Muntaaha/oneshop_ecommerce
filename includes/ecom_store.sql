-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 04:02 AM
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
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0, 2, ' Women '),
(0, 3, 'Kids'),
(0, 4, 'Other'),
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
(0, 15, ' Shoe ');

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
(9, 6, 206863956, '10', 1, 'Small', 'pending'),
(10, 6, 206863956, '15', 1, 'Small', 'pending'),
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
(3, 5, 2, '', '2018-10-18 18:29:33', 'Girl Polos T-Shirt', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', '', 55, 'Shirt', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur cupiditate animi, voluptas neque quasi qui unde fuga porro vero magnam maiores optio amet quos temporibus? Amet saepe fugit nostrum a?</p>'),
(4, 1, 1, '', '2018-10-18 18:31:29', 'Man Geox Winter Jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 100, 'Snake Skin', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur cupiditate animi, voluptas neque quasi qui unde fuga porro vero magnam maiores optio amet quos temporibus? Amet saepe fugit nostrum a?</p>'),
(11, 5, 1, '', '2018-10-28 13:01:06', 'Grey Man T-Shirt', 'grey-man-1.jpg', 'grey-man-2.jpg', 'grey-man-3.jpg', 50, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi rem nemo, autem at ad temporibus, maiores ducimus sed quam enim reprehenderit distinctio similique debitis, quis corrupti est. Sed, rem, voluptatibus!</p>'),
(12, 5, 1, '', '2018-10-28 13:01:56', 'Man Polo Casual T-Shirt', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 45, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi rem nemo, autem at ad temporibus, maiores ducimus sed quam enim reprehenderit distinctio similique debitis, quis corrupti est. Sed, rem, voluptatibus!</p>'),
(13, 5, 1, '', '2018-10-28 13:02:40', 'Boy Polos T-Shirt', 'polos-tshirt-1.jpg', 'polos-tshirt-2.jpg', '', 40, 'Casual', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi rem nemo, autem at ad temporibus, maiores ducimus sed quam enim reprehenderit distinctio similique debitis, quis corrupti est. Sed, rem, voluptatibus!</p>'),
(17, 12, 6, '', '2020-02-22 12:37:40', 'Red Half Silk Jamdani Saree', 'img-3.jpg', 'img-3.jpg', 'img-3.jpg', 4000, 'Red jamdani, Half Silk Jamdani, Handloomed Jamdani.', '<p>Handloomed jamdani silk saree with allover work. Alltogether 14haat sharee which comes together with blouse piece.</p>'),
(18, 26, 7, '', '2020-02-11 18:35:29', 'Black and White Embroidery Lace', 'lc1.jpg', 'lc2.jpg', 'lc3.jpg', 200, 'white lace,black lace,embroidery lace, lace', '<p>3Yards 22cm black white embroidery lace fabric sewing supplies for garments elastic lace.</p>'),
(19, 21, 7, '', '2020-02-11 18:43:47', 'Sewing Needle', 'n1.jpg', 'n2.jpg', 'n3.jpg', 50, 'sewing needle, needle set', '<p>Sewing needle set with needles with different thickness to help you sew with threads with different thicknes.</p>'),
(20, 22, 7, '', '2020-02-11 18:48:47', 'Black Silk Thread', 'bl1.jpg', 'bl2.jpg', 'bl3.PNG', 80, 'silk thread, black', '<p>New 1 roll black silk thread String Cord 0.2mm Thickness with great smoothness.</p>'),
(21, 23, 7, '', '2020-02-11 18:57:40', 'Wooden Buttons', 'btn1.jpg', 'btn2.jpg', 'btn3.jpg', 200, 'buttons,wooden', '<p>High quality 50pcs 10mm-25mm 2-holes and 4-holes round wooden buttons for clothing, scrapbooking, sewing accessories</p>'),
(22, 17, 11, '5', '2020-02-23 02:19:24', 'Wooden Bangles', 'ch1.jpg', 'ch2.jpg', 'ch3.jpg', 300, 'wooden, bangles', '<p>handmade wooden bangles</p>'),
(23, 17, 11, '5', '2020-02-23 03:00:03', 'Wooden Necklace', 'pn1.jpg', 'pn2.jpg', 'pn3.jpg', 400, 'wooden, Necklace', '<p>Handmade wooden necklace</p>'),
(24, 6, 5, '3', '2020-02-23 03:22:25', 'Black Panjabi', 'pj.jpg', 'pj.jpg', 'pj.jpg', 1100, 'cotton, panjabi, black, panjabi', '<p>Black cotton panjabi</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `categories` varchar(200) NOT NULL,
  `seller` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `categories`, `seller`) VALUES
(1, '  Jackets Kulit ', ' Apparel for Men ', 1),
(2, ' Accessories ', ' Jewelry & Accessories ', 0),
(3, '  Shoes  ', ' Shoe ', 0),
(5, ' T-Shirt ', ' Apparel for Men ', 0),
(6, '     Panjabi     ', '', 3),
(7, '  Lungi', '', 3),
(8, 'Fatua', '', 3),
(9, 'Shirt', '', 3),
(10, ' T - Shirt ', ' Apparel for Women ', 0),
(11, ' Pant ', ' Apparel for Men ', 0),
(12, 'Sharee', '', 3),
(13, ' Salwar Kamiz ', ' Apparel for Women ', 0),
(14, 'Kurti', '', 3),
(15, ' Top ', ' Apparel for Women ', 5),
(16, ' Skirt ', ' Apparel for Women ', 5),
(17, 'Wooden Jewelry', ' Jewelry & Accessories ', 5);

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
(1, 'Jahin Sunnah', 'jahinsunnah@gmail.com', '', '1234', '01845773311', 'Mirpur 7', 'Palash ', '0000-00-00', '::1', '', '', 0),
(3, 'rahima', 'rahima@gmail.com', '72049528_2479748668760873_1368916114297323520_n.jpg', '1234', '016245367383', 'Dhaka', 'Shadakalo', 'Appareal', '::1', 'Clothing', 'shadakaala.jpg', 1),
(5, 'Tahia Jaman', 'tahia.jaman@gmail.com', 'tahia.jpg', '1234', '+8801717456788', 'Dhaka', 'Tahia', 'Handmade Jewelry', '::1', 'We provide different handmade jewelries.', 'set1.jpg', 1),
(6, 'shoshi', 'shoshi@gmail.com', '72049528_2479748668760873_1368916114297323520_n.jpg', '1234', '01720983444', 'Dhaka', 'perfecto', 'deshi saree', '::1', 'jkk', '17.jpg', 1);

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
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
