<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Zadatak 1.

    class Slika {
        protected $sirina;
        protected $visina;
        protected $putanja;
        protected $alternativni_tekst;

        public function __construct($sirina, $visina, $putanja, $alternativni_tekst) {
            $this->sirina = $sirina;
            $this->visina = $visina;
            $this->putanja = $putanja;
            $this->alternativni_tekst = $alternativni_tekst;
        }

        public function getSirina() {
            return $this->sirina;
        }
        public function getVisina() {
            return $this->visina;
        }
        public function getPutanja() {
            return $this->putanja;
        }
        public function getAlternativni_tekst() {
            return $this->alternativni_tekst;
        }
        public function setSirina($nova_sirina) {
            $this->sirina = $nova_sirina;
        }
        public function setVisina($nova_visina) {
            $this->visina = $nova_visina;
        }
        public function setPutanja($nova_putanja) {
            $this->putanja = $nova_putanja;
        }
        public function setAlternativni_tekst($novi_alternativni_tekst) {
            $this->alternativni_tekst = $novi_alternativni_tekst;
        }
        public function __toString()
        {
            return "Slika je visine: " . $this->visina . " sirine " . $this->sirina . " ima putanju " . $this->putanja . " i alternativni tekst " . $this->alternativni_tekst;
        }
        public function prikaziSliku()
        {
            echo " <img src=\"$this->putanja\" alt=\"$this->alternativni_tekst\" width=\"$this->sirina\" height=\"$this->visina\">";
        }
    }

    $slika = new Slika(300, 250, "./Leptir.jpg", "leptir");
    $slika->prikaziSliku();
    echo "<br>";
    echo $slika;
?>

<?php

//Zadatak 2.

    interface Upit {
        public function kreirajSelect();
    }
    class UpitNamestaj implements Upit {
        public function kreirajSelect() {
            $select = "SELECT * FROM `namestaj` WHERE `id` > 2";
            return $select;
        }
    }
    class UpitMagacin implements Upit {
        public function kreirajSelect() {
            $select = "SELECT * FROM `magacin` WHERE `id` > 2";
            return $select;
        }
    }
    class UpitProdavnica implements Upit {
        public function kreirajSelect() {
            $select = "SELECT * FROM `prodavnica` WHERE `id`>2";
            return $select;
        }
    }

?>

<?php

//Zadatak 3.

    $select = "SELECT * FROM `tabela` WHERE `broj`> 50 OR `broj`< 20";
    $delete = "DELETE FROM `tabela` WHERE `naziv` LIKE \"%test\";";
    $select1 = "SELECT * FROM `tabela` LIMIT 0,20 WHERE `broj` > 20";

?>

<?php

//Zadatak 4.

    $select = "SELECT * FROM `zadatak` WHERE `id` > 5";
    $upit_select = $konekcija->prepare($select);
    $upit_select->execute();



    $insert = "INSERT INTO `zadatak` (`naslov`,`pocetak`,`kraj` VALUES (?,?,?)";
    $upit_insert = $konekcija->prepare($insert);
    $naslov = "ime";
    $pocetak = "2022-1-15";
    $kraj = "2022-2-15";
    $upit_insert->bind_param("sss", $naslov, $pocetak, $kraj);
    $upit_insert->execute();



    $update = "UPDATE `zadatak` SET `datum`='2022-1-16' WHERE `datum`='2022-1-15'";
    $upit_update = $konekcija->prepare($update);
    $upit_update->execute();



    $delete = "DELETE `zadatak` WHERE `datum`='2022-2-15'";
    $upit_delete = $konekcija->prepare($delete);
    $upit_delete->execute();

?>
</body>
</html>