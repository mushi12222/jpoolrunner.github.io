<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP CDN-->
     <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!--PHP CODE START-->
   <?php
   include 'connection.php';
   $ID = $_GET['id'];
   $record=mysqli_query($connection, "SELECT * FROM `imagetable` WHERE id= $ID");
   $data = mysqli_fetch_array($record);
   
   ?>

    <!--PHP CODE END-->



    <center>
<form action="update1.php" method ="POST" class ="mt-5">
<label for="name">Name:</label>
<input type="text" name="name" value=" <?php  echo $data['name'] ?>"> <br> <br>
 <td> <input type="file" name="image" value=" <?php  echo $data['image'] ?>"> <br> <img src='<?php  echo $data['image'] ?>' width='100px' hight ='50px'></td><br>
<input type="hidden" name="Id" value="<?php  echo $data['id'] ?>">
<label for="name">Description:</label>
<input type="text" name="des" value=" <?php  echo $data['des'] ?>"> <br> <br>
 <button name="update" class="btn btn-primary">Update</button>
 <?php  printf($data['image']);  ?>
  </form>  
  </center>
</body>
</html>