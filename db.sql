-- Default will make the ID column to always 
    -- Have the default set value, when one row deleted the incoming will replace the deleted id
-- When we use default then no need to include the Auto Increament




CREATE TABLE IF NOT EXISTS `admin`(
    `Id` int(10) NOT NULL ,
    `Name` varchar(50) NOT NULL,
    `Email` varchar(50) not null,
    `Mobile` varchar(50) not null,
    `Password` varchar(100) not null,
    PRIMARY KEY (`Id`)
);

INSERT INTO admin(Name, Email, Mobile, Password)
VALUES('AM ADMIN', 'admin@gmail.com', '0779264618', 'latask@admin');


CREATE TABLE IF NOT EXISTS `staff`(
    `Id` int(10) NOT NULL,
    `Name` varchar(50) NOT NULL,
    `Company` varchar(50) NOT NULL,
    `Mobile` varchar(50) not null,
    `Email` varchar(50) not null,
    `Password` varchar(100) not null,
    PRIMARY KEY (`Id`)
);

INSERT INTO staff(Name, Company, Email, Mobile, Password)
VALUES('STAFF', 'SKY&', 'staff@gmail.com', '0779264618', 'latask@staff');



 
CREATE TABLE IF NOT EXISTS `client`(
    `Id` int(10) NOT NULL,
    `Name` varchar(50) NOT NULL,
    `Company` varchar(50) NOT NULL,
    `Mobile` varchar(50) not null,
    `Email` varchar(50) not null,
    `Password` varchar(100) not null,
    PRIMARY KEY (`Id`)
);

INSERT INTO client (Name, Company, Email, Mobile, Password)
VALUES('CLIENT', 'MOON&', 'client@gmail.com', '0779264618', 'latask@client');













