-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2021 at 01:59 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

DROP TABLE IF EXISTS `about_me`;
CREATE TABLE IF NOT EXISTS `about_me` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Skill_1` varchar(100) NOT NULL,
  `Skill_2` varchar(100) NOT NULL,
  `Skill_3` varchar(100) NOT NULL,
  `Skill_4` varchar(100) NOT NULL,
  `About_me` varchar(5000) NOT NULL,
  `Image` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`ID`, `Name`, `Profile`, `Email`, `Phone`, `Skill_1`, `Skill_2`, `Skill_3`, `Skill_4`, `About_me`, `Image`) VALUES
(1, 'Umar FarooQ', 'CEO', 'umar@gmail.com', '03419260600', '90', '99', '78', '56', 'The first two ideas concern thought processes and reasoning, while the others deal with behavior. Norvig and Russell focus particularly on rational agents that act to achieve the best outcome, noting \"all the skills needed for the Turing Test also allow an agent to act rationally.\" (Russel and Norvig 4).\r\n\r\nPatrick Winston, the Ford professor of artificial intelligence and computer', 'Uploaded/1612452089PicsArt_02-12-05.58.52.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE IF NOT EXISTS `blog_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`ID`, `Name`) VALUES
(8, 'Touraism'),
(6, 'Food'),
(7, 'Travel'),
(9, 'Web-deveoplment');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Blog_ID` varchar(200) NOT NULL,
  `Category_name` varchar(200) NOT NULL,
  `Tittle` varchar(250) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Writter_name` varchar(100) NOT NULL,
  `Time_blog` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`ID`, `Blog_ID`, `Category_name`, `Tittle`, `Description`, `Writter_name`, `Time_blog`, `Image`) VALUES
(16, '7', 'Travel', 'Touraism', 'Although many of us have been â€œtouristsâ€ at some point in our lives, defining what tourism actually is can be difficult. Tourism is the activities of people traveling to and staying in places outside their usual environment for leisure, business or other purposes for not more than one consecutive year.\r\n\r\nTourism is a dynamic and competitive industry that requires the ability to adapt constantly to customersâ€™ changing needs and desires, as the customerâ€™s satisfaction, safety and enjoyment are particularly the focus of tourism businesses', 'www.umarfarooQ.com', '02:15', 'Uploaded/1613052959laura-chouette-fL3DTjJljco-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`) VALUES
(4, 'Website Deveoplment'),
(5, 'Grahpic Designing'),
(6, 'Cyber Security'),
(7, 'Ethical Hacking'),
(9, 'Full-Stack Deveoper');

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

DROP TABLE IF EXISTS `comments_table`;
CREATE TABLE IF NOT EXISTS `comments_table` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Comment_ID` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Message` varchar(5000) NOT NULL,
  `Date_B` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`ID`, `Comment_ID`, `Name`, `Message`, `Date_B`) VALUES
