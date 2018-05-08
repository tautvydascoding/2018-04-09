-- komentarai kursime bloga, kuriam bus laikomi straipsniai
CREATE DATABASE blogas;
show databases;
use blogas; -- nurodome su kuria DB dirbsime


--
CREATE TABLE straipniai (
            id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
            title  VARCHAR(160),
            description  TEXT,
            date DATETIME,
            up_date DATETIME,
            author VARCHAR(60)
    );

ALTER TABLE "" RENAME COLUMN "column 1" TO "column 2";
RENAME TABLE `straipniai` TO `straipsniai`

INSERT INTO straipsniai VALUES ("", "Lauko kavinių verslą Laisvės alėjoje jaukia rekonstrukcija", "Atšilus orams verslininkai prie kavinių pradėjo įrenginėti lauko terasas. Jas jau spėjo įvertinti ir klientai. Saulėtą dieną centrinėje Kauno dalyje lauko kavinėse sudėtinga rasti laisvų vietų. Čia sutikti kauniečiai tikino, kad lauke ir kava skanesnė.", NOW(), NOW(), "Povilas Pofka"  );

INSERT INTO straipsniai VALUES ("", "Danske Bank patvirtino, kad traukiasi iš Lietuvos", "Bankas pranešė, kad iš Baltijos šalių trauksis palaipsniui, pirmiausiai nustos teikti paslaugas naujiems klientams. Pranešime teigiama, kad  Danske Bank  grupė fokusuosis išskirtinai į Šiaurės šalyse įsikūrusių ir Baltijos šalyse veiklą vykdančių įmonių bei globalių korporacijų aptarnavimą. Danske Bank grupė siekia stiprinti pozicijas Šiaurės šalių rinkose, taigi atitinkamai veiklos strategiją pritaikome ir Baltijos šalyse. Suvienodindami klientų aptarnavimo modelius užsienyje, galėsime labiau išnaudoti savo patirtį bei globalias paslaugas ir sprendimus, - pranešime sakė Danske Bank grupės Tarptautinės verslo bankininkystės vykdantysis viceprezidentas Frederikas Bjornas.  ", NOW(), NOW(), "Povilas Pofka"  );
