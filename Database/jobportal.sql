-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 05:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicant_id`, `title`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'voluptatibus', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(2, 2, 'quia', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(3, 3, 'optio', 2, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(4, 5, 'totam', 2, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(5, 3, 'quo', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(6, 2, 'asperiores', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(7, 4, 'eos', 2, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(8, 3, 'error', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(9, 5, 'molestias', 1, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(10, 4, 'illo', 2, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(11, 6, 'sit', 2, '2022-06-18 09:18:18', '2022-06-18 09:18:18'),
(12, 7, 'sit', 2, '2022-06-18 09:27:13', '2022-06-18 09:27:13'),
(13, 6, 'Graphic Designer', 7, '2022-06-18 09:44:42', '2022-06-18 09:44:42'),
(14, 6, 'Digital Creator', 7, '2022-06-18 10:11:40', '2022-06-18 10:11:40'),
(15, 6, 'UI / UX Designer', 7, '2022-06-18 10:11:43', '2022-06-18 10:11:43'),
(16, 6, 'UI / UX Designer', 7, '2022-06-18 10:11:43', '2022-06-18 10:11:43'),
(17, 6, 'Graphic Designer', 7, '2022-06-18 10:11:47', '2022-06-18 10:11:47'),
(18, 6, 'Graphic Designer', 7, '2022-06-18 10:11:48', '2022-06-18 10:11:48'),
(19, 6, 'Content Writer', 7, '2022-06-18 10:11:52', '2022-06-18 10:11:52'),
(20, 6, 'Video Production', 7, '2022-06-18 10:11:56', '2022-06-18 10:11:56'),
(21, 6, 'Game Developer', 7, '2022-06-18 10:12:01', '2022-06-18 10:12:01'),
(22, 6, 'Software Engineer', 7, '2022-06-18 10:12:07', '2022-06-18 10:12:07'),
(23, 6, 'SEO Product Manager', 7, '2022-06-18 10:12:13', '2022-06-18 10:12:13'),
(24, 6, 'Senior Product Manager, Work Management', 7, '2022-06-18 10:12:20', '2022-06-18 10:12:20'),
(25, 6, 'Senior Digital Designer', 7, '2022-06-18 10:12:26', '2022-06-18 10:12:26'),
(26, 6, 'UI Designer Figma', 7, '2022-06-18 10:12:31', '2022-06-18 10:12:31'),
(27, 6, 'Community Manager', 7, '2022-06-18 10:12:37', '2022-06-18 10:12:37');

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
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `tags`, `company`, `location`, `website`, `description`, `created_at`, `updated_at`) VALUES
(1, 7, 'Content Writer', 'writer, developer, python', 'Frami LLC', '704 Heidenreich Fork Suite 771\nMosheton, NJ 28745-4823', 'minimsam.eth', 'Et voluptas delectus molestias architecto ab saepe ut qui. Nihil odit porro voluptatum ex. Sit est nostrum sed eius modi quia qui. Dolorem odit aspernatur harum voluptatibus autem. Asperiores repellat perferendis et ut at. Ut nemo et nobis eius. Rerum inventore veritatis tempore dolores. Sint id incidunt fugit quidem nobis. Aut rem voluptatibus voluptas sit qui. Est in necessitatibus voluptates autem autem esse sint. Ipsam iste sequi quos. Ea molestiae nam sapiente sint magnam impedit. Rerum dolorem corporis velit et omnis quod natus. Consequatur et eum ea veniam explicabo reiciendis.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(2, 7, 'Video Production', 'writer, developer, python', 'McClure, Weimann and Bartoletti', '763 Crooks Mill\nDalechester, GA 35002-1268', 'minimsam.eth', 'Exercitationem aliquam voluptatem et est beatae modi soluta. Ab aliquid necessitatibus earum sint nesciunt. Sequi ea nam occaecati recusandae odit sit illum. Rerum aut consequatur et qui sit. Voluptas et illo qui soluta. Facere laudantium et molestias inventore ea iure explicabo. Quam inventore quia nisi quaerat placeat dolorem explicabo. Ad adipisci qui omnis enim. Veritatis at ratione dolorem beatae quae cumque. Est dolorem ea voluptate tempore adipisci eos. Odio qui ut cupiditate exercitationem corrupti explicabo est. Culpa sunt iure expedita sint et dolore omnis. Omnis delectus dolores eum cum ratione expedita. Nostrum blanditiis unde consequatur ut. Nulla quia repudiandae velit incidunt eum officiis ipsam. Tenetur magnam aliquam ut in nemo voluptatem.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(3, 7, 'Game Developer', 'writer, developer, python', 'Grant Inc', '83968 Lesch Trail Apt. 691\nFaustoborough, MN 10957', 'minimsam.eth', 'Vitae consequatur non consequatur cumque fuga autem est provident. Est ea in voluptas eaque qui delectus asperiores. Debitis et delectus odit earum molestiae vitae consequatur ullam. Modi nam eum aliquam tempore dolores soluta nihil. Natus est earum assumenda ipsa et impedit eum. Recusandae reprehenderit est veniam temporibus dicta laudantium magnam. Veritatis et optio sint est non laudantium. Labore aut qui tenetur hic. Quidem eum iure fugiat sunt qui molestias ut. Architecto assumenda aliquam molestiae iusto reprehenderit aut cum. Nemo quas iure quam debitis sed.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(4, 7, 'Software Engineer', 'writer, developer, python', 'Eichmann PLC', '22244 Schmeler Highway Apt. 641\nEast Elijah, CT 75207-4632', 'minimsam.eth', 'Nisi id omnis sequi suscipit consectetur minima pariatur. Animi harum aut qui incidunt veritatis. Quam optio at ut id. Dolore illum rem autem cum. Error est corrupti quos suscipit asperiores ut quod. Cupiditate fugit quasi mollitia dolores nemo. Non ratione id occaecati autem illo. Enim consequatur rem temporibus a. Sit veritatis dolores illum quo magnam. Optio nulla non placeat tempora rerum occaecati. Tenetur quidem commodi iure eveniet pariatur mollitia corrupti commodi. In eveniet non qui pariatur cumque dolor ipsum corrupti.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(5, 7, 'SEO Product Manager', 'writer, developer, python', 'Reynolds Group', '4267 Ofelia Haven\nAliviaberg, OR 05514-1990', 'minimsam.eth', 'Et ab distinctio quis labore. Vero error quo nesciunt magnam. Repellendus aperiam sed voluptas sit aut omnis officia. Et architecto architecto deleniti ut explicabo. Quia enim tempora rem ut tempore nobis veritatis. Quibusdam maiores dolorem nulla aut ab ut vel architecto. Architecto quod qui omnis libero consequatur deserunt libero. Repellendus quos porro et fugiat quos. Ipsam et corporis nihil tempora. Distinctio asperiores consequuntur ipsum ut et itaque at. Tempore quam mollitia cum maxime animi quasi iusto. Laborum maiores qui dolores quasi corrupti fugit iusto. Ut dolorum est consequuntur asperiores incidunt provident. Rerum asperiores rem ullam ex vitae omnis pariatur.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(6, 7, 'Senior Product Manager, Work Management', 'writer, developer, python', 'Rodriguez-Jacobi', '616 Walker Keys Apt. 015\nEast Marcomouth, FL 00506', 'minimsam.eth', 'Aliquid aut ducimus eaque laudantium consequatur. Id velit temporibus rerum enim. Aut placeat autem quia. Sed ab praesentium quia placeat quae nam. Est ut dolorem inventore reprehenderit debitis. Et consequuntur possimus sit nesciunt molestiae laudantium. Odio enim temporibus suscipit facilis et. Eum impedit velit est illo quae laboriosam aut. Eveniet doloremque molestias dicta ea possimus et voluptatibus. Laboriosam excepturi laboriosam autem. Aliquid quae eius officiis dolor.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(7, 7, 'Senior Digital Designer\r\n', 'writer, developer, python', 'Schoen Ltd', '556 Emie Coves\nLake Sylvester, RI 71748', 'minimsam.eth', 'Qui nam numquam repellendus quia non dicta. Qui eligendi occaecati ut iure atque. Et unde dolor quia tenetur. Iure ea impedit aliquam hic explicabo. Quidem nihil corrupti qui ducimus cupiditate maiores reprehenderit. Ad consequatur architecto dolor eum aut voluptatibus repellendus. Nesciunt est labore dolore at deserunt molestias facilis. Itaque aut eum tempora iure aut dolores. Molestiae numquam a fugiat aliquam. Quia non nemo non mollitia quidem dicta ut. Nemo quia rerum ipsa sit. Excepturi repudiandae ut quaerat nam cumque ab. Non eos est ea odio in. Sequi voluptatem sint natus accusantium. Et accusantium ipsa sapiente nostrum sunt rerum. Iure dolorem dolor quia quidem quisquam suscipit praesentium. Nostrum in et officiis in delectus nostrum dolorem sint. Et doloribus dolor ipsum distinctio est quo recusandae. Quia dolor necessitatibus odio voluptas ab. Velit a magnam cum reprehenderit vel vero. Vel rerum voluptatum numquam aut sed omnis. Perspiciatis sed aut sunt.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(8, 7, 'UI Designer Figma', 'writer, developer, python', 'Kling-Leffler', '412 Considine Manors Suite 724\nWest Laurenceshire, TN 85663', 'minimsam.eth', 'Adipisci vel quis nostrum est aut rerum quas aut. Cumque eveniet adipisci omnis facilis. Ipsum aliquid rerum tenetur adipisci quo dolore libero. Unde nam voluptatem earum ea vel fuga. Quae est quasi doloremque officia praesentium incidunt illum id. Consectetur unde consequatur ea. Perferendis quibusdam vel ea. Amet itaque sapiente at eligendi corporis adipisci et. Sed quis praesentium saepe molestiae inventore dicta ipsum. Illum numquam et quaerat tempora iure aliquam possimus sint. Vel et libero tempora sapiente aut dolorem id. Et possimus enim est accusamus aut in aut molestias. Voluptates consectetur aut hic veritatis id ea cupiditate ad. Sapiente distinctio ab accusantium reprehenderit voluptatem nobis. Eligendi officiis nobis fugiat est ut non iusto. Dolor enim vero sed qui.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(9, 7, 'Community Manager', 'writer, developer, python', 'Kutch Group', '7501 Veum Burg Suite 208\nFraneckiside, OR 58996-4842', 'minimsam.eth', 'Occaecati velit quaerat tempora fugiat assumenda facilis sit voluptatem. Vero ea unde reiciendis ea expedita nihil eveniet. Et et et aut quas corporis. Et tempore minima voluptates veniam sint adipisci natus qui. Quos iste quis reiciendis. Quibusdam voluptas autem enim et sint minima. Praesentium et voluptatem quia ex distinctio illum. Pariatur non sit ut qui deserunt non dolorem. Laborum velit est adipisci ut aperiam officia quidem.', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(11, 7, 'Graphic Designer', 'Designer', 'Minimsam', 'Islamabad, Pakistan', 'minimsam.eth', '<div><strong>Want to be a Hero? Join one of the leading global online food ordering and delivery marketplaces!<br><br></strong>We are looking for a Senior Graphic Designer to join the Marketing team on our journey to always delivering amazing experiences.<br><br><strong>Your Mission<br><br></strong>Your role includes the participation of defining requirements, visualizing and creating graphics including illustrations, logos, layouts and photos. You’ll be the one to shape the visual aspects of our Online/ Offline context, products, products packaging, exhibitions and more.<br><br>Your graphics should capture the attention of those who see them and communicate the right message. For this, you need to have a creative flair and a strong ability to translate requirements into design.<br><br><strong>Your Heroic Skills<br></strong><br></div><ul><li>Study design briefs and determine requirements</li><li>Schedule projects and define budget constraints</li><li>Conceptualize visuals based on requirements</li><li>Prepare rough drafts and present ideas</li><li>Develop illustrations, logos and other designs using software or by hand</li><li>Use the appropriate colors and layouts for each graphic</li><li>Work with copywriters and creative director to produce final design</li><li>Test graphics across various media</li><li>Amend designs after feedback</li><li>Ensure final graphics and layouts are visually appealing and on-brand</li><li>Other duties as requested by line manager</li></ul><div><strong>Nice To Have<br></strong><br></div><ul><li>Bachelor\'s Degree in Design or Marketing or equivalent .</li><li>4+ years work-related experience as Graphic Designer .</li><li>A strong portfolio of illustrations or other graphics.</li><li>Familiarity with design software and technologies (such as InDesign, Illustrator, Dreamweaver, Photoshop).</li><li>A keen eye for aesthetics and details.</li><li>Excellent communication skills.</li><li>Ability to work methodically and meet deadlines.</li></ul><div><strong>Why Delivery Hero?<br><br>About Us<br><br></strong>Delivery Hero is building the next generation global on-demand delivery platform. We have grown rapidly from inception in 2011 to become the world\'s largest food-ordering network and we’re now innovating and creating new verticals such as groceries, pharmacies, flowers and other convenience articles in multiple markets.<br><br>Our awesome international team already operates in 40+ countries worldwide and we are looking for the most talented people to join us on our mission to ‘always deliver an amazing experience.’ If you’re an enthusiastic problem solver and hungry for a new adventure, an exciting job and multicultural workplace is waiting for you in the heart of Berlin!<br><br>At Delivery Hero, we believe diversity and representation is key to creating not only an exciting product, but also an amazing customer and employee experience. Fostering this starts with hiring -- therefore we do not discriminate on the basis of race, religion, color, national origin, gender, sexual orientation, age, marital status, or any other aspect that makes you, you.<br><br><strong>Have we caught your attention? </strong>If you are looking for an environment where our company DNA is defined by our values and People Leadership Principles, please send us your CV.<br><br>We’re looking forward to your application!</div>', '2022-06-18 09:31:09', '2022-06-18 09:34:01'),
(12, 7, 'UI / UX Designer', 'Designer', 'Minimsam', 'Islamabad, Pakistan', 'minimsam.eth', '<div>Yamm is revolutionising the online shopping experience. We’re a local first solution: we give customers INSTANT refunds before they even ship back the item, Yamm eliminates the current 14 days refund wait time for customers and improves key performance indicators like customer confidence and loyalty.</div><div><br></div><div><br></div><div>We are looking for :</div><ul><li>Three or more years of experience and proven track record.</li><li>Hands-on experience creating wireframes, prototypes, storyboards, user flows, etc.</li><li>Experience using tools such as Photoshop, Sketch, Illustrator, InVision, UXPin, Quartz.</li><li>Experience with eCommerce or Landing Page Design is a bonus</li><li>Understanding of basic front-end languages: HTML5, CSS3 Javascript.</li><li>Creative ideas with a problem-solving mindset.</li><li>Experience working in an agile/scrum development process.</li><li>Be open to receiving objective criticism and improving upon it.</li><li>Full-time availability is a strong advantage</li></ul><div><br></div><div>What we offer you :</div><ul><li>Competitive Salary package</li><li>High degrees of responsibility and autonomy</li><li>Great opportunities for personal and professional growth</li><li>Attractive working environment in a dynamically growing fintech sector involving steep training curves and flat command structure being part of the founder team</li></ul>', '2022-06-18 09:33:39', '2022-06-18 09:35:16'),
(13, 7, 'Digital Creator', 'Creator', 'Minimsam', 'Islamabad, Pakistan', 'minimsam.eth', '<div>We are looking for a talented Content creator to take full responsibility of our marketing plans including social media posts, blogs campaigns ....etc . Our ideal candidate is a creative marketing professional, preferably with a writing background. You should be able to develop engaging content to attract and retain customers. For this position, it’s also essential to be up-to-date with new technologies and marketing trends. Ultimately, you should be able to expand our company’s digital footprint and brand awareness.<br><br><strong>Responsibilities:<br></strong><br></div><ul><li>Deliver engaging content on a regular basis and inspire team members</li><li>Edit, proofread and improve content</li><li>Optimize content considering SEO and Google Analytics</li><li>Analyze web and App traffic metrics</li><li>Share content through various channels, ensuring strong web presence</li><li>Receive customer feedback and generate ideas to increase customer engagement</li><li>creative posts content</li><li>creative marketing campaign content<br><br></li></ul><div><strong>Requirements<br></strong><br></div><ul><li>Proficiency in MS Office and WordPress or other Content Management Software</li><li>Understanding of web publishing requirements</li><li>Editorial mindset with an ability to predict audience preferences</li><li>Hands on experience with SEO and web traffic metrics</li><li>Expertise in social media platforms</li><li>Project management skills and attention to detail</li><li>Excellent communication and writing skills in English</li><li>BSc degree in Marketing, Journalism or relevant field<br><br></li></ul><div><strong>Benefits<br></strong><br></div><ul><li>Training &amp; Development.</li><li>Flexible working hours.</li><li>Paid Time Off.</li><li>Private Health Insurance.</li></ul>', '2022-06-18 09:34:54', '2022-06-18 09:34:54');

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
(5, '2022_05_15_025400_create_listings_table', 1),
(6, '2022_05_22_071735_create_applications_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_recruiter` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimage.jpg',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `desc`, `address`, `email_verified_at`, `is_recruiter`, `password`, `image`, `file`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Company', 'company@example.com', NULL, NULL, NULL, 1, '$2y$10$z1NFutgiFEb9ZUvPL9NlNuWSbFRhM6363ar2Hg20wSDKUlnwPd1h6', 'noimage.jpg', NULL, NULL, '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(2, 'Mr. Jerrold Vandervort Jr.', 'pbarrows@example.net', NULL, NULL, '2022-06-18 09:17:08', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'noimage.jpg', NULL, '7lWQArk8pK', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(3, 'Jerry Greenfelder', 'lon.kris@example.net', NULL, NULL, '2022-06-18 09:17:08', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'noimage.jpg', NULL, '4qE0sXEjc1', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(4, 'Julien Greenfelder DDS', 'towne.isom@example.net', NULL, NULL, '2022-06-18 09:17:08', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'noimage.jpg', NULL, 'Ic9jBCuSyO', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(5, 'Test User', 'test@example.com', NULL, NULL, '2022-06-18 09:17:08', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'noimage.jpg', NULL, 'ijjwGxl2MI', '2022-06-18 09:17:08', '2022-06-18 09:17:08'),
(6, 'Ossama Mehmood', 'ossamamehmood110@gmail.com', '<blockquote>Started my career at the age of Sixteen (16) as a Graphic Designer. I have four (4) plus years of predominant hands-on experience gained by doing freelance on different platforms. I\'m currently specialized in working as a Digital Creator, Senior Graphic Designer, and User Interface (UI) &amp; Experience (UX).</blockquote>', 'Islamabad, Pakistan', '2022-06-15 14:36:05', 0, '$2y$10$wtgj5zvZwt6DjTvhONG/2eJrPXFrE0uX1k4/Gx9kiBMeRl.iSj/5K', 'profile-images/7o3tUhl41zEaaTxODRAav6hhJ8RkNCR2gSqteMcZ.png', 'files/ow56Lpu2ACHH1rHI4sSXRVcxfXsgF7B4hwaLHTk3.pdf', NULL, '2022-06-18 09:17:55', '2022-06-18 10:10:03'),
(7, 'Minimsam', 'minimsam.eth@gmail.com', NULL, NULL, NULL, 1, '$2y$10$UkxI/qLmzhPJq2vywyWKIuo3gEpNxgsNQ0fLDSgJ06WbuDxVrYBci', 'noimage.jpg', NULL, NULL, '2022-06-18 09:26:30', '2022-06-18 09:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
