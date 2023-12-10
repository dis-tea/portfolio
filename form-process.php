<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $message = $_POST['subject'];

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Reason: $reason\n";
    $email_content .= "Message:\n$message";

    // Set up email headers
    $headers = "From: $email";

    // Send the email
    mail('aam142@duke.edu', 'Contact Form Submission', $email_content, $headers);

    // Redirect to a thank you page or display a thank you message
    header('Location: thank_you.html');
    exit;
}

?>