<?php
error_reporting(E_ERROR | E_PARSE);

$str1 = "10 Eier";
$str2 = "Schachtel mit 10 Eiern";
$str3 = "3.5 Äpfel";
$erg1 = $str1 + 2;

var_dump($erg1); //Ausgabe: 12 -> Beginnt ein String mit einer Zahl wird diese Zahl zur Addition genommen

echo "<br />\n"; //Sowohl Zeilenumbruch in Ausgabe, als auch in generiertem HTML-File
$erg2 = $str2 + 2;

var_dump($erg2); //Ausgabe: 2 -> Beginnt String nicht mit Zahl, wird 0 zur addition genommen

echo "<br />\n";
$erg3 = $str3 + 2;

var_dump($erg3); //Ausgabe: 5.5

//Bei diesen unsauberen Additionen wird eine Fehlermeldung ausgegeben. Diese kann auch unterdrückt werden
?>
