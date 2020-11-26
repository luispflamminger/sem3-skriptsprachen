<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 12.1</title>

    </head>
    <body>
        <?php
            if (isset($_COOKIE["vorname"]) && isset($_COOKIE["nachname"])) {
                echo "<p>Cookies wurden gesetzt <br></p>";
                echo "Vorname: " . htmlspecialchars($_COOKIE["vorname"]) . "<br>\n";
                echo "Nachname: " . htmlspecialchars($_COOKIE["nachname"]) . "<br>\n";
            } else {
                echo "<p>Es wurden keine Cookies gesetzt</p>";
            }
        ?>

    </body>
</html>