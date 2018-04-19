console.log( "labas as cia" );

// 1 UZDUOTIS
// patikrinti ar masyve yra ieskomas skaicius;

var ieskomas = 55; // geriau daryti per kintamaji paieska, kad pakeitus, kam lygus kintamasis, nereiktu ir naujo paleisti for ciklo;
// realiai i = 0, 1,  2, 3, 4,  5,   6,  7,  8
var masyvas = [5, 10, 1, 6, 89, 100, 55, 20, 30];

for (var i = 0; i < masyvas.length; i++) {
  if ( masyvas[i] === ieskomas ) {
    console.log( "Sveikinu! Stalciuje nr.: ", i );
    document.querySelector("h1").innerHTML = "Sveikinu! <br> Stalciuje nr. :" + i ;
  }
}
