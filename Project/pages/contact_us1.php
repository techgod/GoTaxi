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
            <h1>Send Us a Query</h1>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label>Name:</label>
                <span id="error">* <?php echo $nameErr;?></span>
                <br>
                <input type="text" name="name" placeholder="First Name"/>
                <br>
                <br>    
                <label>Email ID:</label>
                <span id="error">* <?php echo $emailErr;?></span>
                <br>
                <input type="text" name="email" placeholder="Email" id = "email"/>
                <br>
                <br>
                <label>Subject</label> 
                <br>
                <select name="purpose">
                    <option>Career Opportunity</option>
                    <option>Internship</option>
                    <option>User Grievances</option>
                    <option>Other</option>
                </select>
                <br>
                <br>
                <label>Message:</label>
                <span id="error">* <?php echo $messagesErr;?></span>
                <br>
                <textarea type="text" name="messages" placeholder="Type Your Message"></textarea>
                <br>
                <br>
                <input type="submit" name="submit" value="Send Message">
                <input type="reset" value="Clear All Fields">
                <br>
                <br>

                <p id="form-status-disp">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "<b>Your Input:<b>";
                        echo "<br>";
                        echo $result["person_name"];
                        echo "<br>";
                        echo $result["email"];
                        echo "<br>";
                        echo $result["purpose"];
                        echo "<br>";
                        echo $result["messages"];
                        echo "<br>";
                        echo $status;
                        }
                    ?>
                </p>
            </form>

        </div>

    </div>

    
</body>