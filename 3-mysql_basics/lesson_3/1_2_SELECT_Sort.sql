
####################################### Sorting Retrieved Data  ###################################

# data is typically displayed in the order in which it appears in the underlying tables.
# This could be the order in which the data was added to the tables initially. However,
# if data was subsequently updated or deleted,
# the order is affected by how MySQL reuses reclaimed storage space.
# The end result is that you cannot (and should not) rely on the sort order if you do not explicitly control it.

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
