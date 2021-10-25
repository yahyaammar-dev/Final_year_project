-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 06:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `keys` text NOT NULL,
  `values` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_author`
--

CREATE TABLE `blog_author` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `item_type` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_dir`
--

CREATE TABLE `contact_dir` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact_no` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `destination_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `coordx` text NOT NULL,
  `coordy` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`destination_id`, `name`, `coordx`, `coordy`, `description`, `price`, `type`) VALUES
(1, '123', '123', '123', '123', '123', 'Adventourous'),
(2, '123', '123', '123', '123', '123', 'Adventourous'),
(3, '123', '123', '123', '123', '123', 'Adventourous'),
(4, '123', '123', '123', '123', '123', 'Adventourous'),
(5, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(6, 'yahya', '123', '123', '123', '123', 'Religious'),
(7, 'ammar', '456', '345', 'description', '999', 'Religious');

-- --------------------------------------------------------

--
-- Table structure for table `destination_attributes`
--

CREATE TABLE `destination_attributes` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `attribute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_blog`
--

CREATE TABLE `destination_blog` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_contact`
--

CREATE TABLE `destination_contact` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_freelancer`
--

CREATE TABLE `destination_freelancer` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `freelancer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_hotel`
--

CREATE TABLE `destination_hotel` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_images`
--

CREATE TABLE `destination_images` (
  `di_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_laws`
--

CREATE TABLE `destination_laws` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `laws` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_product`
--

CREATE TABLE `destination_product` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_reviews`
--

CREATE TABLE `destination_reviews` (
  `dr_id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_videos`
--

CREATE TABLE `destination_videos` (
  `id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`id`, `name`, `description`, `price`, `type`) VALUES
(1, 0, 0, 0, 'driver'),
(2, 0, 0, 0, 'guide'),
(3, 0, 0, 0, '[value-5]'),
(4, 0, 0, 0, '[value-5]'),
(5, 0, 0, 0, '[value-5]');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_attributes`
--

CREATE TABLE `freelancer_attributes` (
  `id` int(11) NOT NULL,
  `freelancer` int(11) NOT NULL,
  `attrinbute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_images`
--

CREATE TABLE `freelancer_images` (
  `id` int(11) NOT NULL,
  `images` int(11) NOT NULL,
  `freelancer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_reviews`
--

CREATE TABLE `freelancer_reviews` (
  `id` int(11) NOT NULL,
  `freelancer` int(11) NOT NULL,
  `reviews` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_videos`
--

