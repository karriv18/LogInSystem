<?php 
$sname = "localhost";
$uname = "root";
$pword = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $pword, $db_name);

if (!$conn){
  echo "Connection Failed: " . mysqli_connect_error();
}
