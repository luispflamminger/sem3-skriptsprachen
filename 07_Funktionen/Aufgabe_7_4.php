<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 7.4</title>

        <?php

        ?>
    </head>
    <body>
        <?php

            $dateiname = "Keiser.jpg";
            if (preg_match("/JPE?G/i", substr($dateiname, strrpos($dateiname, "."), ))) {
                echo "Datei ist im Format JPG!";
            } else {
                echo "Datei ist in einem anderen Format.";
            }
        ?>
    </body>
</html>