CREATE TABLE`recipe` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    `recipe` VARCHAR(150) NOT NULL , 
    `ingredients` TEXT NOT NULL , 
    `method` TEXT NOT NULL ,
    `cooktime` INT(20) NOT NULL,
    `category` VARCHAR(255) NOT NULL,
    `imgname` varchar(200) NOT NULL,
    `image` longtext NOT NULL, 
    `added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)
   ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE`developers` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(200) NOT NULL ,
    `position` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `uid` INT(100) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB; 

INSERT INTO `developers` (`id`, `name`, `position`, `email`, `uid`) VALUES 
(NULL, 'DDS Dissanayaka', 'CEO & Founder', 'dsdissanayaka2002@gmail.com', '25387'),
(NULL, 'CNK Dissanayake', 'Art Director', 'chathuri.nisaka@gmail.com', '24895'),
(NULL, 'GC Dilshan', 'Designer', 'dilshanc5322@gmail.com', '25433'), 
(NULL, 'MKA Nimsara', 'Designer', 'animsara04@gmail.com', '25595'),
(NULL, 'MPR Kulathunga', 'Designer', 'prashanrandikakulathunga@gmail.com', '25865'),
(NULL, 'RT Ekanayaka', 'Designer', 'rashiekanayaka955@gmail.com', '25404'),
(NULL, 'SI Madhavi', 'Designer', 'madhavifernando623@gmail.com', '25432');

CREATE TABLE`admin` (
    `UID` INT NOT NULL AUTO_INCREMENT ,
    `UNAME` varchar(255) DEFAULT NULL,
    `UMAIL` varchar(255) DEFAULT NULL,
    `UPASSWD` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`UID`)) ENGINE = InnoDB;

INSERT INTO `admin` (`UID`,`UNAME`, `UMAIL`, `UPASSWD`) VALUES 
('100','test', 'test@test.com', '1234'), 
('101','user', 'user@user.com', 'user');