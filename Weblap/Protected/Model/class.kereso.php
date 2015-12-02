<?php
class kereso {
    function __construct() {       
    }
    function keress($hivatkozas){
        $alaput="Protected/View/Pages/";
        $mappaszerkezet=array("error","header","footer","informaciok","kepek","kezdolap","logreg","referencia","rendeles");
        foreach($mappaszerkezet as $mappa){
            if(file_exists($alaput.$mappa."/".$hivatkozas.".php")){
                return $alaput.$mappa."/".$hivatkozas.".php";
            }
            
        }
        return $alaput."error/nemtalaltoldalt.php";
    }

}
