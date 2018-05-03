<?php

// uzduotis - sukurti funkcija, kuri save iskvies 10 kartu;
function dirbu() {
  static $i = 0;
  $i++;
    if ($i < 11) { // iki 11, nes virsuje didiname i po viena, ir gaunasi, kad mes ne nuo 0 pradedame skaiciuoti;
      echo $i . "<br />";  // atspausdins 1,2,3,4,5,6,7,8,9,10.
      dirbu();
      // echo $i . "<br />";  // jeigu padesiu po funkcijos iskvietimu, atspausdins 11,11,11,11,11,11,11,11,11,11. Paskutine i reiksme. o atspausdins 10 kartu, nes tiek ji buvo atidejusi darbu;
    }
}
dirbu();
