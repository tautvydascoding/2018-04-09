console.log( "labas as cia" );


$('h1').css('color', 'green');


// !!! javascript scopes egzituoja tik f-jose

var x = 10; // global
x = 20;
console.log( x );

function test() {
    var y = 1; // local
    console.log(  "y yra:", y );
    console.log( 'x yra:', x);
}
test();
console.log( "y po f-ja: ", y);


//============================
var x = 10; // global

function test22() {
    var x = 1; // local
    console.log( 'x yra:', x);
}
console.log( 'x yra:', x);
//================
var x = 10; // global

function test33() {
    var x = 1; // local
    console.log( 'x yra:', this.x);
    console.log( 'x yra:', window.x);
}
// =======================
var x = 10; // global

function test44( x ) {  // !!! x - local laikinas issigalvotas kintamasis
    console.log( 'x yra:', x);
}
test44(99);
console.log( 'x yra:', x);


// =======================
var x = 10; // global
function test55( x ) {
    var x = 1; // local
    console.log( 'x yra:', x);
}
test55(99);
console.log( 'x yra:', x);
