
<?php
// Definuj pole se stránkami, obrázky a odkazy
$stranky = array(
    array("nazev" => "ANO", "obrazek" => "./assets/icons/xd.svg", "odkaz" => "ano.php"),
    array("nazev" => "SPD", "obrazek" => "./assets/icons/ae.svg", "odkaz" => "spd.php"),
    array("nazev" => "ODS", "obrazek" => "./assets/icons/indesign.svg", "odkaz" => "ods.php"),
    array("nazev" => "Pirati", "obrazek" => "./assets/icons/figma.svg", "odkaz" => "pirati.php"),
    array("nazev" => "KSČM", "obrazek" => "./assets/icons/xd.svg", "odkaz" => "kscm.php"),
    array("nazev" => "KDU-ČSL", "obrazek" => "./assets/icons/ae.svg", "odkaz" => "kducsl.php"),
    // Další stránky
);

$volby = array(
  array("text" => "Do senátu", "odkaz" => "electioncalculator.php", "datum" =>new DateTime('2024-04-01')),
  array("text" => "Do poslanecké sněmovny", "odkaz" => "electioncalculator.php","datum" =>new DateTime('2026-06-01')),
  array("text" => "Do Kraje", "odkaz" => "electioncalculator.php","datum" =>new DateTime('2026-06-01')),
  array("text" => "Prezidentské", "odkaz" => "electioncalculator.php","datum" =>new DateTime('2028-06-01')),
  array("text" => "Komunální", "odkaz" => "electioncalculator.php", "datum" =>new DateTime('2025-06-01')),
  array("text" => "Do Europarlamentu", "odkaz" => "electioncalculator.php", "datum" =>new DateTime('2024-06-01')),
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
                          <span class="dropdown-link-title"
                            ><a gref=babiš.php>Andrej Babiš</a></span
                          >
                          <p>Zjisti více o Andrejovi</p>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#featured-streams">
                        <img src="./assets/icons/okamura_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title"
                            >Tomio Okamura</span
                          >
                          <p>Zjistěte víc o Tomio Okamura</p>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#subscriptions">
                        <img src="./assets/icons/fiala_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title">Petr Fiala</span>
                          <p>Zjistěte víc o Petr Fiala</p>
                        </div>
                      </a>
                    </li>
                    <li role="menuitem">
                      <a class="dropdown-link" href="#creative-feed">
                        <img src="./assets/icons/bartos_icon.jpg" class="icon" />
                        <div>
                          <span class="dropdown-link-title">Ivan Bartoš</span>
                          <p>Zjistěte víc o Ivan Bartoš</p>
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
                src="/assets/images/user.jpg"
                width="30"
                height="30"
                alt="user image"
              />
            </a>
            <button class="btn btn-primary" onclick="window.location.href='login.php'">Login</button>
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
