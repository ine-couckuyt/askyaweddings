<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $emailFrom = $_POST['email']; 
    $phone = $_POST['phone']; 
    $dateofevent = $_POST['date-of-event']; 
    $venue = $_POST['venue']; 
    $message = $_POST['message']; 

    $mailTo = "bookings@askyamusic.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>