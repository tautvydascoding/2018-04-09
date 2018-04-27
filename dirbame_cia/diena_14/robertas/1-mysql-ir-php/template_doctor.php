<?php

function showDoctor($doctor){
  print(
  "<div class='doctor-info'>
    <h2>ID: " . $doctor["id"] . "</h2>
    <p>Full name: <strong><br>" . $doctor["name"] . " " . $doctor["lname"] . "</strong></p>
   </div>"
  );
}

?>
