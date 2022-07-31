<?php
include 'connection.php';
if(isset($_POST['button'])){
   $NAME= $_POST['Name'];
   $EMAIL= $_POST['Email'];
   $MESSAGE= $_POST['Message'];
  $query =mysqli_query($con ,"INSERT INTO `contacttable`(`id`, `name`, `email`, `message`) VALUES ('','$NAME','$EMAIL','$MESSAGE')");
  header('location:../index.php');
}
?>
