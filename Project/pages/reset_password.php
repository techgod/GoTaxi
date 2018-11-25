<title>Go Taxi - Login or Sign Up</title>
<!DOCTYPE html>

<?php
    require("changelogin.php");
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../css/style.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
        <link href="../css/login.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
    </head>
</html>

<body>
    <div id="content">

        <nav id="main-navigator">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="book_ride.php">Book Ride</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>   
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <!--fix picture allignment-->
        <img src = "../media/Banner.jpg" class="banner">


        <div id="content-block"> <!--offers and stuff block-->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <br>
                <label for="username">User Name</label></td>
                <br>
                <input type="text" name="username" id="username"></td>
                <br>
                <br>
                <label for="password">New Password</label></td>
                <br>
                <input type="password" name="password" id="password"></td>
                <br>
                <br>
                <label for="password1">Confirm Password</label></td>
                <br>
                <input type="password" name="password1" id="password1"></td>
                <br>
                <br>
                <input type="submit" value="Submit"/>
                <input type="reset" value="Reset"/>
                <br>
                <br>
                <?php echo $status ?>

            </form>
        </div>
        
    </div>

    <script></script>
    
</body>