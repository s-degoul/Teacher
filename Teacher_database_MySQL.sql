-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Octobre 2013 à 21:39
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.4-15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES utf8;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `Teacher`
--
USE `Teacher`;
-- --------------------------------------------------------

--
-- Structure de la table `table_country`
--

CREATE TABLE IF NOT EXISTS `table_country` (
  `id_country` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  `country_timezone` varchar(255) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `table_country`
--

INSERT INTO `table_country` (`id_country`, `country_name`, `country_timezone`) VALUES
(1, 'France', 'Europe/Paris'),
(2, 'England', 'Europe/London');

-- --------------------------------------------------------

--
-- Structure de la table `table_cycle_educ`
--

CREATE TABLE IF NOT EXISTS `table_cycle_educ` (
  `id_cycle_educ` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `cycle_educ_start_date` datetime NOT NULL,
  `cycle_educ_eval_obj1` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj2` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj3_a` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj3_b` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj4_a` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj4_b` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj5` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj6` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj7` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj8_a` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj8_b` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj9` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_obj10` decimal(2,1) unsigned DEFAULT NULL,
  `cycle_educ_eval_date` datetime DEFAULT NULL,
  `cycle_educ_end_programme` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cycle_educ`),
  KEY `fk_patient_cycle` (`id_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `table_cycle_educ`
--

INSERT INTO `table_cycle_educ` (`id_cycle_educ`, `id_patient`, `cycle_educ_start_date`, `cycle_educ_eval_obj1`, `cycle_educ_eval_obj2`, `cycle_educ_eval_obj3_a`, `cycle_educ_eval_obj3_b`, `cycle_educ_eval_obj4_a`, `cycle_educ_eval_obj4_b`, `cycle_educ_eval_obj5`, `cycle_educ_eval_obj6`, `cycle_educ_eval_obj7`, `cycle_educ_eval_obj8_a`, `cycle_educ_eval_obj8_b`, `cycle_educ_eval_obj9`, `cycle_educ_eval_obj10`, `cycle_educ_eval_date`, `cycle_educ_end_programme`) VALUES
(8, 3, '2013-08-06 07:49:40', 0.0, 2.0, 2.0, 2.0, 1.0, 1.0, 2.0, NULL, 1.0, 1.0, 1.0, 1.0, 1.0, '2013-08-07 17:51:03', 0),
(9, 4, '2013-08-06 08:13:12', 2.0, 2.0, 2.0, 2.0, 0.5, 0.5, 2.0, 1.0, 0.5, 0.5, 0.5, 0.5, 0.5, '2013-08-07 18:09:10', 0),
(12, 4, '2013-08-07 18:25:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 3, '2013-08-07 20:23:48', 0.0, 2.0, 0.0, 2.0, 0.5, 1.0, 0.0, 1.0, 0.5, 0.0, 0.5, 0.0, 0.5, '2013-08-14 18:55:19', 0),
(14, 3, '2013-08-14 18:55:19', 0.0, 2.0, 2.0, 2.0, 0.5, 1.0, 2.0, 1.0, 0.5, 1.0, 0.5, 0.5, 1.0, '2013-08-23 08:40:27', 0),
(19, 14, '2013-08-22 22:49:19', 2.0, 2.0, 2.0, 2.0, 1.0, 0.5, 2.0, 1.0, 1.0, 0.5, 0.5, 1.0, 1.0, '2013-09-04 18:10:03', 1),
(20, 3, '2013-08-23 08:40:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(22, 14, '2013-09-04 18:10:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-00 00:00:00', 0),
(23, 11, '2013-09-05 17:33:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_cycle_target`
--

CREATE TABLE IF NOT EXISTS `table_cycle_target` (
  `id_target` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_cycle_educ` smallint(5) unsigned NOT NULL,
  `cycle_target_date` datetime DEFAULT NULL,
  `cycle_target_done` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_target`,`id_cycle_educ`),
  KEY `fk_cycle_educ` (`id_cycle_educ`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `table_cycle_target`
--

INSERT INTO `table_cycle_target` (`id_target`, `id_cycle_educ`, `cycle_target_date`, `cycle_target_done`) VALUES
(1, 8, '2013-08-06 11:05:21', 1),
(1, 13, '2013-08-08 13:17:02', 1),
(1, 14, '2013-08-23 08:28:39', 1),
(1, 19, '2013-08-22 22:28:50', 1),
(1, 20, NULL, 0),
(2, 23, '2013-10-24 18:31:43', 1),
(3, 8, NULL, 0),
(3, 9, NULL, 0),
(3, 14, '2013-08-23 08:30:39', 1),
(3, 19, '2013-08-22 22:31:50', 1),
(4, 12, '2013-08-22 19:31:49', 1),
(4, 14, '2013-08-23 08:36:39', 1),
(5, 8, NULL, 0),
(5, 9, NULL, 0),
(5, 14, '2013-08-23 08:38:39', 1),
(5, 19, '2013-08-22 22:34:50', 1),
(7, 12, '2013-08-22 19:32:49', 1),
(7, 14, '2013-08-23 08:41:39', 1),
(8, 14, '2013-08-23 08:43:39', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_device_aerosol`
--

CREATE TABLE IF NOT EXISTS `table_device_aerosol` (
  `id_device_aerosol` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_aerosol_date` datetime NOT NULL,
  `device_aerosol_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q6` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosol_q7` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_aerosol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_device_aerosolchb`
--

CREATE TABLE IF NOT EXISTS `table_device_aerosolchb` (
  `id_device_aerosolchb` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_aerosolchb_date` datetime NOT NULL,
  `device_aerosolchb_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q6` tinyint(3) unsigned DEFAULT NULL,
  `device_aerosolchb_q7` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_aerosolchb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_device_autohaler`
--

CREATE TABLE IF NOT EXISTS `table_device_autohaler` (
  `id_device_autohaler` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_autohaler_date` datetime NOT NULL,
  `device_autohaler_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q6` tinyint(3) unsigned DEFAULT NULL,
  `device_autohaler_q7` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_autohaler`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `table_device_autohaler`
--

INSERT INTO `table_device_autohaler` (`id_device_autohaler`, `id_patient`, `device_autohaler_date`, `device_autohaler_q1`, `device_autohaler_q2`, `device_autohaler_q3`, `device_autohaler_q4`, `device_autohaler_q5`, `device_autohaler_q6`, `device_autohaler_q7`) VALUES
(1, 3, '2013-07-18 00:00:00', 1, 0, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_device_diskus`
--

CREATE TABLE IF NOT EXISTS `table_device_diskus` (
  `id_device_diskus` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_diskus_date` datetime NOT NULL,
  `device_diskus_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_diskus_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_diskus_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_diskus_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_diskus_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_diskus_q6` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_diskus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_device_novolizer`
--

CREATE TABLE IF NOT EXISTS `table_device_novolizer` (
  `id_device_novolizer` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_novolizer_date` datetime NOT NULL,
  `device_novolizer_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q6` tinyint(3) unsigned DEFAULT NULL,
  `device_novolizer_q7` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_novolizer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_device_turbuhaler`
--

CREATE TABLE IF NOT EXISTS `table_device_turbuhaler` (
  `id_device_turbuhaler` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `device_turbuhaler_date` datetime NOT NULL,
  `device_turbuhaler_q1` tinyint(3) unsigned DEFAULT NULL,
  `device_turbuhaler_q2` tinyint(3) unsigned DEFAULT NULL,
  `device_turbuhaler_q3` tinyint(3) unsigned DEFAULT NULL,
  `device_turbuhaler_q4` tinyint(3) unsigned DEFAULT NULL,
  `device_turbuhaler_q5` tinyint(3) unsigned DEFAULT NULL,
  `device_turbuhaler_q6` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_device_turbuhaler`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `table_device_turbuhaler`
--

INSERT INTO `table_device_turbuhaler` (`id_device_turbuhaler`, `id_patient`, `device_turbuhaler_date`, `device_turbuhaler_q1`, `device_turbuhaler_q2`, `device_turbuhaler_q3`, `device_turbuhaler_q4`, `device_turbuhaler_q5`, `device_turbuhaler_q6`) VALUES
(1, 3, '2013-08-15 00:00:00', 1, NULL, 0, NULL, 1, NULL),
(2, 3, '2013-08-12 00:00:00', 1, NULL, 0, NULL, 1, NULL),
(6, 3, '2013-06-18 00:00:00', 1, 0, 1, 0, 1, 0),
(9, 3, '2013-08-12 00:00:00', 1, 1, 0, 1, 1, 1),
(10, 3, '2013-07-28 00:00:00', 0, 0, 0, 1, 0, 1),
(11, 3, '2013-07-31 00:00:00', 1, 1, 1, 1, 0, 1),
(12, 3, '2013-06-30 00:00:00', 1, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_educ_diag`
--

CREATE TABLE IF NOT EXISTS `table_educ_diag` (
  `id_educ_diag` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `educ_diag_date` datetime NOT NULL,
  `educ_diag_achieved` tinyint(4) NOT NULL,
  `educ_diag_obj1` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj2` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj3_a` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj3_b` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj4_a` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj4_b` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj5` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj6` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj7` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj8_a` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj8_b` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj9` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_obj10` decimal(2,1) unsigned DEFAULT NULL,
  `educ_diag_subj_patient` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_subj_parent` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_cact` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_gp` varchar(255) DEFAULT NULL,
  `educ_diag_allergo` varchar(255) DEFAULT NULL,
  `educ_diag_pneumo` varchar(255) DEFAULT NULL,
  `educ_diag_physio` varchar(255) DEFAULT NULL,
  `educ_diag_er` varchar(255) DEFAULT NULL,
  `educ_diag_q1` varchar(250) DEFAULT NULL,
  `educ_diag_q2` varchar(250) DEFAULT NULL,
  `educ_diag_q3` varchar(250) DEFAULT NULL,
  `educ_diag_q4` varchar(250) DEFAULT NULL,
  `educ_diag_q5` varchar(250) DEFAULT NULL,
  `educ_diag_q6` varchar(250) DEFAULT NULL,
  `educ_diag_q7` varchar(250) DEFAULT NULL,
  `educ_diag_q8` varchar(250) DEFAULT NULL,
  `educ_diag_q9` varchar(250) DEFAULT NULL,
  `educ_diag_q10` varchar(250) DEFAULT NULL,
  `educ_diag_q11` varchar(250) DEFAULT NULL,
  `educ_diag_q11_2` varchar(250) DEFAULT NULL,
  `educ_diag_q11_3` varchar(250) DEFAULT NULL,
  `educ_diag_q13` varchar(250) DEFAULT NULL,
  `educ_diag_q13_2` varchar(250) DEFAULT NULL,
  `educ_diag_q14` varchar(250) DEFAULT NULL,
  `educ_diag_q15` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q17` varchar(32) DEFAULT NULL,
  `educ_diag_q18` varchar(32) DEFAULT NULL,
  `educ_diag_q19_1` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_2` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_3` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_4` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_5` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_6` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_7` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_8` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_9` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_10` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_11` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_12` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_13` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_14` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_15` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_16` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q19_17` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_1` varchar(32) DEFAULT NULL,
  `educ_diag_q20_2` varchar(32) DEFAULT NULL,
  `educ_diag_q20_3` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_4` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_5` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_6` varchar(32) DEFAULT NULL,
  `educ_diag_q20_7` varchar(32) DEFAULT NULL,
  `educ_diag_q20_8` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_9` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_10` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_11` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_12` varchar(32) DEFAULT NULL,
  `educ_diag_q20_13` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_14` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_15` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_16` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_17` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_18` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_19` varchar(32) DEFAULT NULL,
  `educ_diag_q20_20` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_21` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_22` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q20_23` varchar(32) DEFAULT NULL,
  `educ_diag_q20_24` varchar(32) DEFAULT NULL,
  `educ_diag_q21` tinyint(3) unsigned DEFAULT NULL,
  `educ_diag_q21_2` varchar(32) DEFAULT NULL,
  `educ_diag_q21_3` varchar(250) DEFAULT NULL,
  `educ_diag_q22` varchar(32) DEFAULT NULL,
  `educ_diag_q22_2` varchar(32) DEFAULT NULL,
  `educ_diag_q23` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_educ_diag`),
  KEY `fk_patient_educ_diag` (`id_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `table_educ_diag`
--

INSERT INTO `table_educ_diag` (`id_educ_diag`, `id_patient`, `educ_diag_date`, `educ_diag_achieved`, `educ_diag_obj1`, `educ_diag_obj2`, `educ_diag_obj3_a`, `educ_diag_obj3_b`, `educ_diag_obj4_a`, `educ_diag_obj4_b`, `educ_diag_obj5`, `educ_diag_obj6`, `educ_diag_obj7`, `educ_diag_obj8_a`, `educ_diag_obj8_b`, `educ_diag_obj9`, `educ_diag_obj10`, `educ_diag_subj_patient`, `educ_diag_subj_parent`, `educ_diag_cact`, `educ_diag_gp`, `educ_diag_allergo`, `educ_diag_pneumo`, `educ_diag_physio`, `educ_diag_er`, `educ_diag_q1`, `educ_diag_q2`, `educ_diag_q3`, `educ_diag_q4`, `educ_diag_q5`, `educ_diag_q6`, `educ_diag_q7`, `educ_diag_q8`, `educ_diag_q9`, `educ_diag_q10`, `educ_diag_q11`, `educ_diag_q11_2`, `educ_diag_q11_3`, `educ_diag_q13`, `educ_diag_q13_2`, `educ_diag_q14`, `educ_diag_q15`, `educ_diag_q17`, `educ_diag_q18`, `educ_diag_q19_1`, `educ_diag_q19_2`, `educ_diag_q19_3`, `educ_diag_q19_4`, `educ_diag_q19_5`, `educ_diag_q19_6`, `educ_diag_q19_7`, `educ_diag_q19_8`, `educ_diag_q19_9`, `educ_diag_q19_10`, `educ_diag_q19_11`, `educ_diag_q19_12`, `educ_diag_q19_13`, `educ_diag_q19_14`, `educ_diag_q19_15`, `educ_diag_q19_16`, `educ_diag_q19_17`, `educ_diag_q20_1`, `educ_diag_q20_2`, `educ_diag_q20_3`, `educ_diag_q20_4`, `educ_diag_q20_5`, `educ_diag_q20_6`, `educ_diag_q20_7`, `educ_diag_q20_8`, `educ_diag_q20_9`, `educ_diag_q20_10`, `educ_diag_q20_11`, `educ_diag_q20_12`, `educ_diag_q20_13`, `educ_diag_q20_14`, `educ_diag_q20_15`, `educ_diag_q20_16`, `educ_diag_q20_17`, `educ_diag_q20_18`, `educ_diag_q20_19`, `educ_diag_q20_20`, `educ_diag_q20_21`, `educ_diag_q20_22`, `educ_diag_q20_23`, `educ_diag_q20_24`, `educ_diag_q21`, `educ_diag_q21_2`, `educ_diag_q21_3`, `educ_diag_q22`, `educ_diag_q22_2`, `educ_diag_q23`) VALUES
(7, 3, '2013-08-05 12:44:11', 1, 0.0, 2.0, 2.0, 0.0, 0.0, 1.0, 0.0, 1.0, 1.0, 1.0, 1.0, 1.0, 1.0, 0, 0, 0, '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', '', '', ''),
(12, 4, '2013-08-05 15:08:59', 1, 2.0, 2.0, 0.0, 0.0, 1.0, 1.0, 0.0, 0.0, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 0, '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', 0, '', '', '', '', ''),
(15, 14, '2013-08-22 22:48:45', 1, 0.0, 2.0, 0.0, 2.0, 0.5, 1.0, 0.0, 0.0, 1.0, 1.0, 1.0, 0.5, 0.5, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', 0, '', '', '', '', ''),
(16, 11, '2013-09-04 17:52:56', 1, 2.0, 0.0, 2.0, 2.0, 0.5, 1.0, 2.0, 0.0, 1.0, 0.5, 1.0, 0.5, 1.0, 0, 0, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `table_group`
--

CREATE TABLE IF NOT EXISTS `table_group` (
  `id_group` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_language`
--

CREATE TABLE IF NOT EXISTS `table_language` (
  `id_language` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `language_code` char(5) NOT NULL,
  `language_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `table_language`
--

INSERT INTO `table_language` (`id_language`, `language_code`, `language_name`) VALUES
(1, 'fr_FR', 'Français'),
(2, 'en_US', 'English');

-- --------------------------------------------------------

--
-- Structure de la table `table_message`
--

CREATE TABLE IF NOT EXISTS `table_message` (
  `id_messages` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` smallint(6) NOT NULL,
  `message_date` datetime NOT NULL,
  `message_subject` varchar(254) DEFAULT NULL,
  `message_content` text NOT NULL,
  PRIMARY KEY (`id_messages`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `table_message`
--

INSERT INTO `table_message` (`id_messages`, `id_user`, `message_date`, `message_subject`, `message_content`) VALUES
(1, 2, '2013-08-22 01:48:15', 'c''est moi', 'coucou, ça va ?'),
(2, 2, '2013-08-22 13:49:35', 'c''est encore moi (eh oui)', 'il y a un problème\r\nlequel ?'),
(3, 2, '2013-08-22 14:12:58', '', 'voici');

-- --------------------------------------------------------

--
-- Structure de la table `table_parent_eval`
--

CREATE TABLE IF NOT EXISTS `table_parent_eval` (
  `id_parent_eval` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_cycle_educ` smallint(6) NOT NULL,
  `parent_eval_date` datetime NOT NULL,
  `parent_eval_q1_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q1_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q2_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q2_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q3_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q3_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q4_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q4_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q5_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q5_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q6_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q6_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q7_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q7_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q8_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q8_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q9_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q9_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q10_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q10_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q11_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q11_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q12_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q12_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q13_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q13_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q14_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q14_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q15_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q15_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q16_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q16_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q17_answer` tinyint(4) DEFAULT NULL,
  `parent_eval_q17_belief` tinyint(4) DEFAULT NULL,
  `parent_eval_q18` tinyint(4) DEFAULT NULL,
  `parent_eval_q19` tinyint(4) DEFAULT NULL,
  `parent_eval_q20` tinyint(4) DEFAULT NULL,
  `parent_eval_q21` tinyint(4) DEFAULT NULL,
  `parent_eval_q22` tinyint(4) DEFAULT NULL,
  `parent_eval_q23` tinyint(4) DEFAULT NULL,
  `parent_eval_q24` tinyint(4) DEFAULT NULL,
  `parent_eval_q25` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_parent_eval`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `table_parent_eval`
--

INSERT INTO `table_parent_eval` (`id_parent_eval`, `id_cycle_educ`, `parent_eval_date`, `parent_eval_q1_answer`, `parent_eval_q1_belief`, `parent_eval_q2_answer`, `parent_eval_q2_belief`, `parent_eval_q3_answer`, `parent_eval_q3_belief`, `parent_eval_q4_answer`, `parent_eval_q4_belief`, `parent_eval_q5_answer`, `parent_eval_q5_belief`, `parent_eval_q6_answer`, `parent_eval_q6_belief`, `parent_eval_q7_answer`, `parent_eval_q7_belief`, `parent_eval_q8_answer`, `parent_eval_q8_belief`, `parent_eval_q9_answer`, `parent_eval_q9_belief`, `parent_eval_q10_answer`, `parent_eval_q10_belief`, `parent_eval_q11_answer`, `parent_eval_q11_belief`, `parent_eval_q12_answer`, `parent_eval_q12_belief`, `parent_eval_q13_answer`, `parent_eval_q13_belief`, `parent_eval_q14_answer`, `parent_eval_q14_belief`, `parent_eval_q15_answer`, `parent_eval_q15_belief`, `parent_eval_q16_answer`, `parent_eval_q16_belief`, `parent_eval_q17_answer`, `parent_eval_q17_belief`, `parent_eval_q18`, `parent_eval_q19`, `parent_eval_q20`, `parent_eval_q21`, `parent_eval_q22`, `parent_eval_q23`, `parent_eval_q24`, `parent_eval_q25`) VALUES
(2, 0, '0000-00-00 00:00:00', 1, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, '0000-00-00 00:00:00', 0, 1, 1, 0, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, '0000-00-00 00:00:00', 0, 1, 1, 0, 1, 2, 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `table_patient`
--

CREATE TABLE IF NOT EXISTS `table_patient` (
  `id_patient` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` smallint(5) unsigned NOT NULL,
  `patient_surname` varchar(50) NOT NULL,
  `patient_firstname` varchar(50) NOT NULL,
  `patient_date_birth` date NOT NULL,
  `patient_date_inclusion` date DEFAULT NULL,
  `patient_sex` tinyint(1) NOT NULL,
  `patient_height` tinyint(3) unsigned DEFAULT NULL,
  `patient_weight` smallint(3) DEFAULT NULL,
  `patient_peakflow` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_patient`),
  KEY `fk_user_patient` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `table_patient`
--

INSERT INTO `table_patient` (`id_patient`, `id_user`, `patient_surname`, `patient_firstname`, `patient_date_birth`, `patient_date_inclusion`, `patient_sex`, `patient_height`, `patient_weight`, `patient_peakflow`) VALUES
(3, 2, 'Durand', 'Arthur', '2011-05-13', NULL, 0, 0, 0, 0),
(4, 2, 'Dupond', 'Catherine', '2007-06-15', NULL, 1, 0, 0, 0),
(11, 2, 'Darel', 'Gérard', '2008-08-15', NULL, 0, 0, 0, 0),
(14, 2, 'Hugo', 'Victor', '1802-02-26', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `table_peakflow`
--

CREATE TABLE IF NOT EXISTS `table_peakflow` (
  `id_peakflow` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `peakflow_date` datetime NOT NULL,
  `peakflow_value` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_peakflow`),
  KEY `fk_patient_peakflow` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_peakflow_use`
--

CREATE TABLE IF NOT EXISTS `table_peakflow_use` (
  `id_peakflow_use` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `peakflow_use_date` datetime NOT NULL,
  `peakflow_use_q1` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q2` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q3` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q4` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q5` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q6` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q7` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q8` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q9` tinyint(3) unsigned DEFAULT NULL,
  `peakflow_use_q10` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_peakflow_use`),
  KEY `fk_patient_breath` (`id_patient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `table_peakflow_use`
--

INSERT INTO `table_peakflow_use` (`id_peakflow_use`, `id_patient`, `peakflow_use_date`, `peakflow_use_q1`, `peakflow_use_q2`, `peakflow_use_q3`, `peakflow_use_q4`, `peakflow_use_q5`, `peakflow_use_q6`, `peakflow_use_q7`, `peakflow_use_q8`, `peakflow_use_q9`, `peakflow_use_q10`) VALUES
(2, 3, '2013-08-12 07:10:23', 1, NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL),
(4, 3, '2013-09-24 00:00:00', 1, 1, 1, NULL, 0, 0, NULL, NULL, NULL, NULL),
(7, 3, '2013-09-24 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_speciality`
--

CREATE TABLE IF NOT EXISTS `table_speciality` (
  `id_speciality` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `speciality_name_fr_FR` varchar(50) NOT NULL,
  `speciality_name_en_US` varchar(50) DEFAULT NULL,
  `speciality_type` varchar(20) NOT NULL COMMENT 'speciality or subspeciality',
  PRIMARY KEY (`id_speciality`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `table_speciality`
--

INSERT INTO `table_speciality` (`id_speciality`, `speciality_name_fr_FR`, `speciality_name_en_US`, `speciality_type`) VALUES
(1, 'pédiatre', 'pediatrist', 'speciality'),
(2, 'médecin généraliste', 'general practitioner', 'speciality'),
(3, 'allergologue', 'allergologist', 'subspeciality'),
(4, 'pneumologue', 'pneumologist', 'subspeciality');

-- --------------------------------------------------------

--
-- Structure de la table `table_target`
--

CREATE TABLE IF NOT EXISTS `table_target` (
  `id_target` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `target_num` tinyint(3) NOT NULL,
  `target_name_fr_FR` varchar(255) NOT NULL,
  `target_name_en_US` varchar(255) DEFAULT NULL,
  `target_security` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_target`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `table_target`
--

INSERT INTO `table_target` (`id_target`, `target_num`, `target_name_fr_FR`, `target_name_en_US`, `target_security`) VALUES
(1, 1, 'Repérer les signes de la crise et les signes annonciateurs', NULL, 1),
(2, 2, 'Identifier les signes de gravité d''une crise', NULL, 1),
(3, 3, 'Avoir une attitude adaptée en cas de crise : le plan d''action personnalisé', NULL, 1),
(4, 4, 'Faire la différence entre traitement de fond et traitement de crise - comprendre son corps et s''expliquer les mécanismes de l''asthme', NULL, 0),
(5, 5, 'Pratiquer les techniques de prise de médicaments inhalés', NULL, 1),
(6, 6, 'Mesurer son débit expiratoire de pointe', NULL, 0),
(7, 7, 'Appliquer la conduite à tenir en fonction des chiffres du débit de pointe', NULL, 0),
(8, 8, 'Identifier, pour les réduire, les facteurs déclenchants ou aggravant les crises. Aménager un environnement favorable à sa santé', NULL, 0),
(9, 9, 'Prévenir le bronchospasme induit par l''exercice', NULL, 0),
(10, 10, 'Adapter son traitement en fonction du contexte de vie (école, vacances, sorties, infections)', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `id_user` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_surname` varchar(50) DEFAULT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_login` varchar(32) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `id_country` smallint(5) NOT NULL,
  `user_street` varchar(50) DEFAULT NULL,
  `user_postal_code` int(6) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_mail` varchar(30) DEFAULT NULL,
  `user_title` varchar(5) DEFAULT NULL,
  `user_practice` tinyint(3) DEFAULT NULL COMMENT '1 = ambulatoire, 2 = communautaire, 3 = hospitalier',
  `id_language` smallint(5) unsigned NOT NULL,
  `user_therap_educ` tinyint(3) unsigned DEFAULT NULL,
  `user_validation_Essential` tinyint(3) unsigned NOT NULL,
  `user_eval_to_do` tinyint(1) NOT NULL,
  `id_group` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_language` (`id_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `table_user`
--

INSERT INTO `table_user` (`id_user`, `user_surname`, `user_firstname`, `user_login`, `user_password`, `id_country`, `user_street`, `user_postal_code`, `user_city`, `user_phone`, `user_mail`, `user_title`, `user_practice`, `id_language`, `user_therap_educ`, `user_validation_Essential`, `user_eval_to_do`, `id_group`) VALUES
(2, 'Robberecht', 'Marie-Noëlle', 'robberecht', '$2y$15$OhGeIThohNAi9ceteiQu9eqo3Wm/HX9OAPZ1/pvr2BbrI5MEEtjRa', 1, 'une rue', 59000, 'Mons en Baroeul', '13', 'moi@gmail.com', 'Dr.', 3, 1, 1, 1, 0, NULL),
(3, 'Labesse', 'Julie', 'labesse', '$2y$15$OhGeIThohNAi9ceteiQu9eqwfdTi4TWziNsFBAdTAVKoagPXnLNBW', 1, '', 0, '', '00', 'qcc@qqc.com', 'Mme.', 2, 1, 0, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `table_user_eval`
--

CREATE TABLE IF NOT EXISTS `table_user_eval` (
  `id_user_eval` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` smallint(5) unsigned NOT NULL,
  `user_eval_date` datetime NOT NULL,
  `user_eval_q1_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q1_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q1_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q1_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q1_5` tinyint(3) unsigned NOT NULL,
  `user_eval_q2_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q2_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q2_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q2_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q2_5` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_5` tinyint(3) unsigned NOT NULL,
  `user_eval_q3_6` tinyint(3) unsigned NOT NULL,
  `user_eval_q4_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q4_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q4_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q4_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q4_5` tinyint(3) unsigned NOT NULL,
  `user_eval_q5_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q5_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q5_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q5_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q6_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q6_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q7_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q7_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q7_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q7_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_5` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_6` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_7` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_8` tinyint(3) unsigned NOT NULL,
  `user_eval_q8_9` tinyint(3) unsigned NOT NULL,
  `user_eval_q9_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q9_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q9_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q9_4` tinyint(3) unsigned NOT NULL,
  `user_eval_q10_1` tinyint(3) unsigned NOT NULL,
  `user_eval_q10_2` tinyint(3) unsigned NOT NULL,
  `user_eval_q10_3` tinyint(3) unsigned NOT NULL,
  `user_eval_q10_4` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_user_eval`),
  KEY `fk_user_eval` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `table_user_eval`
--

INSERT INTO `table_user_eval` (`id_user_eval`, `id_user`, `user_eval_date`, `user_eval_q1_1`, `user_eval_q1_2`, `user_eval_q1_3`, `user_eval_q1_4`, `user_eval_q1_5`, `user_eval_q2_1`, `user_eval_q2_2`, `user_eval_q2_3`, `user_eval_q2_4`, `user_eval_q2_5`, `user_eval_q3_1`, `user_eval_q3_2`, `user_eval_q3_3`, `user_eval_q3_4`, `user_eval_q3_5`, `user_eval_q3_6`, `user_eval_q4_1`, `user_eval_q4_2`, `user_eval_q4_3`, `user_eval_q4_4`, `user_eval_q4_5`, `user_eval_q5_1`, `user_eval_q5_2`, `user_eval_q5_3`, `user_eval_q5_4`, `user_eval_q6_1`, `user_eval_q6_2`, `user_eval_q7_1`, `user_eval_q7_2`, `user_eval_q7_3`, `user_eval_q7_4`, `user_eval_q8_1`, `user_eval_q8_2`, `user_eval_q8_3`, `user_eval_q8_4`, `user_eval_q8_5`, `user_eval_q8_6`, `user_eval_q8_7`, `user_eval_q8_8`, `user_eval_q8_9`, `user_eval_q9_1`, `user_eval_q9_2`, `user_eval_q9_3`, `user_eval_q9_4`, `user_eval_q10_1`, `user_eval_q10_2`, `user_eval_q10_3`, `user_eval_q10_4`) VALUES
(9, 2, '2013-08-02 12:19:01', 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0),
(12, 2, '2013-08-05 10:49:42', 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1),
(13, 2, '2013-08-08 19:26:47', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 3, '2013-08-09 09:30:59', 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0),
(15, 2, '2013-09-04 18:12:20', 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_user_eval_answer`
--

CREATE TABLE IF NOT EXISTS `table_user_eval_answer` (
  `id_user_eval_answer` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `right_eval_answer` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user_eval_answer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `table_user_eval_answer`
--

INSERT INTO `table_user_eval_answer` (`id_user_eval_answer`, `right_eval_answer`) VALUES
(1, '1_3'),
(2, '1_5'),
(3, '2_2'),
(4, '2_4'),
(5, '3_1'),
(6, '3_2'),
(7, '3_5'),
(8, '4_2'),
(9, '4_3'),
(10, '4_5'),
(11, '5_3'),
(12, '6_2'),
(13, '7_2'),
(14, '7_4'),
(15, '8_2'),
(16, '8_4'),
(17, '8_5'),
(18, '8_8'),
(19, '9_2'),
(20, '10_2'),
(21, '10_4');

-- --------------------------------------------------------

--
-- Structure de la table `table_user_eval_corr`
--

CREATE TABLE IF NOT EXISTS `table_user_eval_corr` (
  `id_user_eval_corr` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_eval` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_user_eval_corr`),
  KEY `fk_user_eval_corr` (`id_user_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_user_speciality`
--

CREATE TABLE IF NOT EXISTS `table_user_speciality` (
  `id_user` smallint(5) unsigned NOT NULL,
  `id_speciality` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_user`,`id_speciality`),
  KEY `fk_user_speciality` (`id_user`),
  KEY `fk_speciality` (`id_speciality`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_user_speciality`
--

INSERT INTO `table_user_speciality` (`id_user`, `id_speciality`) VALUES
(2, 1),
(2, 3),
(3, 2),
(3, 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `table_cycle_educ`
--
ALTER TABLE `table_cycle_educ`
  ADD CONSTRAINT `fk_patient_cycle` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`);

--
-- Contraintes pour la table `table_cycle_target`
--
ALTER TABLE `table_cycle_target`
  ADD CONSTRAINT `fk_cycle_educ` FOREIGN KEY (`id_cycle_educ`) REFERENCES `table_cycle_educ` (`id_cycle_educ`),
  ADD CONSTRAINT `fk_target` FOREIGN KEY (`id_target`) REFERENCES `table_target` (`id_target`);

--
-- Contraintes pour la table `table_educ_diag`
--
ALTER TABLE `table_educ_diag`
  ADD CONSTRAINT `fk_patient_educ_diag` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`);

--
-- Contraintes pour la table `table_patient`
--
ALTER TABLE `table_patient`
  ADD CONSTRAINT `fk_user_patient` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`);

--
-- Contraintes pour la table `table_peakflow`
--
ALTER TABLE `table_peakflow`
  ADD CONSTRAINT `fk_patient_peakflow` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`);

--
-- Contraintes pour la table `table_peakflow_use`
--
ALTER TABLE `table_peakflow_use`
  ADD CONSTRAINT `fk_patient_breath` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`);

--
-- Contraintes pour la table `table_user`
--
ALTER TABLE `table_user`
  ADD CONSTRAINT `fk_language` FOREIGN KEY (`id_language`) REFERENCES `table_language` (`id_language`);

--
-- Contraintes pour la table `table_user_eval`
--
ALTER TABLE `table_user_eval`
  ADD CONSTRAINT `fk_user_eval` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`);

--
-- Contraintes pour la table `table_user_eval_corr`
--
ALTER TABLE `table_user_eval_corr`
  ADD CONSTRAINT `fk_user_eval_corr` FOREIGN KEY (`id_user_eval`) REFERENCES `table_user_eval` (`id_user_eval`);

--
-- Contraintes pour la table `table_user_speciality`
--
ALTER TABLE `table_user_speciality`
  ADD CONSTRAINT `fk_speciality` FOREIGN KEY (`id_speciality`) REFERENCES `table_speciality` (`id_speciality`),
  ADD CONSTRAINT `fk_user_speciality` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
