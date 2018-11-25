<?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "userquery";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if($conn){
        echo "connected";
    }
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $sql = "CREATE TABLE uq1(
            person_name VARCHAR(30), email VARCHAR(40), purpose VARCHAR(30), messages TEXT(150))";
        
        if(mysqli_query($conn, $sql)){
            echo "Database created successfully<br>";
        }
        else{
            echo "Error creating database: ". mysqli_error($conn)."<br>";
        }

        $sql = "INSERT INTO uq1 (person_name, email, purpose, messages) VALUES ('$name', '$email', '$purpose', '$messages')";
        
        if(mysqli_query($conn, $sql)){
            echo "New record created successfully"."<br>";
            $status = "Message sent! Our team will get back to you shortly<br>";
        }
        
        else{
            echo "Error creating record: ". mysqli_error($conn);
        }

        
        $sql = "SELECT * FROM uq1 WHERE person_name = '$name'";

        $result = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($result);


    }  
    
    mysqli_close($conn);

?>