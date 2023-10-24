CREATE TABLE `Usuario` (
  `Usuario` varchar(100) DEFAULT NULL,
    `GMAIL` varchar(100) DEFAULT NULL,
    `Usuario_ID` int(7) DEFAULT NULL,
    `Sexo` date(2) DEFAULT NULL,
    `Edad` date(99) DEFAULT NULL
)

INSERT INTO `Usuario` (`Usuario`, `GMAIL`, `Usuario_ID`, `Sexo`, `Edad`) VALUES
('PedritoYT', 'carlos@gmail.com', 1, 'Masculino', '18'),
('Andris17', 'andrea@gmail.com', 2, 'Femenino', '24'),
('CR7PEN', 'juan@gmail.com', 3, 'Masculino', '21'),
('Cachumambe', 'joaquín@gmail.com', 'Masculino', '16');

ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Usuario_ID`);