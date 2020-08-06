
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-danger p-0 shadow ">
        <a href="dashboard.php" class="navbar-brand col-md-2">OSMS</a>
    </nav>

    <!-- Start Container -->
    <div class="container-fluid " style="margin-top:10px;">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Sidebar 1st Column -->
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column newsidebar">
                        <li class="nav-item"><a href="dashboard.php" class="nav-link text-dark  <?php 
                        if(PAGE=='dashboard') echo 'activecolor';  ?>"><i class="fas 
                        fa-tachometer-alt mr-2">
                                </i>Dashboard</a></li>
                        <li class="nav-item"><a href="work.php" class="nav-link text-dark  <?php 
                        if(PAGE=='work') echo 'activecolor';  ?>"><i class="fab fa-accessible-icon
                         mr-2">
                                </i>Work Order</a></li>
                        <li class="nav-item"><a href="request.php" class="nav-link text-dark    <?php 
                        if(PAGE=='request') echo 'activecolor';  ?>"><i class="fas fa-align-center"></i>Requests</a>
                        </li>

                        <li class="nav-item"><a href="assets.php" class="nav-link text-dark    <?php 
                        if(PAGE=='assets') echo 'activecolor';  ?>"><i class="fas fa-hourglass-half mr-2"></i>Assets</a>
                        </li>

                        <li class="nav-item"><a href="technician.php" class="nav-link text-dark    <?php 
                        if(PAGE=='technician') echo 'activecolor';  ?>"><i
                                    class="fab fa-cloudversify mr-2"></i>Technician</a></li>

                        <li class="nav-item"><a href="requester.php" class="nav-link text-dark    <?php 
                        if(PAGE=='requester') echo 'activecolor';  ?>"><i class="fas fa-user
                         mr-2"></i>Requester</a></li>

                        <li class="nav-item"><a href="soldproductreport.php" class="nav-link text-dark    <?php 
                        if(PAGE=='sellreport') echo 'activecolor';  ?>"><i class="fas fa-table 
                         mr-2"></i>Sell Report</a></li>

                        <li class="nav-item"><a href="workreport.php" class="nav-link text-dark    <?php 
                        if(PAGE=='workreport') echo 'activecolor' ; ?>"><i class="fas fa-table 
                         mr-2"></i>Work Report</a></li>



                        <li class="nav-item"><a href="changepass.php" class="nav-link text-dark    <?php 
                        if(PAGE=='changepass') echo 'activecolor';  ?>"><i class="fas fa-key mr-2">
                                </i>Change Password</a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link text-dark  <?php 
                        if(PAGE=='logout') echo 'activecolor'  ?>"><i class="fas fa-sign-out-alt
                         mr-2">
                                </i>Logout</a></li>

                    </ul>

                </div>

            </nav>

            <!-- End Sidebar 1st Column    -->
