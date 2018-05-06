<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
            <h1> Isijunk   </h1> <hr>

            <!-- // UZDUOTIS:
            // 1. sukurti dvi klases A ir B
            // "B" klase turi paveldi "A"
            // "A" klase turi kintamuosius:
            // name , plaukuSpalva, sirdiesYda
            // kurie yra "public", "private", "protected"
            // 2. SUSIKURTI "B" objekta
            // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" kalseje) -->

            <?php

              class A {
                private $name = "Tadeusz";
                public $plaukuSpalva = "Blond";
                protected $sirdiesYda = true;
                public function getVardas(){
                  return $this->name;
                }
            }

              class B extends A { // paveldi tik protected ir public
                public function getSirdis(){
                  return $this->sirdiesYda;
                }
            }

          $antrasis = new B();
            echo $antrasis->getVardas()."<br/>";
            echo $antrasis->plaukuSpalva."<br />";
            echo $antrasis->getSirdis()."<br />";
            if ($antrasis->getSirdis()) {
              echo "Jūs paveldėjote širdies ydą, dėkokite genams!";
            };



             ?>

            <hr>
             <h2>Kita uzduotis!  </h2><hr>

             <!-- // uzduotis:
             // 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
                 // 0) Ar gali tureti kintamuosius????
                 // changeName($a)
                 // isLogin()
                 // getName()


             // 2) sukurti (abstrakcia) klase "User" :
                 // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
                 // A) kuri turi neprivalomus kintamuosius:
                     // name, password , createdDate, lastLogin
                 // B) privaloma funkcija "Loguot()"
                 // C) neprivaloma funkcija clearlastLoginTime()
             // 3) sukurti klase Admin :
                 // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti) -->




<?php

     interface  Edit {
       public function changeName($a);
       public function getName();
       public function isLogin();
            }

     abstract class User {
       protected $name = "";
       protected $password = "";
       protected $createdDate = "";
       protected $lastLogin = "";
       abstract function Logout();
       public function clearLastLoginTime(){
         //kodas
       }
      }

    class Admin extends User implements Edit {
      public function Logout(){
        echo "Click to logout";
      }
      protected $a = "";
      public function getName(){/*vieta kodui*/}
      public function changeName($a){ /*vieta kodui*/  }
      public function isLogin(){ /*vieta kodui*/}
      }






    ?>





       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
