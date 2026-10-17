-- ============================================================
-- College Management System (EWCM) — Database Schema
-- ============================================================

-- 1. Create Database
CREATE DATABASE IF NOT EXISTS `ewcm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ewcm`;

-- ------------------------------------------------------------
-- Table: admin
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `admin` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    `security_question` varchar(255) NOT NULL,
    `security_answer` varchar(255) NOT NULL,
    `full_name` varchar(100) NOT NULL,
    `role` varchar(50) DEFAULT 'admin',
    `last_login` datetime DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Default Admin Account
-- Username: admin
-- Password: admin123
INSERT INTO `admin` (
    `username`, `email`, `password`, `security_question`, `security_answer`, `full_name`, `role`
) VALUES (
    'admin', 
    'admin@ewcm.edu.in', 
    '$2y$10$vCT1WSPy5yF9VOWpPy.R7u15GHd/.fBqwZgTj7DcW6uF8UzN5q4Ny', 
    'What is EWCM?', 
    'college', 
    'Administrator', 
    'super_admin'
);

-- Default Manager Account
-- Username: manager
-- Password: admin123
INSERT INTO `admin` (
    `username`, `email`, `password`, `security_question`, `security_answer`, `full_name`, `role`
) VALUES (
    'manager', 
    'manager@ewcm.edu.in', 
    '$2y$10$vCT1WSPy5yF9VOWpPy.R7u15GHd/.fBqwZgTj7DcW6uF8UzN5q4Ny', 
    'What is your favorite color?', 
    'blue', 
    'College Manager', 
    'admin'
);

-- ------------------------------------------------------------
-- Table: management
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `management` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `role` varchar(50) NOT NULL,
    `name` varchar(100) NOT NULL,
    `designation` varchar(100) NOT NULL,
    `qualification` varchar(255) NOT NULL,
    `experience` varchar(100) NOT NULL,
    `specialization` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `profile_image` varchar(255) DEFAULT NULL,
    `description` text NOT NULL,
    `quote` text DEFAULT NULL,
    `message` text DEFAULT NULL,
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (`id`),
    UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: enquiries
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `enquiries` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `course` varchar(100) NOT NULL,
    `message` text DEFAULT NULL,
    `status` varchar(20) NOT NULL DEFAULT 'enquiry',
    `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: faculty
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `faculty` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `designation` varchar(100) NOT NULL,
    `qualification` varchar(255) NOT NULL,
    `experience` varchar(100) NOT NULL,
    `specialization` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `profile_image` varchar(255) DEFAULT NULL,
    `department` varchar(50) NOT NULL COMMENT 'cs or ba',
    `description` text DEFAULT NULL,
    `status` tinyint(1) DEFAULT 1,
    `added_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- Table: admissions
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `admissions` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `full_name` varchar(100) NOT NULL,
    `dob` date DEFAULT NULL,
    `gender` varchar(10) DEFAULT NULL,
    `nationality` varchar(50) DEFAULT NULL,
    `father_name` varchar(100) DEFAULT NULL,
    `mother_name` varchar(100) DEFAULT NULL,
    `email` varchar(100) UNIQUE,
    `mobile` varchar(15) DEFAULT NULL,
    `address` text DEFAULT NULL,
    `course` varchar(50) DEFAULT NULL,
    `academic_year` varchar(20) DEFAULT NULL,
    `qualifying_exam` varchar(50) DEFAULT NULL,
    `board` varchar(100) DEFAULT NULL,
    `passing_year` int(4) DEFAULT NULL,
    `percentage` float DEFAULT NULL,
    `photo_path` varchar(255) DEFAULT NULL,
    `signature_path` varchar(255) DEFAULT NULL,
    `marksheet_path` varchar(255) DEFAULT NULL,
    `caste_path` varchar(255) DEFAULT NULL,
    `declaration` tinyint(1) DEFAULT 0,
    `status` enum('Pending','Approved','Rejected','On Hold') DEFAULT 'Pending',
    `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;