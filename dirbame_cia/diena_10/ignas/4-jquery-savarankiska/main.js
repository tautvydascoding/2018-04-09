console.log( "labas as cia" );



// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i raudona
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}




$('h1').click(function(event) {
    $('h1, h2').css('color', 'blue');
});

$('h2').click(function(event) {
    $('h2:odd').css('color', 'red');
    $("   li:not('.reklama')  ").css('color', 'pink');
});


$('h2').toggle(3000);


//
