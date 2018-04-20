console.log( "labas as cia" );
//
// // =================taisyklingas Array copy  =================
// // NOTE: var arr2 =  arr1; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var arr1 = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var arr2a = arr1.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var arr2b = arr1.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// dar vienas budas su FOR ciklu;

// // ================= ========= ======== ========
//
//
// // UZDUOTIS

// // 0 UZDUOTIS ----
    var atlyginimas = 500;
    var arPasikeite = false;

    // UZDUOTIS
    // A) patikrinti ar 'atlyginimas' padidejo ir panaudoti kintamaji 'arPasikeite'.rementis siuo kintamuoju, isvesti pranesima -" atlyginimas pasikeite" arba 'atlyginimas toks pats'

    var atlyginimas = atlyginimas + 100; // var atlyginimas += 100;

    if ( atlyginimas > 500) {
      arPasikeite = true;
    }
    else {
      arPasikeite = false;
    }

    if ( arPasikeite ) {
      console.log("Atlyginimas padidejo - Sveikinu!");
    }
    else {
      console.log("Bandykite kita karta...");
    }

// UZDUOTIS 1;

ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

var ieskauZmogaus = "Rico";

for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskauZmogaus ) {
    console.log("radau zmogu", ieskauZmogaus, "stalciaus nr:", i );
  }
}

for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskauZmogaus ) {
    console.log("radau zmogu", ieskauZmogaus, "stalciaus nr:", i );
    break; // nutraukia cikla. bet tik viena. jei cikle butu ciklas, tai nutrauktu tik viena -paskutiniausia; ir jis turi buti visada zemiausioje vietoj, kur tu nori, kad nutruktu./ nes jei butume uzdeje console.log gale (po break), tai break nebevykdytu console logo uzduoties;, vykdytu tik po for ciklo paskutinio skliausto };
  }
}

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

var ieskauZmogaus = "Ricoco--";
var arRadau = false;

for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskauZmogaus ) {
    arRadau = true;
    console.log("radau zmogu", ieskauZmogaus, "stalciaus nr:", i );
  }
}
if (arRadau == false) {
  // jeigu noriu paklausti ar false? nes automatu klausia ar true;
  // taigi galima rasyti ( !arRadau ) - t.y. tikrinu ar netiesa?
  console.log("Neradau" , ieskauZmogaus);
}
// jeigu buciau cia dejusi console.log, tai man atspausdintu bet kokiu atveju -jokio skirtumo koks is tikro rezultatas. todel turejau deti dar viena IF komanda ir joje ideti norima teksta, pagal norima rezultata;


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris( ieskomasTekstas ) {
  for (var i = 0; i < names.length; i++) {
    if (names[i] == ieskomasTekstas ) {
      return i; // return irgi nutraukia cikla;
    }
  }
  return -1; // null; cia sau parasome, kad jeigu nerado, kad mum ismestu, kad klaida;
            // // NOTE: rekomenduojama susigalvoti, kas atsiras tau, kai ivyks klaida; taip lengviau dirbti;
}
var nr = getStalciausNumeris("Rico");
console.log("Ieskomo vardo numeris:", nr );
  // pasiziurime, kas gaunasi nesekmes atveju;
  var nr = getStalciausNumeris("Ricoco----");
  console.log("Ieskomo vardo numeris:", nr );

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// manau, kad is pradziu reikia surasti kelintame stalciuje yra Freida. o tada ieskoti kokia reiksme yra pavardziu masyvo to skaiciaus stalciuje;

var ieskauVardo = "Freida";

for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskauVardo) {
    console.log( ieskauVardo, "stalciaus nr:", i );
  }
}

var pavarde = lastNames[37];
console.log( pavarde );

// kitas budas
var numeris = names.indexOf("Freida");
console.log( lastNames[numeris]);

// arba isvis dar paprasciau, bet toki koda jau labai sunku suprasti; visgi geriau siek tiek ilgiau, bt kad butu aiskiau, nes klaidos atveju bus lengviau rasti;
console.log( lastNames[names.indexOf("Freida")]);

// 4) rasti visu zmoniu vardu "Rico" pavardes ir jas susideti i atskira masyva;

var ieskauZmogaus = "Rico";
var rastosPavardes = [];

for (var i = 0; i < names.length; i++) {
  if (names[i] == ieskauZmogaus ) {
  rastosPavardes.push(lastNames[i]);
  // rastosPavardes.unshift(lastNames[i]);
  }
}
console.log( rastosPavardes );

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


ieskomiZmones = [2, 16, 17, 18, 19, 25];

for (var i = 0; i < ieskomiZmones.length; i++) {
  var nr = ieskomiZmones[i];
  console.log("Vardas:", names[ nr ]);
  console.log("Pavarde:", lastNames [ nr ]);
}

// eksperimentai su masyvais ir naujos komandos:)

var masinos = ['Audi', 'BMW', 'Subaru', 'Ford'];
var spalvos = ['melyna', 'raudona', 'balta', 'juoda'];

  // KOPIJAVIMAS galimas keliai budais;

// Pirmas:
var kopija = [];
for (var i = 0; i < masinos.length; i++) {
  kopija[i] = masinos[i];
}
// Antras:
var kopija2 = masinos.slice(0); // jei nenurodai end dalies, tai iki galo nukopijuos;
// Trecias:

  // // SPLICE(a, b, c, d, e, ..., ... )
// a= nuo kelinto (uz kelinto);
// b= kiek istrinti;
// c,d,e ir t.t. = ka iterpti uz 'a';

// uzdavinys- iterpti volvo uz 2-tro;
// uzdavinys - istrinti 1-ma ir 2-tra;
// uzdavinys - pakeisti vietoj vieno, ideti kita, t.y. vietoj 1-mo ideti "Opel";

console.log("Pries keiciant:", masinos );

masinos.splice(3, 0, "Volvo");
console.log("Po iterpimo:", masinos);

masinos.splice(1, 2);
console.log("Po istrynimo:", masinos);

masinos.splice(1, 1, "Opel");
console.log("Po replacinimo:", masinos);


  //  CONCAT - Array (masyvu) jungimas i viena;
  // masyvoPavadinimas1.concat(masyvasNR2, nr3, ... , ...)
  // gali buti daugiau nei vienas jungiamas masyvas;
  // sukurtas naujas masyvas, su kuriuo galime atlikti veiksmus, ir tu tikruju masinos ir spalvos masyvu , mes nesugadinsime;

  var masinos = ['Audi', 'BMW', 'Subaru', 'Ford'];
  var spalvos = ['melyna', 'raudona', 'balta', 'juoda'];

  var sujungtas = spalvos.concat(masinos);
  console.log( sujungtas );

// su concat mes galime sukurti ir koopija, pvz;
var kopija3 = masinos.concat(); // skliaustelius palikdami tuscius, mes pridedame tuscia masyva- vadinasi nieko nepridedame :), tai tokiu budu pasidarysime kopija, su kuria dirbdami irgi nesugadinsime originalaus masyvo;
console.log( kopija3 );

                                  // triukas su tekstu:))));
                                  var name = "Tomas";
                                  var pirmaRaide = name[0];
                                  var antraRaide = name[1];
                                  console.log( pirmaRaide );
                                  console.log( antraRaide );

                                  // galima dar viena triuka su tekstu. naudoti length ir suzinoti zodzio ilgi;
                                  var ilgis = name.length;
                                  console.log( ilgis );
                                  // triuko pabaiga;


// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }
