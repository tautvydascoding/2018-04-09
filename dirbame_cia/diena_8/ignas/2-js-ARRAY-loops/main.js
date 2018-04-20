console.log( "labas as cia" );


// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = []; // tuscio masyvo kurimas

//uzpildymas masyvo 0
for (var i = 0; i < 50; i++) {
  masyvas[i] = 0; //i = 0, 1, 2, 3....49
  // console.log(i); //stengtis tikrinti
}
console.log("uzpildytas", masyvas);

// 5.1  sukurti masyva naudojant FOR (50 ilgumo) ir uzpildyti visa skaiciumi 1;
var masyvas = [];
for (var i = 0; i < 50; i++) {
  masyvas[i] = 1;
}
console.log("uzpildytas", masyvas);


if (masyvas[0] === 1) {
  console.log("vienas");
} else {
  console.log("ne vienas");
}

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ...
  for (var i = 0; i < masyvas.length; i = i + 2) {
    masyvas[i] = 3;
  }
  console.log("kas antras 3", masyvas);




// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
for (var i = 0; i < masyvas.length; i = i + 5) {
  masyvas[i] = 9;
}
console.log("kas penktas 9", masyvas);


//=============bootstrap---sm-md-lg-xl (30-60m)==========
