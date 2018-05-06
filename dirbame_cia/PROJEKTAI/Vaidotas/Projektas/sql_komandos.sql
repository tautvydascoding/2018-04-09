create database etynga;

use etynga;


CREATE TABLE darbai(
id int(6) NOT NULL AUTO_INCREMENT,
img_nr int(6) NOT NULL,
img_src varchar(100),
cat varchar(30),
sub_cat varchar(30),
description varchar(150),
price INT(5),
work_hourse_needed INT(3),
PRIMARY KEY (id));

INSERT INTO darbai (img_nr, img_src, cat, sub_cat, description, price, work_hourse_needed)
VALUES (1,'Images/megzta/1.jpg','megzta','Skraistės','Stilinga skraistė',35,8),
(2,'Images/megzta/2.jpg','megzta','Šlepetės','Šlepetės šaltam rudeniui',7,3),
(3,'Images/megzta/3.jpg','megzta','Tapukai','Tapukai mašiniukai mažyliui',5,4),
(4,'Images/megzta/4.jpg','megzta','Šalikai ir pirštinės','Komplektas žiemai 1.',15,15),
(5,'Images/megzta/5.jpg','megzta','Šalikai ir pirštinės','Daugiafunkcinės pirštinės',12,12),
(6,'Images/megzta/6.jpg','megzta','Šalikai ir pirštinės','Komplektas žiemai 2.',13,10),
(7,'Images/megzta/7.jpg','megzta','liemenės','Vardinė liemenė jūsų atžalai',10,30),
(8,'Images/megzta/8.jpg','megzta','liemenės','Liemenė pelėdžiukas',10,30),
(9,'Images/megzta/9.jpg','megzta','Megztiniai','Rudolfas laukia jūsų',40,60),
(10,'Images/megzta/10.jpg','megzta','Megztiniai','Kalėdos porai',80,90),
(11,'Images/megzta/11.jpg','megzta','Megztiniai','Kalėdos mamai ir mažyliui',65,80),
(12,'Images/megzta/12.jpg','megzta','Megztiniai','Rudnosiukas mažyliui',15,10),
(13,'Images/megzta/13.jpg','megzta','Megztiniai','Mažoji Miu papuoš visus',35,60),
(14,'Images/megzta/14.jpg','megzta','Megztiniai','Kai užaugsiu-būtinai auginsiu',20,10),
(15,'Images/megzta/15.jpg','megzta','Megztiniai','Kiekvienam tikram Žalgirio fanui',35,60),
(1,'Images/nerta/1.jpg','nerta','Kuprinės','Drąsi kuprinė - drąsiai Damai',25,6),
(2,'Images/nerta/2.jpg','nerta','Krepšeliai','Krepšeliai',4,1),
(3,'Images/nerta/3.jpg','nerta','Rankinės','Rožinė rankinė',20,5),
(4,'Images/nerta/4.jpg','nerta','Delninukės','Mėlyna delninukė',10,2),
(5,'Images/nerta/5.jpg','nerta','Šlepetės','Spalvotosios šlepetės',4,1),
(6,'Images/nerta/6.jpg','nerta','Krepšeliai','Krepšeliai niekučiams',6,1),
(7,'Images/nerta/7.jpg','nerta','Delninukės','Violetinė delninukė',10,4),
(8,'Images/nerta/8.jpg','nerta','Aksesuarai','Mažajam riteriui',9,5),
(9,'Images/nerta/9.jpg','nerta','Tapukai','Riterio tapukai',5,3),
(10,'Images/nerta/10.jpg','nerta','Tapukai','Tapukai šiltoms vasaros dienoms',4,1),
(1,'Images/siuta/1.jpg','siuta','Sėdmaišiai','Sėdmaišis 1',30,12),
(2,'Images/siuta/2.jpg','siuta','Sėdmaišiai','Sėdmaišis 2',50,12),
(3,'Images/siuta/3.jpg','siuta','Sėdmaišiai','Sėdmaišis 3',30,12),
(4,'Images/siuta/4.jpg','siuta','Suknelės','Vasariškiausios suknelės',17,3);

  -- kuriu draugu lentele
  CREATE TABLE draugai(
    id int(6) NOT NULL AUTO_INCREMENT,
    link varchar(100),
    name varchar(30),
    description varchar(140),
    PRIMARY KEY (id));


    -- pildau draugu Lenteles
    INSERT INTO draugai (link, name, description)
    VALUES ("https://siuludama.lt/","Siūlų dama","Mėgstamiausias siūlų tiekėjas"),
    ("http://www.siulogalas.lt/en/","Siūlo galas","Pristato ir į namus"),
    ("http://audiniai.com","Šilko Tekstilė","Aukštos kokybės audiniai");


-- kuriu karuseles lentele

  CREATE TABLE karusele(
    id int(6) NOT NULL AUTO_INCREMENT,
    img_nr int(6) NOT NULL,
    img_src varchar(100),
    alt_text varchar(30),
    cat varchar(30),
    sub_cat varchar(30),
    description varchar(150),
    PRIMARY KEY (id));

--pildau karuseles lentele
    INSERT INTO karusele (img_nr, img_src, alt_text, cat, sub_cat, description)
    VALUES (1,'Images/megzta/karusele/1.jpg','Slide picture 1','megzta','Skraistės','Megztos skraistės'),
    (2,'Images/megzta/karusele/2.jpg','Slide picture 2','megzta','Šlepetės','Šaltoms žiemoms'),
    (3,'Images/megzta/karusele/3.jpg','Slide picture 3','megzta','Megzti tapukai','Patiems mažiausiems'),
    (4,'Images/megzta/karusele/4.jpg','Slide picture 4','megzta','Megztos suknelės','Šiltos ir stilingos'),
    (5,'Images/megzta/karusele/5.jpg','Slide picture 5','megzta','Megztiniai','Kalėdoms ir kitoms progoms'),
    (6,'Images/megzta/karusele/6.jpg','Slide picture 6','megzta','Šalikai ir pirštinės','Lietuviškoms žiemoms'),
    (1,'Images/nerta/karusele/1.jpg','Slide picture 1','nerta','Kuprinės','Kokių tik nori spalvų!'),
    (2,'Images/nerta/karusele/2.jpg','Slide picture 2','nerta','Krepšeliai','Kasdien ir ne tik'),
    (3,'Images/nerta/karusele/3.jpg','Slide picture 3','nerta','Rankinės','Platus priedų ir spalvų pasirinkimas'),
    (4,'Images/nerta/karusele/4.jpg','Slide picture 4','nerta','Delninukės','Delninukės ar piniginės'),
    (5,'Images/nerta/karusele/5.jpg','Slide picture 5','nerta','Šlepetės','Dekoracijos ir priedai pagal jūsų poreikius'),
    (1,'Images/siuta/karusele/1.jpg','Slide picture 1','siuta','Sėdmaišiai','Įvairių dydžių ir formų');

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
