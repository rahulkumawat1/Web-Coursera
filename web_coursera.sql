-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 03:26 PM
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` mediumtext NOT NULL,
  `link` mediumtext NOT NULL,
  `time` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `text`, `link`, `time`, `course_id`) VALUES
(4, 'Announcement', 'Make a good website today as a class assignment.', 'https://www.w3schools.com/', '2021/10/26', 1),
(5, 'Quiz', 'Today you all will be having quiz at 2:00PM.', 'data:image/jpeg;base64,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', '2021/10/26', 1);

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
(2, 6),
(4, 2),
(4, 6);

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
(3, 'XYZ', 'xyz@gmail.com', 'MTIz', 0),
(4, 'Kumawat', 'kmw@gmail.com', 'MTIz', 0);

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
(1, 'What is HTML? A brief introduction of html || HTML basics', 'Sani World', 'https://mohith2310.github.io/Web-Coursera/images/html_course/html1.jpg', 'https://www.youtube.com/watch?v=BvSTiqvm7sM', 4, 'Small', 1),
(2, 'Creating an HTML file in Notepad', 'Dan Gardner', 'https://mohith2310.github.io/Web-Coursera/images/html_course/html2.jpg', 'https://www.youtube.com/watch?v=BvSTiqvm7sM', 3, 'Small', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_course_id2` (`course_id`);

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
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_ref`
--
ALTER TABLE `video_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `fk_course_id2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE;

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
