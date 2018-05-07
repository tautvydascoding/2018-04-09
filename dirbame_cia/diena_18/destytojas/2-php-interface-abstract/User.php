<?php
// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) sukurti kintamuosius:
        // name, password , createdDate, lastLogin
    // B) privaloma funkcija "Loguot()"
    // C) neprivaloma funkcija clearlastLoginTime()

abstract class User {
    protected $name = 'a';
    protected $password = 'a';
    protected $createdDate = 'a';
    protected $lastLogin = 'a';

    abstract function logout();
    public function clearlastLoginTime() {
        // code
    }
}
