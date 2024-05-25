# Arav-Jain-Documentation
This is a documentation which can be used as a framework for HTML, CSS, JS & PHP. Anyway, this is mainly concentrated towards CSS. 

This requires database and therefore please run this in MySQL:


-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 06:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  `Message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `second_name`, `Email`, `phone`, `address`, `City`, `State`, `Subject`, `Message`) VALUES
('h', 'h', 'h@gmail.com', '11111111111', 'hello', 'hello', 'hello', '34u hi', 'k3 hi3'),
('John', 'Doe', 'johndoe@example.com', '555-123-4567', '123 Main Street', 'Springfield', 'Illinois', 'Donation to Support Environmental Conservation Efforts', 'I am writing to express my admiration for the outstanding work carried out by [NGO Name] in the realm of environmental conservation. Your commitment to protecting our planet\'s natural resources is truly inspiring.\r\n\r\nAfter thoughtful consideration, I am pleased to contribute $1,000 to aid in [NGO Name]\'s mission. I trust that this donation will assist in furthering your efforts to address environmental challenges and promote sustainable practices.\r\n\r\nI firmly believe that supporting organizations like yours is crucial in ensuring a greener and healthier future for all. Your innovative projects and initiatives serve as a beacon of hope in combating climate change and preserving biodiversity.\r\n\r\nPlease find enclosed a check for the specified amount. May it be utilized effectively to advance the noble goals of [NGO Name].\r\n\r\nThank you for your dedication to environmental stewardship. I look forward to witnessing the continued success of [NGO Name] in making a positive impact on our planet.'),
('Sam', 'Wilson', 'samwilson@email.co.uk', '555-444-3333', '222 Maple Avenue', 'Manchester', 'New Hampshire', 'Support for Environmental Conservation Initiatives', 'I am writing to express my admiration for the exceptional work undertaken by [NGO Name] in safeguarding our environment. Your dedication to promoting sustainability and fostering environmental awareness is truly commendable.\n\nAfter careful consideration, I am pleased to make a donation of $7,500 to support [NGO Name]\'s initiatives. I trust that this contribution will assist in advancing your mission and addressing critical environmental issues.\n\nI firmly believe that investing in organizations like yours is essential in creating a greener and more sustainable future for generations to come. Your innovative projects and community-based programs serve as a catalyst for positive change in our society.\n\nEnclosed, please find a check for the specified amount. May it be utilized efficiently to further [NGO Name]\'s noble goals.\n\nThank you for your unwavering commitment to environmental stewardship. I am confident that [NGO Name] will continue to make a significant impact in protecting our planet.'),
('Jane', 'Doe', 'janedoe@example.org', '555-555-5555', '789 Elm Street', 'Orlando', 'Florida', 'Donation in Support of Environmental Conservation', 'I am writing to express my admiration for the invaluable work conducted by [NGO Name] in preserving our environment. Your dedication to promoting sustainable practices and protecting natural habitats is truly inspiring.\r\n\r\nAfter much consideration, I am delighted to contribute $5,000 to support [NGO Name]\'s initiatives. I trust that this donation will assist in furthering your efforts to address environmental challenges and promote biodiversity conservation.\r\n\r\nI firmly believe that supporting organizations like yours is vital in ensuring a sustainable future for our planet. Your innovative projects and advocacy efforts serve as a catalyst for positive change in our communities.\r\n\r\nEnclosed, please find a check for the specified amount. May it be utilized effectively to advance [NGO Name]\'s noble cause.\r\n\r\nThank you for your unwavering commitment to environmental stewardship. I look forward to witnessing the continued success of [NGO Name] in making a meaningful impact on our world.'),
('Alex', 'Jones', 'alexjones@email.net', '555-777-8888', '101 Pine Street', 'Portland', 'Oregon', 'Contribution to Environmental Preservation Efforts', 'I am writing to express my admiration for the exceptional work undertaken by [NGO Name] in safeguarding our environment. Your dedication to promoting sustainability and fostering environmental awareness is truly commendable.\n\nAfter careful consideration, I am pleased to make a donation of $7,500 to support [NGO Name]\'s initiatives. I trust that this contribution will assist in advancing your mission and addressing critical environmental issues.\n\nI firmly believe that investing in organizations like yours is essential in creating a greener and more sustainable future for generations to come. Your innovative projects and community-based programs serve as a catalyst for positive change in our society.\n\nEnclosed, please find a check for the specified amount. May it be utilized efficiently to further [NGO Name]\'s noble goals.\n\nThank you for your unwavering commitment to environmental stewardship. I am confident that [NGO Name] will continue to make a significant impact in protecting our planet.'),
('Sarah', 'Smith', 'sarahsmith@email.com', '555-987-6543', '456 Oak Avenue', ' Lexington', 'Kentucky', 'Support for Environmental Conservation Initiatives', 'I am writing to express my appreciation for the remarkable efforts undertaken by [NGO Name] in preserving our environment. Your dedication to promoting sustainability and biodiversity conservation is truly commendable.\r\n\r\nAfter careful consideration, I am pleased to announce my donation of $2,500 to support [NGO Name]\'s endeavors. I trust that this contribution will assist in advancing your mission and addressing pressing environmental challenges.\r\n\r\nI firmly believe that investing in organizations like yours is essential in safeguarding our planet for future generations. Your innovative projects and community-based initiatives play a vital role in raising awareness and inspiring action on environmental issues.\r\n\r\nEnclosed, please find a check for the specified amount. May it be utilized efficiently to further [NGO Name]\'s noble objectives.\r\n\r\nThank you for your unwavering commitment to environmental stewardship. I am confident that [NGO Name] will continue to make a significant impact in protecting our planet.'),
('Aryan', 'Chaudhary', 'your@gmail.com', '6969696969', 'hell', 'hell', 'hell', 'hello', 'bye'),
('Arav', 'JAin', 'arav04jains@gmail.com', '9953100017', 'E-59 Greater Kailash Enclave-2', 'South Delhi', 'Delhi', 'Arav Jain', 'heloo'),
('Arav', 'Jain', 'arav04jain@gmail.com', '9953102018', 'E-59 Greater Kailash Enclave-2', 'South Delhi', 'Delhi', '$10000 donation', 'I am writing to express my sincere admiration for the remarkable work that [NGO Name] has been conducting in the realm of environmental conservation. Your dedication to preserving our planets ecosystems and promoting sustainable practices is truly commendable.\r\n\r\nAfter much consideration, I am delighted to inform you of my decision to make a donation of $10,000 to support the invaluable efforts of [NGO Name]. It is my earnest hope that this contribution will aid in furthering your mission and expanding your reach in addressing pressing environmental challenges.\r\n\r\nI firmly believe that investing in organizations like yours is pivotal in safeguarding our planet for future generations. Your innovative projects and grassroots initiatives serve as a beacon of hope in the face of escalating environmental crises.\r\n\r\nPlease find enclosed a check for the aforementioned amount. I trust that it will be utilized efficiently to advance the noble objectives of [NGO Name].\r\n\r\nThank you for your unwavering commitment to environmental stewardship. I look forward to witnessing the continued success of [NGO Name] in making a profound and lasting impact on our planet.'),
('he', 'he', 'he@gmail.com', '9999999999', 'hello', 'hello', 'hello', 'hello', 'hwllo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

