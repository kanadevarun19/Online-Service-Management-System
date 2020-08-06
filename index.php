<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font    -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>OSMS</title>
</head>

<body>
    <!-- Start Navbar  -->
    <nav class="navbar navbar-expand-md navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">
            Customer's Happiness Is Our Aim
        </span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requestor/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>

            </ul>

        </div>

    </nav>
    <!-- End Navbar -->

    <!-- Start Header Jumbotron -->
    <header class="jumbotron back-image" style="background-image:url(images/banner1.jpg);">

        <div class="myClass myHeading ">
            <h1 class="text-uppercase text-danger font-weight-bold ">Welcome To OSMS</h1>
            <p class="font-italic">Customer's Happiness is Our Aim</p>
            <a href="Requestor/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">SignUp</a>

        </div>

    </header>

    <!-- End Jumbotron -->

    <!-- Start Introduction Section Container -->
    <div class="container" style="margin-top:0px;">
        <div class="jumbotron">
            <h3 class="text-center">OSMS Services</h3>
            <p>Service management in the manufacturing context, is integrated into supply chain management as the
                intersection between the actual sales and the customer point of view. The aim of high performance
                service management is to optimize the service-intensive supply chains, which are usually more complex
                than the typical finished-goods supply chain. Most service-intensive supply chains require larger
                inventories and tighter integration with field service and third parties. They also must accommodate
                inconsistent and uncertain demand by establishing more advanced information and product flows. Moreover,
                all processes must be coordinated across numerous service locations with large numbers of parts and
                multiple levels in the supply chain.
            </p>
        </div>
    </div>
    <!-- End Introduction Section Container -->

    <!-- Start Services Section  -->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>
    <!-- End Services Section -->

    <!-- Start Registration Form -->
    <?php include('UserRegistration.php') ?>
    <!-- End Registration Form -->
    <!-- Start Happy Customers -->

    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <!-- Start 1st Column -->
                <div class="col-lg-3 col-md-6 ">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/varun2.jpg" class="img-fluid" alt="varun" style="border-radius:120px;">
                            <h4 class="card-title">Varun Kanade</h4>
                            <p class="card-text">The pursuit of happiness is real. We all want to be happy, right?
                                After all, life’s better when we’re happy, healthy, and successful.
                                </p>
                        </div>
                    </div>
                </div>
                <!-- End 1st Column -->

                 <!-- Start 2nd Column -->
                 <div class="col-lg-3 col-md-6 ">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/abhishek.jpg" class="img-fluid" alt="varun" style="border-radius:120px;">
                            <h4 class="card-title">Abhishek Pawar</h4>
                            <p class="card-text">The pursuit of happiness is real. We all want to be happy, right?
                                After all, life’s better when we’re happy, healthy, and successful.
                                Please enjoy these feel-good quotes about happiness.</p>
                        </div>
                    </div>
                </div>
                <!-- End 2nd Column -->

                 <!-- Start 3rd Column -->
                 <div class="col-lg-3 col-md-6 ">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/sarang1.jpg" class="img-fluid" alt="varun" style="border-radius:120px;">
                            <h4 class="card-title">Sarang Phasale</h4>
                            <p class="card-text">The pursuit of happiness is real. We all want to be happy, right?
                                After all, life’s better when we’re happy, healthy, and successful.
                                </p>
                        </div>
                    </div>
                </div>
                <!-- End 3rd Column -->
                 <!-- Start 4th Column -->
                 <div class="col-lg-3 col-md-6 ">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/prathamesh1.jpg" class="img-fluid " alt="prathamesh" style="border-radius:120px;">
                            <h4 class="card-title">Prathamesh Suryawanshi</h4>
                            <p class="card-text">The pursuit of happiness is real. We all want to be happy, right?
                                After all, life’s better when we’re happy, healthy
                                </p>
                        </div>
                    </div>
                </div>
                <!-- End 4th Column -->
                
            </div>
        </div>
    </div>
    <!-- End Happy Customers -->

    <!-- Start Contact Us -->
    <div class="container" id="Contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- Start 1st Column -->
              <?php include('contactform.php') ?>
            <!-- End 1st Column -->
            <!-- Start 2nd Column -->
                <div class="col-md-4 text-center">
                    <strong>Headquarter : </strong><br>
                    OSMS pvt ltd,<br>
                    Kondhwa,Pune <br>
                    Maharashtra <br>
                    Phone: +00000000000 <br>
                    <a href="#" target="_blank">www.osms.com</a><br>
                    <br><br>
                    <strong>Branch : </strong><br>
                    OSMS pvt ltd,<br>
                    New Kondhwa,Delhi <br>
                    Delhi <br>
                    Phone: +00000000000 <br>
                    <a href="#" target="_blank">www.osms.com</a><br>
                    <br><br>
                </div>
            <!-- End 2nd Column -->
        </div>
    </div>
    <!-- End Contact Us -->

    <!-- Start Footer -->

    <footer class="container-fluid mt-5 bg-dark text-white">
        <div class="container ">
            <div class="row py-3">
                <!-- Start 1st Column -->
                <div class="col-md-6">
                <span class="pr-2">Follow Us : </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>

                </div>
                <!-- End 1st Column -->
                <!-- Start 2nd Column -->
                    <div class="col-md-6 text-right">
                        <small>Designed By Varun Kanade &copy;2020</small>
                        <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                    </div>
                <!-- End 2nd Column -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- JavaScript  -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>


</body>

</html>