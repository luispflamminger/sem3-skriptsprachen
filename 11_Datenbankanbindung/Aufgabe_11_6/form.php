<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Dateneingabe</title>

        <?php
            if (isset($_POST["gesendet"])) {
                $con = mysqli_connect("", "root");
                mysqli_select_db($con, "hardware");
                $sql = "insert fp"
                     . " (hersteller, typ, gb, preis, artnummer, prod) values "
                     . "('" . $_POST["hersteller"] . "', "
                     . "'" . $_POST["typ"] . "', "
                     . "'" . $_POST["gb"] . "', "
                     . "'" . $_POST["preis"] . "', "
                     . "'" . $_POST["artnummer"] . "', "
                     . "'" . $_POST["prod"] . "')";
                mysqli_query($con, $sql);
                $num = mysqli_affected_rows($con);
                if ($num>0) {
                    echo "<p><font color='#00aa00'>Es wurde 1 Datensatz hinzugefügt</font></p>";
                } else {
                    echo "<p><font color='#ff0000'>Das hat nicht funktioniert...</font></p>";
                }
                mysqli_close($con);
            }
        ?>
    </head>
    <body>
        <p>Geben Sie bitte einen vollständigen Datensatz ein<br>und senden Sie das Formular ab:</p>

        <form action="form.php" method="POST">
            <p><input name="hersteller" /> Hersteller</p>
            <p><input name="typ" /> Typ</p>
            <p><input name="gb" /> GB</p>
            <p><input name="preis" /> Preis (Nachkommastellen mit Punkt)</p>
            <p><input name="artnummer" /> Artikelnummer</p>
            <p><input name="prod" /> Datum der ersten Produktion (Format 'yyyy-mm-dd')</p>
            <p><input type="submit" name="gesendet" /><input type="reset" /></p>
        </form>
        <p>Alle Datensätze <a href="tabelle.php">anzeigen</a></p>
    </body>
</html>