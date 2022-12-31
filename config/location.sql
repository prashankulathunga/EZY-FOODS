CREATE TABLE locations (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imgname varchar(200) NOT NULL,
    image longtext NOT NULL,
    -- START update data related to locations --
    name VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL UNIQUE,
    phone VARCHAR(20) NULL,
    address VARCHAR(200) NULL,
    -- END update data related to locations --
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
