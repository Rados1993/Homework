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
    $niz1 = [
        "div" => 3,
        "span" => 5,
        "h1" => 2,
    ];
    function prikazi($niz1, string $tekst) {
    foreach ($niz1 as $el => $broj) {
        for ($i=1; $i <= $broj; $i++) {
            echo "<$el>$tekst<$el>";
            echo "<br>";
        }
    }
} prikazi($niz1, "ovo je tekst");

    ?>
    <hr>
    <h1>Zadatak 2</h1>
    <?php
    function kvadrat (int $n) {
        $niz2=[];
           for ($i=1; $i <= $n; $i++) {
               $niz2["kvadrat $i"] = $i * $i;
           } return $niz2;
        } var_dump(kvadrat(20));
           ?>
</body>
</html>