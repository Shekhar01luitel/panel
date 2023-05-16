<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'shekhar01luitel@gmail.com';
    $headers = "From: ".$email;

    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($to, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>