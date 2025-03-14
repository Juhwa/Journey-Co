<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid input. Please complete the form.";
        exit;
    }

    $to = "journey.co.ca@gmail.com"; // Replace with your email
    $subject = "New Contact Message from $name";
    $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>