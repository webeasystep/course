-- REMOVE DATABASE
CREATE DATABASE drop_test;

CREATE TABLE books (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL
)
  ENGINE = INNODB;

######################################### DROP #########################################

-- REMOVE TABLE OR TABLES
DROP TABLE IF EXISTS books;
-- REMOVE DATABASE
DROP DATABASE drop_test;



