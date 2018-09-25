-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 01:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_game_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'sagor@mail.com', '12345'),
(2, 'sam@mail.com', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Card'),
(4, 'Puzzle'),
(5, 'Racing'),
(6, 'Role Playing'),
(7, 'Sports'),
(8, 'Strategy'),
(9, 'Simulation'),
(10, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_gender` varchar(100) NOT NULL,
  `customer_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_gender`, `customer_image`) VALUES
(3, '::1', 'sagor ahamed', 'sa@mailc.om', '12345', 'BD', 'Dhaka', '01767898765', 'Hazaribagh', 'Male', 'asd.png');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `developer_id` int(100) NOT NULL,
  `developer_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`developer_id`, `developer_title`) VALUES
(2, '2K Games'),
(4, 'Activision'),
(7, 'Capcom'),
(8, 'Electronic Arts'),
(9, 'Gameloft'),
(10, 'Maxis Software'),
(11, 'Glu Mobile'),
(12, 'Microsoft Studios'),
(13, 'Nintendo'),
(15, 'Rockstar Games'),
(16, 'Sega'),
(17, 'Telltale Games'),
(18, 'Ubisoft'),
(19, 'WB Games');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `header_image` varchar(100) NOT NULL,
  `ads_cover_image` varchar(100) NOT NULL,
  `ads_center_image` varchar(100) NOT NULL,
  `slide_image_1` varchar(100) NOT NULL,
  `slide_image_2` varchar(100) NOT NULL,
  `slide_image_3` varchar(100) NOT NULL,
  `slide_image_4` varchar(100) NOT NULL,
  `slide_image_5` varchar(100) NOT NULL,
  `slide_image_6` varchar(100) NOT NULL,
  `slide_image_7` varchar(100) NOT NULL,
  `news_feed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`id`, `header_image`, `ads_cover_image`, `ads_center_image`, `slide_image_1`, `slide_image_2`, `slide_image_3`, `slide_image_4`, `slide_image_5`, `slide_image_6`, `slide_image_7`, `news_feed`) VALUES
(2, 'header.png', 'banner.gif', 'asphalt.png', 'wwe.png', 'Batman.png', 'Cod.png', 'Fifa.png', 'Kof.png', 'Moto_gp.png', 'Nfs_the_run.png', 'Welcome To Our Site. Current News:New Update Available Download Asphalt 2018!!!  ||  Despite the launch of two new consoles last year, PC dominated much of the conversation in 2017 thanks to the phenomenal success of PlayerUnknown\'s Battlegrounds, which released in Early Access in March and proceeded to shatter player and sales records throughout the remainder of the year. But while PUBG may have been the platform\'s biggest success story in 2017, it certainly wasn\'t the only noteworthy PC game to come out last year, with critically acclaimed titles like Divinity: Original Sin II and Doki Doki Literature Club all releasing exclusively for the platform');

-- --------------------------------------------------------

--
-- Table structure for table `mastercard`
--

CREATE TABLE `mastercard` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_address` varchar(100) NOT NULL,
  `card_mm` int(11) NOT NULL,
  `card_yy` int(11) NOT NULL,
  `card_cvc` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastercard`
--

INSERT INTO `mastercard` (`id`, `customer_id`, `customer_ip`, `card_num`, `card_name`, `card_address`, `card_mm`, `card_yy`, `card_cvc`, `product_quantity`, `total_price`, `date`, `status`) VALUES
(1, 3, '::1', 2147483647, 'Sagor ahamed', 'Hazaribagh', 8, 19, 150, 1, 19, '2018/02/14', 'Deliver'),
(2, 3, '::1', 2147483647, 'Sagor ahamed', 'Hazaribagh', 8, 19, 150, 1, 0, '2018/02/14', 'pending'),
(3, 3, '::1', 2147483647, 'Sagor ahamed', 'Hazaribagh', 8, 19, 150, 1, 0, '2018/02/14', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(150) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_developers` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_des` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_developers`, `product_title`, `product_price`, `product_des`, `product_image`, `product_keyword`) VALUES
(1, 5, 8, 'Need for Speed: The Run', 10, 'Game Info\r\n\r\nSystem Requirements\r\n\r\nMinimum System Requirements \r\n\r\nOS: Windows Vista (SP2) or Windows 7 (SP1) \r\nDirectX: DirectX 10 \r\nProcessor: 3.0 GHz Intel Core 2 Duo or AMD Equivalent \r\nMemory: 3 GB \r\nHard Drive: 18 GB \r\nGraphics card (AMD): 512 MB RAM ATI Radeon 4870 or higher performance \r\nGraphics card (NVIDIA): 512 MB RAM NVIDIA GeForce 8800 GT or higher performance \r\nSound card: DirectX Compatible \r\nKeyboard or Gamepad or Steering Wheel \r\nOnline: 512 KBPS or faster Internet connection \r\n\r\nRecommended System Requirements \r\n\r\nOS: Windows 7 SP1 64-bit \r\nDirectX: DirectX 11 \r\nProcessor: 3.0 Mhz Intel Core 2 Quad or AMD Equivalent \r\nMemory: 4 GB \r\nHard Drive: 18 GB \r\nGraphics card (AMD): 1024 MB RAM ATI Radeon 6950 \r\nGraphics card (NVIDIA): 1024 MB RAM NVIDIA GeForce GTX560 \r\nSound Card: DirectX Compatible \r\nKeyboard or Gamepad or Steering Wheel \r\nOnline: 512 KBPS or faster Internet connection \r\n\r\nFile Size\r\n9.1GB', 'nfstr.jpg', 'pc game, racing'),
(2, 1, 18, 'Assassin\'s Creed: Revelations', 9, 'Game Info\r\n\r\nMinimum System Requirements:\r\n\r\nCPU: Intel Core®2 Duo E4300 @ 1.8 Ghz or AMD Athlon64 X2 4600+ @ 2.4GHZ\r\nRAM: 1.5 GB Windows® XP / 2 GB Windows Vista® - Windows 7®\r\nGPU: 256 MB DirectX® 9.0–compliant card with Shader Model 3.0 or higher (see supported list)\r\nDX: DirectX® June2010 or newer\r\nOS: Windows® XP SP3 / Windows Vista® SP2 /Windows 7® SP1\r\n\r\nHDD: 12 GB\r\nSound: DirectX 9.0 – compliant sound card\r\nRecommended peripheral: Keyboard, Mouse\r\n\r\n\r\nRecommended System Requirements:\r\n\r\nCPU: Intel Core®2 Duo E6700 @ 2.6 GHz or AMD Athlon64 X2 6000+ @ 3.0Ghz or better\r\n\r\nRAM: 1.5 GB Windows® XP / 2 GB Windows Vista® - Windows 7®\r\n\r\nGPU: 512 MB DirectX® 9.0 – compliant card with Shader Model 5.0 or higher\r\n\r\nDX: DirectX® June2010 or newer\r\n\r\nOS: Windows® XP SP3 / Windows Vista® SP2 /Windows 7® SP1\r\n\r\nHDD: 12 GB\r\n\r\nSound: Surround Sound 5.1 capable sound card\r\n\r\nFile Size\r\n7.9GB', 'acr.jpg', 'pc game, action'),
(3, 1, 7, 'Devil May Cry 4', 6, 'Game Info\r\n\r\nMinimum System Requirements:\r\nCPU: Pentium 4 @ 3 GHz\r\nRAM: 1 GB (2GB for Vista)\r\nGPU: 256 MB (nVidia GeForce 7300GS)\r\nDX: DirectX 9.0c\r\nOS: Windows XP/Vista\r\nSound: DirectX Compatible\r\nODD: DVD Rom Drive\r\n\r\nRecommended peripheral: Keyboard & Mouse\r\n\r\n\r\nRecommended System Requirements:\r\n\r\nCPU: Intel Core 2 DUO E6600 (2.4 GHz)\r\nRAM: 2 GB\r\nGPU: 512 MB (nVidia GeForce 8800GT)\r\nDX: DirectX 10\r\nOS: Windows Vista\r\nSound: DirectX Compatible\r\nODD: DVD Rom Drive\r\n\r\nFile Size\r\n3.2GB', 'dmc4.jpg', 'pc game, action'),
(4, 2, 17, 'The Walking Dead Season 1', 9, 'Game Info\r\n\r\nMinimum System Requirements:\r\n\r\nCPU: 2.0 GHz Pentium 4 or equivalent\r\nCPU SPEED: Info\r\nRAM: 3 GB\r\nOS: XP Service Pack 3\r\nVIDEO CARD: ATI or NVidia card w/ 512 MB RAM (Not recommended for Intel integrated graphics)\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 2 GB\r\n\r\nRecommended System Requirements:\r\n\r\nCPU: Core 2 Duo 2 GHz or equivalent\r\nCPU SPEED: Info\r\nRAM: 3 GB\r\nOS: Windows 7\r\nVIDEO CARD: ATI or NVidia card w/ 1024 MB RAM (Not recommended for Intel integrated graphics)\r\nSOUND CARD: Yes\r\nFREE DISK SPACE: 2 GB\r\n\r\nFile Size\r\n7.9GB', 'twds1.jpg', 'pc game, adventure'),
(5, 9, 10, 'SIMCITY 5 (2013)', 7, 'Game Info\r\n\r\nMinimum System Requirements\r\n\r\nProcessor: AMD Athlon 64 X2 Dual-Core 4000+ or Intel Core 2 Duo Processor 2.0GHz or better\r\nOperating System: Windows XP/Vista/7\r\nRAM: 2GB RAM\r\nHard Drive: 10GB HD Space\r\nGraphics Card: NVIDIA 7800 or ATI Radeon HD 2x00 or Intel Series 4 integrated graphics or better*\r\nBroadband Internet: Minimum 256 kbps download, 64 kbps upload\r\n\r\n*Minimum of 256MB of on-board RAM and Shader 3.0 or better support.\r\nRecommended System Requirements\r\n\r\nProcessor: Intel Core i5 or faster\r\nOperating System: Windows 7\r\nRAM: 4GB RAM\r\nGraphics Card: NVIDIA GTX 275 or ATI 5850 or better\r\n\r\nFile Size\r\n3.64GB', 'simcity5.jpg', 'pc game, simulation'),
(6, 1, 15, 'Grand Theft Auto IV', 12, 'Game Info\r\n\r\nMinimum System Requirements:\r\n\r\nCPU: Intel Core 2 Duo 1.8Ghz, AMD Athlon X2 64 2.4Ghz\r\nRAM:\r\n1,5GB XP\r\n1,5GB Vista\r\nGPU: 256 MB NVIDIA 7900 / 256 MB ATI X1900\r\nOS: Windows Vista - Service Pack 1 / XP - Service Pack 3\r\nHDD: 16GB\r\nSound: DirectX Compatible\r\nODD: DVD-ROM\r\n\r\nRecommended System Requirements:\r\n\r\nCPU: Intel Core 2 Quad 2,4 GHz, AMD Phenom X3 2,1 GHz\r\nRAM: 2,5 GB Windows XP\r\n2.5 GB Windows Vista\r\nGPU: 512 MB NVIDIA 8600 / 512 MB ATI 3870\r\nOS: Windows Vista - Service Pack 1 / XP - Service Pack 3\r\nHDD: 18 GB\r\nSound: DirectX Compatible\r\nODD: DVD-ROM\r\n\r\nFile Size\r\n13.8GB', 'IV.jpg', 'pc game, action, adventure'),
(7, 1, 18, 'Far Cry 3', 8, '    OS:Windows XP, Windows Vista and Windows 7.\r\n    Processor:Intel CoreÂ®2 Duo E6700 @ 2.6 GHz or AMD Athlon64 X2 6000+ @ 3.0Ghz or better.\r\n    Memory:4 GB RAM.\r\n    Graphics:512MB Video RAM (1GB Video RAM), DirectX9c (DirectX11) Shader Model 3.0 (Shader Model 5.0)\r\n    DirectXÂ®:9.0c.\r\n    Hard Drive:15 GB HD space.', 'fc3.jpg', 'pc game, action, adventure, first person shooter'),
(8, 1, 7, 'Resident Evil 5', 8, 'Game Info\r\n\r\nMinimum system requirements:\r\n\r\nCPU: Intel Pentium D Processor\r\nAMD Athlon64 X2\r\n,RAM: Windows Vista (1 GB)\r\n,Windows XP (512 MB)\r\n,GPU: VRAM (256 MB)\r\n,DirectX 9.0c / Shader 3.0\r\n,NVIDIA GeForce 6800 series\r\n,ATI Radeon HD 2400 Pro\r\n,DX: DirectX 9.0c\r\n,OS: Windows 95/98/Me/NT/2000: Not Supported\r\n,Windows XP: Required\r\n,Windows Vista: Recommended\r\n,HDD: 8.0 GB or more\r\n,Sound: DirectSound Compatible (DirectX 9.0c or higher)\r\n,Resolution: 800Ã—600\r\n,ODD: DVD9 compatible drive\r\n,Network: Internet Broadband Connection\r\n\r\nRecommended system requirements:\r\nCPU: Intel Core 2 Quad Processor or better\r\nAMD Phenom X4 or better\r\n,RAM: Windows Vista (2 GB or more)\r\n,Windows XP (1 GB or more)\r\n,GPU: VRAM (512 or more)\r\n,NVIDIA GeForce 9800 series or better\r\n,ATI Radeon HD 4800 series or better\r\n,DX: DirectX 10\r\n,OS: Windows 95/98/Me/NT/2000: Not Supported\r\n,Windows XP: Required\r\n,Windows Vista: Recommended\r\n,HDD: 8.0 GB or more\r\n,Sound: DirectSound Compatible (DirectX 9.0c or higher)\r\n,Resolution: 1280Ã—720 or larger\r\n,ODD: DVD9 compatible drive\r\n\r\n,Network: Internet Broadband Connection\r\n\r\n,Recommended peripheral: Mouse & Keyboard\r\n\r\nGamepad Recommended: Xbox360 Controller for Windows\r\n\r\nFile Size\r\n7GB', 're5.jpg', 'pc game, action, adventure, survival horror, third person shooter'),
(9, 1, 2, 'WWE 2K15', 22, 'System Requirements\r\nMINIMUM:\r\n\r\n        OS: 64-bit: Windows Vista SP2\r\n        Processor: Core 2 Duo E6600, AMD Athlon 64 X2 5400+\r\n        Memory: 4 GB RAM\r\n        Graphics: NVIDIA GeForce GTX 450 or AMD Radeon HD 5770, 1GB GDDR (DirectX11 compatible)\r\n        DirectX: Version 11\r\n        Network: Broadband Internet connection\r\n        Hard Drive: 22 GB available space\r\n        Sound Card: DirectX 9.0c compatible sound card\r\n\r\nRECOMMENDED:\r\n\r\n        OS: 64-bit: WindowsÂ® 7 / WindowsÂ® 8\r\n        Processor: Intel Core i5-3550, 3.30 GHz\r\n        Memory: 8 GB RAM\r\n        Graphics: nVidia GeForce GTX 570 or AMD Radeon HD 6970\r\n        DirectX: Version 11\r\n        Network: Broadband Internet connection\r\n        Hard Drive: 22 GB available space\r\n        Sound Card: DirectX 9.0c compatible sound card\r\n        Additional Notes: At least 2 GB DDR Video Memory\r\n\r\nSize:\r\n6.59 GB', '2k15.jpg', 'Wwe, 2k games, wrestling, Fight'),
(10, 1, 18, 'Batman: Arkham Knight', 20, 'Minimum System Requirements\r\n\r\n    OS: Win 7 SP1, Win 8.1 (64-bit Operating System Required)\r\n    Processor: Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz\r\n    Memory: 6 GB RAM\r\n    Graphics Card: NVIDIA GeForce GTX 660\r\n    Graphics Memory: 2 GB\r\n    DirectXÂ®: 11\r\n    Network: Broadband Internet Connection Required\r\n    Hard Drive Space: 45 GB \r\n\r\nRecommended System Requirements\r\n\r\n    OS: Win 7 SP1, Win 8.1 (64-bit Operating System Required)\r\n    Processor: Intel Core i7-3770, 3.4 GHz | AMD FX-8350, 4.0 GHz\r\n    Memory: 8 GB RAM\r\n    Graphics Card: NVIDIA GeForce GTX 760\r\n    Graphics Memory: 3 GB\r\n    DirectXÂ®: 11\r\n    Network: Broadband Internet Connection Required\r\n    Hard Drive Space: 55 GB \r\n\r\nFile Size: 12GB', 'batman_arkham.png', 'pc game, action, adventure'),
(11, 7, 8, 'FIFA 18', 65, '\r\nHere are the FIFA 18 system requirements (minimum)\r\n\r\n    CPU: Intel Core i3-2100 / AMD Phenom II X4 965 3.4 GHz\r\n    CPU SPEED: Info\r\n    RAM: 8 GB\r\n    OS: 64-bit Windows 7\r\n    VIDEO CARD: Nvidia GeForce GTX 460 or AMD Radeon R7 260 (1 GB)\r\n    FREE DISK SPACE: 50 GB\r\n\r\nFIFA 18 Recommended Requirements\r\n\r\n    CPU: Intel Core i3-6300T 3.3 GHz or AMD Athlon X4 870K 3.9 GHz\r\n    CPU SPEED: Info\r\n    RAM: 8 GB\r\n    OS: 64-bit Windows 10\r\n    VIDEO CARD: Nvidia GeForce GTX 670 or AMD Radeon R9 270X (2 GB)\r\n    FREE DISK SPACE: 50 GB\r\nSize: 60GB', 'fifa-18.jpg', 'football, Sports, pc Game'),
(12, 5, 7, 'qwq', 231, 'ewewa', '2k15.jpg', 'aadsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastercard`
--
ALTER TABLE `mastercard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `developer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mastercard`
--
ALTER TABLE `mastercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
