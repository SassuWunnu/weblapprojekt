<?php

require 'Protected/Model/class.db.php';

//////////////////// Tábla létrehozó rész//////////////////////////

if (array_key_exists('dbtablagomb', $_POST)) {
    $adatbazis = new dbkezelo();
    $sikeres = null;
    $sikeres = $adatbazis->letrehozo();
    
    if ($sikeres) {
        echo "Sikeres létrehozás";
        var_dump($sikeres);
    } else {
        echo "Nem sikerült létrehozni a táblákat";
        var_dump($sikeres);
    }
}

////////////////////////////////////////////////////////////////////////

