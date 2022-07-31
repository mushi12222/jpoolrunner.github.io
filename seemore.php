
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
 <!--INSTALLATION START-->
 <section class="section" id="about">   
     <div class="container">
    <h3 class="text-center">How To Load TPS</h3>
    <hr width="25%">
    <div class="row">
        <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                              <!--IMAGE-->
                         <!----->
                         <?php
                        include 'C:\xampp\htdocs\jpool\Admin\include\images-code\connection.php';
                 $query = "SELECT * FROM `imagetable` WHERE name = 'blackbanner'";
                 $pic= mysqli_query($connection, $query);
                 while($row=mysqli_fetch_array($pic)){
                    ?>
              
                <img src=" <?php echo 'Admin/include/images-code/uploadedimages/'.$row['image'] ?>"  class=" img-thumbnail rounded-lg img-fluid d-block mx-auto" width='500' height='350'>                         
                <?php  } ?><br><br>
        </div>

       
        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
            <div class="left-heading">
               
            </div>
            <div class="left-text mb-2">
                <p>
                PoolRunner is an extensible software and, its functionality can be extended by loading new 
                TPS in form of jar file at run time without changing the code base of PoolRunner. 
                PoolRunner uses Service Provider Interface (SPI) to provide an extensibility mechanism
                 <b> 1. Put PoolRunner.jar file in your class your class path.</b><br>
                 <b> 2.	Import com.jpoolrunner.spi. TPSInterface in the main class of your TPS</b><br>
                 <b> 3.	Extend TPSInterface class (by the main class of your TPS) and provide the 
                     implementation of following 4 abstract methods.</b><br>
                      <li>	<b> o public abstract</b> 
                         void submitRequest(Runnable request);//ThreadPoolServer
                          System will call it to submit requests ie when a job arrives it is submitted to strategy by this
                          method so u can say that it is entering in ur system...ie in ur strategy</li>
                          <br>
                          <li>	<b> o	public abstract</b> <br> 
                          void initAllConsumers();//ThreadPoolServer System will call it to 
                          initialize threads that exists in the thread pool of your TPS</li>
                          <br>
                          <li>	<b> o	public abstract void</b> <br> 
                           shutDownPool();//to stop
                           and kill all threads in the pool</li>
                          <br>
                          <li>	<b> o public abstract int</b> <br> 
                           getWorkerThreadPoolSize();//It must return the size of dynamic thread pool 
                          which is tuned by u...This method is periodically called by </li>
                          <br>
                          <p>ThreadPoolServerSystem's timer which is already embedded and running in the background..u dnt need 
                              to worry about it...just return ur Worker pool size from this method.</p>
                 <b> 4.	Also just pass the finished task to sendResponse(Runnable) which is a non-abstract method that must be called by your TPS when a Cpu or I/O bound Task is finished. Just pass the finished 
                     Task to this method so that server can send finished Task back to the client</b><br>
                 <b> 5.	Run PoolRunnerProject.jar file. This will display a dialog box as follows. Click on LOAD STRATEGY button. Browse the jar file of your TPS and click ok.
                      Your TPS has been added in PoolRunner. </b><br>
                </p>
              
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