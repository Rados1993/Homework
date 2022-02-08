<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <span style="color: red;">Zadatak 1</span>
        <?php
            $a = mt_rand(1900,2010);
            $b = mt_rand(1900,2010);
            $c = 2021;
            $d = $c - $a;
            $e = $c - $b;
        ?>
            <br>    
                    <span>Prvo lice je u <?php echo ceil($d/10) ?>-oj deceniji!</span>
            <br>    <span>Drugo lice je u <?php echo ceil($e/10) ?>-oj deceniji!</span></span>
            <br>
            <span style="color: red;">Zadatak 2</span>
            <br>
        <?php
            $a=15;
            $b=6;
             echo $O=$a*2 + $b*2;
             echo "<br>";
             echo $P=$a*$b;
             echo "<br>";
             echo $D=sqrt(($a**2 + $b**2 ));
        ?>
            <br>
                    <span>Obim pravougaonika je <?php echo $O ?>. </span>
            <br>
                    <span>Površina pravougaonika je <?php echo $P ?>. </span>
            <br>
                    <span>Dijagonala pravougaonika je <?php echo $D ?>. </span>
            <br>
            <span style="color: red;">Zadatak 3</span>
            <br>
        <?php
             $a = 200;
             $b = 175;
        ?>
                    <span id="span1" style="text-decoration: line-through dashed red;">Stara cena<?php echo $a ?></span>
                    <span id="span2" style="color: green;">Nova cena samo danas za black Friday<?php echo $b ?></span>
                    <br>
                    <span style="color: red;">Zadatak 4</span>
            <br>

        <?php

            $a = "red";
            $b = "blue";
            $c = "orange";
        ?>

                     <span style="color: red;"> <?php echo $a ?> </span>
                     <span style="color: blue;"> <?php echo $b ?> </span>
                     <span style="color: orange;"> <?php echo $c ?> </span>
            <br>
            <span style="color: red;">Zadatak 5</span>
            <br>

         <?php
            $a = mt_rand(0,255);
             echo $a;
             echo "<br>";
            $b = mt_rand(0,255);
             echo $b;
             echo "<br>";
            $c = mt_rand(0,255);
             echo $c;
             echo "<br>";
        ?>
                     <div class="div" style= "width:200px; height: 50px; background-color:rgb(<?php echo $a;?> ,<?php echo $b;?>, <?php echo $c;?>)"></div>

    
</body>
</html>