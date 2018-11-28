# This file creates the limbo database. 
# Author: Amy Moczydlowski 

drop database if exists limbo_db;
create database if not exists limbo_db;
use limbo_db;

create table if not exists stuff (
 id INT not null,
 descr TEXT
);
explain stuff;

alter table stuff
add primary key (id),
change descr description TEXT,
add column date_found DATE,
add column time_found TIME,
add column name TEXT;
explain stuff;

create table if not exist admins (
	admin_id INT not null PRIMARY KEY,
	username TEXT,
	email TEXT,
	password TEXT
);
explain admins;
