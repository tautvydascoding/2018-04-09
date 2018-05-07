<?php

//=======java script==========
// var car = {
//     name : "BMW",
//     color: "l-red",
//     drive: function() {
//         //....
//     },
//     stop: function() {
//         //....
//     }
// };
//
// car.name = "BTM-x5";
// car.drive();
// // naujo kintamojo idejimas
// car.model = 'xx-2018';


class Car {
    public $name = 'BMW';
    public $color = 'l-red';
    public function drive() {
        echo "Vaziuoju vaziuoju...";
    }
}
// sukurimas
$masina = new Car();
// pakeitimas
$masina->name = 'X5';
//iskvietimas
$masina->drive();
// paemimas
$x = $masina->color;
echo $x;

//
