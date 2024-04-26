<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje Jednoduchá Stránka</title>
    <style>
        body {


            font-family: Arial, sans-serif;
            
            background-color: #FF5733; /* Začíná s oranžovou barvou */
            animation: changeColor 5s linear infinite; /* Animace trvá 10 sekund, opakuje se nekonečně */
        }

        @keyframes changeColor {
            0% {
                background-color: #FF5733; /* Začáteční barva: oranžová */
            }
            25% {
                background-color: #33FF57; /* Barva po 25% animace: zelená */
            }
            50% {
                background-color: #5733FF; /* Barva po 50% animace: modrá */
            }
            75% {
                background-color: #33FFFF; /* Barva po 75% animace: světle modrá */
            }
            100% {
                background-color: #FF5733; /* Koncová barva: oranžová (pro plynulé opakování) */
            }
        }
        
        .containers {
            max-width: 800px;
            margin: 20px auto;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 0;
            position: relative;
            margin-top: 75px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }


    </style>
</head>
<body>

    <?php
        include "uvod.php"


    ?>
    <br>

    <div class="containers">
        <h1>Toto je stránka o Andreji Babiši</h1>
        <p>Bývalý akcionář agrofetu(akrofert nijak nepotporuje a nezasahuje do politika pana Andreje Babiše)</p>
        <p>Bývalý akcionář agrofertu Andrej Babišů stoji ve vládě sám proti elitám</p>
       
        
        <img src=https://img.ihned.cz/attachment.php/930/63578930/FgprswOSld1tBm3JWeHn8oA0f6T7VcyI/EK08_edit_BabisES_LukaE_sES_BiE_ba03.jpg alt="Bývalý akcionář agroferu">
        <p> „My se jednou asi z té demokracie poděláme, všichni. Jak jinak totiž vysvětlit to, že se tu k dálnici vyjadřuje i jezevec, ekologický terorista a taky každý starosta chce mít výjezd.“

Zdroj: https://citaty.net/autori/andrej-babis/ </p>
    </div>




  
</body>
</html>