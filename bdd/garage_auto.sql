-- Crée la base de données garage_auto

CREATE DATABASE IF NOT EXISTS garageauto_db;

-- Crée la table role-

CREATE TABLE
    IF NOT EXISTS `role` (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb3;

-- Déchargement des données de la table `role`

INSERT INTO
    `role` (`id`, `name`)
VALUES (1, 'Admin'), (2, 'Employer');

--cree la table contact

CREATE TABLE
    if NOT exists `contact`(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255),
        `lastName` VARCHAR(255),
        `email` VARCHAR(255),
        `number` VARCHAR(20),
        `message` TEXT,
        created_at TIMESTAMP
    ) -- Crée la table car

DROP TABLE IF EXISTS `car`;

CREATE TABLE
    IF NOT EXISTS `car` (
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
        'Opel Corsa',
        'Opel',
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
        'Mercedes',
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
        'BMW',
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
    )
    (
        15,
        'Bugacci chiroon blanche',
        'Bugacci',
        'Coupé',
        180000.00,
        2022,
        15904,
        '15-bugacci.jpg'
    ),
      (
        16,
        'Mustang gt rouge',
        'Mustang',
        'Coupé',
        18000.00,
        2020,
        15904,
        '16-mustong.jpg'
    ),
    (
        17,
        'Ferrari F8 tributo',
        'Ferrari',
        'Coupé',
        20000.00,
        2020,
        15904,
        '17-ferrari.jpg'
    ),
     (
        18,
        'Mini jhon grise',
        'Mini',
        'Citadine',
        2000.00,
        2019,
        159041,
        '18-mini-cooper.jpg'
    ),
    (
        19,
        'Lamborghini Huracan',
        'Lamborghini',
        'Coupé',
        200000.00,
        2017,
        159041,
        '19-lamborghini.jpg'
    ),
      (
        20,
        'Porche 911 rouge',
        'Porche',
        'Coupé',
        30000.00,
        1989,
        1590041,
        '20-porche-rouge.jpg' ),
        (
        21,
        'Mercedes jaune',
        'Mercedes',
        'Coupé',
        10000.00,
        2018,
        179041,
        '21-merccedes.jpg' ),
         (
        22,
        'Ferrari la ferrari',
        'Ferrari',
        'Coupé',
        110000.00,
        2016,
        120941,
        '22-ferrari.jpg' ),
         (
        23,
        'Porche 911 grise',
        'Porche',
        'Coupé',
        90000.00,
        2017,
        140941,
        '23-porche-911.jpg' ),
        (
        24,
        'Skoda noire',
        'Skoda',
        'Break',
        9000.00,
        2017,
        140941,
        '24-skoda.jpg' ),
         (
        25,
        'Clio 4 jaune',
        'Renault',
        'Citadine',
        4000.00,
        2015,
        140941,
        '25-clio-4.jpg' ),
          (
        26,
        'Hyundei rouge',
        'Hyundei',
        'Break',
        5000.00,
        2010,
        140941,
        '26-hyundai.jpg' ),
           (
        27,
        'McLaren 720S',
        'McLaren',
        'Coupé',
        150000.00,
        2022,
        140941,
        '27-mclaren.jpg' ),
         (
        28,
        'Mercedes noire' ,
        'Mercedes',
        'Coupé',
        15000.00,
        2020,
        140941,
        '28-mercedess.jpg' )
    ;

-- Crée la table open_day

DROP TABLE IF EXISTS `open_day`;

CREATE TABLE
    IF NOT EXISTS `open_day` (
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
VALUES (1, 'Lun', '11:00', '20:00'), (2, 'Mar', '11:00', '20:00'), (3, 'Mer', '11:00', '20:00'), (4, 'Jeu', '11:00', '20:00'), (5, 'Ven', '11:00', '20:00'), (6, 'Sam', '11:00', '14:00'), (7, 'Dim', NULL, NULL);

-- table services

CREATE TABLE
    IF NOT EXISTS `services` (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        `title` VARCHAR(255),
        `description` TEXT
    );

INSERT INTO
    `services` (`id`, `title`, `description`)
VALUES (
        1,
        'Réparation mécanique',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, reprehenderit! Optio, nam? Maxime, molestiae velit. Quae, totam accusantium natus doloribus labore ratione. Molestiae ab dicta explicabo assumenda totam velit. Enim.'
    ), (
        2,
        'Diagnostic électronique',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, reprehenderit! Optio, nam? Maxime, molestiae velit. Quae, totam accusantium natus doloribus labore ratione. Molestiae ab dicta explicabo assumenda totam velit. Enim.'
    ), (
        3,
        'Vente de pièces de rechange',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, reprehenderit! Optio, nam? Maxime, molestiae velit. Quae, totam accusantium natus doloribus labore ratione. Molestiae ab dicta explicabo assumenda totam velit. Enim.'
    ) -- cree table commentaire

DROP TABLE IF EXISTS `comment`;

CREATE TABLE
    IF NOT EXISTS `comment` (
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
    IF NOT EXISTS `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `role_id` INT(11),
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `first_name` varchar(255) NOT NULL,
        `last_name` varchar(255) NOT NULL,
        KEY `role_id` (`role_id`)
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
        'ZVAzjdsP!z@Z',
        'Parrot',
        'Vincent'
    ), (
        2,
        2,
        'Jean.parrot@test.com',
        'd7fT9FczQHSHeuBxBNXb',
        'Parrot',
        'Jean'
    );

ALTER TABLE `user`
ADD
    CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);