console.log( "labas as cia" );


// contactc page - quick message validation
$('button[name="mygtukas"]').on('click', function() {
  // alert("Pavyko!");
  arYraKlaidu = false;

  var vartVardas = $('input[name="vardas"]').val();
  var vartPastas = $('input[name="pastas"]').val();
  var vartKlausimas = $('textarea[name="klausimas"]').val();

  if (vartVardas.length <8 || vartVardas.length >20) {
    arYraKlaidu = true;
    // $('input[name="vardas"]').addClass('bg-warning');
    // $('#error-zinute').text("Ivedete blogai varda");
    if (vartVardas.length <8) {
      alert("Too short text. Must be more than 8 letters.");
    } if (vartVardas.length >20) {
      alert("Too long text. Max.length 20.");
    }
  } else {
    // nuimti fona;
  }


  if (vartKlausimas.length <10 || vartKlausimas.length >350 ) {
    arYraKlaidu = true;
    // $('textarea[name="klausimas"]').addClass('bg-danger');
    if (vartKlausimas.length <10) {
      alert("Too short text. Must be more than 10 letters.");
    } if (vartKlausimas.length >350) {
      alert("Too long text. Max.length 350.");
    }
  } else {
    // nuimti fona;
  }

  console.log("ivestas vardas:" + vartVardas);
  console.log("ivestas pastas:" + vartPastas);
  console.log("ivestas klausimas:" + vartKlausimas);

  if (arYraKlaidu == true) {
      event.preventDefault();
  } else {
    return; //jeigu kodas butu auksciau butina irasyti return, nes kitu atveju viskas, kas bus parasyta zemiau nebesuveiks;
  }

} );


function validateFormQM() {
    var x = document.forms['myFormQM']['pastas'].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

// newsletter padariau validation. bet reikejo type pakeisti i text. jeigu palieku type email, tai neveikia;
function validateForm() {
    var x = document.forms["myForm"]["elPastas"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

function sekmingaiPateikta() {
  alert("Congratulations! Your product was added.");
}
