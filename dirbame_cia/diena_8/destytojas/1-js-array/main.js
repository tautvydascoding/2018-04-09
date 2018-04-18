console.log( "labas as cia" );


// UZDUOTIS
// sukurti masyva kuris saugo statybos medziagu prekeivius: Senukai, Ermitazas, Moki vezi
var statybosPrekiautojai = [];

statybosPrekiautojai[0] = "Senukai";
statybosPrekiautojai[1] = "Ermitazas";
statybosPrekiautojai[2] = "Moki vezi";

// isvedam visa masyva
console.log(  statybosPrekiautojai    );

console.log(  "Paskutintas imone:",  statybosPrekiautojai[2]  );

var ilgis = statybosPrekiautojai.length;  // masyvo ilgis
console.log(  "Ilgis: ",    ilgis  );

// idedu i masyvo gala
statybosPrekiautojai[  ilgis ] = "Tautvydas ir KO";
console.log(   statybosPrekiautojai    );




// -------- --Array / Masyvai  TEORIJA (~2h)----------
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
	// // A) pervadinti pirma stalciu
	// prekiautojai[1] = "Barbora";

	// B) sukeisti antro ir trecio stalciu reiksmes vietomis.
	// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

     console.log( "pries sukeiciant vietomis:", statybosPrekiautojai);

     var temp = statybosPrekiautojai[3]; // issisaugom
     statybosPrekiautojai[3] = statybosPrekiautojai[2];
     statybosPrekiautojai[2] = temp;

     console.log( "po keitimo:", statybosPrekiautojai);


	// C) padaryti B) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
    function   sukeistiMasyvo2elementus( x, y) {
        var temp = statybosPrekiautojai[ x ]; // issisaugom
        statybosPrekiautojai[ x ] = statybosPrekiautojai[ y ];
        statybosPrekiautojai[ y ] = temp;
    }
    sukeistiMasyvo2elementus(1, 3);
    console.log( "po keitimo 1-3:", statybosPrekiautojai);

    sukeistiMasyvo2elementus(2, 0);
    console.log( "po keitimo 2-0:", statybosPrekiautojai);

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);

// .length
// .join()
// .shift()
// .pop()



// =========================================================
// uzduotis  Array
keiautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

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
