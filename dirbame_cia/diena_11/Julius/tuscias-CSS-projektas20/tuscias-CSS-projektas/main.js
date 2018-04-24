console.log( "labas as cia" );


$('h1').css('color', 'green');

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

for (var i =  0; i < 2; i++){
  var x = $('h1'). eg(i);
  x.text("Antrastes nr:" + x.index() );
}

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$('section h2').tex( "Pakeista antraste" );

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
var rekl = $('li.reklama'). text()

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li classs='reklama'> ir jam ideti dar viena taributa: style='color: red'   (naujant jQuery)

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: classs='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
