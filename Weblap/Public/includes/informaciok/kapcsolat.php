<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    include("Protected/Controller/mailer.php");
}
?>
<div id="kapcsolat">

    <form action="" method="POST">
    
        <label>E-mail cím</lable>
        <input type="text" name="email"><br>
        <label>Név</label>
        <input type="text" name="nev"><br>
        <label>Tárgy</label>
        <input type="text" name="targy"><br>
        <label>Üzenet</label>
        <input type="text" name="uzenet"><br>
        
        <label style="display:none">Hagyd üresen ezt a mezőt</label>
        <input style="display:none;" type="text" name="robotvedelem1">
        
        <button type="submit">Küldés</button>
        <button type="reset">Reset</button>
    
    </form>
</div>