<?php   
include 'connection.php';
 $ID = $_GET['id'];
mysqli_query($connection, "DELETE FROM `imagetable` WHERE id= $ID");
 header('location:images.php');

?>