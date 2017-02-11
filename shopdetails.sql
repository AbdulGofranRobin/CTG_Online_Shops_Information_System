-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 08:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cat_info`
--

CREATE TABLE `cat_info` (
  `cat_id` int(20) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_image` varchar(200) NOT NULL,
  `del_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_info`
--

INSERT INTO `cat_info` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`, `del_status`) VALUES
(1, 'Watch', 'Xenlex Watches: Womens Wrist Watch\r\n', '../upload/1461546178_571d6cc267ce0_xenlex-watch-23-aponzone-630x552.jpg', 0),
(2, 'T-shirt', 'A T-shirt is a style of unisex fabric shirt.', '../upload/1461546402_571d6da2c4287_flash-logo-premium-aponzone-630x552.jpg', 0),
(4, 'shirt', 'Enzyme and Silicon wash export quality.', '../upload/1461546955_571d6fcb0dc7c_polo-shirt-10-aponzone-630x552.jpg', 0),
(5, 'jeans Mens', 'Tanjim Deep Blue Jeans.', '../upload/1461547507_571d71f3e5f21_tanjim_deep_blue_jeans_a_1_1-630x552.jpg', 0),
(6, 'Shoes', 'Reebok Quantum Training Shoes.', '../upload/1461547723_571d72cb1d13d_IMG_4385-630x552.JPG', 0),
(7, 'Blazer', 'Jacket Blazer Masculine.', '../upload/1461548197_571d74a5e326d_Masculine-630x552.jpg', 0),
(8, 'Panjabi', 'Nice Punjabi with best quality fabrics.', '../upload/1461548303_571d750f158d1_ka-02-aponzone-630x552.jpg', 0),
(9, 'Wallets', 'Viper Leather Wallet.', '../upload/1461548475_571d75bb83eaa_viper-vlw-33-02-aponzone-630x552.jpg', 0),
(10, 'Body spray', 'My Ego Men Dark Chocolate Deo', '../upload/1461548584_571d76288ce93_my-ego-dark-chocolate-body-spray-aponzone-630x552.JPG', 0),
(11, 'Salwar Kameez', 'Fashionable and Gorgeous Salwar Kameez', '../upload/1461548742_571d76c633d3f_24nipunSalwarKameez-630x552.jpg', 0),
(12, 'Hijab', 'Trendy and Stylish Burka Collection', '../upload/1461548981_571d77b5ee15f_7279-630x552.jpg', 0),
(13, 'Lehenga', 'Fashionable and Eye-Catching Lehenga.', '../upload/1461549118_571d783ec10e9_31nipunlehenga-630x552.jpg', 0),
(14, 'Sharee', 'Vipul Hit Indian Sharee', '../upload/1461549383_571d79472b749_vipul-hit-12552-aponzone-630x552.jpg', 0),
(15, 'Jewellery', 'Frenz Jewellery', '../upload/1461549534_571d79de4802f_golden-crystal-heart-shape-pendant-01-aponzone-630x552.jpg', 0),
(16, 'Mobile', 'T-Mobile Nokia Lumia 635 ', '../upload/1461549827_571d7b032bb07_t-mobile-nokia-lumia-635-no-contract-phone-white-1-630x552.jpg', 0),
(17, 'LED TV ', 'EUROSTAR LED TV T30LED-A14', '../upload/1461549993_571d7ba986c59_eurostar-led-tv-t30led-a14-iceeurled30a14ona001-630x552.jpg', 0),
(18, ' DVD', 'TOSHIBA DVR620 1080p DVD Recorder / VCR Combo/ VHS to DVD Converter', '../upload/1461550069_571d7bf52bba3_toshiba-dvr620-1080p-dvd-recorder-vcr-combo-vhs-to-dvd-converter-1-630x552.jpg', 0),
(19, 'Laptop', 'Dell Inspiron 5000 5558 Core i5 - (8 GB DDR3/1 TB HDD/', '../upload/1461550263_571d7cb7f0574_dell-inspiron-notebook-400x400-imae95wwyrfshv2s-630x552.jpeg', 0),
(20, 'Speaker .', 'Havit Speaker with Sub-woofer Super Bass | HV-SF3000U ...', '../upload/1461550395_571d7d3bbf608_Speaker-with-Sub-woofer-Super-Bass-HV-SF3000U-3368892_1-630x552.jpg', 0),
(21, 'DSLR Camera ', 'Nikon D5500 kit2 18-140mm', '../upload/1461550502_571d7da6bb7e0_nikon-d5500-wi-fi-digital-slr-camera-and-18-140mm-vr-dx-af-s-lens-black-with-32gb-card-case-filter-accessory-kit-2-630x552.jpg', 1),
(22, 'Air Conditioner', 'HSU-12LKN03 Air Conditioner Split Unit', '../upload/1461550660_571d7e44b33ee_air8-630x552.PNG', 0),
(23, ' FREEZER ', 'WHIRLPOOL UPRIGHT FREEZER WVN 1863 A+NFN', '../upload/1461550796_571d7eccbb137_WVN 1863 NFN-630x552.jpeg', 0),
(24, 'DSLR Camera', 'This is Dslr camera.', '../upload/1461997340_57244f1ce955a_nikon-d5500-wi-fi-digital-slr-camera-and-18-140mm-vr-dx-af-s-lens-black-with-32gb-card-case-filter-accessory-kit-2-630x552.jpg', 1),
(25, 'DSLR Camera', 'This is dslr camera.', '../upload/1461997676_5724506c2d8da_sony-alpha-dslr-a550-14-2mp-digital-slr-camera-body-only-9-630x552.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `market_info`
--

CREATE TABLE `market_info` (
  `market_id` int(20) NOT NULL,
  `market_name` varchar(50) NOT NULL,
  `market_addres` varchar(100) NOT NULL,
  `market_image` varchar(200) NOT NULL,
  `market_contact` varchar(20) NOT NULL,
  `market_cloose_day` varchar(20) NOT NULL,
  `del_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_info`
--

INSERT INTO `market_info` (`market_id`, `market_name`, `market_addres`, `market_image`, `market_contact`, `market_cloose_day`, `del_status`) VALUES
(1, 'sanmer', 'Cda Abenue', '../upload/1461544115_571d64b3ee10a_57_big.jpg', '01816701044', 'Tuesday', 0),
(2, 'afmi plaza', 'Cda Abenue', '../upload/1461544211_571d651337cba_afmi_plaza.jpg', '01816701045', 'sunday', 0),
(3, 'Mimi super', 'Cda Abenue', '../upload/1461544262_571d654696d55_92061441.jpg', '01816656574', 'Sunday', 0),
(4, 'Yunusco', 'Cda Abenue,Gec More.', '../upload/1461544445_571d65fdc0eb9_Yunusco.jpg', '01816656587', 'off', 0),
(5, 'Akhtaruzzaman', 'Agrabad', '../upload/1461544858_571d679a285a9_Akhtaruzzaman Center, Agrabad.jpg', '01816656574', 'sunday', 0),
(6, 'amin-center', '320 Cda Abenue,Near probortok circle.', '../upload/1461545033_571d684924e9b_amin-center-chittagong.jpg', '01816701045', 'sunday', 0),
(7, 'New market', 'station road', '../upload/1461545144_571d68b84c1a0_IMG_5798.JPG', '01816701044', 'Friday', 0),
(8, 'Guljar tower', 'Chokbazar', '../upload/1461545238_571d69161cb8e_Guljar tower.JPG', '01816656574', 'Sunday', 0),
(9, 'Highway', 'Lal khan bazar', '../upload/1461545359_571d698f17313_Highway Plaza.jpg', '01816656574', 'off', 0),
(10, 'Central Plaza', 'Gec Circle.', '../upload/1461545484_571d6a0cbf9d3_IMG_5820.JPG', '01816656576', 'Friday', 0),
(11, 'VIP Tower.', 'Kazir Dewri', '../upload/1461545651_571d6ab34d3e5_Lal Khan Bazar. VIP Tower.JPG', '01816701045', 'Friday', 0),
(12, ' Shopping', '2 nbr gate,chittagong.', '../upload/1461545993_571d6c09d1c54_chittagong-shopping-complex.jpg', '01816701045', 'Friday', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `shop_id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `vendor_id` int(50) NOT NULL,
  `market_id` int(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_owner` varchar(50) NOT NULL,
  `shop_no` varchar(50) NOT NULL,
  `shop_floor` varchar(50) NOT NULL,
  `shop_desc` varchar(200) NOT NULL,
  `shop_contact` varchar(50) NOT NULL,
  `shop_image` varchar(200) NOT NULL,
  `approve` int(10) NOT NULL,
  `del_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`shop_id`, `cat_id`, `vendor_id`, `market_id`, `shop_name`, `shop_owner`, `shop_no`, `shop_floor`, `shop_desc`, `shop_contact`, `shop_image`, `approve`, `del_status`) VALUES
