console.log( "labas as cia" );


$('h1').css('color', 'green');


// KARTOJAMES SCOPE'S!!!!
// javascript scopes veikia (egzistuoja) tik funkcijose!!!!!

var x = 10;
x = 20;
console.log(x);

function test1() {
  var y = 1;
  console.log( "Y sugebes isvesti:" , y );
  console.log( "X sugebes isvesti:", x ); // sugebes, nes gali paimti global reiksme!
}
test1();
// console.log( "Y nesugebes isvesti:" , y );
// nesugebes, nes y reiksme yra funkcijos viduje, o console log yra uz funkcijos ribu;

// ====================;

var x = 10;

function test2() {
  var x = 1;
  console.log( "X sugebes isvesti vieneta??:", x ); // sugebes ir isves 1, nes is pradziu ziuri i funkcijos vidu;
  console.log("THIS", this.x); // islipa vienu laipteliu is funkcijos, tai del to paims reiksme 10;
  console.log("WINDOW", window.x); // window ima globalia reiksme, del to paims 10;
}
test2();
console.log( x ); // isves 10, nes uz funkcijos ribu ir ims global x reiksme;

// =======================;

var x = 10; //global

function test3(x) {
  console.log( x ); // isves 999, nes paims is funkcijos vidaus, nes 999 nukeliaujai x reiksme (lokalia reiksme sukuria)
}
test3(999);
console.log( x ); // isves 10, nes uz funkcijos ribu ir ims global x reiksme;

// ====================;

var x = 10; // global

function test4( x ) {
  var x = 1; //local
  console.log( "testas 4 f ribose", x ); // cia atspausdins 1, nes is pradziu i x vieta nukeliaus 99, bet po to x reiksme mes pakeiciame funkcijos viduje i 1, d4l to ir galutine reiksme yra 1;!!!!
}
test4(99);
console.log( "testas 4 uz f ribu", x );
