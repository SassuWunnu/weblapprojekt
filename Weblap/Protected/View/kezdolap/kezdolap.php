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
<h2><center> Adatbázis teszt részleg </center></h2>
    <div id="tesztreszleg">
        <div id="tablaletrehozo">
            <center><p><b>Táblalétrehozás</b></p></center>
        <form action="" method="POST">
            <p>Futtatáshoz szükséges egy adatbázis shopdatabase néven utf8-hungarian kódolással (phpmyadmin)</p>
            <button type="submit" name="dbtablagomb">adatbázis tábla létrerehozó</button>
            <?php
                require 'Protected/Model/class.db.php';
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $adatbazis = new dbkezelo();
                    $sikeres=null;
                    $sikeres = $adatbazis->letrehozo();
            ?>
            </div>
        </form>
            <div class="eredmenyablak">
                    <p>
                        <?php
                        if ($sikeres) {
                            echo "Sikeres létrehozás";
                            var_dump($sikeres);
                        } else {
                            echo "Nem sikerült létrehozni a táblákat";
                            var_dump($sikeres);
                        }
                    }
                    ?>
                </p>
            </div>
    </div>
</div>   
