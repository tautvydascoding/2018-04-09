<?php
$employees = [
  ["Tomas", 1981, "Buhalteris"],
  ["Ona", 1980, "Programuotoja"],
  ["Petras", 1975, "Direktorius"]
];

echo "<strong>2.1) atspausdinti su FOR ciklu:</strong>";
echo "<br>";
for ($i = 0; $i < count($employees); $i++) {
  echo $employees[$i][0] . " " . $employees[$i][1] . " " . $employees[$i][2] . "<br>";
}
echo "<br>";

echo "<strong>2.2) atspausdinti su FOR FOR ciklu:</strong>";
echo "<br>";
for ($i = 0; $i < count($employees); $i++) {
  for ($o = 0; $o < count($employees[$i]); $o++) {
    echo $employees[$i][$o] . " ";
  }
  echo "<br>";
}
echo "<br>";

echo "<strong>2.3) atspausdinti su FOREACH:</strong>";
echo "<br>";
foreach ($employees as $row) {
  foreach ($row as $value) {
    echo $value . " ";
  }
  echo "<br>";
}
echo "<br>";
