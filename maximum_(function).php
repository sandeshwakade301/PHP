<?php

    function maxi($a,$b,$c)
    {
        if($a>$b && $a>$c)
         echo"Maximum=".$a;
        elseif($b>$a && $b>$c)
         echo"Maximum=".$b;
        else
         echo"Maximum=".$c;
    }
  
    maxi(250,100,78);
?>