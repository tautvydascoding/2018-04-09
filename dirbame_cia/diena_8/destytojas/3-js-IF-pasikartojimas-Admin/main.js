console.log( "labas as cia" );



// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

// parasyti koda, kuris patikrins:
// 1.1 ar prisijunges vartotojas.
//      sekmes atveju - pasisveikins su jo vardu.
// 1.2 Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves teksta: "Buk aktyvus, pakilsi pareigose"

var arPrisijunges = true;  // true arba false  (Boolean)
var vartotojoTipas = 'moderator';
var userName = "Tomas";


// ar true?
if ( arPrisijunges ) {
    // document.querySelector('h1') - suranda HTML faile 'h1' elementa
    // .innerHTML - pakeiciam surasto elemento vidu
    document.querySelector('h1').innerHTML = "Labas" + userName;

    if (vartotojoTipas == 'admin') {
        console.log('Labas admine');
        document.querySelector('h1').innerHTML += "<button class='btn'>Logout</button>";
    } else {
        document.querySelector('h1').innerHTML += "<br><br>Buk aktyvus ir pakilsi pareigose";
    }
}
