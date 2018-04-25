console.log( "labas as cia" );


$('h1').css('color', 'green');




// UZDUOTIS
// <section>
//     <h1>  1 Antraste </h1>
//     <h2>  2 Antraste </h2>
//     <h3>  3 Antraste </h3>
// </section>

// UZDUOTIS
// Susikurti x1, x2 ... su tekstais 'append', 'prepend', 'before', 'after'

// UZDUOTIS
// html faile siuos tekstus ideti i section arba virs section

var x1 = "prepend tekstas";
var x2 = "append tekstas";
var x3 = "before tekstas";
var x4 = "after tekstas";
var x5 = "<pp> appendTO tekstas---------- </pp>";

// idedamas i tecio elemento vidu, kaip pats pirmas vaikas
$('section').prepend( x1 );      // ideti i pradzia
// $('section').prepend( $('h3') ); // perkelti
// $('section').prepend( 'naujas tekstas' ); // tekstas
// $('section').prepend( '<b>sukuriau</b>' ); // sukurti

$('section').append( x2);
$('section').after( x4);
$('section').before( x3);
$( '<div> aa </div>' ).appendTo(   'section'   ); // sukurs div ir jis nukeliaus i section kaip paskutinis vaikas
$(  'h1').appendTo(   'section'   );  // h1 nukeliaus i section kaip paskutinis vaikas


var x5 = "<pp> appendTO tekstas---------- </pp>";
$(  x5 ).appendTo(   'section'   );  // h1 nukeliaus i section kaip paskutinis vaikas
