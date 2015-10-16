
<!-- Login ablak -->

<div id="logintarolo">
<legend>Bejelentkezés</legend>
<fieldset> <!--actionhoz linkelni az adatbáziskezelő php részt -->
    <form id="login" action="../Protected/Modulok/login.php" method="post">
        Felhasználónév: <input type="text" name="username"><p>
        Jelszó:         <input type="password" name="password"><p>
                        <input type="submit" Value="Belépés">
    </form>
</fieldset>
</div>
