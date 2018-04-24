console.log( "labas as cia" );

//
// // ========js best practice & common mistakes (~2h)
//
// // -------- --Array / Masyvai  TEORIJA (~2h)--------------------
// 	// UZDUOTIS
	var prekiautojai = []; // empty array

	prekiautojai[0] = "IKI";
	prekiautojai[1] = "Maxima";
	prekiautojai[2] = "Lidl";
	prekiautojai[3] = "Rimi";
	prekiautojai[50] = "Cia Market";

	// A) pervadinti pirma stalciu
	prekiautojai[1] = "Barbora";

console.log(  "prekybos centrai:", prekiautojai  );


// 	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
// 	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// pries sukeiciant vietomis, svarbu, kad uzsisaugotume reiksme vieno is stalciu, nes kitu atveju mes ja prarsime, nes ant virsaus uzrasysime kita ir tiek!!!

var x = prekiautojai[2]; // uzsisaugojau butent ta reiksme, kuria as keisdamas pirmaja komanda istrinsiu. o tada jau veliau panaudosiu;
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = x;

console.log("prekybos centrai po pakeitimo:" , prekiautojai);

//
// 	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiMasyvo2elementus(x, y) {
  var txt = prekiautojai[x];
  prekiautojai[x] = prekiautojai[y];
  prekiautojai[y] = txt;
}
sukeistiMasyvo2elementus(1, 0);
console.log("funkcijos pakeitimas:", prekiautojai);
sukeistiMasyvo2elementus(3, 0);
console.log("antras funkcijos pakeitimas:", prekiautojai);



// // -------- --Array / Masyvai  TEORIJA (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);

// .length
// .join()
// .shift()
// .pop()
//
//
//
// // =========================================================
// //

// 1 uzduotis array
// sukurti masyva kuris saugi statybos medziagu prekeivius

var statybosPrekiautojai = [];

statybosPrekiautojai[0] = "Senukai";
statybosPrekiautojai[1] = "Ermitazas";
statybosPrekiautojai[2] = "Moki Vezi";

console.log(statybosPrekiautojai);
// kai su console log nurodai masyvo pavadinima, ismeta visus masyvo stalcius;
console.log("paskutine imone likusi:", statybosPrekiautojai[2]);
// kai nori atsispausdinti tik viena konkretu stalcius


// idejimas automatiskai i masyvo pabaiga- net nezinant tiksliai masyvo stalciu skaiciaus; nes automatiskai nurodziau, kad man apsakaiciuoti masyvo ilgi; ilgis apsiskaiciuoja skaiciuojant normaliai, t.y. nepaisant kad masyvas prasideda nuo 0, bet jei bus stalciai pvz: 0,1,2,3 -tai length bus 4. ir tada kai padarysime sia komanda ideti i pabaiga, jis naudos, kad dedame i 4 stalciu ir taip gausis pabaigoje;
var ilgis = statybosPrekiautojai.length; // masyvo ilgis;
console.log("Ilgis:", ilgis);

statybosPrekiautojai[ ilgis ] = "Kristina";
console.log(statybosPrekiautojai);



// 2 uzduotis  Array

keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// isvedimas i viena eilute - toString:;
var tekstas = keliautojas.toString();
console.log(tekstas);

// kitas isvedimo i viena eilute variantas - JOIN:
var tekstas2 = keliautojas.join("!!!"); // skliausteliuose nurodau kokio noriu atsakyrimo, t.y. koks skirtukas bus naudojamas atskiriant zodzius.jei nieko neideciau-butu taip pat kaip su toString komanda;
console.log(tekstas2);

// // 1. i masyvo gala ideti elmenta "butelis vandens"

keliautojas[4]="butelis vandens";
console.log(keliautojas);

// arba buvo galima padaryti kitu budu, tai dabar as dar viena pridesiu stalciu prie bendro masyvo:

var ilgis = keliautojas.length;
keliautojas[ilgis] = "butelis vandens 111" ;
console.log("pridejau dar viena stalciu kitu budu:" , keliautojas);

// dar viena komanda idejimo i pasyvo gala - su komanda push;
keliautojas.push("Palapine");
console.log("su komanda PUSH dedu i masyvo pabaiga:" , keliautojas);

// // 2. i masyvo pradzia ideti elmenta "ziebtuvelis"

keliautojas.splice(0, 0, "ziebtuvelis"); // su komanda SPLICE galime iterpti nauja stalciu;
console.log("bandau splice budu ideti stalcius", keliautojas);

// PAVYZDYS IS w3school
// var fruits = ["Banana", "Orange", "Apple", "Mango"];
// fruits.splice(2, 0, "Lemon", "Kiwi");
// The first parameter (2) defines the position where new elements should be added (spliced in).
// The second parameter (0) defines how many elements should be removed.
// The rest of the parameters ("Lemon" , "Kiwi") define the new elements to be added.

// antras budas kaip ideti i masyvo prieki - JI NEISTRINA PRIEKIO, O VISKA PASLENKA I PRIEKI PER VIENA:
keliautojas.unshift("KNYGA!!!");
console.log("su Unshift idedu i masuvo pradzia:", keliautojas);

// // 3.1 istrinti paskutinta elementa;

keliautojas.pop();
console.log("istrinti paskutini stalciu su POP komanda:" , keliautojas);

 // 3.2. istrinti priekinu elmenta

keliautojas.shift();
console.log("su Shift istriname priekini stalciu:", keliautojas);
// istrynes,paslenka stalcius per viena atgal;


 // 3.3. istrinti 3-cia elmenta

