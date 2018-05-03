<?php


// sukurti f-ja, kuri save iskvies 10 kartu
function dirbu() {
     static $i = 0;
     $i++;
     if ($i < 11) {
         echo $i . "<br />";  // 1, 2, 3, 4, ...
         dirbu();
         echo $i . "<br />";  // 11, 11, 11, 11, 11, ..
     }
}

dirbu();
