<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Képek</title>
         <link rel="stylesheet" href="css/Kepek.css"/>
    </head>
    <body>
      <div id="wrapper">
       <?php include("../Protected/header.php");
               include("../Protected/menu.php");
             
        ?>
         <div id="oldalsavbal">
            <?php
            include("../Protected/oldalsavbal.php");
            ?>
        </div>
          <div id="oldalsavjobb">
            <?php
            include("../Protected/oldalsavjobb.php");
            ?>
        </div>
        <div id="tartalom">
           <p><center> Teszt szöveg</center></p
          
        
        </div>
        
        
        <?php
        include ("../Protected/footer.php"); 
        ?>
      </div>
    </body>
</html>
