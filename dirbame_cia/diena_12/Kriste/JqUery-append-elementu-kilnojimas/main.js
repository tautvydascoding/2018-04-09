console.log( "labas as cia" );


$('h1').css('color', 'green');


var tekstas1 = "prepend teksas";
var tekstas2 = "append tekstas";
var tekstas3 = "before teksas";
var tekstas4 = "after tekstas";


// UZDUOTIS
// susikurti kintamuosius ir ideti html faile su visom tom 5 funkcijom;

$('section').prepend(tekstas1);
// atsirado section dalyje- virsuje, virs h1, kitaip tariant idedamas kaip pirmas vaikas i teti (section);

$('section').append(tekstas2);
// atsirado section dalyje- apacioje, po h3, kitaip tariant idedamas kaip paskutinis vaikas i teti (section);

$('section').before(tekstas3);
// atsirado virs section dalies- virsuje, virs;

$('section').after(tekstas4);
// atsirado po section dalimi- pacioje, po;

// NOTE: WOW cia reik isiminti!!!!

      var tekstas5 = "appendTo tekstas"; //appendTo yra skirtas ideti elementams, o ne tekstams!!!!! ir butent del to cia auksciau musu parasytas var neveiks; Del to reikia arba susikurti var = elementas;
      var tekstas5 = "<p> appendTo tekstas </p>";
      // arba iskart komandoje prie appendTo susikurti elementa;
      $('<p> appendTo tekstas </p>').appendTo( $('section') );
      //appendTo yra skirtas ideti elementams, o ne tekstui; tad dabar susikureme elementa-jame idejau teksta ir nurodziau, kad ideti i section. ideda i section pacia apacia;

// NOTE: isimintinas baigesi;

$('section').prepend( $('h3')  ); //perkeliu elementa;
$('section').prepend( 'naujas tekstas'); // idedu teksta;
$('section').prepend( '<b> sukuriau </b>' ); // sukuriau elementa;
