<html>
<body>
  <form method="post">
      Enter employee no :
      <input type="number" name="eno"><br><br>
	  Enter employee name :
	  <input type="text" name="ename"><br><br>
	  Enter employee salary :
	  <input type="number" name="sal"><br><br>
	  <input type="submit" value="submit">
  </form>

<?php

   class emp
   {
     public $eno;
	 public $ename;
	 public $sal;
	
	function accpet($eno,$ename,$sal)
	{
	   $this->eno=$eno;
	   $this->ename=$ename;
	   $this->sal=$sal;
	}
	
	function disply()
	{
	   echo"Employee number=".$this->eno;
	   echo"<br>Employee name=".$this->ename;
	   echo"<br>Employee salary=".$this->sal;
	}
   }
   
   $eno=$_POST['eno'];
   $ename=$_POST['ename'];
   $sal=$_POST['sal'];
   
   $ob=new emp();
   $ob->accpet($eno,$ename,$sal);
   $ob->disply();
?>
</html>
</body>