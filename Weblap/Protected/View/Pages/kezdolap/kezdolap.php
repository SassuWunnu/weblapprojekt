<div id="Kezdolap">
    
<br><p><h1><center>Üdv a honlapon</center></h1></p><br><br>
<p>Szerver idő:</p>
<?php
    echo date('H:i, jS F Y');
?>  
<br><br><br>

<h2><center> Adatbázis teszt részleg </center></h2>

<div id="tesztreszleg">
    
    <!-----------------------------Táblákat létrehozó rész -------------------->
    
        <div id="tablaletrehozo">
            <center><p><b>Táblalétrehozás</b></p></center>
        <form action="" method="POST">
            <p>Futtatáshoz szükséges egy adatbázis shopdatabase néven utf8-hungarian kódolással (phpmyadmin)</p>
            <button type="submit" name="dbtablagomb" value="dbtablagomb">adatbázis tábla létrerehozó</button>
            </div>
        </form>
            <div class="eredmenyablak">
                <p>
                    <?php include 'Protected/Controller/teszt.php' ?>
                </p>
            </div>
    <!------------------------------------------------------------------------->        
            
</div>

</div>   
