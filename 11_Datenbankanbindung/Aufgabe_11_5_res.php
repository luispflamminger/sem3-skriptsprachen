<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 11.5</title>

    </head>
    <body>
    <?php
            $con = mysqli_connect("","root");
            mysqli_select_db($con, "hardware");
            $hersteller = $_POST["hersteller"];
            $sql = "SELECT * FROM fp WHERE hersteller = '$hersteller' ";
            $res = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($res) == 0) {
                echo "Es wurden keine Datensätze gefunden";
            } else {
                ?>
                <table border='1'>
                    <tr>
                        <td>Hersteller</td>
                        <td>Typ</td>
                        <td>GB</td>
                        <td>Preis</td>
                        <td>Artnr.</td>
                        <td>Datum</td>
                    </tr>
                <?php
                    while ($dsatz = mysqli_fetch_assoc($res)) {
                        echo "<tr>\n\t";
                        echo "<td>" . $dsatz["hersteller"] . "</td>\n";
                        echo "<td>" . $dsatz["typ"] . "</td>\n";
                        echo "<td>" . $dsatz["gb"] . "</td>\n";
                        echo "<td>" . $dsatz["preis"] . "</td>\n";
                        echo "<td>" . $dsatz["artnummer"] . "</td>\n";
                        echo "<td>" . $dsatz["prod"] . "</td>\n";
                    }
                    echo "\n</tr>\n";
                    echo "</table>";
            }
            
            mysqli_close($con);
        ?>

    </body>
</html>