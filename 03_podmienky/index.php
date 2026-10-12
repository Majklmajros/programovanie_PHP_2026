<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Podmienky
    /*
     Podmienka je programovacia paradigma pomocou ktorej sa rozhoduje, ktory kod sa vykona a ktory nie. 
        Podmienka obsahuje logicky vyraz, (napr. j < 5), ak je podmienka splnena, vykona sa kod pod touto podmienkou
        Ak nie je splnena, tak sa preskoci alebo sa vykona kod v casti else
        Pri porovnavani viacerych podmienok sa pouziva elseif
        Specialnou podmienkou je switch, ktora sa pouziva na porovnavanie hodnoty premennej s viacerymi hodnotami

   */  
    if(1 < 5){
        echo "1 je mensie ako 5";
    }

    echo "<br>";

    $cislo1 = 10;
    $cislo2 = 50;

    //Operator
    /*
    == - rovnost
    != - nerovnost
    <= - mensie alebo rovne
    >= - vacsie alebo rovne
    ! - negacia
    === - provnava hodnotu aj datovy typ 
    (2 === 2): Pravy, (2 !== "2"): Nepravda
    */

    if(cislo1 != cislo2){
        echo "Toto sa vykona";
    }

    echo "<br>";

    if($cislo1 == $cislo2){
        echo "Tento kod sa nevykona";
    } else {
        echo "Tento kod sa vykona";
    }

    //Uloha na precvicenie si podmienok.
    /*
    Vytvorte podmienku ktora bude na zaklade poctu bodov vypisovat vase hodnotenie.

    100 - 90 bodov: 1
    89 - 80 bodov: 2
    */
    
    $pocetBodov = random_int(0, 100);

    if($pocetBodov >= 90){
        echo "1";
    } elseif($pocetBodov >= 80){
        echo "2";
    } elseif($pocetBodov >= 70){
        echo "3";
    } elseif($pocetBodov >= 60){
        echo "4";
    } else {
        echo "5";
    }
    //Uloha na precvicenie si podmienok 2.
    /*
    Vstup na party
    Vstup na party je podmienny niekolkymi podmienkami

    1. Podmienka: Vstup na party je od 18 rokov
    2. Podmienka: Pokial je party v SNV, tak od 15 rokov
    3. Podmienka: Ak nemate slusne oblecenie, tak smola
    4. Podmienka: Ak si bol v base, tak mas zakaz vstupu na party
    5. Podmienka: Ak mate suhlas zakonneho zastupcu, mozete vstupit na oparty od 10 rokov
    */

    $mojVek = 31;
    $miestoParty = "Poprad";
    $slusneOblecnie = true;
    $suhlasZakonnehoZastupcu = true;
    $somVBase = false;
    if($suhlasZakonnehoZastupcu == true && $somVBase == false){
        if($mojVek >= 18){
            echo "Go party!";
        } elseif($mojVek >= 15 && $miestoParty == "SNV"){
            echo "Go party!";
        } elseif($mojVek >= 10 && $suhlasZakonnehoZastupcu == true){
            echo "Go party!";
        } else {
            echo "No party for you!";
        }

    }

    ?>
</body>
</html>