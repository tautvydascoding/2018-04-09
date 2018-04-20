console.log( "labas as cia" );


var masyvas = [5, 10, 1, 6, 89, 100, 55, 20, 30];
var ieskomas = 10;
for (var i = 0; i < masyvas.length; i++) {
  // patikrinti ar masyve yra ieskomas skaicius;
  if (masyvas[i] === ieskomas){
    console.log("Radau. Stalciuje: ", i);
  }
}

var skaicius = masyvas.indexOf(ieskomas);

if (skaicius == true ) {
  console.log("radau, idetas stalciuje: ", skaicius);
}
else {
    console.log("nėra");
}
