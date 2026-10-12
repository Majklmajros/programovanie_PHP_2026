<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    echo "<h1>Tento web je zamerany na premenne</h1>";
    
    ?>
    
    <?php 
    echo "<p>" . 2 + 4 . "</p>";
    //premenna je miesto v pamati, pod ktorym sa nachadza urcita hodnota
    //premenna sa definuje znakom dolara a nazvom premennej
    //priradenie hodnoty do premennej
    $cislo = 5;
    //vypisanie hodnoty do premennej
    echo $cislo;

    echo "<br>";
    $desCislo = 4.2;
    echo $desCislo;
    
    echo "<br>";

    $cislo1 = 4.3;
    $cislo2 = 2.7;
    
    //pretypovanie cisel z float na int
    $vysledok = (int)($cislo1) + (int)$cislo2;
    echo $vysledok;
    echo "<br>";


    $textCislo = "Toto je moje číslo: " . $cislo1;
    echo $textCislo;
    echo "<br>";

    $pravdivost = true;
    echo $pravdivost;
    ?>

</body>
</html>