<?php

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    // Sanitize the input using htmlspecialchars to prevent XSS
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
} else {
    $input = ''; // Initialize $input as an empty string to avoid passing null
}

// Check if 'email' exists in the POST request to avoid undefined array key warning
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Validate if the input is a valid email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Proceed with safe email processing
        echo "Email is valid!";
    } else {
        // Handle invalid email input
        echo "Invalid email format!";
    }
} else {
    echo "No email input received."; // Handle case where email is not submitted
}
    // $input = $_POST ['input'];
    // $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // //memeriksa apakah input adalah email yang valid
    // $email =$_POST['email'];
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo "Email valid: " . $email ;
    // } else {
    //     echo "Email Tidak Valid";
    // }
    
?>