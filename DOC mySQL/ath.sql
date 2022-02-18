-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 fév. 2022 à 15:28
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ath`
--

-- --------------------------------------------------------

--
-- Structure de la table `athjson`
--

CREATE TABLE `athjson` (
  `list_date` int(11) DEFAULT NULL,
  `list_version` int(11) DEFAULT NULL,
  `list_headerLength` int(11) DEFAULT NULL,
  `list_service` varchar(4) DEFAULT NULL,
  `list_identification` varchar(6) DEFAULT NULL,
  `list_flags_code` varchar(4) DEFAULT NULL,
  `list_ttl` int(11) DEFAULT NULL,
  `list_protocol_name` varchar(7) DEFAULT NULL,
  `list_protocol_checksum_status` varchar(8) DEFAULT NULL,
  `list_protocol_ports_from` int(11) DEFAULT NULL,
  `list_protocol_ports_dest` int(11) DEFAULT NULL,
  `list_headerChecksum` varchar(10) DEFAULT NULL,
  `list_ip_from` varchar(8) DEFAULT NULL,
  `list_ip_dest` varchar(8) DEFAULT NULL,
  `list_protocol_flags_code` varchar(5) DEFAULT NULL,
  `list_protocol_version` decimal(2,1) DEFAULT NULL,
  `list_protocol_contentType` varchar(16) DEFAULT NULL,
  `list_protocol_checksum_code` varchar(6) DEFAULT NULL,
  `list_protocol_type` int(11) DEFAULT NULL,
  `list_protocol_code` int(11) DEFAULT NULL,
  `list_status` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `athjson`
--

INSERT INTO `athjson` (`list_date`, `list_version`, `list_headerLength`, `list_service`, `list_identification`, `list_flags_code`, `list_ttl`, `list_protocol_name`, `list_protocol_checksum_status`, `list_protocol_ports_from`, `list_protocol_ports_dest`, `list_headerChecksum`, `list_ip_from`, `list_ip_dest`, `list_protocol_flags_code`, `list_protocol_version`, `list_protocol_contentType`, `list_protocol_checksum_code`, `list_protocol_type`, `list_protocol_code`, `list_status`) VALUES
(1608219651, 4, 20, '0x00', '0xf30f', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '3481', NULL, NULL, NULL, NULL, NULL, NULL),
(1608219649, 4, 20, '0x00', '0xf30e', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '3481', NULL, NULL, NULL, NULL, NULL, NULL),
(1608219647, 4, 20, '0x00', '0xf30d', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '3481', NULL, NULL, NULL, NULL, NULL, NULL),
(1608219645, 4, 20, '0x00', '0xf30c', '0x00', 128, 'UDP', 'disabled', 50046, 3481, 'unverified', 'c0a8014a', '3470ff25', '3481', NULL, NULL, NULL, NULL, NULL, NULL),
(1608219640, 4, 20, '0x00', '0x92ce', '0x40', 128, 'TLSv1.2', 'disabled', 63440, 443, 'unverified', 'c0a8014a', '343111a8', '443', '1.2', 'Application Data', NULL, NULL, NULL, NULL),
(1608219635, 4, 20, '0x00', '0x92d0', '0x40', 128, 'TLSv1.2', 'disabled', 63440, 443, 'unverified', 'c0a8014a', '343111a8', '443', '1.2', 'Application Data', NULL, NULL, NULL, NULL),
(1608219630, 4, 20, '0x00', '0xa132', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '443', NULL, NULL, '0x4353', 8, 0, NULL),
(1608219620, 4, 20, '0x00', '0xa132', '0x00', 99, 'ICMP', 'good', 51062, 443, '0xc31d', 'acd913e3', 'c0a8014a', '443', NULL, NULL, '0x4353', 0, 0, NULL),
(1607951036, 4, 20, '0x00', '0x9927', '0x40', 128, 'TCP', 'disabled', 51062, 443, 'unverified', 'c0a8014a', 'd83ac6ce', '443', NULL, NULL, NULL, NULL, NULL, NULL),
(1607951031, 4, 20, '0x00', '0x9927', '0x00', 121, 'TCP', 'disabled', 51062, 443, 'unverified', 'd83aa80c', 'c0a8014a', '443', NULL, NULL, NULL, NULL, NULL, NULL),
(1606910038, 4, 20, '0x00', '0xf2f9', '0x00', 117, 'ICMP', 'good', 51062, 443, '0xc312', 'acd913e3', 'c0a8014a', '443', NULL, NULL, '0x4352', 0, 0, NULL),
(1606910036, 4, 20, '0x00', '0xf2f9', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '443', NULL, NULL, '0x4352', 8, 0, NULL),
(1606910000, 4, 20, '0x00', '0xd912', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '443', NULL, NULL, '0x4352', 8, 0, 'timeout'),
(1606909998, 4, 20, '0x00', '0xd914', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0020', 'c0a8014a', 'acd913e3', '443', NULL, NULL, '0x4355', 8, 0, 'timeout'),
(1606906654, 4, 20, '0x00', '0xa443', '0x00', 128, 'ICMP', 'good', 51062, 443, '0x0000', 'c0a8014a', 'acd913e3', '443', NULL, NULL, '0x4352', 8, 0, NULL),
(1606906653, 4, 20, '0x00', '0xa443', '0x00', 117, 'ICMP', 'good', 51062, 443, '0xc312', 'acd913e3', 'c0a8014a', '443', NULL, NULL, '0x4352', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
