/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - jobs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `dt_category` */

DROP TABLE IF EXISTS `dt_category`;

CREATE TABLE `dt_category` (
  `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  `parent_category_id` bigint(20) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `is_featured` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_category` */

/*Table structure for table `dt_company` */

DROP TABLE IF EXISTS `dt_company`;

CREATE TABLE `dt_company` (
  `company_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(400) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_company` */

/*Table structure for table `dt_job_seeker` */

DROP TABLE IF EXISTS `dt_job_seeker`;

CREATE TABLE `dt_job_seeker` (
  `job_seeker_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_seeker_name` varchar(200) DEFAULT NULL,
  `job_seeker_email` varchar(200) DEFAULT NULL,
  `job_seeker_phone` varchar(12) DEFAULT NULL,
  `job_seeker_password` varchar(200) DEFAULT NULL,
  `job_seeler_location` varchar(400) DEFAULT NULL,
  `is_freshers` enum('Y','N') DEFAULT 'N',
  `is_verified_phone` enum('Y','N') DEFAULT 'N',
  `is_verified_email` enum('Y','N') DEFAULT 'N',
  `is_active` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`job_seeker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_job_seeker` */

/*Table structure for table `dt_job_seeker_employment details` */

DROP TABLE IF EXISTS `dt_job_seeker_employment details`;

CREATE TABLE `dt_job_seeker_employment details` (
  `job_seeker_employment_details_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_seeker_id` bigint(20) DEFAULT NULL,
  `job_title` varchar(500) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `is_current_company` enum('Y','N') DEFAULT 'N',
  `notice_period` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`job_seeker_employment_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_job_seeker_employment details` */

/*Table structure for table `dt_job_seeker_resume` */

DROP TABLE IF EXISTS `dt_job_seeker_resume`;

CREATE TABLE `dt_job_seeker_resume` (
  `job_seeker_resume_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resume_title` varchar(200) DEFAULT NULL,
  `profile_title` varchar(200) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `resume_file_name` varchar(300) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`job_seeker_resume_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_job_seeker_resume` */

/*Table structure for table `dt_job_seeker_skill_resume` */

DROP TABLE IF EXISTS `dt_job_seeker_skill_resume`;

CREATE TABLE `dt_job_seeker_skill_resume` (
  `job_seeker_skill_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_seeker_id` bigint(20) DEFAULT NULL,
  `job_seeker_skiils` varchar(30) DEFAULT NULL,
  `job_seeker_expected_salary` decimal(16,2) DEFAULT NULL,
  `current_resume_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`job_seeker_skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_job_seeker_skill_resume` */

/*Table structure for table `dt_skills` */

DROP TABLE IF EXISTS `dt_skills`;

CREATE TABLE `dt_skills` (
  `skill_id` bigint(20) DEFAULT NULL,
  `skill_name` varchar(400) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dt_skills` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
