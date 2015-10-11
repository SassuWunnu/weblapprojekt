<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TDWebshopProjekt15</title>
        <link rel="stylesheet" href="css/Kezdolap.css"/>
    </head>
    <body>    
      <div id="wrapper">
        <?php include("../Protected/header.php");
              include("../Protected/menu.php");
              include("../Protected/oldalsav.php");
        ?>
        <div id="body">
            <center>
                <?php
                    echo date('H:i, jS F Y'); 
                ?>
            </center>
        </div>
        <?php
        include ("../Protected/footer.php"); 
        ?>
      </div>
    </body>
</html>

