<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 11.2</title>

    </head>
    <body>
        <?php
            $con = mysqli_connect("","root");
            mysqli_select_db($con, "hardware");
            $res = mysqli_query($con, "SELECT * FROM fp");
            $num = mysqli_num_rows($res);

            echo "$num Datensätze gefunden<br>";

            while ($dsatz = mysqli_fetch_assoc($res)) {
                echo $dsatz["hersteller"] . ", "
                   . $dsatz["typ"] . ", "
                   . $dsatz["gb"] . ", "
                   . $dsatz["preis"] . ", "
                   . $dsatz["artnummer"] . ", "
                   . $dsatz["prod"] . "<br>";
               
            }

            mysqli_close($con);
        ?>

    </body>
</html>