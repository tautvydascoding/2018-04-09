-- komentaras yra du bruksniukai;

-- susikuriam duomenu baze;
CREATE DATABASE Hospital4;
  -- pasitikrinam
  show database;
  -- pasirenkam db
  use Hospital4;

-- susikuriam lentele;
CREATE TABLE Doctors (
  Id INT(6) AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(30),
  Lname VARCHAR(30)
);
  -- pasitikrinam
  show tables;

-- idedam duomenis;
INSERT INTO Doctors
VALUES ('', 'Tim', 'Logan');
-- galima rasyti ir vienoje eiluteje; terminalas geriau isimintu netgi;
INSERT INTO Doctors VALUES ('', 'Paul', 'Leo');
INSERT INTO Doctors VALUES ('', 'Ona', 'Onutaite');
INSERT INTO Doctors VALUES ('', 'Lita', 'Rene');
INSERT INTO Doctors VALUES ('', 'Koris', 'Pitas');
--pasitikriname
SELECT * FROM Doctors;

-- sukuriam lentele;
CREATE TABLE Patients (
  Id INT(6) AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(30),
  Lname VARCHAR(30),
  Doctor_id INT(6)
);
  -- pasitikrinam
  show tables;

-- idedam duomenis;
INSERT INTO Patients VALUES ('', 'Mark', 'John', '2');
INSERT INTO Patients VALUES ('', 'Tom', 'Karlos', '2');
INSERT INTO Patients VALUES ('', 'Aris', 'Tiedo', '1');
INSERT INTO Patients VALUES ('', 'Tom', 'Koli', '3');
INSERT INTO Patients VALUES ('', 'Co', 'Jo', '1');
INSERT INTO Patients VALUES ('', 'Tom', 'Naro', '5');
INSERT INTO Patients VALUES ('', 'Jili', 'Jato', '4');
--pasitikriname
SELECT * FROM Patients;

-- sukuriam lentele;
CREATE TABLE Img (
  Id INT(6) AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(200),
  Patients_id INT(6)
);

-- idedam duomenis;
INSERT INTO Img VALUES ('', 'foto.jpg', '3');
INSERT INTO Img VALUES ('', '3.png', '1');
INSERT INTO Img VALUES ('', '1.jpg', '1');
INSERT INTO Img VALUES ('', '3.gif', '3');
--pasitikriname - vietoj zvaigzdutes, kad ALL, galime konkreciai nurdyti kuriu stulpeliu info norime pamatyti, pvz vien tik stulpelio name;
SELECT Name FROM Img;


UPDATE Doctors SET Name='Paulius' WHERE Id=2;

INSERT INTO Doctors VALUES ('', 'Kristina', 'K');
INSERT INTO Doctors VALUES ('', 'Kriste', 'S');

DELETE FROM Doctors WHERE Id=7;


SELECT Patients.Name, Patients.Lname FROM Patients
INNER JOIN Img ON Patients.Id = img.Patients_id;

SELECT Patients.Name, Patients.Lname FROM Patients
INNER JOIN Img ON Patients.Id = img.Patients_id
WHERE img.Id = 3;


-- // uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM Doctors WHERE Name='Koris';

-- // uzduotis 2: Pakeisti "Co" varda i "Karolis"

UPDATE Patients SET Name = 'Karolis' WHERE Id = 5;

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

UPDATE Patients SET Name = 'Tomas' WHERE Name = 'Tom';

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

UPDATE Patients SET Doctor_id = 4 WHERE Name LIKE 'T%';

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT Doctors.Lname FROM Doctors
INNER JOIN Patients ON Patients.Doctor_id = Doctors.Id
WHERE Patients.Name = 'Mark';

-- // gauti paciento "Mark" daktaro pavarde - nenaudojant Inner.Join komandos:

SELECT Doctors.Lname FROM Doctors, Patients
WHERE Patients.Name = 'Mark' AND Patients.Doctor_id = Doctors.Id;
