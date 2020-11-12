<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 8.4</title>

        <?php
            /* Für dieses Programm alle Fehler anzeigen */
            //ini_set("error_reporting", 32767);
            /* Variable unbekannt */
            try {
                if (isset($a)) {
                    $c = 2 * $a;
                } else {
                    throw new Exception("Variable nicht definiert.", 1);
                }
                echo "<p>$c</p>";
            } catch (Exception $e) {
                echo "Exception gefangen: " . $e->getMessage() . "<br>\n";
            }
                /* Division durch 0 */
            try {
                $x = 24;
                for($y=4; $y>-3; $y--) {
                    if ($y == 0) {
                        throw new Exception("Teilen durch 0. ");
                    } else {
                        $z = $x / $y;
                    }
                    echo "$x / $y = $z<br />";
                }
            } catch (Exception $e) {
                echo "Exception gefangen: " . $e->getMessage() . "<br>\n";
            }
                /* Zugriff auf Funktion */
            try {
                if (function_exists("fkt")) {
                    fkt();
                    echo "Ende";
                } else {
                    throw new Exception("Funktion existiert nicht.");
                }
            } catch (Exception $e) {
                echo "Exception gefangen: " . $e->getMessage() . "<br>\n";
            }

        ?>
    </head>
    <body>
        <?php

        ?>
    </body>
</html>