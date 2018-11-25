<title>Go Taxi - About Us</title>
<!DOCTYPE html>

<html manifest = manifest.appcache>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet">

        <style>
        .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

        </style>
    </head>
</html>

<body>
    <div id="content">

        <nav id="main-navigator">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="book_ride.php">Book Ride</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a class="active" href="about_us.php">About Us</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <!--fix picture allignment-->
        <img src = "../media/Banner.jpg" class="banner">

        <div id="content-block">
          <h1 style="font-family:sans-serif;text-align:center">Your ride booking is confirmed!</h1>
            <img class="center" src="../media/driver_info.png"/>
      </div>
        </div>

    </div>

    <script src="../scripts/about_us.js?<?php echo time(); ?>"></script>

</body>
