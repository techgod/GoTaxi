<title>Go Taxi - Book a Go Taxi for a GT!</title>
<!DOCTYPE html>

<html manifest = manifest.appcache>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/style.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
        <link href="../css/home.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
    </head>
</html>

<body>
    <div id="content">

        <nav id="main-navigator">
            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="book_ride.php">Book Ride</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>   
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <!--fix picture allignment-->
        <img src = "../media/Banner.jpg" class="banner">

        <div id="promovid">
            <video autoplay muted loop>
                <source src="../media/vid1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video autoplay muted loop>
                <source src="../media/vid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video autoplay muted loop>
                <source src="../media/vid3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

        <div id="content-block" class="offers">
        </div>

        <div id="content-block">
            <h1>Operational in 50 cities across India!</h1>

        </div>
        
    </div>

    <script src="../scripts/home.js?<?php echo time(); ?>"></script>
    
</body>