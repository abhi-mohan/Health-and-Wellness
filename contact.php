<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "abhishek5489@outlook.com";
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Thank you for your message. It has been sent.";
    } else {
        http_response_code(500);
        echo "There was a problem with your submission. Please try again.";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission. Please try again.";
}
