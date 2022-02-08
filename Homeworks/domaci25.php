<?php
    $conn = new mysqli("localhost", "root", "", "turisticka_agencija");
        if (is_null($conn->connect_error)) {
            echo "Uspesna konekcija";
        } else {
            die("Konekcija nije uspesna, greska $conn->connect_error");
        }

echo "<br>";

    $upit = "INSERT INTO `spisak_putnika`(`ime_prezime`, `br_pasosa`, `putovanje`) VALUES (?,?,?)";
    $statement = $conn->prepare($upit);
    $ime_prezime = "AA";
    $br_pasosa = 105;
    $putovanje = 3;
    $statement->bind_param("sii", $ime_prezime, $br_pasosa, $putovanje);
    $statement->execute();

    $upit = "DELETE FROM `spisak_putnika` WHERE br_pasosa = 107";
    $statement = $conn->prepare($upit);
    $statement->execute();

    $ime_prezime = "BB";
    $putovanje = 4;
    $upit = "UPDATE `spisak_putnika` SET `putovanje`=$putovanje WHERE ime_prezime='$ime_prezime'";
    $statement = $conn->prepare($upit);
    $statement->execute();

    $upit = "SELECT * FROM `spisak_putnika` WHERE 'cena'=150";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT `ime_prezime` FROM `spisak_putnika` WHERE 'id_putovanja'=5";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT * FROM spisak_putnika";
    $res = $conn->query($upit);
    var_dump($res);

echo "<br>";

    $upit = "INSERT INTO `putovanja`(`datum_polaska`, `datum_povratka`, `destinacija`, `cena`, `id_putovanja`) VALUES (?,?,?,?,?)";
    $statement = $conn->prepare($upit);
    $datum_polaska = "2020-12-21";
    $datum_povratka = "2022-02-25";
    $destinacija = 6;
    $cena = 150;
    $statement->bind_param("sssii", $datum_polaska, $datum_povratka, $destinacija, $cena, $id_putovanja);
    $statement->execute();

    $upit = "DELETE FROM `putovanja` WHERE cena = '180'";
    $statement = $conn->prepare($upit);
    $statement->execute();

    $datum_polaska = "2020-12-15";
    $datum_povratka = "2022-01-10";
    $upit = "UPDATE `putovanja` SET `datum_povratka`=$datum_povratka WHERE datum_polaska='$datum_polaska'";
    $statement = $conn->prepare($upit);
    $statement->execute();


    $upit = "SELECT * FROM `putovanja` WHERE cena=150";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT `cena` FROM `putovanja` WHERE 'id_destinacije'=5";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT * FROM putovanja";
    $res = $conn->query($upit);
    var_dump($res);

echo "<br>";

    $upit = "INSERT INTO `destinacije`(`drzava`, `grad`, `viza`, `id_destinacije`) VALUES (?,?,?,?)";
    $statement = $conn->prepare($upit);
    $drzava = "Grcka";
    $grad = "Atina";
    $viza = 0;
    $statement->bind_param("ssii", $drzava, $grad, $viza, $id_destinacije);
    $statement->execute();

    $upit = "DELETE FROM `destinacije` WHERE drzava = 'Spanija'";
    $statement = $conn->prepare($upit);
    $statement->execute();


    $viza = 1;
    $id_destinacije = 6;
    $upit = "UPDATE `destinacije` SET viza=$viza WHERE 'id_destinacije'=$id_destinacije";
    $statement = $conn->prepare($upit);
    $statement->execute();

    $upit = "SELECT * FROM `destinacije` WHERE drzava='Bugarska'";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT `drzava` FROM `destinacije` WHERE 'id_destinacije'=10";
    $res = $conn->query($upit);
    var_dump($res);
    $upit = "SELECT * FROM destinacije";
    $res = $conn->query($upit);
    var_dump($res);