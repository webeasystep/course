--------------------------------------- TRUNCATE --------------------------------------
The TRUNCATE TABLE statement
resets value in the AUTO_INCREMENT  column to its start value if the table has an AUTO_INCREMENT column
TRUNCATE  books;

DELETE VS DROP
Unlike a DELETE statement, the number of rows affected by the TRUNCATE TABLE statement is 0,
which should be interpreted as no information