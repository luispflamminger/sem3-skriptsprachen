<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Startseite</title>
        <?php
        session_start();
        include "sc_shop.inc.php";
        /*
        Struktur der Shopdaten:
        * $abtname gibt an, welcher Index welcher Kategorie entspricht
        * $aname/artnr/preis -> 1. Index: Kategorie des Produkts; 2. Index: Individuelle Nummer innerhalb der Kategorie
        d.h.: $aname[1][0] (Artikelname), $artnr[1][0] (Artikelnummer) und $preis[1][0] (Artikelpreis)
              bilden einen kompletten Datensatz des ersten Produkts in der Kategorie mit Index 1
        */
        ?>
    </head>
    <body>
        <h2>Willkommen im Webshop</h2>
        <p>Zur Abteilung:<br>
        <?php
        for ($abt=0; $abt < count($abtname); $abt++) { 
            echo "<a href='abteilung.php?abtnr=$abt'>" . $abtname[$abt] . "</a><br>";
        }
        ?>
        <br><a href="warenkorb.php">Zum Warenkorb</a></p>
    </body>
</html>