(19, '16', 'Jenna Mckee', 'Eiusmod ut officia f', '12-03-21'),
(13, '14', 'Umar FarooQ', 'Wowwww.....!! asesome Blog Sir Upload New Blog', '11-02-21'),
(17, '16', 'umar farooq ', 'grgrgrg', '01-03-21'),
(18, '16', 'zaryab', 'this is testing text', '01-03-21'),
(16, '16', 'usman wali', 'hi this is so good ', '11-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(1, 'umar', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_post`
--

DROP TABLE IF EXISTS `portfolio_post`;
CREATE TABLE IF NOT EXISTS `portfolio_post` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_ID` varchar(250) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Subject_name` varchar(200) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Date_P` varchar(500) NOT NULL,
  `Profile_url` varchar(500) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_post`
--

INSERT INTO `portfolio_post` (`ID`, `Category_ID`, `Name`, `Subject`, `Subject_name`, `Description`, `Date_P`, `Profile_url`, `Image`) VALUES
(11, '9', 'Computer Software', 'Software Designing', 'Computer Software', 'Organized collections of computer data and instructions are known as computer software. Computer software can be broken up into two categories. System software and Application Software. Without software, computer hardware would be nearly useless.\r\nA question that is often brought up when discussing computer software and hardware is the concept of the chicken and egg theory. This theory simply is how do you install software on a computer before an operating system is installed? The solution is called Firmware. Firmware is software that is preinstalled onto memory so that the hardware knows how to complete basic tasks. A good example of this would be the BIOS on a motherboard. Modern computers include a user interface system preinstalled on motherboards â€¦show more contentâ€¦\r\nThey are generally focused on increasing productivity and simplifying general tasks. Business software is mostly Microsoft Office, Appleâ€™s iWork, Open Office or Adobe Suites. Distinctive components of businesses software revolve around word processing, spreadsheets, presentations, database management, and email. Microsoft Office is the most popular business application suite. Microsoft word is the most popular application in the business world and is Microsoftâ€™s word processor. Excel is the spreadsheet powerhouse and PowerPoint is the top software for presentations. Microsoft Access is Microsoftâ€™s software within the office suite that allows end users to modify and assign tasks within a system database. Outlook is the favorable email software among modern PC users. The typical personal software consists of programs such as Skype, multimedia players, TurboTax, and games. Personal software typically is developed for entertainment functionality for the end user. Modern computers are able to achieve high speed and these applications are becoming more complex. Applications can be used to help the end user complete tasks. As we move into further generations of computing the general basis of applications will rise intensely. Some of these applications interact directly with the database to apprehend and evaluate â€¦show more contentâ€¦\r\nThe process of connecting to the internet is a series of events that leads to the IP (Internet Protocol) address you wish to achieve. Starting with a modem, which is used to connect to the internet via coaxial or a telephone jack. This device transfers data to a router, which in return allows multiple computers to connect to the internet via cable or Wi-Fi. After your computer connects to these processes the end', '04-02-21', 'https://bootstrapmade.com/', 'Uploaded/1612448917james-harrison-vpOeXr5wmR4-unsplash.jpg'),
(12, '7', 'Ethical Hacking', 'Ethical Hacking', 'Computer Security', 'Ethical Hacking sometimes called as Penetration Testing is an act of intruding/penetrating into system or networks to find out threats, vulnerabilities in those systems which a malicious attacker may find and exploit causing loss of data, financial loss or other major damages.  The purpose of ethical hacking is to improve the security of the network or systems by fixing the vulnerabilities found during testing. Ethical hackers may use the same methods and tools used by the malicious hackers but with the permission of the authorized person for the purpose of improving the security and defending the systems from attacks by malicious users.\r\nEthical hackers are expected to report all the vulnerabilities and weakness found during the process to the management.', '04-02-21', 'https://www.greycampus.com/opencampus/ethical-hacking/what-is-ethical-hacking', 'Uploaded/1612449031nahel-abdul-hadi-flha0KwRrRc-unsplash.jpg'),
(13, '9', 'Website Deveoplment', 'This is Theme Is design in Bootstrap v5', 'Full Stack Deveoplemt', 'Early beginnings\r\nBootstrap, originally named Twitter Blueprint, was developed by Mark Otto and Jacob Thornton at Twitter as a framework to encourage consistency across internal tools. Before Bootstrap, various libraries were used for interface development, which led to inconsistencies and a high maintenance burden. According to Twitter developer Mark Otto:\r\n\r\nA super small group of developers and I got together to design and build a new internal tool and saw an opportunity to do something more. Through that process, we saw ourselves build something much more substantial than another internal tool. Months later, we ended up with an early version of Bootstrap as a way to document and share common design patterns and assets within the company.[3]\r\n\r\nAfter a few months of development by a small group, many developers at Twitter began to contribute to the project as a part of Hack Week, a hackathon-style week for the Twitter development team. It was renamed from Twitter Blueprint to Bootstrap, and released as an open source project on August 19, 2011.[4] It has continued to be maintained by Mark Otto, Jacob Thornton, and a small group of core developers, as well as a large community of contributors.[5]\r\n\r\nBootstrap 2 and 3\r\nOn January 31, 2012, Bootstrap 2 was released, which added built-in support for Glyphicons, several new components, as well as changes to many of the existing components. This version supports responsive web design, meaning the layout of web pages adjusts dynamically, taking into account the characteristics of the device used (whether desktop, tablet, or mobile phone).[6]\r\n\r\nThe next major version, Bootstrap 3, was released on August 19, 2013. It redesigned components to use flat design and a mobile first approach.[7]\r\n\r\nBootstrap 4\r\nMark Otto announced Bootstrap 4 on October 29, 2014.[8] The first alpha version of Bootstrap 4 was released on August 19, 2015.[9] The first beta version was released on 10 August 2017.[10] Mark suspended work on Bootstrap 3 on September 6, 2016, to free up time to work on Bootstrap 4. Bootstrap 4 was finalized on January 18, 2018.[11]\r\n\r\nSignificant changes include:', '04-02-21', 'https://en.wikipedia.org/wiki/Bootstrap_(front-end_framework)', 'Uploaded/1612449352jefferson-santos-9SoCnyQmkzI-unsplash.jpg'),
(14, '5', 'Grahpic Designing', 'This is Logo For a Compony', 'Logo Design', 'Although to work in the digital age means you must design with interactive software, graphic design still revolves around age-old principles. Itâ€™s crucial that you strike the right chord with users from their first glanceâ€”hence graphic designâ€™s correspondence with emotional design. As a graphic designer, then, you should have a firm understanding of color theory and how vital the right choice of color scheme is. Color choices must reflect not only the organization (e.g., blue suits banking) but also usersâ€™ expectations (e.g., red for alerts; green for notifications to proceed). You should design with an eye for how elements match the tone (e.g., sans-serif fonts for excitement or happiness). You also need to design for the overall effect, and note how you shape usersâ€™ emotions as you guide them from, for instance, a landing page to a call to action. Often, graphic designers are involved in motion design for smaller screens. They will carefully monitor how their worksâ€™ aesthetics match their usersâ€™ expectations. They can enhance their designsâ€™ usability in a flowing, seamless experience by anticipating the usersâ€™ needs and mindsets. With user psychology in mind, itâ€™s important to stay focused on some especially weighty graphic design considerations, namely these:\r\n\r\nSymmetry and Balance (including symmetry types)\r\nFlow\r\nRepetition\r\nPattern\r\nThe Golden Ratio (i.e., proportions of 1:1.618)\r\nThe Rule of Thirds (i.e., how usersâ€™ eyes recognize good layout)', '04-02-21', 'http://animation.style/', 'Uploaded/1612449563michael-dziedzic-qDG7XKJLKbs-unsplash.jpg'),
(18, '5', 'Logo Desining', 'LoGo Designers', 'Logo Designing', 'Awell-written logo design brief is what puts designers on the right track towards designing the perfect logo for your business. Before you start your brief, itâ€™s important to understand the key components of a creative brief, as well as some useful design language to help you describe what you want. By the end of this guide you will be capable of writing logo briefs that empower designers to create the perfect mark for your company.Awell-written logo design brief is what puts designers on the right track towards designing the perfect logo for your business. Before you start your brief, itâ€™s important to understand the key components of a creative brief, as well as some useful design language to help you describe what you want. ', '11-02-21', 'https://bootstrapmade.com/', 'Uploaded/1613038952the-best-applications-to-learn-as-a-graphics-designer.jpg'),
(17, '5', 'Responsive Webpage', 'Web-Deveoplment', 'Bootstrap made', 'Responsive web design (RWD) is a web development approach that creates dynamic changes to the appearance of a website, depending on the screen size and orientation of the device being used to view it. ... Responsive design relies on proportion-based grids to rearrange content and design elementsResponsive web design (RWD) is a web development approach that creates dynamic changes to the appearance of a website, depending on the screen size and orientation of the device being used to view it. ... Responsive design relies on proportion-based grids to rearrange content and design elements', '11-02-21', 'https://bootstrapmade.com/', 'Uploaded/1613038703freestocks-I_pOqP6kCOI-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Title`, `Description`, `Image`) VALUES
(19, 'Graphic Designing', 'We have Logo designer , video animation , Animation Cartoon maker are avalible 24/7 Some one want to Order us Msg us on above email address...', 'Uploaded/1612270448banner_5c7117010bc1f.jpg'),
(20, 'Software Making', 'We can create any type of Software which is use on mobail Tablets or on computer we make 100+ projects for our client if someone want to make msg us on above email address', 'Uploaded/16122706700_aYobhP_7_dSiNlWZ.jpg'),
(23, 'Responsive Web Design', 'Responsive web design (RWD) is a web development approach that creates dynamic changes to the appearance of a website, depending on the screen size and orientation of the device', 'Uploaded/16130383250_aYobhP_7_dSiNlWZ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
CREATE TABLE IF NOT EXISTS `team_members` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`ID`, `Name`, `Designation`, `Description`, `Image`) VALUES
(18, 'Jamil Babarp', 'Full-Stack Deveopler', 'Full Stack Developers are computer programmers who are proficient in both front and back end coding. Their primary responsibilities include designing user interactions on websites, developing servers and databases for website functionality and coding for mobile platforms', 'Uploaded/1612452222WhatsApp Image 2021-02-04 at 5.07.16 PM.jpeg'),
(17, 'Behram Khan', 'Javascript Deveopler', 'Behram  JavaScript Developer is responsible for completing the design of applications and software using Java programming language. JavaScript Developers work with websites, producing front-end applications and performing code analysis and overall improvement of style and usability.', 'Uploaded/1612446751WhatsApp Image 2021-02-04 at 5.06.28 PM.jpeg'),
(14, 'Yahya Qurashi', 'Full-Stack Deveopler', 'Yahya is a  full stack web developer is a person who can develop both client and server software. In addition to mastering HTML and CSS, he/she also knows how to: Program a browser (like using JavaScript, jQuery, Angular, or Vue) Program a server (like using PHP, ASP, Python, or Node)', 'Uploaded/1612446636WhatsApp Image 2021-02-04 at 5.07.57 PM.jpeg'),
(15, 'Umar FarooQ', 'CEO Software Deveopler', 'Umar farooQ is a Software developers are the creative minds behind software programs, and they have the technical skills to build those programs or to oversee their creation by a team. They create software that enables users to perform specific tasks on computer devices.', 'Uploaded/1612446683Copy of jalal ARZO Recovery Data (696).jpg'),
(16, 'Awii Khan', 'Php Deveopler', 'Awais Khan is  PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application.', 'Uploaded/1612446720WhatsApp Image 2021-02-04 at 5.09.12 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tittle`
--

DROP TABLE IF EXISTS `tittle`;
CREATE TABLE IF NOT EXISTS `tittle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tittle`
--

INSERT INTO `tittle` (`ID`, `Title`) VALUES
(16, 'THis is UmarFarooq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
