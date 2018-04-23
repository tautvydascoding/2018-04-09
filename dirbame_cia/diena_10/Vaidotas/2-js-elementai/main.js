console.log("labas, as cia");


// var manoAside = document.createElement('aside');
// console.log(manoAside);
//
// manoAside.innerHTML = "Antraste1";
// console.log(manoAside);

//var textas = document.createTextNode("Kitokia antraste");
// manoAside.appendChild(textas);// appendChild negali idet  paprasto teksto, nes ner objekto. Reik susikurt textNode objekta!

//console.log();

//document.body.appendChild(textas);


  var elmh1 = document.querySelector("h1");
// document.body.insertBefore(manoAside, elmh1);
//==============
// 1. sukurti "header"  DOM objekta/NODE'a
// test
// console.log(  manoHeader );


var elHeader = document.createElement('header');
console.log(elHeader);

// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)

var tekstas = document.createTextNode("Spicy jalapeno bacon ipsum dolor amet est aliqua ham, labore sausage culpa strip steak meatloaf commodo leberkas velit chicken do tri-tip enim. Pancetta cupidatat filet mignon pork loin buffalo laboris ground round, shoulder magna in tempor sirloin. Bacon irure pastrami strip steak landjaeger prosciutto, aliqua minim spare ribs lorem est. Proident jerky commodo meatloaf eu bresaola incididunt. Sed ribeye chicken tempor ut frankfurter venison cupidatat andouille exercitation. Cillum sirloin strip steak cupidatat incididunt, occaecat est lorem.");
console.log(tekstas);

// 3. i susikuta 'header' objekta idedame 'tekstas' objekta

elHeader.appendChild(tekstas);

document.body.appendChild(elHeader);
// test
// console.log(  manoHeader );

// 4. headeri idesime po H1
// insertBefore(kaIdeti, PrieKa) -
// function insertAfter(node, nodeToInsert) {
//   node.parentNode.insertBefore(nodeToInsert, node.nextSibling);
// }

//insertAfter(elmh1, elHeader);
