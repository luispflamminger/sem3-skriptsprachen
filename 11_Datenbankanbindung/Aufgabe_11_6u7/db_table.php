<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Dateneingabe</title>

        <?php
        
            $con = mysqli_connect("", "root");
            mysqli_select_db($con, "hardware");
            $sql = "SELECT * FROM fp";
            $res = mysqli_query($con, $sql);
        ?>
    </head>
    <body>
        <p>Übersicht aller Datensätze der Tabelle "fp"<br>Wählen Sie aus, welcher Datensatz geändert werden soll.</p>
        <form action="db_change_form.php" method="POST">
        <table border='1'>
            <tr>
                <td>Auswahl</td>
                <td>Hersteller</td>
                <td>Typ</td>
                <td>Kapazität(gb)</td>
                <td>Preis</td>
                <td>Artikelnummer</td>
                <td>Produktionsdatum</td>
            </tr>
            <?php
            
            while ($dsatz = mysqli_fetch_assoc($res)) {
                echo "<tr>\n\t";
                echo "<td><input type='radio' name='dataset' value='" . $dsatz["artnummer"] . "'></td>";
                echo "<td>" . $dsatz["hersteller"] . "</td>\n";
                echo "<td>" . $dsatz["typ"] . "</td>\n";
                echo "<td>" . $dsatz["gb"] . "</td>\n";
                echo "<td>" . $dsatz["preis"] . "</td>\n";
                echo "<td>" . $dsatz["artnummer"] . "</td>\n";
                echo "<td>" . $dsatz["prod"] . "</td>\n";
            }
            echo "\n</tr>\n";
            echo "</table>";
            
            mysqli_close($con);
        ?>
        </table>
        <p><input type="submit" name="change" value="Datensatz bearbeiten"></p>
        </form>
        <form action="db_form.php"><input type="submit" value="Zurück"></form>
    </body>
</html>