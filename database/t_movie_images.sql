-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-23 11:03:13
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `halcinema`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_movie_images`
--

CREATE TABLE `t_movie_images` (
  `f_movie_image_id` int(11) NOT NULL,
  `f_movie_id` int(11) NOT NULL,
  `f_movie_image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_movie_images`
--

INSERT INTO `t_movie_images` (`f_movie_image_id`, `f_movie_id`, `f_movie_image_url`) VALUES
(1, 1, 'mondays/1.jpg'),
(2, 1, 'mondays/2.jpg'),
(3, 1, 'mondays/3.jpg'),
(4, 1, 'mondays/4.jpg'),
(5, 1, 'mondays/5.jpg'),
(6, 2, 'woman_talking/1.jpg'),
(7, 2, 'woman_talking/2.jpg'),
(8, 2, 'woman_talking/3.jpg'),
(9, 2, 'woman_talking/4.jpg'),
(10, 2, 'woman_talking/5.jpg'),
(11, 3, 'samurai/1.jpg'),
(12, 4, 'kaibutsu/1.jpg'),
(13, 4, 'kaibutsu/2.jpg'),
(14, 4, 'kaibutsu/3.jpg'),
(15, 5, 'creed/1.jpg'),
(16, 5, 'creed/2.jpg'),
(17, 5, 'creed/3.jpg'),
(18, 6, 'rohan_lourve/1.jpg'),
(19, 6, 'rohan_lourve/2.jpg'),
(20, 6, 'rohan_lourve/3.jpg'),
(21, 6, 'rohan_lourve/4.jpg'),
(22, 6, 'rohan_lourve/5.jpg'),
(23, 7, 'little_mermaid/1.jpg'),
(24, 7, 'little_mermaid/2.jpg'),
(25, 7, 'little_mermaid/3.jpg'),
(26, 7, 'little_mermaid/4.jpg'),
(27, 8, 'rrr/1.jpg'),
(28, 8, 'rrr/2.jpg'),
(29, 8, 'rrr/3.jpg'),
(30, 8, 'rrr/4.jpg'),
(31, 8, 'rrr/5.jpg'),
(32, 9, 'interstellar/1.jpg'),
(33, 9, 'interstellar/2.jpg'),
(34, 9, 'interstellar/3.jpg'),
(35, 9, 'interstellar/4.jpg'),
(36, 9, 'interstellar/5.jpg'),
(37, 10, 'inception/1.jpg'),
(38, 10, 'inception/2.jpg'),
(39, 10, 'inception/3.jpg'),
(40, 10, 'inception/4.jpg'),
(41, 10, 'inception/5.jpg'),
(42, 11, 'madmax/1.jpg'),
(43, 11, 'madmax/2.jpg'),
(44, 11, 'madmax/3.jpg'),
(45, 11, 'madmax/4.jpg'),
(46, 11, 'madmax/5.jpg'),
(47, 12, 'memento/1.jpg'),
(48, 12, 'memento/2.jpg'),
(49, 12, 'memento/3.jpg'),
(50, 13, 'spider_man/1.jpg'),
(51, 13, 'spider_man/2.jpg'),
(52, 13, 'spider_man/3.jpg'),
(53, 13, 'spider_man/4.jpg'),
(54, 13, 'spider_man/5.jpg'),
(55, 14, 'violet_evergarden/1.jpg'),
(56, 14, 'violet_evergarden/2.jpg'),
(57, 14, 'violet_evergarden/3.jpg'),
(58, 14, 'violet_evergarden/4.jpg'),
(59, 14, 'violet_evergarden/5.jpg'),
(60, 15, 'john_wick/1.jpg'),
(61, 15, 'john_wick/2.jpg'),
(62, 15, 'john_wick/3.jpg'),
(63, 15, 'john_wick/4.jpg'),
(64, 15, 'john_wick/5.jpg'),
(65, 16, 'made_in_abyss/1.jpg'),
(66, 16, 'made_in_abyss/2.jpg'),
(67, 16, 'made_in_abyss/3.jpg'),
(68, 17, 'akira/1.jpg'),
(69, 17, 'akira/2.jpg'),
(70, 17, 'akira/3.jpg'),
(71, 17, 'akira/4.jpg'),
(72, 17, 'akira/5.jpg'),
(73, 18, 'paprika/1.jpg'),
(74, 19, 'promare/1.jpg'),
(75, 19, 'promare/2.jpg'),
(76, 19, 'promare/3.jpg'),
(77, 19, 'promare/4.jpg'),
(78, 19, 'promare/5.jpg'),
(79, 20, 'matrix/1.jpg'),
(80, 20, 'matrix/2.jpg'),
(81, 20, 'matrix/3.jpg'),
(82, 20, 'matrix/4.jpg'),
(83, 20, 'matrix/5.jpg'),
(84, 21, 'wild_speed/1.jpg'),
(85, 21, 'wild_speed/2.jpg'),
(86, 21, 'wild_speed/3.jpg'),
(87, 21, 'wild_speed/4.jpg'),
(88, 21, 'wild_speed/5.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_movie_images`
--
ALTER TABLE `t_movie_images`
  ADD PRIMARY KEY (`f_movie_image_id`),
  ADD KEY `f_movie_id` (`f_movie_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_movie_images`
--
ALTER TABLE `t_movie_images`
  MODIFY `f_movie_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `t_movie_images`
--
ALTER TABLE `t_movie_images`
  ADD CONSTRAINT `t_movie_images_ibfk_1` FOREIGN KEY (`f_movie_id`) REFERENCES `t_movies` (`f_movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
