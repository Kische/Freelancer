-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 Oca 2022, 10:30:23
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `freelancer`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `fname` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `lname` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `job` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `experience` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `special` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `fname`, `lname`, `mail`, `bday`, `gender`, `job`, `experience`, `special`) VALUES
(32, 'ece0101', '1111', 'Ece', 'Cansu', 'cansu_ece@hotmail.com', '1992-02-11', 'Kadin', 'Öğretmen', 'Orta-Seviye', 'Matematik'),
(31, 'pelin06', '0606', 'Pelin', 'Baynaz', 'baynaaz@gmail.com', '1991-04-07', 'Kadin', 'Editör', 'Profesyonel', 'Dergi'),
(27, 'bayborabayraktar', '123456', 'Baybora', 'Bayraktar', 'bayborabayraktar@hotmail.com', '1999-09-13', 'Erkek', 'Yazılımcı', 'Amatör', 'CSS'),
(28, 'berra', '4321', 'Berra', 'Arman', 'arman_berra@hotmail.com', '2001-03-13', 'Kadin', 'Çevirmen', 'Orta-Seviye', 'İngilizce'),
(29, 'ali5858', '5858', 'Ali', 'Osman', 'aliosman@gmail.com', '1980-03-12', 'Erkek', 'Öğretmen', 'Profesyonel', 'Fizik'),
(30, 'ahmet1', '4411', 'Ahmet', 'Boran', 'ahmetboran@gmail.com', '1980-09-04', 'Erkek', 'Ressam', 'Profesyonel', 'Karakalem'),
(33, 'polat51', '5123', 'Polat', 'Talat', 'talat_polat@gmail.com', '1975-01-01', 'Erkek', 'Çevirmen', 'Profesyonel', 'Fransızca'),
(34, 'ilayda_durgun', '1234', 'İlayda', 'Durgun', 'durgun_ilayda@gmail.com', '1992-08-27', 'Kadin', 'Ressam', 'Orta-Seviye', 'Pastel Boya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
