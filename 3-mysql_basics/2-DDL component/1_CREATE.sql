CREATE DATABASE mysql_basics;

CREATE TABLE customers
(
  cust_id      int          NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cust_name    VARCHAR(50)  NOT NULL,
  cust_address VARCHAR(50)  NOT NULL,
  cust_city    VARCHAR(50)  NOT NULL,
  cust_state   VARCHAR(5)       NULL,
  cust_zip     VARCHAR(10)  NOT NULL,
  cust_country VARCHAR(50)  NOT NULL,
  cust_contact VARCHAR(50)  NOT NULL,
  cust_email   VARCHAR(255) NOT NULL,
  is_active    TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  reg_date     TIMESTAMP   DEFAULT CURRENT_TIMESTAMP
  ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB;

# NOT NULL
# Each row must contain a value for that column, null values are not allowed

# DEFAULT value
# Set a default value that is added when no other value is passed

# UNSIGNED
# Used for number types, limits the stored data to positive numbers and zero

#  PRIMARY KEY
# Used to uniquely identify the rows in a table.
# The column with PRIMARY KEY setting is often an ID number,and is often used with AUTO_INCREMENT

# AUTO INCREMENT
# MySQL automatically increases the value of the field by 1 each time a new record is added
