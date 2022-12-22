<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
include_once 'common/connect.php';
$sql="
  insert into feedback(name,email,subject,message)
             values ('$name', '$email','$subject','$message')
";
// die ("$sql");
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
?>