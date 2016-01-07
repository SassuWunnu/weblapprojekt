<?php

require 'Protected/Model/class.db.php';

//////////////////// Tábla létrehozó rész//////////////////////////

if (array_key_exists('dbtablagomb', $_POST)) {
    $adatbazis = new dbkezelo();
    $sikeres = null;
    $sikeres = $adatbazis->letrehozo();
    
    if ($sikeres) {
        echo "Sikeres tábla létrehozás (vagy már létező táblák esetén figyelmen kívül hagyás)";
        var_dump($sikeres);
    } else {
        echo "Nem sikerült létrehozni a táblákat";
        var_dump($sikeres);
    }
}

////////////////////// Kép feltöltése //////////////////////////////////////////
function Kepkezelo(){
    $alaput="Public/img/";
    $biztonsagosnev=preg_replace(array("/\s+/","/^-\.\w]+/"),array("_",""),trim($_FILES['kepfile']['name']));
    $biztonsagosnev=rand().$biztonsagosnev;
    move_uploaded_file($_FILES['kepfile']['tmp_name'], $alaput.$biztonsagosnev);
    return $alaput.$biztonsagosnev;
    
}
if(array_key_exists('kepfeltoltes', $_POST)){
    $adatbazis=new dbmodositas();
    if(!empty($_FILES['kepfile']['name'])){
        $kepeleres=Kepkezelo();
        if($_POST['elado']=='true'){
            $eladoe=1;
         }else{
            $eladoe=0;
        }
        $paramterek=[
            'elado' =>$eladoe,
            'keszult' => $_POST['keszult'],
            'meret'  => $_POST['meret'],
            'ar'  => $_POST['ar'],
            'leiras'   => $_POST['leiras'],
            'kep'   => $kepeleres,
        ];
        if($adatbazis->Kepfeltoltes($paramterek)){
            echo "Sikeres feltöltés";
        }else{
            echo "Sikertelen feltöltés";
        }
    }else{
        echo "Feltöléshez legalább a képet meg kell adni!";
    }
}

