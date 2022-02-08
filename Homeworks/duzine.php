<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET["recjedan"]) && isset($_GET["recdva"])) {
        $recjedan = $_GET["recjedan"];
        $recdva = $_GET["recdva"];
        if (strlen($recjedan) > strlen($recdva)) {
            $poruka = "<mark>Prva reč $recjedan je veca od druge reči $recdva :)</mark>";
        } elseif (strlen($recjedan) < strlen($recdva)) {
                $poruka = "<mark>Druga reč $recdva je veca od prve reči $recjedan :)</mark>";
            } else {
                $poruka = "<mark>Reci su podjednake duzine</mark>";
            }
        }
    ?>
    <h1><?php echo $poruka ?></h1>
</body>
</html>