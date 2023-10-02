<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'monirbd.me@gmail.com';

    // Set headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Compose the email message
    $email_message = "
    <html>
    <body>
        <h2>Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // If the form was not submitted, redirect to the form page
    header("Location: contact-us.php");
}
?>
