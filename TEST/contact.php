<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nosirov.normurod@gmail.com";  // Your email address
    $subject = "New Message from ARTUS Logistics Website";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $email\r\nReply-To: $email\r\n";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Message sent successfully!</h2><a href='index.html'>Back to site</a>";
    } else {
        echo "<h2>Message failed to send.</h2><a href='index.html'>Back to site</a>";
    }
} else {
    header("Location: index.html");
    exit();
}
?> 