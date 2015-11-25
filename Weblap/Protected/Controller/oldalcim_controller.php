<?php
if (array_key_exists('page', $_GET)) {
    $oldal = $_GET['page'];
    switch($oldal){
        case "kezdolap": echo "Kezdőlap";
            break;
        case "kepek": echo "Eladó képek";
            break;
        case "rendeles": echo "Rendelés";
            break;
        case "referencia": echo "Referencia munkák";
            break;
        default: echo "Információk";
            break;
    
    }
}
    else{
        echo "Kezdőlap";
    }



