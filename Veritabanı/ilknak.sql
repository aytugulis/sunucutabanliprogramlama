-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 May 2019, 22:03:35
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ilknak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `endeks`
--

DROP TABLE IF EXISTS `endeks`;
CREATE TABLE IF NOT EXISTS `endeks` (
  `id` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `endeks` float NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `endeks`
--

INSERT INTO `endeks` (`id`, `endeks`) VALUES
('1', 7.9),
('11', 7.1),
('12', 17.7),
('2', 26.3),
('3', 2.5),
('4', 2.9),
('5', 24.3),
('6', 11.1),
('7', 12.8),
('8', 12.5),
('9', 9.3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilceler`
--

DROP TABLE IF EXISTS `ilceler`;
CREATE TABLE IF NOT EXISTS `ilceler` (
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `nufus` int(255) NOT NULL,
  `kapasite` int(255) NOT NULL,
  `id` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilceler`
--

INSERT INTO `ilceler` (`ad`, `nufus`, `kapasite`, `id`) VALUES
('Balçova', 79357, 50225, '1'),
('Konak', 356563, 248705, '11'),
('Narlıdere', 66203, 14933, '12'),
('Bayraklı', 311524, 47369, '2'),
('Bornova', 445232, 693650, '3'),
('Buca', 499325, 338904, '4'),
('Çiğli', 194525, 39918, '5'),
('Gaziemir', 137553, 37342, '6'),
('Güzelbahçe', 32592, 10123, '7'),
('Karabağlar', 479986, 114628, '8'),
('Karşıyaka', 344140, 146460, '9');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `risk`
--

DROP TABLE IF EXISTS `risk`;
CREATE TABLE IF NOT EXISTS `risk` (
  `derece` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `katsayi` int(10) NOT NULL,
  `id` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `risk`
--

INSERT INTO `risk` (`derece`, `katsayi`, `id`) VALUES
('Çok Yüksek', 5, '1'),
('Çok Yüksek', 5, '11'),
('Yüksek', 4, '12'),
('Yüksek', 4, '2'),
('Yüksek', 4, '3'),
('Düşük', 2, '4'),
('Çok Yüksek', 5, '5'),
('Orta', 3, '6'),
('Yüksek', 4, '7'),
('Orta', 3, '8'),
('Yüksek', 4, '9');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(16) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `sifre`, `eposta`) VALUES
('', '1234', 'canaydinn@gmail.com'),
('aytugulis', '1234', 'aytugulis'),
('aytugulis', '1234', 'aytugulis');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `risk`
--
ALTER TABLE `risk`
  ADD CONSTRAINT `risk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ilceler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
