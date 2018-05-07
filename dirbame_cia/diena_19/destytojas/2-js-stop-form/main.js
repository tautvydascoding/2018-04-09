console.log( "labas as cia" );


$('h1').css('color', 'green');


// UZDUOTIS:
// 0. sukurti forma: username, age
// 1. Paimti ivesta informavija ir isvesti i console
// 1.1 panaudoti event.preventDefault - tam kad sustabdyti formos veikima(kad galetuem atlikti tikrinimus)
// 2. Patikrinti as vartotojo ivestas vardas yra 8-20 simboliu
// 2.1 Patikrinti ar vartotojo ivestas amzius yra > 14

$('button[name="reg"]').on('click', function( event ){
    // alert("Pavyko");

     arYraKlaidu = false;

    var vardas = $('input[name="username"]').val(); // ivedimo lauko informacija - todel  ant lkintamojo 'vardas' - komandos nebeveiks
    var amzius = $('#amzius');  // ! ivedimo laukas

    // ar vartotoj oamzisu ivestas - blogai?
    if (vardas.length  < 8 || vardas.length > 21 ) {
        arYraKlaidu = true;
        $('input[name="username"]').addClass('bg-danger');
        $('#error-zinute').text("Ivedet blogai varda");
    }else {
        // nuimti raudona fona
    }
    if (amzius.val() < 14 ) {
        arYraKlaidu = true;
        amzius.addClass('bg-danger');
    } else {
        // nuimti raudona fona
    }

    if (arYraKlaidu == true) {
        event.preventDefault();
    } else {
        return; // neprivalomas
    }
    console.log("ivestas vardas: " + vardas);
    console.log("ivestas amzius: " + amzius.val());
    console.log("arYraKlaidu: " + arYraKlaidu);

});
