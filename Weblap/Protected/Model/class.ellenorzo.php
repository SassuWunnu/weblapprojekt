<?php
class ellenorzes {
    
    function Uresmezok($adat)//csak tömb és string fogadására van megírva
    {
        switch(gettype($adat))
        {
            case 'string': if($adat==""){return true;}else{return false;}
            case 'array': 
                foreach($adat as $elemek)
                {
                    if($elemek==""){
                        return true;
                    }
                
                }
                return false;
        }
    }

}