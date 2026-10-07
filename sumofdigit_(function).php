<?php
  
    function sum($n)
	{
	  $s=0;
	  
	  while($n>0)
	  {
	     $d=$n%10;
		 $s=$s+$d;
		 $n=$n/10;
	  }
	  
	  echo"Sum of digit=".$s;
	}
	
	sum(1234);
?>