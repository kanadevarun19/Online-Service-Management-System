<?php

    // $serverName="127.0.0.1:3307";
    // $username="root";
    // $password="";
    // $database="newosms";
    $serverName="sql309.epizy.com";
    $username="epiz_26267542";
    $password="e7z83up4uiMW";
    $database="epiz_26267542_osms";
    
  

    $con=mysqli_connect($serverName,$username,$password,$database);

    if(!$con){
        die("Connection Failed");
    }
    // echo "Connected";


?>