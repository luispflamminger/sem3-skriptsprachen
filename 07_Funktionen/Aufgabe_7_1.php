<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 7.1</title>

        <?php
            function vermerk($vor, $nach, $abt) {
                $email = "$vor.$nach@$abt.phpdevel.de";
                echo "<table width='30%' border='1'><tr><td>"
                    . "Programmteil von $vor $nach, Abteilung $abt<br>"
                    . "E-Mail: $email"
                    . "</td></tr></table>";
            }
        ?>
    </head>
    <body>
        <?php
            vermerk("Luis", "Pflammo", "PTI12");
            vermerk("Thomas", "Keiser", "SAP");
        ?>
    </body>
</html>