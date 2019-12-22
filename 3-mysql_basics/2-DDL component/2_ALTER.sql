CREATE TABLE cars (
  id INT,
  year      INT          NOT NULL,
  brand      VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

/* -------------------------
    ALTER TABLE table_name
    ACTION
    new_column_name column_definition
    [FIRST | AFTER column_name]
  --------------------------- */

####################################### ALTER ADD COLUMN #######################################
-- Add a column
ALTER TABLE cars
  ADD model VARCHAR(100) NOT NULL;

-- Add multiple columns
ALTER TABLE cars
  ADD color VARCHAR(50),
  ADD note VARCHAR(255);

####################################### ALTER Modify COLUMN #######################################
-- Modify a column
ALTER TABLE cars
  MODIFY note VARCHAR(100) NOT NULL;
-- Modify multiple columns
ALTER TABLE cars
  MODIFY year SMALLINT NOT NULL,
  MODIFY color VARCHAR(20) NULL
  AFTER brand  ;
-- FIRST  ;

####################################### ALTER RENAME COLUMN #######################################
ALTER TABLE cars
  CHANGE COLUMN note car_condition VARCHAR(100) NOT NULL;

ALTER TABLE cars
RENAME TO car;
-- short rename
RENAME TABLE  car TO cars;

####################################### ALTER DROP COLUMN #######################################
ALTER TABLE cars
  DROP COLUMN car_condition;

####################################### ALTER COMMENT TABLE #######################################
ALTER TABLE cars
    COMMENT = 'Customer information';
