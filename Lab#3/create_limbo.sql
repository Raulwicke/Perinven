#This file creates the Limbo database. 
#Author: Nicholas Bradford, Claudia Rojas, Colin May 
 
 
drop database if exists limbo_db ; 
create database limbo_db ; 
use limbo_db ; 
 
#Creating Stuff table with an ID, a Desription, a finder-id, and a location-id with a boolean for if it has been retrieved
CREATE TABLE IF NOT EXISTS stuff ( 
id INT, 
description TEXT, 
fid int, 
locid int,  
retrieved BOOLEAN NOT NULL DEFAULT 0, 
 
#sets the primary key to the item id
PRIMARY KEY (id) ); 
