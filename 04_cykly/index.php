<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 
    Cyklus - cast kodu ktora sa opakuje
    Typy cyklov: for, while, do while, foreach

    for - typ cyklu pri ktorom pozname pocet opakovani
    while - typ cyklu ktory sa opakuje pokial je splnena podmienka
    do while - podobny while , ale vykona sa aspon raz kedze podmienka sa kontroluje az na konci cyklu
    foreach - typ cyklu ktory prechadza cez hodnoty poli
    */

    for($i = 0; $i < 10; $i++){
        echo "Najlepsia hodina na svete <br>";
        echo "<font size=\"2.$i\">";
    }

    // $mena = array("Peter", "Ján", "Lukáš")
    ?>
</body>
</html>