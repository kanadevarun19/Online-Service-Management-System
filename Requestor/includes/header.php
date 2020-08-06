
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
        <a href="RequesterProfile.php" class="navbar-brand col-md-2">OSMS</a>
    </nav>
    <!-- Start Container -->
    <div class="container-fluid" style="margin-top:10px;">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Sidebar 1st Column -->
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky"> 
                    <ul class="nav flex-column newsidebar">
                        <li class="nav-item"><a href="RequesterProfile.php"  class="nav-link text-dark  <?php 
                        if(PAGE=='RequestProfile') echo 'activecolor'  ?>"><i class="fas 
                        fa-user mr-2">
                                </i>Profile</a></li>
                        <li class="nav-item"><a href="SubmitReq.php" class="nav-link text-dark  <?php 
                        if(PAGE=='SubmitRequest') echo 'activecolor'  ?>"><i class="fab fa-accessible-icon
                         mr-2">
                                </i>Submit Request</a></li>
                        <li class="nav-item"><a href="CheckStatus.php" class="nav-link text-dark    <?php 
                        if(PAGE=='Status') echo 'activecolor'  ?>"><i class="fas fa-align center
                         mr-2">
                                </i>Service Status</a></li>
                        <li class="nav-item"><a href="Requesterchangepass.php" class="nav-link text-dark    <?php 
                        if(PAGE=='ChangePassword') echo 'activecolor'  ?>"><i class="fas fa-key mr-2">
                                </i>Change Password</a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link text-dark  <?php 
                        if(PAGE=='logout') echo 'activecolor'  ?>"><i class="fas fa-sign-out-alt
                         mr-2">
                                </i>Logout</a></li>

                    </ul>

                </div>

            </nav>
            
            <!-- End Sidebar 1st Column    -->

           
      