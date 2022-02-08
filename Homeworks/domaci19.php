<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 1.</h1>
    <?php
    $niz = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $parni = function($el)  {
        if ($el % 2 == 0 ) {
            return true;
        } else {
            return false;
        }
    };
    $n_filt = array_filter($niz,$parni);
    var_dump($n_filt);
    ?>
    <hr>
    <h1>Zadatak 2.</h1>
    <?php
    $niz = [1, -2, 3, -4, 5, -6, 7, -8, 9];
    $negativni = function($el) {
        if ($el < 0) {
            return true;
        } else {
            return false;
        }
    };
    $n_filt = array_filter($niz,$negativni);
    var_dump($n_filt);
    ?>
    <hr>
    <h1>Zadatak 3.</h1>
    <?php
    $niz =  [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $povecajza10 = function($el) {
        $el+=10;
        return $el;
    };
    $n_map = array_map($povecajza10,$niz);
    var_dump($n_map);
    ?>
    <hr>
    <h1>Zadatak 4.</h1>
    <?php
    $niz = [1, -2, 3, -4, 5, -6, 7, -8, 9];
    $negupoz = function($el) {
        if ($el < 0) {
            $el*=-1;
        }
        return $el;
    };
    $n_map = array_map($negupoz,$niz);
    var_dump($n_map);
    ?>
    <hr>
    <h1>Zadatka 5.</h1>
    <?php
    $niz =  [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $proizvod = function ($x,$el) {
        $x *= $el;
        return $x;
    };
    $n_proizvod = array_reduce($niz,$proizvod,1);
    var_dump($n_proizvod);
    ?>
    <hr>
    <h1>Zadatak 6.</h1>
    <?php
    $niz =  [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $sumaparnih = function ($x,$el) {
        if ($el % 2 == 0) {
            $x += $el;
        }
        return $x;
    };
    $n_suma_parnih = array_reduce($niz,$sumaparnih,0);
    var_dump($n_suma_parnih);
    ?>
    
</body>
</html>