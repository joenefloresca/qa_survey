/*
SQLyog Community v11.42 (64 bit)
MySQL - 5.6.17 : Database - form
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`form` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `form`;

/*Table structure for table `forms` */

DROP TABLE IF EXISTS `forms`;

CREATE TABLE `forms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AgentName` varchar(50) NOT NULL,
  `TeamLeaderManager` varchar(50) NOT NULL,
  `Campaign` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL,
  `EvaluatedBy` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `MandatoryIsStated` varchar(50) NOT NULL,
  `AgentIsPitch` varchar(50) NOT NULL,
  `MandatoryOptIsStated` varchar(50) NOT NULL,
  `WaitMandatoryOptIsStated` varchar(50) NOT NULL,
  `IsRecordingDisclosed` varchar(50) NOT NULL,
  `IsCustomerPermanentResident` varbinary(50) NOT NULL,
  `IsCustomerAddressVerified` varchar(50) NOT NULL,
  `IsCustomerAddressAccurate` varchar(50) NOT NULL,
  `IsCustomerNameVerified` varchar(50) NOT NULL,
  `IsCustomerNameCapturedCRM` varchar(50) NOT NULL,
  `IsCustomerAgeVerified` varchar(50) NOT NULL,
  `IsCustomerAgeBracketCaptured` varchar(50) NOT NULL,
  `IsCustomerHomeStatusVerified` varchar(50) NOT NULL,
  `IsCustomerHomeStatusVerifiedCRM` varchar(50) NOT NULL,
  `IsCustomerEmpploymentStatusVerified` varchar(50) NOT NULL,
  `IsCustomerEmpploymentStatusVerifiedCRM` varchar(50) NOT NULL,
  `IsMaritalStatusVerified` varchar(50) NOT NULL,
  `IsMaritalStatusVerifiedCRM` varchar(50) NOT NULL,
  `IsMarketingQuestionsRead` varchar(50) NOT NULL,
  `IsMarketingQuestionsReadCRM` varchar(50) NOT NULL,
  `IsBreakingCycleFollowed` varchar(50) NOT NULL,
  `IsPositiveResponsesValidated` varchar(50) NOT NULL,
  `IsAngentExpressUnderstable` varchar(50) NOT NULL,
  `IsAppropriateTerms` varchar(50) NOT NULL,
  `IsVocalQualityPracticed` varchar(50) NOT NULL,
  `IsPoliteAcknowledgement` varchar(50) NOT NULL,
  `IsCorrectInformation` varchar(50) NOT NULL,
  `IsStandardRebuttals` varchar(50) NOT NULL,
  `IsMandatoryClosingStateMent` varchar(50) NOT NULL,
  `IsCustomerNotInLine` varchar(50) NOT NULL,
  `IsNotInterrupted` varchar(50) NOT NULL,
  `IsEmphatized` varchar(50) NOT NULL,
  `YesCounts` int(11) NOT NULL,
  `NoCounts` int(11) NOT NULL,
  `NACounts` int(11) NOT NULL,
  `AutoFail` varchar(50) NOT NULL,
  `QualityScore` float NOT NULL,
  `ProcessedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `forms` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd_hash` char(34) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(225) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`pwd_hash`,`fname`,`lname`,`email`,`country`,`address`,`gender`) values (1,'joenefloresca','$1$u31.fo4.$gC2xm1VDjC8lo.JaLSeRV/','Joene','Floresca','joenefloresca@gmail.com','PH','Makati','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
