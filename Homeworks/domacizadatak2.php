<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <br>
            <span style="color: red;">Zadatak 1</span>
        <br>
    <?php
            date_default_timezone_set("CET");
            echo date("d/m/y");
            echo "<br>";
            $a=mt_rand(1950,2010);
            $a1=11;
            $a2=28;
            echo "Godište date osobe: $a";
            $a3=2021;
            $b1=mt_rand(1,12);
            $b2=mt_rand(1,31);
            $c=$a3-$a;
            echo "<br>";
            echo "Broj godina: $c";
            echo "<br>";
                if ($c > 18 ) {
            echo "Osoba je punoletna.";
                } else if ($c = 18 && $b1 >= $a1 && $b2 >= $a2) {
            echo "Osoba je punoletna.";
                } else {
            echo "Osoba nije punoletna.";
                }
    ?>
         <br>
                <span style="color: red;">Zadatak 2</span>
        <br>
    <?php
            date_default_timezone_set("CET");
            $a= date("H");
            $a1= date("i");
            $b= 12;
            $c= 18;
            echo "Trenutno je ";
            echo $a;
            echo " sati i ";
            echo $a1;
            echo " minuta.";
            echo "<br>";
                if ($a < $b) {
            echo "ItBootcamp vam želi Dobro jutro.";
                } elseif ($a < $c) {
            echo "ItBootcamp vam želi Dobar dan.";
                } else {
            echo "ItBootcamp vam želi Dobro jutro";
                }
    ?>
        <br>
                <span style="color: red;">Zadatak 3</span>
        <br>

    <?php
            $str = "The Solar System is the gravitationally bound system of the Sun
            and the objects that orbit it, either directly or indirectly. Of the objects that
            orbit the Sun directly, the largest are the eight planets, with the
            remainder being smaller objects, the dwarf planets and small Solar
            System bodies. Of the objects that orbit the Sun indirectly—the natural
            satellites—two are larger than the smallest planet, Mercury, and one
            more almost equals it in size.";
            $a = strpos($str,"orbit");
            echo "Prvo pojavljivanje reči <mark>orbit</mark> je posle $a karaktera.";
            echo "<br>";
            $a=$a+1;
            echo "A drugo je posle ";
            echo strpos($str,"orbit",$a);
            echo " karaktera."
    ?>
</html>