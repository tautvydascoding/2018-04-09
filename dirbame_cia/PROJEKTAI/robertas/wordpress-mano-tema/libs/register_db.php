<?php
require_once("users-db-functions.php");

addUser(
  $_POST["fname"],
  $_POST["lname"],
  $_POST["uname"],
  $_POST["email"],
  $_POST["password"]
);
