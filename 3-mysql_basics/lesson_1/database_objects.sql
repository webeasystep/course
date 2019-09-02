What is a table?
- The data in an RDBMS is stored in database objects which are called as tables.
- This table is basically a collection of related data entries and it consists of numerous columns and rows.

Remember, a table is the most common and simplest form of data storage in a relational database.
The following program is an example of a CUSTOMERS table .

+----+----------+-----+-----------+----------+
| ID | USERNAME | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  1 | ahmed    |  32 | Cairo     |  2000.00 |
|  2 | mostafa  |  25 | Alex      |  1500.00 |
|  3 | kareem   |  23 | Giza      |  2000.00 |
|  4 | raoof    |  25 | Hulwan    |  6500.00 |
|  5 | kamal    |  27 | Suez      |  8500.00 |
|  6 | hamza    |  22 | Luxor     |  4500.00 |
|  7 | hany     |  24 | Tanta     | 10000.00 |
+----+----------+-----+-----------+----------+

What is a column ?
A column is a vertical entity in a table that contains all information associated with
 a specific field in a table.

For example, a column in the CUSTOMERS table is ADDRESS, which represents location description
and would be as shown below .

+-----------+
| ADDRESS   |
+-----------+


What is a Record or a Row?
A record is also called as a row of data is each individual entry that exists in a table.
For example, there are 7 records in the above CUSTOMERS table. Following is a single row of data or record
in the CUSTOMERS table .

+----+----------+-----+-----------+----------+
|  1 | Ramesh   |  32 | Ahmedabad |  2000.00 |
+----+----------+-----+-----------+----------+
A record is a horizontal entity in a table.

What is a field?
Every table is broken up into smaller entities called fields.
The fields in the CUSTOMERS table consist of ID, USERNAME, AGE, ADDRESS and SALARY.

a field is the intersection of a row and a column Aka(cells).
i.e. if your table has 10 rows and 10 columns, it has 100 fields.

+-----------+
| ADDRESS   |
+-----------+
| Cairo     |
| Alex      |
| Giza      |
| Hulwan    |
| Suez      |
| Luxor     |
| Tanta     |
+-----------+