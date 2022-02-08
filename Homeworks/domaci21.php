<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 1</h1>
    <?php
    abstract class Oblik {
        protected $dimenzija;
        const PI = 3.14;
            function __construct($dimenzija) {
                $this->dimenzija = $dimenzija;
                
            }
            
            function getDimenzija() {
                return $this->dimenzija;
            }

            function setDimenzija($novadimenzija) {
                $this->dimenzija = $novadimenzija;
            }

            abstract function getPovrsina();
            abstract function getObim();
        }

        class Kvadrat extends Oblik {
            
            public function getPovrsina() {
                return $this->dimenzija * $this->dimenzija;
                }
            public function getObim() {
                return 4 * $this->dimenzija;

            }
        }

        class Krug extends Oblik {

            public function getPovrsina() {
                return $this->dimenzija ** 2 * Oblik::PI;
                }
            public function getObim() {
                return $this->dimenzija * 2 * self::PI;
                
            }
        }

        $kvadrat = new Kvadrat(10);
        echo "Obim kvadrata je: ";
        var_dump($kvadrat->getObim());
        echo "<br>";
        echo "Povrsina kvadrata je: ";
        var_dump($kvadrat->getPovrsina());
        echo "<br>";
        echo "<br>";

        $krug = new Krug(10);
        echo "Obim kruga je: ";
        var_dump($krug->getObim());
        echo "<br>";
        echo "Povrsina kruga je: ";
        var_dump ($krug->getPovrsina());
    ?>
    <hr>
    <h1>Zadatak 2</h1>
    <?php

    class Knjiga {
            protected $naziv;
            protected $godina_izdavanja;
            protected $cena;

            function __construct(string $naziv,int $godina_izdavanja,string $cena) {
                $this->naziv = $naziv;
                $this->godina_izdavanja = $godina_izdavanja;
                $this->cena = $cena;
            }

            function getNaziv() {
                return $this->naziv;
            }
            function setNaziv($novinaziv) {
                $this->naziv = $novinaziv;
            }
            function getGodinaizdavanja() {
                return $this->godina_izdavanja;
            }
            function setGodinaizdavanja($novagodinaizdavanja) {
                $this->naziv = $novagodinaizdavanja;
            }
            function getCena() {
                return $this->cena;
            }
            function setCena($novacena) {
                $this->naziv = $novacena;
            }
    }
    $knjiga1 = new Knjiga("The Lord of the Rings I","2001","1999din");
    var_dump($knjiga1);
    echo "<br>";

    $knjiga2 = new Knjiga("The Lord of the Rings II","2002","1999din");
    var_dump($knjiga2);
    echo "<br>";

    $knjiga3 = new Knjiga("The Lord of the Rings III","2003","1999din");
    var_dump($knjiga3);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    class Biblioteka extends Knjiga {
        protected $biblioteka;

            function __construct($biblioteka) {
                $this->biblioteka = $biblioteka;
                }
            function dodajKnjigu($knjiga) {
                array_push($this->biblioteka, $knjiga);
            }
            function ukloniNaPocetku() {
                array_shift($this->biblioteka);
            }
            function ukloniNaKraju() {
                array_pop($this->biblioteka);
            }
        }
        $biblioteka = new Biblioteka([]);
        $biblioteka->dodajKnjigu($knjiga1);
        $biblioteka->dodajKnjigu($knjiga2);
        $biblioteka->dodajKnjigu($knjiga3);
        var_dump($biblioteka);
        echo "<br>";
        
        $biblioteka->ukloniNaKraju();
        var_dump($biblioteka);
        $biblioteka->ukloniNaPocetku();
        var_dump($biblioteka);
        ?>
</body>
</html>