<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Képek</title>
         <link rel="stylesheet" href="css/Kepek.css"/>
         <script src="js/jquery-2.1.4.min.js"></script>
    </head>
    <body>
      <div id="wrapper">
         <?php 
            include("../Protected/header.php");  
            include("../Protected/oldalsavbal.php");  
            include("../Protected/oldalsavjobb.php");
        ?>
        <div id="tartalom">
            <p>teszt szöveg </p>
        </div>
        
        
        <?php
        include ("../Protected/footer.php"); 
        ?>
      </div>
      <script language="javascript" type="text/javascript"  src="js/menu.js"></script>
    </body>
</html>
