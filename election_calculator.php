
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrační formulář</title>
  <link rel="stylesheet" href="css/styly.css">
</head>

<body>
<form>
    

</form>
<?php

class Otazky {
    public $EU;
    public $NATO;
    public $duchod;
    public $duchod_reforma;
    public $zvyseni_odchod_do_duchodu;
    public $lgbt;
    
    public function __construct($EU, $NATO, $duchod, $duchod_reforma = null, $zvyseni_odchod_do_duchodu = null, $lgbt = null) {
        $this->EU = $EU;
        $this->NATO = $NATO;
        $this->duchod = $duchod;
        $this->duchod_reforma = $duchod_reforma;
        $this->zvyseni_odchod_do_duchodu = $zvyseni_odchod_do_duchodu;
        $this->lgbt = $lgbt;
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
        foreach ($politik->otazky as $key => $value) {
            if ($value == $this->otazky->$key) {
                $pocet += 1;
            }
        }
        return ($pocet / count(get_object_vars($this->otazky))) * 100;
    }

    public function porovnat_s_politikem2($seznam) {
        $vysledek = array();
        $strana = "";
        foreach ($seznam as $politik) {
            $vysledek[$politik->strana] = $this->porovnat_s_politikem($politik);
        }
        $maximum = max($vysledek);
        foreach ($vysledek as $key => $value) {
            if ($value == $maximum) {
                $strana = $key;
            }
        }
        print_r($vysledek);
        echo $strana;
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

// Získání hodnot otázek
$otazka1 = "a";
$otazka2 = "a";
$otazka3 = "n";
$otazka4 = "a";
$otazka5 = "a";
$otazka6 = "n";

// Vytvoření politiků
$Babis = new Politik("Babiš", "Ano", 40, new Otazky("a", "a", "a", "n", "n", "n"));
$Okamura = new Politik("Okamura", "SPD", 40, new Otazky("n", "n", "a", "n", "n", "n"));
$Bartos = new Politik("Bartoš", "Piráti", 40, new Otazky("a", "a", "n", "a", "a", "a"));
$seznam = [$Babis, $Okamura, $Bartos];

// hodnoty člověka
$clovek_A = new Clovek("Jirka", 40, new Otazky($otazka1, $otazka2, $otazka3, $otazka4, $otazka5, $otazka6));

// Porovnání s politikama
$clovek_A->porovnat_s_politikem2($seznam);
?>
</body>