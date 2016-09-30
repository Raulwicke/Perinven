/*The goal is to create and populate a database for Limbo
Authors: Claudia Rojas, Nicholas Bradford, Colin May
Version: 1.1
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

INSERT INTO users(first_name,last_name,email ,pass)
	VALUES('Sam', 'Jones', 'sam_jones1@gmail.com','gaze11e');
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

INSERT INTO locations(name)
	VALUES('Hancock'),
	      ('Dyson'),
	      ('Lowell Thomas'),
	      ('Fontaine'),
	      ('Bryne House'),
	      ('Library'),
	      ('Champagnat Hall'),
	      ('Leo Hall'),
	      ('Chapel'),
	      ('Cornell Boathouse'),
	      ('Donnely Hall'),
	      ('Foy'),
	      ('Lower Fulton'),
	      ('Upper Fulton'),
	      ('Greystone Hall'),
	      ('Kirk House'),
	      ('McCann Center'),
	      ('Longview Park'),
	      ('Lower Townhouses'),
	      ('Marian Hall'),
	      ('Marist Boathouse'),
	      ('MidRise'),
	      ('North Campus Housing Complex'),
	      ('Allied Health'),
	      ('Sheahan'),
	      ('Student Center'),
	      ('Upper West Cedar'),
	      ('Lower West Cedar');
/*To show the locations table after it is created*/
SELECT *
FROM locations;
