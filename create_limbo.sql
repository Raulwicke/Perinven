#This file creates the Limbo database.
#Author: Nicholas Bradford, Claudia Rojas, Colin May

drop database if exists limbo_db ;
create database limbo_db ;
use limbo_db ;

CREATE TABLE IF NOT EXISTS stuff (
id INT UNSIGNED NOT NULL,
desr VARCHAR(60) NOT NULL
PRIMARY KEY (id) );

