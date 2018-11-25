<!DOCTYPE html>
<title>Go Taxi - Contact Us!</title>

<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/style.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
        <link href="../css/contact_us.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
    </head>
</html>

<body>
    <?php
        require("form_validate.php");
    ?>
    <div id="content">

        <nav id="main-navigator">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="book_ride.php">Book Ride</a></li>
                <li><a class="active" href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>   
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <img src = "../media/Banner.jpg" class="banner">

        <div id="content-block"> <!--offers and stuff block-->
            <h1>Phone:</h1>
            <h2>6789998212</h2>
            <h1>Email</h1>
            <h2>support420@gotaxi.com</h2>
            <!--click to copy to clipboard use jquery-->
        </div>

        <div id="content-block">
            <h1>Address:</h1>
            <h2>#314 lower parel mumbai</h2>
            <!--add the googple maps api-->
        </div>
        
        <div id="content-block">
            <h1>Follow us on:</h1>
            <a href="#"><img src="../media/facebook.png"></a>
            <a href="#"><img src="../media/twitter.png"></a>
            <a href="#"><img src="../media/instagram.png"></a>
            <a href="#"><img src="../media/youtube.png"></a>
            <!--use facebook api to add like page button-->
        </div>

        <div id="content-block"> <!--offers and stuff block-->
            <h1>Send Us a Query</h1>
            <button onclick="location.href='contact_us1.php'">Go To Form</button>
            <br>
            <br>
            <br>
        </div>

    </div>

    <script src="../scripts/contact_us.js?<?php echo time(); ?>"></script>
    
</body>