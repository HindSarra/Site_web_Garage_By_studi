-- Crée la base de données garage_auto

CREATE DATABASE garage_auto;

-- Crée la table role

CREATE TABLE
    `role` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR (255) NOT NULL
    ) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8;

-- Insère les valeurs dans la table role

INSERT INTO
    `role` (`id`, `name`)
VALUES (1, 'Admin'), (2, 'Employer'), (3, 'Guest');

-- Crée la table car

DROP TABLE IF EXISTS `car`;

CREATE TABLE
    `car` (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        `brand` VARCHAR(45),
        `modele` VARCHAR(45),
        `price` DECIMAL(10, 2),
        `year` INT(11),
        `distance` INT(11),
        `image` VARCHAR(255) DEFAULT NULL
    );

INSERT INTO
    `car` (
        `id`,
        `brand`,
        `modele`,
        `price`,
        `year`,
        `distance`,
        `image`
    )
VALUES (
        1,
        'Opel',
        'Citadine',
        3600.00,
        2012,
        25000,
        NULL
    ), (
        2,
        'Bentley',
        'Berline',
        95000.00,
        2008,
        24454,
        NULL
    ), (
        3,
        'BMW',
        'Citadine',
        25000.00,
        2010,
        21550,
        NULL
    ), (
        4,
        'Mercedes',
        'Berline',
        38600.00,
        2011,
        20100,
        NULL
    ), (
        5,
        'Jeep',
        'SUV',
        19000.00,
        2009,
        34450,
        NULL
    ), (
        6,
        'BMW',
        'Coupé',
        15000.00,
        2012,
        11400,
        NULL
    ), (
        7,
        'Fiat',
        'Citadine',
        9000.00,
        2020,
        41543,
        NULL
    ), (
        9,
        'Fiat',
        'Citadine',
        15000.00,
        2020,
        15904,
        NULL
    ), (
        10,
        'Toyota',
        'SUV',
        25000.00,
        2020,
        15904,
        NULL
    ), (
        11,
        'BMW',
        'Coupé',
        14000.00,
        2013,
        150904,
        NULL
    ), (
        12,
        'Audi',
        'Coupé',
        22000.00,
        2012,
        20904,
        NULL
    ), (
        13,
        'Mitsubishi',
        'SUV',
        10000.00,
        2020,
        90904,
        NULL
    ), (
        14,
        'Hyundai',
        'SUV',
        8000.00,
        2007,
        150904,
        NULL
    );

-- Crée la table open_day

DROP TABLE IF EXISTS `open_day`;

CREATE TABLE
    `open_day` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `day` VARCHAR(70),
        `hour_open` TIME,
        `hour_close` TIME
    );

-- Insère les données dans la table open_day

INSERT INTO
    `open_day` (
        `id`,
        `day`,
        `hour_open`,
        `hour_close`
    )
VALUES (
        1,
        'Lun',
        '11:00:00',
        '20:00:00'
    ), (
        2,
        'Mar',
        '11:00:00',
        '20:00:00'
    ), (
        3,
        'Mer',
        '11:00:00',
        '20:00:00'
    ), (
        4,
        'Jeu',
        '11:00:00',
        '20:00:00'
    ), (
        5,
        'Ven',
        '11:00:00',
        '20:00:00'
    ), (
        6,
        'Sam',
        '11:00:00',
        '14:00:00'
    ), (7, 'Dim', NULL, NULL);

-- Crée la table user

DROP TABLE IF EXISTS `user`;

CREATE TABLE
    `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `first_name` varchar(255) NOT NULL,
        `last_name` varchar(255) NOT NULL,
        `role` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO `user` ( ) 