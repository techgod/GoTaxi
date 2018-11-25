<?php

    $name = $email = $purpose = $messages = "";
    $nameErr = $emailErr = $messagesErr = "";
    $status = "";
    $result;
    $rname = $remail = $rpurpose = $rmessages = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $purpose = $_POST["purpose"];
        $messages = $_POST["messages"];

        if(empty($name)){
            $nameErr = "Name is required";
        }
        else if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameErr = "Only letters allowed";
        }
        if(empty($email)){
            $emailErr = "Email is required";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
        }

        if(empty($messages)){
            $messagesErr = "Message is required";
        }

        if(empty($nameErr) and empty($emailErr) and empty($messagesErr) ){
            require("connect_db.php");

            $to = "sarvesh512kedia@gmail.com";
            $subject = $purpose;
            $txt = $messages;
            $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";
    
            mail($to,$subject,$txt,$headers);
        }
    }
    
    

?>