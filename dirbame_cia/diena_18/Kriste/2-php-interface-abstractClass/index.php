<?php

    // uzduotis:
    // 1) sukurti interface "Edit" :
    //  1.1) kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // changeName($a)
        // getName()
        // isLogin()
        // NOTE: Ar interface gali tureti kintamuosius???? - atsakymas-NEGALI!!!


interface Edit {
  public function changeName($a);
  public function getName();
  public function isLogin();
}

    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) sukurti kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()

abstract class User {
  public $name = 'Juste';
  public $password = '123';
  public $createDate = 'Vartotojai';
  public $lastLogin = '05';
  abstract public function Logout();
  public function clearLastLoginTime() {
    // code
  }
}

    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)

class Admin extends User implements Edit {
  public function Logout() {
    // code
  }
  public function changeName($a) {
    echo $this->name = $a . "<br />";
  }
  public function getName() {
    echo $this->name . "<br />";
  }
  public function isLogin() {
    if (true) {
      echo "Sveiki, " . $this->name;
    }
  }
}

$as = new Admin();

    // 4)
         // A) issivesti username,
         // B) pakeisti username
         // C) issivesti username

echo $as->name . "<br />";
$as->changeName("Danute");
$as->getName();

    // 5)  panaudoti login funkcija
         // A)  panaudoti login funkcija , pakeitus username
$as->isLogin();
