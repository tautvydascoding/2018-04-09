console.log( "labas as cia" );


$('h1').css('color', 'green');
// // <section>
// //     <div>
// //         <h2>  1 Antraste </h2>
// //     </div>
// //
// //     <h2 class='reklama'>  2 Antraste </h2>
// //     <h3>  3 Antraste </h3>
// //     <h4>  4 Antraste </h4>
// //     <h5>  5 Antraste </h5>
// // </section>
// //
// // <article>
// //     <nav> Tekstas </nav>
// // </article>
//
// $('h3').addClass("bg-info");
// $('h3').removeClass("bg-info");
//
//
// // UZDUOTIS
// // 1.0
// // kaip perkelti klase 'h3' po 'h4'
// $('h3').removeAttr("Class");
// $('h4').attr("Class","");
// // 1.1
// // kaip perkelti klase 'reklama' virs 'section'
// $('h2').removeClass('reklama').parent().parent().parent().addClass('reklama');
// //
// // 1.2
// // kaip perkelti 'h3' po 'div'
// $('div').after($("h3"));
// // 1.3
// // kaip perkelti 'h4' i  'nav' vidu
// $('nav').prepend($('h4'));
// // 1.4
// // kaip perkelti 'h5'  virs  'article'
// $('article').before($('h5'));
// // 1.5
// // kaip perkelti 'section'  po  'article'


// $('article').after($('section'));

// _______naudojant tik js_________(create and add_class)_____
//  atlikti   uzduotis naudojant tik jQuery

// 1.1  sukurti:
// <section>
//     <h1>  Tekstas </h1>
// </section>


var sekcija = $("<section></section>").html("<h1>Tekstas</h1>");

$('body').prepend(sekcija);
//1.2 patobulinti h1 -  ant h1 elemento uzdesime klases: " bg-info  mt-5 aukstis-200" (naudojant jQuery)
$('h1').addClass("bg-info mt-5 aukstis-200");
// pvz:
   // <h1 class="bg-info mt-5 aukstis-200">  Tekstas </h1>


// 1.3  nuo h1 pasalinti mt-5 klase
$('h1').removeClass("mt-5");
// 1.4  paleisti komanda   toggleClass( 'aukstis-200')
$('h1').toggleClass("aukstis-200");
// 1.5  vel paleisti komanda   toggleClass( 'aukstis-200')  -
$('h1').toggleClass("aukstis-200");
// KAS pasikeite?

// 2. Patikrinti ar h1 turi klase 'bg-info':
if ($('h1').hasClass('bg-info')) {
  $('h1').addClass('bg-danger');
} else{
  $('h1').addClass('bg-success');
}
// jeigu NETURI  uzdeti klase "bg-success"
// jeigu TURI  uzdeti klase "bg-danger"

// 3. Patikrinti ar 'section' turi klase 'aukstis-200':
if ($('section').hasClass('aukstis-200')) { $('section').addClass('aukstis-500');

}else {$('section').addClass('aukstis-200');}
// jeigu NETURI  uzdeti klase "aukstis-200"
// jeigu TURI  uzdeti klase "aukstis-500"


// 1 uzduotis
// su js sukurti <img elementa 200x200 dydzio
// pasitikrinti su console
var img = document.createElement("img");
img.setAttribute('src', '');
img.setAttribute('alt', 'na');
img.setAttribute('height', '200px');
img.setAttribute('width', '200px');

console.log(img);

// 1.1
// su js sukurti <header> ir <footer>
// ir ideti juos i body

var headeris = document.createElement("header");
var footeris = document.createElement("footer");

var body = document.querySelector('body');

body.appendChild(footeris);
body.insertBefore(headeris, document.querySelector('section'));


// 1.2
// i <header> ir <footer> ideti <img> elementa

document.querySelector('header, footer').appendChild(img);


var img = document.createElement("img");
img.setAttribute('src', '');
img.setAttribute('alt', 'na');
img.setAttribute('height', '200px');
img.setAttribute('width', '200px');
document.querySelector('footer').appendChild(img);
// 1.3
// css faile aprasyti .logo klase:
//      dydis 100x100, seselis i visas puses per 10px

// 1.4
// <img> elementui, kuris yra <header> elemente,  uzdeti klase "logo"

// 1.5
// sukurti <main> elementa po <header> elementu  (<header></header>  <main>text</main>   <footer></footer>)

// 1.6
// sukurti <article> elementa su viduje <h2> ir <p> elementais (irasyti ir teksto i abu)

// 1.7
//  ideti 1.6 <article> elementa (kuris laiko savyne <h2> ir <p>)  i <main> elementa

// 1.8
// perkelti LOGOTIPA i kita vieta naudojant js
// A) perkelti i footer
// B) perkelti i article ( tarp h2 ir p)
//
// ---------------------------------
// 1.9 daugiau uzduociu su perkelimu elementu append, prepend, after, before, appendTo
// ---------------------------------


// =================click=========
// 1.9.1
// paspaudus ant logo ji suanimuoti jQuery
// LOGO keliauja i desine ir virsu ekrano puse
// tampa permatomas 0.5
//
