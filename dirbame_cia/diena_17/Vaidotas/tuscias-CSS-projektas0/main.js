console.log( "labas as cia" );


$('h1').css('color', 'green');

// var myFunction = function(){
//   var name = 'Todd';
//   var myOtherFunction = function(){
//     console.log('my name is ' + name);
//   };
//   console.log(name);
//   myOtherFunction();
// };
//
// myFunction();



// var vardas = "Jonas";   // global - kintamasis
// function myName ( vardas ) { //  vardas - local kintamasis
//     console.log( " vardas" + vardas);
//     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
// myName("PETRAS");



//
// var x = 10; // global
// x = 20;
// console.log( x );
//
// function test() {
//     var y = 1; // local
//     console.log(  "y yra:", y );
//     console.log( 'x yra:', x);
// }
// test();
// console.log( "y po f-ja: ", y);



// var x = 10; // global
//
// function test22(x) {
//        x = 1; // local
//     console.log( 'x yra:', x);
// }
// test22(32);
// console.log( 'x yra:', x);




// var x = 10; // global
//
// function test33() {
//     var x = 1; // local
//     console.log( 'x yra:', x);
//     console.log( 'x yra:', this.x);
//     console.log( 'x yra:', window.x);
// }
//
//
// test33();





var x = 10; // global
function test55( x ) {
    var x = 1; // local
    console.log( 'x yra:', x);
}
test55(99);
console.log( 'x yra:', x);
