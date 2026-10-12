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

    if($cislo1 != $cislo2){
        echo "Tento kod sa nevykona";
    } else {
        echo "Tento kod sa vykona";
    }

    ?>
</body>
</html>