<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Produktwahl</title>
        <?php include "sc_shop.inc.php"; ?>
    </head>
    <body>
        <h2><?php echo $abtname[$_GET["abtnr"]]; ?></h2>
        <p>Wählen Sie aus:</p>
        <!--Form hier einfügen, action muss hier irgendwie auf die Session bezogen werden <form action="">-->
        <table border="1">
            <tr>
                <th align="left">Artikel</th>
                <th align="left">Nr.</th>
                <th align="left">Preis</th>
                <th align="left">Anzahl</th>
            </tr>
            <?php
                for ($r=0; $r < count($artnr[$_GET["abtnr"]]); $r++) { 
                    echo "<tr>\n";
                    echo "<td align='left'>" . $aname[$_GET["abtnr"]][$r] . "</td>\n";
                    echo "<td align='left'>" . $artnr[$_GET["abtnr"]][$r] . "</td>\n";
                    echo "<td align='left'>" . $preis[$_GET["abtnr"]][$r] . "</td>\n";
                    //echo "<td align='left'>" <- Eingabefeld
                }
            ?>
              

        </table>
        <!-- form-Ende und Button zum Warenkorb -->
        
        <p><a href="start.php">Zur Startseite</a></p>
    </body>
</html>