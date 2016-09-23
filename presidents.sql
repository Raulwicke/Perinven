#Presidents of the United States
#Authors: Claudia Rojas, Nicholas Bradford, Colin May

Drop database if exists site_db;
Create database if not exists site_db;
Use site_db;

Drop table if exists presidents;
Create table if not exists presidents(
	id INT primary key auto_increment,
	fName TEXT NOT NULL,
	lName TEXT NOT NULL,
	number INT NOT NULL,
	dob DATETIME NOT NULL
);

explain presidents;

Insert into presidents(fName, lName, number, dob)
	VALUES("Franklin", "Roosevelt", 32, "1882-1-30 00:00:00"),
		("Ulysses", "Grant", 18, "1822-3-27 00:00:00"),
		("James", "Buchanan", 15, "1791-3-23 00:00:00"),
		("Martin", "Van Buren", 8, "1782-12-5 00:00:00"),
		("William", "Howard Taft", 27, "1857-9-15 00:00:00");

#Franklin D Roosevelt. 32 January 30, 1882
#Ulysses S. Grant 18 April 27, 1822
#James Buchanan 15 April 23, 1791
#Martin Van Buren 8 December 5, 1782
#William Howard Taft 27 September 15, 1857

SELECT * from presidents;

#order by number ascending
SELECT lName, number, dob FROM presidents
ORDER BY number ASC;

#order by last name ascending
SELECT lName, number, dob FROM presidents
ORDER BY lName ASC;

#order by dob descending
SELECT lName, number, dob FROM presidents
ORDER BY dob DESC;










C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\binaries\mysql\bin>mysql -uroot
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 6
Server version: 5.6.15-log MySQL Community Server (GPL)

Copyright (c) 2000, 2013, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> source presidents.sql
Query OK, 1 row affected (0.00 sec)

Query OK, 1 row affected (0.00 sec)

Database changed
Query OK, 0 rows affected, 1 warning (0.00 sec)

Query OK, 0 rows affected (0.03 sec)

+--------+----------+------+-----+---------+----------------+
| Field  | Type     | Null | Key | Default | Extra          |
+--------+----------+------+-----+---------+----------------+
| id     | int(11)  | NO   | PRI | NULL    | auto_increment |
| fName  | text     | NO   |     | NULL    |                |
| lName  | text     | NO   |     | NULL    |                |
| number | int(11)  | NO   |     | NULL    |                |
| dob    | datetime | NO   |     | NULL    |                |
+--------+----------+------+-----+---------+----------------+
5 rows in set (0.00 sec)

Query OK, 5 rows affected (0.00 sec)
Records: 5  Duplicates: 0  Warnings: 0

+----+----------+-------------+--------+---------------------+
| id | fName    | lName       | number | dob                 |
+----+----------+-------------+--------+---------------------+
|  1 | Franklin | Roosevelt   |     32 | 1882-01-30 00:00:00 |
|  2 | Ulysses  | Grant       |     18 | 1822-03-27 00:00:00 |
|  3 | James    | Buchanan    |     15 | 1791-03-23 00:00:00 |
|  4 | Martin   | Van Buren   |      8 | 1782-12-05 00:00:00 |
|  5 | William  | Howard Taft |     27 | 1857-09-15 00:00:00 |
+----+----------+-------------+--------+---------------------+
5 rows in set (0.00 sec)

+-------------+--------+---------------------+
| lName       | number | dob                 |
+-------------+--------+---------------------+
| Van Buren   |      8 | 1782-12-05 00:00:00 |
| Buchanan    |     15 | 1791-03-23 00:00:00 |
| Grant       |     18 | 1822-03-27 00:00:00 |
| Howard Taft |     27 | 1857-09-15 00:00:00 |
| Roosevelt   |     32 | 1882-01-30 00:00:00 |
+-------------+--------+---------------------+
5 rows in set (0.00 sec)

+-------------+--------+---------------------+
| lName       | number | dob                 |
+-------------+--------+---------------------+
| Buchanan    |     15 | 1791-03-23 00:00:00 |
| Grant       |     18 | 1822-03-27 00:00:00 |
| Howard Taft |     27 | 1857-09-15 00:00:00 |
| Roosevelt   |     32 | 1882-01-30 00:00:00 |
| Van Buren   |      8 | 1782-12-05 00:00:00 |
+-------------+--------+---------------------+
5 rows in set (0.00 sec)

+-------------+--------+---------------------+
| lName       | number | dob                 |
+-------------+--------+---------------------+
| Roosevelt   |     32 | 1882-01-30 00:00:00 |
| Howard Taft |     27 | 1857-09-15 00:00:00 |
| Grant       |     18 | 1822-03-27 00:00:00 |
| Buchanan    |     15 | 1791-03-23 00:00:00 |
| Van Buren   |      8 | 1782-12-05 00:00:00 |
+-------------+--------+---------------------+
5 rows in set (0.00 sec)

mysql>
