#This file creates the Limbo database.
#Author: Nicholas Bradford, Claudia Rojas, Colin May

drop database if exists limbo_db ;
create database limbo_db ;
use limbo_db ;

CREATE TABLE IF NOT EXISTS stuff (
id INT,
description TEXT,
fid int,
locid int, 
retrieved BOOLEAN NOT NULL DEFAULT 0,

PRIMARY KEY (id) );