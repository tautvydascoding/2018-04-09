console.log( "labas as cia" );

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
	// UZDUOTIS
	// var prekiautojai = []; // empty array
  //
	// prekiautojai[0] = "IKI";
	// console.log(  "prekybos centrai:", prekiautojai  );
	// prekiautojai[1] = "Maxima";
	// prekiautojai[2] = "Lidl";
	// prekiautojai[3] = "Rimi";
	// prekiautojai[50] = "Cia Market";
  //

  var statybosImones = ["senukai", "ermitazas", "moki-vezi", "bla"];
  console.log(statybosImones);


	// // A) pervadinti pirma stalciu
	// prekiautojai[1] = "Barbora";
  statybosImones[1] = "sanitera";
  console.log(statybosImones);
  console.log("paskutine imone:", statybosImones[2]);
  //.length panaudojimas
  var ilgis = statybosImones.length;
  console.log("ilgis", ilgis);

  statybosImones[ ilgis ] = "koala"; // idejimas i masyvo gala
  console.log(statybosImones);

	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
  console.log("pries sukeiciant vietomis", statybosImones);

  x = statybosImones[2];
  statybosImones[2] = statybosImones[3];
  statybosImones[3] = x;
  console.log("po keitimo", statybosImones);

	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function sukeistiMasyvo2elementus(a, b) {
  var temp = statybosImones[a];
  statybosImones[a] = statybosImones[b];
  statybosImones[b] = temp;
}
sukeistiMasyvo2elementus(1, 2);
console.log("po keitimo", statybosImones);

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


// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas[keliautojas.length] = "butelis vandens";
//arba
keliautojas.push("palapine");
console.log("i masyvo gala idejimas", keliautojas);

//istrinti paskutini elementa
keliautojas.pop();
console.log("istrinu paskutini", keliautojas);

//idejimas i prieki
keliautojas.unshift("knyga");
console.log("i masyvo pradzia idejimas", keliautojas);


// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("cola");
console.log("i masyvo pradzia idejimas", keliautojas);

//priekinio elemento istrynimas
keliautojas.shift();
console.log("is masyvo pradzios istrynimas", keliautojas);

// 3. istrinti 3-cia elmenta
delete keliautojas[3];
console.log("3 elemento trynimas", keliautojas);

//paieska
var nr = keliautojas.indexOf("palapine");
console.log("palapine", nr);

//masyvo dalies kopija
var kopija = keliautojas.slice(1, 3); // nuo 1 iskaitant iki 3 neiskaitant
var kopija2 = keliautojas.slice(4); //nuo 4 iki galo
console.log(kopija, kopija2);

//javascripte visi masyvai yra objektai

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");


// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
