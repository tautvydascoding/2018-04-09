// console.log( "labas as cia" );
//
//
//
// // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
//
// var masyvas = []; //tuscio masyvo kurimas
// //pildome masyvo cikla
//
// for (var i = 0; i < 50; i++) {
//   masyvas[i] = 0;
//   }
// console.log("uzpildytas masyvas: ", masyvas); // i = 0, 1, 2, 3, 4, 5, 6, 7, ... , 49.
//
// // 5.1  sukurti masyva naudojant FOR (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// var skaiciai = [];
//
// for (var i = 0; i < 50; i++) {
//   skaiciai[i] = 1;
// }
//
// console.log(skaiciai);
//
//
// // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
//
//
// if(skaiciai[0]===1) {
//   console.log("vienas");
// }
//   else{
//     document.querySelector('h1').innerHtml= "Ne vienas";
// }
//
// console.log("pries keiciant skaiciai buvo: ", skaiciai);
//
// for (var i = 0; i < skaiciai.length; i++) {
//   //jeigu liekana nelygi nuliui
//   if ( i % 2 != 0) {
//   skaiciai[i] = 3;
//   }
// }



//arba
// for (var i = 0; i < skaiciai.length; i++) {
//   if (i % 5 == 0) {
//     skaiciai[i]=9;
//   }
// }




// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// for (var i = 0; i < skaiciai.length; i++) {
//   i=i+4;
//   skaiciai[i] = 9;
// }
//
// console.log("po keitimo skaiciu masyvas: ", skaiciai);


// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

var arPrisijunges = true;

var vartotojoTipas = 'moderator';

var userName = "Tomas";


if (arPrisijunges) {
  document.querySelector('h1').innerHTML= "Labas, "+userName+"!";
    if (vartotojoTipas == "moderator") {
      console.log("Labas, Admine");
    document.querySelector('h2').innerHTML= "<button class='btn'>Logout</button>";
    }
    else {
      document.querySelector('h1').innerHTML += " Bukt aktyvus ir pakilsi pareigose";
    }
}
// parasyti koda, kuris patikris ar prisijunges vartotojas.
// sekmes atveju - pasisveikins su jo vardu.
//Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoki paveiksliuka













//=============bootstrap---sm-md-lg-xl (30-60m)==========
