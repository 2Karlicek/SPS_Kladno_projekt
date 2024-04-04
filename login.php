


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
  



</body>