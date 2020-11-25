<?php
include("db_con.php");

if($con)
echo "success";
else
echo "problem";

$test="Hello";

echo "world".$test;

?>