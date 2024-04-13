-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 03:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spices`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catname` text NOT NULL,
  `catimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`, `catimg`) VALUES
(15, 'spices', '64004e8753d7b.jpg'),
(18, 'Premium Spices', '640b3825a9af1.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES
('Pranav Wani', ' pranavwani18@gmail.com', 12346779, ' variety is the spice of life');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pimg` text NOT NULL,
  `price` int(11) NOT NULL,
  `productName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`customer_id`, `product_id`, `pimg`, `price`, `productName`) VALUES
(1, 13, '6409bf36236e1.jpg', 220, 'All Spice Powder 100g (Premium Quality)'),
(2, 13, '6409bf36236e1.jpg', 220, 'All Spice Powder 100g (Premium Quality)'),
(3, 14, '6409bf76210c7.jpg', 200, 'Cloves 100g (Premium Quality)'),
(1, 14, '6409bf76210c7.jpg', 200, 'Cloves 100g (Premium Quality)'),
(4, 14, '6409bf76210c7.jpg', 200, 'Cloves 100g (Premium Quality)'),
(5, 17, '6409c18b32bf5.png\r\n', 800, '7 in 1 Spices Box'),
(7, 18, '6409c1b353ca4.jpg', 450, 'Acrylic Spices Box Small (Supreme Quality)');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pimg` text NOT NULL,
  `price` int(5) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `subcat_id`, `pname`, `pimg`, `price`, `description`) VALUES
(13, 18, 16, 'All Spice Powder 100g (Premium Quality)', '6409bf36236e1.jpg', 220, 'Allspice is also called Jamaican pepper or pimento or Kerala Sarvasugandhi and is so-called because its taste is said to resemble a combination of cinnamon, cloves, nutmeg, and pepper, revealing the complexity that gives allspice its name. Allspice is used in both sweet and savory dishes.\nOur Allspice powder is 100% Natural and free from preservatives or additives for color, flavor, or taste. We source premium quality allspices from western ghats of Kerala.\nWe use only organically grown allspice in a pollution free environment. Dried the spices and stored them in clean-airtight containers. We ground the spices upon orders only.\nAllspice offers unparalleled quality and depth of flavor in your favorite dishes. Its ability to make many foods more delicious is not the only great thing about the whole allspice. This particular spice also offers some significant health benefits that give you more reason to use it more often.\nInstructions: Keep it in a cool hygienic place. No need to refrigerate the product. Should be store in an airtight container. Close the metal lid tightly after usage. Always use a dry spoon. Best before 12 Months from the Date of Manufacture.\nContents: 100g Allspice Powder'),
(14, 18, 16, 'Cloves 100g (Premium Quality)', '6409bf76210c7.jpg', 200, 'Cloves are staple spice in Indian cooking and best known for its sweet aroma .\n\nThey have also been used in traditional medicine. It supports liver health and helps to stabilize blood sugar levels.\n\nIt contain fibre, vitamins, and minerals, so using whole or ground cloves to add flavour to your food can provide some important nutrients, also cloves are rich in antioxidants.\n\nCloves offered by us are procured from our reliable vendors and these Cloves are pure in quality and having high nutritional value which make these highly demanding.'),
(15, 18, 16, 'Curry Leaf Powder 100g (Premium Quality)', '6409bfb113840.png', 180, '100% Pure & Natural\nCurry Leaves is one of the common ingredients used in the kitchen.\nIt is also well known for its medicinal properties.\nUsed as spice masala in many recipes.\nCurry leaves are rich in antioxidants that moisturize the scalp while getting rid of dead hair follicles . They are a good source of proteins and beta-carotene, both of which prevent hair loss and thinning . The leaves are also rich in amino acids that help strengthen follicles and keep them healthy . How to make curry leaves hair pack 1. Boil coconut oil with curry leaves powder for acting As A Hair Tonic. 2. Curry leave powder with yogurt As A Hair Mask.'),
(16, 18, 16, 'Cinnamon Bark Pure 100g ', '6409bfd936317.jpg', 175, ' Cinnamon comes from a tree. People use the bark to make medicine. Very high quality cinnamon form Kerala  forest and ghats. it is pure cinnamon…. Cinnamon bark is used for gastrointestinal  upset, diarrhea, and gas. It is also used for stimulating appetite; for infections caused by bacteria and parasitic worms; and for menstrual cramps, the common cold, and the flu (influenza). Cinnamon bark, as part of a multi-ingredient preparation, is applied to the penis for premature ejaculation.\nIn foods, cinnamon is used as a spice and as a flavoring agent in beverages. In manufacturing, cinnamon oil is used in small amounts in toothpaste, mouthwashes, gargles, lotions, liniments, soaps, detergents, and other pharmaceutical products and cosmetics. There are lots of different types of cinnamon. Cinnamomum verum (Ceylon cinnamon) and Cinnamomum aromaticum (Cassia cinnamon or Chinese cinnamon) are commonly used. In many cases, the cinnamon spice purchased in food stores contains a combination of these different types of cinnamon. See the separate listing for Cassia Cinnamon.'),
(17, 15, 19, '7 in 1 Spices Box', '6409c18b32bf5.png', 800, 'Combo of 7 premium spices that contains\n\n1. Cardamom 8mm 40gm\n2.clove  55gm\n3. cinnamon roll 40gm\n3.star anise 40gm\n4. black pepper 85gm\n5. nutmeg 80gm\n6.Nutmace 20gm'),
(18, 15, 16, 'Acrylic Spices Box Small (Supreme Quality) ', '6409c1b353ca4.jpg', 450, '   Made from high-quality acrylic material and BPA-free, eco-friendly, and keep health 6 each individual pot packaged, and easy to remove Fashionable appearance designed, make your kitchen more beautiful Note It is easy to clean, but do not use abrasives or grinding sponges, which will cause scratches. Heathy life, happy cook! Keep your kitchen collection and spice organized with the Seasoning Rack. Impress your friend and family with this wonderful spice pot. A terrific gift to housewives, cook lovers, and top chefs. You may love this spice rack at first sight, you will find it’s more than worthy!'),
(559, 15, 18, 'Round Spices box', '640c79bad4163.jpg', 600, '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cat_id`, `name`, `img`) VALUES
(16, 18, 'Spices Kit', '64071558b9857.jpg'),
(18, 18, 'Premium Spicesss', '6409c059636f1.jpg'),
(19, 15, 'Spices Box', '6409c0a2d8040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `timestamp`) VALUES
(0, 'admin', '$2y$10$ACMMUDEnW9KraBxAT5wjWeSoZp.qoTrp9wSuU58AaQDOmy3ngJmDK', '2023-03-01 11:56:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=562;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
