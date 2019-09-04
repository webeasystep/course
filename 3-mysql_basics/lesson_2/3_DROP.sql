CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL
)  ENGINE=INNODB;

--------------------------------------- DROP -----------------------------------------
-- REMOVE DATABASE
DROP DATABASE test;
-- REMOVE TABLE OR TABLES
DROP TABLE IF EXISTS books;


