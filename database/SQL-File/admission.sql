-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: Nov 07, 2022 at 10:34 AM

-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `department`, `designation`, `role`, `created_at`, `updated_at`) VALUES
(3, 'roni', 'molla', 'admin@gmail.com', '123456', 'IT', 'Intern', 'Admin', '2022-09-07 05:16:41', '2022-09-08 02:07:17'),
(6, 'rahul', 'baruary', 'rahul@gmail.com', '123456', 'IT', 'Project Assistance', 'Admin', '2022-09-08 02:18:08', '2022-09-08 02:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `assesement_preselections`
--

CREATE TABLE `assesement_preselections` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assessor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authenticity` int(11) DEFAULT NULL,
  `articulation` int(11) DEFAULT NULL,
  `logical_reasoning` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `select_for_writing_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assesement_preselections`
--

INSERT INTO `assesement_preselections` (`student_id`, `program_name`, `program_batch_id`, `assessor`, `authenticity`, `articulation`, `logical_reasoning`, `subtotal`, `select_for_writing_test`, `preselection_stage`, `follow_up_stage`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', '1', 'Aquib', 4, 4, 4, 4, 'Eligible', 'Done', 'Done', '2022-09-28 23:34:37', '2022-09-28 23:36:36'),
(2, 'BBLT', '1', 'Aquib', 3, 3, 3, 9, 'Eligible', 'Done', 'Done', '2022-09-29 02:11:43', '2022-09-29 02:24:08'),
(3, 'BBLTJ', '3', 'Aquib', 3, 3, 3, 6, 'Eligible', 'Done', 'pending', '2022-09-29 02:12:43', '2022-09-29 02:23:45'),
(4, 'APL', '5', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'YLS', '8', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'CareerX', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

CREATE TABLE `assesments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_assessor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_authenticity` int(11) DEFAULT NULL,
  `pre_articulation` int(11) DEFAULT NULL,
  `pre_logical_reasoning` int(11) DEFAULT NULL,
  `pre_subtotal` int(11) DEFAULT NULL,
  `select_for_writing_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `pre_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `pre_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_attend_for_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_attending_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_time` datetime DEFAULT NULL,
  `writing_test_assessor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_test_attended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL,
  `writing_and_appication_score` int(11) DEFAULT NULL,
  `select_for_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `writing_follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `test_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_attend_for_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_attending_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_time` datetime DEFAULT NULL,
  `interviewer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attend_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attend_group_discussion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competence` int(11) DEFAULT NULL,
  `courage` int(11) DEFAULT NULL,
  `compassion` int(11) DEFAULT NULL,
  `commitment` int(11) DEFAULT NULL,
  `total_interview_marks` int(11) DEFAULT NULL,
  `all_totall_marks` int(11) DEFAULT NULL,
  `select_for_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `interview_follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `interview_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_followup_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_to_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--

-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) UNSIGNED NOT NULL,
  `division_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `website`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451, 'www.dhaka.gov.bd'),