// vienoks budas:
keliautojas.splice(3, 1);
console.log("bandau su splice istrinti stalciu:", keliautojas);

// kitoks budas su Delete komanda;
delete keliautojas[1];
console.log("su Delete komanda panaikiname stalciu:",  keliautojas);
// sitokiu budu nesusigadina masyvas-t.y. niekas nepersislenka; tiesiog gaunasi tuscias stalcius ir tiek. mums su console.log atvaizduos kaip Empty, o kai isskleidime, bus tas stalciaus numeris tiesiog praleistas,t.y. 0,2,3 ir t.t. - kaip matome-1 stalciaus nera;


// 3.4 padaryk paieska "palapine"
var nr = keliautojas.indexOf("ziebtuvelis");
console.log("ziebtuvelio stalciaus numeris randamas:", nr);
// jeigu nerastu, tai su console log ismes -1 , tai reiskia, kad nerado tokio elemento isvis;

// 3.5 nukopijuok masyvo dali nuo 3 iki 5;
var dalis = keliautojas.slice(3, 5);  // (start, end), t.y. start siuo atveju 3, o end 5, bet 5 nepaima- paima tik 3 ir 4 masyvo dali. tai reiskia iki 5, jo neiskaitant (NEIMTINAI);
var dalis2 = keliautojas.slice(2); // toks parasymas reiks, kad paims nuo 2 stalciaus iki pabaigos, nes nenurodziau end;
console.log("su slice komanda nukopijuosiu dali masyvo:", dalis); // kopija nesugadina originalo
console.log("su slice2", dalis2);
console.log("paziurim ar nesugadino originalo", keliautojas);

// SVARBU!!!! - javascripte masyvai yra objektai
var susijusiKopija = keliautojas;
console.log("spausdinu susijuse kopija", susijusiKopija);
console.log("spausdinu originala", keliautojas);

// blogumas tame, kad jeigu keisiu kopija, tai pakeisiu ir originala!!! Tikriname zemiau:
susijusiKopija.shift();
susijusiKopija.shift();
console.log("spausdinu susijuse kopija", susijusiKopija);
console.log("spausdinu originala", keliautojas);
// del to yra komanda SLICE, kuri padaro teisinga kopijavima;


// // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// jeigu masyvo kurima idetume i for loops'o vidu, tai tada sukurtu daug masyvu. o mums reikia tik vieno masyvo;
var masyvas = [];
// uzpildome masyva nuliaiss:
// masyvas[0] = 0;
// masyvas[1] = 0;
// ir t.t.. !!!! bet kadangi mums reikia 50 uzpildytis talciu, renkames For loops;

for(var i = 0; i<50; i++) {
  masyvas[i] = 0;
}
console.log("uzpildytas masyvas:", masyvas);
// realiai vorsuje komandoje beveik visada reikia keisti tik dali "i<50", nes keisime kiek kartu;
// ir prie masyvo po lygu nurodyti ka mes norime ideti, siuo atveju 0;

// 5.1  sukurti masyva naudojant FOR (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var mokausiMasyvus = [];

for(var i = 0; i<50; i++) {
  mokausiMasyvus[i] = 1;
}
console.log("dabar su uzpildytu vienetu:", mokausiMasyvus);

// uzduotis prisiminti IF'us;
// patikinrinti ar masyvas prasideda 1 (t.y ar prasideda mano stalciai skaiciumi vienas). jeigu taip isvedame atsakyma - "vienas", jeigu ne - "ne vienas";

if (mokausiMasyvus[0] === 1) {
  console.log("vienas");
}
else {
  console.log("ne vienas");
}

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// galima su for ciklu
for (var i = 0; i < mokausiMasyvus.length; i++) {
  // jeigu liekana nelygu nuliui. o cia tas "%" reiskia, kad ziurim ar skaicius lyginis ar nelyginis, nes mums reikia kas antra skaiciu pakeisti;
  if (i % 2 != 0) {
    mokausiMasyvus[i] = 3;
  }
}
console.log("kas antras trys:", mokausiMasyvus);

// kitu budu galima, kai keiciame tik sioje dalyje reiksme "i++"
// for (var i = 0; i < mokausiMasyvus.length; i = i + 2 ) { // i = i + 2 yra tas pats, kas i += 2;
//     mokausiMasyvus[i] = 3;
//   }
// console.log("kas antras trys kitu budu:", mokausiMasyvus);


// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


  // 1 budas!!!!!!!!!

// for (var i = 0; i < mokausiMasyvus.length; i++ ) {
//     if (i % 5 === 0) {
//     mokausiMasyvus[i] = 9;
//     }
//   }
// mokausiMasyvus[0] = 1; // galima pachytinti ir gale pakeisti tik pirma stalciu i kitokia reiksme;
// console.log("kas penktas devyni!:", mokausiMasyvus);

  //  2 budas !!!!!!!!!!

// for (var i = 4; i < mokausiMasyvus.length; i+=5 ) { // pradejome, kad musu i yra ne nuo 0, o nuo 4 tik (tai 4=5, nes prasideda nuo 0)
//     mokausiMasyvus[i] = 9;
//   }
// console.log("kas penktas devyni-dublis du!:", mokausiMasyvus);

   //   3 budas !!!!!!!!!

for (var i = 0; i < mokausiMasyvus.length; i++ ) {
    i += 4;
    mokausiMasyvus[i] = 9;
  }
console.log("kas penktas devyni-dublis trys!:", mokausiMasyvus);


//
