/*The goal is to create and populate a database for Limbo
  Authors: Claudia Rojas, Nicholas Bradford, Colin May
  Version: 1.0
*/

Drop database if exists limbo_db;
Create database if not exists limbo_db;
Use limbo_db;

Drop table if exists users;
Create table if not exists users(
	user_id INT UNSIGNED NOT NULL auto_increment,
	first_name VARCHAR(20) NOT NULL, 
	last_name VARCHAR(40) NOT NULL,
	email VARCHAR(60) NOT NULL,
	pass VARCHAR(40) NOT NULL,
	reg_date DATETIME NOT NULL,
	PRIMARY KEY (user_id),
	UNIQUE (email)
);
/*To show the users table after it is created*/
explain users;


INSERT INTO users(first_name,last_name,email ,pass, reg_date)
	VALUES('admin', '', 'N/A','gaze11e', now());
/*Show user*/
select *
from users;



Drop table if exists stuff;
Create table if not exists stuff(
	id INT primary key auto_increment,
	location_id INT NOT NULL,
	description TEXT NOT NULL,
	create_date DATETIME NOT NULL,
	update_date DATETIME NOT NULL,
	room TEXT,
	owner TEXT,
	finder TEXT,
	status SET("found","lost","claimed") NOT NULL
);
/*To show the stuff table after it is created*/
explain stuff;



Drop table if exists locations;
Create table if not exists locations(
	id INT primary key auto_increment,
	create_date DATETIME NOT NULL,
	update_date DATETIME NOT NULL,
	name TEXT NOT NULL
);
/*Show the table to make sure it is correct*/
explain locations;


INSERT INTO locations(name,create_date, update_date)
	VALUES('Hancock',now(),now()),
	      ('Dyson',now(),now()),
	      ('Lowell Thomas',now(),now()),
	      ('Fontaine',now(),now()),
	      ('Bryne House',now(),now()),
	      ('Library',now(),now()),
	      ('Champagnat Hall',now(),now()),
	      ('Leo Hall',now(),now()),
	      ('Chapel',now(),now()),
	      ('Cornell Boathouse',now(),now()),
	      ('Donnely Hall',now(),now()),
	      ('Foy',now(),now()),
	      ('Lower Fulton',now(),now()),
	      ('Upper Fulton',now(),now()),
	      ('Greystone Hall',now(),now()),
	      ('Kirk House',now(),now()),
	      ('McCann Center',now(),now()),
	      ('Longview Park',now(),now()),
	      ('Kieran Gatehouse',now(),now()),
	      ('St Anne\'s Hermitage',now(),now()),
	      ('St Peter\'s',now(),now()),
	      ('Lower Townhouses',now(),now()),
	      ('Marian Hall',now(),now()),
	      ('Marist Boathouse',now(),now()),
	      ('MidRise',now(),now()),
	      ('North Campus Housing Complex',now(),now()),
	      ('Steel Plant',now(),now()),
	      ('Allied Health',now(),now()),
	      ('Sheahan',now(),now()),
	      ('Student Center',now(),now()),
	      ('Upper West Cedar',now(),now()),
	      ('Lower West Cedar',now(),now());
/*To show the locations table after it is created*/
SELECT *
FROM locations;
