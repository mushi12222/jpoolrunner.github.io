
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>jPOOL Runner</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jpool.css">
    <link rel="kstylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php    include 'include/header.php';?>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Poolrunner<strong>™</strong></h1>
                        <p>The <strong>PoolRunner™</strong> is a performance testing simulation tool for Thread Pool System. It is based on<i> client-server architecture.</i> </p>
                        <a href="#about" class="main-button-slider">Find Out More</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                     <div class ="hight=200px width=100">  
                         <!--IMAGE-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'jpool'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"width='300' height='400'>                         
                <?php  } ?>
                        
                     </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
     <!--INSTALLATION START-->
     <section class="section" id="about">   
     <div class="container">
    <h3 class="text-center">How To Use</h3>
    <hr width="25%">
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <!--IMAGE STEP1-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step1'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 19";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?>

                </p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>
<!--second step-->
<hr width="25%">
<div class="container">
    
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <!--IMAGE STEP1-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step2'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 20";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?>
</p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>
<!--Third step-->
<hr width="25%">
<div class="container">
    
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
             <!--IMAGE STEP3-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step3'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 21";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?>
                </p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>
<!--Fourth step-->
<hr width="25%">
<div class="container">
    
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
           <!--IMAGE STEP4-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step4'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 22";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?> 
                </p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>
<!--Fifth step-->
<hr width="25%">
<div class="container">
    
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <!--IMAGE STEP5-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step5'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 23";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?> 
                </p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>
<!--Sixth step-->
<hr width="25%">
<div class="container">
    
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <!--IMAGE STEP6-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'step6'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
 </div>
       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE id = 24";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                   <b><?php echo $row['des'] ?></b>
              
                
                <?php  } ?>
                </p>
                <div class=" mt-3">
                <a href="seemore.php" class="main-button" > Find More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hr"></div>
        </div>
    </div>
</div>

</section>


     <!--INSTALLATION END-->
  
    <!-- ***** Footer Start ***** -->
  <?php include 'include/footer.php';?>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>