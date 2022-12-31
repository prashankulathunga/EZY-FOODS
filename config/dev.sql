CREATE TABLE `ezyfoods`.`developers` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(200) NOT NULL ,
    `position` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `uid` INT(100) NOT NULL ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB; 

INSERT INTO `developers` (`id`, `name`, `position`, `email`, `uid`) VALUES 
(NULL, 'GC Dilshan', 'Designer', 'dilshanc5322@gmail.com', '25433'), 
(NULL, 'MKA Nimsara', 'Designer', 'animsara04@gmail.com', '25595'),
(NULL, 'MPR Kulathunga', 'Designer', 'prashanrandikakulathunga@gmail.com', '25865'),
(NULL, 'RT Ekanayaka', 'Designer', 'rashiekanayaka955@gmail.com', '25404'),
(NULL, 'CNK Dissanayake', 'Art Director', 'chathuri.nisaka@gmail.com', '24895'),
(NULL, 'DDS Dissanayaka', 'CEO & Founder', 'dsdissanayaka2002@gmail.com', '25387'),
(NULL, 'SI Madhavi', 'Designer', 'madhavifernando623@gmail.com', '25432') 