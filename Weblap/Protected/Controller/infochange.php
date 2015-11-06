<?php
if(isset($_GET["page"]) && $_GET["page"]!="")
            {
                $valtozo = $_GET["page"];
                if(file_exists("Public/mellekoldalak/informaciok/".$valtozo.".php"))
                {
                    
                    include_once ("Public/mellekoldalak/informaciok/".$valtozo.".php");
                }
                else
                {
                    if(file_exists("Public/includes/texts/".$valtozo.".txt"))
                    {
                        include_once ("Public/includes/texts/".$valtozo.".txt");
                    }
                    else
                    {
                        include_once("Public/mellekoldalak/informaciok/kapcsolat.php");
                    }
                }
            }
            else
              {
                include_once("Public/mellekoldalak/informaciok/kapcsolat.php");
              }
