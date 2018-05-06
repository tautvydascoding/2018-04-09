
            <?php
            //sukurti funkcija, kuri save iskvies 10 kartu

            $k = 0;

            function dirbu(){
              static $i = 0; //$i reiksme pirmakart buna 0, bet tik viena kart veikia kartu su static zodeliu;
              $i++;
              if ($i <11){
                echo $i."<br/>"; // 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11;
                dirbu();
                echo $i."<br/>"; // 11, 11, 11, 11, 11, 11, 11, 11, 11, 11;
              }
              // idejus echo po dirbu, spausdins visas 11 reiksmiu, kurios bus 11, t.y.
            }

            

            dirbu();
// kiti būdai! global/global array/ is atminties

            // function dirbu2(){
            // global $k;
            // echo $k;
            //
            // }
            // function dirbu3(){
            // echo $GLOBALS['k'];
            // }
            //
            // function dirbu4(&$x){ //& perduoda iš atminties ir keitinėja ramuose;
            // echo $x++;
            // }

            // dirbu2();
            // dirbu3();
            // dirbu4();
//-------------------------------------------------
