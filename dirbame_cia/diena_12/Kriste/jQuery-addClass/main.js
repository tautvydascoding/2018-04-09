console.log( "labas as cia" );

  // Query-CLASS

    // addClass()     Adds one or more classes to the selected elements
    // addClass( [function( index, curentClass)] ) - // NOTE: receives the INDEX position of the element in the set and the existing class name(s) as ARGUMENTS. Within the function, this refers to the current element in the set
    // removeClass() - Removes one or more classes from the selected elements
    // toggleClass() - Toggles between adding/removing classes from the selected elements
    // hasClass("protected")
    // is('.pretty.awesome')

    // $("h1").addClass("specialSell");
    // $( "p" ).removeClass( "myClass noClass" ).addClass( "yourClass" );
    // $("h1").toggleClass('change_me newClass');
    // $('h2').hasClass("mt-2");
    //

$('h1').addClass('bg-info text-light');
$('h1').removeClass('text-light');
$('p').toggleClass('bg-warning'); //tikrina ar yra. jei nera - uzdeda; jei yra -nuima; kadangi cia pirmas kartas, t.y. nebuvo uzdeta-tai uzdejo oranzine spalva;
$('p').toggleClass('bg-warning'); //kadangi jau buvo uzdeta -tai si karta nuima;
$('p').toggleClass('bg-warning');//kadangi ankstesne komanda nuemem- tai dabar patikrino, kad nera - ir uzdedejo oranize spalva;

//ar tiesa?
if ($('p').hasClass('bg-warning') ) {
  console.log("p turi klase bg-warning");
  $('p').removeClass('bg-warning');
} else {
  console.log("p NEturi klases bg-warning");
}


// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// // 1.1  sukurti:
// <section>
//     <h1>  Tekstas </h1>
// </section>

//1.2 patobulinti h3 -  ant h3 elemento uzdesime klases: " bg-info  mt-5 aukstis-200"

$('h3').addClass('bg-info mt-5 aukstis-200');

// 1.3  nuo h3 pasalinti mt-5 klase

$('h3').removeClass('mt-5');

// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -

$('h3').toggleClass('aukstis-200');
// kadangi jau buvo uzdeta, tai rado ir nueme;

// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
// KAS pasikeite?

$('h3').toggleClass('aukstis-200');
//kadangi ankstesne komanda nueme, tai dabar nerado ir uzdejo;

// 2. Patikrinti ar h3 turi klase 'bg-info':
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

if ($('h3').hasClass('bg-info')) {
  $('h3').addClass('bg-danger');
} else {
  $('h3').addClass('bg-success');
}

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"

if ( $('section').hasClass('aukstis-200') ) {
  $('section').addClass('aukstis-500');
} else {
  $('section').addClass('aukstis-200');
}

// //
// 
//
//
