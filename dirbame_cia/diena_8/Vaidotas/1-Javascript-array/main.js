console.log( "labas as cia" );
// ========js best practice & common mistakes (~2h)





// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
	var statybosPrekiautojai = []; // tuscias masyvas

	statybosPrekiautojai[0]="Senukai";
	statybosPrekiautojai[1]="Ermitazas";
	statybosPrekiautojai[2]="Moki-vezi";
	statybosPrekiautojai[3]="DEPO";


console.log(statybosPrekiautojai); // isvedu pilna masyva

console.log("Paskutine imone: "+statybosPrekiautojai[3]);

var ilgis = statybosPrekiautojai.length;

console.log("Masyvo ilgis: "+ilgis);

statybosPrekiautojai[ilgis] = "Biedronka"; // susikurus ilgi su length, visada nauja elementa des i masyvo gala.

console.log("pries keitima: " + statybosPrekiautojai); // isvedu pilna masyva


	// A) pervadinti pirma stalciu
	// prekiautojai[1] = "Barbora";

	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)



	var b = statybosPrekiautojai[2];
statybosPrekiautojai[2]=statybosPrekiautojai[3];
statybosPrekiautojai[3] = b;

console.log("Po keitimo: " + statybosPrekiautojai);

	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
console.log("Pries keiciant elementus: " + statybosPrekiautojai);


	function sukeitimas (x,y){
		var temp = statybosPrekiautojai[x];
		statybosPrekiautojai[x] = statybosPrekiautojai[y];
		statybosPrekiautojai[y] = temp;
	}

sukeitimas(0,1);

console.log("Po sukeitimo: " + statybosPrekiautojai);


// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);

// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

var tekstas = keliautojas.toString(); // sujungia viska i stringa
var tekstas2 = keliautojas.join(", "); // sujungia masyva su skirtuku
console.log(tekstas);
console.log(tekstas2);

keliautojas.push("palapine"); // idejimas i masyvo gala
console.log(keliautojas);
keliautojas.push("bananas"); // idejimas i masyvo gala

console.log("idejau banana: " + keliautojas);

keliautojas.pop();// isima paskutini itema

console.log("isemiau banana: " + keliautojas);

keliautojas.unshift("knyga"); // idejimas i masyvo pradzia
console.log("i pirma vieta ikisau knyga: " + keliautojas);

keliautojas.shift(); // istrina is masyvo priekio.
console.log("viska istryniau is priekio: "+keliautojas);

delete keliautojas[1]; // nekeicia masyvo strukturos, tik istrina stalciaus turini

console.log(keliautojas);


var nr = keliautojas.indexOf("palapine"); // suranda masyvo stalciaus numeri

console.log("Palapines stalciaus numeris: "+nr);

var kopija = keliautojas.slice(0,3); // nuo pirmo iskaitant iki 3 neiskaitant
var kopija2 = keliautojas.slice(2);//nuo 2 iki galo

console.log("kopija: ", kopija); // masyvo dalies kopija

var susijusiKopija = keliautojas;

console.log("susijusiKopija", susijusiKopija);
console.log("originalas", keliautojas);

susijusiKopija.shift(); //istrina is priekio
susijusiKopija.shift(); //

console.log("susijusiKopija", susijusiKopija);
console.log("originalas", keliautojas);


// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
