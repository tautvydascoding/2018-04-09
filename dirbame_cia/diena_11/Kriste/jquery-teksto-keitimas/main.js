console.log( "labas as cia" );


$('h1').css('color', 'green');




//=============get data=========
//.text()
//.html()
//.val()

var x = $("h1").text();  // return visu h1 turini
console.log("h1 text: " + x);

// grazins antra h1 (nes prasideda nuo 0)
var x = $("h1").eq(1).text();

// grazins nuo galo 2!
var x = $("h1").eq(-2).text();
// cia x yra lygus tekstui!

var x = $("h1").eq(-2);
// cia x yra lygus objektui!


var y = $("h1").html();  // return visu h1 turini, bet jei bus kokie nors bus papildomi elemnetai uzdeti, pvz strong (kitaip bold ant teksto), tai paims su tais zodeliais;
console.log("h1 html: " + y);



$("input").on('blur', function() {
  var z = $("input").val();
  var ilgis = z.length;
  console.log("input val:" + z + ilgis );
});


// var oHTML = $("h1").html();
//console.log("h1 oHTML: " + oHTML);

//---- get only first h1 text------
// var elm = $("h1").eq(0);   // eq -  return the jquery selector
// var elm2 = $("h1")[0];     // [0] - return the DOM element
// console.log("eq(): " ,  elm);
// console.log("[0]: " ,  elm2);

// console.log( elm.text());         // WORKS !!!
// console.log( elm2[0].text();    // ERROR: [0] return the DOM element
// NOTE: $(...)[0] will return the DOM element. If you want to use a jquery function, it has to be on a jquery selector object. If you want to get the jquery selector for a specific index, use the eq function:
// NOTE:  eq( -2 ) - nuo galo



// pakeisti paskutinta h1 teksta;

$("h1").eq(-1).text('<b>Pakeistas<b>'); // cia isves su tom b raidem;
$("h1").eq(-1).html('<b>Pakeistas<b>'); // cia isves kaip supranta html, kad tai yra paboldintas tekstas ir isves be b raidziu;


$('h1').attr('class', 'bg-warning text-center');
$('h1').eq(0).attr('title', 'tu uzvedei pelyte');





//=============SET text/ HTML / VAL=========
//.text(...)
//.html(...)
//.val(...)

//$("h1").text("Naujas h1 tekstas 1.1");
//console.log("h1 otext: " + otext);

// kaip innerHTML=   (!!!  istrina visa vidu)
// $("h1").html("<button> Registruotis </button>");
//console.log("h1 <button>: " + oHTML);

// Form'oje ivesti teksta uz vartotoja "val()"
//$("form input").val("Type Username here");

// $('form input').attr('value', 'Tomas');
// $('form input').attr('class', 'bg-info');
//---JS ---

//document.getElementsByTagName("input")[0].value = "Tomas";
//document.getElementsByTagName("input")[0].setAttribute('value','Tomas');
//document.myform.vardas.value = 'Tomas';
//                 <form name="myform">
//                         <input class="aa" name="vardas" type="text" value="" >
//                     </form>

//=====================================
//  objekto (Node) arba teksto - idejimas i HTML
//=====================================
// append(x, [y], [z], ... ) - Inserts content at the end of the selected elements (viduje, gale)

// prepend() - Inserts content at the beginning of the selected elements (viduje, pradzioje)
// after() - Inserts content after the selected elements (isoreje, po elemento)
// before() - Inserts content before the selected elements (isoreja, pries elementa)
// insertBefore();    // The .before() and .insertBefore() methods perform the same task.
// appendTo() - i kur perkelti si elementa

// var elementasH1 =   $("h1"),
//     appendText  = "<b>appended text</b>",
//     prependText = "<b>prepend text</b>",
//     afterText   = "<b>after text</b>",
//     beforeText  = "<b>before text</b>";

//elementasH1.append( appendText);
//elementasH1.prepend( prependText);
//elementasH1.after( afterText);
//elementasH1.before( beforeText);
//elementasH1.appendTo( "html");  // h1 perkels i html pabaiga

// ========tricks=====================
// perkels (nekopijuos)  elementa i kita  vieta
// $( "body" ).append( $( "h1" ) );

// Important: If there is more than one target element, however, cloned copies of the inserted element will be created for each target except for the last one.