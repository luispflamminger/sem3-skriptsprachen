<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 12.1</title>
        <?php
            if (isset($_POST["set"])) {
                setcookie("vorname", $_POST["vorname"], time()+7200);
                setcookie("nachname", $_POST["nachname"], time()+7200);
                header("Location: Aufgabe_12_1_get.php");
            }
        ?>
    </head>
    <body>
        <p>Tragen Sie ihre Daten ein.<br>
        Diese werden zur späteren Verwendung als Cookie gespeichert.</p>
        <form action="Aufgabe_12_1_set.php" method="POST">
        Ihr Vorname: <br>
        <input type="text" name="vorname" size="20" maxlength="30" />
        <br>
        Ihr Nachname: <br>
        <input type="text" name="nachname" size="20" maxlength="30" /><br>
        <input type="submit" name="set"  />
        <?php
        
        ?>
        </form>
    </body>
</html>