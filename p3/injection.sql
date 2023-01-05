-- This is our code to implement our SQL data storage
-- Creation Date: 4/10/2022
-- Tate Lemm, Devon Boldt, Mason Marker, Alex Polivka
-- CS 347

-- SQL Stuff for proj 2 
----------------------

-- 1) the database name is called viperlogin and is utf8_general_ci

----------------------

-- 2) enter the following sql to generate the table and test users 

-----------------------

--creates tables for users
CREATE TABLE users (
	usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	usersName varchar(128) NOT NULL,
	usersEmail varchar(128) NOT NULL,
	usersUid varchar(128) NOT NULL,
	usersIgn varchar(128) NOT NULL,
	usersPwd varchar(128) NOT NULL
);

--inserts test users information
INSERT INTO users (usersName, usersEmail, usersUid, usersIgn, usersPwd) VALUES ("Admin Person", "Admin@gmail.com", "Admin", "AdminRulez", "$2y$10$bp4Z6j.pNWAX6h0cPr.AEepfiAolyZh86FNkeeLsLXe6sDAjHAr0m");
INSERT INTO users (usersName, usersEmail, usersUid, usersIgn, usersPwd) VALUES ("Jim Hardy", "lifelongtundra@gmail.com", "Tundra", "Tundra", "$2y$10$XmZ54XdMr4YCw2MeYTPNdOYTGStyf2SFm0wb69L0ffNVaRc5bcnya");
INSERT INTO users (usersName, usersEmail, usersUid, usersIgn, usersPwd) VALUES ("Steve Jobs", "apple@gmail.com", "SteveJ", "AppleNum1", "$2y$10$G1mLGt6UNY.DGNs.jpDpzO5xu71B7bFej8GpPxuv7bFUH8pRea312");
INSERT INTO users (usersName, usersEmail, usersUid, usersIgn, usersPwd) VALUES ("Bill Gates", "micro@outlook.com", "GatesB", "AppleSuxxs", "$2y$10$USk7q0y0LR8NJprvEDDmQ.9KOUqcqkCCKF.xxfhdnD5nonZjabf1S");

--creates tables for possible links to be posted on the website
CREATE TABLE links (
    linksId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    linksName varchar(128) NOT NULL,
    linksUrl varchar(128) NOT NULL,
    linksUserId int(11) NOT NULL,
	approved int(11) NOT NULL,
    FOREIGN KEY (linksUserId) REFERENCES users(usersId)
);

-- inserts a possible link to be approved by the admin
INSERT INTO links (linksName, linksUrl, linksUserId, approved) VALUES ("Google", "https://www.google.com", 1, 0);

--------------------
-- List of users 

-- User: Admin
-- Pass: V3ryH@rdP@ss

-- User: Tundra
-- Pass: Tundra7

-- User: SteveJ
-- Pass: M1cr0s()ftB@d

-- User: GatesB
-- Pass: ImT00T1r3d