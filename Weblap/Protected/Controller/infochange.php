<?php
if(isset($_GET["page"]) && $_GET["page"]!="")
            {
                $valtozo = $_GET["page"];
                if(file_exists("Public/includes/informaciok/".$valtozo.".php"))
                {
                    
                    include_once ("Public/includes/informaciok/".$valtozo.".php");
                }
                else
                {
                    if(file_exists("Public/includes/informaciok/texts/".$valtozo.".txt"))
                    {
                        include_once ("Public/includes/informaciok/texts/".$valtozo.".txt");
                    }
                    else
                    {
                        include_once("Public/includes/Error.php");
                    }
                }
            }
            else
              {
                include_once("Public/includes/informaciok/kapcsolat.php");
              }
