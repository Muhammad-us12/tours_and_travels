-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 10:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_and_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_title` varchar(255) NOT NULL,
  `feacture_img` varchar(255) NOT NULL,
  `baaner_img` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `group_size` int(11) NOT NULL,
  `stars_rating` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `activity_duration` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `activity_palce_address` varchar(3000) NOT NULL,
  `facilities` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `included` longtext DEFAULT NULL,
  `excluded` longtext DEFAULT NULL,
  `availibilty_days` varchar(3000) NOT NULL,
  `adult_cost_price` int(11) NOT NULL,
  `adult_sale_price` int(11) NOT NULL,
  `child_cost_price` int(11) NOT NULL,
  `child_sale_price` int(11) NOT NULL,
  `Payment_instructions` varchar(255) DEFAULT NULL,
  `cancelation_policy` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_title`, `feacture_img`, `baaner_img`, `language`, `group_size`, `stars_rating`, `start_date`, `end_date`, `activity_duration`, `country`, `destination`, `activity_palce_address`, `facilities`, `description`, `included`, `excluded`, `availibilty_days`, `adult_cost_price`, `adult_sale_price`, `child_cost_price`, `child_sale_price`, `Payment_instructions`, `cancelation_policy`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Small Class On Islamic Principals', '1770203464432474.jpg', '1770203464433880.jpg', 'Urdu & Arabic', 20, 5, '2023-07-10', '2023-07-25', '2', 162, 2, 'At Badshahi Mosque Lahore Pakistaan', '<ul><li>Facility 1</li><li>Facility 2</li><li>Facility 3</li><li>Facility 4</li></ul>', '<p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-size: 14px;\">The&nbsp;<b>Badshahi Mosque</b>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Urdu\" title=\"Urdu\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Urdu</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Punjabi_language\" title=\"Punjabi language\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Punjabi</a>:&nbsp;<span class=\"Nastaliq\" dir=\"rtl\" title=\"Nastaliq\" style=\"font-family: &quot;Jameel Noori Nastaleeq&quot;, &quot;Urdu Typesetting&quot;, &quot;Noto Nastaliq Urdu&quot;, &quot;Noto Nastaliq Urdu Draft&quot;, &quot;Hussaini Nastaleeq&quot;, &quot;AlQalam Taj Nastaleeq&quot;, IranNastaliq, &quot;Awami Nastaliq&quot;, &quot;Awami Nastaliq Beta3&quot;, &quot;Awami Nastaliq Beta2&quot;, &quot;Awami Nastaliq Beta1&quot;, &quot;Nafees Nastaleeq&quot;, &quot;Nafees Nastaleeq v1.01&quot;, &quot;Pak Nastaleeq&quot;, PDMS_Jauhar, &quot;Alvi Lahori Nastaleeq&quot;; font-size: 15.4px;\">بادشاہی مسجد</span>; literally&nbsp;<i>The Imperial Mosque</i>) is an iconic&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mughal_Empire\" title=\"Mughal Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Mughal-era</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Congregational_mosque\" title=\"Congregational mosque\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">congregational mosque</a>&nbsp;in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore\" title=\"Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore</a>, capital of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pakistan\" title=\"Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Pakistani</a>&nbsp;province of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Punjab,_Pakistan\" title=\"Punjab, Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Punjab</a>.<sup id=\"cite_ref-AHA_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-AHA-1\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><sup id=\"cite_ref-scroll_2-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-scroll-2\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[2]</a></sup>&nbsp;The mosque is located west of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore_Fort\" title=\"Lahore Fort\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore Fort</a>&nbsp;along the outskirts of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Walled_City_of_Lahore\" title=\"Walled City of Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Walled City of Lahore</a>, and is widely considered to be one of Lahore\'s most iconic landmarks.<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-3\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[3]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-size: 14px;\">The Badshahi Mosque was built between 1671 and 1673 and by the Mughal emperor&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aurangzeb\" title=\"Aurangzeb\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Aurangzeb</a>. The mosque is an important example of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mughal_architecture\" title=\"Mughal architecture\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Mughal architecture</a>, with an exterior that is decorated with carved red sandstone with marble inlay. It remains the largest mosque of the Mughal-era, and is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_mosques_in_Pakistan\" title=\"List of mosques in Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">third-largest mosque in Pakistan</a>.<sup id=\"cite_ref-Routledge_4-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-Routledge-4\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[4]</a></sup>&nbsp;In 1799, during the rule of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ranjit_Singh\" title=\"Ranjit Singh\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Ranjit Singh</a>&nbsp;of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sikh_Empire\" title=\"Sikh Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Sikh Empire</a>, the mosque\'s courtyard was used as a stable and its hujras (cells) as soldiers quarters. When the&nbsp;<a href=\"https://en.wikipedia.org/wiki/British_Empire\" title=\"British Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">British Empire</a>&nbsp;took control of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore\" title=\"Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore</a>&nbsp;in 1846 it was used as a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Garrison\" title=\"Garrison\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">garrison</a>&nbsp;until 1852. Subsequently the Badshahi Mosque Authority was established to oversee its restoration as a place of worship. It is now one of Pakistan\'s most iconic sights</p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;</span><br></p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;</span><br></p>', '[\"Monday\",\"Wednesday\",\"Thursday\",\"Friday\"]', 20, 25, 10, 15, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 1, '2023-07-01 02:46:18', '2023-07-01 02:46:18'),
