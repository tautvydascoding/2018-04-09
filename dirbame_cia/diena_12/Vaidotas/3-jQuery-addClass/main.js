console.log( "labas as cia" );
// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery





// 1.1  sukurti:



//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200"
$('h1').addClass("bg-info mt-5 aukstis-200");
// <section>
//     <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>
// </section>

// 1.3  nuo h1 pasalinti mt-5 klase
$('h1').removeClass("mt-5");

// 1.4  paleisti komanda   toggleClass( 'aukstis-200')
$('h1').toggleClass("aukstis-200");

// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
// KAS pasikeite?
$('h1').toggleClass("aukstis-200");

// 2. Patikrinti ar h1 turi klase 'bg-info':
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

if ($('h1').hasClass('bg-info')) {
  $('h1').addClass('bg-danger');
} else {
    $('h1').addClass('bg-success');
}

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"

if ($('section').hasClass('aukstis-200')) {
  $('section').addClass('aukstis-500');
}else {
    $('section').addClass('aukstis-200');
}

//------------------------------------------
// $('h1').css('color', 'green');
//
// $('h1').addClass('bg-info text-light');
// $('h1').removeClass('text-light');
//
//
// $('p').toggleClass('bg-warning');
// $('p').toggleClass('bg-warning');
//
// if ($('p').hasClass('bg-warning')) {
//   $('p').removeClass('bg-warning');
// } else {
//   console.log("P neturi klases bg-warning");
//

//============= add Class ===============
// -------simple js------

// var d = document.getElementById("div1");
// d.className += " otherclass";
// d.classList.add("otherclass");
// d.classList.remove("otherclass");
// d.classList.toggle('otherclass');

//   -------jQuery-CLASS-----

// addClass()     Adds one or more classes to the selected elements
// addClass( [function( index, curentClass)] ) - // NOTE: receives the INDEX position of the element in the set and the existing class name(s) as ARGUMENTS. Within the function, this refers to the current element in the set
// removeClass() - Removes one or more classes from the selected elements
// toggleClass() - Toggles between adding/removing classes from the selected elements
// hasClass("protected")
// is('.pretty.awesome')

//$("h1").addClass("specialSell");
//$( "p" ).removeClass( "myClass noClass" ).addClass( "yourClass" );

// $("h1").toggleClass('change_me newClass');

// $("button").click(function(){
//    $("h1, h2, p").addClass("blue");  // you can select multiple elements, when adding classes
//    $("div").addClass("important");
// });


//Given an unordered list with two <li> elements, this example adds the class "item-0" to the first <li> and "item-1" to the second.
// $( "ul li" ).addClass(function( index ) {
//    return "item-" + index;
// });


// $("h1").addClass( function( index, currentClass ) {
//    return index + currentClass;
// });
//add the "green" class to a div that already has a "red" class
// $( "div" ).addClass(function( index, currentClass ) {
//    var addedClass;
//
//    if ( currentClass === "red" ) {
//        addedClass = "green";
//        $( "p" ).text( "There is one green div" );
//    }
//    return addedClass;
// });

//=================has Class==============
// if ( document.getElementById("MyElement").classList.contains('MyClass') ) {}
// if ( document.getElementById("MyElement").className.match(/(?:^|\s)MyClass(?!\S)/) ) {}
//
// // jQuery
// if ( $('#MyElement').hasClass('MyClass') ) {}
// // arba
// $( 'p' ).is( ".blue, .red" );

//$( "div"  ).on( "click", function() {
//   if ( $( this ).is( ":first-child" ) ) {
//     $( "p" ).text( "It's the first div." );
//   } else if ( $( this ).is( ".blue,.red" ) ) {
//     $( "p" ).text( "It's a blue or red div." );
//   } else if ( $( this ).is( ":contains('Peter')" ) ) {
//     $( "p" ).text( "It's Peter!" );
//   }
//   });
//
// <div></div>
// <div class="blue"></div>
// <div></div>
// <div class="red"></div>
// <div><br/><span>Peter</span></div>
// <div class="blue"></div>
// <p>&nbsp;</p>


//=============set  attribute===============
//$("h2", 'article').attr('id','a1234');

//=====================================

//=====================================

//=====================================

//=====================================

//=====================================

//=====================================