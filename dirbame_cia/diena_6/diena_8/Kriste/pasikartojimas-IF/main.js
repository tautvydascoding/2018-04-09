console.log( "labas as cia" );



// 3 UZDUOTIS
// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"
// parasyti koda, kuris patikris ar prisijunges vartotojas - sekmes atveju - pasisveikins su jo vardu. Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves kitoji paveiksliuka


var arPrisijunges = true;
var vartotojoTipas = "subscriber";
var userName = "Antanas Antanaitis";

if ( arPrisijunges ) { // cia galiu net nerasyti lygybes zenklo, nes if automatiskai tikrina ar True;
  console.log("Sveiki prisijunge,", userName, "!");
  document.querySelector("h1").innerHTML = "Labas, " + "<br>" + userName + "!";
                                            // br mygtukas reiskia, kad is naujos eilutes
    if (vartotojoTipas == "moderator") {
      console.log("vienoks paveiksliukas");
    }
    else if (vartotojoTipas == "subscriber") {
      console.log("parodo kitoki paveiksliuka");
      document.querySelector("h2").innerHTML = "<button class='btn'>Logout</button>";
    }
  // salygas iraseme i pirmos salygos vidu, nes jei vartotojas neprisijunges- mes isvis nieko nedarome;
}
