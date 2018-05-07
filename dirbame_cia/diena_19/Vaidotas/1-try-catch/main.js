console.log( "labas as cia" );


$('h1').css('color', 'green');
//0 sukurti forma: username, age;
//1 paimti ivesta informacija ir isvesti i lentele!
//1.1 panaudoti event.preventDefault kad sustapdyt formo veikima.
//2 patikrinti ar vartotojo ivestas vardas yra nuo 8 iki 12 simboliu
//2.1 patikrinti ar ivestas amzius yra >14
$('button[name="reg"]').on('click', function(event){
  // alert("Pavyko");
  event.preventDefault();

  var vardas = $('input[name="username"]').val();
  var vardas2 = document.forms["tikrinimas"]["username"].value;
  var amzius = $('#amzius').val();

  if(vardas.length<8 || vardas.length>21){
    $('input[name="username"]').addClass('bg-danger');
    $('#error-zinute').text("Ivedet blogai varda");
  }
  if (amzius.val()<14) {
    amzius.addClass('bg-danger');

  }



});


// try {
//     var x = -2;
//     if( x <= 0 ) {
//     	throw "vartotojas bando pirkti minus prekiu";
//     }
//     isgalvotaNeegzisutojanttiFunkcija("Welcome guest!");
// }
// // catch - suveiks tik jeigu buvo klaidu try{} dalyje arba iskviesiesime su "throw"
// catch(err) {
// 	if( err.message == "x is not defined") {
//
//     } else if( err.message == "isgalvotaNeegzisutojanttiFunkcija is not defined") {
//
//     }
//     document.getElementById("demo").innerHTML = err;
//     document.getElementById("demo").innerHTML = err.message;
// }
// // finally - nebutinas!!!
//  finally {
//      console.log('Sitas tekstas/code matomas nesvarbu ar buvo klaidu ar ne');
//  }
