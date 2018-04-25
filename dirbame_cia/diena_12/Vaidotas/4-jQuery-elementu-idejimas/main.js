console.log( "labas as cia" );


$('h1').css('color', 'green');


var x1 = "prepend tekstas";
var x2 = "append tekstas";
var x3 = "before tekstas";
var x4 = "after tekstas";
var x5 = "appendTO tekstas";
var x6 = "<p>sukurtas naujas tekstas</p>";

//uzduotis
// susikurti x1 x2, x3 ... su 'tekstais append'


$('section').prepend(x1); // dedamas į elemento vidų kaip pirmas vaikas
$('section').append(x2); // dedamas į elemento vidų kaip paskutinis vaikas
$('section').before(x3); // dedamas prieš elementą
$('section').after(x4); // dedamas po elemento
$("<b>appendTO tekstas</b>").appendTo(('section'));

$('h1').appendTo('section');//nukeliavo kaip paskutinis vaikas

$(x6).appendTo('section');

// $('Section').prepend($('h3')); // galima perkelti elementa
// $('Section').prepend('naujas tekstas'); // sukurti teksta
// $('Section').prepend('<b>sukuriau</b>'); // galima sukurti nauja elementa;
