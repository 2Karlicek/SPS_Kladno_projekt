<?php
 session_start();

?>

<!-- index.html  -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OTP Input</title>
    <link rel="stylesheet" href="css/body.css" />
</head>
 
<body>
    <div class="container">
      <form action="verifyemail.php" method="post">
        <div id="inputs" class="inputs">
            <input class="input" type="text" name="digit1"
                inputmode="numeric" maxlength="1" />
            <input class="input" type="text" name="digit2"
                inputmode="numeric" maxlength="1" />
            <input class="input" type="text" name="digit3"
                inputmode="numeric" maxlength="1" />
            <input class="input" type="text" name="digit4"
                inputmode="numeric" maxlength="1" />
            <input class="input" type="text" name="digit5"
                inputmode="numeric" maxlength="1" />
            <input class="input" type="text" name="digit6"
                inputmode="numeric" maxlength="1" />
        </div>
        <br>
        <button type="submit" name="submit">Odeslat</button>
      </form>
      <br>
      <?php
            if (isset($_POST["submit"])) {
                $code = $_POST["digit1"] . $_POST["digit2"] . $_POST["digit3"] . $_POST["digit4"] . $_POST["digit5"] . $_POST["digit6"];
                echo $code;
                if ($code == $_SESSION["code"]){
                        try{
                            $servername = "dbs.spskladno.cz";
                            $username = "student12";
                            $password = "spsnet";
                            $dbname = "vyuka12";
                            $tabulka = "ucastnici";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        }
                        catch(Exception $e){
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "logins";
                            $tabulka = "uzivatele";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                        }
                        
                        
                        $uzivatelske_jmeno = $_SESSION["username"];
                        $heslo = $_SESSION["password"];
                        $email = $_SESSION["email"];
                        $pohlavi = $_SESSION["pohlavi"];
                        $bydliste = $_SESSION["bydliste"];
                        $isadmin = 0;


                        
                        $query = "INSERT INTO $tabulka(username, email ,heslo, gender, bydliste, isadmin) VALUES('$uzivatelske_jmeno','$email', '$heslo', '$pohlavi', '$bydliste' , '$isadmin')";
            
                        $result = mysqli_query($conn, $query);
                        echo "super";
                        session_destroy();
                        
            
                        if(!$result){
                            die("bad");
                        }
            
                    }
                }

            


        ?>
    </div>
    <script src="js/body.js"></script>
</body>
 
</html>
