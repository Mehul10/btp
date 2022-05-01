<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LEAVE MANAGEMENT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="Home.html"><img src="assets/img/bus%20logo%201.png" class="img-fluid" style="margin-right: 20px;"><span>LEAVE MANAGEMENT PORTAl</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
           <ul>
           <li><div class="logo-image">
             <img src="assets/img/home%20icon.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 25px;">
       </div> <a class="active " href="Home.html" style="margin-left: -10px;">Home</a></li>&nbsp;
           <li><div class="logo-image">
             <img src="assets/img/booking.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 41px;">
       </div> <a href="Book_bus.html" style="margin-left: -10px;">Apply Leave</a></li>
          <li><div class="logo-image">
             <img src="assets/img/past%20booking.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 45px;">
       </div> <a href="Past_bookings.html" style="margin-left: -10px;">Leave Status</a></li>
          <li><div class="logo-image">
             <img src="assets/img/schedule.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 50px;">
       </div> <a href="View_schedule.html" style="margin-left: -10px;">Leave History</a></li>
           <li><div class="logo-image">
             <img src="assets/img/send%20request.png" class="img-fluid" style="width: 30px;height: 30px; margin-top: 20px; margin-left: 52px;">
       </div> <a href="Request.html" style="margin-left: -10px;">Report Issues</a></li>
         </ul>
           
          
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Apply For Leave</h2>
          <ol>
            <li><a href="Home.html">Home</a></li>
            <li>Apply Leave</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->
    
    <form method="post" action="index.php">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email"  placeholder="Enter your email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="rollno" class="form-label">Roll Number</label>
        <input type="password" class="form-control" placeholder="Enter your Roll No." name="rollno" >
      </div>
      <div class="mb-3">
        <label for="departure" class="form-label">Departure Time</label>
        <input type="time" class="form-control" name="departure" >
      </div>
      <div class="mb-3">
        <label for="start" class="form-label">Starting Date</label>
        <input type="date" class="form-control" name="start" >
      </div>
      <div class="mb-3">
        <label for="end" class="form-label">Ending Date</label>
        <input type="date" class="form-control" name="end" >
      </div>
      <div class="mb-3">
        <label for="place" class="form-label">Landing Place</label>
        <input type="text" class="form-control" name="place" >
      </div>
      <div class="mb-3">
        <label for="reason" class="form-label">Reason of Leave</label>
        <input type="text" class="form-control" name="reason" >
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button class="btn btn-primary">Submit</button>
    </form>

    

    <!-- INSERT INTO `appln` (`email`, `rollno`, `departure`, `start`, `end`, `place`, `reason`, `sno`) VALUES ('19ucc137@lnmiit.ac.in', '19UCC137', '17:00:00', '2022-05-03', '2022-05-07 20:00:00', 'Delhi', 'Visiting home due to me having a complete meltdown lmao i\'m dead inside', '444444');
     -->
  </main><!-- End #main -->
    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php

    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("connection to database failed due to".mysqli_connect_error());
    }

    //echo "Successfully connected to the Database"
    $email= $_REQUEST['email'];
    $rollno= $_REQUEST['rollno'];
    $departure= $_REQUEST['departure'];
    $start= $_REQUEST['start'];
    $end= $_REQUEST['end'];
    $place= $_REQUEST['place'];
    $reason= $_REQUEST['reason'];
    $sql="INSERT INTO `leave_mgmt`.`appln` (`email`, `rollno`, `departure`, `start`, `end`, `place`, `reason`) VALUES 
    ('$email', '$rollno', '$departure', '$start', '$end', '$place', 
    '$reason');";
    echo $sql;
    if($con->query($sql)==true)
    {
        echo "Successfully Requested";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

  // phpinfo();

?>