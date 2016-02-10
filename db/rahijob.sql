-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 1115 at 09:13 PM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahijob`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Anguilla'),
(7, 'Antigua & Barbuda'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Belize'),
(11, 'Bermuda'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Cape Verde'),
(34, 'Cayman Islands'),
(35, 'Central African Republic'),
(36, 'Chad'),
(37, 'Chile'),
(38, 'China'),
(39, 'Colombia'),
(40, 'Comoros'),
(41, 'Congo'),
(42, 'Congo (DRC)'),
(43, 'Cook Islands'),
(44, 'Costa Rica'),
(45, 'Cote d''Ivoire'),
(46, 'Croatia (Hrvatska)'),
(47, 'Cuba'),
(48, 'Cyprus'),
(49, 'Czech Republic'),
(50, 'Denmark'),
(51, 'Djibouti'),
(52, 'Dominica'),
(53, 'Dominican Republic'),
(54, 'East Timor'),
(55, 'Ecuador'),
(56, 'Egypt'),
(57, 'El Salvador'),
(58, 'Equatorial Guinea'),
(59, 'Eritrea'),
(60, 'Estonia'),
(61, 'Ethiopia'),
(62, 'Falkland Islands'),
(63, 'Faroe Islands'),
(64, 'Fiji Islands'),
(65, 'Finland'),
(66, 'France'),
(67, 'French Guiana'),
(68, 'French Polynesia'),
(69, 'Gabon'),
(70, 'Gambia'),
(71, 'Georgia'),
(72, 'Germany'),
(73, 'Ghana'),
(74, 'Gibraltar'),
(75, 'Greece'),
(76, 'Greenland'),
(77, 'Grenada'),
(78, 'Guadeloupe'),
(79, 'Guam'),
(80, 'Guatemala'),
(81, 'Guinea'),
(82, 'Guinea-Bissau'),
(83, 'Guyana'),
(84, 'Haiti'),
(85, 'Honduras'),
(86, 'Hong Kong SAR'),
(87, 'Hungary'),
(88, 'Iceland'),
(89, 'India'),
(90, 'Indonesia'),
(91, 'Iran'),
(92, 'Iraq'),
(93, 'Ireland'),
(94, 'Israel'),
(95, 'Italy'),
(96, 'Jamaica'),
(97, 'Japan'),
(98, 'Jordan'),
(99, 'Kazakhstan'),
(100, 'Kenya'),
(101, 'Kiribati'),
(102, 'Korea'),
(103, 'Kuwait'),
(104, 'Kyrgyzstan'),
(105, 'Laos'),
(106, 'Latvia'),
(107, 'Lebanon'),
(108, 'Lesotho'),
(109, 'Liberia'),
(110, 'Libya'),
(111, 'Liechtenstein'),
(112, 'Lithuania'),
(113, 'Luxembourg'),
(114, 'Macao SAR'),
(115, 'Macedonia'),
(116, 'Madagascar'),
(117, 'Malawi'),
(118, 'Malaysia'),
(119, 'Maldives'),
(111, 'Mali'),
(121, 'Malta'),
(122, 'Martinique'),
(123, 'Mauritania'),
(124, 'Mauritius'),
(125, 'Mayotte'),
(126, 'Mexico'),
(127, 'Micronesia'),
(128, 'Moldova'),
(129, 'Monaco'),
(130, 'Mongolia'),
(131, 'Montserrat'),
(132, 'Morocco'),
(133, 'Mozambique'),
(134, 'Myanmar'),
(135, 'Namibia'),
(136, 'Nauru'),
(137, 'Nepal'),
(138, 'Netherlands'),
(139, 'Netherlands Antilles'),
(140, 'New Caledonia'),
(141, 'New Zealand'),
(142, 'Nicaragua'),
(143, 'Niger'),
(144, 'Nigeria'),
(145, 'Niue'),
(146, 'Norfolk Island'),
(147, 'North Korea'),
(148, 'Norway'),
(149, 'Oman'),
(150, 'Pakistan'),
(151, 'Panama'),
(152, 'Papua New Guinea'),
(153, 'Paraguay'),
(154, 'Peru'),
(155, 'Philippines'),
(156, 'Pitcairn Islands'),
(157, 'Poland'),
(158, 'Portugal'),
(159, 'Puerto Rico'),
(160, 'Qatar'),
(161, 'Reunion'),
(162, 'Romania'),
(163, 'Russia'),
(164, 'Rwanda'),
(165, 'Samoa'),
(166, 'San Marino'),
(167, 'Sao Tome and Principe'),
(168, 'Saudi Arabia'),
(169, 'Senegal'),
(170, 'Serbia and Montenegro'),
(171, 'Seychelles'),
(172, 'Sierra Leone'),
(173, 'Singapore'),
(174, 'Slovakia'),
(175, 'Slovenia'),
(176, 'Solomon Islands'),
(177, 'Somalia'),
(178, 'South Africa'),
(179, 'Spain'),
(180, 'Sri Lanka'),
(181, 'St. Helena'),
(182, 'St. Kitts and Nevis'),
(183, 'St. Lucia'),
(184, 'St. Pierre and Miquelon'),
(185, 'St. Vincent & Grenadines'),
(186, 'Sudan'),
(187, 'Suriname'),
(188, 'Swaziland'),
(189, 'Sweden'),
(190, 'Switzerland'),
(191, 'Syria'),
(192, 'Taiwan'),
(193, 'Tajikistan'),
(194, 'Tanzania'),
(195, 'Thailand'),
(196, 'Togo'),
(197, 'Tokelau'),
(198, 'Tonga'),
(199, 'Trinidad and Tobago'),
(110, 'Tunisia'),
(111, 'Turkey'),
(112, 'Turkmenistan'),
(113, 'Turks and Caicos Islands'),
(114, 'Tuvalu'),
(115, 'Uganda'),
(116, 'Ukraine'),
(117, 'United Arab Emirates'),
(118, 'United Kingdom'),
(119, 'Uruguay'),
(210, 'USA'),
(211, 'Uzbekistan'),
(212, 'Vanuatu'),
(213, 'Venezuela'),
(214, 'Vietnam'),
(215, 'Virgin Islands'),
(216, 'Virgin Islands (British)'),
(217, 'Wallis and Futuna'),
(218, 'Yemen'),
(219, 'Yugoslavia'),
(211, 'Zambia'),
(221, 'Zimbabwe'),
(222, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `ref_website`
--

CREATE TABLE IF NOT EXISTS `ref_website` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_website`
--

