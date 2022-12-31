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
    `id` INT NOT NULL AUTO_INCREMENT ,
    `uname` varchar(255) DEFAULT NULL,
    `umail` varchar(255) DEFAULT NULL,
    `upasswd` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `admin` (`uname`, `umail`, `upasswd`) VALUES 
('test', 'test@test.com', '1234'), 
('user', 'user@user.com', 'user');