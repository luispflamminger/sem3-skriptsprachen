<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aufgabe 8.3</title>

        <?php
            class Fahrzeug {

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

            class Auto extends Fahrzeug {
                public $km;

                public function fahren($km) {
                    $this->km = $this->km + $km;
                    echo "$km gefahren!<br>\n";
                    echo "Der neue Kilometerstand ist nun " . $this->km . "<br>\n";
                }

                public function __construct($farbe, $hersteller, $km)
                {
                    parent::__construct($farbe, $hersteller);
                    $this->km = $km;
                    echo "Kilometerstand: " . $this->km . "<br>\n";
                }
            }
            
        ?>
    </head>
    <body>
        <?php
            $a1 = new Auto("rot", "Skoda", 5000);
            $a1->fahren(50);
        ?>
    </body>
</html>