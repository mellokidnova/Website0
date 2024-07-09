-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `crud_example`;

-- Use the database
USE `crud_example`;

-- Create users table
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample users
INSERT INTO `users` (`name`, `email`) VALUES
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com');
