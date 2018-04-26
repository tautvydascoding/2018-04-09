--mysql.exe

show databases;

use hospital10; -- kuria db naudot;
show tables; --parodo visas DB Lenteles;

SELECT * FROM user; -- issirinkimo statementas. * yra stulpeliu pasirinkimai
SELECT * user, password, password_expired FROM user; -- from nurodo lenta

CREATE USER 'tautvydas10'@'localhost' IDENTIFIED BY 'tratata'


CREATE DATABASE hospital4;
-- kuriam daktaru lentele
CREATE TABLE doctors(
  id int(6) NOT NULL AUTO_INCREMENT,
  name varchar(30),
  lname varchar(30),
  PRIMARY KEY (id));

--ALTER TABLE - skirta redaguoti, pakeisti stulpelio lentos tipa, bet neredaguoja duomenu.



CREATE TABLE patients(
  id int(6) NOT NULL AUTO_INCREMENT,
  name varchar(30),
  lname varchar(30),
  doctor_id int(6),
  PRIMARY KEY (id));

CREATE TABLE img(
  id int(6) NOT NULL AUTO_INCREMENT,
  name varchar(30),
  patients_id int(6),
  PRIMARY KEY (id),
  UNIQUE(id));

-- duomenu idejimas i duombaze
INSERT INTO doctors (name, lname)
VALUES ("Tim", "Logan"), ("Paul", "Leo"), ("Ona", "Onutaite"),("Lita", "Rene"),("Koris", "Pita");

INSERT INTO patients (name, lname, doctor_id)
VALUES ("Mark", "John", "2"),
       ("Tom", "Karlos","2"),
       ("Aris", "Tiedo", "1"),
       ("Tom", "Koli", "3"),
       ("Co", "Jo", "1"),
       ("Tom", "Noro", "5"),
       ("Jili", "Jato", "4");

INSERT INTO img (name, patients_id)
VALUES ("foto.jpg","3"),
      ("3.png","1"),
      ("1.jpg.jpg","1"),
      ("3.gif.jpg","3");

SELECT * from doctors WHERE id =2;

WHERE NOT --

SELECT COUNT(name) FROM patients WHERE doctor_id=2;

UPDATE doctors SET name="Paulius" where name = "Paul";


SELECT TOP number|percent FROM Table
ORDER BY column ASC;


SELECT MAX(price) FROM customers AS Kainele;

SELECT * FROM Products WHERE price BETWEEN 10 AND 30;
