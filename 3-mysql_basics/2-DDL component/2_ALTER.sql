CREATE TABLE vehicles (
  vehicleId INT,
  year      INT          NOT NULL,
  make      VARCHAR(100) NOT NULL,
  PRIMARY KEY (vehicleId)
);

/* -------------------------
    ALTER TABLE table_name
    ACTION
    new_column_name column_definition
    [FIRST | AFTER column_name]
  --------------------------- */

####################################### ALTER ADD COLUMN #######################################
-- Add a column
ALTER TABLE vehicles
  ADD model VARCHAR(100) NOT NULL;

-- Add multiple columns
ALTER TABLE vehicles
  ADD color VARCHAR(50),
  ADD note VARCHAR(255);

####################################### ALTER Modify COLUMN #######################################
-- Modify a column
ALTER TABLE vehicles
  MODIFY note VARCHAR(100) NOT NULL;
-- Modify multiple columns
ALTER TABLE vehicles
  MODIFY year SMALLINT NOT NULL,
  MODIFY color VARCHAR(20) NULL
  AFTER make;

####################################### ALTER RENAME COLUMN #######################################
ALTER TABLE vehicles
  CHANGE COLUMN note vehicleCondition VARCHAR(100) NOT NULL;

ALTER TABLE vehicles
RENAME TO cars;
RENAME TABLE
    vehicles TO cars;

####################################### ALTER DROP COLUMN #######################################
ALTER TABLE vehicles
  DROP COLUMN vehicleCondition;