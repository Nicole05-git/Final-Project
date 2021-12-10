drop database if exists p_reservation;
create database p_reservation;
use  p_reservation;


CREATE TABLE login(
customerID int (11) auto_increment primary key not null,
email varchar(60) UNIQUE NOT NULL,
passwordd varchar (50)
);

CREATE TABLE signup(
userID int auto_increment not null primary key,
s_email varchar(60) UNIQUE NOT NULL,
s_username varchar (50) UNIQUE,
s_passwordd varchar (50) UNIQUE,
age int,
contactt varchar(15) Unique not null,
gender enum('Male', 'Female')
-- dob date,
);

CREATE TABLE reserv(
reservID int primary key,
fname varchar (50),
lname varchar(50),
resv_date date,
resv_time time,
email varchar(60) UNIQUE NOT NULL,
guests int not null,
age int,
gender enum('Male','Female') NULL,
contact varchar(15) Unique not null,
FOREIGN KEY (email) REFERENCES login (email) 
);

CREATE TABLE subscribe(
email varchar(60) UNIQUE NOT NULL
);

CREATE TABLE users(
  tuser varchar(5) NOT NULL,
  tname varchar(50) NOT NULL, 
  gender enum('Male','Female') NULL,
  tel varchar(15) DEFAULT NULL,
  personal_email varchar(60) NOT NULL
)