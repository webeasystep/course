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

####################################### Sorting Retrieved Data  ###################################
/*
data is typically displayed in the order in which it appears in the underlying tables.
This could be the order in which the data was added to the tables initially. However,
if data was subsequently updated or deleted,
the order is affected by how MySQL reuses reclaimed storage space.
The end result is that you cannot (and should not) rely on the sort order if you do not explicitly control it.
 */
# sort the data alphabetically by the prod_name column
SELECT prod_name
FROM products
ORDER BY prod_name;
# Sorting by Multiple Columns
/*
the products are sorted by the prod_name column only when multiple rows have the same prod_price value.
 If all the values in the prod_price column had been unique, no data would have been sorted by prod_name.
*/
SELECT prod_id, prod_price, prod_name
FROM products
ORDER BY prod_price, prod_name;

#the default sort order  is  ascending (ASC) which means  (from A to Z)
# Your Can sort order  descending  (DESC ) which means  (from Z to A)
SELECT prod_id, prod_price, prod_name
FROM products
ORDER BY prod_price DESC;
# But what if you were to sort by multiple columns?
SELECT prod_id, prod_price, prod_name
FROM products
ORDER BY prod_price DESC, prod_name;

######################################### Filtering Data  ######################################
# When using both ORDER BY and WHERE clauses
# review Logical Operators

SELECT prod_name, prod_price
FROM products
WHERE prod_price = 2.50;
# Using the AND Operator
SELECT prod_id, prod_price, prod_name
FROM products
WHERE vend_id = 1003 AND prod_price <= 10;
# Using the OR Operator
SELECT prod_name, prod_price
FROM products
WHERE vend_id = 1002 OR vend_id = 1003;
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
