
####################################### Sorting Retrieved Data  ###################################

# sort the data alphabetically by the prod_name column
SELECT prod_name FROM products ORDER BY prod_name;

# Sorting by Multiple Columns
# the products are sorted by the prod_name column only when multiple rows have the same prod_price value.
# If all the values in the prod_price column had been unique, no data would have been sorted by prod_name.
SELECT prod_id, prod_price, prod_name FROM products ORDER BY prod_price, prod_name;

#the default sort order  is  ascending (ASC) which means  (from A to Z)
# Your Can sort order  descending  (DESC ) which means  (from Z to A)
SELECT prod_id, prod_price, prod_name FROM products ORDER BY prod_price DESC;

# But what if you were to sort by multiple columns?
SELECT prod_id, prod_price, prod_name FROM products ORDER BY prod_price DESC, prod_name;
