CREATE DATABASE IF NOT EXISTS `task_message`;
USE `task_message`;

CREATE TABLE IF NOT EXISTS `task` (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255),
    task_description VARCHAR(255),
    task_type VARCHAR(255),
    task_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    task_start DATETIME,
    task_end DATE,
    task_status ENUM('0', '1') DEFAULT '0'
);
