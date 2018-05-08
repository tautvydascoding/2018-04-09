console.log( "labas as cia" );

// $('h1').css('color', 'green');

// 1 UZDUOTIS - paimti visa ivesta informacija is ivedimo laukiu ir isvesti console log;

// 2 UZDUOTIS - patikrinti laukus, pagals usigalvotus parametrus;

$('button[name="mygtukas"]').on('click', function() {
  // alert("Pavyko!");
  arYraKlaidu = false;

  var vartVardas = $('input[name="vardas"]').val();
  var vartPastas = $('input[name="pastas"]').val();
  var vartAmzius = $('input[name="amzius"]'); // jeigu naudojame zemiau iskart su kintamuoju, tada cia .val() negalime naudoti;

  // tikriname ar ivestuose laukuose viskas ko reikia, ir jei ne - galime nurodyti ka padaryti
  if (vartVardas.length <8 || vartVardas.length >21) {
    arYraKlaidu = true;
    $('input[name="vardas"]').addClass('bg-warning');
    $('#error-zinute').text("Ivedete blogai varda");
  } else {
    // nuimti fona;
  }

// kai iveda gerai, tada reikia pasalinti visus alert'us;

  // kadangi susikureme kintamaji, tai kad neieskoti is naujo reiksmes, tai mes galime naudoti kintamaji:
  if (vartAmzius.val() <14 ) {
    arYraKlaidu = true;
    vartAmzius.addClass('bg-danger');
  } else {
    // nuimti fona;
  }

  console.log("ivestas vardas:" + vartVardas);
  console.log("ivestas pastas:" + vartPastas);
  console.log("ivestas amzius:" + vartAmzius.val());

  if (arYraKlaidu == true) {
      event.preventDefault();
  } else {
    return; //jeigu kodas butu auksciau butina irasyti return, nes kitu atveju viskas, kas bus parasyta zemiau nebesuveiks;
  }


} );
