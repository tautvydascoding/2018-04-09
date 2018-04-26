

// uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM doctors WHERE name="Koris";
// uzduotis 2: Pakeisti "Co" varda i "Karolis"

UPDATE patients SET name="Karolis" WHERE name = "Co";
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

UPDATE patients SET name="Tomas" WHERE name = "Tom";
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET doctor_id=4 WHERE name 'LIKE T%';
// uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT lname FROM doctors WHERE id IN (SELECT doctor_id FROM patients WHERE name ='Mark');

SELECT doctors.lname FROM doctors, patients WHERE patients.name="Mark" AND patients.doctor_id=doctors.id;

SELECT doctors.lname FROM doctors INNER JOIN patients ON doctors.id=patients.doctor_id WHERE patients.name="Mark";


ALTER TABLE img MODIFY COLUMN name varchar(255);


//
