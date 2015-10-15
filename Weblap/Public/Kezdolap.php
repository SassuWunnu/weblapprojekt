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
        <div id="kezdolaptartalom">
            
			<p><h1><center>Üdv a honlapon</center></h1></p>
			
			<center><iframe width="560" height="315" src="https://www.youtube.com/embed/vouAtmE13vs" frameborder="0" allowfullscreen></iframe>
             </center>
			<p>Szerver idő:<p>
				<?php
                    echo date('H:i, jS F Y'); 
                ?>
			<p><i>Ha nem látod a szerver időt akkor nem megy a szerver :)</i></p>
			
        </div>
        <?php
        include ("../Protected/footer.php"); 
        ?>
      </div>
    </body>
</html>

