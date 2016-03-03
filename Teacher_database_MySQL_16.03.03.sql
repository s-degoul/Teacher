-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Teacher
-- ------------------------------------------------------
-- Server version	5.6.28-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `table_country`
--

DROP TABLE IF EXISTS `table_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_country` (
  `id_country` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  `country_timezone` varchar(255) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_cycle_educ`
--

DROP TABLE IF EXISTS `table_cycle_educ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_cycle_educ` (
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
  `cycle_educ_eval_subj_patient` int(11) DEFAULT NULL,
  `cycle_educ_eval_subj_parent` int(11) DEFAULT NULL,
  `cycle_educ_eval_cact` int(11) DEFAULT NULL,
  `cycle_educ_eval_date` datetime DEFAULT NULL,
  `cycle_educ_end_programme` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_cycle_educ`),
  KEY `fk_patient_cycle` (`id_patient`),
  CONSTRAINT `fk_patient_cycle` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_cycle_target`
--

DROP TABLE IF EXISTS `table_cycle_target`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_cycle_target` (
  `id_target` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_cycle_educ` smallint(5) unsigned NOT NULL,
  `cycle_target_date` datetime DEFAULT NULL,
  `cycle_target_done` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_target`,`id_cycle_educ`),
  KEY `fk_cycle_educ` (`id_cycle_educ`),
  CONSTRAINT `fk_cycle_educ` FOREIGN KEY (`id_cycle_educ`) REFERENCES `table_cycle_educ` (`id_cycle_educ`),
  CONSTRAINT `fk_target` FOREIGN KEY (`id_target`) REFERENCES `table_target` (`id_target`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_aerosol`
--

DROP TABLE IF EXISTS `table_device_aerosol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_aerosol` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_aerosolchb`
--

DROP TABLE IF EXISTS `table_device_aerosolchb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_aerosolchb` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_autohaler`
--

DROP TABLE IF EXISTS `table_device_autohaler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_autohaler` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_diskus`
--

DROP TABLE IF EXISTS `table_device_diskus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_diskus` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_novolizer`
--

DROP TABLE IF EXISTS `table_device_novolizer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_novolizer` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_device_turbuhaler`
--

DROP TABLE IF EXISTS `table_device_turbuhaler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_device_turbuhaler` (
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_educ_diag`
--

DROP TABLE IF EXISTS `table_educ_diag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_educ_diag` (
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
  KEY `fk_patient_educ_diag` (`id_patient`),
  CONSTRAINT `fk_patient_educ_diag` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_language`
--

DROP TABLE IF EXISTS `table_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_language` (
  `id_language` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `language_code` char(5) NOT NULL,
  `language_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_message`
--

DROP TABLE IF EXISTS `table_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_message` (
  `id_messages` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` smallint(6) NOT NULL,
  `message_date` datetime NOT NULL,
  `message_subject` varchar(254) DEFAULT NULL,
  `message_content` text NOT NULL,
  PRIMARY KEY (`id_messages`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_parent_eval`
--

DROP TABLE IF EXISTS `table_parent_eval`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_parent_eval` (
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_patient`
--

DROP TABLE IF EXISTS `table_patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_patient` (
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
  `patient_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_patient`),
  KEY `fk_user_patient` (`id_user`),
  CONSTRAINT `fk_user_patient` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_peakflow`
--

DROP TABLE IF EXISTS `table_peakflow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_peakflow` (
  `id_peakflow` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint(5) unsigned NOT NULL,
  `peakflow_date` datetime NOT NULL,
  `peakflow_value` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_peakflow`),
  KEY `fk_patient_peakflow` (`id_patient`),
  CONSTRAINT `fk_patient_peakflow` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_peakflow_use`
--

DROP TABLE IF EXISTS `table_peakflow_use`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_peakflow_use` (
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
  KEY `fk_patient_breath` (`id_patient`),
  CONSTRAINT `fk_patient_breath` FOREIGN KEY (`id_patient`) REFERENCES `table_patient` (`id_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_speciality`
--

DROP TABLE IF EXISTS `table_speciality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_speciality` (
  `id_speciality` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `speciality_name_fr_FR` varchar(50) NOT NULL,
  `speciality_name_en_US` varchar(50) DEFAULT NULL,
  `speciality_type` varchar(20) NOT NULL COMMENT 'speciality or subspeciality',
  PRIMARY KEY (`id_speciality`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_summary_letter`
--

DROP TABLE IF EXISTS `table_summary_letter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_summary_letter` (
  `id_summary_letter` smallint(5) NOT NULL AUTO_INCREMENT,
  `id_cycle_educ` smallint(5) NOT NULL,
  `summary_letter_name` varchar(100) NOT NULL,
  `summary_letter_date` datetime NOT NULL,
  `summary_letter_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_summary_letter`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_target`
--

DROP TABLE IF EXISTS `table_target`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_target` (
  `id_target` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `target_num` tinyint(3) NOT NULL,
  `target_name_fr_FR` varchar(255) NOT NULL,
  `target_name_en_US` varchar(255) DEFAULT NULL,
  `target_security` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_target`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_user`
--

DROP TABLE IF EXISTS `table_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user` (
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
  `user_end_teacher` int(1) NOT NULL DEFAULT '0',
  `user_rights` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_language` (`id_language`),
  CONSTRAINT `fk_language` FOREIGN KEY (`id_language`) REFERENCES `table_language` (`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_user_eval`
--

DROP TABLE IF EXISTS `table_user_eval`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user_eval` (
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
  `user_eval_achieved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user_eval`),
  KEY `fk_user_eval` (`id_user`),
  CONSTRAINT `fk_user_eval` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_user_eval_answer`
--

DROP TABLE IF EXISTS `table_user_eval_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user_eval_answer` (
  `id_user_eval_answer` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `right_eval_answer` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user_eval_answer`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_user_eval_corr`
--

DROP TABLE IF EXISTS `table_user_eval_corr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user_eval_corr` (
  `id_user_eval_corr` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_eval` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_user_eval_corr`),
  KEY `fk_user_eval_corr` (`id_user_eval`),
  CONSTRAINT `fk_user_eval_corr` FOREIGN KEY (`id_user_eval`) REFERENCES `table_user_eval` (`id_user_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `table_user_speciality`
--

DROP TABLE IF EXISTS `table_user_speciality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_user_speciality` (
  `id_user` smallint(5) unsigned NOT NULL,
  `id_speciality` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_user`,`id_speciality`),
  KEY `fk_user_speciality` (`id_user`),
  KEY `fk_speciality` (`id_speciality`),
  CONSTRAINT `fk_speciality` FOREIGN KEY (`id_speciality`) REFERENCES `table_speciality` (`id_speciality`),
  CONSTRAINT `fk_user_speciality` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-03 17:10:24
