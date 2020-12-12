<?php 
$host = "localhost";
$username = "root";
$password = "r12072001n";
$database = "MTWEB";

$connect = mysqli_connect($host, $username, $password, $database);

if(!$connect) {
  die("Database Connection Failed " . mysqli_connect_error());
}
?>