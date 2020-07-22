-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jul 2020 um 12:07
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
-- Tabellenstruktur für Tabelle `con_select`
--

CREATE TABLE `con_select` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `opt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `con_select`
--

INSERT INTO `con_select` (`ID`, `name`, `opt`) VALUES
(1, 'Climate change', '1'),
(2, 'People with dark skin color', '2');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `con_select_submit_opt`
--

CREATE TABLE `con_select_submit_opt` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `opt_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `con_select_submit_opt`
--

INSERT INTO `con_select_submit_opt` (`ID`, `name`, `opt_id`) VALUES
(1, 'Enviorment', '1'),
(2, 'Society ', '2');

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
(15, 'Christopher Oneisz', 'gg', 'christopher@oneisz.de', '861167');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `con_select`
--
ALTER TABLE `con_select`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `con_select_submit_opt`
--
ALTER TABLE `con_select_submit_opt`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT für Tabelle `con_select`
--
ALTER TABLE `con_select`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `con_select_submit_opt`
--
ALTER TABLE `con_select_submit_opt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `con_submit`
--
ALTER TABLE `con_submit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `con_user`
--
ALTER TABLE `con_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
