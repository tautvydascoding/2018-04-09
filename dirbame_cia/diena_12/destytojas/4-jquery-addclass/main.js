console.log( "labas as cia" );


$('h1').css('color', 'green');



//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)
 $('h1').addClass('bg-info  mt-5 aukstis-200');

// 1.3  nuo h1 pasalinti mt-5 klase
$('h1').removeClass('  mt-5 ');
// 1.4  paleisti komanda   toggleClass( 'aukstis-200')  -
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

// ar tiesa?
if(  $('h1').is(' .bg-info' )  ) {
    $('h1').addClass('bg-danger');
}  else {
    $('h1').addClass( "bg-success" );
}

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"
