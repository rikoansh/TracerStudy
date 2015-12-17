-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2015 pada 10.07
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `slug`, `no`, `created_at`, `updated_at`) VALUES
(1, 'Ut', 'Reiciendis sunt ut quod nesciunt. Non et sed minus perferendis et et. Soluta animi quis corporis. Culpa velit et doloribus reprehenderit magnam maiores itaque.\nAut nesciunt autem aut molestias dolorem. Ea aperiam reiciendis ut alias. Alias vero sed saepe sunt. Voluptas quia assumenda et ut aut nihil.\nItaque voluptatem voluptas molestiae voluptatem similique quis assumenda dolorem. Eveniet minima iure dolorem incidunt sed sit ut. Placeat molestiae nam et eos. Expedita sed voluptatum et quod asperiores reprehenderit.\nIusto debitis eos earum sit. Asperiores ut suscipit cum. Sed quia magni reiciendis aut.\nId autem vitae atque qui omnis beatae. Dolor optio et architecto enim cupiditate. Voluptatem sit et ut dolores ea consequuntur sit. Et et ex vitae unde tenetur nobis dolores.', 'recusandae-minus-temporibus-explicabo-et', 6, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(2, 'Vero', 'Ea nemo non beatae aut quos inventore nesciunt. Dolor consequuntur iure quod illum iste officia culpa. Repellendus tempore iusto quaerat facilis. Eius porro quo eveniet autem non minus velit.\nPossimus ut quis totam ratione. Minus velit repellat quibusdam et fugit aut. Ut qui omnis fugit necessitatibus adipisci neque.\nPariatur incidunt ut earum id est ipsa qui ab. Molestiae placeat qui dicta nihil. Natus laudantium quia odit laudantium maiores. Rem quis esse molestiae architecto a eum necessitatibus.\nMolestiae nihil libero qui fuga quia voluptatem aut ut. Consequatur sequi et sunt dicta cumque veniam ratione.\nAlias deserunt maiores blanditiis quia. Qui molestiae cum asperiores neque. Ut tenetur autem vitae quos molestiae qui qui.\nFacere asperiores explicabo ut amet. Quis ut quos perspiciatis est sit deserunt sit quidem. Eaque veniam quam assumenda repellat impedit nisi. Non est nemo saepe voluptas commodi consequatur rerum.', 'aut-est-magni-esse-sit-itaque-et-ex', 7, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(3, 'Dignissimos', 'Sint exercitationem recusandae ipsa inventore ut reiciendis non. Commodi velit nihil a id similique ea. Ipsa quibusdam architecto asperiores. Suscipit aperiam molestiae minima.\nMolestiae commodi a qui et. Laudantium aut magni non ex. Alias officia ut quaerat asperiores et.\nDeserunt et pariatur eius ipsa voluptate. Repudiandae et facere et eligendi nulla explicabo aliquam. Nihil ipsa aut nihil in aut corrupti veritatis. Vel at rem distinctio ut qui tempora sed.\nEt quam aliquam fuga similique quia dicta. Earum quae explicabo rerum neque. Nam nesciunt voluptatibus vitae eos nesciunt et. Ut aut enim veniam debitis.\nAut facere quia cum repellat consequatur voluptatem voluptatem. Deleniti veritatis voluptas magni perspiciatis molestiae atque quod. Eius distinctio occaecati ea non iusto voluptates excepturi. Repellat sint architecto possimus quod non.', 'ab-voluptatibus-sit-et-mollitia-et-dolorem', 11, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(4, 'Alias', 'Asperiores doloremque quisquam occaecati ipsam atque et error. Est non porro nulla non ratione fugiat. Ratione autem voluptatum mollitia molestiae optio.\nEveniet in facere omnis laudantium laborum nihil vero. At velit molestias sunt odit sit. Ullam non recusandae exercitationem sit.\nNihil similique quo est veniam. Aut facere et consequatur. Ut dolor velit accusantium hic aspernatur rerum repudiandae. Culpa libero quibusdam eveniet nam sapiente.\nConsequatur sit consequatur neque enim. Est sed autem alias. Consequatur quod quis vitae et dicta quia harum qui.\nAspernatur blanditiis voluptatem tenetur velit. Enim et ullam minus illum et doloremque consectetur. Totam vitae alias voluptate enim dolorem.\nNesciunt dolores velit aperiam quia provident. Aut voluptatem ad sed nam libero nihil.\nAut eveniet culpa labore eveniet. Ipsum porro praesentium sunt sed qui neque. Ut consequuntur et omnis ipsum aut fuga consequuntur.', 'sit-dolores-voluptate-numquam-enim-a-sit-alias', 8, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(5, 'Id', 'Facilis qui quaerat dolores dolor asperiores iure. Qui cupiditate dignissimos fugiat ea magnam. Minima laudantium et excepturi nam odit id ullam.\nQuo aliquid earum deleniti et excepturi. Quidem debitis eum aspernatur explicabo. Culpa voluptatibus blanditiis quas tempore nemo repellendus. Est in sed eos enim eaque.\nFugit voluptas atque et aut. Exercitationem veritatis vel et corrupti iure saepe omnis. Magnam enim nobis molestiae expedita. Itaque impedit sed quod nesciunt.\nSint enim pariatur explicabo molestias quod. Est perspiciatis labore quod nihil debitis sit molestiae. Qui enim maiores et. Dolore eius voluptas unde.\nEt quis rerum deleniti atque omnis dolor quia. Quo dolor quo deserunt tenetur assumenda laboriosam. Aut impedit vitae omnis quis.\nPlaceat non tempore magnam ut impedit nostrum. Laborum magni impedit temporibus eveniet quaerat dolorem est voluptatem. Officia velit provident non est deserunt. Rerum doloremque adipisci suscipit laudantium.', 'eos-dolorum-suscipit-quae', 10, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(6, 'Quisquam', 'Laboriosam sit quia rerum corporis excepturi sint. Voluptate nostrum ut dignissimos molestias. Atque pariatur maxime voluptatibus necessitatibus.\nAtque necessitatibus voluptatem impedit voluptate. Nobis est sit non similique recusandae eos non. Sed voluptate impedit non.\nDelectus vel corporis et qui tempora illum est. Eos soluta explicabo est magni et eum ut. Non sit magni hic magni.\nCupiditate recusandae quia hic perspiciatis quia magni reiciendis. Voluptas rerum explicabo nemo aut et quis numquam voluptas. Qui voluptate et est et aliquam architecto.\nNon quae ut aut quia autem aut quos. Aut et necessitatibus quasi sed delectus illum. Optio ipsum omnis beatae quibusdam omnis nostrum dignissimos.\nNatus pariatur ad sed quod. Debitis vel ea qui facilis omnis. Dolorum consectetur officiis hic minima non consequatur amet. Sapiente sit non similique maxime dicta.', 'et-voluptas-tempore-maxime-fugiat-voluptates-necessitatibus', 2, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(7, 'Aut', 'Possimus optio porro quos velit quibusdam explicabo. Qui porro at suscipit voluptatibus est eum. Quisquam dolore dolor corrupti illum.\nIn voluptas aperiam unde sunt ea reiciendis. Quos modi itaque est minus itaque impedit fugiat. Expedita incidunt nisi asperiores est quis velit. Enim quis sed iusto fugit dolore ut.\nAperiam iusto temporibus porro sunt quia et. Cupiditate voluptatum et eius quo voluptas impedit.\nRerum suscipit officiis beatae. Eos quia harum ipsa cumque aut. Ut optio porro minus nulla. Explicabo omnis et earum qui ullam eum ut excepturi.\nAut voluptatibus debitis facere deserunt ut est ad. Nam quo autem reiciendis error corporis at officia velit. Autem voluptate et iusto voluptatem. Aut et ut maxime omnis.\nQuae dicta corporis temporibus modi quo rerum. Qui eos rerum delectus officia ut rem. Eligendi placeat qui et aspernatur est autem voluptate. Error maiores sit ut aut recusandae et.', 'est-qui-maxime-mollitia-iusto-placeat', 10, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(8, 'Dolores', 'Delectus autem et eligendi magni. Sit accusantium voluptatem inventore eligendi et. Sit error quia iure distinctio itaque illum aut.\nAtque ipsum sed quod. Magnam nam molestiae placeat ratione facilis. Non sequi eum voluptatem optio repellendus modi sint. Ut porro molestias consectetur dolorum minima ea sed eos.\nQuis tempore omnis autem ex provident. A quia error quam amet fuga soluta ut. Dolores harum consequuntur rem voluptas placeat in nesciunt. Molestiae id non et animi alias iste. Libero ut commodi repellendus qui.\nAlias quidem in iusto officiis excepturi. Voluptas dolor culpa id aut. Consequatur sit alias cumque unde magnam consectetur. Et libero vero laboriosam ad suscipit.\nDolores hic molestiae veniam atque rerum fuga voluptatem. Omnis sed veritatis ut culpa. Repudiandae voluptatum rerum omnis mollitia.\nVero molestiae maiores a voluptate. Ad eaque nisi explicabo tempora maiores possimus reiciendis. Et in tempora eos aliquid illo blanditiis. Aliquam nam dicta qui.', 'illum-quam-et-autem-velit-laborum', 8, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(9, 'Saepe', 'Qui fugiat illo aperiam ab nisi odio aperiam. Quas tenetur et rerum. Quia ullam unde qui rem recusandae.\nEa voluptates eos sed et ullam. Eveniet odit ea dignissimos id nam in ducimus. Ullam nulla fugit harum dolorem soluta sequi.\nQuae aliquid aperiam iure. Id nihil exercitationem quia saepe enim deserunt laboriosam. Est rerum necessitatibus tempore culpa autem harum cum.\nEst natus ut commodi illo. Neque nostrum et explicabo et consequatur. Incidunt deleniti qui dolor iusto. Ut facilis minima quibusdam dicta est corrupti optio.\nEst cupiditate vel vitae voluptatibus eos illum corporis. Vel natus ea fuga sequi. Culpa atque numquam exercitationem sed id. Iusto et rerum ex cumque aut sit.\nEst et illum dolor. Nesciunt est non error sequi ex vel. Nesciunt cumque officia eum facere.\nPariatur doloribus perferendis neque aut repellendus recusandae. Consectetur qui dolorem doloribus distinctio ab ipsam. Doloremque amet et iure expedita consectetur eos magnam nulla.', 'enim-possimus-a-aperiam-sed-provident-et-voluptas', 6, '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(10, 'Adipisci', 'Ut fuga ducimus in quia et. Id voluptas et perspiciatis aut commodi perferendis. Temporibus debitis explicabo est esse.\nMolestias facilis quia dolores. Fugit deserunt commodi ad provident non iusto. Tempore ex accusantium fuga quidem quasi laboriosam reprehenderit.\nAut nemo non repellendus quaerat consequatur quia. Est iste dolore omnis. Aliquam et ullam alias voluptatem laudantium iure repellat. Iste ex enim et modi quidem.\nAperiam qui enim dolore eveniet facilis. Nostrum quos facere dolor dolores. Aut atque laboriosam eum fuga consectetur. Impedit omnis enim officiis voluptas ipsum eum repellat.\nRecusandae labore eveniet et perspiciatis voluptatem. Molestias consequuntur necessitatibus inventore qui a est voluptatem. Necessitatibus hic saepe quis rerum. Quia totam deleniti deserunt.', 'consequatur-deleniti-velit-dolor-earum-recusandae-quibusdam', 3, '2015-11-20 14:17:15', '2015-11-20 14:17:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_18_022728_tabel_berita', 1),
('2015_11_20_223026_tabel_kontak', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Admin','Mahasiswa') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@localhost.com', '$2y$10$FfLvARXtPE78vpeW.sQC1uPbeeLx48NRvk6BqEHKO0.a7V4vFKnwO', 'NbIVzuTyLJ', '2015-11-20 14:17:14', '2015-11-20 14:17:14'),
(2, 'Ms. Otha Thiel', 'Admin', 'wDavis@yahoo.com', '$2y$10$rOJese0kKeWas7zTAOdXNusUNFa9XkAS7SLkAILDl23MfblNlR8h2', 'zFo2e6pQ09', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(4, 'Dr. Waino Smith', 'Mahasiswa', 'Dach.Mable@Huel.net', '$2y$10$g6udboEHFDgxwNbBE8s1Hu3fBWq8R2oI1TEwlBMMsLvgz4284c7wG', 'pBWMIn8nCD', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(5, 'Alysa Larson', 'Admin', 'Ezequiel99@Little.info', '$2y$10$z2VomFqhv7FovxBMcatTOOZUd2Tqc26HQDEKgmLdIBYuz1h3L0tnm', 'IaQ7GdWA14', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(6, 'Mr. Steve Schmitt Sr.', 'Mahasiswa', 'Toy.Ismael@Rodriguez.com', '$2y$10$xuFcbkR6wl3EYeTysMFlxO58GXDjkprw7k4DfyF.jVusIVErZxOIi', 'Hqv8YdyMMu', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(7, 'Dr. Stewart Krajcik', 'Mahasiswa', 'Abdul.Bosco@Kshlerin.com', '$2y$10$sDye9WwuWd7S5/o4jsRUzuGnI2gKnbX6o20Ig6troQUTgnz5N1NdC', 'su06oORMvk', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(8, 'Furman Quitzon', 'Mahasiswa', 'oWalker@Hilpert.com', '$2y$10$oBc1Vm4eUkU.DDwMHa0I/.9fOLfJeVZiA6SLpKConkWpvCvOY2Qay', 'XfcYyDeWIE', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(9, 'Prof. Daija Cremin', 'Admin', 'Griffin.Dach@Schiller.com', '$2y$10$I4faTyYLYbaqyXOYshCpXeSGKnaYRH43bhk02mvRH9443J5j0WPsS', 'ffSiPDaQ3P', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(10, 'Rosanna Dach', 'Admin', 'Eduardo89@Kozey.com', '$2y$10$tP4BhK1zqY5Wcaw/IPzzrekTCIjjgPt/5.WTd3/X3cTBlMeeJmt8C', '9jHauluMdR', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(11, 'Mr. Kevon Douglas', 'Mahasiswa', 'rMitchell@Ullrich.com', '$2y$10$vs4T90x37arZ5xEsIX.GYuPGQSw0tMyNDKEPimahCCFAi.P6PBaya', 'THVhnqXyqs', '2015-11-20 14:17:15', '2015-11-20 14:17:15'),
(12, 'nonick21', 'Admin', 'adwa@ga.com', '$2y$10$PoB4NtUi3e2jVitUbK4kquM53aPtT1pV1Jw0tPTLTzk9LfqhF9//2', NULL, '2015-11-29 16:27:38', '2015-11-29 16:27:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
