console.log( "labas as cia" );

$('h1').css("color", "green");
// suveike -pakeiciau spalva is oranzines i zalia (nes pris tai css faile, kuri naudoju as buvau uzdejusi h1 spalva oranzine):)


// TEORIJA
// //Execute the function when the DOM is ready to be used.
// $(function() {
//     // Document is ready
// });
//
// jQuery(function( $ ) {
//     // Your code using failsafe $ alias here...
// });
//
//
// //=============css===============
// $( "article > p" ).css( "border", "1px solid gray" );
//
// // arba
//
// var myCSS = {
//     border: "1px solid gray",
//     color: "red"
// };
// $( "article > p" ).css( myCSS );
//
// // advance: get curent width and height
// // $( 'p' ).css(
// //     {
// // 	  width: function( index, value ) {
// // 		console.log("curent width:" + value);
// // 		return parseFloat( value ) * 1.2;
// // 	  },
// // 	  height: function( index, value ) {
// // 		console.log("curent height: " + value);
// // 		return parseFloat( value ) * 1.2;
// //   }
// // });
// // //=============selectors kaip CSS=========
//
// // keliu elementu select'as (select h1 and h2 elements)
// $( "h1, h2" ).css( "background", "black" );
// $( "h1" ).css().add( "h2" ).css( "background", "yellow" );
//
// // paveiks paskutini is li elementu
// $( "li" ).last().css( "background", "yellow" );

// // $( "li:last" ).addClass( "selected highlight" );
// $( "p:even" );
// //$( "p:eq(1)" ); // pirmas
//
// // $( "h1", "form" ).addClass( "bar" );
// // !!! importnat sekantis parametras nurodo kur ieskoti. pvz ^ h1 bus ieskomas TIK form'os viduje !!!
//
// // more complex  - antras .css() suveiks abiems elementams (h1 ir h2)
// // $( "h1" ).css( "font-size", "8px" ).add( "h2" ).css( "background", "yellow" );
//
// // veiksmus atlieka surasyta tvarka
// $( "header" ).css( "color", "red" ).find( "h1" ).css( "color", "green" );  // note: find(...) - iesko elemento viduje selected item
//
// // form'os lauku select'as
// // $( "input[type='email']").val("Username");    // will return the current real value of a text field, for example if the user typed something there after a page load.
// // note: $("input[type='email']").attr('value') // will return value from DOM/HTML.
//
// // brolius ir seses Isskyrus h2 pati
//
//
//
// $("body h2").siblings().css({"color": "red", "border": "2px solid red"});
// // h2 brolius kurie yra "p", bet nera h2 ar kiti
// $("h2").siblings("p").css({"color": "orange", "border": "2px solid red"});
// // sekanti brolini elementa
// $("h2").next().css({"color": "red", "border": "2px solid red"});
// $("h2").nextAll();
// $("h2").nextUntil("h6"); // !!! tik su elementais, su class neveiks


// UZDUOTYS:

//  visur naudoti tik jQuery!!!!!!

// UZDUOTIS 1

// .html kodas:
// <h1>Isijunk konsole</h1>
// <h1>Isijunk konsole</h1>
//
// <h2> 1. h2 Isijunk konsole</h2>
// <h2> 2. h2 Isijunk konsole</h2>
// <h2> 3. h2 Isijunk konsole</h2>

//  <section>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//  </section>
//
// <ul>
//     <li>Home</li>
//     <li>About</li>
//     <li classs='reklama'>Gallery</li>
//     <li>Contact</li>
// </ul>
//        <input type="text" name="vardas" value="">
//        <input type="email" name="pastas" value="">

//pakeisiu tik paskutini h3 elementa-jo background color bus geltona;

// $( "h3" ).last().css( "background", "yellow" );
// kitas budas:
$( "h3:last" ).css( "background", "yellow" );

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)

$("h1, h2").css("color", "blue");

// A2) kas antra h2 pakeisti i raudona

$("h2:even").css("color", "red");
// komanda even - isrenka kas antra lygini (t.y. 0,2,4,6 ir t.t.);

// B) paskutinta "h4" elemnta pakeisti i zalia (visur naudoti tik jQuery)

$("h4:last").css("color", "green");

// C) visus 'h1' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

$("h1:not('.reklama')").css("color", "yellow");

// D) pakeisti antro h4 spalva i oranzine;
// su eq komanda nurdau kelinta elementa noriu pakeisti;
$("h4:eq(1)").css("color", "orange");
// eq - nurodai, kelinta h3 grazinti (grazina tik Jquery objekta);
// // NOTE: rasau, kad imu 1, nes prasideda indexai nuo 0 !!!!!!!!

// E)
// a) susikurk html faile button mygtuka;
// b) su .click funkcija paleisk, kad paspausdus mygtuka pasikeistu h1 background spalva i juoda, o teksto spalva i balta

$(".keiciu").click( function(event) {
    $('h1').css("background-color", "black");
    $('h1').css("color", "white");
  }
);

// F)
// a) susikurk html faile button mygtuka;
// b) su .click funkcija paleisk, kad paspausdus mygtuka pasikeistu elementai (susigalvok pats ka ir kaip nori pakeisti)

$(".keiciu2").click( function(event) {
    $('h3').css("background-color", "pink");
    $('h4:last').css("color", "blue");
    $('h1:odd').css("background-color", "red");
}
);

// G)
// su .click funkcija paleisk, kad pasikeistu elementai (susigalvok pats ka ir kaip nori pakeisti)

$(".keiciu3").click (function(event) {
  $("h1,h2").css("color", "blue").add("h3,h4").css("background-color", "yellow");
}
);

// H)
// uzdek click ant body, nusidazo visi h1 zaliai;

$("body").click( function(event) {
    $('h1').css("color", "green");
  }
);

// H)
// uzdek click ant h2, nusidazo visi h4, isskyrus pirmo, background zaliai;
// // NOTE: uzsidek klase h4, kuriam nenori nieko daryti;

$("h2").click (function(event) {
    $("h4:not('.nenoriu')").css("background-color", "green");
  }
);

// I)
// paslepk h3 per 3 sekundes;

$("h3").hide(3000);


////
