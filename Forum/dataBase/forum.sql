-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2025 at 08:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `date`) VALUES
(1, 'Python', 'Python\r\nHigh-level programming language\r\nPython is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.\r\nDesigned by: Guido van Rossum\r\nDeveloper: Python Software Foundation\r\nFirst appeared: 20 February 1991; 34 years ago\r\nParadigm: Multi-paradigm: object-oriented, procedural (imperative), functional, structured, reflective\r\nStable release: 3.13.2 / 4 February 2025; 2 months ago\r\nTyping discipline: duck, dynamic, strong; optional type annotations (since 3.5, but those hints are ignored, except with unofficial tools)', '2025-04-24 18:10:47'),
(2, 'Flutter', 'Flutter\r\nSoftware\r\nFlutter is an open-source UI software development kit created by Google. It can be used to develop cross platform applications from a single codebase for the web,[4] Fuchsia, Android, iOS, Linux, macOS, and Windows.\r\nInitial release date: May 2017\r\nProgramming languages: Dart, C, C++\r\nPlatform: Android, iOS, Google Fuchsia, Web platform, Linux, macOS and Windows\r\nDeveloper(s): Google and community\r\nLicense: New BSD License', '2025-04-24 18:10:47'),
(3, 'Bootstrap', 'Bootstrap\r\nFront-end framework\r\nBootstrap (formerly Twitter Bootstrap) is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.\r\nProgramming languages: CSS, JavaScript, Sass, Less\r\nInitial release date: 19 August 2011\r\nDeveloper(s): Bootstrap Core Team\r\nLicense: MIT License (Apache License 2.0 prior to 3.1.0)\r\nOriginal author(s): Mark Otto, Jacob Thornton\r\nPlatform: Web platform\r\nRepository: Bootstrap Repository\r\n', '2025-04-24 18:17:17'),
(4, 'Java', 'Java\r\nHigh-level programming language\r\nJava is a high-level, general-purpose, memory-safe, object-oriented programming language. It is intended to let programmers write once, run anywhere, meaning that compiled Java code can run on all platforms that support Java without the need to recompile.\r\nDesigned by: James Gosling\r\nDeveloper: Oracle Corporation\r\nFirst appeared: May 23, 1995; 29 years ago\r\nMemory management: Automatic garbage collection\r\nParadigm: Multi-paradigm: generic, object-oriented (class-based), functional, imperative, reflective, concurrent\r\nStable release: Java SE 24 / 18 March 2025; 37 days ago\r\nTyping discipline: Static, strong, safe, nominative, manifest', '2025-04-24 18:17:17'),
(5, 'PHP', 'PHP\r\nProgramming language\r\nPHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.\r\nDesigned by: Rasmus Lerdorf\r\nDeveloper: The PHP Development Team, Zend Technologies, PHP Foundation\r\nFirst appeared: 8 June 1995; 29 years ago\r\nImplementation language: C (primarily; some components C++)\r\nOS: Unix-like, Windows, macOS, IBM i, OpenVMS, IBM Z\r\nParadigm: Multi-paradigm: imperative, functional, object-oriented, procedural, reflective\r\nStable release: 8.4.6 / 10 April 2025; 11 days ago', '2025-04-24 18:23:05'),
(6, 'Angular Js', 'AngularJS\nProgramming language\nThis article is about the first version of the Angular framework. For versions 2 and later, see Angular (web framework).\nAngularJS\n\nOriginal author(s)	Miško Hevery\nDeveloper(s)	Google\nInitial release	October 20, 2010; 14 years ago[1]\nStable release	\n1.8.3[2] Edit this on Wikidata / 7 April 2022; 3 years ago\nRepository	AngularJS Repository\nWritten in	JavaScript\nPlatform	JavaScript engine\nSize	167 kB production\n1.2 MB development\nType	Web framework\nLicense	MIT License\nWebsite	angularjs.org \nAngularJS (also known as Angular 1) is a discontinued free and open-source JavaScript-based web framework for developing single-page applications. It was maintained mainly by Google and a community of individuals and corporations.\nProgramming language: JavaScript\nInitial release date: 20 October 2010\nDeveloper(s): Google\nLicense: MIT License\nOriginal author(s): Miško Hevery\nPlatform: JavaScript engine\nRepository: AngularJS Repository', '2025-04-24 18:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(11) NOT NULL,
  `comment_by` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `Date`) VALUES