(2, 3, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406, 'www.faridpur.gov.bd'),
(3, 3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283, 'www.gazipur.gov.bd'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059, 'www.gopalganj.gov.bd'),
(5, 3, 'Jamalpur', 'জামালপুর', 24.937533, 89.937775, 'www.jamalpur.gov.bd'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', 24.444937, 90.776575, 'www.kishoreganj.gov.bd'),
(7, 3, 'Madaripur', 'মাদারীপুর', 23.164102, 90.1896805, 'www.madaripur.gov.bd'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', 0, 0, 'www.manikganj.gov.bd'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', 0, 0, 'www.munshiganj.gov.bd'),
(10, 3, 'Mymensingh', 'ময়মনসিং', 0, 0, 'www.mymensingh.gov.bd'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', 23.63366, 90.496482, 'www.narayanganj.gov.bd'),
(12, 3, 'Narsingdi', 'নরসিংদী', 23.932233, 90.71541, 'www.narsingdi.gov.bd'),
(13, 3, 'Netrokona', 'নেত্রকোনা', 24.870955, 90.727887, 'www.netrokona.gov.bd'),
(14, 3, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665, 'www.rajbari.gov.bd'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', 0, 0, 'www.shariatpur.gov.bd'),
(16, 3, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966, 'www.sherpur.gov.bd'),
(17, 3, 'Tangail', 'টাঙ্গাইল', 0, 0, 'www.tangail.gov.bd'),
(18, 5, 'Bogra', 'বগুড়া', 24.8465228, 89.377755, 'www.bogra.gov.bd'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', 0, 0, 'www.joypurhat.gov.bd'),
(20, 5, 'Naogaon', 'নওগাঁ', 0, 0, 'www.naogaon.gov.bd'),
(21, 5, 'Natore', 'নাটোর', 24.420556, 89.000282, 'www.natore.gov.bd'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', 24.5965034, 88.2775122, 'www.chapainawabganj.gov.bd'),
(23, 5, 'Pabna', 'পাবনা', 23.998524, 89.233645, 'www.pabna.gov.bd'),
(24, 5, 'Rajshahi', 'রাজশাহী', 0, 0, 'www.rajshahi.gov.bd'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815, 'www.sirajganj.gov.bd'),
(26, 6, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504, 'www.dinajpur.gov.bd'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', 25.328751, 89.528088, 'www.gaibandha.gov.bd'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', 25.805445, 89.636174, 'www.kurigram.gov.bd'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', 0, 0, 'www.lalmonirhat.gov.bd'),
(30, 6, 'Nilphamari', 'নীলফামারী', 25.931794, 88.856006, 'www.nilphamari.gov.bd'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', 26.3411, 88.5541606, 'www.panchagarh.gov.bd'),
(32, 6, 'Rangpur', 'রংপুর', 25.7558096, 89.244462, 'www.rangpur.gov.bd'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834, 'www.thakurgaon.gov.bd'),
(34, 1, 'Barguna', 'বরগুনা', 0, 0, 'www.barguna.gov.bd'),
(35, 1, 'Barisal', 'বরিশাল', 0, 0, 'www.barisal.gov.bd'),
(36, 1, 'Bhola', 'ভোলা', 22.685923, 90.648179, 'www.bhola.gov.bd'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', 0, 0, 'www.jhalakathi.gov.bd'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712, 'www.patuakhali.gov.bd'),
(39, 1, 'Pirojpur', 'পিরোজপুর', 0, 0, 'www.pirojpur.gov.bd'),
(40, 2, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773, 'www.bandarban.gov.bd'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286, 'www.brahmanbaria.gov.bd'),
(42, 2, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912, 'www.chandpur.gov.bd'),
(43, 2, 'Chittagong', 'চট্টগ্রাম', 22.335109, 91.834073, 'www.chittagong.gov.bd'),
(44, 2, 'Comilla', 'কুমিল্লা', 23.4682747, 91.1788135, 'www.comilla.gov.bd'),
(45, 2, 'Cox\'s Bazar', 'কক্স বাজার', 0, 0, 'www.coxsbazar.gov.bd'),
(46, 2, 'Feni', 'ফেনী', 23.023231, 91.3840844, 'www.feni.gov.bd'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', 23.119285, 91.984663, 'www.khagrachhari.gov.bd'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 22.942477, 90.841184, 'www.lakshmipur.gov.bd'),
(49, 2, 'Noakhali', 'নোয়াখালী', 22.869563, 91.099398, 'www.noakhali.gov.bd'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', 0, 0, 'www.rangamati.gov.bd'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', 24.374945, 91.41553, 'www.habiganj.gov.bd'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', 24.482934, 91.777417, 'www.moulvibazar.gov.bd'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115, 'www.sunamganj.gov.bd'),
(54, 7, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894, 'www.sylhet.gov.bd'),
(55, 4, 'Bagerhat', 'বাগেরহাট', 22.651568, 89.785938, 'www.bagerhat.gov.bd'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.841841, 'www.chuadanga.gov.bd'),
(57, 4, 'Jessore', 'যশোর', 23.16643, 89.2081126, 'www.jessore.gov.bd'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213, 'www.jhenaidah.gov.bd'),
(59, 4, 'Khulna', 'খুলনা', 22.815774, 89.568679, 'www.khulna.gov.bd'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', 23.901258, 89.120482, 'www.kushtia.gov.bd'),
(61, 4, 'Magura', 'মাগুরা', 23.487337, 89.419956, 'www.magura.gov.bd'),
(62, 4, 'Meherpur', 'মেহেরপুর', 23.762213, 88.631821, 'www.meherpur.gov.bd'),
(63, 4, 'Narail', 'নড়াইল', 23.172534, 89.512672, 'www.narail.gov.bd'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', 0, 0, 'www.satkhira.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`) VALUES
(1, 'Barisal', 'বরিশাল'),
(2, 'Chittagong', 'চট্টগ্রাম'),
(3, 'Dhaka', 'ঢাকা'),
(4, 'Khulna', 'খুলনা'),
(5, 'Rajshahi', 'রাজশাহী'),
(6, 'Rangpur', 'রংপুর'),
(7, 'Sylhet', 'সিলেট');

-- --------------------------------------------------------

--

-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Career Expo', 'Professional Development', NULL, NULL),
(2, 'Alumni Iftar', 'BGN', NULL, NULL),
(3, 'Dare to Lead', 'Leadership', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_batches`
--

CREATE TABLE `event_batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `sponser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_batches`
--

INSERT INTO `event_batches` (`id`, `batch_name`, `event_id`, `start_date`, `end_date`, `year`, `budget`, `sponser`, `created_at`, `updated_at`) VALUES
(1, 'Alumni Iftar 2', 2, '12/12/22', '12/12/22', '2022', 10000, 'BGN', NULL, NULL),
(2, 'Alumni Iftar 3', 2, '12/12/22', '12/12/22', '2022', 10000, 'BGN', NULL, NULL),
(3, 'Dare to Lead 5', 3, '12/12/22', '12/12/22', '2022', 30000, 'BYLC', NULL, NULL),
(4, 'Dare to Lead 6', 3, '12/12/22', '12/12/22', '2022', 30000, 'BYLC', NULL, NULL),
(5, 'Career Expo 4', 1, '12/12/22', '12/12/22', '2022', 50000, 'BYLC', NULL, NULL),
(6, 'Career Expo 5', 1, '12/12/22', '12/12/22', '2022', 50000, 'BYLC', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `financial_aids`
--

CREATE TABLE `financial_aids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgn_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_members` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `earning_person_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `earning_person_father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_monthly_income` int(11) DEFAULT NULL,
  `earning_person_mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_monthly_income` int(11) DEFAULT NULL,
  `earning_person_other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_monthly_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_from_asset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition_fees` int(11) DEFAULT NULL,
  `booking_supplies` int(11) DEFAULT NULL,
  `living_expenses` int(11) DEFAULT NULL,
  `total_educational_expense` int(11) DEFAULT NULL,
  `personal_expenses` int(11) DEFAULT NULL,
  `transportation_expenses` int(11) DEFAULT NULL,
  `parent_contribution` int(11) DEFAULT NULL,
  `own_contribution` int(11) DEFAULT NULL,
  `total_earning` int(11) DEFAULT NULL,
  `scholarship` int(11) DEFAULT NULL,
  `other_member_contribution` int(11) DEFAULT NULL,
  `total_resource` int(11) DEFAULT NULL,
  `reason_for_apply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `communicate_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow_ups`
--

CREATE TABLE `follow_ups` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_attend_for_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_attending_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_time` datetime DEFAULT NULL,
  `test_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_attend_for_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_attending_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_time` datetime DEFAULT NULL,
  `interview_follow_up_assessor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_followup_contact_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `want_to_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_not_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_ups`
--

INSERT INTO `follow_ups` (`student_id`, `program_name`, `program_batch_id`, `pre_follow_up_assessor_name`, `pre_contact_media`, `want_attend_for_test`, `reason_for_not_attending_test`, `test_time`, `test_follow_up_assessor_name`, `test_contact_media`, `want_attend_for_interview`, `reason_for_not_attending_interview`, `interview_time`, `interview_follow_up_assessor_name`, `interview_followup_contact_media`, `want_to_registration`, `request_faq`, `sent_faq`, `reason_for_not_registration`, `final_remark`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', '1', 'Aquib', 'Phone', 'Yes', 'warest', '2022-09-29 01:36:00', 'Aquib', 'Phone', 'Yes', 'dhft', '2022-09-30 11:37:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28 23:34:37', '2022-09-28 23:37:05'),
(2, 'BBLT', '1', 'Aquib', 'Phone', 'Yes', 'trgh fgh hj', '2022-09-15 17:24:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:11:43', '2022-09-29 02:24:08'),
(3, 'BBLTJ', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'APL', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'YLS', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'CareerX', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interviewer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attend_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attend_group_discussion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competence` int(11) DEFAULT NULL,
  `courage` int(11) DEFAULT NULL,
  `compassion` int(11) DEFAULT NULL,
  `commitment` int(11) DEFAULT NULL,
  `total_interview_marks` int(11) DEFAULT NULL,
  `all_totall_marks` int(11) DEFAULT NULL,
  `select_for_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `interview_follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`student_id`, `program_name`, `program_batch_id`, `interviewer`, `attend_interview`, `attend_group_discussion`, `competence`, `courage`, `compassion`, `commitment`, `total_interview_marks`, `all_totall_marks`, `select_for_registration`, `interview_preselection_stage`, `interview_follow_up_stage`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'BBLT', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'BBLTJ', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'APL', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'YLS', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'CareerX', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_06_024833_create_admins_table', 1),
(6, '2022_09_12_041246_create_student_personal_infos_table', 1),
(7, '2022_09_12_054152_create_student_contact_infos_table', 1),
(8, '2022_09_12_061447_create_student_educational_infos_table', 1),
(9, '2022_09_12_090240_create_student_address_infos_table', 1),
(10, '2022_09_12_102836_create_student_career_infos_table', 1),
(11, '2022_09_12_103901_create_student_questionary_infos_table', 1),
(12, '2022_09_12_104803_create_student_marcom_infos_table', 1),
(13, '2022_09_19_100333_create_assesement_preselections_table', 1),
(14, '2022_09_20_112148_create_follow_ups_table', 1),
(15, '2022_09_21_042559_create_writing_tests_table', 1),
(16, '2022_09_22_045448_create_interviews_table', 1),
(17, '2022_09_26_061702_create_financial_aids_table', 1),
(18, '2022_09_27_105452_create_programs_table', 1),
(19, '2022_09_27_105624_create_program_batches_table', 1),
(20, '2022_10_03_033250_events', 1),
(21, '2022_10_03_034038_event_batches', 1),
(22, '2022_10_03_091919_create_waivers_table', 1),
(23, '2022_10_18_051349_create_participants_table', 2),
(24, '2022_10_18_053849_create_student_programs_table', 2),
(25, '2022_10_18_054647_create_student_events_table', 2),
(26, '2022_10_18_054819_create_participant_events_table', 2),
(27, '2022_10_30_064417_create_assesments_table', 3),
(28, '2022_11_02_072346_create_old_program_infos_table', 4),
(29, '2022_11_02_091904_create_payments_table', 5);


-- --------------------------------------------------------

--
-- Table structure for table `old_program_infos`
--

CREATE TABLE `old_program_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_phone_no` int(11) DEFAULT NULL,
  `emergency_contact_no` int(11) DEFAULT NULL,
  `guardian_phone_no` int(11) DEFAULT NULL,
  `guardian_phone_no2` int(11) DEFAULT NULL,
  `guardian_email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_apartment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_road_no_OR_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_thana_OR_upazala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_similar_to_permanent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_apartment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_road_no_OR_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_thana_OR_upazala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_lavel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_educational_lavel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higher_secondary_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_passing_year` int(11) DEFAULT NULL,
  `college_current_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpa` double(8,2) DEFAULT NULL,
  `admission_of_udergraduation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `undergraduate_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uni_passing_year` int(11) DEFAULT NULL,
  `uni_current_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa` double(8,2) DEFAULT NULL,
  `extracurricular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waiver_percentage` int(11) DEFAULT NULL,
  `waiver_amount` int(11) DEFAULT NULL,
  `waiver_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `participant_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_apartment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_road_no_OR_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_thana_OR_upazala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participant_events`
--

CREATE TABLE `participant_events` (
  `participant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participant_events`
--

INSERT INTO `participant_events` (`participant_id`, `event_batch_id`, `event_batch_name`, `created_at`, `updated_at`) VALUES
('1', '3', 'Dare to Lead 5', NULL, NULL),
('2', '4', 'Dare to Lead 6', NULL, NULL),
('3', '5', 'Career Expo 4', NULL, NULL),
('4', '5', 'Career Expo 4', NULL, NULL),
('5', '6', 'Career Expo 5', NULL, NULL),
('6', '6', 'Career Expo 5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_fees` int(11) DEFAULT NULL,
  `final_registration_fees` int(11) DEFAULT NULL,
  `payment_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_name`, `duration`, `category`, `donor`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', 3, NULL, NULL, NULL, NULL),
(2, 'BBLTJ', 2, NULL, NULL, NULL, NULL),
(3, 'APL', 3, NULL, NULL, NULL, NULL),
(4, 'YLS', 2, NULL, NULL, NULL, NULL),
(5, 'CareerX', 3, NULL, NULL, NULL, NULL);


-- --------------------------------------------------------

--
-- Table structure for table `program_batches`
--

CREATE TABLE `program_batches` (
  `batch_id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `batch_name` varchar(20) DEFAULT NULL,
  `application_start_date` date DEFAULT NULL,
  `application_end_date` date DEFAULT NULL,
  `program_start_date` date DEFAULT NULL,
  `program_end_date` date DEFAULT NULL,
  `program_duration` int(10) DEFAULT NULL,
  `program_mode` varchar(10) DEFAULT NULL,
  `class_time` varchar(30) DEFAULT NULL,
  `registration_fees` int(11) DEFAULT NULL,
  `registration_deadline` date DEFAULT NULL,
  `current_state` varchar(10) DEFAULT 'running',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_batches`
--

INSERT INTO `program_batches` (`batch_id`, `program_id`, `batch_name`, `application_start_date`, `application_end_date`, `program_start_date`, `program_end_date`, `program_duration`, `program_mode`, `class_time`, `registration_fees`, `registration_deadline`, `current_state`, `created_at`, `updated_at`) VALUES
(1, 1, 'BBLT7', '2022-11-03', '2022-11-05', '2022-11-10', '2022-12-10', 1, 'online', '3pm - 4pm', 5000, '2022-11-06', NULL, '2022-11-03', '2022-11-03'),
(2, 3, 'APL2', '2022-11-04', '2022-11-06', '2022-11-11', '2022-12-08', 1, 'online', '3pm - 4pm', 2000, '2022-11-07', 'running', '2022-11-03', '2022-11-03');


-- --------------------------------------------------------

--
-- Table structure for table `student_address_infos`
--

CREATE TABLE `student_address_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `present_apartment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_road_no_OR_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_thana_OR_upazala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_similar_to_permanent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_apartment_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_road_no_OR_village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_thana_OR_upazala` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_address_infos`
--

INSERT INTO `student_address_infos` (`student_id`, `present_apartment_no`, `present_house_no`, `present_road_no_OR_village`, `present_thana_OR_upazala`, `present_district`, `present_division`, `present_post_code`, `present_similar_to_permanent`, `permanent_apartment_no`, `permanent_house_no`, `permanent_road_no_OR_village`, `permanent_thana_OR_upazala`, `permanent_district`, `permanent_division`, `permanent_post_code`, `created_at`, `updated_at`) VALUES
(1, '45', '2', 'rt55', 'mukshudpur', 'Bandarban', 'Rajshahi', '321', 'yes', '45', '2', 'rt55', 'mukshudpur', 'Bandarban', 'Rajshahi', '321', '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, '45', '2', '1', 'mukshudpur', 'Bandarban', 'Chattagram', '321', 'yes', '45', '2', '1', 'mukshudpur', 'Bandarban', 'Chattagram', '321', '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, '45', '2', 'rt55', 'mukshudpur', 'Bagerhat', 'Chattagram', '321', 'yes', '45', '2', 'rt55', 'mukshudpur', 'Bagerhat', 'Chattagram', '321', '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, '4d', '2', 'rt55', 'mukshudpur', 'Bagerhat', 'Rajshahi', '321', 'yes', '4d', '2', 'rt55', 'mukshudpur', 'Bagerhat', 'Rajshahi', '321', '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, '45', '2', '1c', 'mukshudpur', 'Bagerhat', 'Rajshahi', '321', 'yes', '45', '2', '1c', 'mukshudpur', 'Bagerhat', 'Rajshahi', '321', '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, '45', '34', 'rt55', 'mukshudpur', 'Bandarban', 'Chattagram', '321', 'yes', '45', '34', 'rt55', 'mukshudpur', 'Bandarban', 'Chattagram', '321', '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_career_infos`
--

CREATE TABLE `student_career_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reporting_on` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_contact_infos`
--

CREATE TABLE `student_contact_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_phone_no` int(11) DEFAULT NULL,
  `emergency_contact_no` int(11) DEFAULT NULL,
  `guardian_phone_no` int(11) DEFAULT NULL,
  `guardian_phone_no2` int(11) DEFAULT NULL,
  `guardian_email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_contact_infos`
--

INSERT INTO `student_contact_infos` (`student_id`, `email_address`, `personal_phone_no`, `emergency_contact_no`, `guardian_phone_no`, `guardian_phone_no2`, `guardian_email_address`, `created_at`, `updated_at`) VALUES
(1, 'mollaroni12@gmail.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'rd@yahoo.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'hd@gmail.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'mollaroni12@gmail.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'mollaroni12@gmail.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'mollaroni12@gmail.com', 1712499905, 1712409905, NULL, NULL, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_educational_infos`
--

CREATE TABLE `student_educational_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `educational_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_lavel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_educational_lavel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higher_secondary_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_passing_year` int(11) DEFAULT NULL,
  `college_current_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpa` double(8,2) DEFAULT NULL,
  `admission_of_udergraduation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `undergraduate_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uni_passing_year` int(11) DEFAULT NULL,
  `uni_current_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa` double(8,2) DEFAULT NULL,
  `extracurricular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_educational_infos`
--

INSERT INTO `student_educational_infos` (`student_id`, `educational_medium`, `educational_lavel`, `secondary_educational_lavel`, `school`, `class`, `ssc_passing_year`, `ssc_result`, `higher_secondary_level`, `college`, `department`, `college_passing_year`, `college_current_year`, `gpa`, `admission_of_udergraduation`, `undergraduate_level`, `university`, `degree`, `uni_passing_year`, `uni_current_year`, `cgpa`, `extracurricular`, `created_at`, `updated_at`) VALUES
(1, 'English Medium', 'Bachelor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khalia', NULL, NULL, 'A\'Level/Alim/HSC 2nd Year', 3.44, 'sdjsab asdbjsa sbdjsa', '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'Bengali Version', 'Bachelor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khalia', NULL, NULL, 'A\'Level/Alim/HSC 2nd Year', 3.44, 'sfsdgs', '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'English Medium', NULL, NULL, 'khalia', 'Class 7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdjsab asdbjsa sbdjsa', '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'Bengali Version', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khalia', NULL, 2022, 'Honor\'s 3rd year', 3.44, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'English Medium', NULL, 'SSC', 'dfghv', NULL, '344', '4.33', 'A\'Levels', 'sdfg', NULL, 231, NULL, 2.12, 'no', ' ', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'Bengali Version', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khalia', 'csc', 2022, 'Undergraduate 4th year', 3.44, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_events`
--

CREATE TABLE `student_events` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_events`
--

INSERT INTO `student_events` (`student_id`, `event_batch_id`, `event_batch_name`, `created_at`, `updated_at`) VALUES
('1', '1', 'Alumni Iftar 2', NULL, NULL),
('2', '1', 'Alumni Iftar 2', NULL, NULL),
('3', '2', 'Alumni Iftar 3', NULL, NULL),
('4', '2', 'Alumni Iftar 3', NULL, NULL),
('5', '3', 'Dare to Lead 5', NULL, NULL),
('6', '4', 'Dare to Lead 6', NULL, NULL),
('1', '5', 'Career Expo 4', NULL, NULL),
('1', '6', 'Career Expo 5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_marcom_infos`
--

CREATE TABLE `student_marcom_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `Knowing_media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `careerx_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `careerx_bach_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bootcamp_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bootcamp_bach_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campus_ambassador` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marcom_infos`
--

INSERT INTO `student_marcom_infos` (`student_id`, `Knowing_media`, `careerx_program`, `careerx_bach_no`, `bootcamp_program`, `bootcamp_bach_no`, `campus_ambassador`, `university_name`, `quest_1`, `quest_2`, `quest_3`, `mcq_4`, `mcq_5`, `created_at`, `updated_at`) VALUES
(1, 'Website', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'Newspaper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'Facebook', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'Facebook', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'Newspaper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'Newspaper', 'Yes', 'CareerX 22', 'Yes', 'Career Bootcamp 2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_infos`
--

CREATE TABLE `student_personal_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `birth_certificate` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_personal_infos`
--

INSERT INTO `student_personal_infos` (`student_id`, `program_name`, `program_batch_id`, `full_name`, `gender`, `dob`, `nationality`, `father_name`, `mother_name`, `guardian_name`, `guardian_relation`, `ethnicity`, `ethnicity_name`, `disability`, `disability_name`, `nid`, `birth_certificate`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', '1', 'Jalil kaka', 'male', 'September - Thursday - 2022', 'bangladesh', 'habib', 'razia', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'BBLT', '1', 'jasim uddin', 'male', 'September - Friday - 2022', 'bangladesh', 'habib', 'razia', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'BBLTJ', '3', 'Rashed Khan', 'male', 'September - Tuesday - 2022', 'bangladesh', 'Aquaib', 'razia', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'APL', '5', 'Jahidul Islam', 'male', 'September - Monday - 2022', 'bangladesh', 'Razzak Islam', 'female jalil', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'YLS', '8', 'Roni Molla', 'male', 'September - Friday - 2022', 'bangladesh', 'big jalil', 'Khatun', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'CareerX', '10', 'Jamal Sharker', 'female', 'September - Tuesday - 2022', 'bangladesh', 'Aquaib', 'Khatun', NULL, NULL, 'yes', 'dsfg', 'yes', 'xfgd', 12345, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_programs`
--

CREATE TABLE `student_programs` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_programs`
--

INSERT INTO `student_programs` (`student_id`, `program_batch_id`, `program_batch_name`, `application_status`, `created_at`, `updated_at`) VALUES
('1', '1', 'BBLT5', 'pending', NULL, NULL),
('2', '1', 'BBLT5', 'pending', NULL, NULL),
('3', '3', 'BBLTJ20', 'pending', NULL, NULL),
('4', '5', 'APL5', 'pending', NULL, NULL),
('5', '8', 'YLS8', 'pending', NULL, NULL),
('6', '10', 'CareerX13', 'rejected', NULL, NULL),
('1', '3', 'BBLTJ20', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_questionary_infos`
--

CREATE TABLE `student_questionary_infos` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `justify_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ambition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analytics_ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narrative_writing_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narrative_writing_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcq_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_questionary_infos`
--

INSERT INTO `student_questionary_infos` (`student_id`, `justify_answer`, `ambition`, `short_bio`, `analytics_ans`, `narrative_writing_1`, `narrative_writing_2`, `mcq_1`, `mcq_2`, `mcq_3`, `mcq_4`, `mcq_5`, `question_1`, `question_2`, `created_at`, `updated_at`) VALUES
(1, 'asdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28 23:34:37', '2022-09-28 23:34:37'),
(2, 'cxfgnbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'cxvbn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, NULL, NULL, NULL, NULL, 'sfdg vc sdff', 'sfd dsfg sdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, NULL, NULL, NULL, NULL, 'dfhg rfgj', 'dh dg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, NULL, NULL, 'fgh hj', NULL, NULL, NULL, 'David', 'Enid', 'David', NULL, NULL, NULL, NULL, '2022-09-29 02:17:01', '2022-09-29 02:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `waivers`
--

CREATE TABLE `waivers` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_Faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waiver_percentage` int(11) DEFAULT NULL,
  `waiver_amount` int(11) DEFAULT NULL,
  `waiver_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writing_tests`
--

CREATE TABLE `writing_tests` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `program_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writing_test_assessor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_test_attended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_score` int(11) DEFAULT NULL,
  `writing_and_appication_score` int(11) DEFAULT NULL,
  `select_for_interview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writing_preselection_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `writing_follow_up_stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writing_tests`
--

INSERT INTO `writing_tests` (`student_id`, `program_name`, `program_batch_id`, `writing_test_assessor`, `writing_test_attended`, `total_score`, `writing_and_appication_score`, `select_for_interview`, `writing_preselection_stage`, `writing_follow_up_stage`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', '1', 'Aquib', 'Yes', 66, 66, 'Eligible', 'Done', 'Done', '2022-09-28 23:34:37', '2022-09-28 23:37:05'),
(2, 'BBLT', '1', NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:11:43', '2022-09-29 02:11:43'),
(3, 'BBLTJ', '3', NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:12:43', '2022-09-29 02:12:43'),
(4, 'APL', '5', NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:14:01', '2022-09-29 02:14:01'),
(5, 'YLS', '8', NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:15:19', '2022-09-29 02:15:19'),
(6, 'CareerX', '10', NULL, NULL, NULL, NULL, NULL, 'pending', 'pending', '2022-09-29 02:17:01', '2022-09-29 02:17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `assesement_preselections`
--
ALTER TABLE `assesement_preselections`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--

-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_batches`
--
ALTER TABLE `event_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `financial_aids`
--
ALTER TABLE `financial_aids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_ups`
--
ALTER TABLE `follow_ups`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_program_infos`
--
ALTER TABLE `old_program_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `student_address_infos`
--
ALTER TABLE `student_address_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_career_infos`
--
ALTER TABLE `student_career_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_contact_infos`
--
ALTER TABLE `student_contact_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_educational_infos`
--
ALTER TABLE `student_educational_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_marcom_infos`
--
ALTER TABLE `student_marcom_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_personal_infos`
--
ALTER TABLE `student_personal_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_questionary_infos`
--
ALTER TABLE `student_questionary_infos`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waivers`
--
ALTER TABLE `waivers`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `writing_tests`
--
ALTER TABLE `writing_tests`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assesement_preselections`
--
ALTER TABLE `assesement_preselections`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assesments`
--
ALTER TABLE `assesments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--

-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_batches`
--
ALTER TABLE `event_batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_aids`
--
ALTER TABLE `financial_aids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_ups`
--
ALTER TABLE `follow_ups`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;


--
-- AUTO_INCREMENT for table `old_program_infos`
--
ALTER TABLE `old_program_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--

-- AUTO_INCREMENT for table `program_batches`
--
ALTER TABLE `program_batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--

-- AUTO_INCREMENT for table `student_address_infos`
--
ALTER TABLE `student_address_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_career_infos`
--
ALTER TABLE `student_career_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_contact_infos`
--
ALTER TABLE `student_contact_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_educational_infos`
--
ALTER TABLE `student_educational_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_marcom_infos`
--
ALTER TABLE `student_marcom_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_personal_infos`
--
ALTER TABLE `student_personal_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_questionary_infos`
--
ALTER TABLE `student_questionary_infos`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waivers`
--
ALTER TABLE `waivers`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writing_tests`
--
ALTER TABLE `writing_tests`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
