console.log( "labas as cia" );

// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var mokinys = {
    vardas : 'Tomas',
    pavarde : 'Tomuliatis',
    kelintokas : 7,
    pazymiai : [6, 5, 9 , 10, 8],
    eiti : function() {
        console.log( ' einu einu...');
    },
    begu : function() {
         console.log('begu');
    },
    miestas: ""
};

// console.log(  "name is:", vardas );  // ERROR - undefined
console.log(  "name is:", mokinys.vardas );   // Tomas
console.log(  "last name is:", mokinys.pavarde );   //
console.log(  "kelintokas:", mokinys.kelintokas );   //
console.log(  "pazymiai:", mokinys.pazymiai );   //
mokinys.eiti();

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
mokinys.kelintokas = 8;
mokinys.pazymiai[0] = 10;
mokinys.pazymiai[1] = 9;
mokinys.pazymiai[2] = 10;
mokinys.pazymiai[3] = 8;
// ARBA
mokinys.pazymiai = [10, 9, 10, 8, 6];

mokinys.begu = function() {
     console.log('begu');
};

console.log(  mokinys );

// splice(nuo kur, kiek istrinti, ka iterpti....)


var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus;

// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tetis = {
    vardas: 'Petras',
    pavarde:'Petrauskas',
    vaikas: {}
};

var vaikas = {
    varkas: 'Joniukas',
    klase: 5
};

console.log( vaikas, tetis);

// tetis.vaikas = vaikas;
// console.log( vaikas, tetis);


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

//============3=pvz: construktorius =====
function Car(nr, c, ms) {
    this.numberOfDoors = nr;
    this.color = c;
    this.maxSpeed = ms;
}

// objekto kurimas
var AudiTT = new Car(2, "red", 280);
var Opel = new Car(5, "black", 180);
var Ferrari = new Car(4, "red", 380);
console.log(   AudiTT  );
console.log(   Opel  );
