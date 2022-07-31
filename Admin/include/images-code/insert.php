<?php
 include 'connection.php';
 if(isset($_POST['upload'])){
 	$NAME= $_POST['name'];
	 $DESCRIPTION= $_POST['des'];
 	$IMAGE = $_FILES['image'];
 	print_r($IMAGE);
 	$img_loc = $_FILES['image']['tmp_name'];
 	$img_name= $_FILES['image']['name'];
 	 // $img_desc= 'uploadedimg/'.$img_loc;
 	
 	$query = "INSERT INTO `imagetable`(`id`, `name`, `image`, `des`) VALUES ('','$NAME','$img_name','$DESCRIPTION')";
 	 move_uploaded_file($img_loc, 'uploadedimages/'.$img_name);
 	mysqli_query($connection, $query);
     header('location:images.php');
}
?>