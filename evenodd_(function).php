<?php
   
   function even()
   {
      echo"<h1>Even number :</h1>";
      for($i=1; $i<=50; $i++)
      {
         if($i%2==0)
          {
             echo " ".$i; 
          }
      }
   }

   function odd()
   {
      echo"<h1>Odd number :</h1>";
      for($i=1; $i<=50; $i++)
      {
         if($i%2==1)
         {
            echo" ".$i;
         }
      }
   }

   even();
   odd();
?>