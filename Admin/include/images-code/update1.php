<?php
include 'connection.php';
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME= $_POST['name'];
    $DESCRIPTION = $_POST['des'];
    $ff=$_POST['image'];
    $IMAGE= $_FILES['image'];
   $img_loc= $_FILES['image']['tmp_name'];
   $img_name= $_FILES['image']['name'];
   
   $img_desc= "uploadedimages/".$img_name;
   move_uploaded_file($img_loc, 'uploadedimages/'.$img_name);
    mysqli_query($connection , "UPDATE `imagetable` SET `name`='$NAME',`image`='$ff',`des`='$DESCRIPTION' WHERE id = $ID");
//    printf("UPDATE `imagetable` SET `name`='new',`image`='$ff' WHERE id = $ID");
//    printf($ff);
header('location:images.php');
}
?>