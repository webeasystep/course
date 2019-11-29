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
 ## get 5 rows only
SELECT prod_name FROM products LIMIT 5;

## get rows from 5 to 12
SELECT prod_name FROM products LIMIT 5,12;

/*
NOTE :
SQL statements are not case sensitive, so SELECT is the same as select.
Best practice to use uppercase for all SQL keywords and lowercase for column and table names
Which makes code easier to read and debug.

Caution :
Using Wildcards As a rule,
not using the * wildcard unless you really do need every column in the table.
retrieving unnecessary columns usually slows down the performance .

 */
