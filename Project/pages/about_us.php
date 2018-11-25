<title>Go Taxi - About Us</title>
<!DOCTYPE html>

<html manifest = manifest.appcache>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/style.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
    </head>
</html>

<body>
    <div id="content">

        <nav id="main-navigator">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="book_ride.php">Book Ride</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a class="active" href="about_us.php">About Us</a></li>   
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <!--fix picture allignment-->
        <img src = "../media/Banner.jpg" class="banner">


        <div id="content-block"> <!--offers and stuff block-->
            <h1>About Us</h1>
            <p>We provide taxi service, at your convenience</p>
            <p>We have a fleet of 60 thousand cars, operational over 50 cities in india</p>
        </div>

        <div id="content-block"> <!--offers and stuff block-->
            <h1>The Team Behind The Website</h1>
            <canvas id="myCanvas" width="1500" height="200">
                
            </canvas>
        </div>
        
    </div>

    <script src="../scripts/about_us.js?<?php echo time(); ?>"></script>
    
</body>