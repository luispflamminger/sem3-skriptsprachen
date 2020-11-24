<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 11.3</title>

    </head>
    <body>
        <?php
            $con = mysqli_connect("","root");
            mysqli_select_db($con, "hardware");
            $sql = "SELECT hersteller, typ, artnummer, prod FROM fp ";
            $sql .= "WHERE prod >= '2008-01-01' AND prod < '2008-07-01' ORDER BY prod";
            $res = mysqli_query($con, $sql);
            $num = mysqli_num_rows($res);

            echo "$num Datensätze gefunden<br>";

            while ($dsatz = mysqli_fetch_assoc($res)) {
                echo $dsatz["hersteller"] . ", "
                   . $dsatz["typ"] . ", "
                   . $dsatz["artnummer"] . ", "
                   . $dsatz["prod"] . "<br>";
               
            }

            mysqli_close($con);
        ?>

    </body>
</html>