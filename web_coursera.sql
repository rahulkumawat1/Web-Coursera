-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 06:11 PM
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
(1, 'HTML', 'https://mohith2310.github.io/Web-Coursera/images/HTML-Image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.'),
(2, 'CSS', 'https://mohith2310.github.io/Web-Coursera/images/css-image.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics, enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file which reduces complexity and repetition in the structural content as well as enabling the .css file to be cached to improve the page load speed between the pages that share the file and its formatting. Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device. The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element.'),
(3, 'JAVASCRIPT', 'https://mohith2310.github.io/Web-Coursera/images/js-image.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries. Most web browsers have a dedicated JavaScript engine to execute the code on the user\'s device. As a multi-paradigm language, JavaScript supports event-driven, functional, and imperative programming styles. It has application programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures, and the Document Object Model (DOM). The ECMAScript standard does not include any input/output (I/O), such as networking, storage, or graphics facilities. In practice, the web browser or other runtime system provides JavaScript APIs for I/O. JavaScript engines were originally used only in web browsers, but they are now core components of other software systems, most notably servers and a variety of applications. Although there are similarities between JavaScript and Java, including language name, syntax, and respective standard libraries, the two languages are distinct and differ greatly in design.\r\n\r\n'),
(4, 'JAVA', 'https://mohith2310.github.io/Web-Coursera/images/java-image.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let application developers write once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client-server web applications, with a reported 9 million developers. Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle) and released in 1995 as a core component of Sun Microsystems\' Java platform. The original and reference implementation Java compilers, virtual machines, and class libraries were originally released by Sun under proprietary licenses. As of May 2007, in compliance with the specifications of the Java Community Process, Sun had relicensed most of its Java technologies under the GPL-2.0-only license.'),
(5, 'AJAX FRAMEWORK', 'https://mohith2310.github.io/Web-Coursera/images/ajax-image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Ajax (short for \"Asynchronous JavaScript and XML\") is a set of web development techniques that uses various web technologies on the client-side to create asynchronous web applications. With Ajax, web applications can send and retrieve data from a server asynchronously (in the background) without interfering with the display and behaviour of the existing page. By decoupling the data interchange layer from the presentation layer, Ajax allows web pages and, by extension, web applications, to change content dynamically without the need to reload the entire page. In practice, modern implementations commonly utilize JSON instead of XML. Ajax is not a technology, but rather a programming concept. HTML and CSS can be used in combination to mark up and style information. The webpage can be modified by JavaScript to dynamically display—and allow the user to interact with the new information. The built-in XMLHttpRequest object is used to execute Ajax on webpages, allowing websites to load content onto the screen without refreshing the page. Ajax is not a new technology, nor is it a new language. Instead, it is existing technologies used in a new way.'),
(6, 'PYTHON', 'https://mohith2310.github.io/Web-Coursera/images/python-image.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis feugiat augue id efficitur porttitor. Morbi eget leo at mauris fringilla ornare ac ut elit. Cras ultrices lectus nec risus gravida, nec viverra est varius. Sed arcu sapien, elementum sit amet consectetur nec, elementum eget enim. In pretium lacus sem, eget venenatis nulla molestie vitae. Sed massa leo, pulvinar eu pharetra ac, efficitur pellentesque odio. Cras suscipit quam mauris, eu condimentum nisl venenatis id. Maecenas sagittis pharetra nisl nec congue. Praesent consequat arcu eu nisi euismod aliquet.', 'Python is a multi-paradigm programming language. Object-oriented programming and structured programming are fully supported, and many of its features support functional programming and aspect-oriented programming (including by metaprogramming and metaobjects (magic methods)). Many other paradigms are supported via extensions, including design by contract and logic programming. Python uses dynamic typing and a combination of reference counting and a cycle-detecting garbage collector for memory management. It also features dynamic name resolution (late binding), which binds method and variable names during program execution.Python\'s design offers some support for functional programming in the Lisp tradition. It has filter,mapandreduce functions; list comprehensions, dictionaries, sets, and generator expressions. The standard library has two modules (itertools and functools) that implement functional tools borrowed from Haskell and Standard ML.Rather than having all of its functionality built into its core, Python was designed to be highly extensible (with modules). This compact modularity has made it particularly popular as a means of adding programmable interfaces to existing applications. Van Rossum\'s vision of a small core language with a large standard library and easily extensible interpreter stemmed from his frustrations with ABC, which espoused the opposite approach.');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`user_id`, `course_id`) VALUES
(2, 1),
(2, 3),
(2, 6);

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
(2, 'Mohith', 'mohith23102000@gmail.com', 'MTIz', 0),
(3, 'XYZ', 'xyz@gmail.com', 'MTIz', 0);

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
(2, 'Creating an HTML file in Notepad', 'Dan Gardner', 'https://mohith2310.github.io/Web-Coursera/images/html_course/html2.jpg', 'https://www.youtube.com/watch?v=BvSTiqvm7sM', 3, 'Small', 1),
(10, 'vdvdw', 'vdw', 'vwv', 'vww', 32, 'vsvs', 2),
(11, 'vdvdw', 'vdw', 'vwv', 'vww', 32, 'vsvs', 2),
(12, 'vdvdw', 'vdw', 'vwv', 'vww', 32, 'vsvs', 2),
(13, 'vdvdw', 'vdw', 'vwv', 'vww', 32, 'vsvs', 2);

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
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `site_ref`
--
ALTER TABLE `site_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_ref`
--
ALTER TABLE `video_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
