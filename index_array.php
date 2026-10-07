<form method="post">

    <input type="text" name="index">

    <input type="submit" value="Search">

</form>

<?php

$a = array(
    "abhi" => 10,
    "harvi" => 20,
    "swaraj" => 30,
    "kaustubh" => 40
);

$index = $_POST["index"] ?? "";

echo $a[$index] ?? "Index not found";

?>