<!DOCTYPE html>
<?php require_once("Protected/config/config.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php include("Protected/Controller/oldalcim_controller.php"); ?></title>  
        <link rel="stylesheet" href="Public/css/Main.css"/>
        <script src="Public/js/jquery-2.1.4.min.js"></script> 
    </head>
    <body>   
        <div id="wrapper">

            <div id="header">
                <?php include ("Protected/View/header/header.php"); ?>
            </div>
            <div class="tartalom"> 
                <?php include ("Protected/Controller/menu_controller.php"); ?>
            </div>
            <div id="footer">
                <?php include ("Protected/View/footer/footer.php"); ?>
            </div>
            
        </div>
    </body>
</html>
