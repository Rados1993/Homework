<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>Zadatak 1</span>
    <br>
    <input type="text" name="rec" placeholder="Unesite rec">
    <?php
    if (isset($rec)) {
        $rec = $_GET["rec"];
        $rec1 = str_split($rec);
        foreach ($rec1 as $elemenat) {
            if (($elemenat == "a" || $elemenat == "o" || $elemenat == "i" || $elemenat == "u") && ($elemenat == "A" || $elemenat == "O" || $elemenat == "I" || $elemenat == "U")) {
                continue;
            }
            if ($elemenat == "e") {
                break;
            }
            if ($elemenat == "E") {
                break;
            }
            echo $elemenat;
            echo "<br>";
        }
    }

    ?>
    <span>Zadatak 2</span>
    <br> 
    <?php
    $broj=30;
        while ($broj < 100) {
            $broj++;
            $broj1 = strrev($broj);
            $broj2 = (int)substr($broj,0,1);
            $zadnjacifra = (int)substr($broj1,0,1);
            $zbir = $broj2 + $zadnjacifra;
            if($zadnjacifra % 3 == 0 || $zadnjacifra % 5 == 0 || $zbir % 4 == 0) {
                continue;
            } else {
                echo "$broj";
                echo "<br>";
            }
        }
    ?>
    <span> Zadatak 3 </span>
    <input type="number" name="n">
    <input type="submit" value="posalji">
    <?php
    if (isset($_GET["n"])) {
        $broj = $_GET["n"];
    }
    if(isset($broj)) {
        $brojac = 0;
        $zbir = 0;
        while ($zbir <= 5000) {
            $broj = $broj + 2;
            $zbir = $zbir + $broj;
            $brojac++;
        }
    echo "Konacni zbir je $zbir";
    echo "<br>";
    echo "Broj prolazaka kroz petlju je $brojac";
    }

    ?>

    
</body>
</html>