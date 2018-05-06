
            <?php

            //javaScript objekto kurimo pavyzdys, javascripte su var iskart kuriamas objektas
        // var car = {
        //   name : "BMW",
        //   color : "red",
        //   drive: function(){
        //     //
        //   },
        //   stop: function(){
        //     //
        //   }
        // };
        //
        // car.name = "BMW-x5";
        // car.drive();
        // // naujo kintamojo idejimas
        // car.model = 'xx-2018'; // galima taip sukurt, bet siuloma nenaudoti.



        class zmogus {
          public $ugis = 185;
          public $vardas = "Vardenis";
          public function einu(){
            echo "Griztu namo, kol saule dar nenusileido. <br />";
          }
        }

        $Monika = new zmogus();
        $Monika->ugis=155;
        $Monika->vardas="Monika";

        $Tadas = new zmogus();
        $Tadas->ugis=170;
        $Tadas->vardas="Tadas";

        $Kestas = new zmogus();
        $Kestas->ugis=192;
        $Kestas->vardas="Kestas";

        echo $Monika->ugis."<br />";
        echo $Monika->vardas."<br />";
        $Monika->einu();


        echo $Tadas->ugis."<br />";
        echo $Tadas->vardas."<br />";

        echo $Kestas->ugis."<br />";
        echo $Kestas->vardas."<br />";


//kuriam objekta su konstruktoriais;
        class zmogus2 {
          public $ugis = 185;
          public $vardas = "Vardenis";
          public function einu(){
            echo "Griztu namo, kol saule dar nenusileido. <br />";
          }

          public function __construct($x, $y){ //local
            $this->vardas = $x;
            $this->ugis = $y;
          }
        }
        $Robertas = new zmogus2( "Robertas", 199);

        echo $Robertas->vardas;




// php konstuktoriaus kurimas;
