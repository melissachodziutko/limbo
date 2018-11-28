# Presidents of the United States
# Authors: Amy Moczydlowski, Danielle Anderson, Shaina Razvi, Melissa Chodziutko

drop database if exists site_db;
create database if not exists site_db;
use site_db;
drop table if exists presidents;

create table presidents
(
id int AUTO_INCREMENT primary key,
fname text not null,
lname text not null,
num int not null,
dob datetime default '0000-00-00 00:00:00' null
);

insert into presidents (fname, lname, num, dob)
values ("William Henry", "Harrison", 6, '1773-02-09 00:00:00'),
("George", "Washington", 1, '1732-02-22 00:00:00'),
("Theodore", "Roosevelt", 25, '1858-10-27 00:00:00'),
("Franklin", "Pierce", 15, '1804-11-23 00:00:00'),
("Martin", "Van Buren", 12, '1782-12-05 00:00:00');
		
select * from presidents;
select lname, num, dob from presidents order by num asc;
select lname, num, dob from presidents order by lname asc;
select lname, num, dob from presidents order by dob desc;