console.log( "labas as cia" );

$('.card1').hover(function() {
	$('.card1Text').toggle();
});

$('.card2').hover(function() {
	$('.card2Text').toggle();
});
$('.card3').hover(function() {
	$('.card3Text').toggle();
});


function validateForm1() {
    var vardas = document.forms["uzklausa"]["vardas"].value;
    var pavarde = document.forms["uzklausa"]["pavarde"].value;
    var elpastas = document.forms["uzklausa"]["elpastas"].value;
    var tel = document.forms["uzklausa"]["tel"].value;
    var komentaras = document.forms["uzklausa"]["komentaras"].value;


    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    var numbers = /^[0-9]+$/;
    var letters = /^[A-Za-z]+$/;


    if (vardas == "") {
      alert("Irašykite vardą!");
      return false;
    }
    if (vardas.length>15) {
      alert("Jūsų vardas per ilgas!");
      return false;
    }
    if (!vardas.match(letters)) {
      alert("Varde naudokite tik raides!");
      return false;
    }
    if (pavarde == "") {
      alert("Irašykite pavardę!");
      return false;
    }
    if (pavarde.length>20) {
      alert("Jūsų pavardė per ilga!");
      return false;
    }
    if (!pavarde.match(letters)) {
      alert("Pavardėje naudokite tik raides!");
      return false;
    }
    if (elpastas=="") {
      alert("Pamiršote įvesti savo el paštą!");
      return false;
    }
    if (!elpastas.match(emailPattern)) {
      alert("Formatas netinkamas, patikrinkite savo el paštą!");
      return false;
    }
    if (tel.value>15) {
      alert("Telefono numeris yra per ilgas!");
      return false;
    }
    if (!tel.match(numbers)) {
      alert("Telefono nr naudokite tik skaičius!");
      return false;
    }
    if (komentaras=="") {
      alert("Pamiršote užklausą, visgi norėjote kažko paklausti");
      return false;
    }
    if (komentaras.length>225) {
      alert("Komentaras per ilgas, klauskite konkrečiau!(max 225 simboliai)");
      return false;
    }

}


function validateForm2() {
    var id = document.forms["update"]["id"].value;
    var link = document.forms["update"]["link"].value;
    var name = document.forms["update"]["name"].value;
    var description = document.forms["update"]["description"].value;


    var numbers = /^[0-9]+$/;
    var letters = /^[A-Za-z]+$/;

		if (id.value=="") {
			alert("Irašykite id!");
			return false;
		}
		if (id>100) {
			alert("Id per didelis!");
			return false;
		}
		if (id<0) {
			alert("Id negali būt neigiamas!");
			return false;
		}
		if (!id.match(numbers)) {
			alert("Id naudokite tik skaičius!");
			return false;
		}
		if (name=="") {
			alert("įrašykite name!");
			return false;
		}

    if (link == "") {
      alert("Įrašykite link!");
      return false;
    }


    if (description=="") {
      alert("Įrašykite description");
      return false;
    }


}









$('.sl').slick({
  autoplay:true,
  autoplaySpeed:2500,
  dots:true,
  arrows:true,
  fade:true,
});
