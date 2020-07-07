-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Tem 2020, 22:25:12
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `canli`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fovicon` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_appname` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_fovicon`, `ayar_url`, `ayar_title`, `ayar_appname`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_footer`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_adres`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'images/28636canli.png', 'images/30006aa.png', 'http://localhost/canlimacv2/', 'Fubol Canlı Yayın', 'CanlıTV', 'Site Açıklaması', 'live tv, live stream, live channel, tv channel, tv stream, online stream, online tv, online channel, online news,live football, watch football online, free football streaming, live football stream, live epl streaming, live sport streaming, watch live football, live la liga streaming, live italian serie a,streaming online, live tv, live tv stream,  internet tv , Live Streaming tv, watch free Tv, watch live tv , online free tv, Sony tv online, watch live tv on pc, free online tv, tv channels, live streaming, time4tv,time 4 tv,time for tv,live tv channels, USA Channels , Sports Channels, fox Channel, ABC Channel, ABC Family, TNT, CBS, ESPNU, Speed, Nascar, TBS, NBC, ESPN Channel, Sky Sports HD, football, nhl, mlb, Schedules, Cricket,  Golf, NHL, Formula1, Cycling, Tennis, Handball, Horse Racing, Boxing, UEFA, serie a, premier league, la liga, bundesliga, live sport streams, live football, English Premier League,Football, NBA, MLB, Live, Horse Racing, Freesoccer, ATP, WTA, Handball, Boxing, UFC, WWE, Schedules, Sports, Livep2p, PPLive, Sopcast, TVAnts, Best , Gratis , Free, Euro2017, WC2017, Streams, Cricket, Golf, NFL, NHL, Formula 1, Cycling, Tennis', '', 'Copyright © 2019 Maksis Otomasyon - Tüm Hakları Saklıdır.', '0216 540 20 04', '', '0216 540 20 05', 'info@maksisotomasyon.com', 'Şerifali mahallesi hendem caddesi no:21/A  Ümraniye–İstanbul', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12044.177669756768!2d29.1472171!3d41.002401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa589a545e41f%3A0x5e203cbe83b3a995!2sMaksis%20Otomasyon!5e0!3m2!1str!2str!4v1567443838782!5m2!1str!2str\" width=\"1903\" height=\"550\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe> ', '', '        ', 'https://facebook.com', 'https://twitter.com', 'www.google.com', 'www.youtube.com', 'deneme', 'deneme', 'deneme', '25', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kanallar`
--

CREATE TABLE `kanallar` (
  `kanal_id` int(11) NOT NULL,
  `kanal_video` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_ad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_ev` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_dep` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_saat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_aciklama` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kanal_etiket` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kanallar`
--

INSERT INTO `kanallar` (`kanal_id`, `kanal_video`, `kanal_ad`, `kanal_ev`, `kanal_dep`, `kanal_saat`, `kanal_aciklama`, `kanal_etiket`) VALUES
(1, '<iframe src=\"http://futbolcafetv.live/ch/sikik.html\" width=\"100%\" height=\"100%\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', 'BeinSports HD', 'Beşiktaş', 'Slovan Bratislava', '20:55', 'Beşiktaş Slovan Bratislava Karşılaşması İzle', 'Beşiktaş Slovan Bratislava Canlı İzle,Beşiktaş,Slovan Bratislava');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_password`, `kullanici_ad`) VALUES
(154, 'demo@demo.com', 'demo', 'CanlıTV');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklam`
--

CREATE TABLE `reklam` (
  `reklam_id` int(11) NOT NULL,
  `reklam_adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `reklam_kodu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `reklam`
--

INSERT INTO `reklam` (`reklam_id`, `reklam_adi`, `reklam_kodu`) VALUES
(1, 'Anasayfa Üst', '<img src=\"images/ad.jpg\">'),
(3, 'Anasayfa Alt', '<img src=\"images/ad.jpg\">'),
(4, 'Kanal Üst', '<img src=\"images/ad.jpg\">'),
(5, 'Kanal Alt', '<img src=\"images/ad.jpg\">');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `kanallar`
--
ALTER TABLE `kanallar`
  ADD PRIMARY KEY (`kanal_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `reklam`
--
ALTER TABLE `reklam`
  ADD PRIMARY KEY (`reklam_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kanallar`
--
ALTER TABLE `kanallar`
  MODIFY `kanal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- Tablo için AUTO_INCREMENT değeri `reklam`
--
ALTER TABLE `reklam`
  MODIFY `reklam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
