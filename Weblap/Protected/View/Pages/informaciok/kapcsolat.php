<div class="kapcsolat">

    <div id="uzenobox">
       <?php
            include 'Protected/Controller/mailer.php';
        ?>  
    </div>

    <form id="formbox" action="" method="POST">

        <label for="k_email">E-mail cím:</label><br>
        <input id="k_email" type="text" name="email"/><br>

        <label for="k_nev">Név:</label><br>
        <input id="k_nev" type="text" name="nev"/><br>

        <label for="k_targy">Tárgy:</label><br>
        <input id="k_targy" type="text" name="targy"/><br>

        <label for="k_uzenet">Üzenet:</label><br>
        <textarea name="uzenet" id="k_uzenet" rows="5"></textarea><br>

        <button id="k_kuldesgomb" type="submit" name="kuldes">Küldés</button>
        <button id="k_resetgomb" type="reset" name="Reset">Reset</button>

        <label style="display:none">Hagyd üresen ezt a mezőt</label>
        <input style="display:none;" type="text" name="robotvedelem1"/>

    </form>

    <div id="inform">
        <img id="infocim" src="Public/designstuff/info.png"><p>Tudnivalók</p>
        <ul>
            <li>- Kérem töltse ki az összes sort!</li>
            <li>- Valós e-mail cím esetén fog csak választ kapni</li>
            <li>- Hiba vagy nem megfelelő kitöltés esetén minden eddig beírt szöveg eltűnik</li>
            <li>- Ne itt adja le a rendelését, mert arra nem fog válasz érkezni.</li>
        </ul>
    </div>

</div>