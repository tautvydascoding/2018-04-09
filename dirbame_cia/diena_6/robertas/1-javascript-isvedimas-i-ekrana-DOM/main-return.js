//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas() {
  var vardas = "Robertas";
  return vardas;
}

console.log(getVardas());

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde() {
  var vardas = "Robertas",
    pavarde = "Rudys";
  return [vardas, pavarde];
}

var vardasPavarde = getVardasPavarde();
console.log(vardasPavarde[0] + " " + vardasPavarde[1]);

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

document.querySelector("body").innerHTML += '<h1 id="superHeading" class="bg-info" style="height: 20rem;">Tekstas viduj</h1>';

function getH1ElementoAukstis() {
  return document.querySelector("#superHeading").clientHeight;
}

console.log("H1 height: " + getH1ElementoAukstis());

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
  var avg = (x1 + x2 + x3 + x4 + x5) / 5;
  return avg;
}

console.log(getPazymiuVidurkis2(1, 2, 3, 4, 5));
