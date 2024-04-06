


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
    <form action="login.php" method="post" class="myform">
      <div class="form-group">
        <label for="username">Přihlašovací jméno:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="submit">Přihlásit</button>
    </form>
  </div>
  
  <?php
    if (isset($_POST["submit"])) {
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "login";

          $conn = new mysqli($servername, $username, $password, $dbname);


          $username2 = $_POST['username'];
          $password2 = $_POST['password'];

          // Ověření uživatelského jména a hesla v databázi
          $sql = "SELECT * FROM uzivatele WHERE username='$username2' AND heslo='$password2'";
          $result = $conn->query($sql);
          


          if ($result->num_rows > 0) {
              // Přihlášení úspěšné, přesměrování na domovskou stránku
              // header("Location: home.php");
              echo "dobře";
          } else {
              // Přihlášení selhalo, zobrazení chybové zprávy
              echo "Nesprávné uživatelské jméno nebo heslo.";
          }

          $conn->close();

    }



  ?>


</body>