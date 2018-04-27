-- sql komntaras

CREATE DATABASE hospital4;
CREATE DATABASE hospital4545;

-- pasitikrinimui
show databases;

USE hospital4; -- isveda "Databse changed"

DROP DATABASE hospital4545; -- istrina DB

-- kuriam seimos gydytoju lentele
CREATE TABLE doctors (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  lname VARCHAR(30)
);

show tables; -- pasitikrinimui

-- "ALTER" skirta redaguoti:

--                         id   name    lname
INSERT INTO doctors VALUES ("", "Tim", "Logan");

INSERT INTO doctors VALUES ("", "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onutaite");
INSERT INTO doctors VALUES ("", "Lite", "Rene");
INSERT INTO doctors VALUES ("", "Koris", "Pitas");

SELECT * FROM doctors; -- pasitikrinimui

-- PATIENTS table
CREATE TABLE patients (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  lname VARCHAR(30),
  doctor_id INT(6)
);

--                           id  name    lname   doctor_id
INSERT INTO patients VALUES ("", "Mark", "John", 2);

INSERT INTO patients VALUES ("", "Tom", "Karlos", 2);
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1);
INSERT INTO patients VALUES ("", "Tom", "Koli", 3);
INSERT INTO patients VALUES ("", "Co", "Jo", 1);
INSERT INTO patients VALUES ("", "Tom", "Naro", 5);
INSERT INTO patients VALUES ("", "Jili", "Jato", 4);

-- IMG table
CREATE TABLE img (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200),
  patients_id INT
);

--                      id  name        patients_id
INSERT INTO img VALUES ("", "foto.jpg", 3);
INSERT INTO img VALUES ("", "3.png", 1);
INSERT INTO img VALUES ("", "1.jpg", 1);
INSERT INTO img VALUES ("", "3.gif", 3);

-- INNER JOIN
SELECT patients.name, patients.lname
FROM patients
INNER JOIN img ON patients.id = img.patients_id
WHERE img.id = 3

-- uzduotis 4: gauti paciento "Mark" daktaro pavarde
-- budas #1
SELECT doctors.lname
FROM doctors, patients
WHERE patients.doctor_id = doctors.id AND patients.name = "Mark";

-- budas #2
SELECT doctors.lname
FROM doctors
WHERE doctors.id IN (SELECT doctor_id FROM patients WHERE name = "Mark");
