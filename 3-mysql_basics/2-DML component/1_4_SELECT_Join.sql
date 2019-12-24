######################################### Joining Tables ######################################

# INNER JOIN
  # returns rows when there is a match in  both tables based on the foreign key
  # To retrieve a list of all customers,  who have placed orders, as the following:

SELECT customers.cust_id, orders.order_num
FROM customers INNER JOIN orders
         ON customers.cust_id = orders.cust_id;

# OUTER JOINs

# 1- LEFT : returns all records from the left table , and the matched records from the right table .
  # To retrieve a list of all customers, including those who have placed no orders, as following:
SELECT customers.cust_id, orders.order_num
FROM customers LEFT OUTER JOIN orders
         ON customers.cust_id = orders.cust_id;

# 2- RIGHT : returns all records from the right table , and the matched records from the left table .
  #To retrieve a list of all orders, including those who have placed no customers, as following:
SELECT customers.cust_id, orders.order_num
FROM customers RIGHT OUTER JOIN orders
         ON orders.cust_id = customers.cust_id;

