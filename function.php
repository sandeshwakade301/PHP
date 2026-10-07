<?php

   function cal($x,$y)
   {
      for($i=0; $i<=$y; $i++)
       {
          $x=$x*$y;
       }

      echo($x);
   }

   cal(2,10);
?>