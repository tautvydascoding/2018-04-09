console.log( "labas as cia" );


//  visur naudoti tik jQuery!!!!!!


// .html kodas:
// <h1>Isijunk konsole</h1>
// <h1>Isijunk konsole</h1>
//
// <h2> 1. h2 Isijunk konsole</h2>
// <h2> 2. h2 Isijunk konsole</h2>
// <h2> 3. h2 Isijunk konsole</h2>
//
//  <section>
//      <h2> 1. h2 Isijunk konsole</h2>
//      <h2> 2. h2 Isijunk konsole</h2>
//      <h2> 3. h2 Isijunk konsole</h2>
//      <h2> 4. h2 Isijunk konsole</h2>
//  </section>
//
// <ul>
//     <li>Home</li>
//     <li>About</li>
//     <li classs='reklama'>Gallery</li>
//     <li>Contact</li>
// </ul>

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

// labai protingas budas!
// for (var i = 0; i < 2; i++) {
//   var x = $('h1').eq(i).index();
//   console.log( x );
// }

for (var i = 0; i < 2; i++) {
  var x = $('h1').eq(i);
  x.text("Antraste nr:" + x.index() );
}


//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
//

$('section h2').text('Pakeista antraste');


// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

var x = $('.reklama').text();
console.log("Atspausdinu li su class reiksme:", x );
// // NOTE: arba dar galima ieskoti "li.reklama" - t.y. be tarpo. ir bus lygiai tas pats, kas ieskoti tik klases .reklama/ bet jei butu tokia pati klase uzdeta dar ant kokio elemento, ne li, o pvz ul, tai tada pravers sis budas!!!!

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

var x = $('li').text();
console.log("VISOS li reiksmes:", x );

// // NOTE: sugalvoti for cikla;

for (var i = 0; i < 4; i++) {
  var x = $('li').eq(i).text();
  console.log( x );
}

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)



//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li classs='reklama'> ir jam ideti dar viena taributa: style='color: red'   (naujant jQuery)

$('.reklama').attr('style', 'color: red');


// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: classs='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

$('li').attr('class', 'nav-item');
$('li').eq(0).attr('class', 'nav-item active');


// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'


$('input').eq(0).attr('value', 'Tomas');
$('input').eq(1).attr('value', 'a@a.lt');


// // NOTE:  o kaip dar kitaip padaryti, kad tik i viena ivestu Tomas, o i kita el.pasta????? gal su kokia funkcija..?? nezinau. reik galvot;
