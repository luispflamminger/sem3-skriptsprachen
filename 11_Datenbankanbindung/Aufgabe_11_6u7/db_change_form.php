<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Dateneingabe</title>

        <?php
            $con = mysqli_connect("", "root");
            mysqli_select_db($con, "hardware");
            if (isset($_POST["dataset"])) {
                $sql = "SELECT * FROM fp WHERE artnummer = '" . $_POST["dataset"] . "'";
                $res = mysqli_query($con, $sql);
                $dsatz = mysqli_fetch_assoc($res);
            } elseif ($_POST["change"]) {
                $num = 0;
                //Check if artnummer already exists
                if ($_POST["artnummerNeu"] <> $_POST["artnummerAlt"]) {
                    $res = mysqli_query($con, "SELECT * FROM fp WHERE artnummer = '" . $_POST["artnummerNeu"] . "'"); 
                    $num = mysqli_num_rows($res);
                }

                if ($num = 0) {
                    $sql = "UPDATE fp SET "
                    . "hersteller = '" . $_POST["hersteller"] . "', "
                    . "typ = '" . $_POST["typ"] . "', "
                    . "gb = '" . $_POST["gb"] . "', "
                    . "preis = '" . $_POST["preis"] . "', "
                    . "artnummer = '" . $_POST["artnummerNeu"] . "', "
                    . "prod = '" . $_POST["prod"] . "' "
                    . "WHERE artnummer = '" . $_POST["artnummerAlt"] . "'";
                    mysqli_query($con, $sql);
                    $num = mysqli_affected_rows($con);
                    if ($num>0) {
                        echo "<p><font color='#00aa00'>Datensatz wurde geändert</font></p>";
                    } else {
                        echo "<p><font color='#ff0000'>Das hat nicht funktioniert...</font></p>";
                    }

                    $sql = "SELECT * FROM fp WHERE artnummer = '" . $_POST["artnummerNeu"] . "'";

                } else {
                    echo "<p><font color='#ff0000'>Änderung konnte nicht durchgeführt werden.<br>"
                       . "Diese Artikelnummer ist bereits belegt</font></p>";

                       $sql = "SELECT * FROM fp WHERE artnummer = '" . $_POST["artnummerAlt"] . "'";                    
                }

                $res = mysqli_query($con, $sql);
                $dsatz = mysqli_fetch_assoc($res);

            }
        ?>
    </head>
    <body>
        <p>Führen Sie die Änderungen durch,<br>bestätigen Sie anschließend die Eingaben</p>

        <form action="db_change_form.php" method="POST">
            <p><input name="hersteller" value="<?php echo $dsatz["hersteller"]; ?>"/> Hersteller</p>
            <p><input name="typ" value="<?php echo $dsatz["typ"]; ?>"/> Typ</p>
            <p><input name="gb" value="<?php echo $dsatz["gb"]; ?>"/> GB</p>
            <p><input name="preis" value="<?php echo $dsatz["preis"]; ?>"/> Preis (Nachkommastellen mit Punkt)</p>
            <p><input name="artnummerNeu" value="<?php echo $dsatz["artnummer"]; ?>"/> Artikelnummer</p>
            <p><input name="prod" value="<?php echo $dsatz["prod"]; ?>"/> Datum der ersten Produktion (Format 'yyyy-mm-dd')</p>
            <input name="artnummerAlt" type="hidden" value="<?php echo $dsatz["artnummer"]; ?>"/>
            <p><input type="submit" name="change" value="Datensatz ändern" /><input type="reset" /></p>
        </form>
        <form action="db_table.php"><input type="submit" value="Zurück"></form>
        <?php
        mysqli_close($con);
        ?>
    </body>
</html>