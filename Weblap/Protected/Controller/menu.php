<?php
if (array_key_exists('page', $_GET)) {
    $oldal = $_GET['page'];
} else {
    $oldal = "kezdolap";
}
require 'Protected/Model/class.kereso.php';
$obj=new kereso();
$utvonal=$obj->keress($oldal);
include $utvonal;

