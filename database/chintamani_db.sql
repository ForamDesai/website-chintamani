-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 10:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chintamani_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities_master`
--

CREATE TABLE `amenities_master` (
  `PK_amenities` int(10) NOT NULL,
  `amenity_name` text NOT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities_master`
--

INSERT INTO `amenities_master` (`PK_amenities`, `amenity_name`, `isDeleted`) VALUES
(1, 'CabinsCount', 0),
(2, 'ReceptionArea', 0),
(3, 'W/S', 0),
(4, 'SR_Manage', 0),
(5, 'ConferenceRoomCount', 0),
(6, 'MeetingRoomCount', 0),
(7, 'ServerRoomCount', 0),
(8, 'GeneralWashroom', 0),
(9, 'GentsWashroomCount', 0),
(10, 'ladiesWashroom', 0),
(11, 'PantryCount', 0),
(12, 'StoreroomCount', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE `blog_master` (
  `PK_BlogID` int(10) NOT NULL,
  `BlogTitle` varchar(1000) NOT NULL,
  `BlogOwner` varchar(1000) NOT NULL,
  `BlogImage` varchar(100) NOT NULL,
  `BlogThumbImage` varchar(100) NOT NULL,
  `BlogDescription` varchar(10000) NOT NULL,
  `BlogStatus` int(100) NOT NULL,
  `BlogAlias` varchar(100) NOT NULL,
  `BlogDate` date DEFAULT NULL,
  `ReadingTime` int(11) NOT NULL,
  `TwitterTag` varchar(100) NOT NULL,
  `HiTag` varchar(100) NOT NULL,
  `Keywords` varchar(100) NOT NULL,
  `BlogOgTag` varchar(100) NOT NULL,
  `BlogOgTitle` varchar(100) NOT NULL,
  `altTag` varchar(100) NOT NULL,
  `MetaDescription` varchar(100) NOT NULL,
  `MetaTitle` varchar(100) NOT NULL,
  `DisplayOrder` int(10) NOT NULL,
  `FK_Status` int(10) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_master`
--

INSERT INTO `blog_master` (`PK_BlogID`, `BlogTitle`, `BlogOwner`, `BlogImage`, `BlogThumbImage`, `BlogDescription`, `BlogStatus`, `BlogAlias`, `BlogDate`, `ReadingTime`, `TwitterTag`, `HiTag`, `Keywords`, `BlogOgTag`, `BlogOgTitle`, `altTag`, `MetaDescription`, `MetaTitle`, `DisplayOrder`, `FK_Status`, `isDeleted`) VALUES
(1, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', 'dummyh', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(2, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(3, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', 'dwd', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(4, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(5, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(6, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(7, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(8, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(9, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(10, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(11, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(12, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(13, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 0),
(14, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 10, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(16, 'sasa11', 'asas', './uploads/Honest-design Task-1.jpg', './uploads/download.jpg', '', 11, 'asaa22', '2022-06-02', 5, 'sds323', 'dsd3434', 'dsd344', 'dsdsdsdsdsd3232', 'sdsdsd43', 'dsdsd22', 'dsdsdc', 'dsdscd', 0, 0, 1),
(19, 'test12345454', 'test1', './uploads/blogscreenshot (1).png', './uploads/blogscreenshot.png', '', 11, 'test1', '2022-06-02', 44, 'vfsvvsf', 'vsvsv', 'vsfvsv', 'vsvvsvfsv', 'vfsv', 'svv', 'cdc', 'dcd', 0, 0, 0),
(20, 'test22323', 'test2', '', './uploads/blogframe.png', '', 11, 'test2', '2022-06-12', 0, 'hsjdh', 'jfo', 'jj', 'hhjah', 'jhfjahj', 'jhfjhj', 'jdsjk', 'kjdsj', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `PK_Inquiry` int(10) NOT NULL,
  `Query` varchar(5000) NOT NULL,
  `DateOfInquiry` date NOT NULL,
  `EndDate` date NOT NULL,
  `FK_Status` int(10) NOT NULL,
  `LastCommunication` varchar(5000) NOT NULL,
  `EmailId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`PK_Inquiry`, `Query`, `DateOfInquiry`, `EndDate`, `FK_Status`, `LastCommunication`, `EmailId`) VALUES
(1, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-30', '2022-06-16', 4, 'dcsc', 'dummy@gmail.com'),
(2, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-28', '2022-06-16', 1, 'dcsc', 'dummy2@gmail.com'),
(3, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-22', '2022-06-16', 1, 'dcsc', 'dummy3@gmail.com'),
(4, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-23', '2022-06-16', 4, 'dcsc', 'dummy4@gmail.com'),
(5, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-25', '2022-06-16', 7, 'dcsc', 'dummy5@gmail.com'),
(6, 'lorem ispum dddfkjljfdklajf jfajfkdjdfdkfsdkfsd dfdfhfdhfjh dfhfjfhfh ha fhffhfhef oisfsffjf fjifj', '2022-06-26', '2022-06-16', 4, 'dcsc', 'dummy6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `interior_master`
--

CREATE TABLE `interior_master` (
  `PK_interior` int(10) NOT NULL,
  `InteriorTitle` varchar(1000) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `altTag` varchar(1000) NOT NULL,
  `GalleryImage1` varchar(100) NOT NULL,
  `GalleryImage2` varchar(100) NOT NULL,
  `GalleryImage3` varchar(100) NOT NULL,
  `GalleryImage4` varchar(100) NOT NULL,
  `isDeleted` int(1) NOT NULL DEFAULT 0,
  `MetaDescription` varchar(1000) NOT NULL,
  `Metatitle` varchar(100) NOT NULL,
  `Keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior_master`
--

INSERT INTO `interior_master` (`PK_interior`, `InteriorTitle`, `Alias`, `altTag`, `GalleryImage1`, `GalleryImage2`, `GalleryImage3`, `GalleryImage4`, `isDeleted`, `MetaDescription`, `Metatitle`, `Keywords`) VALUES
(1, 'a', 'b', 'ffd', 'cd', 'd', 'f', 'g', 0, 'd', 'd', 'd'),
(3, 'add', 'bsds', 'ffddsd', 'cddsd', 'ddsd', 'fdsd', 'gdsd', 0, 'dds', 'ddsd', 'ddsd'),
(4, 'sasas', 'asasa', 'saa', './uploads/interiorimage.png', '', '', '', 1, 'asasa', 'sasas', 'sss'),
(5, 'sasas', 'asasa', 'saa', '', '', '', '', 1, 'asasa', 'sasas', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `lease_amenities`
--

CREATE TABLE `lease_amenities` (
  `ID` int(11) NOT NULL,
  `FK_Lease` int(11) NOT NULL,
  `FK_amenities` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lease_amenities`
--

INSERT INTO `lease_amenities` (`ID`, `FK_Lease`, `FK_amenities`, `Count`, `isDeleted`) VALUES
(75, 21, 2, 7, 0),
(76, 21, 1, 2, 0),
(77, 21, 3, 4, 0),
(78, 19, 1, 3, 0),
(79, 19, 2, 3, 0),
(80, 19, 3, 4, 0),
(81, 2, 3, 12, 0),
(95, 22, 1, 4, 0),
(96, 22, 2, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leasing_master`
--

CREATE TABLE `leasing_master` (
  `PK_lease` int(10) NOT NULL,
  `Lease_Name` varchar(1000) NOT NULL,
  `Lease_Alias` varchar(100) NOT NULL,
  `ShortDescription` varchar(1000) NOT NULL,
  `LongDescription` varchar(5000) NOT NULL,
  `CarpetArea` varchar(100) NOT NULL,
  `CompleteAddress` varchar(10000) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Packs` int(100) NOT NULL,
  `ThumbnailURL` varchar(100) NOT NULL,
  `FloorPlanURL` varchar(100) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `VideoURL` varchar(100) NOT NULL,
  `Furnished/Unfurnished` varchar(100) NOT NULL,
  `BuildUpArea` int(10) NOT NULL,
  `TwitterTag` varchar(100) NOT NULL,
  `HiTag` varchar(100) NOT NULL,
  `Keywords` varchar(100) NOT NULL,
  `LeaseOgTag` varchar(100) NOT NULL,
  `LeaseOgTitle` varchar(100) NOT NULL,
  `altTag` varchar(100) NOT NULL,
  `MetaDescription` varchar(100) NOT NULL,
  `MetaTitle` varchar(100) NOT NULL,
  `DisplayOrder` int(10) NOT NULL,
  `FK_Status` int(10) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `office_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leasing_master`
--

INSERT INTO `leasing_master` (`PK_lease`, `Lease_Name`, `Lease_Alias`, `ShortDescription`, `LongDescription`, `CarpetArea`, `CompleteAddress`, `Location`, `Price`, `Packs`, `ThumbnailURL`, `FloorPlanURL`, `Images`, `VideoURL`, `Furnished/Unfurnished`, `BuildUpArea`, `TwitterTag`, `HiTag`, `Keywords`, `LeaseOgTag`, `LeaseOgTitle`, `altTag`, `MetaDescription`, `MetaTitle`, `DisplayOrder`, `FK_Status`, `isDeleted`, `office_number`) VALUES
(1, 'lease1', 'sasas23', 'hellodcdcojsccl', 'lorem ispum', 'asass344', '8555 W Flamingo Rd suite 101, Las Vegas, Downtown', 'Goregaon', 100000, 0, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 104),
(2, 'Lease2', 'sasas23', 'cdscsdcdsc', 'lorem ispum', 'asass344', '8555 W Flamingo Rd suite 101, Las Vegas, Downtown', 'Andheri', 200000, 10, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 101),
(3, 'Lease3', 'sasas23', 'csdcscs', 'cdscsc', 'asass344', '', 'Goregaon', 150000, 2, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 9, 0, 102),
(4, 'Lease4', 'sasas23', 'csdcscdc', 'dscsdcsdc', 'asass344', '', 'Goregaon', 250000, 3, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 103),
(5, 'Lease5', 'sasas23', 'cdscsc', 'cdscvv', 'asass344', '', 'Andheri', 400000, 4, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 9, 0, 105),
(6, 'Lease6', 'sasas23', 'vfsvsv', 'vfsv', 'asass344', '', 'Goregaon', 500000, 6, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 106),
(7, 'Lease7', 'sasas23', 'vsfvsfv', 'vfsv', 'asass344', '', 'Goregaon', 450000, 8, 'cscscc', 'scsc', '../../uploads/leasedownload.png', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 107),
(8, 'Lease8', 'sasas23', 'vsfvf', 'vfsv', 'asass344', '', 'Andheri', 550000, 11, 'cscscc', 'scsc', '../../uploads/leasedownload (1).jpg', 'cssa', 'csaca', 12, 'c', 'csc', 'scsc', 'csc', 'scscs', 'sccc', 'scsc', 'cscs', 0, 8, 0, 108),
(16, 'aasas', 'asas', 'vfvfv', 'vfvv', '', 'vfvfv', 'Goregaon', 149000, 11, 'bgbgb', 'bgbd', '', 'vfvvfv', 'dbgb', 0, '', 'nhnhn', 'nhnhn', 'bgbgdb', 'bgbgb', 'bgbgdbbb', 'bbgdbdb', 'bgdbd', 0, 8, 0, 109),
(17, 'aasas', 'asas', 'vfvfv', 'vfvv', '', 'vfvfv', 'Goregaon', 456000, 17, 'bgbgb', 'bgbd', '', 'vfvvfv', 'dbgb', 0, '', 'nhnhn', 'nhnhn', 'bgbgdb', 'bgbgb', 'bgbgdbbb', 'bbgdbdb', 'bgdbd', 0, 8, 0, 110),
(18, 'aasas', 'asas', 'vfvfv', 'vfvv', '', 'vfvfv', 'Andheri', 300000, 12, 'bgbgb', 'bgbd', '', 'vfvvfv', 'dbgb', 0, '', 'nhnhn', 'nhnhn', 'bgbgdb', 'bgbgb', 'bgbgdbbb', 'bbgdbdb', 'bgdbd', 0, 8, 0, 111),
(19, 'hkj', 'jjh', '7878', '546', '', '654', 'Goregaon', 250000, 7, 'jnjn', 'jnjnj', '../../uploads/leasescreenshot (1).png', 'cdcd', 'jnj', 0, 'jj', 'jhb', 'hb', 'jnjnjn', 'jnjn', 'njnjn', 'jnjnj', 'njnjn', 54, 8, 0, 112),
(20, 'tester1', 'hjh', 'hjjkghkjhjk', 'hjkjhk', '', 'kjhhjjk', 'Goregaon', 150000, 3, 'ghhhhh', 'vhhhhhh', '', 'hjjjj', 'jkkkkk', 0, 'fweef', 'jjj', 'kkk', 'fff', 'ddd', 'aaa', 'hhhh', 'vvv', 0, 8, 0, 113),
(21, 'tester1test', 'hjh', 'hjjkghkjhjk', 'hjkjhk', '', 'kjhhjjk', 'Andheri', 100000, 3, 'ghhhhh', 'vhhhhhh', '', 'hjjjj', 'jkkkkk', 0, 'dfddf', 'jjj', 'kkk', 'fff', 'ddd', 'aaa', 'hhhh', 'vvv', 0, 8, 0, 114),
(22, 'tester3', 'tester3', 'tester3', 'tester3', '', 'tester3', 'Goregaon', 45500, 5, 'tester3', 'tester3', '../../uploads/leasescreenshot (1).png', 'tester3', 'tester3', 0, 'tester3', 'tester3', 'tester3', 'tester3', 'tester3', 'tester3', 'tester3', 'tester3', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_master`
--

CREATE TABLE `project_master` (
  `PK_Project` int(10) NOT NULL,
  `ProjectName` varchar(1000) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `ShortDescription` varchar(5000) NOT NULL,
  `LongDescription` varchar(10000) NOT NULL,
  `Amenities_ID` int(10) NOT NULL,
  `ProjectType` varchar(100) NOT NULL,
  `BrochureURL` varchar(1000) NOT NULL,
  `ThumbnailImageURL` varchar(1000) NOT NULL,
  `FloorPlantImageURL` varchar(1000) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `FK_Status` int(11) NOT NULL,
  `ProjectImage1` varchar(1000) NOT NULL,
  `ProjectImage2` varchar(1000) NOT NULL,
  `ProjectImage3` varchar(1000) NOT NULL,
  `ProjectImage4` varchar(1000) NOT NULL,
  `ProjectImage5` varchar(1000) NOT NULL,
  `ProjectImage6` varchar(1000) NOT NULL,
  `MetaTitle` varchar(1000) NOT NULL,
  `MetaDescription` varchar(1000) NOT NULL,
  `altTag` varchar(1000) NOT NULL,
  `ProjectOgTitle` varchar(1000) NOT NULL,
  `ProjectOgTag` varchar(1000) NOT NULL,
  `Keywords` varchar(1000) NOT NULL,
  `HiTag` varchar(1000) NOT NULL,
  `TwitterTag` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_master`
--

INSERT INTO `project_master` (`PK_Project`, `ProjectName`, `Alias`, `ShortDescription`, `LongDescription`, `Amenities_ID`, `ProjectType`, `BrochureURL`, `ThumbnailImageURL`, `FloorPlantImageURL`, `isDeleted`, `FK_Status`, `ProjectImage1`, `ProjectImage2`, `ProjectImage3`, `ProjectImage4`, `ProjectImage5`, `ProjectImage6`, `MetaTitle`, `MetaDescription`, `altTag`, `ProjectOgTitle`, `ProjectOgTag`, `Keywords`, `HiTag`, `TwitterTag`) VALUES
(1, 'Cama Estate(Goregaon)1', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Residential', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)', 'Cama Estate(Goregaon)Cama Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', './uploads/Picture1.png', '', '', '', '', '', '', '', '', '', ''),
(11, 'mmr', 'ef', 'eop', 'efef', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 7, '', '', '', '', '', '', 'vevevv', 'vevev', 'veev  ', 'gtg', 'gddg', 'tbbt', 'gtgt', 'dddfvd'),
(12, 'mmrgngngng', 'efnnd', 'eopnggnn', 'efefnfd', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 7, '', '', '', '', '', '', 'vevevv', 'vevev', 'veev  ', 'gtg', 'gddg', 'tbbt', 'gtgt', 'dddfvd'),
(13, 'sas', 'dsd', 'dsds', 'dsds', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', 'fdf', 'dfdf', 'dfdf', 'dfdf', 'dfdf', 'fsd', 'fdf', 'fdf'),
(14, 'sas', 'sasa', 'asasa', 'sasas', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', 'sa', 'sas', 'sa', 'asas', 'asas', 'asas', 'asas', 'sas'),
(15, 'sas', 'sasa', 'asasa', 'sasas', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 0, 5, '', '', '', '', '', '', 'sa', 'sas', 'sa', 'asas', 'asas', 'asas', 'asas', 'sas'),
(16, 'Cama Estate(Goregaon)ce', 'Cama Estate(Goregaon)cece', 'Cama Estate(Goregaon)cece', 'Cama Estate(Goregaon)Cacecema Estate(Goregaon)Cama Estate(Goregaon)', 0, 'Commercial', '', '../../uploads/projectimage.png', '', 1, 7, '', '', '', '', '', '', 'cece', 'ececec', 'eece', 'ceec', 'ece', 'cce', 'cece', 'ece'),
(17, 'dscd', 'cd', 'cdsc', 'cdcsc', 0, 'Residential', './uploads/projectdownload (1).jpg', '../../uploads/projectimage.png', '', 0, 7, '', '', '', '', '', '', 'cd', 'sdcsdcsc', 'dcdcd', 'dcc', 'cdcds', 'ccds', 'cdcsdc', 'dsd'),
(18, 'dscd1212', 'cd32', 'cdsc', 'cdcsc', 0, 'Residential', '', '../../uploads/projectimage.png', '', 0, 7, '', '', '', '', '', '', 'cd', 'sdcsdcsc', 'dcdcd', 'dcc', 'cdcds', 'ccds', 'cdcsdc', 'dsd'),
(19, 'dscdk2323', 'qwerty', 'cdsc3255', 'cdcsc', 0, 'Residential', '', '../../uploads/projectimage.png', '', 1, 7, '', '', '', '', '', '', 'cd', 'sdcsdcsc', 'dcdcd', 'dcc', 'cdcds', 'ccds', 'cdcsdc', 'dsd'),
(20, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'tester', 'tester', '', '', 0, 'Select', '', '../../uploads/projectimage.png', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'tester', 'tester', '', '', 0, 'Select', '../../uploads/projectI19MA006(LAB-ASSIGNMENT-7).pdf', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'tester', 'tester', '', '', 0, 'Select', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'tester', 'tester', '', '', 0, 'Select', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'tester', 'tester', '', '', 0, 'Select', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `PK_Status` int(1) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`PK_Status`, `Status`) VALUES
(1, 'New'),
(2, 'Active'),
(3, 'Inactive'),
(4, 'Closed'),
(5, 'Completed'),
(6, 'On going'),
(7, 'In Progress'),
(8, 'Vacant'),
(9, 'Occupied'),
(10, 'published'),
(11, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `PK_User` int(10) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `EmailId` varchar(1000) NOT NULL,
  `ContactNo` varchar(25) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`PK_User`, `Username`, `Password`, `Name`, `EmailId`, `ContactNo`, `IsActive`, `isAdmin`) VALUES
(1, 'admin', 'admin', 'admin', 'user1@gmail.com', '5652158745', 1, 1),
(2, 'user2', 'user2', 'user2', 'user2@gmail.com', '5467985455', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities_master`
--
ALTER TABLE `amenities_master`
  ADD PRIMARY KEY (`PK_amenities`);

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD PRIMARY KEY (`PK_BlogID`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`PK_Inquiry`);

--
-- Indexes for table `interior_master`
--
ALTER TABLE `interior_master`
  ADD PRIMARY KEY (`PK_interior`);

--
-- Indexes for table `lease_amenities`
--
ALTER TABLE `lease_amenities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `leasing_master`
--
ALTER TABLE `leasing_master`
  ADD PRIMARY KEY (`PK_lease`);

--
-- Indexes for table `project_master`
--
ALTER TABLE `project_master`
  ADD PRIMARY KEY (`PK_Project`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD PRIMARY KEY (`PK_Status`),
  ADD UNIQUE KEY `PrimaryKey` (`PK_Status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`PK_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities_master`
--
ALTER TABLE `amenities_master`
  MODIFY `PK_amenities` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `PK_BlogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `PK_Inquiry` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interior_master`
--
ALTER TABLE `interior_master`
  MODIFY `PK_interior` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lease_amenities`
--
ALTER TABLE `lease_amenities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `leasing_master`
--
ALTER TABLE `leasing_master`
  MODIFY `PK_lease` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `project_master`
--
ALTER TABLE `project_master`
  MODIFY `PK_Project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `status_master`
--
ALTER TABLE `status_master`
  MODIFY `PK_Status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `PK_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
