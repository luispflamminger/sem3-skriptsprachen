<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 7.2</title>

        <?php
            function rechne($z1, $z2, &$sum, &$prod) {
                $sum = $z1 + $z2;
                $prod = $z1 * $z2;
            }
        ?>
    </head>
    <body>
        <?php
            $zahl1 = 5;
            $zahl2 = 7;
            rechne($zahl1, $zahl2, $summe, $produkt);
            echo "Die Summe von $zahl1 und $zahl2 ist $summe" 
                . "<br>Das Produkt von $zahl1 und $zahl2 ist $produkt";
        ?>
    </body>
</html>