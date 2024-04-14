
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
    <h2>Volební kalkulačka</h2>
    <form action="election_calculator.php" method="post" class="myform">
    
    <div class="form-group">
    <h3>Jste pro setrvání v prohnilé EU</h3>
    <div class="otazky" style="text-align: center;">
        <label><input type="radio" name="EU" value="ano" required> Ano</label>
        <label><input type="radio" name="EU" value="ne" required> Ne</label>
        <label><input type="radio" name="EU" value="nevím" required> Nevím</label><br>
    </div>
    </div>

    <div class="form-group">
    <h3>Jste pro setrvání v NATO</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="NATO" value="ano" required> Ano</label>
            <label><input type="radio" name="NATO" value="ne" required> Ne</label>
            <label><input type="radio" name="NATO" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro navýšení důchodu nad rámec valorizace</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="duchod" value="ano" required> Ano</label>
            <label><input type="radio" name="duchod" value="ne" required> Ne</label>
            <label><input type="radio" name="duchod" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro důchodovou reformu</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="duchod_reforma" value="ano" required> Ano</label>
            <label><input type="radio" name="duchod_reforma" value="ne" required> Ne</label>
            <label><input type="radio" name="duchod_reforma" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro zvýšení věku odchodu do důchodu</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="zvyseni_odchod_do_duchodu" value="ano" required> Ano</label>
            <label><input type="radio" name="zvyseni_odchod_do_duchodu" value="ne" required> Ne</label>
            <label><input type="radio" name="zvyseni_odchod_do_duchodu" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro prává lgbt</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="lgbt" value="ano" required> Ano</label>
            <label><input type="radio" name="lgbt" value="ne" required> Ne</label>
            <label><input type="radio" name="lgbt" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro greendeal</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="greendeal" value="ano" required> Ano</label>
            <label><input type="radio" name="greendeal" value="ne" required> Ne</label>
            <label><input type="radio" name="greendeal" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro zpoplatnení VŠ</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="zpoplatneni_vs" value="ano" required> Ano</label>
            <label><input type="radio" name="zpoplatneni_vs" value="ne" required> Ne</label>
            <label><input type="radio" name="zpoplatneni_vs" value="nevím" required> Nevím</label><br>
        </div>
    </div>

    <div class="form-group">
    <h3>Jste pro spolupráci V4</h3>
        <div class="otazky" style="text-align: center;">
            <label><input type="radio" name="V4" value="ano" required> Ano</label>
            <label><input type="radio" name="V4" value="ne" required> Ne</label>
            <label><input type="radio" name="V4" value="nevím" required> Nevím</label><br>
        </div>
    </div>
    <button type="submit" name="submit">Odeslat</button>
</form>
</div>












    <?php

    if (isset($_POST["submit"])) {
        class Otazky {
            public $EU;
            public $NATO;
            public $duchod;
            public $duchod_reforma;
            public $zvyseni_odchod_do_duchodu;
            public $lgbt;
            public $greendeal;
            public $zpoplatneni_vs;
            public $V4;
            
            public function __construct($EU, $NATO, $duchod, $duchod_reforma = null, $zvyseni_odchod_do_duchodu = null, $lgbt = null, $greendeal = null, $zpoplatneni_vs = null, $V4 = null) {
                $this->EU = $EU;
                $this->NATO = $NATO;
                $this->duchod = $duchod;
                $this->duchod_reforma = $duchod_reforma;
                $this->zvyseni_odchod_do_duchodu = $zvyseni_odchod_do_duchodu;
                $this->lgbt = $lgbt;
                $this->greendeal = $greendeal;
                $this->zpoplatneni_vs = $zpoplatneni_vs;
                $this->V4 = $V4;
            }
        }
        
        class Clovek {
            public $jmeno;
            public $vek;
            public $otazky;
        
            public function __construct($jmeno, $vek, $otazky) {
                $this->jmeno = $jmeno;
                $this->vek = $vek;
                $this->otazky = $otazky;
            }
            
            public function porovnat_s_politikem($politik) {
                $pocet = 0;
                foreach ($politik->otazky as $atribut_politika => $hodnota_politika) {
                    if ($hodnota_politika == $this->otazky->$atribut_politika) {
                        $pocet += 1;
                    }
                }
                return $pocet / count((array)$this->otazky) * 100;
            }
        
            public function porovnat_s_politikem2($seznam) {
                $vysledek = [];
                foreach ($seznam as $politik) {
                    $vysledek[$politik->jmeno] = $this->porovnat_s_politikem($politik);
                }
                $maximum = max($vysledek);
                
                foreach ($vysledek as $jmeno => $hodnota) {
                    if ($hodnota == $maximum) {
                        echo $hodnota . "<br>";
                        echo $jmeno;
                    }
                }
            }
        }
        
        class Politik {
            public $jmeno;
            public $strana;
            public $vek;
            public $otazky;
        
            public function __construct($jmeno, $strana, $vek, $otazky) {
                $this->jmeno = $jmeno;
                $this->strana = $strana;
                $this->vek = $vek;
                $this->otazky = $otazky;
            }
        }
        
        // Přijmout odpovědi od uživatele
        $otazka1 = $_POST["EU"];
        $otazka2 = $_POST["NATO"];
        $otazka3 = $_POST["duchod"];
        $otazka4 = $_POST["duchod_reforma"];
        $otazka5 = $_POST["zvyseni_odchod_do_duchodu"];
        $otazka6 = $_POST["lgbt"];
        $otazka7 = $_POST["greendeal"];
        $otazka8 = $_POST["zpoplatneni_vs"];
        $otazka9 = $_POST["V4"];
        
        // Vytvořit politiky
        $Babis = new Politik("babiš", "Ano", 60, new Otazky("ano", "ano", "ano", "ne", "ne", "ne", "ne", "ne", "ano"));
        $Okamura = new Politik("tomio", "SPD", 40, new Otazky("ne", "ne", "ano", "ne", "ne", "ne", "ne", "ne", "ano"));
        $Bartos = new Politik("Bartoš", "Piráti", 40, new Otazky("ano", "ano", "ne", "ano", "ano", "ano", "ano", "ne", "ne"));
        $seznam = [$Babis, $Okamura, $Bartos];
        
        // Vytvořit instanci člověka
        $clovek_A = new Clovek("jirka", 40, new Otazky($otazka1, $otazka2, $otazka3, $otazka4, $otazka5, $otazka6, $otazka7, $otazka8, $otazka9));
        
        // Porovnat s politiky
        $clovek_A->porovnat_s_politikem2($seznam);
    }
    ?>


</body>