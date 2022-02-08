<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .zelena {
            color: green;
        }
        .crvena {
            color: red;
        }
        .plava {
            color: blue;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Untitled-1.css">
</head>
<body>
                <span style="color: red;">Zadatak 1</span>
            <br>
     <?php
                $a = mt_rand(1,999);
                $b = mt_rand(1,999);
                $uslov = $a > $b;
                if ($uslov) {
                echo "Prvi broj $a je veci od drugog $b.";
                } else {
                echo "Drugi broj $b je veci od prvog $a.";
                } 
       ?>
            <br>
                <span style="color: red;">Zadatak 2</span>
            <br>
     <?php
                $a = mt_rand(1,999);
                $b = mt_rand(1,999);
                $c = mt_rand(1,999);
                echo $a;
                echo "<br>";
                echo $b;
                echo "<br>";
                echo $c;
                echo "<br>";
                $uslov1 = ($a > $b && $a > $c);
                $uslov2 = ($b > $a && $b > $c);
                $uslov3 = ($c > $b && $c > $a);
                if ($uslov1) {
                echo "Najveci broj od navedena tri je prvi broj $a.";
                } elseif ($uslov2) {
                echo "Najveci broj od navedena tri je drugi broj $b.";
                } elseif ($uslov3) {
                echo "Najveci broj od navedena tri je treci broj $c.";
                }
	    ?>
            <br>
                <span style="color: red;">Zadatak 3.1</span>
            <br>
     <?php
                $a = mt_rand(100,999);
                $b = (integer)($a/100);
                $c = (integer)($a % 10);
                if ($b == $c) {
                echo "Broj je polindrom $a.";
                } else {
                echo "Broj nije polindrom $a.";
                }
       ?>
            <br>
                <span style="color: red;">Zadatak 3.2</span>
            <br>
     <?php
                $a = mt_rand(1000,9999);
                $b = (integer)($a/1000);
                $c = (integer)(($a % 1000)/100);
                $d = (integer)(($a % 100)/10);
                $e = (integer)($a % 10);
                if  ( $b== $e && $c == $d) {
                echo "Broj je polindrom $a.";
                } else {
                echo "Broj nije polindrom $a.";
                }
       ?>
            <br>
                <span style="color: red;">Zadatak 4</span>
            <br>
      <?php
                $a = mt_rand(1,999);
                $b = mt_rand(1,999);
                $c = mt_rand(1,999);
                if ($a < $b && $b < $c ) {
                echo "Redosled brojeva u rastucem nizu je: $a,$b,$c.";
                } elseif ($a < $b && $b > $c && $c > $a) {
                echo "Redosled brojeva u rastucem nizu je: $a,$c,$b.";
                } elseif ($a > $b && $b < $c && $c > $a) {
                echo "Redosled brojeva u rastucem nizu je: $b,$a,$c.";
                } elseif ($a > $b && $b > $c && $a > $c ) {
                echo "Redosled brojeva u rastucem nizu je: $c,$b,$a.";
                } elseif ($a < $b && $b > $c && $c < $a ) {
                echo "Redosled brojeva u rastucem nizu je: $c,$a,$b.";
                } else {
                echo "Redosled brojeva u rastucem nizu je: $b,$c,$a.";
                }
       ?>
            <br>
                <span style="color: red;">Zadatak 5</span>
            <br>
    <?php
                $a=mt_rand(1,999);
                $b=mt_rand(1,999);
                if ($a > $b) {
                echo "Veci broj <span style=\"color: green;\">$a</span> je u zelenoj boji.";
                } else {
                echo "Veci broj <span style=\"color: red;\">$b</span> je u zelenoj boji.";
                }
                echo "<br>";
                 if ($a < $b) {
                echo "A manji broj je <span style=\"color: red;\">$a</span> je u crvenoj boji.";
                } else {
                echo "A manji broj je <span style=\"color: red;\">$b</span> je u crvenoj boji.";
                }       
                echo "<br>";
                echo "<hr>";
                if ($a > $b) {
                $zelena = "zelena";
                echo "Veci broj: <span class=\"zelena\">$a</span> je u zelenoj boji.";
                } else {
                $zelena = "crvena";
                echo "Veci broj: <span class=\"crvena\">$b</span> je u crvenoj boji.";
                };
                echo "<br>";
                if ($a < $b) {
                $zelena = "crvena";
                echo "Manji broj: <span class=\"zelena\">$a</span> je u zelenoj boji.";
                } else {
                $zelena = "crvena";
                echo "Veci broj: <span class=\"crvena\">$b</span> je u crvenoj boji.";
                };
                echo "<br>";
                echo "<hr>";
        ?>
                <span style="color: red;">Zadatak 6</span>
       <?php
                $slucajanbroj = mt_rand(-10,20);
                if ($slucajanbroj <= -1) {
                $bojabroja = "crvena";
                } elseif ($slucajanbroj < 10) {
                $bojabroja = "plava";
                } else {
                $bojabroja = "zelena";
                }
        ?>
                <p>Ovaj broj <span class="<?php echo $bojabroja?>"><?php echo $slucajanbroj?></span> je definisan preko PHP-a.</p>
</body>
</html>