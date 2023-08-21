<?php

function add(int $x, int $y) {
 return $x + $y;
}

function gjennomsnitt($numb) {
    return $numb/2;
}


$summertTall = add(45,7);
$gjennomsnittetAvSummertTall = gjennomsnitt($summertTall);

echo "<p>  Summert Tall :" . $summertTall . "</p>";

echo "<p>  Gjennomsnitt :" . $gjennomsnittetAvSummertTall . "</p>";
?>