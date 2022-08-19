-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 10:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'lara', 'lara@gmail.com', 'First Message', 'Hello, this is my first message', '2022-07-31 23:24:04', '2022-07-31 23:24:04');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'How can we manage slider', 'use crud operations', '2022-07-29 03:10:03', '2022-07-29 04:23:22'),
(2, 'what is menu management', 'It is used to manage the sidebar list which makes it dynamic', '2022-07-31 22:28:45', '2022-07-31 22:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_menu` tinyint(1) NOT NULL DEFAULT 0,
  `menu_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `p_menu`, `menu_title`, `url`, `icons`, `created_at`, `updated_at`) VALUES
(85, 88, 'Manage child .0', 'faq-list', 'user', '2022-08-03 03:59:28', '2022-08-03 03:59:28'),
(86, 88, 'Manage child.0.1', 'menu-list', 'table', '2022-08-03 05:06:27', '2022-08-03 05:06:27'),
(88, 82, 'Manage child1', 'faq-list', 'page', '2022-08-05 04:10:14', '2022-08-05 04:10:14'),
(89, 86, 'Manage', 'menu-list', 'table', '2022-08-09 05:51:45', '2022-08-09 05:51:45'),
(90, 90, 'sub demo  new', '[\"menu-list\"]', '[\"user\"]', '2022-08-10 00:24:56', '2022-08-13 04:32:32'),
(91, 90, 'sub demo 2.1', 'menu-list', 'plus', '2022-08-10 00:25:19', '2022-08-13 02:55:14'),
(92, 91, 'sub sub demo 1', 'menu-list', 'user', '2022-08-10 00:25:36', '2022-08-10 00:25:36'),
(96, 95, 'sub demo 4.0', NULL, NULL, '2022-08-10 00:51:46', '2022-08-13 06:38:15'),
(99, 91, 'sub demo 2', 'faq-list', 'home', '2022-08-10 04:07:41', '2022-08-10 04:07:41'),
(101, 0, 'Page Management1', 'faq-list', 'user', '2022-08-13 05:15:09', '2022-08-18 03:26:16'),
(102, 101, 'Manage1', 'faq-list', 'user', '2022-08-13 05:15:36', '2022-08-18 03:26:35'),
(103, 102, 'edit1', 'menu-list', 'edit', '2022-08-13 05:15:55', '2022-08-18 03:26:53'),
(107, 102, 'delete', 'menu-list', 'edit', '2022-08-18 03:27:31', '2022-08-18 03:27:31');

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
(5, '2022_07_26_051458_create_menus_table', 1),
(6, '2022_07_29_043936_create_sliders_table', 2),
(7, '2022_07_29_082847_create_faqs_table', 3),
(8, '2022_08_01_043331_create_contacts_table', 4),
(9, '2022_08_02_044738_create_pages_table', 5),
(10, '2022_08_09_063015_create_posts_table', 6),
(11, '2022_08_18_103731_create_permissions_table', 7),
(12, '2022_08_18_103859_create_roles_table', 7),
(13, '2022_08_18_115554_create_permissiontoroles_table', 8),
(14, '2022_08_18_124351_create_permission_to_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_description`, `sub_description`, `image`, `url`, `show`, `created_at`, `updated_at`) VALUES
(1, 'Home', '<p style=\"text-align:justify\"><strong>&nbsp;Something short and leading about the collection below&mdash;its contents, the creator, etc. Make it short and sweet, but not too short so folks don&rsquo;t simply skip over it entirely.</strong></p>', NULL, '1660798120401736.jpg', 'Home', 0, NULL, '2022-08-17 23:18:40'),
(2, 'Contact us', 'Contact us\r\n\r\n123 Testing Ave, Testtown, 9876 NA\r\nPhone: +1 234 56789012', 'Contact us\r\n\r\n123 Testing Ave, Testtown, 9876 NA\r\nPhone: +1 234 56789012', '1659437785964108.jpg', 'Contact-us', 1, NULL, '2022-08-02 05:26:25'),
(4, 'FAQ', '<h5><a href=\"https://stackoverflow.com\"><strong>Contact us</strong></a>, if you found not the right anwser or you have a other question?</h5>', NULL, '1660798203756036.jpg', 'FAQ-page', NULL, NULL, '2022-08-17 23:20:03'),
(9, 'About us1', '<h4><strong>our mission our visions</strong></h4>', NULL, '1659672900831725.jpg', 'table', 0, NULL, '2022-08-04 22:45:00');

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
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaurd_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `gaurd_name`, `created_at`, `updated_at`) VALUES
(1, 'Create', NULL, '2022-08-18 05:42:54', '2022-08-18 05:42:54'),
(2, 'Read', NULL, '2022-08-18 05:56:39', '2022-08-18 05:56:39'),
(3, 'Edit', NULL, '2022-08-18 05:56:49', '2022-08-18 05:56:49'),
(4, 'Delete', NULL, '2022-08-18 05:56:56', '2022-08-18 05:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `permission_to_users`
--

CREATE TABLE `permission_to_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `gaurd_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_to_users`
--

INSERT INTO `permission_to_users` (`id`, `roles_id`, `gaurd_name`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 3, '2022-08-18 07:18:14', '2022-08-18 07:18:14');

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
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post_description`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'StayWell Insights Blog', 'StayWell Insights Blog\r\n\r\nStayWell helps businesses, healthcare providers, and others discover and create health empowerment solutions. Their blog, called StayWell Insights, does this, too — their pieces provide readers with a wide range of information about health habits, insights, studies, and trends. All of their content is supported by scientific studies and news.\r\n\r\nstaywell-blog\r\n\r\nSource\r\n\r\nMain Takeaways:\r\n\r\n    Blogs are written about a variety of topics within healthcare such as information about providers, trends, and industry events so all readers can find what they’re looking for.\r\n    By backing their content with official studies and news, they feel trustworthy to readers — this is important considering they’re writing about healthcare and healthcare providers.\r\n\r\nBlog Post Spotlight: Beating the Heat: An Employer’s Role in Preventing Heat Stress\r\nEcommerce Blogs\r\n\r\nEcommerce blogs help online businesses and retailers of all kinds learn about the best technology, trends, and tools in the industry to help them grow and reach their short and long-term goals. These blogs cover ecommerce marketing and strategy, online shop development, and more.\r\n1. M.M. LaFleur Blog\r\n\r\nM.M. LaFleur is a women’s professional apparel brand designed to bring ease and comfort into the lives of their customers. Their blog, called The — M — Dash, promotes female empowerment.\r\n\r\nWomen who work in virtually any industry can read the blog to feel inspired by other businesswomen as well as learn about different aspects of being a woman in the workplace (gender equality, stereotypes, etc.). Lastly, there are blog posts related to attire including topics about what to wear on your first day, casual Fridays, and to job interviews.', '1660037824719718.jpg', 2, '2022-08-18 08:54:57', NULL),
(2, 'Manufacturing Blogs', '<h3>Manufacturing Blogs</h3><p>Manufacturing blogs are used to inform those in manufacturing and closely-related field (such as supply chain, distribution, and logistics) about best practices, news, and trends in the industry. These blogs keep you up-to-date and well-versed in this ever-changing business sector.</p><h6> Dustless Blasting Blog</h6><p>Dustless Blasting uses their <a href=\"https://www.dustlessblasting.com/blog?hsLang=en\">blog</a> to promote their product, the Dustless Blasting machine. They share real stories and write about common situations in which their target audience may find themselves in need of the product. They create guides and instructional pieces (as well as instructional videos) to teach customers how to use the machine.</p><figure class=\"image image-style-side\"><img src=\"https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=400&amp;name=dustless-blasting-blog.png\" alt=\"dustless-blasting-blog\" srcset=\"https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=450&amp;name=dustless-blasting-blog.png 150w, https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=1500&amp;name=dustless-blasting-blog.png 400w, https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=450&amp;name=dustless-blasting-blog.png 2250w, https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=3000&amp;name=dustless-blasting-blog.png 3000w, https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=3750&amp;name=dustless-blasting-blog.png 340w, https://blog.hubspot.com/hs-fs/hubfs/dustless-blasting-blog.png?width=400&amp;name=dustless-blasting-blog.png 4500w\" sizes=\"400vw\" width=\"400\"></figure><p><a href=\"https://www.dustlessblasting.com/blog?hsLang=en\"><i>Source</i></a></p><p><strong>Main Takeaways:</strong></p><ul><li>By describing real scenarios in which their target audience may find themselves needing the machine, they’re able to determine whether or not the product is right for them.</li><li>The blog includes applicable information about how to use the Dustless Blasting machine so readers can better understand how the product fits their needs (and potentially convert into customers).</li></ul>', '1660038018135452.jpg', 3, '2022-08-19 08:55:07', NULL),
(3, 'G FUEL', '<h4>G FUEL</h4><p><a href=\"https://gfuel.com/\">G FUEL</a> is an energy drink, and the company has a blog they use to promote their product line. The <a href=\"https://blog.gfuel.com\">blog content G FUEL shares</a> includes news about their business as well as their products. Rather than trying to discreetly talk about their drinks, it’s very obvious to readers that G FUEL is trying to provide education around the benefits of their product and what makes them stand out against their competition.</p><figure class=\"image image-style-side\"><img src=\"https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=560&amp;name=GFUEL%20blog%20example.png\" alt=\"GFUEL blog example\" srcset=\"https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=380&amp;name=GFUEL%20blog%20example.png 380w, https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=760&amp;name=GFUEL%20blog%20example.png 760w, https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=414&amp;name=GFUEL%20blog%20example.png 414w, https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=520&amp;name=GFUEL%20blog%20example.png 520w, https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=690&amp;name=GFUEL%20blog%20example.png 690w, https://blog.hubspot.com/hs-fs/hubfs/GFUEL%20blog%20example.png?width=580&amp;name=GFUEL%20blog%20example.png 8280w\" sizes=\"400vw\" width=\"460\"><figcaption>&nbsp;</figcaption></figure><p><a href=\"https://blog.gfuel.com\"><i>Source</i></a></p><p><strong>Main Takeaways:</strong></p><ul><li>The blog teaches readers about the benefits of G FUEL and why it’s a better drink than those of their competitors.</li><li>The blog provides customers and fans with a unique inside look at their business they wouldn’t be able to find anywhere else. This promotes relationship building between customers and the company.</li></ul><p><strong>Blog Post Spotlight: </strong><a href=\"https://blog.gfuel.com/women-of-g-fuel-fooya\"><i>Women Of G FUEL: FooYa</i></a><br>&nbsp;</p><h3>Technology Blogs</h3><p>It’s no secret that the tech world is always evolving. With so many advancements being made every day, it’s critical that businesses do what they can to keep up with the cutting-edge developments that impact their ability to grow and reach their target audience.</p><h4>&nbsp;Dotloop Blog</h4><p><a href=\"https://www.dotloop.com/blog/\">Dotloop</a> is a real estate transaction management solution used by professionals and clients to conduct and close deals. <a href=\"https://www.dotloop.com/blog/\">Dotloop’s blog</a> covers all topics related to real estate automation, what it’s like to work in the field, industry trends, and product offerings. They also write about the ways their product can help simplify all aspects of the real estate process.</p>', '1660045324890091.jpg', 3, '2022-08-16 08:55:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaurd_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `gaurd_name`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, '2022-08-18 06:09:38', '2022-08-18 06:09:38'),
(2, 'user', NULL, 2, '2022-08-18 06:11:39', '2022-08-18 06:11:39'),
(3, 'Staff', NULL, NULL, '2022-08-18 06:21:39', '2022-08-18 06:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(255) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_title`, `image`, `description`, `order`, `created_at`, `updated_at`) VALUES
(2, 'Slider 1', '1659082049719206.jpg', 'Slider', 0, NULL, '2022-07-29 02:37:29'),
(3, 'Slider 2', '1659092727188800.jpg', 'banner info', 0, NULL, '2022-07-29 05:35:27'),
(6, 'Slider 3', '1659432182580574.jpg', 'banner images for slider', 0, NULL, '2022-08-02 03:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `phone_no`, `password`, `user_type`, `email_verified_at`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1660890103711023.png', '9012345678', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 1, NULL, '2022-07-26 11:56:16', '2022-08-19 00:51:44'),
(2, 'Lara', 'lara@gmail.com', '1660890071435709.jpg', '9012345678', '$2y$10$xhxrG1uxSD.Dq2YmQTLZB.2JLkpidImWeW830IZUBGzL4Auq0784O', NULL, NULL, 0, NULL, '2022-07-26 23:43:21', '2022-08-19 00:51:11'),
(3, 'steve', 'steve@gmail.com', '1660890022659756.jpg', '9123456780', '$2y$10$51CsgtmzcvyRedGTXrKFNOntk9qx3Qg7X3X1zLhpCXBWjl6Wi4j3y', NULL, NULL, 0, NULL, '2022-07-27 22:29:56', '2022-08-19 00:50:22');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permission_to_users`
--
ALTER TABLE `permission_to_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_to_users_roles_id_foreign` (`roles_id`),
  ADD KEY `permission_to_users_permission_id_foreign` (`permission_id`);

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
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission_to_users`
--
ALTER TABLE `permission_to_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_to_users`
--
ALTER TABLE `permission_to_users`
  ADD CONSTRAINT `permission_to_users_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_to_users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
