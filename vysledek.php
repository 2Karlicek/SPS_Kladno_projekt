<?php
session_start();
$_tomio = "assets/images/tomio_vysledek.png";
$babis = "assets/images/babis.png";
$bartos = "assets/images/bartos.png";

$img = "";
if (isset($_SESSION["vysledek"]) && $_SESSION["vysledek"] !== null) {
    if ($_SESSION["vysledek"]=="ANO"){
        $img = $babis;
    }
    if ($_SESSION["vysledek"]=="SPD"){
        $img = "assets/images/tomio_vysledek.png";
    }
    else{
        $img = "assets/images/tomio_vysledek.png";
    }
}else{
    $img = "assets/images/tomio_vysledek.png";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>vysledky</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/vysledek.css'>
    
</head>
<iframe width="0" height="0" src="https://www.youtube.com/embed/wsVfSFXmVc4?autoplay=1&loop=1&playlist=wsVfSFXmVc4" title="Petr Kolář - hymna SPD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="display: none;"></iframe>
</body>
<body>
    <main>
        <img src=<?php echo $img; ?> id="rotating-image">
        <div id="vysledek">
            <?php
            if (isset($_SESSION["vysledek"]) && $_SESSION["vysledek"] !== null) {
                echo $_SESSION["vysledek"];
            } else {
                echo "Vyplněte 1. kalkulačku";
            }
            ?>
        </div>
    </main>



    <script>
        var barvy = [
    "#ff0000", "#00ff00", "#0000ff", "#ffff00", "#ff00ff",
    "#00ffff", "#ff8000", "#8000ff", "#0080ff", "#ff0080",
    "#7f0000", "#007f00", "#00007f", "#7f7f00", "#7f007f",
    "#007f7f", "#7f4000", "#40007f", "#00407f", "#7f0040",
    "#ff4000", "#4000ff", "#00ff40", "#ff0040", "#ff7f00",
    "#007fff", "#ffbf00", "#00ffbf", "#bf00ff", "#ffbf40",
    "#40ffbf", "#bf00bf", "#bf7f00", "#00bfff", "#bfff00",
    "#bf0040", "#40bfff", "#0040bf", "#bf7f7f", "#bf7f40",
    "#7fbf00", "#007fbf", "#bf007f", "#40bf7f", "#7fbf40",
    "#00407f", "#7f4000", "#007f40", "#007f40", "#7f0040"
    ];
    var index = 0;

    function blik() {
        // Nastaví barvu pozadí na aktuální barvu
        document.getElementsByTagName("body")[0].style.backgroundColor = barvy[index];
        
        // Zvýší index pro přechod na další barvu
        index++;

        // Pokud jsme prošli všechny barvy, resetujeme index na začátek
        if (index >= barvy.length) {
            index = 0;
        }

        // Zavoláme funkci blik znovu po 1000 ms (1 sekundě)
        setTimeout(blik, 50);
    }

    // Spustíme funkci blik poprvé
    blik();


    // Získání reference na obrázek
    var img = document.getElementById('rotating-image');

    // Počáteční úhel rotace
    var angle = 0;

    // Funkce pro rotaci obrázku
    function rotateImage() {
    // Inkrementace úhlu rotace
    angle += 1;

    // Nastavení úhlu rotace obrázku pomocí CSS transform
    img.style.transform = 'rotate(' + angle + 'deg)';
    }

    // Spuštění funkce rotateImage každých 100 milisekund (10x za sekundu)
    setInterval(rotateImage, 1);


    </script>
</body>
</html>