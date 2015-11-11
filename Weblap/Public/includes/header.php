<!DOCTYPE html>
<?php require_once("Public/config/config.php");?>
<html>
    <head>
       <meta charset="UTF-8">
       <title><?php echo $oldalnev ?></title>      <!-- Böngészőben megjelenő cím -->
       <link rel="stylesheet" href="Public/css/Main.css"/>
       <!-- <script src="Public/js/jquery-2.1.4.min.js"></script>  <!-- javascript könyvtár a scriptek értelmezéséhez -->   
    </head>
    <body>   
      <div id="wrapper"><!--Wrapper kezdete (minden elem a honlapon (a vége a footerben) -->
          
        <div id="header">
    
            <!-- Kezdőlapra mutató logó -->
    
            <a href="index.php" class="logo"></a>
            
            <!--menügomb összenyomott állapothoz-->
                <div id="mediamenugomb">
                    <span class="icon"></span>
                    <span class="icon"></span>
                    <span class="icon"></span>
                </div>
            
            <a id="kosar" href=""><image src="Public/designstuff/Shopping Cart-50.png"</image></a>
            
            <button id="logreg" type="button">Belépés/Regisztráció</button>
    
            
            <!--Menü-->
    
            <?php
                include("Public/includes/menu.php");
            ?>
        </div>
