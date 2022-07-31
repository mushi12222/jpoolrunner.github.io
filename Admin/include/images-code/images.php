

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Jpool Runner </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

</head>

<body>
<!--HEADER START-->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../../index.php" class="logo d-flex align-items-center"> 
             <!--IMAGE-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'logo'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                <img src=" <?php echo 'uploadedimages/'.$row['image'] ?>" width='200' height='100'>                       
                <?php  } ?>
        <span class="d-none d-lg-block pl-10">Jpool Runner<sup>RM</sup></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <!--MESSAGE-->
        <li class="nav-item dropdown" >
<a class="nav-link nav-icon" href="" data-bs-toggle="dropdown">
 <a href="../messages.php"> <i class="bi bi-chat-left-text" ></i></a>
  <!-- <span class="badge bg-success badge-number">3</span> -->
</a><!-- End Messages Icon -->
</li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         <!--PROFILE IMAGE START-->
         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'download'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                <img src=" <?php echo 'uploadedimages/'.$row['image'] ?>" class="rounded-circle">                       
                <?php  } ?>

         <!--PROFILE IMAGE END-->
         
         
          <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">Mr.Fasil</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Fasil Bhadar</h6>
              <span>Jpool Owner</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../../index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span> <form action="" method="POST"> Logout</form></span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
 
<!--HEADER END-->

 
<?php include '../slidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="C:\xampp\htdocs\jpool\Admin\index.php">Images</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   <section>
   </section>
  <form action="insert.php" method ="POST" enctype="multipart/form-data">
<label for="name">Name:</label>
<input type="text" name="name">
<label for="" >Image:</label>
<input type="file" name="image">
<label for="" >Description:</label>
<input type="text" name="des">
<button name="upload">Upload</button>
  </form> <br> <br>
  <!--TABLE START-->
  <div class="container">
  <table class="table">
    <tbody>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Images</th>
      <th scope="col">Description</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
   
    
  </thead>
  <?php
include 'connection.php';
  $query = "SELECT * FROM `imagetable` ";
  $pic= mysqli_query($connection, $query);
  while($row=mysqli_fetch_array($pic)){
  	?>
   
    <tr>
    
    <td> <?php echo $row['id']?></td>
    <td> <?php echo $row['name']?></td>
    <td> <img src=" <?php echo 'uploadedimages/'.$row['image'] ?>" width='100' height='100'></td>
    <td> <?php echo $row['des']?></td>
  <?php echo "
  <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
    <td><a href='update.php? id=$row[id]' class='btn btn-primary'>Update</a></td>
    ";?>
  </tr>
 <?php }
?>
  <tbody>
</table>


</div>
    <!--TABLE END-->

  </main><!-- End #main -->

 <?php include '../footer.php';?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body> 

</html>