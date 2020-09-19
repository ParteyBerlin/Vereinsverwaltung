-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Feb 2020 um 16:26
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `verein`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitglied`
--

CREATE TABLE `mitglied` (
  `mitglied_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `geschlecht` varchar(1) NOT NULL,
  `geb_dat` date NOT NULL,
  `strasse` varchar(100) DEFAULT NULL,
  `nr` varchar(10) DEFAULT NULL,
  `plz` char(5) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verein`
--

CREATE TABLE `verein` (
  `verein_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stadt` varchar(100) NOT NULL,
  `vorstandsvors` int(11) DEFAULT NULL,
  `gruendung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `verein`
--

INSERT INTO `verein` (`verein_id`, `name`, `stadt`, `vorstandsvors`, `gruendung`) VALUES
(1, 'BierDC', 'Berlin', 36, '2020-02-19'),
(2, 'test', 'test', 0, '2018-02-19'),
(3, 'Neuer Verein', 'Musterstadt', 0, '2018-08-16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vereinmitglied`
--

CREATE TABLE `vereinmitglied` (
  `verein_id` int(11) NOT NULL,
  `mitglied_id` int(11) NOT NULL,
  `bezahlt` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mitglied`
--
ALTER TABLE `mitglied`
  ADD PRIMARY KEY (`mitglied_id`);

--
-- Indizes für die Tabelle `verein`
--
ALTER TABLE `verein`
  ADD PRIMARY KEY (`verein_id`);

--
-- Indizes für die Tabelle `vereinmitglied`
--
ALTER TABLE `vereinmitglied`
  ADD PRIMARY KEY (`verein_id`,`mitglied_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mitglied`
--
ALTER TABLE `mitglied`
  MODIFY `mitglied_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `verein`
--
ALTER TABLE `verein`
  MODIFY `verein_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
