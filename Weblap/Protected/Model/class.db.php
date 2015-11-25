<?php

class dbkezelo {

    function kapcsolatnyit() {
        $kapcsolat = new PDO('mysql:dbname=shopdatabase;host=localhost', 'root', '');
        $kapcsolat->exec("SET NAMES utf8");
        return $kapcsolat;
    }

    function kapcsolatzar($kapcsolat) {
        $this->$kapcsolat = null;
    }

    function letrehozo() {
        $sqlstring=""; //ide kéne leírni az össze tábla generálást, de a terv még vátozhat
        $kapcsolat = $this->kapcsolatnyit();
        $letrehozas = $kapcsolat->prepare(":create");
        $letrehozas->bindParam(':create', $sqlstring);
        $letrehozas->execute();
    }

}

class dblekerdezes extends dbkezelo {

    function MindLekerdez() {
        $kapcsolat = $this->kapcsolatnyit();
        $lekerdezes = $kapcsolat->prepare("SELECT * FROM Felhasznalok order by id");
        $lekerdezes->execute();
        $felhasznalok = $lekerdezes->fetchAll();
        $this->kapcsolatzar($kapcsolat);
        return $felhasznalok;
    }

}

class dbmodositas extends dbkezelo {

    function Torles($id) {
        $kapcsolat = $this->kapcsolatnyit();
        $lekerdezes = $kapcsolat->prepare("Delete from Felhasznalok where id= :id");
        $lekerdezes->bindParam(':id', $id);
        $sikeres = $lekerdezes->execute();
        $this->kapcsolatzar($kapcsolat);
        return $sikeres;
    }

}