(1, 'How you fix this bro', 1, 3, '2025-04-30 21:51:44'),
(2, 'Hi Dummy Content ', 1, 4, '2025-06-07 01:34:59'),
(3, ' Chubby Content', 1, 6, '2025-06-07 01:45:24'),
(4, ' By Subject by Concern', 7, 7, '2025-06-07 01:46:35'),
(5, ' By Subject by Concern', 7, 5, '2025-06-07 01:49:48'),
(6, ' make dbcon.js', 10, 2, '2025-06-07 02:09:09'),
(7, ' hy', 3, 1, '2025-06-07 02:21:12'),
(8, ' What kind Of Issue You have', 22, 5, '2025-06-07 03:46:26'),
(9, ' good to slove this', 22, 5, '2025-06-07 03:51:24'),
(10, ' helpfull', 22, 4, '2025-06-07 03:52:09'),
(11, ' any soluction', 5, 4, '2025-06-07 20:38:41'),
(12, ' By using this application in your computer ', 24, 4, '2025-06-07 20:42:20'),
(13, ' make a js file to use this application !', 24, 7, '2025-06-07 20:44:32'),
(14, ' do try catch programs', 25, 4, '2025-06-08 23:12:09'),
(15, ' free Front end', 26, 4, '2025-06-10 16:35:59'),
(16, ' hi', 1, 4, '2025-06-10 16:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_title` text NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(11) NOT NULL,
  `thread_user_id` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `Date`) VALUES
(1, 'Error on python', 'How I resolve Error in Python ', 1, 1, '2025-04-27 03:18:29'),
(2, 'Error on Flutter', 'How I fix this', 2, 2, '2025-04-27 03:38:09'),
(3, 'Error Fix', 'All Error Fix', 1, 3, '2025-06-07 01:01:40'),
(4, 'Many Problem', 'Any Solution?', 1, 4, '2025-06-07 01:18:27'),
(5, 'Many Problem', 'Any Solution?', 1, 5, '2025-06-07 01:18:54'),
(6, 'Flutter Problem', 'Many Mach Solution?', 2, 6, '2025-06-07 01:21:08'),
(7, 'hi subject', 'hi concern', 1, 7, '2025-06-07 01:22:11'),
(21, 'hi bro', 'Thank God', 1, 4, '2025-06-07 03:35:17'),
(22, 'hi bro', 'Thank God', 1, 4, '2025-06-07 03:38:02'),
(23, 'Hi bro', 'its Rahul', 2, 5, '2025-06-07 03:40:49'),
(24, 'Angular js ', 'how to make application in Angular js', 6, 4, '2025-06-07 20:41:15'),
(25, 'java exception handaling', 'hi bor how to solve Multithradhing proce', 4, 4, '2025-06-08 23:11:33'),
(26, 'what is this', 'This bootstrap', 3, 4, '2025-06-10 16:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srn` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srn`, `Name`, `Email`, `Password`, `Date`) VALUES
(1, 'tina', 'tt@gmail.com', '123', '2025-05-01 01:50:00'),
(2, 'Bittu', 'sayan@gmail.com', '123', '2025-05-01 02:47:17'),
(3, 'sam', 'ram@gmail.com', '1234', '2025-06-06 22:33:52'),
(4, 'Brian', 'Rayan@gmail.com', '123', '2025-06-07 00:15:45'),
(5, 'Rahul', 'Rahul@gmail.com', '123', '2025-06-07 02:26:01'),
(6, 'Sayan', 'Bittu@gmail.com', '123', '2025-06-07 02:26:54'),
(7, 'Harry', 'Harry@gmail.com', '123', '2025-06-07 02:32:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
