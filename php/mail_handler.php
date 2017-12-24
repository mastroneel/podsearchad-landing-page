<?php
if(isset($_POST['submit'])){
    $to = "laurenmastroni@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $firstname . $lastname . " wrote the following:" . "\n\n" . "Name: " . $firstname . " " . $lastname . "\n\n" . "Company name: " . $company . "\n\n" . "From: " . $from . "\n\n" . "Message: " . $_POST['message'];
    $message2 = "Here is a copy of your message " . "\n\n" . "Name: " . $firstname . " " .  $lastname . "\n\n" . "Company name: " . $company . "\n\n" . "From: " . $from . "\n\n" . "Message: " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
