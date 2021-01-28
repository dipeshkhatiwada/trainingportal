-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2021 at 03:31 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_laravel_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `rank`, `created_at`, `updated_at`) VALUES
(9, 'politics', 'politics', 33, '2020-12-03 09:29:52', '2020-12-04 09:30:35'),
(10, 'education', 'edu\'', 17, '2020-12-03 09:31:23', '2020-12-03 09:31:23'),
(11, 'Sports', 'sport', 13, '2020-12-04 08:54:11', '2020-12-04 08:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Maite Alexander', 'qovinok@mailinator.com', 'Aut quas ut dolore f', 'Eos est velit conseq', 1, '2020-12-30 14:52:24', '2020-12-30 09:07:24'),
(2, 'Kay Hayden', 'muwum@mailinator.com', 'Ut duis voluptatem e', 'Sunt et est ipsum ea', 1, '2020-12-30 14:55:48', '2020-12-30 09:10:48'),
(3, 'Tate Head', 'degakyjeco@mailinator.com', 'Excepturi nulla eius', 'Dolor nihil reprehen', 0, '2020-12-29 09:16:25', '2020-12-29 09:16:25'),
(4, 'Quamar Gomez', 'nyvybyj@mailinator.com', 'Enim ratione molliti', 'Commodi saepe corpor', 0, '2021-01-25 08:58:36', '2021-01-25 08:58:36'),
(5, 'Quamar Gomez', 'nyvybyj@mailinator.com', 'Enim ratione molliti', 'Commodi saepe corpor', 0, '2021-01-25 08:58:36', '2021-01-25 08:58:36'),
(6, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 08:58:56', '2021-01-25 08:58:56'),
(7, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 08:58:56', '2021-01-25 08:58:56'),
(8, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:00:22', '2021-01-25 09:00:22'),
(9, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:00:22', '2021-01-25 09:00:22'),
(10, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:01:35', '2021-01-25 09:01:35'),
(11, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:01:35', '2021-01-25 09:01:35'),
(12, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:02:14', '2021-01-25 09:02:14'),
(13, 'Penelope Ford', 'gifovy@mailinator.com', 'Sit ut exercitation', 'Ex dolore rerum dolo', 0, '2021-01-25 09:02:38', '2021-01-25 09:02:38');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_11_24_150952_create_posts_table', 1),
(6, '2020_11_24_151838_create_sessions_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(8, '2020_12_02_144346_create_categories_table', 3),
(13, '2020_12_05_143700_create_subcategories_table', 4),
(14, '2020_12_05_144655_add_description_to_subcategories_table', 5),
(18, '2020_12_06_144724_add_image_to_subcategories_table', 6),
(19, '2020_12_14_124259_add_attr_to_posts_table', 7),
(20, '2020_12_16_125320_create_tags_table', 8),
(22, '2020_12_16_143253_create_post_tag_table', 9),
(23, '2021_01_18_142507_create_settings_table', 10),
(24, '2021_01_23_103619_add_api_token_to_users_table', 11),
(25, '2021_01_23_110642_create_permission_tables', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create Category', 'create_category', NULL, NULL),
(2, 'list Category', 'list_category', NULL, NULL),
(3, 'Edit Category', 'edit_category', NULL, NULL),
(4, 'List SubCategory', 'list_subcategory', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permisson_role`
--

CREATE TABLE `permisson_role` (
  `id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permisson_role`
--

INSERT INTO `permisson_role` (`id`, `permission_id`, `role_id`) VALUES
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_news` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `rank`, `description`, `created_at`, `updated_at`, `category_id`, `subcategory_id`, `image`, `view`, `status`, `tags`, `main_news`) VALUES
(2, 'Perferendis iusto to', 'perferendis-iusto-to', 76, '<p>३ पुस, काठमाडौं । वैदेशिक मामिलामा चिनियाँ नीति &lsquo;क्वाइट डिप्लोमेसी&rsquo; (शान्त कूटनीति)का रुपमा परिचित छ । तथापि सत्तारुढ नेपाल कम्युनिस्ट पार्टी (नेकपा) विभाजनपछि आइतबार काठमाडौं आइपुगेको चिनियाँ कम्युनिस्ट पार्टी टोलीले नेकपाको मामिलामा गहिरो चासो देखाएको छ ।</p>\r\n\r\n<p>नेकपाका नेतालाई चिनियाँहरुको प्रश्न छ&ndash; अब एकता गर्ने ठाउँ छ कि सकियो ?</p>\r\n\r\n<p><a href=\"http://www.kediaorganisation.com/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/11/2_11.gif\" /></a></p>\r\n\r\n<p><a href=\"https://bit.ly/33Rhgzb\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/250X250-min.gif\" /></a></p>\r\n\r\n<p>चिनियाँ कम्युनिस्ट पार्टीको विदेश विभागका उपमन्त्री गुओ यैचोको टोली नेकपाका नेताहरुलाई भेट्न आइतबार काठमाडौं आएको हो । यो टोलीले आइतबार र सोमबार विभिन्न शीर्षनेताहरुसँग भेटवार्ता गरेको छ ।</p>\r\n\r\n<p>आइतबार काठमाडौं आइपुगेका चिनियाँ कम्युनिस्ट पार्टीका नेता यैचोले सुरुमै शीतलनिवास पुगेर विद्या भण्डारीसँग कुराकानी गरेका थिए । त्यसपछि उनले आइतबार राति नै प्रधानमन्त्री केपी शर्मा ओलीसँग छलफल गरे ।</p>\r\n\r\n<p>सोमबार बिहान चिनियाँ टोलीले पूर्वप्रधानमन्त्री प्रचण्डसँग करिब डेढ घण्टा छलफल गर्&zwj;यो । सोमबारै अर्का पूर्वप्रधानमन्त्री माधवकुमार नेपाल र झलनाथ खनालसँग पनि चिनियाँ टोलीले कुराकानी गर्&zwj;यो ।</p>\r\n\r\n<p>आइतबार अपराह्न राष्ट्रपतिलाई भेटेको येचौ नेतृत्वको टोली साँझ बालुवाटार पुगेको थियो । सोमबार बिहान प्रचण्ड निवास पुगेको यो टोलीले माधवकुमार नेपाललाई भने नयाँ बानेश्वरस्थित एभरेष्ट होटलमा भेटवार्ता गरेको थियो । यस्तै डल्लु पुगेर वरिष्ठ नेता झलनाथ खनालसँग पनि कुराकानी गरेको छ ।</p>\r\n\r\n<p><strong>&lsquo;मिल्ने ठाउँ छ कि सकियो ?&rsquo;</strong></p>\r\n\r\n<p>चिनियाँ टोलीले नेकपाको विभाजनबारे राष्ट्रपति, प्रधानमन्त्री र अन्य नेताहरुसँग जिज्ञासा राख्दै विभिन्न प्रश्न सोधेका थिए । नेकपाका नेताहरुलाई भेटेर फेरि मिल्ने ठाउँ छ कि छैन भनेर चिनियाँहरुले चासो राखेका छन् ।</p>\r\n\r\n<p>&lsquo;चिनियाँ टोलीको चासो के कारणले यस्तो भएको हो ? अब मिल्ने ठाउँ छ कि छैन भन्ने थियो&rsquo; नेकपाका एक नेता भन्छन्, &lsquo;उहाँहरुको कुनै राय सल्लाह थिएन ।&rsquo;</p>\r\n\r\n<p>स्रोतका अनुसार प्रचण्ड र नेपालले आफूहरुले अन्तिमसम्म एकताको पहल गरेको तर, प्रधानमन्त्री ओलीले संविधानमाथि नै प्रहार गर्दा यो अवस्था आएको बताएका छन् ।</p>\r\n\r\n<p>अब मिल्ने ठाउँ छ कि छैन भन्ने चिनियाँहरुको प्रश्नमा प्रचण्ड, माधव र झलनाथ सबै नेताहरुले अब केपी ओलीले गल्ती सच्याएर आत्मालोचना गर्ने र संसद पुनस्थापना गर्ने हो भने मात्रै त्यसबारे सोच्न सकिने जवाफ दिएको स्रोतले अनलाइनखबरलाई बतायो ।</p>\r\n\r\n<p>&lsquo;संसद पुनर्स्थापना गरेर संविधानलाई ट्रयाकमा ल्याउनु पूर्वसर्त जस्तै बनेको छ&rsquo; एक नेता भन्छन्, &lsquo;यही कुरा अध्यक्षद्वयले भन्नुभएको छ ।&rsquo;</p>\r\n\r\n<p><strong>कम बोल्ने, धेरै बोल्न लगाउने !</strong></p>\r\n\r\n<p>केपी ओली र प्रचण्ड&ndash;माधव दुवै समूहसँगको भेटमा चिनियाँ नेताहरुले सकेसम्म &lsquo;रिजर्भ&rsquo;मा रहने प्रयत्न गरे । &lsquo;चिनियाँहरु धेरै बोलेनन्, हामीलाई मात्रै बोल्न लगाए&rsquo; सोमबार यैचोको टोलीसँग भेट गरेका नेकपाका एक नेताले अनलाइनखबरसँग भने, &lsquo;उनीहरुले हाम्रा कुरा बढी सुने, हामीलाई आफ्ना कुरा सुनाउँदैमा भेटघाटको समय सकियो ।&rsquo;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/JN-khanal.jpg\" style=\"height:550px; width:900px\" /></p>\r\n\r\n<p>नेकपामा विभाजन आएपछि यसको कारण र असरबारे बुझ्न चिनियाँ कम्युनिस्ट पार्टीका प्रतिनिधि यैचो काठमाडौं आएका हुन् । कुराकानीका क्रममा चिनियाँहरु धेरै नखुलेको र नेपाली नेताहरुको कुरामात्रै बढी सुनेको नेताहरुले बताएका छन् ।</p>\r\n\r\n<p>उनीहरुले नेकपालाई मिल्नोस् भनेर खासै दबाव नदिएको भेटमा सहभागी एक नेताले बताए । उनले भने, &lsquo;चिनियाँहरुले तपाईंहरु मिल्नोस् आदि&ndash;इत्यादि केही पनि भनेनन्, हामी नेपालको आन्तरिक मामिलामा हस्तक्षेप गर्दैनौं, पार्टीभित्र के भएको हो, त्यो बुझ्न मात्रै आएका हौं मात्रै भने ।&rsquo;</p>\r\n\r\n<p>नेताहरुका अनुसार चिनियाँ टोली कुनै सल्लाह दिनुभन्दा पनि के भएको हो भन्ने बुझ्न आएको देखिन्थ्यो । उनीहरुले घटनाक्रमबारे चासो राख्दै नेताहरुलाई सुन्ने प्रयास गरेका थिए । चिनियाँहरुले नेपालको आन्तरिक मामिलामा हस्तक्षेप नगर्ने बताएका थिए । साथै नफुटेको एकीकृत कम्युनिस्ट पार्टी हेर्न चाहेको समेत बताएको भेटमा सहभागी नेताहरुले जानकारी दिएका छन् ।</p>\r\n\r\n<p>प्रधानमन्त्रीका परराष्ट्र सल्लाहकार राजन भट्टराईका अनुसार आइतबार साँझ बालुवाटारमा भएको भेटका क्रममा चिनियाँ उपमन्त्रीको टोलीले प्रधानमन्त्री केपी शर्मा ओलीलाई चिनियाँ राष्ट्रपतिको तर्फबाट नयाँ वर्ष सन् २०२१ को शुभकामना सन्देश सुनाएका थिए । साथै नेपाल-चीन तथा नेकपा-चिनियाँ कम्युनिष्ट पार्टीको सम्बन्धबारे आफ्नो धारणा राखेका थिए ।</p>\r\n\r\n<p>प्रधानमन्त्री ओलीले पनि लामो समयदेखि चीनसँग नेपालको सुदृढ द्विपक्षीय सम्बन्ध रहेको र पछिल्ला केही वर्षमा सम्बन्धमा थप सुधार आएको बताएका थिए । ओलीले एक चीन नीतिमा नेपाल प्रतिबद्ध रहेको र नेपाली भूमि चीनविरोधी गतिविधिका लागि प्रयोग हुन नदिने बताएका थिए । चिनियाँ पक्षले पनि एक चीन नीतिको सहयोग गरेकोमा धन्यवाद दिएको थियो ।</p>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Gou-Yechou.jpg\" />यो पनि पढ्नुहोस<a href=\"https://www.onlinekhabar.com/2020/12/919245\">नेकपा जोगाउने चीनको अन्तिम कसरत !</a><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Chinease-3.jpg\" />यो पनि पढ्नुहोस<a href=\"https://www.onlinekhabar.com/2020/12/919282\">बानेश्वरमा माधव नेपाल र चिनियाँ टोलीबीच भेटवार्ता</a><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Chinese-Team.jpg\" />यो पनि पढ्नुहोस<a href=\"https://www.onlinekhabar.com/2020/12/919193\">छापामार शैलीमा चिनियाँ नेताको भ्रमण !</a><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/chinese-foreign-ministry-speaker.jpg\" />यो पनि पढ्नुहोस<a href=\"https://www.onlinekhabar.com/2020/12/919410\">उच्चस्तरको नेपाल भ्रमणबारे चीनले भन्यो : आन्तरिक मामिलामा हस्तक्षेप नगर्ने सिद्धान्तमा दृढ छौं</a><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2019/07/China-Flag.jpg\" />यो पनि पढ्नुहोस<a href=\"https://www.onlinekhabar.com/2020/12/918924\">चिनियाँ चासो : नेकपा, सहमति कार्यान्वयन र राजनीतिक अस्थिरता</a></p>\r\n\r\n<p><a href=\"https://www.machbank.com/digital-services/digital-banking-services/mbl-mobile--moneym3\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/10/900x1001.gif\" /></a></p>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/trend/%e0%a4%9a%e0%a4%bf%e0%a4%a8%e0%a4%bf%e0%a4%af%e0%a4%be%e0%a4%81-%e0%a4%aa%e0%a5%8d%e0%a4%b0%e0%a4%a4%e0%a4%bf%e0%a4%a8%e0%a4%bf%e0%a4%a7%e0%a4%bf-%e0%a4%ad%e0%a5%8d%e0%a4%b0%e0%a4%ae%e0%a4%a3\">चिनियाँ प्रतिनिधि भ्रमण</a></p>\r\n\r\n<p>यो खबर पढेर तपाईलाई कस्तो महसुस भयो ?</p>\r\n\r\n<p>83%<img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-happy.png\" /></p>\r\n\r\n<h2>खुसी</h2>\r\n\r\n<p>1%<img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-sad.png\" /></p>\r\n\r\n<h2>दुःखी</h2>\r\n\r\n<p>2%<img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-amused.png\" /></p>\r\n\r\n<h2>अचम्मित</h2>\r\n\r\n<p>0%<img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-excited.png\" /></p>\r\n\r\n<h2>उत्साहित</h2>\r\n\r\n<p>13%<img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-angry.png\" /></p>\r\n\r\n<h2>आक्रोशित</h2>\r\n\r\n<p><a href=\"https://www.ismt.edu.np/enroll/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/07/Online-Khabar-01.gif\" /></a></p>\r\n\r\n<p><a href=\"https://heraldcollege.edu.np/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Onlinekhabar.22.12.20.HCK-900X100V2.gif\" /></a></p>\r\n\r\n<p><a href=\"http://leadsinnovation.com/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/10/900x100.gif\" /></a></p>\r\n\r\n<p><a href=\"https://dishhome.com.np/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/09/Online-Khabar-900x100-1.gif\" /></a></p>\r\n\r\n<h2>प्रतिक्रिया<a href=\"https://www.onlinekhabar.com/2020/12/919433#\">5</a></h2>\r\n\r\n<ul>\r\n	<li><a href=\"https://www.onlinekhabar.com/2020/12/919433#tab-1\">भर्खरै</a></li>\r\n	<li>&nbsp;</li>\r\n	<li><a href=\"https://www.onlinekhabar.com/2020/12/919433#tab-2\">लोकप्रिय</a></li>\r\n	<li>&nbsp;</li>\r\n	<li><a href=\"https://www.onlinekhabar.com/2020/12/919433#tab-3\">प्रतिक्रिया</a></li>\r\n</ul>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png\" /></p>\r\n\r\n<p>Prabhat</p>\r\n\r\n<p>२०७७ पुष १३ गते २०:२८</p>\r\n\r\n<p>Nepal kamjor bhaye afno dakshini bhitta pani kamjor hune china lai thahachha. Tyo anurup aafno niti banauchha. Nepal bideshi haru lai mahatopurna chha. Yemaale rukrinda India bahek aur koipani khusi chaina.</p>\r\n\r\n<p>&nbsp;0&nbsp;<a href=\"javascript:void(0);\">Comments</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a><a href=\"javascript:void(0);\">Likes</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a><a href=\"javascript:void(0);\">Dislikes</a></p>\r\n\r\n<p>&nbsp;<a href=\"javascript:void(0);\">Report</a><a href=\"javascript:void(0);\">जवाफ दिनुहोस्</a></p>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png\" /></p>\r\n\r\n<p>Himal Sharma</p>\r\n\r\n<p>२०७७ पुष १३ गते २०:१६</p>\r\n\r\n<p>These are not communists. These are stigmas in the name of world communism. A true communist will never break up. The so-called communists never unite. If this vicious cycle had taken place in your country, such sinners would have been sentenced to death. That is why China has stunned the world today. But thank you very much for your efforts to unite these sinners.</p>\r\n\r\n<p>&nbsp;0&nbsp;<a href=\"javascript:void(0);\">Comments</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a><a href=\"javascript:void(0);\">Likes</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a><a href=\"javascript:void(0);\">Dislikes</a></p>\r\n\r\n<p>&nbsp;<a href=\"javascript:void(0);\">Report</a><a href=\"javascript:void(0);\">जवाफ दिनुहोस्</a></p>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png\" /></p>\r\n\r\n<p>राम बहादुर लिम्बु धरान</p>\r\n\r\n<p>२०७७ पुष १३ गते १८:०५</p>\r\n\r\n<p>राजा हटाए भनेको काे त राजतन्त्र उखे लेर फालेको डोब मा थपक्क चिनियाँ आएर पो बसेछन् र। हुकुम दिन् थालेछन। अर्को दुष्ट सीमा अतिक्रमण गरी बस्ने दुष्ट दक्षिण तीर को छिमेकी भनाउँ दो कालापानी सुस्ता कञ्चनपुर खाने काले मोदी भुतुक्क भयो होला, अव पठाउँछ है त्यसको छौडा नेपालका प्यादा लाई भेटे र हुकुम प्रमाँगी गर्छ त्यसले नेकपा एमालेका नेकपा माओवादीका नेता कार्यकर्ता कर्मचारी सबै लाई। नेपालि जनता हो के हामी 5000 वर्ष देखि कसिको गुलाम भएनौ र अब आएर भारत र चीन को द्वैध शासन सहने कि पुन राजतन्त्र फिर्ता ल्याउने!! कति हप्का ई खाने चिनियाँ र भारतिय कवाडी रअ को?? कति बोक्ने भारतिय कवाडी रअ को एजेण्डा गणतन्त्र संघीयता!??</p>\r\n\r\n<p>&nbsp;0&nbsp;<a href=\"javascript:void(0);\">Comments</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>13&nbsp;<a href=\"javascript:void(0);\">Likes</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>22&nbsp;<a href=\"javascript:void(0);\">Dislikes</a></p>\r\n\r\n<p>&nbsp;<a href=\"javascript:void(0);\">Report</a><a href=\"javascript:void(0);\">जवाफ दिनुहोस्</a></p>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png\" /></p>\r\n\r\n<p>Mr a</p>\r\n\r\n<p>२०७७ पुष १३ गते १७:५८</p>\r\n\r\n<p>Hernus, milne thau jaile pani hun6. Asti ekata garda pani ekata hun6 jasto lako thiyena, tara gare. Aba aalo Palo vanera oli le 6odi deko vaye yo sab hunthena. Ekthari lai hamile khanai payenau vanne vo, oli lai ma bahek kasailai khana ta k herna pani dinna vanne vo. Tei vayera futeka hun, voli chunab ma sottar vain6 vanne lage pa6i milna pani sak6n, kuro tei ho!</p>\r\n\r\n<p>&nbsp;0&nbsp;<a href=\"javascript:void(0);\">Comments</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>6&nbsp;<a href=\"javascript:void(0);\">Likes</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>1&nbsp;<a href=\"javascript:void(0);\">Dislikes</a></p>\r\n\r\n<p>&nbsp;<a href=\"javascript:void(0);\">Report</a><a href=\"javascript:void(0);\">जवाफ दिनुहोस्</a></p>\r\n\r\n<p><img src=\"https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png\" /></p>\r\n\r\n<p>Ktm</p>\r\n\r\n<p>२०७७ पुष १३ गते १७:३५</p>\r\n\r\n<p>नेपालीको इज्जत जाने खालको काम कुर्सीको खेलमा अनि यो पार्टी communist China ko Cangress India ko thukka तिमीहरू des चलाउन होइन bidesi ko isarama nachne कुकुरहरू नेपाली janata tokna बसेको। I am citizens of Nepal And I love my king Gyanendra democracy people elected pm and vedic Sanatan Hindu Nation Nepal चाहन्छु।</p>\r\n\r\n<p>&nbsp;0&nbsp;<a href=\"javascript:void(0);\">Comments</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>11&nbsp;<a href=\"javascript:void(0);\">Likes</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">&nbsp;</a>20&nbsp;<a href=\"javascript:void(0);\">Dislikes</a></p>\r\n\r\n<p>&nbsp;<a href=\"javascript:void(0);\">Report</a><a href=\"javascript:void(0);\">जवाफ दिनुहोस्</a></p>\r\n\r\n<p><a href=\"javascript:void(0);\">प्रतिकृया थप्नुहोस्</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>ट्रेन्डिङ</h2>\r\n\r\n<p>१</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919193\">छापामार शैलीमा चिनियाँ नेताको भ्रमण !</a></h2>\r\n\r\n<p>२</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919157\">&lsquo;प्रधानमन्त्री स्वयं संसद विघटन गर्न चाहनुहुन्नथ्यो&rsquo;</a></h2>\r\n\r\n<p>३</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919245\">नेकपा जोगाउने चीनको अन्तिम कसरत !</a></h2>\r\n\r\n<p>४</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919256\">राष्ट्रिय सभामा अल्पमतमा पर्&zwj;यो ओली समूह</a></h2>\r\n\r\n<p>५</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919194\">विप्लव समूहले भन्यो &ndash; सुरक्षा निकायप्रति आक्रमणको नीति छैन</a></h2>\r\n\r\n<p>६</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919247\">प्रधानमन्त्रीलाई साक्षी राखेर शंकास्पद संस्थासँग सम्झौता गरेको खुलासा, केयूले पाएन १३ अर्ब</a></h2>\r\n\r\n<p>७</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919197\">प्रदेशको १ को अंकगणित : मुख्यमन्त्रीलाई २४ दिन समय !</a></h2>\r\n\r\n<p>८</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919144\">संखुवासभामा विप्लव समूह र प्रहरीबीच गोली हानाहान</a></h2>\r\n\r\n<p>९</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919039\">निर्वाचन आयोगले यसरी टुङ्ग्याउँदैछ नेकपाको आधिकारिकता विवाद</a></h2>\r\n\r\n<p>१०</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919190\">नयाँ श्रममन्त्री : काम नथाल्दै माफी माग्न तयार !</a></h2>\r\n\r\n<h2>सम्बन्धित खवर</h2>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919438\">कामचलाउ सरकारले मन्त्रिपरिषद् विस्तार गरेको भन्दै सर्वोच्चमा रिट दर्ता</a></h2>\r\n\r\n<p>४० मिनेट</p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919435\">बेलायतबाट आएका ५ जनामा कोरोना संक्रमण पुष्टि</a></h2>\r\n\r\n<p>१ घन्टा</p>\r\n\r\n<p>Advertisment</p>\r\n\r\n<h2>लोकप्रिय<a href=\"javascript:void(0);\">२४ घण्टा</a>&nbsp;<a href=\"javascript:void(0);\">यो साता</a>&nbsp;<a href=\"javascript:void(0);\">यो महिना</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/919193\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Chinese-Team-300x193.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919193\">छापामार शैलीमा चिनियाँ नेताको भ्रमण !</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/918911\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Prachanda-Madhav-Samuha-Gandaki-300x183.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/918911\">अविश्वासको प्रस्ताव नल्याउने, सरकार पनि नछोड्ने !</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/918819\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/08/prachanda-and-bamdev-gautam-300x182.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/918819\">खुमलटारमा वामदेवले भने-संसद विघटनको विपक्षमै छु</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/918866\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/11/Surendra-Pandey-300x169.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/918866\">सुरेन्द्र पाण्डेको प्रश्न : ओलीजीले अदालत पनि विघटन गरेँ भन्नुभयो भने के हुन्छ ?</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/919157\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/Bishnu-prasad-poudel-finance-minister-9-300x184.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/919157\">&lsquo;प्रधानमन्त्री स्वयं संसद विघटन गर्न चाहनुहुन्नथ्यो&rsquo;</a></h2>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/2020/12/918903\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/sherdhan-rai-and-indra-angbo-300x183.jpg\" /></a></p>\r\n\r\n<h2><a href=\"https://www.onlinekhabar.com/2020/12/918903\">&lsquo;मुख्यमन्त्रीले बाटो खोल्नुभयो, अविश्वासको प्रस्ताव गर्छौं&rsquo;</a></h2>\r\n\r\n<p><a href=\"http://jagdambacement.com/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/05/Jagdamba-cement.gif\" /></a></p>\r\n\r\n<p><a href=\"https://www.onlinekhabar.com/https://www.facebook.com/RiddhiSiddhiCements/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/onlinekabar_300x250.gif\" /></a></p>\r\n\r\n<p><a href=\"https://www.sc.com/np/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/MA-Loan-300x180px.gif\" /></a></p>\r\n\r\n<p><a href=\"https://www.connectips.com/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/10/30-Oct-2020-300x125-1.gif\" /></a></p>\r\n\r\n<p><a href=\"https://www.kumaribank.com/\" target=\"_blank\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2020/12/300x150-px.gif\" /></a></p>', '2020-12-30 09:44:42', '2020-12-28 09:18:23', 10, 2, 'images/post/5fd784e6cea69_testi1.png', 0, 1, '[\"1\",\"4\",\"2\"]', 1),
(3, 'Anim reprehenderit m', 'anim-reprehenderit-m', 46, 'Nisi vel voluptate a', '2020-12-14 10:00:38', '2021-01-18 08:58:04', 9, 4, 'images/post/5fd788a2b0d94_aboutimage.png', 11, 1, '', 1),
(4, 'Iure cupiditate quas', 'iure-cupiditate-quas', 63, '<p>this is test</p>', '2020-12-16 07:23:39', '2020-12-16 07:23:39', 11, 3, 'images/post/5fda06d720b08_rd7drw.jpg', 0, 1, '', 1),
(5, 'Minus totam distinct', 'minus-totam-distinct', 90, '<p>krgibdj dfj df b</p>', '2020-12-16 07:25:25', '2020-12-16 07:25:25', 11, 3, 'images/post/5fda0741d3c7e_news-350x223-3.jpg', 0, 1, '', 1),
(6, 'चिनियाँ नेताको प्रश्न–नेकपामा मिल्ने ठाउँ छ कि सकियो ?', 'canaya-nataka-parashana-nakapama-malna-thau-chha-ka-sakaya', 12, '<p>३ पुस, काठमाडौं । वैदेशिक मामिलामा चिनियाँ नीति &lsquo;क्वाइट डिप्लोमेसी&rsquo; (शान्त कूटनीति)का रुपमा परिचित छ । तथापि सत्तारुढ नेपाल कम्युनिस्ट पार्टी (नेकपा) विभाजनपछि आइतबार काठमाडौं आइपुगेको चिनियाँ कम्युनिस्ट पार्टी टोलीले नेकपाको मामिलामा गहिरो चासो देखाएको छ ।</p>\r\n\r\n<p>नेकपाका नेतालाई चिनियाँहरुको प्रश्न छ&ndash; अब एकता गर्ने ठाउँ छ कि सकियो ?</p>\r\n\r\n<p>चिनियाँ कम्युनिस्ट पार्टीको विदेश विभागका उपमन्त्री गुओ यैचोको टोली नेकपाका नेताहरुलाई भेट्न आइतबार काठमाडौं आएको हो । यो टोलीले आइतबार र सोमबार विभिन्न शीर्षनेताहरुसँग भेटवार्ता गरेको छ ।</p>\r\n\r\n<p>&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/D5BBwHYR9hU&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;</p>\r\n\r\n<p>आइतबार काठमाडौं आइपुगेका चिनियाँ कम्युनिस्ट पार्टीका नेता यैचोले सुरुमै शीतलनिवास पुगेर विद्या भण्डारीसँग कुराकानी गरेका थिए । त्यसपछि उनले आइतबार राति नै प्रधानमन्त्री केपी शर्मा ओलीसँग छलफल गरे ।</p>\r\n\r\n<p>सोमबार बिहान चिनियाँ टोलीले पूर्वप्रधानमन्त्री प्रचण्डसँग करिब डेढ घण्टा छलफल गर्&zwj;यो । सोमबारै अर्का पूर्वप्रधानमन्त्री माधवकुमार नेपाल र झलनाथ खनालसँग पनि चिनियाँ टोलीले कुराकानी गर्&zwj;यो ।</p>\r\n\r\n<p>आइतबार अपराह्न राष्ट्रपतिलाई भेटेको येचौ नेतृत्वको टोली साँझ बालुवाटार पुगेको थियो । सोमबार बिहान प्रचण्ड निवास पुगेको यो टोलीले माधवकुमार नेपाललाई भने नयाँ बानेश्वरस्थित एभरेष्ट होटलमा भेटवार्ता गरेको थियो । यस्तै डल्लु पुगेर वरिष्ठ नेता झलनाथ खनालसँग पनि कुराकानी गरेको छ ।</p>\r\n\r\n<p><strong>&lsquo;मिल्ने ठाउँ छ कि सकियो ?&rsquo;</strong></p>\r\n\r\n<p>चिनियाँ टोलीले नेकपाको विभाजनबारे राष्ट्रपति, प्रधानमन्त्री र अन्य नेताहरुसँग जिज्ञासा राख्दै विभिन्न प्रश्न सोधेका थिए । नेकपाका नेताहरुलाई भेटेर फेरि मिल्ने ठाउँ छ कि छैन भनेर चिनियाँहरुले चासो राखेका छन् ।</p>\r\n\r\n<p>&lsquo;चिनियाँ टोलीको चासो के कारणले यस्तो भएको हो ? अब मिल्ने ठाउँ छ कि छैन भन्ने थियो&rsquo; नेकपाका एक नेता भन्छन्, &lsquo;उहाँहरुको कुनै राय सल्लाह थिएन ।&rsquo;</p>\r\n\r\n<p>स्रोतका अनुसार प्रचण्ड र नेपालले आफूहरुले अन्तिमसम्म एकताको पहल गरेको तर, प्रधानमन्त्री ओलीले संविधानमाथि नै प्रहार गर्दा यो अवस्था आएको बताएका छन् ।</p>\r\n\r\n<p>अब मिल्ने ठाउँ छ कि छैन भन्ने चिनियाँहरुको प्रश्नमा प्रचण्ड, माधव र झलनाथ सबै नेताहरुले अब केपी ओलीले गल्ती सच्याएर आत्मालोचना गर्ने र संसद पुनस्थापना गर्ने हो भने मात्रै त्यसबारे सोच्न सकिने जवाफ दिएको स्रोतले अनलाइनखबरलाई बतायो ।</p>\r\n\r\n<p>&lsquo;संसद पुनर्स्थापना गरेर संविधानलाई ट्रयाकमा ल्याउनु पूर्वसर्त जस्तै बनेको छ&rsquo; एक नेता भन्छन्, &lsquo;यही कुरा अध्यक्षद्वयले भन्नुभएको छ ।&rsquo;</p>\r\n\r\n<p><strong>कम बोल्ने, धेरै बोल्न लगाउने !</strong></p>\r\n\r\n<p>केपी ओली र प्रचण्ड&ndash;माधव दुवै समूहसँगको भेटमा चिनियाँ नेताहरुले सकेसम्म &lsquo;रिजर्भ&rsquo;मा रहने प्रयत्न गरे । &lsquo;चिनियाँहरु धेरै बोलेनन्, हामीलाई मात्रै बोल्न लगाए&rsquo; सोमबार यैचोको टोलीसँग भेट गरेका नेकपाका एक नेताले अनलाइनखबरसँग भने, &lsquo;उनीहरुले हाम्रा कुरा बढी सुने, हामीलाई आफ्ना कुरा सुनाउँदैमा भेटघाटको समय सकियो ।&rsquo;</p>', '2020-12-29 08:54:01', '2020-12-30 09:18:44', 10, 1, 'images/post/5fda1c05aec1c_Screenshot from 2020-12-13 18-37-08.png', 9, 1, '', 1),
(7, 'Itaque dolor qui dol', 'itaque-dolor-qui-dol', 12, '<p>dvszvf dfs sfd&nbsp;</p>', '2020-12-16 08:54:31', '2020-12-16 08:54:31', 10, 1, 'images/post/5fda1c2325790_Screenshot from 2020-12-13 18-37-08.png', 0, 0, '', 1),
(8, 'Itaque dolor qui dol', 'itaque-dolor-qui-dol', 12, '<p>dvszvf dfs sfd&nbsp;</p>', '2020-12-16 08:54:48', '2020-12-16 08:54:48', 10, 1, 'images/post/5fda1c349bb01_Screenshot from 2020-12-13 18-37-08.png', 0, 0, '', 1),
(9, 'Itaque dolor qui dol', 'itaque-dolor-qui-6', 12, '<p>dvszvf dfs sfd&nbsp;</p>', '2020-12-16 08:55:18', '2020-12-16 08:55:18', 10, 1, 'images/post/5fda1c52e53b1_Screenshot from 2020-12-13 18-37-08.png', 0, 0, '', 1),
(10, 'Itaque dolor qui dol', 'itaque-dolor-qui-dol', 12, '<p>dvszvf dfs sfd&nbsp;</p>', '2020-12-16 08:55:29', '2020-12-16 08:55:29', 10, 1, 'images/post/5fda1c5d4eea0_Screenshot from 2020-12-13 18-37-08.png', 0, 0, '', 1),
(11, 'Sequi nostrum totam', 'sequi-nostrum-totam', 52, '<p>dfsvd&nbsp; dfrefd fd sv&nbsp;</p>', '2020-12-16 08:56:55', '2020-12-16 08:56:55', 10, 1, 'images/post/5fda1cb3beb09_Screenshot from 2020-12-13 18-36-56.png', 0, 0, '', 1),
(12, 'Consequatur Volupta', 'consequatur-volupta', 4, '<p>knzdvkl dvklsdv klsdvj dv&nbsp;</p>', '2020-12-30 08:45:12', '2020-12-30 08:45:12', 10, NULL, 'images/post/5fec8ef4b27c9_rd7drw.jpg', 0, 1, NULL, 1),
(13, 'Quis corrupti quae', 'quis-corrupti-quae', 51, '<p>knzdvkl dvklsdv klsdvj dv&nbsp;</p>', '2020-12-30 08:45:23', '2020-12-30 08:45:23', 10, NULL, 'images/post/5fec8eff8d6b9_rd7drw.jpg', 0, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 10, 3),
(2, 10, 4),
(3, 10, 2),
(11, 11, 3),
(14, 6, 2),
(15, 11, 1),
(16, 2, 1),
(17, 2, 4),
(18, 2, 2),
(19, 6, 3),
(20, 6, 1),
(21, 12, 1),
(22, 12, 4),
(23, 12, 2),
(24, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Editor', 'editor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `id` bigint(20) NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4n1L4pPpOgds7icn20jsiRCvDqZ2XBP4WFdOifOU', 14, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiRGsxQ0JnV3pHN2UxUEtaQnlpT1dNYjVjZFNPZ1NjNmpQRUVXdlNwZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb2xlL2Fzc2lnbi8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkbTBQVk9maXI2MExObGxyd1pqRGRUdVlQWkNPRUFDSzc1ZkQ2cklEeThYekhwZFF2RFNmYy4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG0wUFZPZmlyNjBMTmxscndaakRkVHVZUFpDT0VBQ0s3NWZENnJJRHk4WHpIcGRRdkRTZmMuIjt9', 1611679652),
('5bUP4N3fsW8bOxFDpF7JHq2OJ9w4Ae9ZRjYGL65N', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHV6ZUFBMDJOMmlxQUtUdHI1N1RQb0Q1a09TVTUyT1JVU0NIYWk2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1611672213);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `image`, `subject`, `message`, `facebook_url`, `created_at`, `updated_at`) VALUES
(2, 'News Portal', NULL, 'images/post/6006f307086a0_logo.png', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu from system', 'https://www.facebook.com/merojob', '2021-01-19 09:06:06', '2021-01-19 09:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `title`, `slug`, `rank`, `status`, `category_id`, `created_at`, `updated_at`, `description`, `image`) VALUES
(1, 'ENg', 'Et doloribus est ver', 2, 1, 10, '2020-12-05 09:23:16', '2020-12-05 09:35:12', 'Architecto qui labor', ''),
(2, 'Health', 'Mollit Nam autem seq', 21, 0, 10, '2020-12-05 09:25:38', '2020-12-05 09:25:38', 'Similique nihil amet', ''),
(3, 'Football', 'Dignissimos tempor v', 11, 0, 11, '2020-12-06 00:47:19', '2020-12-06 00:47:19', 'Similique est dolor', ''),
(4, 'LP ', 'Quos repellendus Es', 52, 1, 9, '2020-12-06 09:20:24', '2020-12-06 09:20:24', 'Id esse culpa tem', 'images/subcategory/5fccf3343b647_rd7drw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'kp oli', 'kp-oli', 1, NULL, NULL),
(2, 'ram sharma', 'ram-sharma', 4, NULL, NULL),
(3, 'Big boss', 'big-boss', 23, NULL, NULL),
(4, 'Netflix', 'netflix', 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `role_id`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(14, 'Joelle Landry', 'admin@gmail.com', NULL, '$2y$10$m0PVOfir60LNllrwZjDdTuYPZCOEACK75fD6rIDy8XzHpdQvDSfc.', 'CleHKEFQOWSGvL975ujadgaf2olDDD', 1, NULL, NULL, 'zslcWOPiEgzqGhwpCOUzK6j2uaLPMpklQ6mlvFib04aTkynNlhDPBQdFm6Os', NULL, NULL, '2020-12-06 00:34:54', '2021-01-23 09:04:16'),
(16, 'Ram', 'ram@gmail.com', NULL, '$2y$10$BVGM01Kn7iUY/3954wZ33OGtvGsO3WHG8sAZ9n97f5jNVTYJKHxDS', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permisson_role`
--
ALTER TABLE `permisson_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_email_unique` (`email`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_title_unique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permisson_role`
--
ALTER TABLE `permisson_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
