console.log( "labas as cia" );


var izanga = "Senai senai...";
var destymas = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
var apibendrinimas = "Istorijos pabaiga...";

var knyga = "2018 04 16" + " 5 " + izanga + " " + destymas + " " + apibendrinimas;
// jeigu apostrofose " " padesime tarpa, tai atsispausdins su tarpu. tokiu atveju nereiktu papildomai pliusuojant deti tiesiog tusciu apostrofu, tam kad atsispausdintu tekstas nesulipes, o su tarpais;

console.log( knyga );


// pradedame mokinti FOR cikla;

for( var i = 0; i < 10 ; i++ ) {
  console.log( "Azuolas" );
  // su console log ziurint per inspect rodo tik skaiciuka, kiek kartu Azuolas parasytas. bet ne azuolas desimt kartu.
  console.log( "Azuolas" + " i");
  console.log( "Azuolas " + i );
  console.log( "Azuolas" + " " + i );
  // virsuje mokiausi padeti tarpa trim skirtingais budais;
}



// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

var objektas = "#";
for( var i = 0; i < 7 ; i++) {
  console.log( objektas );
  objektas = objektas + "#";
  // cia padareme, kad atspausdins is pat pradziu viena objekta, o po to visus sekancius.
}

// arba
var objektas = "";
for( var i = 0; i < 7 ; i++) {
  objektas = objektas + "&";
  console.log( objektas );
// o cia padareme, kad objektas nebuvo prilygintas niekam ir tada viskas prasideda nuo pradziu ir spaisdinima dedame pabaigoje;
}


//
// JavaScript Arithmetic Operators
// %	Modulus (Remainder)
var x = 6;
var y = 2;

var z = x % y;

console.log( z );
// atsakymas 0, nes 6 dalinasi is 2 ir nelieka liekanos.;

var x = 7;
var y = 2;

var z = x % y;

console.log( z );
// atsakymas 1, nes 7 nesidalina is 2.t.y. lieka liekana 1./
