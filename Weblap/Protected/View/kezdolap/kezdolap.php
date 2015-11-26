<div id="Kezdolap">
<br>         
<p><h1><center>Üdv a honlapon</center></h1></p>      
<br>            
<br>

<p>Szerver idő:</p>
<?php
echo date('H:i, jS F Y');
?>  
<br>
<br>
<br>
<br>

<form aciton="" method="POST">
<p>Futtatáshoz szükséges egy adatbázis shopdatabase néven utf8-hungarian kódolással (phpmyadmin)</p>
<button type="submit" name="dbtablagomb">adatbázis tábla létrerehozó</button>

</form>

<?php 
require 'Protected/Model/class.db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $adatbazis=new dbkezelo();
    $sikeres=$adatbazis->letrehozo();
    if($sikeres){
        echo "Sikeres táblalétrehozás!";
    }else{
        echo "Valami balul sült el!";
    }
}
?>
</div>   
