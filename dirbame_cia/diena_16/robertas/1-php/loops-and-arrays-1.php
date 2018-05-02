<?php
$dates = [1981, 1980, 1975, 1995, 1999];

echo "<strong>1.1 Atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla:</strong>";
echo "<br>";
for ($i = 0; $i < count($dates); $i++) {
  echo "FOR: " . $dates[$i] . "<br>";
}
echo "<br>";

$i = 0;
while ($i < count($dates)) {
  echo "WHILE: " . $dates[$i] . "<br>";
  $i++;
}
echo "<br>";

foreach ($dates as $value) {
  echo "FOREACH: " . $value . "<br>";
}
echo "<br>";

echo "<strong>1.4 Atspausdinti kas antra data:</strong>";
echo "<br>";
for ($i = 0; $i < count($dates); $i++) {
  if($i % 2 !== 0) continue;
  echo $dates[$i] . "<br>";
}
echo "<br>";

echo "<strong>1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia):</strong>";
echo "<br>";
for ($i = 2; $i < count($dates); $i++) {
  echo $dates[$i] . "<br>";
}
echo "<br>";
