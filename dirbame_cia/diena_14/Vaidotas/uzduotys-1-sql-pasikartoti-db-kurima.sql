// UZDUOTIS
// Pasikartoti DB kurima
// 1. Sukurti DB 'blogas'
create database blogas;
use blogas;

// 2. sukurti table/lentele 'straipsniai' :

create table straipsniai (
  id int PRIMARY KEY AUTO_INCREMENT,
  title varchar(255),
  description text,
  date DATE,
  up_date Date,
  author varchar(60)
);

alter table straipsniai
modify column up_date datetime;

update straipsniai
set up_date ="2018-04-25 08:17:00"
where id = 2;


INSERT INTO straipsniai (title, description, date, up_date, author)
VALUES ("Rusijos keršto planas: kai kurie iš JAV išsiųsti rusų diplomatai vykdė šiurpią užduotį", "Iš 60 Rusijos diplomatų, išsiųstų iš Jungtinių Valstijų, buvo ir specialiųjų tarnybų agentų, kurie sekė pabėgėlius iš Rusijos ir jų šeimų narius. Apie tai pranešė CNN.", "2018-04-26", "2018-04-26", "www.delfi.lt");

INSERT INTO straipsniai (title, description, date, up_date, author)
VALUES ("Britanija: Rusija kai kuriuos perbėgėlius laiko teisėtais taikiniais nužudymui", "Diplomatai trečiadienį dalyvavo skubiame posėdyje dėl buvusio dvigubo Rusijos agento Sergejaus Skripalio apnuodijimo. Jis surengtas po to, kai Cheminio ginklo uždraudimo organizacija (OPCW) patvirtino Didžiosios Britanijos išvadas, kad jis buvo apnuodytas nervus paralyžiuojančia medžiaga.", "2018-04-18", "2018-04-25", "BNS, ELTA");

INSERT INTO straipsniai (title, description, date, up_date, author)
VALUES ("Petrauskienė: ateinančių jaunų mokytojų turime mažiausiai Europoje", "Mokytojų bendruomenė sensta – Lietuvoje mažiausiai Europoje ateina dirbti naujų mokytojų, todėl kaita būtina, sako švietimo ir mokslo ministrė Jurgita Petrauskienė.", "2018-04-26", "", "BNS");

Create table
// strulpeliai: id (INT), title(varchar(255)), description (text), date (date), author(varchar(60))
// 3. ideti pora straipnsiu  (ne Lorem)
