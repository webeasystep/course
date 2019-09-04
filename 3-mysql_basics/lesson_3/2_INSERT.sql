########################### Inserting Complete Rows ###############################
INSERT INTO customers(cust_name,
                      cust_address,
                      cust_city,
                      cust_state,
                      cust_zip,
                      cust_country,
                      cust_contact,
                      cust_email)
VALUES('Pep E. LaPew',
       '100 Main Street',
       'Los Angeles',
       'CA',
       '90046',
       'USA',
       NULL,
       NULL);
########################### Inserting Multiple Rows  ###############################
INSERT INTO customers(cust_name,
                      cust_address,
                      cust_city,
                      cust_state,
                      cust_zip,
                      cust_country)
VALUES(
          'Pep E. LaPew',
          '100 Main Street',
          'Los Angeles',
          'CA',
          '90046',
          'USA'
          ),
      (
          'M. Martian',
          '42 Galaxy Way',
          'New York',
          'NY',
          '11213',
          'USA'
          );
########################### Inserting Retrieved Data ###############################
INSERT INTO customers(cust_id,
                      cust_contact,
                      cust_email,
                      cust_name,
                      cust_address,
                      cust_city,
                      cust_state,
                      cust_zip,
                      cust_country)
SELECT cust_id,
       cust_contact,
       cust_email,
       cust_name,
       cust_address,
       cust_city,
       cust_state,
       cust_zip,
       cust_country
FROM custnew;
