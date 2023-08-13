<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Validate inputs
    if (empty($fullname) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are mandatory.";
    } else {
        // Database connection
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "Shasha@123&";
        $db_name = "ecom";
        
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Save form data to database
        $ip = $_SERVER["REMOTE_ADDR"];
        $timestamp = date("Y-m-d H:i:s");
        
        $sql = "INSERT INTO contact_form (fullname, phone, email, subject, message, ip_address, submission_time) VALUES ('$fullname', '$phone', '$email', '$subject', '$message', '$ip', '$timestamp')";
        
        if ($conn->query($sql) === TRUE) {
            // Send email notification
            $to = "test@techsolvitservice.com";
            $subject = "New Contact Form Submission";
            $message = "A new contact form has been submitted:\n\nFull Name: $fullname\nPhone Number: $phone\nEmail: $email\nSubject: $subject\nMessage: $message";
            $headers = "From: webmaster@example.com";
            
            mail($to, $subject, $message, $headers);
            
            echo "Form submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
?>