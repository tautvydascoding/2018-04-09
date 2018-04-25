console.log( "labas as cia" );


$('h1').css('color', 'green');


$('h1').addClass('bg-info text-light PIRMAS');
$('h1').removeClass('text-light');

// $('p').toggleClass('bg-warning');
// $('p').toggleClass('bg-warning');

// ar tiesa
if ( $('p').hasClass('bg-warning') ) {
    console.log("p turi klase  bg-warning");
    $('p').removeClass('bg-warning');
} else {
    console.log("p NETURI klase  bg-warning");
}

// elemntu numeravimas
$( "h2" ).addClass(function( index ) {
   return "preke-" + index;
});
