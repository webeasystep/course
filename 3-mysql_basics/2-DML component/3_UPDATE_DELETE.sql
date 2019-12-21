########################### Updating Data ###############################

UPDATE customers
SET cust_email = 'elmer@fudd.com'
WHERE cust_id = 10005;

########################### Deleting Data ###############################
#Caution
# Don't Omit the WHERE Clause , because it is all too easy to mistakenly delete every row from your table

DELETE FROM customers
WHERE cust_id = 10006;
