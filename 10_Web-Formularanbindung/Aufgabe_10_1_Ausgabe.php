<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 10.1</title>
    </head>
    <body>
        <?php
            echo "Ihre Eingaben:<br>\n";
            echo "Vorname: " . $_GET['vorname'];
            echo "<br>Nachname: " . $_GET['nachname'];
            echo "<br>E-Mail: " . $_GET['email'];
            echo "<br>Passwort: " . $_GET['password'];
        ?>
    </body>
</html>