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
    $niz1=[1,3,6,8,10,15];
    function niz30($niz1) {
        $brojac = 0;
        for ($i = 0; $i < count($niz1); $i++) {
            if ($niz1[$i] >= 30) {
                $brojac++;
                break;
            }
        }
        if ($brojac != 0) {
            echo "Niz sadrzi broj koji je veci od 30.";
        } else {
            echo "Niz ne sadrzi broj koji je veci od 30.";
        }
    }

    niz30($niz1);
    ?>
    <hr>
    <h1>Zadatak 2</h1>
    <?php
    $niz1=[1,3,6,-5,-11,8,10,15];
    function negativni($niz1) {
        $brojac = 0;
        for ($i = 0; $i < count($niz1); $i++) {
            if ($niz1[$i] < 30) {
                $brojac++;
                break;
            }
        }
        if ($brojac != 0) {
            echo "Niz sadrzi negativni broj.";
        } else {
            echo "Niz ne sadrzi negativni broj.";
        }
    }

    negativni($niz1);
    ?>
    <hr>
    <h1>Zadatak 3</h1>
    <?php
    function niz2 () {
        $niz = [];
        $niz1 = [];
        for ($i = 0; $i < 50; $i++) {
            $niz[$i] = mt_rand(1,100);
            if (substr($niz[$i],-1) == 0) {
                array_push($niz1,$niz[$i]);
                $min = min($niz1);
                $index = array_search($min,$niz);
            }
        } echo implode(",",$niz). "<br>";
        if (isset($index)) {
            echo "Od svih brojeva koji se zavrsavaju nulom, indeks najmanjeg je $index.";
        } else {
            echo "Takav ne postoji.";
        }
    }
    niz2();
    ?>
    <hr>
    <h1>Zadatak 4</h1>
    <?php
    $niz = [];
    $niz1 = [];
    $suma = 0;
    $prosecnavrednost= 0;
        for($i=0; $i<10;$i++) {
            $broj=mt_rand(1,100);
            $niz[$i]=$broj;
            $suma=$suma+$niz[$i];
            $prosecnavrednost=$suma/count($niz);
        }
            foreach($niz as $elemenat) {
                if ($elemenat > $prosecnavrednost) {
                    array_push($niz1,$elemenat);
                }
            }
            echo "Ovo je dat niz " . implode(",",$niz) . "<br>";
            echo "Ovo je niz brojeva koji su veci od prosecne vrednosti navedenog niza " . implode(",",$niz1);
    ?>


    
</body>
</html>