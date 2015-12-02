<div class="uzenobox">
    <?php include 'Protected/Controller/reg.php'; ?>
</div>
<div id="reg">
    <form id="regform" action="" method="POST">
        
        <label for="felhasznalonev">Felhasználó név*:</label><br>
        <input type="text" id="felhasznalonev" name="felhasznalonev"><br>
        <label for="nev">Név:</label><br>
        <input type="text" id="nev" name="nev"><br>
        <label for="passw1">Jelszó*:</label><br>
        <input type="password" id="passw1" name="passw1"><br>
        <label for="passw2">Jelszó újra*:</label><br>
        <input type="password" id="passw2" name="passw2"><br>
        <label for="email">Email cím*:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="cim">Cím:</label><br>
        <input type="text" id="cim" name="cim"><br>
        <label for="telefon">Telefonszám:</label><br>
        <input type="text" id="telefon" name="telefon"><br>
        <button type="submit" name="regsubmit" id="regsubmit">Regisztráció</button><br>
        
    </form>
    
</div>