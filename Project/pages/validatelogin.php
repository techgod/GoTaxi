<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userquery";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user = $pass = $error = "";
    $result;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['username'])){
            $user = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $pass = $_POST['password'];
        }
        /*
        $sql = "CREATE TABLE logintb(
            username VARCHAR(30), pass VARCHAR(40))";
        
        if(mysqli_query($conn, $sql)){
            echo "Database created successfully<br>";
        }
        else{
            echo "Error creating database: ". mysqli_error($conn)."<br>";
        }
        */

        $sql = "SELECT * FROM logintb WHERE pass = '$pass' AND username = '$user'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);

        if($rows==1){
            header("Location: book_ride.php"); //redirecting to other page
        }
        else{
            $error = "username and password is invalid";

        }

        mysqli_close($conn); 
    }    

?>