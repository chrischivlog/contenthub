-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2020 um 09:27
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `contenthub`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `con_submit`
--

CREATE TABLE `con_submit` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `select_submit` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `con_submit`
--

INSERT INTO `con_submit` (`ID`, `user_id`, `title`, `text`, `select_submit`, `date`) VALUES
(9, 1, 'sdsd', 'dsdsdsd', 'environmental Protection', '2020-06-04 13:13:13'),
(10, 1, 'asddddddddddd', 'sasdasda', 'environmental Protection', '2020-06-04 13:13:42'),
(11, 1, 'asddddddddddd', 'sasdasda', 'environmental Protection', '2020-06-04 13:13:52'),
(12, 2, 'asddddddddddd', 'sasdasda', 'Climate change', '2020-06-04 13:15:30'),
(13, 1, 'asddddddddddd', 'sasdasda', 'environmental Protection', '2020-06-04 13:27:04'),
(14, 1, '2222', 'asddassadsad', 'Other', '2020-06-04 15:48:27'),
(15, 1, '', '', '', '2020-06-10 13:39:29'),
(16, 1, '', '', '', '2020-06-10 13:39:51');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `con_user`
--

CREATE TABLE `con_user` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `mail` text NOT NULL,
  `mail_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `con_user`
--

INSERT INTO `con_user` (`ID`, `username`, `password`, `mail`, `mail_id`) VALUES
(1, 'Christopher Oneisz', 'gg', 'christopher@oneisz.de', '0'),
(4, 'ChrischiMc', 'bla', 'ChrischiMc@sdsaasd.de', '0');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `con_submit`
--
ALTER TABLE `con_submit`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `con_user`
--
ALTER TABLE `con_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `con_submit`
--
ALTER TABLE `con_submit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `con_user`
--
ALTER TABLE `con_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
