console.log( "labas as cia" );


$('h1').css('color', 'green');

var x = $('h1').eq(0).text();
var y = $('h1').html();
console.log(  x );
console.log(  y );



$('input').on('blur', function() {
    var z = $('input').val(); // val() - paima IVEDIMO LAUKO IVESTA TEKSTA
    var ilgis = z.length;
    console.log(  z );
});


// pakeisti paskutini h1 teksta
$('h1').eq(-1).text('Pakeistas');
$('h1').html('<b>Pakeistas<b>');


$('h1').attr('class', 'bg-warning  text-center');
$('h1').eq(0).attr('title', 'Tu uzvedei pelyte   ');



//
