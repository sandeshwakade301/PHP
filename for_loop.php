<form method="post">

<?php

$a = array();

for($i = 0; $i < 5; $i++)
{
    echo "Enter value " . ($i + 1) . ": ";
    echo '<input type="number" name="a[]"><br>';
}

?>

<input type="submit" value="Submit">

</form>
<?php

$a = $_POST['a'];

$count = count($a);

for($i = 0; $i < $count; $i++)
{
    echo $a[$i] . "<br>";
}

?>