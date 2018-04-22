console.log( "labas as cia" );

//TEORIJA su pavyzdziais:
      // <aside>  elemento objekto (Node) kurimas. PVZ;
      var elmAside = document.createElement("aside");
      console.log(elmAside);

      // as kuriu elementa :)
      var manoSukurtasElementas = document.createElement("footer");
      console.log( "sukuriau Footeri:", manoSukurtasElementas);

      manoSukurtasElementas.innerHTML = "Kontaktai";
      // idejau tam tikro teksto i savo sukurta elementa Footer;


      var tekstas = document.createTextNode("Antraste");
      manoSukurtasElementas.appendChild( tekstas );
      // // NOTE: appendChild nemoka deti paprastu tekstu. Jis deda tik teksto objektus;

      // idedu i body vidu, kad matytusi DOM'e;

      // document.body.appendChild( tekstas );
      // document.body.appendChild( manoSukurtasElementas );

      // mums reikia rasti h1 elemeneta, ieskome:
      var manoH1 = document.querySelector('h1'); // html faile suras nurodyta elementa;
      // kad galetume panaudoti, mums reikia sita surasta elementa issisaugoti, tad sukuriau, lad tai yra var (kintamasis);
                              //  kurio atzvilgiu   ,    ka ideti //
      document.body.insertBefore( manoSukurtasElementas, manoH1 );


      // paprasto teksto rasymas
      var elmText = document.createTextNode("lorem lorem lorem");
      // or
      //elmAside.innerHTML += "lorem lorem lorem2";

      console.log(elmText);

      // elemento idejimas i kita elementa
      elmAside.appendChild(elmText);
      //console.log(elmAside);

      // ! sukurti elementai - buna dar neideti i window  document html puslapi

      //=============
      //  objekto (Node) idejimas i HTML
      var elmH1 =  document.querySelector("h1");
      document.body.insertBefore(elmAside, elmH1);
      // document.body.appendChild(elmAside);

//==============


// UZDUOTYS:

// 1. sukurti "header"  DOM objekta/NODE'a
// test
// console.log(  manoHeader );

var manoHeader = document.createElement ('header');
manoHeader.innerHTML = "Pavadinimas";
console.log( manoHeader );

// 2. sukurti 'tekstas' kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(xxx)

var headerSuTekstu = document.createTextNode ( "Pavadinimas" );
document.body.appendChild ( headerSuTekstu );

// 3. i susikuta 'header' objekta idedame 'tekstas' objekta
// test
// console.log(  manoHeader );


// 4. headeri idesime virs H1
// insertBefore(kaIdeti, PrieKa) -























//
