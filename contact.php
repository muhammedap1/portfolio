<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "ahmedrithas@email.com"; 
    $headers = "From: $email" . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; 
    } else {
        echo "error"; 
    }
}
?>
