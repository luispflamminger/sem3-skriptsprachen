<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 12.2</title>

    </head>
    <body>
        <p>Willkommen bei Pflaumen Pflamminger!<br>
        Bitte geben Sie die gewünschte Menge an Pflaumen, sowie ihre Adressdaten ein.</p>
        <form action="confirm.php" method="POST">
        Menge an Pflaumen in kg: <br>
        <input type="text" name="pflaumen" size="20" maxlength="30" value="<?php if (isset($_COOKIE['pflaumen'])) { echo htmlspecialchars($_COOKIE['pflaumen']); } ?>" />
        <br>
        Vorname: <br>
        <input type="text" name="vorname" size="20" maxlength="30" value="<?php if (isset($_COOKIE['vorname'])) { echo htmlspecialchars($_COOKIE['vorname']); } ?>" /><br>
        Nachname: <br>
        <input type="text" name="nachname" size="20" maxlength="30" value="<?php if (isset($_COOKIE['nachname'])) { echo htmlspecialchars($_COOKIE['nachname']); } ?>" /><br>
        Straße: <br>
        <input type="text" name="strasse" size="20" maxlength="30" value="<?php if (isset($_COOKIE['strasse'])) { echo htmlspecialchars($_COOKIE['strasse']); } ?>" /><br>
        Hausnummer: <br>
        <input type="text" name="hausnummer" size="20" maxlength="30" value="<?php if (isset($_COOKIE['hausnummer'])) { echo htmlspecialchars($_COOKIE['hausnummer']); } ?>" /><br>
        PLZ: <br>
        <input type="text" name="plz" size="20" maxlength="30" value="<?php if (isset($_COOKIE['plz'])) { echo htmlspecialchars($_COOKIE['plz']); } ?>" /><br>
        Ort: <br>
        <input type="text" name="ort" size="20" maxlength="30" value="<?php if (isset($_COOKIE['ort'])) { echo htmlspecialchars($_COOKIE['ort']); } ?>" /><br>
        <input type="submit" name="set"  />

        </form>
    </body>
</html>