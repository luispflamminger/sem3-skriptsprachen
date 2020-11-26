


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 12.2</title>
        <?php
            if (isset($_POST["set"])) {
                setcookie("pflaumen", $_POST["pflaumen"], time()+7200);
                setcookie("vorname", $_POST["vorname"], time()+7200);
                setcookie("nachname", $_POST["nachname"], time()+7200);
                setcookie("strasse", $_POST["strasse"], time()+7200);
                setcookie("hausnummer", $_POST["hausnummer"], time()+7200);
                setcookie("plz", $_POST["plz"], time()+7200);
                setcookie("ort", $_POST["ort"], time()+7200);
            }
        ?>
    </head>
    <body>
        <?php
            echo "<h1>Bestätigung!<br></h1>";
            echo "<p>Vielen Dank für Ihre Bestellung, " . $_POST['vorname'] . " " . $_POST['nachname'] . "!";
            echo "<p>" . $_POST['pflaumen'] . " kg Pflaumen werden an folgende Adresse versandt:<br>";
            echo $_POST['vorname'] . " " . $_POST['nachname'] . "<br>";
            echo $_POST['strasse'] . " " . $_POST['hausnummer'] . "<br>";
            echo $_POST['plz'] . " " . $_POST['ort'] . "</p>";
        ?>    
    </body>
</html>