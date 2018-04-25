-- sql komentaras
CREATE DATABASE hospital4;
-- pasitikrinimui:
show databases;
USE `hospital4`;   -- isveda 'Database changed'
-- arba
USE hospital4;

-- kuriame seimos gydytoju lentele
CREATE TABLE doctors(
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30)
);
-- pasitikrinimui
 show tables;


-- 'ALTER' stirta redaguot:
-- istrinti stulpeli, prideti papildoma, pakeisti stulpelio tipa
-- ! alter - neredaguoja duomenu (ji keicia tik lenteles, lenteles struktura)

--                         id     name   lname
INSERT INTO doctors VALUES ("", "Tim", "Logan");
INSERT INTO doctors VALUES ("", "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onutaite");
INSERT INTO doctors VALUES ("", "Lite", "Rene");
INSERT INTO doctors VALUES ("", "Koris", "Pitas");
-- pasitikrinimas
 SELECT * FROM doctors;


 --
