<?php

$p1 = 22.5;
$p2 = 12.3;
$p3 = 5.2;
$steuer = 0.19;

$netto = $p1 + $p2 + $p3;
$brutto = $netto * (1 + $steuer);

echo "<p>Artikel 1: $p1 Euro <br> \n";
echo "Artikel 2: $p2 Euro <br> \n";
echo "Artikel 3: $p3 Euro <br><br> \n\n";
echo "Nettosumme: $netto Euro <br> \n";
echo "Umsatzsteuer: ";
echo $steuer*100;
echo " % <br> \n";
echo "Bruttosumme: $brutto Euro <br> </p>\n"

?>