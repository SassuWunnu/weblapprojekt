<?php
class kereso {
    function __construct() {       
    }
    function keress($hivatkozas){
        $alaput="Protected/View/";
        $mappaszerkezet=array("error","footer","header","informaciok","kepek","kezdolap","logreg","referencia","rendeles");
        foreach($mappaszerkezet as $mappa){
            if(file_exists($alaput.$mappa."/".$hivatkozas.".php")){
                return $alaput.$mappa."/".$hivatkozas.".php";
            }
            
        }
        return $alaput."error/nemtalaltoldalt.php";
    }

}
