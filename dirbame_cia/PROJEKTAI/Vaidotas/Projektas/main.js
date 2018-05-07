console.log( "labas as cia" );



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











$('.sl').slick({
  autoplay:true,
  autoplaySpeed:2500,
  dots:true,
  arrows:true,
  fade:true,
});
