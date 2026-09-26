<?PHP
      $a="sandesh";
      echo "strlen() function";
      echo "<br><br>";
      echo strlen($a);
      echo "<hr>";
 
      $a="  harvir  ";
      echo "trim() function";
      echo "<br><br>";
      echo trim($a);
      echo "<hr>";
      
      $a="  abhi";
      echo "ltrim() function";
      echo "<br><br>";
      echo ltrim($a);
      echo "<hr>";

      $a="swaraj  ";
      echo "rtrim() function";
      echo "<br><br>";
      echo rtrim($a);
      echo "<hr>";
   
      $a="KAUSTOOBH";    
      echo "strtolower() function";
      echo "<br><br>";
      echo strtolower($a);
      echo "<hr>";

      $a="aditya";
      echo "strtoupper() function";
      echo "<br><br>";
      echo strtoupper($a);
      echo "<hr>";

      $a="om";
      echo "ucfirst() function";
      echo "<br><br>";
      echo ucfirst($a);
      echo "<hr>";
     
      $a="hellow syntax classes";
      echo "ucwords() function";
      echo "<br><br>";
      echo ucwords($a);
      echo "<hr>";

      $a="ram";
      $b="ram";
      echo "strcmp() function";
      echo "<br><br>";
      echo strcmp($a,$b);
      echo "<hr>";

      $a="syntax";
      echo "substr() function";
      echo "<br><br>";
      echo substr($a,1,5);
      echo "<hr>";

      $a="hello syntax";
      echo "substr_replace() function";
      echo "<br><br>";
      echo substr_replace($a,"classes ",0,6);
      echo "<hr>"; 

      $a="hello syntax";
      echo "substr_compare() function";
      echo "<br><br>";
      echo substr_compare($a,"hello",7,13);
      echo "<hr>";

      $a="syntax classes";
      echo "substr_count() function";
      echo "<br><br>";
      echo substr_count($a,"s");
      echo "<hr>";

      $a="syntax"; 
      echo "strrev() function";
      echo "<br><br>";
      echo strrev($a);
      echo "<hr>";

      $a="syntax";
      echo "str_pad() function";
      echo "<br><br>";
      echo str_pad($a,10,"S");
      echo "<hr>"; 

      $a="om,sai,ram";
      echo "explode() function";
      echo "<br><br>";
      $b=explode(",",$a);
      print_r($b);
      echo "<hr>"; 

      $a=array("om","sai","ram");
      echo "implode() function";
      echo "<br><br>";
      $b=implode($a);
      echo "$b";
      echo "<hr>"; 

      $a="hello syntax";
      echo "strpos() function";
      echo "<br><br>";
      echo strpos($a,"syntax");
      echo "<hr>";

      $a="php java sql";
      echo "strstr() function";
      echo"<br><br>";
      echo strstr($a,"java");

?>