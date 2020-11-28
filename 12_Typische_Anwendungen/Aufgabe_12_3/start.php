<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Startseite</title>
        <?php include "sc_shop.inc.php"; ?>
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