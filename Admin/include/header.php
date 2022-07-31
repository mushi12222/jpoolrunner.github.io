  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../index.php" class="logo d-flex align-items-center"> 
             <!--IMAGE-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'logo'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                <img src=" <?php echo 'include/images-code/uploadedimages/'.$row['image'] ?>" width='200' height='100'>                       
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
 <a href="include/messages.php"> <i class="bi bi-chat-left-text" ></i></a>
  <!-- <span class="badge bg-success badge-number">3</span> -->
</a><!-- End Messages Icon -->
</li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="../index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span> <form action="" method="POST"> Logout</form></span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
 