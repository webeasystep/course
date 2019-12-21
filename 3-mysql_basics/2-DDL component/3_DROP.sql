CREATE TABLE books (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL
)
  ENGINE = INNODB;

######################################### DROP #########################################
-- REMOVE DATABASE
CREATE DATABASE drop_test;
DROP DATABASE drop_test;
-- REMOVE TABLE OR TABLES
DROP TABLE IF EXISTS books;


