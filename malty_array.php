<form method="post">
     
     Enter row:
     <input type="text" name="row"><br>
     Enter colum:
     <input type="text" name="col"><br>

     <input type="submit" value="search">
</form>

<?php

   $a=array(
             array(10,20,30,40,50),
             array(11,22,33,44,55),
             array(15,25,35,45,65)
            );

    $row=$_POST["row"];
    $col=$_POST["col"];

    echo $a[$row][$col];
?>