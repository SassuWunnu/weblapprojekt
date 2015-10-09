<!-- Header -->


<!-- Menülista -->

<div id="menutarolo">
    <ul id="menu">
        <li><a href="Kezdolap.php"><center>Kezdőlap</center></a></li>
        <li><a href="Kepek.php"><center>Képek</center></a></li>
        <li><a href="Rendeles.php"><center>Rendelés</center></a></li>
        <li><a href="Kapcsolat.php"><center>Kapcsolat</center></a></li>
    </ul>
    <div style="clear:both"></div>
</div>

<!-- Login ablak -->

<div id="logintarolo">  <!-- action= linkelni a megfelelő php kódhoz -->
    <form id="login" action="../Protected/login.php" method="post">
        Felhasználónév: <input type="text" name="username"><p>
        Jelszó:         <input type="password" name="password"><p>
                        <input type="submit" Value="Belépés">
    </form>
</div>


<!-- Footer -->