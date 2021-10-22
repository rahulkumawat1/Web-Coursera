-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 05:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_coursera`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `sh_desc` longtext NOT NULL,
  `lg_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `image_url`, `sh_desc`, `lg_desc`) VALUES
(1, 'HTML', 'https://mohith2310.github.io/Web-Coursera/images/HTML-Image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages. HTML was created by Berners-Lee in late 1991 but \"HTML 2.0\" was the first standard HTML specification which was published in 1995. HTML 4.01 was a major version of HTML and it was published in late 1999. Though HTML 4.01 version is widely used but currently we are having HTML-5 version which is an extension to HTML 4.01, and this version was published in 2012. Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers. Now, HTML is being widely used to format web pages with the help of different tags available in HTML language. HTML is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. HTML is used to create pages which are rendered over the web. Almost every page of web is having html tags in it to render its details in browser.HTML provides tags which are used to navigate from one page to another and is heavily used in internet navigation.HTML pages now-a-days works well on all platform, mobile, tabs, desktop or laptops owing to responsive design strategy.'),
(2, 'CSS', 'https://mohith2310.github.io/Web-Coursera/images/css-image.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file which reduces complexity and repetition in the structural content as well as enabling the .css file to be cached to improve the page load speed between the pages that share the file and its formatting. Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device. The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element.');

-- --------------------------------------------------------

--
-- Table structure for table `done_course`
--

CREATE TABLE `done_course` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `done_course`
--

INSERT INTO `done_course` (`user_id`, `course_id`) VALUES
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `site_ref`
--

CREATE TABLE `site_ref` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `access_link` varchar(1000) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_ref`
--

INSERT INTO `site_ref` (`id`, `name`, `access_link`, `course_id`) VALUES
(1, 'W3School', 'https://www.w3schools.com/html/', 1),
(2, 'MDN', 'https://developer.mozilla.org/en-US/docs/Web/HTML', 1),
(3, 'DevDocs', 'https://devdocs.io/html/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin_flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `admin_flag`) VALUES
(1, 'Rahul Kumawat', 'rahul@gmail.com', 'MTIz', 1),
(2, 'Mohith', 'mohith23102000@gmail.com', 'MTIz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video_ref`
--

CREATE TABLE `video_ref` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `access_link` varchar(1000) NOT NULL,
  `dur_val` int(11) NOT NULL,
  `dur_tag` varchar(10) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_ref`
--

INSERT INTO `video_ref` (`id`, `name`, `author`, `image_url`, `access_link`, `dur_val`, `dur_tag`, `course_id`) VALUES
(1, 'What is HTML? A brief introduction of html || HTML basics', 'Sani World', 'https://mohith2310.github.io/Web-Coursera/images/html_course/html1.jpg', 'https://www.youtube.com/watch?v=BvSTiqvm7sM', 3, 'Small', 1),
(2, 'Creating an HTML file in Notepad', 'Dan Gardner', 'https://mohith2310.github.io/Web-Coursera/images/html_course/html2.jpg', 'https://www.youtube.com/watch?v=BvSTiqvm7sM', 3, 'Small', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `done_course`
--
ALTER TABLE `done_course`
  ADD PRIMARY KEY (`user_id`,`course_id`);

--
-- Indexes for table `site_ref`
--
ALTER TABLE `site_ref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_id1` (`course_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `video_ref`
--
ALTER TABLE `video_ref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_ref`
--
ALTER TABLE `site_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_ref`
--
ALTER TABLE `video_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `site_ref`
--
ALTER TABLE `site_ref`
  ADD CONSTRAINT `fk_course_id1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `video_ref`
--
ALTER TABLE `video_ref`
  ADD CONSTRAINT `fk_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
