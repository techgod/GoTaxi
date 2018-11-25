<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userquery";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user = $pass = $error = $pass1 = $status = "";
    $result;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        if(isset($_POST['username'])){
            $user = $_POST['username'];
        }
        if(isset($_POST['password'])){
            $pass = $_POST['password'];
        }
        if(isset($_POST['password1'])){
            $pass1 = $_POST['password1'];
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

        $sql = "SELECT * FROM logintb WHERE username = '$user'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);

        if($rows==1 && $pass == $pass1){
            $sql = "UPDATE logintb SET pass = '$pass' WHERE username = '$user'";
            $result = mysqli_query($conn, $sql);
            $status = "Password updates succesfully";
        }
        else{
            $error = "Invalid username or the passwords do not match";
        }

        mysqli_close($conn); 
    }    

?>