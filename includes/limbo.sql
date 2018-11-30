#List all buildings on campus
#Authors: Danielle Anderson, Amy Moczydlowski, Shaina Razvi, Melissa Chodziutko
#Version 1.0

#create a database and use it
drop database if exists limbo_db;
create database if not exists limbo_db;
use limbo_db;
drop database if exists site_db;
create database if not exists site_db;
use site_db;

#create user table
drop table if exists users;
create table if not exists users
(
user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
pass CHAR(40) NOT NULL,
email VARCHAR(100) NOT NULL,
PRIMARY KEY (user_id)
);

#insert admin (only one who needs a login)
insert into users (username, pass, email)
values ("admin", "gaze11e", "admin@marist.com");

#create stuff table
drop table if exists stuff;
create table if not exists stuff
(
id INT AUTO_INCREMENT PRIMARY KEY,
location_id INT NOT NULL,
description TEXT NOT NULL,
create_date DATETIME NOT NULL,
update_date DATETIME NOT NULL,
room TEXT,
owner TEXT,
finder TEXT,
item_status SET("found", "lost", "claimed") NOT NULL
);

#create location table
drop table if exists location;
create table if not exists location
(
id INT AUTO_INCREMENT,
create_date DATETIME NOT NULL,
update_date DATETIME NOT NULL,
name TEXT NOT NULL,
PRIMARY KEY (id)
);

insert into location (create_date, update_date, name)
values (Now(), Now(), "Byrne House"),
(Now(), Now(), "Cannavino Library"),
(Now(), Now(), "Champagnat"),
(Now(), Now(), "Chapel"),
(Now(), Now(), "Cornell Boathouse"),
(Now(), Now(), "Donnelly"),
(Now(), Now(), "Dyson Center"),
(Now(), Now(), "Fern Tor"),
(Now(), Now(), "Fontaine Hall"),
(Now(), Now(), "Foy Townhouses"),
(Now(), Now(), "Fulton Street Townhouses (Lower)"),
(Now(), Now(), "Fulton Street Townhouses (Upper)"),
(Now(), Now(), "Greystone Hall"),
(Now(), Now(), "Hancock Center"),
(Now(), Now(), "Kieran Gatehouse"),
(Now(), Now(), "Kirk House"),
(Now(), Now(), "Leo Hall"),
(Now(), Now(), "Longview Park"),
(Now(), Now(), "Lowell Thomas"),
(Now(), Now(), "Lower Townhouses"),
(Now(), Now(), "Marian Hall"),
(Now(), Now(), "McCann Center"),
(Now(), Now(), "Mid-Rise Hall"),
(Now(), Now(), "North Campuse Housing Complex"),
(Now(), Now(), "St. Anne's Hermitage"),
(Now(), Now(), "St. Peter's"),
(Now(), Now(), "Science and Allied Health Building"),
(Now(), Now(), "Sheahan Hall"),
(Now(), Now(), "Steel Plant Studios and Gallery"),
(Now(), Now(), "Student Center/Music Building"),
(Now(), Now(), "West Cedar Townhouses (Lower)"),
(Now(), Now(), "West Cedar Townhouses (Upper)");

#adding items to stuff table
insert into stuff (location_id, description, create_date, update_date, room, owner, finder, item_status)
values (15, "Black Backpack", '2017-10-23 11:42:03', '2017-12-06 07:12:46', "HC 005", "John Smith", "N/A", "lost"),
(7, "Pink Calculator", '2018-07-15 22:56:19', '2018-07-17 17:08:35', "DY 222", "Sky Hillings", "N/A", "lost"),
(6, "Red Waterbottle", '2018-09-26 07:34:44', '2018-10-19 04:23:55', "DN 108", "Frank Sampson", "N/A", "lost"),
(18, "iPhone6 with pink case", '2018-05-12 20:12:32', '2018-07-13 10:11:46', "Leo Lounge", "Bob Ington", "Rose Perkins", "found"),
(20, "Japanese I book", '2018-06-07 18:38:22', '2018-10-27 14:50:35', "LT 102", "Sam Oberson", "George Cal", "found"),
(9, "Blue ballpoint pen", '2018-08-02 20:44:03', '2018-11-07 13:54:00', "FN 100", "Phil Hedge", "Abby Johnson", "found");
