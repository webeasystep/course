####################################### TRUNCATE #######################################
# The TRUNCATE removes all rows from a table
# The TRUNCATE TABLE statement resets index column
# if the table has an AUTO_INCREMENT column
CREATE TABLE books
(
    id   INT     NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_name    VARCHAR(50)  NOT NULL
) ENGINE=INNODB ;

-- INSERT
INSERT INTO books(book_name) VALUES ('book_1'),('book_2'),('book_3');

-- DELETE AND INSERT AGAIN
DELETE from books;
INSERT INTO books(book_name) VALUES ('book_1'),('book_2'),('book_3');

-- TRUNCATE amd insert again
TRUNCATE  books;
INSERT INTO books(book_name) VALUES ('book_1'),('book_2'),('book_3');

