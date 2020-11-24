<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 11.4</title>

    </head>
    <body>
        <?php
            $con = mysqli_connect("","root");
            mysqli_select_db($con, "hardware");
            
            $sql = "SELECT hersteller, typ, preis FROM fp WHERE";
            switch ($_POST["preis"]) {
                case 1:
                    $sql .= " preis <= 120 ";
                    break;
                case 2:
                    $sql .= " preis > 120 AND preis <= 140 ";
                    break;
                case 3:
                    $sql .= " preis < 140";
                    break;
            }
            
            if (isset($_POST["sort"]) && $_POST["sort"] = "checked") {
                $sql .= " ORDER BY preis ASC";
            }
            
            $res = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($res) == 0) {
                echo "Es wurden keine Datensätze gefunden";
            } else {
                while ($dsatz = mysqli_fetch_assoc($res)) {
                    echo $dsatz["hersteller"] . ", "
                        . $dsatz["typ"] . ", "
                        . $dsatz["preis"] . "<br>";                
                }
            }
            
            mysqli_close($con);
        ?>
    </body>
</html>