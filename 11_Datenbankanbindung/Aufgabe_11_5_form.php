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
            $sql = "SELECT DISTINCT hersteller FROM fp ";
            $res = mysqli_query($con, $sql);
            mysqli_close($con);
        ?>

            <p>Anzeige der Festplatten des gewählten Herstellers:</p>
            <form action="Aufgabe_11_5_res.php" method="POST">
            <p>
                <select name="hersteller">
                    <?php
                        while ($dsatz = mysqli_fetch_assoc($res)) {
                            echo "<option value='";
                            echo $dsatz["hersteller"];
                            echo "'>";
                            echo $dsatz["hersteller"];
                            echo "</option>\n";
                        }
                    ?>
                </select>
                <p><input type="submit" /><input type="reset" /></p>
            </form>

    </body>
</html>