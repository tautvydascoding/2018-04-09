<?php


// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
require_once('User.php');
require_once('edit.php');

class Admin extends User implements Edit {
    public function logout(){    /* code */    }
    public function changeName($a = 0 ) {    /* code */    }
    public function getName() {    /* code */    }
    public function isLogin() {    /* code */    }
}
