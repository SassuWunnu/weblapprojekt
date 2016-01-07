<?php

require 'Protected/Model/class.ellenorzo.php';
require 'Protected/Model/class.db.php';

if (array_key_exists('loginsubmit', $_POST)) {
    $felhasznalo = $_POST['felh'];
    $password = $_POST['pw'];
        if(!ellenorzo($felhasznalo,$password))
        {
            egyeztetes($felhasznalo,$password);
        }
}
function ellenorzo($felhasznalo,$password){
        $ell=new ellenorzes();
        $tomb=array($felhasznalo,$password);
        if($ell->Uresmezok($tomb))
        {
            echo "Nem töltötte ki az összes mezőt";
            return true;
        }
        
        //további ellenőrzések: injection védelem, bot védelem
        return false;
}
function egyeztetes($felhasznalo,$password){
    
        $adatbazis = new dblekerdezes();
        if ($adatbazis->Felhasznaloletezik($felhasznalo)) {
            $felhid = $adatbazis->idvissza($felhasznalo);
            $dbjelszo = $adatbazis->jelszokereso($felhid);
            
            //kódolt jelszó visszafejtése
            
            if ($dbjelszo == $password) {
                echo "Sikeres bejelentkezés";
                
                //lastlogin-t frissíteni az aktuális dátumra
                //session indítása, oldal újratöltése
                
            }
        } else {
            echo "Ez a felhasználónév nem létezik!";
        }
}
