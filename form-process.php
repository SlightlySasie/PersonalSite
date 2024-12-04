<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $onderwerp = $_POST['onderwerp'];
    $message = $_POST['subject'];

    // Your email address where you want to receive the form submissions
    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New message from: " . $naam . " - " . $onderwerp;

    // Compose the email message
    $email_content = "
        Naam: $naam\n
        E-mail: $email\n
        Onderwerp: $onderwerp\n
        Bericht:\n$message
    ";

    // Email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>