<html>
<body>
<form method="post">

     <input type="text" name="r">
	 <input type="text" name="h">
	 <br>
	 <input type="submit" name="sumbet">
</form>

<?php
 
   function valume($r,$h)
   {
       $ans=3.14*$r*$r*$h;
	   
	   echo"<h1><i>"."Valume=".$ans."</i></h1>";
   }
   
   function area($r)
   {
       $ans=3.14*$r*$r;
	   
	   echo"Area=".$ans;
   }
   
   $r=$_POST["r"];
   $h=$_POST["h"];
   
   valume($r,$h);
   area($r);
?>
</body>
</html>