<div id="Kezdolap">
 <div class="uzenoboxultimate">
                <p>
                    <?php include 'Protected/Controller/teszt.php' ?>
                </p>
</div>   
<br><p><h1><center>Üdv a honlapon</center></h1></p><br><br>

<h2><center> Adatbázis teszt részleg </center></h2>

<div id="tesztreszleg">
    <p>Szerver idő:</p>
    <?php
        echo date('H:i, jS F Y');
    ?>  
    <br><br><br>
    
    <!-----------------------------Táblákat létrehozó rész -------------------->
    
        <div class="boxokl">
            <center><p><b>Táblalétrehozás</b></p></center>
        <form action="" method="POST">
            <p>Futtatáshoz szükséges egy adatbázis shopdatabase néven utf8-hungarian kódolással (phpmyadmin)</p>
            <button type="submit" name="dbtablagomb" value="dbtablagomb">adatbázis tábla létrerehozó</button>
        </div>
        </form>
    <!------------------------------------------------------------------------->        
    <!-----------------------------Felhasználók listája ----------------------->
    <div class="boxokr">
        <table border="2">
            <thead>
                <tr>

                    <td>Felhasználónév</td>
                    <td>Név</td>
                    <td>Cím</td>
                    <td>E-mail</td>
                    <td>Telefonszám</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $db=new dblekerdezes();
                $felh = $db->Felhasznalok();
                $felhDb = count($felh);
                for ($i = 0; $i < $felhDb; $i++) {
                    echo '<tr>
                     
                        <td>' .$felh[$i]['felhasznalonev'] . '</td>
                        <td>' . $felh[$i]['nev'] . '</td>
                        <td>' . $felh[$i]['cim'] . '</td>
                        <td>' . $felh[$i]['email'] . '</td>
                        <td>' . $felh[$i]['telefonszam'] . '</td>
                     </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <!------------------------------------------------------------------------->
</div>

</div>   
