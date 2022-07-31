<?php   
include 'messageconf.php';
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM `contacttable` WHERE id=$ID ");
 header('location:messages.php');

?>