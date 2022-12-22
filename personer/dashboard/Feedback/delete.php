<?php 
$ID= $_GET['ID'];

include '../../common/connect.php';
 $sql ="delete from feedback
 where
 ID = '$ID'
 ";
//  die("$sql");
  mysqli_query($connect,$sql);
  mysqli_close($connect);
  header('location:index.php');
 ?>