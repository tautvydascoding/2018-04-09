console.log( "labas as cia" );


$('h1').css('color', 'green');

var x = $('h1').eq(0).text();
console.log(x);

var y = $('h1').html();
console.log(y);


$('input').on('blur', function(){
  var z =$('input').val();
  var ilgis = z.length;
  console.log ( z );
});

// pakeisti paskutini h1 tekstas

$("h1").eq(-1).text("Pakeistas"); // -1 pasirenka paskutini elementa.


$("h1").attr('class',"bg-warning text-center");

$("h1").eq(0).attr('title', "tu uzvedei pelyte");

//javascripte nebutu pasirink paskutinio
// document.querySelector('h1').innerHTML = "Pakeistas";


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

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
//

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

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
