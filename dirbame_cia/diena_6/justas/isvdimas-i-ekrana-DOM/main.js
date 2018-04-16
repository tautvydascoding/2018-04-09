console.log( "labas as cia" );

document.write(" <b class='bg-info'> Mano tekstas </b> ");

// var age = 27;
// alert ( age );

//var ivestasTekstas = prompt ("Iveskite savo varda")
//console.log(ivestasTekstas);

document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// pasitikrinimas - ar veikia selectorius
var x = document.querySelector ('h1')
console.log( x ); // jei nieko/null/undefined neisveda , tai h1 elemento nerado

//! atsidaryt html faila ir pasitikrinti ar tikrai ten h1

var aukstis = getElementById ('manoDiv').clientHeight:



//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";



//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
