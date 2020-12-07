create database if not exists tyonhaku;

use tyonhaku;

create table hakija (
	id int not null primary key auto_increment,
	nimi varchar(100) not null,
	sahkoposti varchar(100) not null unique,
	puhelinnumero varchar(12) not null unique,
	osoite varchar(100) not null,
	postinumero varchar(5) not null,
	muuta TEXT,
	osaaminen1 int not null,
	osaaminen2 int not null,
	osaaminen3 int not null,
	osaaminen4 int not null,
	osaaminen5 int not null,
	osaaminen6 int not null	
);