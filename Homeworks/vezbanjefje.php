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
    function proizvod(int $broj1, $broj2) {
        echo $broj1 * $broj2;
    }
    echo "Proizvod dva broja je:";
    echo "<br>";
    proizvod(5,10);
    echo "<br>";
    proizvod(4,8);
    echo "<br>";
    proizvod(5,5);
    echo "<br>";
    proizvod(7,2);
    echo "<br>";
    proizvod(-4,2);
    echo "<br>";
    proizvod(-4,-8);
    ?>
    <hr>
    <h1>Zadatak 2</h1>
    <?php 
    function rec(string $rec) {
       
        $rec1 = str_split($rec);
        $brojac = 0;
            foreach ($rec1 as $elemenat) {
            if ($elemenat == "a" || $elemenat == "o" || $elemenat == "i" || $elemenat == "u" || $elemenat == "e" || $elemenat == "A" || $elemenat == "O" || $elemenat == "I" || $elemenat == "U" || $elemenat == "E") {
                $brojac++;
            }
        }  echo "$rec ima $brojac samoglasnika ";  
}
rec("Proleće");
echo "<br>";
rec("Sumrak");
echo "<br>";
rec("Istraživati");
?>
<hr>
<h1>Zadatak 3</h1>
<?php
function boja($boja) {
    echo "<span style=color:$boja>$boja</span>";
}
boja("blue");
echo "<br>";
boja("red");
echo "<br>";
boja("green");
echo "<br>";
echo "<div>".boja("blue").boja("red").boja("green")."</div>";
?>
<hr>
<h1>Zadatak 4</h1>
<?php
function span($a,$b) {
    $c=$a.$b;
    echo "<span id=\"S$b\">$c</span>";
}
for($i = 1; $i <= 10; $i++){
span("Radoš",$i);
echo "<br>";
}
?>

</body>
</html>