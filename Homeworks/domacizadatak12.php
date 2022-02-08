<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <span style="color: red;">Domaći zadatak 12</span>
            <br>
    <?php 
        define("PRVA", mt_rand(-50,50));
        $druga = mt_rand(-50,49);
        if ($druga == 0) {
            $druga = 50;
        }
            
            function razlika(){
            global $druga;
            $razlika =  PRVA - $druga;
            echo $razlika; 
            echo "<br>";
        }
            function proizvod(){
            global $druga;
            $proizvod = PRVA * $druga;
            return "Proizvod dva broja je: $proizvod";
            echo "<br>";

        }
        if(isset($_POST["prvoime"]) && isset($_POST["drugoime"])){
            $prvo = $_POST["prvoime"];
            $drugo = $_POST["drugoime"];
            
        }
        function imena(){
            global $prvo;
            global $drugo;
            if(strlen($prvo) > strlen($drugo)){
                echo "$prvo je duze od $drugo";
            }elseif(strlen($drugo) > strlen($prvo)){
                echo "Prvo ime $drugo je duze od $prvo";
            }
        }
        if(isset($_POST["prvoprezime"]) && isset($_POST["drugoprezime"])){
            $prva1 = $_POST["prvoprezime"];
            $druga1 = $_POST["drugoprezime"];
        }
         function prezime(){
                global $prva1;
                global $druga1;
                if(strlen($prva1) > strlen($druga1)){
                   return "$prva1 je duze od $druga1";
                }elseif(strlen($druga1) > strlen($prva1)){
                    return "Prvo prezime $druga1 je duze od $prva1";
                }
            }    
    ?>
     Razlika dva random broja je: <?php razlika(); ?>
        <br>
   <?php echo proizvod(); ?>
    <br>
   <form method="post" action="./domacizadatak12.php">
       <input type="text" name="prvoime" placeholder="Prvo ime" />
       <input type="text" name="drugoime" placeholder="Drugo ime" />
       <input style="background-color: green;color:whitesmoke;border-radius: 20px;border:none" type="submit" value="Posalji">
   </form>
   <?php imena(); ?>
   <br><br>
   <form method="post" action="./domacizadatak12.php">
       <input type="text" name="prvoprezime" placeholder="Prvo prezime" />
       <input type="text" name="drugoprezime" placeholder="Drugo prezime" />
       <input style="background-color: green;color:whitesmoke;border-radius: 20px;border:none" type="submit" value="Posalji">
   </form><br>
   <?php echo prezime(); ?>
</body>
</html>