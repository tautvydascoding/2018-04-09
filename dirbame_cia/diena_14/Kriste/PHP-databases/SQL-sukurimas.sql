-- // UZDUOTIS
-- // Pasikartoti DB kurima
-- // 1. Sukurti DB 'blogas'

 CREATE DATABASE blogas;
 use blogas;

-- // 2. sukurti table/lentele 'straipsniai' :
-- // strulpeliai: id (INT), title(varchar(255)), description (text), date (date), author(varchar(60))

CREATE TABLE straipsniai (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(160),
  description TEXT,
  data DATETIME,
  up_data DATETIME,
  author VARCHAR(60)
);

-- // 3. ideti pora straipnsiu  (ne Lorem) -->

INSERT INTO straipsniai VALUES ('', 'Pavasaris', 'Skleidziasi ziedai, aplink darosi zalia.', NOW(), NOW(), 'Juozas Juozaitis');
INSERT INTO straipsniai VALUES ('', 'Ruduo', 'Krenta lapai nuo medziu. Oras vesta. Lietus barbena i langa', NOW(), NOW(), 'Petras Petraitis');
INSERT INTO straipsniai VALUES ('', 'Vasara', 'Krykstauja vaikai prie juros. Saule sviecia, visiems gerina nuotaika', NOW(), NOW(), 'Povilas Povilaitis');
INSERT INTO straipsniai VALUES ('', 'Ziema', 'Laikas issitraukti rogutes, paciuzas ir slides - vaziuosime ant kalno.', NOW(), NOW(), 'Ona Onutaite');