(2, 'Small Class On Islamic Principals', '1770203697000629.jpg', '1770203697002241.jpg', 'Urdu & Arabic', 20, 5, '2023-07-01', '2023-07-31', '2', 162, 2, 'At Badshahi Mosque Lahore Pakistaan', '<ul><li>Facility 1</li><li>Facility 2</li><li>Facility 3</li><li>Facility 4</li></ul>', '<p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-size: 14px;\">The&nbsp;<b>Badshahi Mosque</b>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Urdu\" title=\"Urdu\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Urdu</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Punjabi_language\" title=\"Punjabi language\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Punjabi</a>:&nbsp;<span class=\"Nastaliq\" dir=\"rtl\" title=\"Nastaliq\" style=\"font-family: &quot;Jameel Noori Nastaleeq&quot;, &quot;Urdu Typesetting&quot;, &quot;Noto Nastaliq Urdu&quot;, &quot;Noto Nastaliq Urdu Draft&quot;, &quot;Hussaini Nastaleeq&quot;, &quot;AlQalam Taj Nastaleeq&quot;, IranNastaliq, &quot;Awami Nastaliq&quot;, &quot;Awami Nastaliq Beta3&quot;, &quot;Awami Nastaliq Beta2&quot;, &quot;Awami Nastaliq Beta1&quot;, &quot;Nafees Nastaleeq&quot;, &quot;Nafees Nastaleeq v1.01&quot;, &quot;Pak Nastaleeq&quot;, PDMS_Jauhar, &quot;Alvi Lahori Nastaleeq&quot;; font-size: 15.4px;\">بادشاہی مسجد</span>; literally&nbsp;<i>The Imperial Mosque</i>) is an iconic&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mughal_Empire\" title=\"Mughal Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Mughal-era</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Congregational_mosque\" title=\"Congregational mosque\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">congregational mosque</a>&nbsp;in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore\" title=\"Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore</a>, capital of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pakistan\" title=\"Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Pakistani</a>&nbsp;province of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Punjab,_Pakistan\" title=\"Punjab, Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Punjab</a>.<sup id=\"cite_ref-AHA_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-AHA-1\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[1]</a></sup><sup id=\"cite_ref-scroll_2-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-scroll-2\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[2]</a></sup>&nbsp;The mosque is located west of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore_Fort\" title=\"Lahore Fort\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore Fort</a>&nbsp;along the outskirts of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Walled_City_of_Lahore\" title=\"Walled City of Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Walled City of Lahore</a>, and is widely considered to be one of Lahore\'s most iconic landmarks.<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-3\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[3]</a></sup></p><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-size: 14px;\">The Badshahi Mosque was built between 1671 and 1673 and by the Mughal emperor&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aurangzeb\" title=\"Aurangzeb\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Aurangzeb</a>. The mosque is an important example of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Mughal_architecture\" title=\"Mughal architecture\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Mughal architecture</a>, with an exterior that is decorated with carved red sandstone with marble inlay. It remains the largest mosque of the Mughal-era, and is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_mosques_in_Pakistan\" title=\"List of mosques in Pakistan\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">third-largest mosque in Pakistan</a>.<sup id=\"cite_ref-Routledge_4-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Badshahi_Mosque#cite_note-Routledge-4\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">[4]</a></sup>&nbsp;In 1799, during the rule of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ranjit_Singh\" title=\"Ranjit Singh\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Ranjit Singh</a>&nbsp;of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sikh_Empire\" title=\"Sikh Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Sikh Empire</a>, the mosque\'s courtyard was used as a stable and its hujras (cells) as soldiers quarters. When the&nbsp;<a href=\"https://en.wikipedia.org/wiki/British_Empire\" title=\"British Empire\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">British Empire</a>&nbsp;took control of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lahore\" title=\"Lahore\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">Lahore</a>&nbsp;in 1846 it was used as a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Garrison\" title=\"Garrison\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word;\">garrison</a>&nbsp;until 1852. Subsequently the Badshahi Mosque Authority was established to oversee its restoration as a place of worship. It is now one of Pakistan\'s most iconic sights</p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;</span><br></p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;</span><br></p>', '[\"Monday\",\"Wednesday\",\"Thursday\",\"Friday\"]', 20, 25, 10, 15, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 1, '2023-07-01 02:50:00', '2023-07-01 02:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text NOT NULL,
  `blog_category` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `picture`, `status`, `description`, `short_description`, `blog_category`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'First Blogs update', '1768106109957219.jpg', 'publish', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: var(--ct-card-bg); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: var(--ct-card-bg); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">&nbsp;</span><br></p>', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 1, 1, '2023-06-07 23:09:45', '2023-06-07 23:10:24'),
(2, 'Booking travel during Corona: good advice in an uncertain time', '1770213004442067.png', 'publish', '<h3 class=\"text-20 fw-500\" style=\"margin-top: 0px; margin-bottom: 0px; font-weight: 500; line-height: 1.45; color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-20) !important;\">What makes a good brand book?</h3><div class=\"text-15 mt-20\" style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-15) !important; margin-top: 20px !important;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor. A erat nam at lectus urna duis convallis convallis tellus. Sit amet mauris commodo quis imperdiet massa. Vitae congue eu consequat ac felis.</div><ul class=\"list-disc text-15 mt-30\" style=\"padding: 0px; margin-bottom: 0px; list-style: none; margin-right: 0px; margin-left: 0px; color: rgb(5, 16, 54); font-family: Jost, sans-serif; margin-top: 30px !important; font-size: var(--text-15) !important;\"><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida.</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">At urna condimentum mattis pellentesque id nibh. Laoreet non curabitur</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Magna etiam tempor orci eu lobortis elementum.</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Bibendum est ultricies integer quis. Semper eget duis at tellus.</li></ul><div class=\"quote mt-30 mb-30\" style=\"position: relative; padding: 20px 0px 20px 75px; width: 740px; max-width: 100%; color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: 16px; margin-top: 30px !important; margin-bottom: 30px !important;\"><div class=\"quote__line bg-blue-1\" style=\"width: 5px; height: 141.25px; position: absolute; left: 0px; top: 0px; background-color: var(--color-blue-1) !important;\"></div><div class=\"quote__icon\" style=\"position: absolute; top: 12px; left: 22px; z-index: -1;\"><img src=\"https://creativelayers.net/themes/gotrip-html/img/misc/quote-light.svg\" alt=\"icon\" style=\"max-width: 100%; height: auto;\"></div><div class=\"text-18 fw-500\" style=\"font-size: var(--text-18) !important;\">“Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris.“</div></div><div class=\"text-15 mt-20\" style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-15) !important; margin-top: 20px !important;\">Donec purus posuere nullam lacus aliquam egestas arcu. A egestas a, tellus massa, ornare vulputate. Erat enim eget laoreet ullamcorper lectus aliquet nullam tempus id. Dignissim convallis quam aliquam rhoncus, lectus nullam viverra. Bibendum dignissim tortor, phasellus pellentesque commodo, turpis vel eu. Donec consectetur ipsum nibh lobortis elementum mus velit tincidunt elementum. Ridiculus eu convallis eu mattis iaculis et, in dolor. Sem libero, tortor suspendisse et, purus euismod posuere sit. Risus dui ut viverra venenatis ipsum tincidunt non, proin. Euismod pharetra sit ac nisi. Erat lacus, amet quisque urna faucibus. Rhoncus praesent faucibus rhoncus nec adipiscing tristique sed facilisis velit.<br><br>Neque nulla porta ut urna rutrum. Aliquam cursus arcu tincidunt mus dictum sit euismod cum id. Dictum integer ultricies arcu fermentum fermentum sem consectetur. Consectetur eleifend aenean eu neque euismod amet parturient turpis vitae. Faucibus ipsum felis et duis fames.</div>', 'Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo.', 1, 1, '2023-07-01 05:17:56', '2023-07-01 05:25:32'),
(3, 'The best times & places to see the Northern Lights in Iceland', '1770213098113975.png', 'publish', '<h3 class=\"text-20 fw-500\" style=\"margin-top: 0px; margin-bottom: 0px; font-weight: 500; line-height: 1.45; color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-20) !important;\">What makes a good brand book?</h3><div class=\"text-15 mt-20\" style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-15) !important; margin-top: 20px !important;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor. A erat nam at lectus urna duis convallis convallis tellus. Sit amet mauris commodo quis imperdiet massa. Vitae congue eu consequat ac felis.</div><ul class=\"list-disc text-15 mt-30\" style=\"padding: 0px; margin-bottom: 0px; list-style: none; margin-right: 0px; margin-left: 0px; color: rgb(5, 16, 54); font-family: Jost, sans-serif; margin-top: 30px !important; font-size: var(--text-15) !important;\"><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida.</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">At urna condimentum mattis pellentesque id nibh. Laoreet non curabitur</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Magna etiam tempor orci eu lobortis elementum.</li><li style=\"list-style: inside disc; margin: 0px; padding: 0px;\">Bibendum est ultricies integer quis. Semper eget duis at tellus.</li></ul><div class=\"quote mt-30 mb-30\" style=\"position: relative; padding: 20px 0px 20px 75px; width: 740px; max-width: 100%; color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: 16px; margin-top: 30px !important; margin-bottom: 30px !important;\"><div class=\"quote__line bg-blue-1\" style=\"width: 5px; height: 141.25px; position: absolute; left: 0px; top: 0px; background-color: var(--color-blue-1) !important;\"></div><div class=\"quote__icon\" style=\"position: absolute; top: 12px; left: 22px; z-index: -1;\"><img src=\"https://creativelayers.net/themes/gotrip-html/img/misc/quote-light.svg\" alt=\"icon\" style=\"max-width: 100%; height: auto;\"></div><div class=\"text-18 fw-500\" style=\"font-size: var(--text-18) !important;\">“Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris.“</div></div><div class=\"text-15 mt-20\" style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: var(--text-15) !important; margin-top: 20px !important;\">Donec purus posuere nullam lacus aliquam egestas arcu. A egestas a, tellus massa, ornare vulputate. Erat enim eget laoreet ullamcorper lectus aliquet nullam tempus id. Dignissim convallis quam aliquam rhoncus, lectus nullam viverra. Bibendum dignissim tortor, phasellus pellentesque commodo, turpis vel eu. Donec consectetur ipsum nibh lobortis elementum mus velit tincidunt elementum. Ridiculus eu convallis eu mattis iaculis et, in dolor. Sem libero, tortor suspendisse et, purus euismod posuere sit. Risus dui ut viverra venenatis ipsum tincidunt non, proin. Euismod pharetra sit ac nisi. Erat lacus, amet quisque urna faucibus. Rhoncus praesent faucibus rhoncus nec adipiscing tristique sed facilisis velit.</div>', 'Donec purus posuere nullam lacus aliquam egestas arcu. A egestas a, tellus massa, ornare vulputate. Erat enim eget laoreet ullamcorper lectus aliquet nullam tempus id. Dignissim convallis quam aliquam rhoncus, lectus nullam viverra. Bibendum dignissim tortor, phasellus pellentesque commodo, turpis vel eu.', 1, 1, '2023-07-01 05:19:26', '2023-07-01 05:25:39'),
(4, 'What makes a good brand book?', '1770213164495441.png', 'publish', '<p><span style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: 15px;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor.&nbsp;</span></p><p><span style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: 15px;\">Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor.&nbsp;</span><span style=\"color: rgb(5, 16, 54); font-family: Jost, sans-serif; font-size: 15px;\"><br></span><br></p>', 'Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum lorem sed risus ultricies. Magna sit amet purus gravida quis blandit. Arcu cursus vitae congue mauris. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Semper risus in hendrerit gravida rutrum quisque non. At urna condimentum mattis pellentesque id nibh tortor.', 1, 1, '2023-07-01 05:20:29', '2023-07-01 05:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Tour Category', '2023-06-07 23:07:48', '2023-06-07 23:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `booking_customers`
--

CREATE TABLE `booking_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `balance` double(8,2) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(3000) NOT NULL,
  `country` varchar(300) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_customers`
--

INSERT INTO `booking_customers` (`id`, `customer_name`, `balance`, `email`, `password`, `phone`, `address`, `country`, `zip`, `gender`, `created_at`, `updated_at`) VALUES
(4, 'Muhammad Usama', 6210.00, 'usama.asghar7868@gmail.com', '$2y$10$5WPHvCvmbNlLkv5WZUCMeunGN0vTzT3nvqp4uydJdGq0Pq61M6y1i', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', '2023-07-02 23:46:28', '2023-07-13 03:01:31'),
(5, 'Muhammad Usama', 105.00, 'uasghar992@gmail.com', '', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', 'Muhammad Usama', '2023-07-12 17:46:04', '2023-07-12 17:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `customer_ledgers`
--

CREATE TABLE `customer_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment` double(8,2) DEFAULT NULL,
  `recevied` double(8,2) DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `recevied_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_ledgers`
--

INSERT INTO `customer_ledgers` (`id`, `customer_id`, `payment`, `recevied`, `balance`, `invoice_id`, `payment_id`, `recevied_id`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 1200.00, 1200, 'G8CdtM', NULL, NULL, NULL, NULL),
(2, 4, NULL, 1200.00, 2400, '798543', NULL, NULL, NULL, NULL),
(3, 4, NULL, 1200.00, 3600, '720290', NULL, NULL, NULL, NULL),
(4, 4, NULL, 1200.00, 4800, '836961', NULL, NULL, NULL, NULL),
(5, 4, NULL, 1200.00, 6000, '210763', NULL, NULL, NULL, NULL),
(6, 4, NULL, 105.00, 6105, '982522', NULL, NULL, NULL, NULL),
(7, 4, NULL, 105.00, 6210, '792192', NULL, NULL, NULL, NULL),
(8, 5, NULL, 105.00, 105, '607071', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinationstios`
--

CREATE TABLE `destinationstios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dest_name` varchar(255) NOT NULL,
  `dest_img` varchar(255) NOT NULL,
  `dest_order` int(11) NOT NULL,
  `display_on_web` tinyint(1) NOT NULL DEFAULT 1,
  `country` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinationstios`
--

INSERT INTO `destinationstios` (`id`, `dest_name`, `dest_img`, `dest_order`, `display_on_web`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Islamabad', '1767673910368184.jpg', 3, 1, '162', '2023-06-03 04:40:08', '2023-06-03 04:40:08'),
(2, 'Lahore', '1767674430150734.jpg', 1, 1, '162', '2023-06-03 04:48:23', '2023-06-03 04:48:23'),
(5, 'Naran', '1767676413353913.jpg', 5, 1, '162', '2023-06-03 05:19:55', '2023-06-03 05:19:55'),
(6, 'Karachi', '1767708860739330.jpg', 4, 1, '162', '2023-06-03 13:55:39', '2023-06-03 13:55:39'),
(7, 'Madinah Munawara', '1768535491505291.jpg', 2, 1, '187', '2023-06-12 16:54:35', '2023-06-12 16:54:35'),
(8, 'Makkah Mukarma', '1768535587914750.jpg', 3, 1, '187', '2023-06-12 16:56:07', '2023-06-12 16:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_06_02_063341_create_destinationstios_table', 2),
(10, '2023_06_03_200848_create_packages_table', 3),
(11, '2023_06_04_104841_create_reviews_table', 4),
(12, '2022_10_11_053613_create_blog_categories_table', 5),
(13, '2022_10_15_193746_create_blogs_table', 5),
(15, '2023_06_30_104250_create_activities_table', 6),
(16, '2023_07_02_115334_create_booking_customers_table', 7),
(17, '2023_07_02_150417_create_customer_ledgers_table', 7),
(19, '2023_07_02_150900_create_packages_bookings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_title` varchar(255) NOT NULL,
  `feacture_img` varchar(255) NOT NULL,
  `baaner_img` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `group_size` int(11) NOT NULL,
  `stars_rating` float NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `facilities` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `included` longtext DEFAULT NULL,
  `excluded` longtext DEFAULT NULL,
  `itinerary_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`itinerary_data`)),
  `adult_cost_price` int(11) NOT NULL,
  `adult_sale_price` int(11) NOT NULL,
  `child_cost_price` int(11) NOT NULL,
  `child_sale_price` int(11) NOT NULL,
  `Payment_instructions` varchar(255) DEFAULT NULL,
  `cancelation_policy` varchar(255) DEFAULT NULL,
  `map_image` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_title`, `feacture_img`, `baaner_img`, `language`, `group_size`, `stars_rating`, `start_date`, `end_date`, `duration`, `country`, `destination`, `facilities`, `description`, `included`, `excluded`, `itinerary_data`, `adult_cost_price`, `adult_sale_price`, `child_cost_price`, `child_sale_price`, `Payment_instructions`, `cancelation_policy`, `map_image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '8 Days Naran & Khgan Beatutifull Tour', '1767752744735218.jpg', '1767752744751050.jpg', 'English', 20, 5, '2023-06-15', '2023-06-30', '15', 162, 5, '<ul><li>Travel Style</li><li>Physical Rating</li><li>Age Group</li></ul>', '<p><span style=\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px;\">Iran’s dynamic climate lets you have both snow and sand within a day. Shred your heart out at the multi-seasonal, Alp-like Dizin Ski Resort in Tehran. Go off-roading in the dunes of Varzaneh. Explore the ancient attractions of Abyaneh, Isfahan &amp; Kashan.</span><br></p>', '<p><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Visa Authorization Code</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Travel Insurance</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Airport Pick-up, Drop-off</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- All Accommodations</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Private Land Transport</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- English Speaking Guide</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Entrance Fees for Mentioned Monuments</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Cable Car</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Breakfast</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- 24/7 Support</span><br></p>', '<p><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Visa Fee</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- International Flights</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Lunch, Dinner &amp; Snacks</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Guide &amp; Driver Tips</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Additional Expenses (i.e. Laundry)</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Personal Expenses</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Additional Costs Due to Unforeseen Events</span><br></p>', '[{\"title\":\"Tehran\",\"description\":\"<p><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Traditions meet modern life in this metropolis: conservative women wearing full-length chadors commingle with younger women in figure-hugging manteaus. Head off to the World Heritage-listed&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Golestan Palace,&nbsp;<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">in Central Tehran. The 18th c. complex was the main resident of the Qajar Dynasty, a masterpiece of hand-painted tiles, set within a lush garden. After a quick stroll through&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Shahr Park<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, arrive at the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">National Museum of Iran<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, which holds artefacts from ancient antiquities and contemporary Iranian history.<\\/span><br><\\/p>\",\"img\":\"1767752744760470.jpg\"},{\"title\":\"Dizin\",\"description\":\"<p><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Take the morning to drive up to the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Dizin<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Ski Resort<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, the largest and only International Ski Federation-recognized ski and winter sports resort in Iran. The Dizin range is known for being operational in both winter and spring, with excellent snow quality and a great gradient for skiing and snowboarding. Spend the day making friends with local skiers, hanging out on the slopes, and discovering new paths. At night, relax in the comfort of the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Dizin Tourism Hotel<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, eating local stews such as aash &amp; soup-e Jo.<\\/span><br><\\/p>\",\"img\":\"1767752744765211.jpg\"}]', 200, 250, 300, 350, 'To begin the booking process, please complete the online reservation form on this page. You will receive a booking confirmation by email & we will contact you regarding the payment instruction (bank transfer preferred).', 'To begin the booking process, please complete the online reservation form on this page. You will receive a booking confirmation by email & we will contact you regarding the payment instruction (bank transfer preferred).', '1767752744754968.jpg', 1, '2023-06-04 01:33:10', '2023-06-04 01:33:10'),
(2, '8 Days Adventure Tour – Snow, Sun & Sand', '1767766868924366.jpg', '1767766868928426.jpg', 'English', 20, 5, '2023-06-15', '2023-06-30', '15', 162, 5, '<ul><li>Travel Style</li><li>Physical Rating</li><li>Age Group</li></ul>', '<p><span style=\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px;\">Iran’s dynamic climate lets you have both snow and sand within a day. Shred your heart out at the multi-seasonal, Alp-like Dizin Ski Resort in Tehran. Go off-roading in the dunes of Varzaneh. Explore the ancient attractions of Abyaneh, Isfahan &amp; Kashan.</span><br></p>', '<p><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Visa Authorization Code</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Travel Insurance</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Airport Pick-up, Drop-off</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- All Accommodations</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Private Land Transport</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- English Speaking Guide</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Entrance Fees for Mentioned Monuments</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Cable Car</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Breakfast</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- 24/7 Support</span><br></p>', '<p><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Visa Fee</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- International Flights</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Lunch, Dinner &amp; Snacks</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Guide &amp; Driver Tips</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Additional Expenses (i.e. Laundry)</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Personal Expenses</span><br style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\"><span style=\"color: rgb(119, 119, 119); font-family: LatoRegular; font-size: 13px;\">- Additional Costs Due to Unforeseen Events</span><br></p>', '[{\"title\":\"Tehran\",\"description\":\"<p><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Traditions meet modern life in this metropolis: conservative women wearing full-length chadors commingle with younger women in figure-hugging manteaus. Head off to the World Heritage-listed&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Golestan Palace,&nbsp;<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">in Central Tehran. The 18th c. complex was the main resident of the Qajar Dynasty, a masterpiece of hand-painted tiles, set within a lush garden. After a quick stroll through&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Shahr Park<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, arrive at the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">National Museum of Iran<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, which holds artefacts from ancient antiquities and contemporary Iranian history.<\\/span><br><\\/p>\",\"img\":\"1767766868934830.jpg\"},{\"title\":\"Dizin\",\"description\":\"<p><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Take the morning to drive up to the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Dizin<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Ski Resort<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, the largest and only International Ski Federation-recognized ski and winter sports resort in Iran. The Dizin range is known for being operational in both winter and spring, with excellent snow quality and a great gradient for skiing and snowboarding. Spend the day making friends with local skiers, hanging out on the slopes, and discovering new paths. At night, relax in the comfort of the&nbsp;<\\/span><span style=\\\"font-weight: 700; color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">Dizin Tourism Hotel<\\/span><span style=\\\"color: rgb(94, 109, 119); font-family: LatoRegular; font-size: 16px; text-align: justify;\\\">, eating local stews such as aash &amp; soup-e Jo.<\\/span><br><\\/p>\",\"img\":\"1767766868939360.jpg\"}]', 200, 250, 300, 350, 'To begin the booking process, please complete the online reservation form on this page. You will receive a booking confirmation by email & we will contact you regarding the payment instruction (bank transfer preferred).', 'To begin the booking process, please complete the online reservation form on this page. You will receive a booking confirmation by email & we will contact you regarding the payment instruction (bank transfer preferred).', '1767766868931117.jpg', 1, '2023-06-04 05:17:40', '2023-06-04 05:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `packages_bookings`
--

CREATE TABLE `packages_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Tentative',
  `customer_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `lead_passenger_data` text DEFAULT NULL,
  `other_adults_data` text DEFAULT NULL,
  `childs_data` text DEFAULT NULL,
  `childs` int(11) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `cart_data` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages_bookings`
--

INSERT INTO `packages_bookings` (`id`, `customer_name`, `status`, `customer_id`, `package_id`, `invoice_no`, `adults`, `lead_passenger_data`, `other_adults_data`, `childs_data`, `childs`, `total_price`, `cart_data`, `created_at`, `updated_at`) VALUES
(3, 'Muhammad Usama', 'Tentative', 4, 2, 'G8CdtM', 2, NULL, NULL, NULL, 2, 1200.00, '{\"booking_type\":\"Package\",\"package_id\":2,\"package_title\":\"8 Days Adventure Tour \\u2013 Snow, Sun & Sand\",\"adult_cost\":200,\"adult_sale\":250,\"child_cost\":300,\"child_sale\":350,\"start_date\":\"2023-06-15\",\"end_date\":\"2023-06-30\",\"booking_adults\":\"2\",\"booking_childs\":\"2\",\"adults_total_price\":500,\"childs_total_price\":700,\"grand_total\":1200}', NULL, NULL),
(4, 'Muhammad Usama', 'Tentative', 4, 2, '798543', 2, NULL, NULL, NULL, 2, 1200.00, '{\"booking_type\":\"Package\",\"package_id\":2,\"package_title\":\"8 Days Adventure Tour \\u2013 Snow, Sun & Sand\",\"adult_cost\":200,\"adult_sale\":250,\"child_cost\":300,\"child_sale\":350,\"start_date\":\"2023-06-15\",\"end_date\":\"2023-06-30\",\"booking_adults\":\"2\",\"booking_childs\":\"2\",\"adults_total_price\":500,\"childs_total_price\":700,\"grand_total\":1200}', NULL, NULL),
(5, 'Muhammad Usama', 'Tentative', 4, 2, '720290', 2, NULL, NULL, NULL, 2, 1200.00, '{\"booking_type\":\"Package\",\"package_id\":2,\"package_title\":\"8 Days Adventure Tour \\u2013 Snow, Sun & Sand\",\"adult_cost\":200,\"adult_sale\":250,\"child_cost\":300,\"child_sale\":350,\"start_date\":\"2023-06-15\",\"end_date\":\"2023-06-30\",\"booking_adults\":\"2\",\"booking_childs\":\"2\",\"adults_total_price\":500,\"childs_total_price\":700,\"grand_total\":1200}', NULL, NULL),
(6, 'Muhammad Usama', 'Tentative', 4, 2, '836961', 2, NULL, NULL, NULL, 2, 1200.00, '{\"booking_type\":\"Package\",\"package_id\":2,\"package_title\":\"8 Days Adventure Tour \\u2013 Snow, Sun & Sand\",\"adult_cost\":200,\"adult_sale\":250,\"child_cost\":300,\"child_sale\":350,\"start_date\":\"2023-06-15\",\"end_date\":\"2023-06-30\",\"booking_adults\":\"2\",\"booking_childs\":\"2\",\"adults_total_price\":500,\"childs_total_price\":700,\"grand_total\":1200}', NULL, NULL),
(7, 'Muhammad Usama', 'Tentative', 4, 2, '210763', 2, NULL, NULL, NULL, 2, 1200.00, '{\"booking_type\":\"Package\",\"package_id\":2,\"package_title\":\"8 Days Adventure Tour \\u2013 Snow, Sun & Sand\",\"adult_cost\":200,\"adult_sale\":250,\"child_cost\":300,\"child_sale\":350,\"start_date\":\"2023-06-15\",\"end_date\":\"2023-06-30\",\"booking_adults\":\"2\",\"booking_childs\":\"2\",\"adults_total_price\":500,\"childs_total_price\":700,\"grand_total\":1200}', '2023-07-03 05:47:27', NULL),
(8, 'Muhammad Usama', 'Tentative', 4, 2, '982522', 3, NULL, NULL, NULL, 2, 105.00, '{\"booking_type\":\"Activity\",\"package_id\":2,\"package_title\":\"Small Class On Islamic Principals\",\"adult_cost\":20,\"adult_sale\":25,\"child_cost\":10,\"child_sale\":15,\"start_date\":\"2023-07-01\",\"end_date\":\"2023-07-31\",\"customer_select_date\":\"2023-07-10\",\"booking_adults\":\"3\",\"booking_childs\":\"2\",\"adults_total_price\":75,\"childs_total_price\":30,\"grand_total\":105}', '2023-07-12 07:10:37', NULL),
(9, 'Muhammad Usama', 'Tentative', 4, 2, '792192', 3, '{\"passenger_name\":\"Muhammad Usama\",\"lead_email\":\"usama.asghar7868@gmail.com\",\"lead_phone\":\"+92343943493943\",\"lead_address\":\"Chand mary park Road Rassol Nager Sheikhupura\",\"lead_country\":\"PAKISTAN\",\"lead_zip\":\"30232\",\"lead_gender\":\"male\"}', '[{\"name\":\"Adult 1\",\"gender\":\"male\"},{\"name\":\"Adult 2\",\"gender\":\"female\"}]', '[{\"name\":\"Child 1\",\"gender\":\"male\"},{\"name\":\"Child 2\",\"gender\":\"female\"}]', 2, 105.00, '{\"booking_type\":\"Activity\",\"package_id\":2,\"package_title\":\"Small Class On Islamic Principals\",\"adult_cost\":20,\"adult_sale\":25,\"child_cost\":10,\"child_sale\":15,\"start_date\":\"2023-07-01\",\"end_date\":\"2023-07-31\",\"customer_select_date\":\"07\\/28\\/2023\",\"booking_adults\":\"3\",\"booking_childs\":\"2\",\"adults_total_price\":75,\"childs_total_price\":30,\"grand_total\":105}', '2023-07-12 22:45:01', NULL),
(10, 'Muhammad Usama', 'Tentative', 5, 2, '607071', 3, '{\"passenger_name\":\"Muhammad Usama\",\"lead_email\":\"uasghar992@gmail.com\",\"lead_phone\":\"+92343943493943\",\"lead_address\":\"Chand mary park Road Rassol Nager Sheikhupura\",\"lead_country\":\"PAKISTAN\",\"lead_zip\":\"30232\",\"lead_gender\":\"male\"}', '[{\"name\":\"Adult 1\",\"gender\":\"male\"},{\"name\":\"Adult 2\",\"gender\":\"female\"}]', '[{\"name\":\"Child 1\",\"gender\":\"male\"},{\"name\":\"Child 2\",\"gender\":\"female\"}]', 2, 105.00, '{\"booking_type\":\"Activity\",\"package_id\":2,\"package_title\":\"Small Class On Islamic Principals\",\"adult_cost\":20,\"adult_sale\":25,\"child_cost\":10,\"child_sale\":15,\"start_date\":\"2023-07-01\",\"end_date\":\"2023-07-31\",\"customer_select_date\":\"07\\/28\\/2023\",\"booking_adults\":\"3\",\"booking_childs\":\"2\",\"adults_total_price\":75,\"childs_total_price\":30,\"grand_total\":105}', '2023-07-12 22:46:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `review` varchar(3000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `picture`, `ratings`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test Person', '1767934870225387.jpg', '4', 'This is', 1, '2023-06-06 01:47:58', '2023-06-06 01:47:58'),
(2, 'Muhammad Ali', '1770210087772967.jpeg', '4.5', 'Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.', 1, '2023-07-01 04:31:35', '2023-07-01 04:31:35'),
(3, 'Muhammad USama', '1770210186622138.jpeg', '4.9', 'Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.', 1, '2023-07-01 04:33:09', '2023-07-01 04:33:09'),
(4, 'Muhammad Aslam', '1770210341869894.png', '4', 'Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.', 1, '2023-07-01 04:35:37', '2023-07-01 04:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad USama', 'usama.asghar7868@gmail.com', NULL, '$2y$10$JtsQP5E7dcn/VJPJmHF61eylcVYgyt5/SNes1ECfflZtvgQxCvuj6', NULL, '2023-05-28 14:10:22', '2023-05-28 14:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_foreign` (`blog_category`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_customers`
--
ALTER TABLE `booking_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ledgers`
--
ALTER TABLE `customer_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinationstios`
--
ALTER TABLE `destinationstios`
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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_bookings`
--
ALTER TABLE `packages_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_customers`
--
ALTER TABLE `booking_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `customer_ledgers`
--
ALTER TABLE `customer_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destinationstios`
--
ALTER TABLE `destinationstios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages_bookings`
--
ALTER TABLE `packages_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_foreign` FOREIGN KEY (`blog_category`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
