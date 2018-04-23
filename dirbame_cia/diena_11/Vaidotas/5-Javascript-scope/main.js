console.log( "labas as cia" );


$('h1').css('color', 'green');


//Javascript scopes veikia tik funkcijose!

var x = 10; // kuria lokalu, bet cia scope yra global

console.log(x);

function  test(){
 var y = 1; // zodelis var reiskia, kad jis lokalus, jei kursim funkcijoj be var, pakeis globalu kintamaji
 console.log("Y yra", y );
 var x = 1;
 console.log(x); //  1 pirma ima is funkcijos vidaus, jeigu nera, ima isoreje.
  console.log(this.x); // 10 zodelis this islipa vienu aukstu i virsu, todel ima ankstesni
  console.log(window.x); // ima globlaus scope
}
test();

// console.log("Y yra po f-ja: ", y); // neisves nieko,

function test44(x){ // !!!! x - local, laikinas, issigalvotas
  console.log("X as yra: ",x); //
}

test44(999);

function test55 (x){
  var x = 69; // local
  console.log("x yra: ",x);
}

test55(55);
