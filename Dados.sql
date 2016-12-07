/*
-- Query: SELECT * FROM bd.eventos
LIMIT 0, 1000

-- Date: 2016-12-07 18:39
*/

CREATE TABLE `eventos` (
  `idEventos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `local` varchar(255) NOT NULL,
  PRIMARY KEY (`idEventos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `eventos` (`idEventos`,`titulo`,`autor`,`data`,`local`) VALUES (1,'Visita ao museu','Manel','2016-12-06','Guimarães');
INSERT INTO `eventos` (`idEventos`,`titulo`,`autor`,`data`,`local`) VALUES (2,'Piquenique','João','2016-12-07','Lisboa');
INSERT INTO `eventos` (`idEventos`,`titulo`,`autor`,`data`,`local`) VALUES (3,'Ida à praia ','Andreia','2016-12-08','Porto');
