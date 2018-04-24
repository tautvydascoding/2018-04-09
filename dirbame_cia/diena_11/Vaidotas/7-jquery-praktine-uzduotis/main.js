console.log( "labas as cia" );


$('h1').css('color', 'green');

//  visur naudoti tik jQuery!!!!!!



// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)


$('h1').eq(0).text("Antraste nr: 1");
$('h1').eq(1).text("Antraste nr: 2");


//  UZDUOTIS 2

// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$(' section > h2').text("Pakeista antraste");

//

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

var z = $('li.reklama').text();
console.log(z);

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

for (var i = 0; i < 4; i++) {
  console.log($("li").eq(i).text());
}




//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
function sukeitimas (){
  var ind1 = $("li:contains('About')").index();
  var ind2 = $("li:contains('Gallery')").index();
  var baba = $('li').eq(ind1).text('Gallery');
  console.log(baba);
}
sukeitimas();
//---------
// UZDUOTIS 6
// surasti <li classs='reklama'> ir jam ideti dar viena taributa: style='color: red'   (naujant jQuery)

$('li.reklama').attr("style", "color: red");

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: classs='nav-item '   (naujant jQuery)
 $("ul").attr("class","nav");
 $("li").attr("class","nav-item");
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$('li').eq(0).attr("class","nav-item active");

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)

$("input").attr("value","XXX");
//  ivesti vardas: 'Tomas'
$("input").eq(0).attr("value","Tomas");
$("input").eq(1).attr("value","a@a.lt");
//  ivesti pastas: 'a@a.lt'
