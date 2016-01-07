<div id="eladokepek">
    <?php
    include 'Protected/Controller/munkak.php';
    $adatok=Eladomunkak();
    $kepdarab=count($adatok);
    for($i=0;$i<$kepdarab;$i++)
    {
        ?><br><div class="kep">
            <img src="<?php echo $adatok[$i]['kep']; ?>"</img><br>
            Méret: <?php echo $adatok[$i]['meret'];?> (mm)<br>
            Készült: <?php echo $adatok[$i]['keszult'];?><br>
            Ár: <?php echo $adatok[$i]['ar'];?> Ft<br>
            Leírás: <?php echo $adatok[$i]['leiras'];?><br>
        </div><br>
        <?php
    }
    ?>
</div>
