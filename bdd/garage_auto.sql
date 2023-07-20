-- Crée la base de données garage_auto

CREATE DATABASE garage_auto;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

-- Crée la table role

DROP TABLE IF EXISTS `role`;

CREATE TABLE
    IF NOT EXISTS `role` (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb3;

--

-- Déchargement des données de la table `role`

--

INSERT INTO
    `role` (`id`, `name`)
VALUES (1, 'Admin'), (2, 'Employer'), (3, 'Guest');

-- Crée la table car

DROP TABLE IF EXISTS `car`;

CREATE TABLE
    `car` (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        `title` VARCHAR(255),
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
        `title`,
        `brand`,
        `modele`,
        `price`,
        `year`,
        `distance`,
        `image`
    )
VALUES (
        1,
        'Opel Corsa ' 'Opel',
        'Citadine',
        3600.00,
        2012,
        25000,
        '1-opel.jpg'
    ), (
        2,
        'Bentley G70',
        'Bentley',
        'Berline',
        95000.00,
        2008,
        24454,
        '2.jpg'
    ), (
        3,
        'BMW serie 1',
        'BMW',
        'Citadine',
        25000.00,
        2010,
        21550,
        '3-bmw.jpg'
    ), (
        4,
        'Mercedes class c',
        'Berline',
        38600.00,
        2011,
        20100,
        '4-mercedes.jpg'
    ), (
        5,
        'Jeep Grand Cherokee',
        'Jeep',
        'SUV',
        19000.00,
        2009,
        34450,
        '5-jeep.jpg'
    ), (
        6,
        'BMW m3 bleu',
        'BWM',
        'Coupé',
        15000.00,
        2012,
        11400,
        '6-bmw-bleu.jpg'
    ), (
        7,
        'Fiat 500 rose',
        'Fiat',
        'Citadine',
        9000.00,
        2020,
        41543,
        '7-fiat_rose.jpg'
    ), (
        8,
        'Fiat 500 grise',
        'Fiat',
        'Citadine',
        15000.00,
        2020,
        15904,
        '8-fiat_gris.jpg'
    ), (
        9,
        'Toyota rav 4',
        'Toyota',
        'SUV',
        25000.00,
        2020,
        15904,
        '9-toyota.jpg'
    ), (
        10,
        'BMW m3 rouge',
        'BMW',
        'Coupé',
        65000.00,
        2013,
        150904,
        '10-bmw-red.jpg'
    ), (
        11,
        'Audi a3',
        'Audi',
        'Coupé',
        22000.00,
        2012,
        20904,
        '11-audi.jpg'
    ), (
        12,
        'Mitsubishi pajero',
        'Mitsubishi',
        'SUV',
        10000.00,
        2020,
        90904,
        '12-mitsu.jpg'
    ), (
        13,
        'Hyundai Kona',
        'Hyundai',
        'SUV',
        8000.00,
        2007,
        150904,
        '13-hu.jpg'
    ), (
        14,
        'Opel Mokka',
        'Opel',
        'SUV',
        18000.00,
        2017,
        15904,
        '14-opel-suv.jpg'
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

-- cree table commentaire

DROP table IF EXISTS `comment`;

CREATE table
    `comment` (
        `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
        `rate` INT(11),
        `name` VARCHAR(255),
        `message` TEXT
    );

INSERT INTO
    `comment` (`id`, `rate`, `name`, `message`)
VALUES (
        1,
        4,
        'John',
        ' parfaite experience'
    ), (2, 5, 'Franc', 'Bon garage'), (
        3,
        5,
        'Anne',
        'Garage a la hauteur, revie'
    );

-- Crée la table user

DROP TABLE IF EXISTS `user`;

CREATE TABLE
    `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `role_id` INT(11),
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `first_name` varchar(255) NOT NULL,
        `last_name` varchar(255) NOT NULL,
        KEY `role_id` (`role_id`),
        CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO
    `user` (
        `id`,
        `role_id`,
        `email`,
        `password`,
        `first_name`,
        `last_name`
    )
VALUES (
        1,
        1,
        'vincent.parrot@test.com',
        'rxPz1VIy33XlBstaSXGU',
        'Parrot',
        'Vincent'
    ), (
        2,
        1,
        'Jean.parrot@test.com',
        'd7fT9FczQHSHeuBxBNXb',
        'Parrot',
        'Jean'
    );