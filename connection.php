<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "nama-database";

$connect = mysqli_connect($host, $username, $password, $database);

if(!$connect) {
  die("Database Connection Failed " . mysqli_connect_error());
}
?>