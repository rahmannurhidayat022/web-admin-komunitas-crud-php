<?php 
include 'connection.php';
var_dump($_GET['npm']);
if(isset($_GET['npm'])) {
  $npm = $_GET['npm'];

  $sql = "DELETE FROM mahasiswa WHERE npm='$npm'";
  $query = mysqli_query($connect, $sql);

  if($query) {
    header('Location: data-list.php');
  } else {
    echo "failed";
    header('Location: data-list.php?status=failed-delete');
  }
}
?>