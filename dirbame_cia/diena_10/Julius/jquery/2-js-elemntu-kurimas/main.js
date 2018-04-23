console.log( "labas as cia" );


var manoAside = document.createElement('aside');
console.log(  manoAside );

manoAside.innerHTML = "Antraste  ....";
console.log(  manoAside );
// arba
// manoAside.appendChild('Kitokia antraste ....');  // !appendChild nemoka ideti paprasto tekto
var tekstas = document.createTextNode('Kitokia antraste ...');
manoAside.appendChild(  tekstas   );  // !appendChild nemoka ideti paprasto tekto, bet teksto objektus ideda

// document.body.appendChild(   manoAside   );

var manoH1 = document.querySelector('h1');   // html faile iesko nurodyto elemento
//        tetis                kaIdeti  PriesKa 
document.body.insertBefore(  manoAside, manoH1 );



//
