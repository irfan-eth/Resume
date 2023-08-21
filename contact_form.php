<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email-input"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "irfanarif.eth@gmail.com"; // Your email address
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request method.";
}
?>
