
CREATE TABLE `usuarios` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`nombres` varchar(120) DEFAULT NULL,
`correo` varchar(120) DEFAULT NULL,
`numero` int (10) DEFAULT NULL,
`direccion` varchar(120) DEFAULT NULL,
`empresa` varchar(120) DEFAULT NULL,
PRIMARY KEY (`id`)
)ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO usuarios (nombres, correo, numero, direccion,empresa) values
('manuel sanchez mijangos','msmijangos@gmail.com',7222910544,'sucre #1239','3ds');



grant all privileges on php2.* to userweb@localhost identified by "php2";
