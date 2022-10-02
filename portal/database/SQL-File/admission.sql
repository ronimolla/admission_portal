-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 12:24 PM
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgn_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_members` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_organization_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuition_fees` int(11) DEFAULT NULL,
  `booking&supplies` int(11) DEFAULT NULL,
  `living_expenses` int(11) DEFAULT NULL,
  `total_educational_expense` int(11) DEFAULT NULL,
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
(19, '2022_09_27_105624_create_program_batches_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_name`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'BBLT', 3, NULL, NULL),
(2, 'BBLTJ', 2, NULL, NULL),
(3, 'APL', 3, NULL, NULL),
(4, 'YLS', 2, NULL, NULL),
(5, 'CareerX', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_batches`
--

CREATE TABLE `program_batches` (
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` int(11) NOT NULL,
  `batch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_batches`
--

INSERT INTO `program_batches` (`batch_id`, `program_id`, `batch_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'BBLT5', NULL, NULL),
(2, 1, 'BBLT6', NULL, NULL),
(3, 2, 'BBLTJ20', NULL, NULL),
(4, 2, 'BBLTJ21', NULL, NULL),
(5, 3, 'APL5', NULL, NULL),
(6, 3, 'APL6', NULL, NULL),
(7, 4, 'YLS7', NULL, NULL),
(8, 4, 'YLS8', NULL, NULL),
(9, 5, 'CareerX12', NULL, NULL),
(10, 5, 'CareerX13', NULL, NULL);

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
  `student_id` int(255) NOT NULL,
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `program_batches`
--
ALTER TABLE `program_batches`
  ADD PRIMARY KEY (`batch_id`);

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
  ADD UNIQUE KEY `student_personal_infos_student_id_unique` (`student_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `batch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `writing_tests`
--
ALTER TABLE `writing_tests`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
