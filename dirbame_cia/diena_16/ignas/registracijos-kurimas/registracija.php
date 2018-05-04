<?php 

include_once("doctors_functions_DB.php");
print_r($_GET);

createDoctor( $_GET["name"], $_GET["lname"] );
