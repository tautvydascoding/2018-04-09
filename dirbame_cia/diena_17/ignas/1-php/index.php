<?php 


    //sukurti funkcija, kuri save iskvies 10 kartu
    $k = 0; //global
    function dirbu()   {
        
        static $i = 0;
        $i++;
        if ($i < 11) {
        echo $i . "<br>"; //1,2,3,4,5..
            dirbu();
        // echo $i . "<br>"; //11,11,11,11,11..
        }
    }
    dirbu();


    // ============================ class ir objektai
    // 
     class zmogus {
        public $ugis = "";
        public $vardas = "";
        public function einu () {
            echo "einu";
        }
     }
     $monika = new zmogus();
     $monika->vardas = "Monika";
     $monika->ugis = 155;
     $monika->einu();

     $Tadas = new zmogus();
     $Kestas = new zmogus();
     


