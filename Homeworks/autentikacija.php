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
    $password = "password";
    if (isset($_GET["username"]) && isset($_GET["password"])) {
        $username = $_GET["username"];
        $password = $_GET["password"];
    } else {
        exit("Nisi poslao podatke.");
    }

    $prvo_slovo = substr($password, 0, 1);
    $poslednji_broj = strrev($password);
    $poslednji_broj = substr($poslednji_broj, 0, 1);

    if (strlen($username) >= 6) {
        if ((strlen($password) >= 8 && ord($poslednji_broj) >= 48 && ord($poslednji_broj) <= 57) && (($prvo_slovo >= "A" && $prvo_slovo <= "Z") || ($prvo_slovo >= "a" && $prvo_slovo <= "z"))) {
            $poruka = "Uspesno ste se prijavili.";
        } else {
            $poruka = "Lozinka nije ispravna!";
        }
    } else {
        $poruka = "Molimo vas da proverite korisnicko ime!";
    }



    ?>
    <h1><?php echo $poruka ?></h1>
    
</body>
</html>