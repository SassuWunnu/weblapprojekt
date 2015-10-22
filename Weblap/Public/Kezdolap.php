<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TDWebshopProjekt15</title>
        <link rel="stylesheet" href="css/Kezdolap.css"/>
        <script src="js/jquery-2.1.4.js"></script>       
    </head>
    <body>    
      <div id="wrapper">
         <div id="menugombkinti">
            <input type="image" src="designstuff/menugomb.png"></button>
         </div>
        <?php 
            include("../Protected/header.php");  
            include("../Protected/oldalsavbal.php");  
            include("../Protected/oldalsavjobb.php");
        ?>
        <div id="tartalom">
            <br>
            <p><h1><center>Üdv a honlapon</center></h1></p>
            <br>
            <center>
                <p>Nem tudom, nem érdekel, képtelenség megcsinálni, kell egy 5 perc pihenő zene: </p>      
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vouAtmE13vs" 
                      frameborder="0" allowfullscreen></iframe>
            </center>
            <p>Szerver idő:</p>
                <?php
                    echo date('H:i, jS F Y'); 
                ?>
            <p><i>Ha nem látod a szerver időt akkor nem megy a szerver :)</i></p>
                        
            <br>
            <center>
                <p>A különböző blokkok színesítve, hogy látványosabb legyen a módosításokkor fellépő különbségek.</p>
                    <p>
                        <ul>
                            <li>világosbarna: wrapper (középső elemeket tartalmazó blokk)</li>
                            <li>sárga: header</li>
                            <li>zöld: menü</li>
                            <li>kék: adott lap tartalma</li>
                            <li>lazac: footer</li>
                            <li>sötétkék: oldalsó menük</li>
                            <li> szürke: háttér</li>
                        </ul>
                    </p>
            </center>
			
        </div>
        <?php
            include ("../Protected/footer.php"); 
        ?>
      </div>
    </sript>
    <script language="javascript" type="text/javascript"  src="js/menu.js"></script>
    </body>
</html>

