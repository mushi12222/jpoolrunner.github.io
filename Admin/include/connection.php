<?php
$connection = mysqli_connect("localhost" ,"root" ,"" ,"jpool");
if($connection){
}
else {
    echo "Not Connected";
}


if (isset($_POST['button'])) {
    // $query = "SELECT * FROM `adminlogin`  WHERE 'username' = '$_POST[uname]' AND
     // 'password' = '$_POST[pswd]'";
     $query= "SELECT * FROM `logintable` WHERE `username` ='$_POST[uname]' AND `password`='$_POST[pswd]'";
     $result=mysqli_query($connection, $query);
   //print_r(mysqli_num_rows($result));
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION['AdminLoginId']=$_POST['uname'];
     header("location:../index.php");
    // printf($_SESSION['AdminLoginId']);
     #echo "<script> alert('Successfully Login!') </script>";
     
    }
     else
    {
      echo "<script>alert('Invalid Username and Password') </script>";
    }
  }




?>