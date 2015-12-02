<?php

class dbkezelo {
    function kapcsolatnyit() {
        $kapcsolat = new PDO('mysql:dbname=shopdatabase;host=localhost', 'root', '');
        $kapcsolat->exec("SET NAMES utf8");
        return $kapcsolat;
    }

    function kapcsolatzar($kapcsolat) {
        $kapcsolat = null;
    }

    function letrehozo() {
        //$adatbazisletrehozo="CREATE SCHEMA IF NOT EXISTS shopdatabase DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci ;USE `shopdatabase`;";
        $tablaksqlstring="
                Create table IF NOT EXISTS Felhasznalok(
                    id int primary key auto_increment not null,
                    email varchar(45) not null,
                    felhasznalonev varchar(25) not null,
                    nev varchar(55) null,
                    cim varchar(250) null,
                    telefonszam numeric null,
                    lastlogin date null);
                 Create table IF NOT EXISTS Rendelesek(
                    id int primary key auto_increment not null, 
                    szoveg varchar(255) not null, 
                    meret varchar(10) not null, 
                    datum date not null, 
                    statusz varchar(45) not null, 
                    tipus varchar(20) not null, 
                    teljesites date, 
                    felhasznalok_id int not null, 
                    constraint fk_Rendelesek_felhasznalok_id foreign key (felhasznalok_id) References Felhasznalok(id) );
                 create table if not exists Jelszavak(
                    id int primary key auto_increment not null,
                    jelszo varchar(250),
                    felhasznalok_id int,
                    constraint fk_Jelszavak_felhasznalok_id foreign key (felhasznalok_id) References Felhasznalok(id));
                Create table IF NOT EXISTS Regisztracio(
                    id int primary key auto_increment not null,
                    email varchar(45) not null,
                    felhasznalonev varchar(25) not null,
                    nev varchar(55) null,
                    cim varchar(250) null,
                    telefonszam numeric null,
                    lejar date not null,
                    regkod numeric);
                create table if not exists Munkak(
                    id int primary key auto_increment not null,
                    kep blob not null,
                    elado boolean not null,
                    leiras varchar(255),
                    keszult date,
                    meret varchar(15),
                    ar numeric);";
        $kapcsolat = $this->kapcsolatnyit();
        $letrehozas = $kapcsolat->prepare($tablaksqlstring);
        $siker=$letrehozas->execute();
        $this->kapcsolatzar($kapcsolat);
        return $siker;
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
    function Felhasznaloletezik($felhnev){
        $kapcsolat=$this->kapcsolatnyit();
        $lekeredezes=$kapcsolat->prepare("Select felhasznalonev from Felhasznalok where felhasznalonev=:nev");
        $lekeredezes->bindParam(':nev', $felhnev);
        $lekeredezes->execute();
        $lekerdezett=$lekeredezes->fetch();
        if($felhnev==$lekerdezett){
            $eredmeny=true;
        }else{
            $eredmeny=false;
        }
        $this->kapcsolatzar($kapcsolat);
        return $eredmeny;
    }
    function idvissza($felhnev){
        $kapcsolat=$this->kapcsolatnyit();
        $lekeredezes=$kapcsolat->prepare("Select id from Felhasznalok where felhasznalonev=:nev");
        $lekeredezes->bindParam(':nev', $felhnev);
        $lekeredezes->execute();
        $azid=$lekeredezes->fetch();
        $this->kapcsolatzar($kapcsolat);
        return $azid;
    }
    function jelszokereso($id){
        $kapcsolat=$this->kapcsolatnyit();
        $lekeredezes=$kapcsolat->prepare("Select jelszo from Jelszavak where felhasznalok_id=:nev");
        $lekeredezes->bindParam(':nev', $id);
        $lekeredezes->execute();
        $jelszo=$lekeredezes->fetch();
        $this->kapcsolatzar($kapcsolat);
        return $jelszo;
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
    function MindTorol(){
        $kapcsolat = $this->kapcsolatnyit();
        $lekerdezes = $kapcsolat->prepare("Delete from Felhasznalok");
        $sikeres = $lekerdezes->execute();
        $this->kapcsolatzar($kapcsolat);
        return $sikeres;
    }
    function Ujfelhasznalo($adatok){
        $kapcsolat = $this->kapcsolatnyit();
        $lekerdezes = $kapcsolat->prepare("");
    }

}
