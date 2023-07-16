<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'mousume.cse@gmail.com'; 
    $subject = 'New Contact Form Submission';
    $message_body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

    if (mail($to, $subject, $message_body)) {
        echo 'Thank you for your message! We will get back to you soon.';
    } else {
        echo 'Sorry, there was a problem sending your message. Please try again later.';
    }
}
?>