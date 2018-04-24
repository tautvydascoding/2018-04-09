console.log("labas as cia");


$('h1').css('color', 'green');

var x = $("h1").text();
var y = $("h1").html();
console.log(x);
console.log(y);

$("input").on("input", function(event) {
  var z = $("input").val();
  console.log(z);
});
