<?php 
$oldalnev="Információk";
$section="Informaciok";
include("Public/includes/header.php"); 
?>
<div class="tartalom">
    <div id="informaciok">
        <ul id="informmenu">
            <li><a href="Informaciok.php?page=kapcsolat">Kapcsolat</a></li>
            <li><a href="Informaciok.php?page=jog">Jogi információk</a></li>
            <li><a href="Informaciok.php?page=szallitas">Szállítás</a></li>
            <li><a href="Informaciok.php?page=paypal">Paypal</a></li>
            <li><a href="Informaciok.php?page=hibajelentes">Hibabejelentés</a></li>
        </ul>  
        <div id="blokkok">
            <?php include ("Protected/Controller/infochange.php");?>
        </div>
    </div>
</div>

<?php
 include ("Public/includes/footer.php");
?>