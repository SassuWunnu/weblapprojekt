<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TDWebshopProjekt15</title>                       <!-- Böngészőben megjelenő cím -->
        <link rel="stylesheet" href="Public/css/Main.css"/>     <!-- Az adott laphoz rendelt kinézet -->
        <script src="Protected/js/jquery-2.1.4.min.js"></script>   <!-- javascript könyvtár a scriptek értelmezéséhez -->
    </head>
    <body>   
      <div id="wrapper"><!--Wrapper kezdete (minden elem a honlapon -->
        <?php 
            include("Public/fixreszek/header.php");             /*Külön fájlokban tárolt fix részek betöltése */
        ?>
          
        <div class="tartalom">                                  <!--Különböző menüpontok tartalmát megjeneítő blokk -->  
           <?php
                include("Protected/Modulok/tartalombetolto.php") 
                                                                /*Menüpont kattintáskor lecseréli a tartalmat az oldal közepén */
           ?>            
        </div>
       <?php
           include ("Public/fixreszek/footer.php");             /*Oldal aljára pozícionált footer betöltése */
       ?>
      </div> <!-- Wrapper vége -->
     
    <!-- Script részleg animáláshoz és egyéb szépségekhez -->
    
    <script src="Protected/js/oldalsav.js"></script>
    
    <!-- Script rész vége -->
    </body>
</html>
