var h1_one = $("<h1></h1>").text("Isijunk konsole");
var h1_two = $("<h1></h1>").text("Isijunk konsole");

$("body").prepend(h1_one, h1_two);

var h2_one = $("<h2></h2>").text("1. h2 Isijunk konsole");
var h2_two = $("<h2></h2>").text("2. h2 Isijunk konsole");
var h2_three = $("<h2></h2>").text("3. h2 Isijunk konsole");

var section = $("<section></section>").prepend(h2_one, h2_two, h2_three);
$("body").append(section);

var li_one = $("<li></li>").text("Home");
var li_two = $("<li></li>").text("About");
var li_three = $("<li class='reklama'></li>").text("Gallery");
var li_four = $("<li></li>").text("Contact");

var ul = $("<ul></ul>").prepend(li_one, li_two, li_three, li_four);
$("body").append(ul);

var input_one = $("<input type='text' name='vardas' value=''>");
var input_two = $("<input type='email' name='pastas' value=''>");
var button = $("<button type='button' class='keiciu'></button>").text("Click me!");

$("body").append(input_one, input_two, button);

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i melyna
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

$(".keiciu").click(function(event) {
  $("h1, h2").css("color", "blue");
  $("h2:even").css("color", "red");
  $("li:not('.reklama')").css("color", "yellow");
  $("li:last").css("color", "red");
});

var on;
$("h1").mousemove(function(event) {
  $("body").css('background-color', on ? "red" : "blue");
  on = !on;
});

console.log("end main.js");
// end main.js
