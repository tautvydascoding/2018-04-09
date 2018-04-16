var vardas = "Tomas",
  pavarde = "Tomauskas",
  amzius = 21,
  atlyginimas = 1560;

var x = typeof(atlyginimas);
console.log(x);

//funkcijos sukurimas ( NOTE: JI VEIKS TIKS KAI ISKVIESIME)
function printVardasPavardeAmzius() {
  console.log(vardas, pavarde, amzius, atlyginimas);
}
//funkcijos iskvietimas
printVardasPavardeAmzius();
printVardasPavardeAmzius();
printVardasPavardeAmzius();

function printMetinisPajamuDydis() {
  console.log(atlyginimas * 12);
  //arba
  var metinis = atlyginimas * 12 ; //local
  console.log( metinis );
}
printMetinisPajamuDydis ();

//5 uzdavinys
function printTekstas ( reiksme ) {
     console.log( "paduota reiksme" );
     console.log( reiksme );
}
printTekstas ( "Jokubo istorijos" );

// 6uzdavinys

function daugyba( z , k ) {
  var ats = z * k ;
  console.log( ats );
}

daugyba (90, 11)


//uzdavinys 7
//krastine1 =
//krestine10
//krastine3=??

function pitagoroTeorema (a, b) {

var krastine3 = Math.sqrt(a*a + b*b);
console.log (krastine3) ;
}

pitagoroTeorema ( 21, 10 );

var age = 29;
console.log ( Age );

pitagoroTeorema (21, 10)
