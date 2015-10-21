<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Képek</title>
         <link rel="stylesheet" href="css/Kepek.css"/>
         <script src="js/jquery-2.1.4.js"></script>
    </head>
    <body>
      <div id="wrapper">
        <div id="menugombkinti">
            <input type="image" src="designstuff/menugomb.png"></button>
        </div>
       <?php include("../Protected/header.php");
             
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
      <script language="javascript" type="text/javascript"  src="js/menu.js"></script>
    </body>
</html>
