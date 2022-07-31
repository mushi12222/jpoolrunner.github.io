<?php session_start();
 ?>
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


    <!-- ***** About Section Start ***** -->
    <section class="section" id="about">   
     <div class="container">
    <h3 class="text-center">About</h3>
    <hr width="25%">
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                      <!--IMAGE ABOUT-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'pic1'";
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
                 $query = "SELECT * FROM `imagetable` WHERE id = 17";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
                    <p><?php echo $row['des'] ?></p>
              
                
                <?php  } ?>


                    <!-- Simple and Advance GUI
                    Can be used on local system, as well as on network
                    Can perform load and performance testing
                    Platform independent
                    A separate Jfreechart Graph for each performance metric
                    Test plan is generated through simple GUI
                    Highly extensible
                    Realistic workload generation:
                        Static and Dynamic workload with different intensities.
                    Realistic load generation:
                        Load can be generated through Poisson, Guassian, Uniform, Heavy-Tail, 
                        Constant and user defined manual distributions.  -->
                </p>
                <div class=" mt-3">
                <a href="#about2" class="main-button" >Discover More</a>
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

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div id="features" class="left-heading">
                         <h5>Features</h5>
                    </div>
                    <p>Our Software have Market Demnading feather.</p>
                    <ul>
                        <li>
                            <img src="assets/images/about-icon-01.png" height="50" alt="">
                            <div class="text">
                                <h6>Simple and Advance GUI</h6>
                               
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-02.png" height="50" alt="">
                            <div class="text">
                                <h6>Can be used on local system, as well as on network</h6>
                                
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-03.png" height="50" alt="">
                            <div class="text">
                                <h6>Can perform load and performance testing</h6>
                               
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-01.png" alt="" height="50">
                            <div class="text">
                                <h6>Platform independent</h6>
                               
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-02.png" alt="" height="50">
                            <div class="text">
                                <h6>A separate Jfreechart Graph for each performance metric</h6>
                                
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-03.png" alt="" height="50">
                            <div class="text">
                                <h6>Realistic load generation:
                                </h6>
                                <p> Load can be generated through Poisson, Guassian, Uniform, Heavy-Tail, Constant and user defined manual distributions.</p>
                               
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                           <!--IMAGE FEATURE-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'feature'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?>
                </div>
            </div>
        </div>
    </section>
    
  
    <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                    
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.2233143518997!2d73.24801781470966!3d34.421082305651055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de17bf878d1177%3A0x182b25a42224b791!2sHazara%20University%20Mansehra!5e0!3m2!1sen!2s!4v1649143327149!5m2!1sen!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <!--REQUIRED FIORM-->
                        <?php include 'include/contactform.php';?>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
      
    <!-- ***** Contact Us End ***** -->

    
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