<?php
 /* nem hivatkozunk közvetlenül Get[op]-ra azt kifogásolja a fordító, mást megoldást meg nem tudok rá :D */
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