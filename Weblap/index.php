<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TDWebshopProjekt15</title> <!-- Böngészőben megjelenő cím -->
        <link rel="stylesheet" href="Public/css/Main.css"/> <!-- Az adott laphoz rendelt kinézet -->
        <script src="Public/js/jquery-2.1.4.min.js"></script> <!-- javascript könyvtár a scriptek értelmezéséhez -->
    </head>
    <body>   
      
      <div id="wrapper">        <!--Wrapper kezdete (minden elem a honlapon) -->
        <?php 
            include("Protected/header.php");  
            include("Protected/oldalsavbal.php");  /*Külön fájlokban tárolt fix részek betöltése */
            include("Protected/oldalsavjobb.php");
        ?>
          
        <div class="tartalom">  <!--Különböző menüpontok tartalmát megjeneítő blokk -->     
           <?php
                include("Protected/Modulok/tartalombetolto.php") 
            /*Meüpont kattintáskor lecseréli a tartalmat az oldal közepén */
           ?>            
        </div>
          
        <?php
            include ("Protected/footer.php"); /*Oldal aljára pozícionált footer betöltése */
        ?>
      </div>                    <!-- Wrapper vége -->
   
    <!-- Script részleg animáláshoz és egyéb szépségekhez -->
    <script src="Public/js/oldalsav.js"></script>
    
    <!-- Script rész vége -->
    </body>
</html>
