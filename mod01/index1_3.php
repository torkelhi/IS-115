<?php 

$navn = "Torkel Herskedal Ivarsøy";
$alder = 23;
$universitet = "Universitetet i Agder";

$setning = "Jeg heter " . $navn . ", jeg er " . $alder . " år gammel og studerer ved " . $universitet; 

echo "<ol>";
echo "<li>" . $navn . "</li>";
echo "<li>" . $alder . "</li>";
echo "<li>" . $universitet . "</li>";
echo "</ol>";

echo "<ul>";
echo "<li>" . $navn . "</li>";
echo "<li>" . $alder . "</li>";
echo "<li>" . $universitet . "</li>";
echo "</ul>";

echo "<p>" . $setning . "</p>"


?>