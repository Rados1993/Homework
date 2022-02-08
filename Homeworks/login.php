
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Unesite podatke</h1>
   
    <form action="./autentikacija.php" method="get">
        <input type="text" name="username" minlength="6" placeholder="Username:" /> <br /> <br />
        <input type="password" name="password" placeholder="Password" minlength="8" required> <br /> <br />
        <input type="submit" value="Posalji">
    </form>
    <p>*Poštovani vaš user name mora imati najmanje 6 karaktera. Paassword mora imati 8, mora početi slovom i završiti se brojem!</p>
</body>
</html>