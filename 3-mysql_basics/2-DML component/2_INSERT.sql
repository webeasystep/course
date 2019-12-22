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
INSERT INTO customers(cust_name,cust_address, cust_city,cust_state,cust_zip,cust_country)
VALUES  (
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

CREATE TABLE custnew
(
    cust_id      INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cust_name    VARCHAR(50)  NOT NULL,
    cust_address VARCHAR(50)  NOT NULL,
    cust_city    VARCHAR(50)  NOT NULL,
    cust_state   VARCHAR(5)       NULL  COMMENT 'USA State only',
    cust_zip     VARCHAR(10)  NOT NULL,
    cust_country VARCHAR(50)  NOT NULL,
    cust_contact VARCHAR(50)  NOT NULL,
    cust_email   VARCHAR(255) NOT NULL
) ENGINE=INNODB  ;


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
