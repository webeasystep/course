################### The 3 Types of Relationships in Database Design ################################

# 1- One-to-One
    # A row in table A can have only one matching row in table B, and vice versa

# 2- One-to-Many (or Many-to-One)
    # This is the most common relationship type. In this type of relationship,
    # a row in table A can have many matching rows in table B,
    # but a row in table B can have only one matching row in table A.

# 3- Many-to-Many
    # a row in table A can have many matching rows in table B, and vice versa.
    # This table is used to link the other two tables together.
    # It does this by having two fields that reference the primary key of each of the other two tables

##################################### Relational keys #############################################
# What is a primary key ?

# The primary key is the field that is used to ensure the uniqueness of the data in the table.
# This means that the value (information) in the primary key field in each row (record) is unique.
# Uniqueness is necessary to avoid ambiguity, when it is not known which table entry can be accessed
# if there are duplicate entries in the table (two records have the same values in all fields of the table).

# A relational database table must always have one and only one primary key.
# No two rows can have the same primary key value and not allow NULL values.
# to avoid duplication in primary values it is recommended to use (AUTO INCREMENT).


# What is a foreign key ?

# a key used to link two tables together.also called as a referencing key.
# a column (or collection of columns) whose values match a Primary Key in a different table.

######################################### Joining Tables ######################################

# INNER JOIN
  # returns rows when there is a match in  both tables based on the foreign key
  # To retrieve a list of all customers,  who have placed orders, as the following:

SELECT customers.cust_id, orders.order_num
FROM customers INNER JOIN orders
         ON customers.cust_id = orders.cust_id;

# OUTER JOINs

# 1- LEFT : returns all rows from the left table, even if there are no matches in the right table.
  # To retrieve a list of all customers, including those who have placed no orders, as following:
SELECT customers.cust_id, orders.order_num
FROM customers LEFT OUTER JOIN orders
         ON customers.cust_id = orders.cust_id;

# 2- RIGHT : returns all rows from the right table, even if there are no matches in the left table.
  #To retrieve a list of all orders, including those who have placed no customers, as following:
SELECT customers.cust_id, orders.order_num
FROM customers RIGHT OUTER JOIN orders
         ON orders.cust_id = customers.cust_id;
