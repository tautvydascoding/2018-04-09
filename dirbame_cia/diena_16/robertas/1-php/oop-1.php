<?php
interface IEdit {
  public function changeName($a);
  public function isLogin();
  public function getName();
}

abstract class AUser {
  private $name, $password , $createdDate, $lastLogin;
  public abstract function logOut();
  public function clearlastLoginTime(){}
}

class Admin extends AUser implements IEdit {
  // --- AUser implementation ---
  public function logOut(){}
  // --- end AUser implementation ---
  // --- IEdit implementation ---
  public function changeName($a){ $name = $a; }
  public function isLogin(){}
  public function getName(){ return $name; }
  // --- end IEdit implementation ---
}
