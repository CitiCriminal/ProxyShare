-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2022 at 04:03 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intejdau_proxied`
--

-- --------------------------------------------------------

--
-- Table structure for table `proxy`
--

CREATE TABLE `proxy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `lines` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proxy`
--

INSERT INTO `proxy` (`id`, `title`, `date`, `category`, `lines`, `link`) VALUES
(1, 'HTTP', '2022-05-30', 'HTTP PROXIES', '90', 'https://anonfiles.com/nbHet5lby9/eliteandhigh_txt'),
(2, 'HTTP', '2022-05-30', 'HTTP PROXIES', '41', 'https://anonfiles.com/x3Db18lcy5/proxiedclub_txt'),
(4, 'HTTP', '2022-05-30', 'HTTP PROXIES', '122', 'https://anonfiles.com/Xfu82blby9/bigproxy_txt'),
(5, 'SOCKS 4', '2022-05-30', 'SOCKS 4 PROXY', '148', 'https://anonfiles.com/f6L078l7y9/socks4checked_txt'),
(6, 'SOCKS 5', '2022-05-30', 'SOCKS5 PROXIES', '47', 'https://anonfiles.com/Z8K574l1yd/socks5checked_txt'),
(7, 'SOCKS 4', '2022-06-01', 'SOCKS4 PROXIES', '1847', 'https://anonfiles.com/V2s1Qal3y6/socks4bruh_txt'),
(8, 'HTTP', '2022-06-01', 'HTTP PROXIES', '132', 'https://anonfiles.com/xd32Q6l9yf/httpbruh_txt'),
(9, 'SOCKS 4', '2022-06-01', 'SOCKS 4 PROXIES', '78', 'https://anonfiles.com/z83eZ3lcyf/socks4elitehigh_txt'),
(10, 'HTTP/S', '2022-06-02', 'HTTP PROXIES', '45', 'https://anonfiles.com/93A8y0mfy4/proxy45_txt'),
(11, 'IPV6 HTTP', '2022-06-06', 'HTTP PROXIES', '502', 'https://anonfiles.com/T1F763n3y2/proxiedclubipv6_txt'),
(12, 'Socks 4', '2022-06-06', 'SOCKS4 PROXIES', '62', 'https://anonfiles.com/F2J36cnay9/socks4byproxied.club_txt'),
(13, 'HTTP PROXIES', '2022-06-06', 'HTTP PROXIES', '162', 'https://anonfiles.com/XeC079n1y2/httproxiesclub_txt'),
(14, 'HTTP', '2022-06-16', 'HTTP PROXIES', '114', 'https://mega.nz/file/QdpVXapa#mQcboHsmI8yuaZMEyjInziem8qdBxG83Bkz7Z8X6fMg'),
(15, 'SOCKS 4 ', '2022-06-16', 'SOCKS 4 PROXIES', '79', 'https://mega.nz/file/8JAFUQIL#fTwxxqgo9xYTTZqCs-tVS_-aQZwMqx1WxJdUv2lpoBE'),
(16, 'SOCKS5 ', '2022-06-16', 'SOCKS 5 WITH PASSWORD', '718', 'https://mega.nz/file/4UhiTART#dayUQNa_fgR2mE0p9OYMF6aWsKi4ttHWc46WG8esP2g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proxy`
--
ALTER TABLE `proxy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proxy`
--
ALTER TABLE `proxy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
