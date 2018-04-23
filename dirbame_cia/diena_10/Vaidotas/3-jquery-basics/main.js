console.log( "labas as cia" );


// $('h1').css('color', 'green');
//
// $('h3:last').css("background-color","pink");
//
// $('header h3:even').css("color","blue");
//
// $("h3:eq(1)").css("color","pink"); // nurodo kelinta elementa perdazyt.

//.css() rua jQuery f-cija, tai ja turi tik juery objektai
// eq() grazina tik jquery elementa
// $(".keiciu").click(function(event){
//   $("h1").css("background-color", "black");
//   $("h1").css("color", "white");
// });
// $(".atkeiciu").click(function(event){
//   $("h1").css("background-color", "white");
//   $("h1").css("color", "black");
// });

//  visur naudoti tik jQuery!!!!!!

// UZDUOTIS 1

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// $("h1, h2").css("color", blue);



 $(".keiciu").click(function(event){
$("h1, h2").css("color", "blue");
 });

 $(".atkeiciu").hover(function(event){
$("h1, h2, li").css("color", "black");
$("h1").css("color", "orange");
 });

 $(".atkeiciu").click(function(event){
   alert("nespausk!");


 });

// A2) kas antra h2 pakeisti i melyna

$(".kasantra").click(function(event){
$("h2:even").css("color", "red");
});
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$(".listas").click(function(event){
$("li:last").css("color", "green");
});
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
$(".list").click(function(event){
$("li:not('.reklama')").css("color", "yellow");
});
