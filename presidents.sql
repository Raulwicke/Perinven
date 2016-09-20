#Presidents of the United States
#Authors: Claudia Rojas, Nicholas Bradford, Colin May

Create database if exists site_db;
Drop table if exists presidents;

Create table if not exists presidents(
	id INT primary key auto increment,
	fName TEXT NOT NULL,
	lName TEXT NOT NULL,
	number INT NOT NULL,
	dob DATETIME NOT NULL
);

Insert into presidents(fName, lName, number, dob)
	VALUES('Franklin', 'Roosevelt', 32, 1882-1-30);
Insert into presidents(fName, lName, number, dob)
	VALUES('Ulysses', 'Grant', 18, 1822-3-27);
Insert into presidents(fName, lName, number, dob)
	VALUES('James', 'Buchanan', 15, 1791-3-23);
Insert into presidents(fName, lName, number, dob)
	VALUES('Martin', 'Van Buren', 8, 1782-12-5);
Insert into presidents(fName, lName, number, dob)
	VALUES('William', 'Howard', 27, 1857-9-15);

explain presidents;

#Frankling D Roosevelt. 32 January 30, 1882
#Ulysses S. Grant 18 April 27, 1822
#James Buchanan 15 April 23, 1791
#Martin Van Buren 8 December 5, 1782
#William Howard Taft 27 September 15, 1857