-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2019 at 07:44 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenocraft_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `hire_type` enum('1','2') DEFAULT '1',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_id`, `title`, `location`, `type`, `hire_type`, `description`) VALUES
(1, 'ZS180425', 'Program Administrator', 'Piscataway, NJ', 'Permanent', '1', 'Skills description - BEA Weblogic Administrator\r\nBEA Weblogic technical expert/architect with 2-5 years experience managing production-level BEA Weblogic application servers. Should have experience with:\r\nBasic system configuration parameters\r\nSystem monitoring\r\nCreating and managing database connections\r\nCreating and managing JMS queues\r\nExperience deploying applications in a production environment'),
(2, 'ZS180443	', 'QA Engineer	', 'Kendall Park, NJ', 'Permanent', '1', 'Seeking qualified QA Engg with Bachelor\'s or Foreign Equi. in CS or Engg or CIS and 5 years work experience as Software Professional to Analyze testability of requirements. Design and prepare test strategy & approach, testing metrics and other testing artifacts. Create test cases based on requirements and conducts reviews with development team/business users. Prioritize and execute functional tests and regression tests. Report defects, raise issues or concerns to project team. Creates and maintains quality assurance standards and processes. Monitors common business specific quality measurement frameworks and tracks improvement against predefined metrics. Plans and deploys software testing and project management processes based on the current methodologies of the company. Creates and monitors quality assurance related activities at both the program and project level. Designed use cases and use-case models to further refine the requirements and understand the business processes. Worked extensively in Rational Requisite Pro to organize and catalog requirements, documents, and use-case documents. Developed Test cases for manual testing and automated them using Win Runner, Silk, Load Runner, Silk performer and QTP. Travel may be required to unanticipated client-site locations.'),
(3, 'ZS180432', 'Product Support Engineer - ETL', 'Kendall Park, NJ', 'Permanent', '1', 'REQUIREMENTS:\r\nSeeking qualified Product Support Engineer with Bachelor\'s or Foreign Equi. in CS or Engg and 5 years work experience as Team Lead or Production Support Analyst to Lead the Production Support component of Data Integration Support to meet all monitoring service level responsibilities and improve customer experience. Enhancement to existing ETL framework and addition of new extracts based on customer requirement. Design, model and implement Operation reporting framework on top of the data warehouse for operational ease and monitoring. Create process and lifecycle for production related activities including support, bug fixes, setting up intelligent monitoring process and improve operational support quality with automated alerting/reporting framework. Create visually appealing reports in MicroStrategy and web-based reporting framework to handle calendar/tracker at organization level. Responsible to perform extensive data analysis in production to identify the data gaps and other data related issues along with performing issue analysis and provide/implementing the fixes. Conduct code walkthroughs and review peer code and documentation. Travel may be required to unanticipated client-site locations.'),
(4, 'ZS180427', 'J2EE Developer', 'Kendall Park, NJ	', 'Permanent', '1', 'Seeking qualified Java/J2EE Developer with Master\'s or Foreign Equi. in CS or Engg and 6 months work experience as Software Professional for Involving in analysis, design and implementation and testing phases of SDLC using Struts Framework as the MVC for the development and implementation of the project. Develop application using Struts Framework that leverages Model View Layer (MVC) architecture. Design and develop client/server applications using Java/J2EE technologies for enterprise applications. Experience in Database design, creation and management of schemas, writing Stored Procedures, Functions, Triggers, DDL, and DML SQL queries. Develop Jsp\'s and back-end java classes using Web Sphere Application server and coordinating with internal and external resources to isolate and troubleshoot issues resulting with service disruption and outage using Languages C, C++, Java, SQL, PL/SQL. Travel may be required to unanticipated client-site locations.'),
(5, 'ZS180423	', 'Sr Program Engineer', 'Kendall Park, NJ	', 'Permanent', '1', 'Seeking qualified Sr. Software Engg with Bachelor\'s or Foreign Equi. in CS or Engg and 5 years work experience as Software Professional to Develop Application programs under modular programming concept & client server base application using Oracle, PL/SQL, Web Logic, WebSphere. Writing test scripts. Creating SQL code for OLAP/OLTP application. Sound knowledge of Database design, Data Modeling. Data warehousing-ETL process. Knowledge of HTTP, TCP/IP functionality, web technology concepts. Creating design for PL/SQL Packages, Function, Stored Procedure, and Database Design. Application Performance & Tuning for SQL and PL/SQL code. Debugging for Enterprise Application Oracle Web Logic with PL/SQL packages, functions. Travel may be required to unanticipated client-site locations.'),
(6, 'ZS180391', 'IT Technical Writer', 'New York, NY	', 'Contract 6+\r\n', '1', 'Training Documentation\r\nPosition Description\r\nThis position will be creating new work instructions, procedures, process flows, and business process procedures in support of the SAP Financials and HR Upgrade from Enterprise 4.7 to ERP 6.0.\r\nEducation Requirements: None.\r\nReview and prioritize documentation service requests.'),
(7, 'ZS180341	', 'Job Description - Software Automation Engineer	', 'Kendall Park, NJ	', 'Permanent', '1', ' Seeking qualified Software Automation Engg with Master\'s or Foreign Equi. in CS or Engg or CIS and 12 months of work experience as Software Professional to be Involved in design and implementation of Test Automation framework using Selenium WebDriver, JAVA, TestNG and Maven framework. Responsible for automation script development using Selenium Webdriver, Java and TestNG. Responsible for implementing page object model (POM) using Selenium WebDriver. Responsible for creating reusable utilities required for the automation framework. Responsible for automation script development using Selenium Webdriver, Java and TestNG. Responsible for creating test scripts using Postman, JavaScript for Regression testing and Responsible for automation script development using Selenium Webdriver, Java and TestNG. Travel may be required to unanticipated client-site locations.).'),
(8, 'ZS180212	', 'Oracle SQL-PL/SQL Developer	', 'Trenton, NJ	', 'Contract 9+\r\n', '1', 'REQUIREMENTS: 3-5 Years of experience with SQL - PL/SQL. Exposure to Oracle 8i/9i/10g DESIRED SKILLS: Bulk Processing, ERP POSITION DESCRIPTION Individual will be responsible for writing PL/SQL code for custom client processing. Education Requirements: BS in Computer Science, Engineering, or related discipline, or equivalent. Certified Oracle Developer (OCA) is a plus. Please email with hourly-contract rate and annual salary expectations to career@zenosys.com'),
(9, 'ZS180245	', 'IT QA Analyst', 'Kendall Park, NJ	', 'Permanent', '1', 'REQUIREMENTS: 2-3 Years of experience as functional/technical Analyst. Pharmaceutical Background DESIRED SKILLS: Use-Case diagrams/Flowcharts POSITION DESCRIPTION Candidate will be responsible for translating functional requirements into technical docs. Education Requirements: None. Experience with IMed is a big plus. Please email with hourly-contract rate and annual salary expectations to career@zenosys.com'),
(10, 'ZS180321	', 'Sr. J2EE Engineer - Struts/Hibernate	', 'Kendall Park, NJ	', 'Permenant', '1', 'OPENING DETAILS: REQUIREMENTS: Seeking Sr. Java Developer with Bachelors or Foreign Equivalent in CIS or Engg or CS and 5 years work experience as Software Developer or Project Lead to develop new campaign distribution applications. Create, modify and execute test cases using Quality Center tool and report any defects identified during testing. Developing and documenting test plans and test scenarios based on detailed business requirement analysis. Leading in the conceptualization, design, and implementation of test automation to increase testing coverage, accuracy and efficiency for assigned projects.. Travel may be required to unanticipated client sites locations across U.S. Aspiring candidate can mail their resume to: Zenosys, LLC Attn# Riddhida Joshi, HR Manager 3084 State Route 27, Suite#12 Kendall Park, NJ 08824 Job Loc: Kendall Park, NJ.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Show All', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(2, 'PHP', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(3, 'IOS', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(4, 'Android', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(5, 'React Native', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(6, 'Flutter', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(7, 'Logo Design', '2019-12-09 08:34:20', '2019-12-09 08:34:20'),
(8, 'Web Design', '2019-12-09 08:34:20', '2019-12-09 08:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Rutusha Joshi', 'rutusha.joshi@zenocraft.com', 'test contact', 'test contact us'),
(2, 'weq', 'rangat@gmail.com', 'test contact', 'test contact us'),
(3, 'weq', 'rangat@gmail.com', 'test contact', 'test contact us'),
(4, 'weq', 'rangat@gmail.com', 'test contact', 'test contact us'),
(5, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(6, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(7, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(8, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(9, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(10, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(11, 'asdsad', 'rangat@gmail.com', 'test contact', 'test contact us'),
(12, 'Hotel Rangatt', 'patang@gmail.com', 'test contact', 'test contact usggf'),
(13, 'Hotel Rangatt', 'patang@gmail.com', 'test contact', 'test contact usggf'),
(14, 'Patang Hotel', 'patang@gmail.com', 'test contact', 'test contact us'),
(15, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(16, 'zenocraft test', 'patang@gmail.com', 'test contact', 'test contact us'),
(17, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(18, 'Hotel Rangatt', 'rangat@gmail.com', 'test contact', 'test contact us'),
(19, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(20, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(21, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(22, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(23, 'Rajwadu', 'rutush@hmkkkss.com', 'test subject', 'test message'),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(28, '', '', '', ''),
(29, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(30, '', '', '', ''),
(31, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(32, '', '', '', ''),
(33, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(34, '', '', '', ''),
(35, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(36, '', '', '', ''),
(37, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(38, '', '', '', ''),
(39, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(40, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(41, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(42, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(43, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(44, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(45, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(46, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(47, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(48, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(49, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(50, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(51, '', '', '', ''),
(52, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(53, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(54, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(58, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'test contact us'),
(59, 'zenocraft test', 'patang@gmail.com', 'test contact', 'ASASaS'),
(60, 'zenocraft test', 'rangat@gmail.com', 'test contact', 'sadsad');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `text`) VALUES
(1, 'Hello World!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla \r\nsapien eros, lacinia eu, consectetur vel, dignissim et, massa. Praesent suscipit nunc vitae neque. Duis a ipsum. Nunc a erat. Praesent \r\nnec libero. Phasellus lobortis, velit sed pharetra imperdiet, justo ipsum facilisis arcu, in eleifend elit nulla sit amet tellus. \r\nPellentesque molestie dui lacinia nulla. Sed vitae arcu at nisl sodales ultricies. Etiam mi ligula, consequat eget, elementum sed, \r\nvulputate in, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `id` bigint(20) NOT NULL,
  `rate` int(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`id`, `rate`, `description`, `created_at`, `updated_at`) VALUES
(1, 9, 'PHP developer with 5+ years of experience', '2019-12-10 08:52:31', '2019-12-10 08:52:31'),
(2, 6, 'PHP developer with 2+ years of experience', '2019-12-10 08:53:15', '2019-12-10 08:53:15'),
(3, 10, 'IOS developer with 3+ years of experience, Expertise in Objective-c and SWIF', '2019-12-10 08:54:56', '2019-12-10 08:54:56'),
(4, 10, 'Android developer with 4+ years of experience', '2019-12-10 08:55:10', '2019-12-10 08:55:10'),
(5, 10, 'React Native developer with 2+ years of experience', '2019-12-10 08:55:27', '2019-12-10 08:55:27'),
(6, 10, 'Flutter developer with 2+ years of experience ', '2019-12-10 08:55:42', '2019-12-10 08:55:42'),
(7, 6, 'Graphic designer with 4+ years of experience', '2019-12-10 08:55:59', '2019-12-10 08:55:59'),
(9, 7, 'Web designer with 4+ years of experience', '2019-12-10 08:58:21', '2019-12-10 08:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `category`, `skill`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Chiefs RS', 'Chiefs RS is a smart online restaurant management system. It allows its user to manage and confirm bookings, while also allowing tables assigning, making the entire process a fast and hassle-free experience.', 2, 'php', 'f122b77dbe62644aca78181d7d0d908f_ten.png', '2019-12-05 08:37:14', '2019-12-05 08:37:14'),
(7, 'Get Go', 'Get Go is an exclusive app for people who love to meet new people and travel. The app allows its user to create profiles, meet new people, chat with them and select trips to go on from a wide range of destinations.', 2, 'php', '6323b60a31f24fa45f08e03110ad563d_eleven.jpg', '2019-12-05 08:37:56', '2019-12-05 08:37:56'),
(8, 'B4p.et', 'Parliament is website for asking questions and get answers for those questions.', 2, 'Yii2', 'fe277e88b8026f704dbf769e2056136f_bridge.png', '2019-12-05 08:47:02', '2019-12-05 08:47:02'),
(9, 'Children\'s Book', 'Explore Asia is the perfect app for people planning a trip to Asia. This app open ups a doorway and introduces the user to a wide range of destinations to visit. It also allows the user to explore through a wide range of activities around the selected des', 2, 'Wordpress', '7a0e807fa5e6356c6f842404d40a445a_chrisbook.png', '2019-12-05 08:50:49', '2019-12-05 08:50:49'),
(10, 'Explore Asia', 'Explore Asia is the perfect app for people planning a trip to Asia. This app open ups a doorway and introduces the user to a wide range of destinations to visit. It also allows the user to explore through a wide range of activities around the selected des', 2, 'CakePHP', 'f905f90b375044f8b2042c4aaead1cea_explore-asia.png', '2019-12-05 08:51:53', '2019-12-05 08:51:53'),
(11, 'Eat Out', 'Eat Out is a great app for foodies. This app allows its user to explore different restaurants in a chosen location, browse through menus, dishes and view pictures of the interior as well as food served. It also allows the users to book a table and order f', 2, 'Laravel', 'c22fef8cb4d2d89fd86b74e5bc0a2218_eatout.png', '2019-12-05 08:52:47', '2019-12-05 08:52:47'),
(12, 'All Spice', 'All Spice is an android based food ordering application. It helps the user locate nearby restaurants for ordering food and takeaways, and also lets the user learn about new dishes available, stay with the trend and try new food.', 3, 'Objective C', '7c8028a6e1f69d9104c5e4b06f2e9ac1_one.jpg', '2019-12-05 08:56:17', '2019-12-05 08:56:17'),
(15, 'Oreange Box', 'Orange Box is a great app for ordering groceries. It lets the users order groceries from the comfort of their home. The users can create a list of the items to be purchased and select the shop preferences, and get groceries delivered at their doorstep. Us', 3, 'Objective C', 'b39cf60e6c5f73b9caa1003aa6bb6b61_six.jpg', '2019-12-05 13:39:08', '2019-12-05 13:39:08'),
(16, 'Morbel Project', 'Mobel is a cool app for people who thrive on good content. The app allows user to upload pictures and content to their own profile, while also allowing them to follow other profiles, engage, save what they like and share on different platforms.', 3, 'IOS', 'c61ab208237733395083b17360220316_morbel-final-new.jpg', '2019-12-05 13:40:33', '2019-12-05 13:40:33'),
(17, 'Musicious', 'Musicious is a fun app for music lovers. This app lets the user play music stored on their smart phone or tablet, and offers different color themes, equalizer settings and presets to choose from. Moreover, it also allows the user to trim the songs they li', 3, 'IOS', 'bcfd8564bffc35fbbf07774c45d39033_nine.jpg', '2019-12-05 13:41:30', '2019-12-05 13:41:30'),
(18, 'Chater', 'Chater is a great app for people who love to socialize. It allows users to create a profile using pictures and details, while also giving links to their social media platforms. The user can then browse through different profiles and give a thumbs up to th', 3, 'IOS', '18623751d627208d530f58c375c24fc5_chater.jpg', '2019-12-05 13:42:20', '2019-12-05 13:42:20'),
(19, 'Better Man', 'Better Man is a versatile mobile app created dedicatedly for men. The app allows the user to choose from numerous, thoughtfully curated brands offering apparel and grooming products just for men.', 4, 'Android', 'b728daecafb71c36a8aeed35a58b5436_two.jpg', '2019-12-05 13:43:29', '2019-12-05 13:43:29'),
(20, 'Clix', 'CLIX is a unique app for people of all ages who have love for photography. CLIX is a social platform where users can upload pictures and create their feed while also following other photographs uploaded by other people. Moreover, the app also lets the use', 4, 'Android', '06a041745c9a317070d9a53bee09e3fb_three.jpg', '2019-12-05 13:44:14', '2019-12-05 13:44:14'),
(21, 'Car Wash', 'Wash my Car is a unique application that lets user book car washes. It allows the user to submit information such as type of car, location, preferred timings, etc. and browse and select from different subscriptions as well as one-time car washing services', 5, 'React Native', '4e187fe85f87153dad81c3d9353c44fc_car-wash.png', '2019-12-05 13:45:49', '2019-12-05 13:45:49'),
(22, 'Cinema Beyond Entertainment', 'Cinema Beyond Entertainment is app for everyone who loves movies and shows. This app provides with a summary and reviews about different new and old TV programs as well as movies, and keeps the user updated.', 6, 'Flutter', 'e6a8d016eae5b436fe51eb732fcd8481_cbe.jpg', '2019-12-05 13:46:57', '2019-12-05 13:46:57'),
(23, 'Clix', 'Clix', 7, 'Logo', '6c64ba659487b7dff355bb7e4bd1a1dc_twenty.png', '2019-12-05 13:57:14', '2019-12-05 13:57:14'),
(24, 'Orange Box', 'Orange Box', 7, 'Logo', 'eaeaf748baa367d4633283ae5f5836ae_twentyone.png', '2019-12-05 13:59:50', '2019-12-05 13:59:50'),
(25, 'Explore Asia', 'Explore Asia', 7, 'Logo', '5a7931a5fabf906f906bf72b21162306_thirteenone.png', '2019-12-05 14:01:06', '2019-12-05 14:01:06'),
(26, 'Eat Out', 'Eat Out', 7, 'Logo', 'b5858f7c4fb4149dc842dc343b5207cb_twentytwo.png', '2019-12-05 14:01:38', '2019-12-05 14:01:38'),
(27, 'Ohayo', 'Ohayo', 7, 'Logo', '293bf06e295992dbde17db3fdaf24bc0_twentythree.png', '2019-12-05 14:02:28', '2019-12-05 14:02:28'),
(28, 'Discover Places', 'Discover Places', 7, 'Logo', '185dd766fa6d330c275a1532e6b079ab_twentyfour.png', '2019-12-05 14:03:25', '2019-12-05 14:03:25'),
(29, 'Word Arc', 'Word Arc', 7, 'Graphic Design', 'c9c625d78bb46dc65a248554f38a446a_twentyfive.png', '2019-12-05 14:04:15', '2019-12-05 14:04:15'),
(30, 'Norman Peterson IT Consulting', 'Norman Peterson IT Consulting', 7, 'Graphic Design', 'e032f34241181a76969d1b86a7d3aeb7_twentysix.png', '2019-12-05 14:05:40', '2019-12-05 14:05:40'),
(31, 'The Blue Bird', 'The Blue Bird', 7, 'Graphic Design', '0ef4c21ff322e974034f51c4b00ee144_twentyseven.png', '2019-12-05 14:06:31', '2019-12-05 14:06:31'),
(32, 'Erick Belinson House Counseling', 'Erick Belinson House Counseling', 7, 'Graphic Design', 'f4f135bad5a872e3fee0a46d95456af5_twentyeight.png', '2019-12-05 14:07:45', '2019-12-05 14:07:45'),
(33, 'Nuryam R. Photography', 'Nuryam R. Photography', 7, 'Graphic Design', 'a64dd883127197ee7edf7e8337485153_twentynine.png', '2019-12-05 14:08:22', '2019-12-05 14:08:22'),
(34, 'Nifed', 'Nifed', 7, 'Graphic Design', 'f51b28ca11ba60ff0c8e0ca4a4e1ea75_thirteen.png', '2019-12-05 14:09:10', '2019-12-05 14:09:10'),
(35, 'Construire Ensuite', 'Construire Ensuite', 7, 'Graphic Design', 'a0aa2d7ae105d0952064bf778e0faa72_seven-new.png', '2019-12-05 14:10:31', '2019-12-05 14:10:31'),
(36, 'Morbel Project', 'Morbel Project', 7, 'Graphic Design', 'bc4f5589521f3121ffde434c4c4dc8a5_eight.png', '2019-12-05 14:11:09', '2019-12-05 14:11:09'),
(37, 'T R Construction', 'TR Construction is a large scale construction and consulting firm that works which works on residential, commercial as well as industrial projects. The firm not only executes projects, but also provides consultation, planning, designing, etc. This web app', 8, 'HTML,CSS,Javascript', 'e33d7214d06f9e5f2274311eecfe2c04_four.jpg', '2019-12-05 14:12:11', '2019-12-05 14:12:11'),
(38, 'FAC North America', 'FAC is a rapid goods delivering company and this unique apps lets the user deliver goods across North America within a day and keep a track of their package in real time. It also allows the users to chat with the support team for assistance and records th', 8, 'Web Design', '436b623aba6fe5f9a01f0df9d0649f08_morbel-final-new-model.png', '2019-12-05 14:13:58', '2019-12-05 14:13:58'),
(39, 'Beyond Time', 'Beyond Time is a brilliant app for people who are very passionate about watches. The app curates different watch brands and gives the user numerous options to choose from. It also allows the user to select and purchase watches from the app and get them de', 8, 'Web Design', '10f9631700c9f6154dcbd5f65b1e65fa_beyond-time.jpg', '2019-12-05 14:15:17', '2019-12-05 14:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` char(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`) VALUES
(7, 'Karv', 'Joshi', 'karv.joshi@gmail.com', '9994567890', 'admin', '2018-12-17 18:30:00', 1, '2019-12-04 08:47:37'),
(8, 'Yash', 'Joshi', 'Yash.joshi@gmail.com', '7734567890', 'admin', '2018-12-17 18:30:00', 1, '2019-12-04 08:47:16'),
(10, 'durva', 'Joshi', 'durva.joshi@gmail.com', '3234567890', 'admin', '2019-12-04 08:21:01', 1, '2019-12-04 08:47:06'),
(11, 'rutusha', 'Joshi', 'rutusha.joshi@gmail.com', '2234567890', 'admin', '2019-12-04 08:24:11', 1, '2019-12-04 08:46:18'),
(12, 'kavi', 'Joshi', 'kavi.joshi@gmail.com', '1234567890', 'admin', '2019-12-04 08:38:14', 1, '2019-12-04 08:45:54'),
(13, 'admin', 'admin', 'admin@sas.com', '3234567890', 'admin', '2019-12-04 10:47:39', 1, '2019-12-10 09:45:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
