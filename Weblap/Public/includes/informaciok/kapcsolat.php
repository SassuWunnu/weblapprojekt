<div id="kapcsolat">
    
     <form id="formbox" action="" method="POST">
    
        <label for="k_email">E-mail cím:</label><br>
        <input id="k_email" type="text" name="email"/><br>
        
        <label for="k_nev">Név:</label><br>
        <input id="k_nev" type="text" name="nev"/><br>
        
        <label for="k_targy">Tárgy:</label><br>
        <input id="k_targy" type="text" name="targy"/><br>
        
        <label for="k_uzenet">Üzenet:</label><br>
        <textarea name="uzenet" id="k_uzenet" rows="5"></textarea><br>
        
        <input id="k_kuldesgomb" type="submit" value="Küldés"/>
        <input id="k_resetgomb" type="reset" value="Reset"/>
        
        <label style="display:none">Hagyd üresen ezt a mezőt</label><br>
        <input style="display:none;" type="text" name="robotvedelem1"/><br>
    
    </form>
    
    <div id="inform">
        <img id="infocim" src="Public/designstuff/info.png"><p>Tudnivalók</p>
        <ul>
            <li>- Kérem töltse ki az összes sort!</li>
            <li>- Valós e-mail cím esetén fog csak választ kapni</li>
            <li>- Hiba vagy nem megfelelő kitöltés esetén minden eddig beírt szöveg eltűnik</li>
        </ul>
    </div>
    <div id="uzenobox">
        <?php
            if($_SERVER["REQUEST_METHOD"]==="POST"){
                include("Protected/Controller/mailer.php");
            }
        ?>
    </div>
</div>