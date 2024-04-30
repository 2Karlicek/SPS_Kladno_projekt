
<?php
 session_start();



?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrační formulář</title>
  <link rel="stylesheet" href="css/styly.css">
</head>
<body>
  <div class="container">
    <h2>Registrační formulář</h2>
    <form action="registrace.php" method="post" class="myform">
      <div class="form-group">
        <label for="username">Přihlašovací jméno:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="heslo">Heslo:</label>
        <input type="password" id="heslo" name="heslo" required>
      </div>
      <div class="form-group">
        <label for="heslo2">Heslo ještě jednou:</label>
        <input type="password" id="heslo2" name="heslo2" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="pohlavi">Pohlaví:</label>
        <select id="pohlavi" name="pohlavi" required>
            <option value="muz">Muž</option>
            <option value="zena">Žena</option>
            <option value="Agender">Agender</option>
            <option value="Androgyn">Androgyn</option>
            <option value="Abimegender">Abimegender</option>
            <option value="Adamas gender">Adamas gender</option>
            <option value="Aerogender">Aerogender</option>
            <option value="Aesthetigender">Aesthetigender</option>
            <option value="Affectugender">Affectugender</option>
            <option value="Agenderflux">Agenderflux</option>
            <option value="Alexigender">Alexigender</option>
            <option value="Aliusgender">Aliusgender</option>
            <option value="Amaregender">Amaregender</option>
            <option value="Ambigender">Ambigender</option>
            <option value="Ambonec">Ambonec</option>
            <option value="Amicagender">Amicagender</option>
            <option value="Anesigender">Anesigender</option>
            <option value="Angenitální">Angenitální</option>
            <option value="Anogender">Anogender</option>
            <option value="Anongender">Anongender</option>
            <option value="Antegender">Antegender</option>
            <option value="Anxiegender">Anxiegender</option>
            <option value="Apagender">Apagender</option>
            <option value="Apconsugender">Apconsugender</option>
            <option value="Astergender">Astergender</option>
            <option value="Astrální pohlaví">Astrální pohlaví</option>
            <option value="Autigender">Autigender</option>
            <option value="Autogender">Autogender</option>
            <option value="Axigender">Axigender</option>
            <option value="Bigender">Bigender</option>
            <option value="Biogender">Biogender</option>
            <option value="Blurgender">Blurgender</option>
            <option value="Boyflux">Boyflux</option>
            <option value="Burstgender">Burstgender</option>
            <option value="Caelgender">Caelgender</option>
            <option value="Cassgender">Cassgender</option>
            <option value="Cassflux">Cassflux</option>
            <option value="Cavusgender">Cavusgender</option>
            <option value="Cendgender">Cendgender</option>
            <option value="Ceterogender">Ceterogender</option>
            <option value="Ceterofluid">Ceterofluid</option>
            <option value="Cisgender">Cisgender</option>
            <option value="Cloudgender">Cloudgender</option>
            <option value="Collgender">Collgender</option>
            <option value="Colorgender">Colorgender</option>
            <option value="Commogender">Commogender</option>
            <option value="Condigender">Condigender</option>
            <option value="Deliciagender">Deliciagender</option>
            <option value="Demifluid">Demifluid</option>
            <option value="Demiflux">Demiflux</option>
            <option value="Demigender">Demigender</option>
            <option value="Domgender">Domgender</option>
            <option value="Duragender">Duragender</option>
            <option value="Egogender">Egogender</option>
            <option value="Epicén">Epicén</option>
            <option value="Esspigender">Esspigender</option>
            <option value="Exgender">Exgender</option>
            <option value="Existigender">Existigender</option>
            <option value="Femfluidní">Femfluidní</option>
            <option value="Femgender">Femgender</option>
            <option value="Gemigender">Gemigender</option>
            <option value="Genderblank">Genderblank</option>
            <option value="Genderflow">Genderflow</option>
            <option value="Genderfluid">Genderfluid</option>
            <option value="Genderfuzz">Genderfuzz</option>
            <option value="Genderflux">Genderflux</option>
            <option value="Genderpuck">Genderpuck</option>
            <option value="Genderqueer">Genderqueer</option>
            <option value="Gender witched">Gender witched</option>
            <option value="Girlflux">Girlflux</option>
            <option value="Healgender">Healgender</option>
            <option value="Mirrorgender">Mirrorgender</option>
            <option value="Omnigender">Omnigender</option>
            <option value="Transgender">Transgender</option>
        </select>
      </div>
      <div class="form-group">
        <label for="bydliste">Bydliště:</label>
        <input type="text" id="bydliste" name="bydliste">
      </div>
      <div class="form-group">
        <label for="telefon">Telefonní číslo:</label>
        <input type="tel" id="telefon" name="telefon">
      </div>
      <button type="submit" name="submit">Registrovat</button>
      
    </form>
    <div>
</div>
      <div>
        <br>
          <button onclick="window.location.href='login.php'">Login</button>
        </br>
        <bt>
          <button onclick="window.location.href='uvod.php'">Úvod</button>
        </br>
        </div>
    <?php
  if (isset($_POST["submit"])) {
    // Zde zpracujeme data z formuláře
    $email = $_POST["email"]; // Příklad: získání e-mailu
    $username = $_POST["username"]; // Příklad: získání jména
    $heslo = $_POST["heslo"];
    $heslo2 = $_POST["heslo2"];
    if ($heslo == $heslo2){
      $email = $_POST["email"]; // Příklad: získání e-mailu
      $username = $_POST["username"]; // Příklad: získání jména
      $bydliste = $_POST["bydliste"];
      $pohlavi = $_POST["pohlavi"];
      $telefon = $_POST["telefon"];
      $code = mt_rand(100000, 999999);

      $_SESSION["username"] = $username;
      $_SESSION["password"] = $heslo;
      $_SESSION["email"] = $email;
      $_SESSION["pohlavi"] = $pohlavi;
      $_SESSION["bydliste"] = $bydliste;
      $_SESSION["code"] = $code;

      echo "E-mail: " . $email . "<br>";
      echo "Jméno: " . $username . "<br>";
      echo "heslo" . $heslo . "<br>";
      echo "Bydliště: " . $bydliste . "<br>";
      echo "Pohlaví: " . $pohlavi . "<br>";
      echo "kod: " . $code . "<br>";

      sleep(5);

      echo "<script>setTimeout(function(){ window.location.href = 'verifyemail.php'; }, 5000);</script>";
    }
    else{
      echo "hesla se neshodují";
    }
    
    // Zde můžete provést další zpracování dat (validace, ukládání do databáze, atd.)
    
    // Příklad vypsání zpracovaných dat
    
}
?>
  </div>
  
  <br>
  
  <br>

  <script src="script.js"></script>
</body>
</html>


