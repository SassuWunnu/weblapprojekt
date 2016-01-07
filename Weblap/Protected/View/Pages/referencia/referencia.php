<div id="referencia">
    <?php
     include 'Protected/Controller/munkak.php';
     $adatok=Referenciamunkak();
    $kepdarab=count($adatok);
    for($i=0;$i<$kepdarab;$i++)
    {
        ?><br><div class="kep">
            <img src="<?php echo $adatok[$i]['kep']; ?>"</img><br>
            Méret: <?php echo $adatok[$i]['meret'];?> (mm)<br>
            Készült: <?php echo $adatok[$i]['keszult'];?><br>
            Leírás: <?php echo $adatok[$i]['leiras'];?><br>
        </div><br>
        <?php
    }
    
     ?>
</div>


