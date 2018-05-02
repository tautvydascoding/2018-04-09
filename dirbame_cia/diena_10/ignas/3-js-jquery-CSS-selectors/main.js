console.log( "labas as cia" );


$('h1').css('color', 'green');


// $('h3').last().css('color', 'pink');
$('h3:last').css('color', 'pink');


$('header h3:even').css('color', 'red');


$('h3:eq(1)').css('background-color', 'pink');

// eq - nurodai, kelinta h3 grazinti (grazina jquery objekta)
$('h3').eq(1).css('background-color', 'pink');
// $('h3')[2].css('background-color', 'pink');  //!!! ERROR
// .css()  - yra jQuery f-ja, tai ja turi TIK jquery objektai
// eq()  - grazina jquery objekta


$('.keiciu').click(   function(event) {
         $('h1').css('background-color', 'black');
         $('h1').css('color', 'white');
        }
    );

//
