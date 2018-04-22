// 1 UZDUOTIS:
// sukurti mokinio objekta  : vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
  vardas: "Vardenis",
  pavarde: "Pavardenis",
  kelintokas: 4,
  matematikosPazymiai: [6, 5, 9, 10, 8]
};

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

for (var x in mokinys) {
  if (mokinys.hasOwnProperty(x)) console.log(mokinys[x]);
}

// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = {
  vardas: "Vardauskas",
  pavarde: "Pavardauskas",
  vaikas: {}
};

var vaikas = {
  klase: 4,
  vardas: "Vaikauskas"
};

tevas.vaikas = vaikas;
console.log("Vaikas: " + JSON.stringify(vaikas));

// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

function Darbuotojas(nr, vardas, pavarde, alga) {
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
}

//============3=pvz: construktorius =====
// function Car(nr, c, ms) {//   this.numberOfDoors = nr;
//   this.color = c;
//   this.maxSpeed = ms;
// }

// objekto kurimas
// var AudiTT = new Car('AAA000', "red", 280);

var darbininkas = new Darbuotojas(42, "Darbis", "Dirbauskas", 1000);
console.log("Darbininkas: " + JSON.stringify(darbininkas));

// end main.js
console.log("end main.js");
