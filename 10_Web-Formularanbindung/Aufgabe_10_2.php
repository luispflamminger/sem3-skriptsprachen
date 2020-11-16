<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 10.2</title>
    </head>
    <body>
        <?php
            if (!isset($_POST["vorname"])) {
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Ihr Vorname: <br>
            <input type="text" name="vorname" size="20" maxlength="30" />
            <br>
            Ihr Nachname: <br>
            <input type="text" name="nachname" size="20" maxlength="30" />
            <br>
            Ihre E-Mail Adresse: <br>
            <input type="email" name="email" size="20" maxlength="30" />
            <br>
            Ihr Passwort: <br>
            <input type="password" name="password" size="20" maxlength="30" />
            <br>
            <input type="submit" value="Abschicken" />
            </form>
        <?php
            } else {
                echo "Ihre Eingaben:<br>\n";
                echo "Vorname: " . htmlspecialchars($_POST['vorname']);
                echo "<br>Nachname: " . htmlspecialchars($_POST['nachname']);
                echo "<br>E-Mail: " . htmlspecialchars($_POST['email']);
                echo "<br>Passwort: " . htmlspecialchars($_POST['password']);
            }
        ?>
    </body>
</html>