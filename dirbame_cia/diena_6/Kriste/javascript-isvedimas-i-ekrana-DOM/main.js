console.log( "labas as cia" );


//======================TEKSTO ISVEDIMAS (tik susipazinti)===============
// UZDUOTIS
// Issimeginti komandas:

// teksto isvedimas i narsykle;
document.write(" <b class='bg-info'> Mano tekstas </b> ");

// document.write("Labas");
// document.write("Viso");
// taip, kaip virsuje, negalima rasyti, nes sitas tekstas bus vienas salia kito. turime kurti elementa, jei norime, kad butu skirtingose eilutese.

// window.alert("labas");
// geriau nenaudoti. narsykle po kelinto karto blokuoja.

// var age = 27;
// alert( age );

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// irgi nelabai naudojamas, nes atrdo kaip kokia klaida ir seno diziano- negrazus;

document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// // ieskos elemento h1, ir tada su komanda innerHTML mes pakeisime h1 turini i nurodyta "Antraste";
//

// !!!!kaip pasitikrinti ar pavyko, ar teisingai parinktas selektorius? jeigu nieko neisveda (ar null, undefinded), tai vadinasi tokio nerado. Tada reikia tikrintis ar toks elementas aplamai yra html faile;
var x = document.querySelector('h1');
console.log( x );


// document.querySelectorAll('p')[0].innerHTML = " <b>Antraste</b>";
// // kai uzdedame all, tai ieskos visu 'p"' elementu. bet tada turime nurodyti kelinta is ju pakeisti. nurodome skliaustuose, siuo atveju parasiau, kad 0-inta;

// antras budas zemiau; ir jis gerokai sudetingesnis;
// document.getElementById('logo').innerHTML = " <b>Antraste</b>";
// document.getElementsByClassName('bg-info').innerHTML = " <b>Antraste</b>";
// document.getElementsByTagName('h1').innerHTML = " <b>Antraste</b>";



//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding..clientHeight;   // clientHeight includes the height and vertical padding.




// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
