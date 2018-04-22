console.log( "labas as cia" );

//

// 1 UZDUOTIS:
// sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
  vardas: 'Tomas',
  pavarde: 'Tomauskis',
  kelintokas: 'pirmokas',
  mokinioMatematikosPazymiai: '(6, 5, 9, 10, 8)', //arba pazymiai: [6, 5, 9, 10, 8] //masyvas
  eiti: function() {
    console.log(einu);
  }
};
// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

console.log(mokinys); // arba console.log(mokinys.vardas);

// 1.2 pakeisti klase, visus pazymius

mokinys.begu = function() {
  console.log("begu begu");
};
mokinys.kelintokas = "antrokas";
mokinys.mokinioMatematikosPazymiai = "(7, 9, 6, 2, 4)";

console.log(mokinys);
// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
var tevas = {
  vardas: "Jonas",
  pavarde: "Jonaitis",
  vaikas: "Pranas"
};
  console.log(tevas);
// 2) vaikas: klase, vardas
var vaikas = {
  klase: "antra",
  vardas: "Pranas"
};
  console.log(vaikas);
// 3) priskirti tevo objekui (kintamajam) vaika
tevas.vaikas = vaikas;
console.log(tevas);

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = m;
}

// objekto kurimas
var AudiTT = new Car('AAA000', "red", 280);
