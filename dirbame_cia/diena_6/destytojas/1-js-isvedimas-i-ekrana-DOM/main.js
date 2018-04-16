console.log( "labas as cia" );


//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
//
// document.write("Labas");
// document.write("Viso");

// window.alert(" labas ");
// var age = 29;
// alert(  age  );

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);

// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// document.querySelectorAll('.bg-info')[0].innerHTML = " <b>Antraste</b>";
//
// document.getElementById('logo')
// document.getElementsByClassName('bg-info')
// document.getElementsByTagName('h1')


document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// pasitikrinimas - ar veikia selector'ius
var x = document.querySelector('h1');
console.log(  x );  // jei isveda nieko/null/undefined  - tai 'h1' elemento nerado
// ! atsidaryt html - faila ir pasitikrinti  ar tikrai ten 'h1'



var aukstis = document.querySelector('h1').clientHeight;   //
console.log(  aukstis );
//
