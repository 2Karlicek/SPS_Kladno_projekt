
<?php
session_start();
?>


<?php
// Definuj pole se stránkami, obrázky a odkazy
$stranky = array(
    array("nazev" => "ANO", "obrazek" => "./assets/icons/xd.svg", "odkaz" => "ano.php"),
    array("nazev" => "SPD", "obrazek" => "./assets/icons/ae.svg", "odkaz" => "spd.php"),
    array("nazev" => "ODS", "obrazek" => "./assets/icons/indesign.svg", "odkaz" => "ods.php"),
    array("nazev" => "Pirati", "obrazek" => "./assets/icons/figma.svg", "odkaz" => "pirati.php"),
    array("nazev" => "KSČM", "obrazek" => "./assets/icons/xd.svg", "odkaz" => "kscm.php"),
    array("nazev" => "KDU-ČSL", "obrazek" => "./assets/icons/ae.svg", "odkaz" => "kducsl.php"),
);

$volby = array(
  array("text" => "Do senátu", "odkaz" => "election_calculator.php", "datum" =>new DateTime('2024-04-01')),
  array("text" => "Do poslanecké sněmovny", "odkaz" => "election_calculator.php","datum" =>new DateTime('2026-06-01')),
  array("text" => "Do Kraje", "odkaz" => "election_calculator.php","datum" =>new DateTime('2026-06-01')),
  array("text" => "Prezidentské", "odkaz" => "election_calculator.php","datum" =>new DateTime('2028-06-01')),
  array("text" => "Komunální", "odkaz" => "election_calculator.php", "datum" =>new DateTime('2025-06-01')),
  array("text" => "Do Europarlamentu", "odkaz" => "election_calculator.php", "datum" =>new DateTime('2024-06-01')),

);


$timenow = new DateTime();
$actual = array();

foreach ($volby as $vol){
  $rozdil = $vol["datum"]->diff($timenow);
  $pocet_mesicu = ($rozdil->y * 12) + $rozdil->m;
  if ($pocet_mesicu < 6) {
    array_push($actual, $vol);
  } 
}
// Porovnej, zda je rozdíl menší než 1 měsíc

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Navigation Bar with Propdown Menu</title>
  </head>
  <body>
    <header id="nav-menu" aria-label="navigation bar">
      <div class="container">
        <div class="nav-start">
          <a class="logo" href="/">
            <img
              src="assets/images/logo.png"
              width="35"
              height="35"
              alt="Inc Logo"
            />
          </a>
          <nav class="menu">
            <ul class="menu-bar">
              <li>
                <button
                  class="nav-link dropdown-btn"
                  data-dropdown="dropdown1"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-label="browse"
                >
                  Politici
                  <i class="bx bx-chevron-down" aria-hidden="true"></i>
                </button>
                <div id="dropdown1" class="dropdown">
                  <ul role="menu">
                    <li role="menuitem">
                      <a class="dropdown-link" href="#best-of-the-day">
                        <img src="./assets/icons/babis_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title" onclick="window.location.href='Babiš.php'">Andrej Babiš</span>
                          <a href="Babiš.php">Zjistěte víc o Andrejovi Babišovi</a>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#featured-streams">
                        <img src="./assets/icons/okamura_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title" onclick="window.location.href='Okamura.php'">Tomio Okamura</span>
                          <a href="Okamura.php">Zjistěte víc o Ivanovi Bartošovi</a>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#subscriptions">
                        <img src="./assets/icons/fiala_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title" onclick="window.location.href='Fiala.php'">Petr Fiala</span>
                          <a href="Fiala.php">Zjistěte víc o Petrovi Fialovi</a>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#creative-feed">
                        <img src="./assets/icons/bartos_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title" onclick="window.location.href='Bartoš.php'">Ivan Bartoš</span>
                          <a href="Bartoš.php">Zjistěte víc o Ivanovi Bartošovi</a>
                        </div>
                      </a>
                    </li>
                  </ul>

                  <ul role="menu">
                    <li class="dropdown-title">
                      <span class="dropdown-link-title">Politické strany</span>
                    </li>
                    <?php foreach ($stranky as $stranka): ?>
                        <li role="menuitem">
                            <a class="dropdown-link" href="<?php echo $stranka['odkaz']; ?>">
                                <img src="<?php echo $stranka['obrazek']; ?>" />
                                <?php echo $stranka['nazev']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                   

                  </ul>
                </div>
              </li>
              <li>
                <button
                  class="nav-link dropdown-btn"
                  data-dropdown="dropdown2"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-label="discover"
                >
                  Volby
                  <i class="bx bx-chevron-down" aria-hidden="true"></i>
                </button>
                <div id="dropdown2" class="dropdown">
                  <ul role="menu">
                    <li>
                      <span class="dropdown-link-title">Aktuální</span>
                    </li>
                    <?php foreach ($actual as $actuality): ?>
                        <li role="menuitem">
                        <a class="dropdown-link" href=<?php echo $actuality['odkaz'];?>> <?php echo $actuality['text'];  ?></a>
                        </li>
                    <?php endforeach; ?>
                    <li>
                      <span class="dropdown-link-title">V ČR</span>
                    </li>
                    <?php foreach ($volby as $volba): ?>
                        <li role="menuitem">
                        <a class="dropdown-link" href=<?php echo $volba['odkaz'];?>> <?php echo $volba['text'];  ?></a>
                        </li>
                    <?php endforeach; ?>
                    
                  </ul>
                </div>
              </li>
              <li><a class="nav-link" href="election_calculator.php">Kalkulačka</a></li>
              <li><a class="nav-link" href="/">Výsledky</a></li>
              <li><a class="nav-link" href="/">O projektu</a></li>
              <li><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </nav>
        </div>
        <div class="nav-end">
          <div class="right-container">
            <form class="search" role="search">
              <input type="search" name="search" placeholder="Search" />
              <i class="bx bx-search" aria-hidden="true"></i>
            </form>

            <a href="#profile">
              <img
                src="data:image/jpeg;base64,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"
                width="30"
                height="30"
                alt="user image"
              />
            </a>
            <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
               echo '<button class="btn btn-primary" onclick="window.location.href=\'logout.php\'">Logout</button>';
            } else {
               echo '<button class="btn btn-primary" onclick="window.location.href=\'login.php\'">Login</button>';
               }
              ?>
          </div>

          <button
            id="hamburger"
            aria-label="hamburger"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="bx bx-menu" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </header>
    <script src="js/script.js"></script>
  </body>
</html>
<?php
