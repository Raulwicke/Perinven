-- The Purpose of this database is to provide an easy and dynamic way for student that have lost items around Marist College. 
-- Authors: Nicholas Bradford, Colin May, Claudia Rojas
-- Version 0.0.1

CREATE limbo_db
CREATE DATABASE limbo_db;
CREATE TABLE IF NOT EXISTS users(
			user_id VARCHAR(20) NOT NULL,
			first_name VARCHAR(20), 
			last_name VARCHAR(20),
			email VARCHAR(40) NOT NULL,
			pass VARCHAR(20) NOT NULL,
			reg_date DATETIME NOT NULL,
			PRIMARY KEY (user_id),
			UNIQUE (email)
		);
        
CREATE TABLE IF NOT EXISTS stuff(
			stuff_id INT NOT NULL AUTO_INCREMENT,
			location_id INT NOT NULL,
			description VARCHAR(max) NOT NULL,
			create_date DATETIME NOT NULL,
			update_date DATETIME NOT NULL,
			room VARCHAR(max),
			owner VARCHAR(max),
			finder VARCHAR(max),
			status ENUM ('found', 'lost', 'claimed'),
			PRIMARY KEY (id)
	);
	CREATE TABLE IF NOT EXISTS locations(
			location_id INT AUTO_INCREMENT 
	);