(1, 1, 0, 1, 'watchmarker', 'Forhad Sikder', '1', 'First', 'this is new shop.Every one can  be all information.. ', '01817567931', '../upload/1462481363_572bb1d30c796_IMG_0111_large.jpg', 1, 0),
(2, 6, 0, 2, 'Bata', 'Robin khan', '4', 'Four', 'New For the modern and woman who loves quality shoes,', '01817567937', '../upload/1462481620_572bb2d428606_1461552130_571d84024eb51_bata_setiacitymall.jpg', 1, 0),
(3, 5, 0, 4, 'Gents Formal', 'ifran khan', '3', 'Three', ' We are an exclusive shop for gents wear in Kasaragod. We sell all new collection clothes.', '01817567956', '../upload/1462482373_572bb5c51bff2_1461552891_571d86fbb31cb_True-Religion-jeans-store-Berlin-02.jpg', 1, 0),
(4, 2, 0, 5, 'T shirt Store', 'Asik Khan', '2', 'Two', 'As you can guess from the name they mainly do T-shirts but these aren t just any t-shirts, they are all made from the highest grade of fairtrade cotton', '01817567937', '../upload/1462483244_572bb92c30241_tshirt-store-leeds-L-TJ5DZ8.jpeg', 1, 0),
(5, 6, 0, 2, 'Shoe Place', 'Babu', '4', 'Four', 'Well done to the proprietors for getting this Pun Shop Name up and running.', '01817567937', '../upload/1462484151_572bbcb753bfb_DSC_0019.jpg', 1, 0),
(6, 6, 0, 1, 'Stride Rite', 'Shakil', '3', 'Three', 'Stride Rite is a footwear retailer that offers both brand names and private label products, in a very unique shopping atmosphere. Its stores feature games.', '01817567937', '../upload/1462484517_572bbe250938b_1461552541_571d859dd51f4_DSCN5468-632x422.jpg', 1, 0),
(7, 15, 0, 5, 'Royal ', 'Fahim', '2', 'Two', 'When it comes to Pun Shop Names, you need an open mind. Or, in this case, an opal mind.', '01817567937', '../upload/1462560892_572ce87caf666_1461551951_571d834f3843e_storein.jpg', 1, 0),
(8, 19, 0, 10, 'Sony', 'Asik Khan', '4', 'Four', 'Laptop Repair Penrith Computer Shop Penrith Laptop Shop Penrith.', '01817567956', '../upload/1462561403_572cea7beead4_smc sony centre.jpg', 1, 0),
(9, 19, 0, 1, 'HP', 'ifran khan', '4', '3', 'The Laptop Shop was set up in 2009 by a team of highly experienced individuals from the world of IT. The Laptop Shop operates an extensive support function.', '01817567931', '../upload/1462561556_572ceb1478733_laptop_shop_penrith.jpg', 1, 0),
(10, 16, 0, 2, 'Samsung', 'Forhad Sikder', '4', 'Four', 'Best Buy va a incluir pequeÃ±as tiendas dedicadas a Samsung coincidiendo con el lanzamiento del Samsung Galaxy.', '01817567956', '../upload/1462561916_572cec7c1516b_gsmarena_001.jpg', 1, 0),
(11, 16, 0, 1, 'Nokia', 'Asik Khan', '4', 'Four', 'Mobile Phone Stores in Sanmar', '01817567937', '../upload/1462562196_572ced949eb2a_Haldwani-mobiledealers.jpg', 1, 0),
(12, 16, 0, 4, 'Phone shop', 'Robin', '3', 'Three', 'You arent required to go all the way to standard or area mobile shops only to purchase a mobile phone of your choice. These shops give you the distinctive.', '01817567931', '../upload/1462562391_572cee57087d3_New Mobile Phones Shops In Faisalabad 2.jpg', 1, 0),
(13, 16, 0, 7, 'Walton', 'ifran khan', '4', 'Four', 'Best Smartphones from Walton Mobile', '01817567956', '../upload/1462562713_572cef99848db_best-mobile-phone-shops-mumbai.jpg', 1, 0),
(14, 16, 0, 5, 'Symphony', 'Forhad Sikder', '2', 'Two', 'The Mobile Store Games And Accessories Picture', '01817567956', '../upload/1462562931_572cf07342bb8_hapurweb_Mobile-Shops-in-_d758ddea-8_24-02-2016132914.jpg', 1, 0),
(15, 4, 0, 1, 'shirt shops', 'Shohag', '1', 'First', 'shirt shops create a certain ambiance, but not one that one council member wants to see amplified', '01817567937', '../upload/1462563687_572cf36743c74_5e9e00c80fa131e89b869878f1d0c1f8.jpg', 1, 0),
(16, 7, 0, 1, 'Blazar store', 'Asik Khan', '1', 'First', 'SUITES AND BLAZER FOR RENT IN ctg', '01817567956', '../upload/1462566656_572cff0016b5d_84608012.jpg', 1, 0),
(17, 7, 0, 2, 'Local', 'Rony', '1', 'First', 'SUITES AND BLAZER FOR RENT IN CTG', '01817567937', '../upload/1462566815_572cff9f1cab2_sitaphal-4752-1-1-1447156624.png', 1, 0),
(18, 8, 0, 4, 'Lates', 'Babu', '3', 'Three', ' shopping getting momentum in districts', '01817567937', '../upload/1462567194_572d011a721ef_Bogra-Eid-shopping.jpg', 1, 0),
(19, 8, 0, 11, 'Lates', 'Asik Khan', '4', 'Three', 'Sales personnel display mens clothes, panjabis, at a store in Dhaka', '01817567937', '../upload/1462567416_572d01f806a4a_bs029.jpg', 1, 0),
(20, 9, 0, 9, 'Charmes', 'Asik Khan', '2', 'Three', 'This is my new pastel pink and green wallet from Maku Store CTG', '01817567956', '../upload/1462646703_572e37af6af6e_348ss.jpg', 1, 0),
(21, 9, 0, 11, 'Four six', 'ifran khan', '4', 'Four', 'mens black superdry wallet mens black superdry wallet', '01817567956', '../upload/1462646896_572e387079914_348s.jpg', 1, 0),
(22, 10, 0, 8, 'Nokin', 'Babu', '1', 'Four', 'One of The Body Shop stores', '01817567937', '../upload/1462647319_572e3a1763d0b_Spa-hair-and-gifts.jpg', 1, 0),
(23, 10, 0, 12, 'Ronis', 'Forhad Sikder', '2', 'Three', 'These Are A Few Of My Favorite Things', '01817567931', '../upload/1462647473_572e3ab12b247_5c5d6d395c9eef59883d5f67347d50e5.jpg', 1, 0),
(24, 16, 0, 7, 'Nokia', 'Robin Khan', '2', '3', 'this is new product .........', '01816701044', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_info`
--

CREATE TABLE `vendor_info` (
  `vendor_id` int(100) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_mobile` varchar(50) NOT NULL,
  `vendor_password` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_info`
--

INSERT INTO `vendor_info` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_mobile`, `vendor_password`, `status`) VALUES
(1, 'robin', 'a.g.asif44@gmail.com', '01816701044', '1234', 0),
(2, 'Asif khan', 'a.g.robin44@gmail.com', '0181456732', '12345', 1),
(3, 'Roni', 'a.g.Roni44@gmail.com', '01816701045', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_info`
--
ALTER TABLE `cat_info`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `market_info`
--
ALTER TABLE `market_info`
  ADD PRIMARY KEY (`market_id`),
  ADD UNIQUE KEY `market_name` (`market_name`,`market_contact`);

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `vendor_info`
--
ALTER TABLE `vendor_info`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `vendor_email` (`vendor_email`),
  ADD UNIQUE KEY `vendor_mobile` (`vendor_mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cat_info`
--
ALTER TABLE `cat_info`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `market_info`
--
ALTER TABLE `market_info`
  MODIFY `market_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `shop_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `vendor_info`
--
ALTER TABLE `vendor_info`
  MODIFY `vendor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
