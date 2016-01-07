<?php
require 'Protected/Model/class.db.php';
function Eladomunkak(){ 
    $lekerdezes=new dblekerdezes();
    $kepadatok=$lekerdezes->Eladandomunkak();
    return $kepadatok;
}
function Referenciamunkak(){ 
    $lekerdezes=new dblekerdezes();
    $kepadatok=$lekerdezes->Referenciamunkak();
    return $kepadatok;
}