<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="domaci20.css">
</head>
<body>
<?php

echo "<h1>Vezba 1</h1>";
echo "<br>";

    class Proizvod {
        private $naziv;
        private $cena;
        private $kolicina;
        private $popust;

            function __construct($naziv, $cena, $kolicina, $popust)
            {
                $this->naziv = $naziv;
                $this->cena = $cena;
                $this->kolicina = $kolicina;
                $this->popust = $popust;

            }
            function vrednost()
            {
                return $this->kolicina * ($this->cena - ($this->cena * $this->popust) / 100);
            }
            function uporedi_proizvod($proizvod_2)
            {
                if($this->vrednost() > $proizvod_2->vrednost())
                {
                    return true;
                }
                    return false;
            }
            function __toString()
            {   $nova_cena = $this->cena - ($this->cena * $this->popust)/100;
                if ($this->popust > 0)
                {
                    return "Proizvod $this->naziv, koji je na akciji ima staru cenu $this->cena din a nova cena je $nova_cena din";
                }
                else
                {
                    return "Proizvod nije na akciji, cena je $this->cena";
                }
            }
            function getNaziv()
            {
                return $this->naziv;
            }
            function getCena()
            {
                return $this->cena;
            }
            function getKolicina()
            {
                return $this->kolicina;
            }
            function getPopust()
            {
                return $this->popust;
            }
    }

    $proizvod = new Proizvod("Lak za kosu", 400, 2, 10);
    echo $proizvod;
    echo "<br>";
    $proizvod_1 = new Proizvod("Vosak za kosu", 360, 1, 10);
    $proizvod_2 = new Proizvod("Gel za kosu", 560, 1, 10);
    echo "Od preparata za kosu imamo jos $proizvod_1 I $proizvod_2";
    echo "<br>";
        if($proizvod_1->uporedi_proizvod($proizvod_2))
        {
            echo "$proizvod_1 je skuplji od $proizvod_2-a";
        }
        else
        {
            echo "$proizvod_1 je jeftiniji od $proizvod_2-a";
        }
        echo "<h1>Vezba 2</h1>";
        echo "<br>";

        class BojaZaKosu extends Proizvod
        {
            private $boja;
            function __construct($naziv, $cena, $kolicina, $popust, $boja)
            {
                parent::__construct($naziv, $cena, $kolicina, $popust);
                $this->boja=$boja;     
            }
            function __toString()
            {
                return parent::__toString(). ", a boja proizvoda je $this->boja.";
            }
        }
        $proizvod_3 = new BojaZakosu ("Boja za kosu", 480, 1, 10, "Plava");
        echo "$proizvod_3";
?>
<?php
if(isset($_GET)){
    if($_GET["boja"]==""){
        $Proizvod = new Proizvod($_GET["naziv"],$_GET["cena"],$_GET["kolicina"],$_GET["popust"]);
        echo '<h1>' . $Proizvod->__toString() . '</h1>';
    }
    else{
        $BojaZaKosu = new BojaZaKosu($_GET["naziv"],$_GET["cena"],$_GET["kolicina"],$_GET["popust"],$_GET["boja"]);
        echo '<h1>' . $BojaZaKosu->__toString() . '</h1>';
    }
}
?>
<br><br><br>
    <form method="get" action="./Domaci20.php">
        <fieldset>
            <legend>Porudzbina</legend>
    <input type="text", name="naziv" placeholder="Naziv proizvoda" required/><br><br>
    <input type="text", name="cena" placeholder="Cena proizvoda" required/><br><br>
    <input type="text", name="kolicina" placeholder="Kolicina proizvoda" required/><br><br>
    <input type="text", name="popust" placeholder="Popust proizvoda" required/><br><br>
    <input type="text", name="boja" placeholder="Boja proizvoda"/><br><br>
    <input type="submit" value="Posalji"/><br><br>
    <sup>Polje boja proizvoda nije obavezno</sup>
    </fieldset>
    </form>
</body>
</html>