######################################### Retrieving Data  ######################################
-- Retrieve one column
SELECT prod_name FROM products;

-- Retrieve multiple columns
SELECT prod_id, prod_name, prod_price FROM products;

-- Retrieve all columns
SELECT * FROM products;

-- Retrieving Distinct Rows
SELECT DISTINCT vend_id FROM products;;

-- Limiting Results
SELECT prod_name FROM products LIMIT 5;

/*
NOTE :
It is important to note that SQL statements are not case sensitive, so SELECT is the same as select,
which is the same as Select.Many SQL developers find that using uppercase for all SQL keywords
and lowercase for column and table names makes code easier to read and debug

Caution :
Using Wildcards As a rule,
you are better off not using the * wildcard unless you really do need every column in the table.
retrieving unnecessary columns usually slows down the performance of your retrieval and your application.


 */