CREATE TABLE `freelancer_videos` (
  `id` int(11) NOT NULL,
  `freelancer` int(11) NOT NULL,
  `videos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `phone` text NOT NULL,
  `coord-x` float NOT NULL,
  `coord-y` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_attributes`
--

CREATE TABLE `hotel_attributes` (
  `id` int(11) NOT NULL,
  `attribute` int(11) NOT NULL,
  `hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `id` int(11) NOT NULL,
  `images` int(11) NOT NULL,
  `hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reviews`
--

CREATE TABLE `hotel_reviews` (
  `id` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_videos`
--

CREATE TABLE `hotel_videos` (
  `id` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'yahyaammar4807@gmail.com'),
(2, 'uw-18-cs-bs-081@student.uow.edu.pk');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `type`) VALUES
(1, '[value-2]', '[value-3]', 0, 'Shoes'),
(2, '[value-2]', '[value-3]', 0, 'Apparel'),
(3, '[value-2]', '[value-3]', 0, '[value-5]'),
(4, '[value-2]', '[value-3]', 0, '[value-5]'),
(5, '[value-2]', '[value-3]', 0, '[value-5]');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `attribute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `images` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_videos`
--

CREATE TABLE `product_videos` (
  `id` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `text` text NOT NULL,
  `rating` float NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `phone` text NOT NULL,
  `account_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `phone`, `account_status`) VALUES
(7, 'yahya ammar', 'ijk', 'geh', 'def', 'abc'),
(8, 'yahya ammar', 'ijk', 'geh', 'def', 'abc'),
(9, 'yahya ammar', 'ijk', 'geh', 'def', 'abc'),
(10, 'images', 'ijk', 'geh', 'def', 'abc'),
(11, 'yahya', 'yahyaammar4807@gmail.com', 'sa123d', '03345413268', 'false'),
(12, 'qwe eqw', 'yahyaammarwp@gmail.com', 'asdzcx', '213213213', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_author`
--
ALTER TABLE `blog_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `author` (`author`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_type` (`item_type`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact_dir`
--
ALTER TABLE `contact_dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`destination_id`);

--
-- Indexes for table `destination_attributes`
--
ALTER TABLE `destination_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `attribute` (`attribute`);

--
-- Indexes for table `destination_blog`
--
ALTER TABLE `destination_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `blog` (`blog`);

--
-- Indexes for table `destination_contact`
--
ALTER TABLE `destination_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `contact` (`contact`);

--
-- Indexes for table `destination_freelancer`
--
ALTER TABLE `destination_freelancer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `freelancer` (`freelancer`);

--
-- Indexes for table `destination_hotel`
--
ALTER TABLE `destination_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `hotel` (`hotel`);

--
-- Indexes for table `destination_images`
--
ALTER TABLE `destination_images`
  ADD PRIMARY KEY (`di_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `destination_laws`
--
ALTER TABLE `destination_laws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `laws` (`laws`);

--
-- Indexes for table `destination_product`
--
ALTER TABLE `destination_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `destination_reviews`
--
ALTER TABLE `destination_reviews`
  ADD PRIMARY KEY (`dr_id`),
  ADD KEY `review` (`review`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `destination_videos`
--
ALTER TABLE `destination_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`),
  ADD KEY `video` (`video`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancer_attributes`
--
ALTER TABLE `freelancer_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freelancer` (`freelancer`),
  ADD KEY `attrinbute` (`attrinbute`);

--
-- Indexes for table `freelancer_images`
--
ALTER TABLE `freelancer_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images` (`images`),
  ADD KEY `freelancer` (`freelancer`);

--
-- Indexes for table `freelancer_reviews`
--
ALTER TABLE `freelancer_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freelancer` (`freelancer`),
  ADD KEY `reviews` (`reviews`);

--
-- Indexes for table `freelancer_videos`
--
ALTER TABLE `freelancer_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freelancer` (`freelancer`),
  ADD KEY `videos` (`videos`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_attributes`
--
ALTER TABLE `hotel_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute` (`attribute`),
  ADD KEY `hotel` (`hotel`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images` (`images`),
  ADD KEY `hotel` (`hotel`);

--
-- Indexes for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel` (`hotel`),
  ADD KEY `review` (`review`),
  ADD KEY `hotel_2` (`hotel`),
  ADD KEY `review_2` (`review`);

--
-- Indexes for table `hotel_videos`
--
ALTER TABLE `hotel_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel` (`hotel`),
  ADD KEY `video` (`video`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `attribute` (`attribute`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images` (`images`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `review` (`review`);

--
-- Indexes for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video` (`video`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`category`) REFERENCES `blog_category` (`cat_id`),
  ADD CONSTRAINT `blog_posts_ibfk_2` FOREIGN KEY (`author`) REFERENCES `blog_author` (`id`);

--
-- Constraints for table `destination_attributes`
--
ALTER TABLE `destination_attributes`
  ADD CONSTRAINT `destination_attributes_ibfk_1` FOREIGN KEY (`attribute`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `destination_blog`
--
ALTER TABLE `destination_blog`
  ADD CONSTRAINT `destination_blog_ibfk_1` FOREIGN KEY (`blog`) REFERENCES `blog_posts` (`blog_id`);

--
-- Constraints for table `destination_contact`
--
ALTER TABLE `destination_contact`
  ADD CONSTRAINT `destination_contact_ibfk_2` FOREIGN KEY (`contact`) REFERENCES `contact_dir` (`id`);

--
-- Constraints for table `destination_hotel`
--
ALTER TABLE `destination_hotel`
  ADD CONSTRAINT `destination_hotel_ibfk_2` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `destination_images`
--
ALTER TABLE `destination_images`
  ADD CONSTRAINT `destination_images_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`images_id`);

--
-- Constraints for table `destination_laws`
--
ALTER TABLE `destination_laws`
  ADD CONSTRAINT `destination_laws_ibfk_2` FOREIGN KEY (`laws`) REFERENCES `laws` (`id`);

--
-- Constraints for table `destination_reviews`
--
ALTER TABLE `destination_reviews`
  ADD CONSTRAINT `destination_reviews_ibfk_2` FOREIGN KEY (`review`) REFERENCES `reviews` (`review_id`);

--
-- Constraints for table `destination_videos`
--
ALTER TABLE `destination_videos`
  ADD CONSTRAINT `destination_videos_ibfk_2` FOREIGN KEY (`video`) REFERENCES `videos` (`id`);

--
-- Constraints for table `freelancer_attributes`
--
ALTER TABLE `freelancer_attributes`
  ADD CONSTRAINT `freelancer_attributes_ibfk_2` FOREIGN KEY (`attrinbute`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `freelancer_images`
--
ALTER TABLE `freelancer_images`
  ADD CONSTRAINT `freelancer_images_ibfk_2` FOREIGN KEY (`images`) REFERENCES `images` (`images_id`);

--
-- Constraints for table `freelancer_reviews`
--
ALTER TABLE `freelancer_reviews`
  ADD CONSTRAINT `freelancer_reviews_ibfk_2` FOREIGN KEY (`reviews`) REFERENCES `reviews` (`review_id`);

--
-- Constraints for table `freelancer_videos`
--
ALTER TABLE `freelancer_videos`
  ADD CONSTRAINT `freelancer_videos_ibfk_2` FOREIGN KEY (`videos`) REFERENCES `videos` (`id`);

--
-- Constraints for table `hotel_attributes`
--
ALTER TABLE `hotel_attributes`
  ADD CONSTRAINT `hotel_attributes_ibfk_1` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `hotel_attributes_ibfk_2` FOREIGN KEY (`attribute`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD CONSTRAINT `hotel_images_ibfk_1` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `hotel_images_ibfk_2` FOREIGN KEY (`images`) REFERENCES `images` (`images_id`);

--
-- Constraints for table `hotel_reviews`
--
ALTER TABLE `hotel_reviews`
  ADD CONSTRAINT `hotel_reviews_ibfk_1` FOREIGN KEY (`review`) REFERENCES `reviews` (`review_id`),
  ADD CONSTRAINT `hotel_reviews_ibfk_2` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `hotel_videos`
--
ALTER TABLE `hotel_videos`
  ADD CONSTRAINT `hotel_videos_ibfk_1` FOREIGN KEY (`hotel`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `hotel_videos_ibfk_2` FOREIGN KEY (`video`) REFERENCES `videos` (`id`);

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_ibfk_1` FOREIGN KEY (`attribute`) REFERENCES `attributes` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`images`) REFERENCES `images` (`images_id`);

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_ibfk_2` FOREIGN KEY (`review`) REFERENCES `reviews` (`review_id`);

--
-- Constraints for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD CONSTRAINT `product_videos_ibfk_2` FOREIGN KEY (`video`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
