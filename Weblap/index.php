<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TDWebshopProjekt15</title>
        <link rel="stylesheet" href="Public/css/Main.css"/>
        <script src="Public/js/jquery-2.1.4.min.js"></script>
    </head>
    <body>    
      <div id="wrapper">        
        <?php 
            include("Protected/header.php");  
            include("Protected/oldalsavbal.php");  
            include("Protected/oldalsavjobb.php");
        ?>
        <div class="tartalom">
            
           <?php
            if(isset($_GET["op"]) && $_GET["op"]!="")
            {
                $op = $_GET["op"];
                if(file_exists("Public/".$op.".php"))
                {
                    include_once ("Public/".$op.".php");
                }
                else
                {
                    if(file_exists("Public/mellekoldalak/".$op.".php"))
                    {
                        include_once ("Public/mellekoldalak/".$op.".php");
                    }
                    else
                    {
                        include_once("Public/Kezdolap.php");
                    }
                }
            }
            else
              {
                include_once("Public/Kezdolap.php");
              }
           ?>
            
        </div>
        <?php
            include ("Protected/footer.php"); 
        ?>
      </div>
   
    <script src="Public/js/oldalsav.js"></script>
    </body>
</html>
