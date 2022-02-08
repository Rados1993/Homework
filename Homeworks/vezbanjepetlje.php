<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><h1>Zadatak1</h1></span>
    <br>
    <?php
    $zbir = 0;
    for ($i=1; $i<=50; $i++) {
        $zbir = $zbir + $i;
    }
    echo "Zbir brojeva je: $zbir";
    echo "<br>";
    ?>
    <hr>
    <span><h1>Zadatak2</h1> </span>
    <br>
    <?php
    $proizvod = 1;
    for ($i=1;$i<=19;$i++){
        $proizvod = $proizvod * $i;
    }
    echo "Proizvod brojeva je $proizvod";
    echo "<br>";
    ?>
    <hr>
    <span><h1>Zadatak3</h1> </span>
    <br>
    <?php
    $stepen= 5;
    for ($i=1; $i<10; $i++){
        $stepen = $stepen * 5;
    }
    echo "Pet na desetom je $stepen";
    echo "<br>";
     ?>
     <hr>
     <span><h1>Zadatak4</h1> </span>
    <br>
    <?php
    for ($i=1; $i <= 100; $i++) {
        if ($i % 5 == 0 ) {
            echo "$i <br>";
        }
    }
    ?>
    <hr>
    <span><h1>Zadatak5</h1></span>
    <br>
    <?php
    $brojac = 0;
    for ($i=1; $i <= 300; $i++) {
        if (($i % 5 == 0) && ($i % 13 == 0)) {
            echo $i;
            echo "<br>";
            $brojac++;
         }
    }
    echo $brojac;
?>
<hr>
<br>
<span><h1>Zadatak 2.1</h1></span>
<br>
<form action="./vezbanjepetlje.php" method="get">
<input type="number" name="input1"><br>
<input type="number" name="input2"><br>
<input type="number" name="input3"><br>
<input type="number" name="input4"><br>
<input type="submit" value="prosledi">
</form>
<?php
if ((isset($_GET["input1"])) && (isset($_GET["input2"])) && (isset($_GET["input1"])) && (isset($_GET["input1"]))) {
    $broj1= $_GET["input1"];
    $broj2= $_GET["input2"];
    $broj3= $_GET["input3"];
    $broj4= $_GET["input4"];
    if($broj2 > $broj1 && $broj4 > $broj3){
        $zbirparnih = 0;
        $zbirneparnih = 0;
        for($i = $broj1; $i <= $broj2; $i++){
            if($i % 2 == 0){
                $zbirparnih += $i;
            }
        }

        for ($i = $broj3; $i <= $broj4; $i++) {
            if ($i % 2 != 0) {
                $zbirneparnih += $i;
            }
        }

        if($zbirparnih > $zbirneparnih){
            echo "Veci je $zbirparnih";
            echo "<br>";
        }else{
            echo "Veci je $zbirneparnih";
            echo "<br>";
        }
    }
}
?>
<hr>
<span><h1>Zadatak2.2</h1></span>
<br>
<?php
function span() {
for ($i = 1; $i <=10; $i++) {
    echo "<span id=\"s$i\">Ovo je span $i</span>";
    echo "<br>";
}} echo "<div>".span()."</div>";
?>
<hr>
<span><h1>Zadatak2.3</h1></span>
<br>
<?php
function slike() {
    for ($i = 1; $i <=10; $i++) {
        echo "<img src=\"\" alt=\"slika$i\" id=\"id$i\">";
        echo "<br>";
    }
}
 slike();
?>
<hr>
<span><h1>Zadatak2.4</h1></span>
<br>
<form action="./vezbanjepetlje.php" method="get">
<input type="number" name="input5"> 
<input type="submit" value="posalji">
</form>
<?php
if (isset($_GET["input5"])) {
    $broj = $_GET["input5"];
    if($broj % 2 == 0) {
        $zbir = 0;
        for ($i = 0; $i <= $broj; $i++) {
            $zbir += $i;
        }
        echo "Zbir je $zbir";
    } else {
        $proizvod = 1;
        for ($i = 1; $i <= $broj; $i++) {
            $proizvod *= $i;
        }
        echo "Proizvod je $proizvod";
    }
}
?>


     

</body>
</html>