 <?php 



    // uzduotis:
    // 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // 0) Ar gali tureti kintamuosius????
        // changeName($a)
        // isLogin()
        // getName()
    interface edit {
        function changeName($a);
        function isLogin();
        function getName();
    }

    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) kuri turi neprivalomus kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()
    abstract class user {
        protected $name = "Jonas";
        protected $password = "drakonas";
        protected $createdDate = "a";
        protected $lastLogin = "a";
        abstract function Logout();
            //logouts
        
        function clearlastLoginTime() {
            //code
        }

    }


    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)
    
    class admin extends user implements edit
    {
        
        function Logout() //pagal nutylejima public yra
        {
            # code...
        }
        function changeName($a) { /*code*/  }
        function isLogin() {
            //code
        }
        function getName() {
            //code
        }    
    }

       // 4)
         // A) issivesti username,
         // B) pakeisti username
         // C) issivesti username
         // 5)  panaudoti login funkcija
         // A)  panaudoti login funkcija , pakeitus username
