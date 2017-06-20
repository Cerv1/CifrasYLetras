SET FOREIGN_KEY_CHECKS=0;
 DROP TABLE Resource;

CREATE TABLE `Resource` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idResource` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idResource`),
  KEY `idSubject` (`idSubject`),
  CONSTRAINT `Resource_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `Subject` (`idSubject`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Resource VALUES("presentacion","PRES","ISE");
INSERT INTO Resource VALUES("tema 158","t158-mates","MATES");
INSERT INTO Resource VALUES("Tema 1 - ISE","T1ISE","ISE");
INSERT INTO Resource VALUES("tema 1","t1LC","LC");
INSERT INTO Resource VALUES("Tema 1 - LMD","T1LMD","LMD");
INSERT INTO Resource VALUES("Tema 2 - IG","T2IG","IG");
INSERT INTO Resource VALUES("tema 2","t2LC","LC");
INSERT INTO Resource VALUES("tema 3","t3-FBD","FBD");



DROP TABLE Student;

CREATE TABLE `Student` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailStudent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`emailStudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Student VALUES("Sergio","Cervilla Ortega","cervi@gmail.com","1996-06-26","cerviroot");



DROP TABLE StudentSubject;

CREATE TABLE `StudentSubject` (
  `emailStudent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`emailStudent`,`idSubject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO StudentSubject VALUES("cervick13@gmail.com","MATES");
INSERT INTO StudentSubject VALUES("cmss@gmail.com","ISE");
INSERT INTO StudentSubject VALUES("cmss@gmail.com","LMD");
INSERT INTO StudentSubject VALUES("cmss@gmail.com","MATES");



DROP TABLE Subject;

CREATE TABLE `Subject` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailTeacher` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idSubject`),
  KEY `emailTeacher` (`emailTeacher`),
  CONSTRAINT `Subject_ibfk_1` FOREIGN KEY (`emailTeacher`) REFERENCES `Teacher` (`emailTeacher`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Subject VALUES("Fundamentos de Bases de Datos","FBD","adrian95morente@gmail.com");
INSERT INTO Subject VALUES("Informática Gráfica","IG","cervick13@gmail.com");
INSERT INTO Subject VALUES("Ingeniería de Servidores","ISE","cervick13@gmail.com");
INSERT INTO Subject VALUES("Lengua Castellana","LC","adrian95morente@gmail.com");
INSERT INTO Subject VALUES("Lógica","LMD","adrian95morente@gmail.com");
INSERT INTO Subject VALUES("Matemáticas","MATES","adrian95morente@gmail.com");
INSERT INTO Subject VALUES("Tecnologias Web","TW","Cervick13@gmail.com");



DROP TABLE Teacher;

CREATE TABLE `Teacher` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailTeacher` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`emailTeacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO Teacher VALUES("adri","morente","adrian95morente@gmail.com","1995-10-20","adriroot");
INSERT INTO Teacher VALUES("cervi","cervilla","cervick13@gmail.com","1996-06-26","cervipass");



DROP TABLE hasResource;

CREATE TABLE `hasResource` (
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idResource` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `idSubject` (`idSubject`),
  KEY `idResource` (`idResource`),
  CONSTRAINT `hasResource_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `Subject` (`idSubject`),
  CONSTRAINT `hasResource_ibfk_2` FOREIGN KEY (`idResource`) REFERENCES `Resource` (`idResource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE studiesSubject;

CREATE TABLE `studiesSubject` (
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailStudent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `idSubject` (`idSubject`),
  KEY `emailStudent` (`emailStudent`),
  CONSTRAINT `studiesSubject_ibfk_1` FOREIGN KEY (`idSubject`) REFERENCES `Subject` (`idSubject`),
  CONSTRAINT `studiesSubject_ibfk_2` FOREIGN KEY (`emailStudent`) REFERENCES `Student` (`emailStudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE teachsSubject;

CREATE TABLE `teachsSubject` (
  `emailTeacher` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSubject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `emailTeacher` (`emailTeacher`),
  KEY `idSubject` (`idSubject`),
  CONSTRAINT `teachsSubject_ibfk_1` FOREIGN KEY (`emailTeacher`) REFERENCES `Teacher` (`emailTeacher`),
  CONSTRAINT `teachsSubject_ibfk_2` FOREIGN KEY (`idSubject`) REFERENCES `Subject` (`idSubject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE users;

CREATE TABLE `users` (
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `dni` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("Cervi","Cervilla","cervipass","0000-00-00","14275233F");



 
SET FOREIGN_KEY_CHECKS=1;