INSERT INTO `ref_website` (`id`, `name`) VALUES
(1, 'http://kl-webmedia.com/demo/cravious/index.html'),
(2, 'http://www.easyjobscript.com/demo/2015/');


















-- job_seeker


CREATE TABLE IF NOT EXISTS `job_seeker` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` SMALLINT (5) UNSIGNED DEFAULT  1,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) default NULL,
  `password` varchar(150) NOT NULL,
  `salt` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) default NULL,
  `landline` varchar(15) default NULL,
  `marital_status` enum('married', 'unmarried') default NULL,
  `image_url` varchar(255) default NULL,
  `last_login` timestamp NOT NULL,
  `is_active` tinyint(1) NOT NULL default 0,
  `is_verified` tinyint(1) NOT NULL default 0,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp default 0,

  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- role
CREATE TABLE `role` (
  `id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `role` (`id`, `name`) VALUES
('1', 'Job Seeker'),
('2', 'Job Seeker Silver'),
('3', 'Employer Silver'),
('3', 'Employer Gold');



-- job_seeker_info
CREATE TABLE IF NOT EXISTS `job_seeker_info` (
  `job_seeker_id` int(11) UNSIGNED NOT NULL,
  `skill_search` varchar(255) default NULL,
  `salary` int(11) UNSIGNED NOT NULL default '0',
  `salary_type` varchar(255) default NULL,
  `salary_currency_id` int(11) UNSIGNED default NULL,
  PRIMARY KEY  (`job_seeker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- job_seeker_address
CREATE TABLE IF NOT EXISTS `job_seeker_address` (
  `job_seeker_id` int(11) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state_id` int(11) UNSIGNED NOT NULL,
  `country_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- job_seeker_resume

  DROP TABLE IF EXISTS `job_seeker_resume`;
  CREATE TABLE `job_seeker_resume` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `job_seeker_id` int(11) UNSIGNED NOT NULL,
    `title` varchar(255) default NULL,
    `objective` varchar(255) default NULL,
    `additional_info` varchar(255) default NULL,
    `url` varchar(255) default NULL,
    `resume_text` text default NULL,
    `active` tinyint(1) default 0,
    PRIMARY KEY  (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- job_seeker_experience

  DROP TABLE IF EXISTS `job_seeker_experience`;
  CREATE TABLE `job_seeker_experience` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `resume_id` int(11) UNSIGNED NOT NULL,
    `job_seeker_id` int(11) UNSIGNED NOT NULL,
    `start_month` int(11) default NULL,
    `end_month` int(11) default NULL,
    `start_year` int(11) default NULL,
    `end_year` int(11) default NULL,
    `company_name` varchar(255) default NULL,
    `location` varchar(255) default NULL,
    `designation` varchar(255) default NULL,
    `work_desc` text default NULL,
    `active` tinyint(1) NOT NULL default 0,
    PRIMARY KEY  (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  -- job_seeker_skill

  DROP TABLE IF EXISTS `job_seeker_skill`;
  CREATE TABLE `job_seeker_skill` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `resume_id` int(11) UNSIGNED NOT NULL,
    `name` varchar(255) default NULL,
    `level` ENUM('Beginners', 'Intermediate', 'Expert', 'Advance'),
    `last_month` int(11) default NULL,
    `last_year` int(11) default NULL,
    `experience` varchar(255) default NULL,
    PRIMARY KEY  (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;