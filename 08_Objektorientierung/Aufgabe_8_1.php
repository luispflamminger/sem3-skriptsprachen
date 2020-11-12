<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 8.1</title>

        <?php

            class Fahrzeug
            {
                public $farbe;
                public $hersteller;
                
                public function __construct($farbe, $hersteller)
                {
                    $this->farbe = $farbe;
                    $this->hersteller = $hersteller;
                }

                public function starten() {
                    echo "Gestartet!<br>\n";
                }

                public function stoppen() {
                    echo "Gestoppt!<br>\n";
                }
            }
            
        ?>
    </head>
    <body>
        <?php
            $a1 = new Fahrzeug("gelb", "Chevi");
            $a1->starten();
            $a1->stoppen();
        ?>
    </body>
</html>