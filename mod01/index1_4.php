<h4> <a href="./index.php">Tilbake til Oppgave Oversikt</a> </h4>
<?php

function add(int $x, int $y) {
 return $x + $y;
}

function gjennomsnitt($numb) {
    return $numb/2;
}


$summertTall = add(45,7);
$gjennomsnittetAvSummertTall = gjennomsnitt($summertTall);

echo "<p> function add(int x, int y) {
    return x + y;
   }
   
   function gjennomsnitt(numb) {
       return numb/2;
   }
   
   
   summertTall = add(45,7);
   gjennomsnittetAvSummertTall = gjennomsnitt(summertTall);</p>";

echo "<p>  Summert Tall :" . $summertTall . "</p>";

echo "<p>  Gjennomsnitt :" . $gjennomsnittetAvSummertTall . "</p>";
?>