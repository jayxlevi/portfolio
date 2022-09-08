<?php

function processForm($data){
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $formMsg = $data['message'];

    $msg = "<div style='align-content: center; color: #01434f; font-family: Arial, Helvetica, sans-serif;'>";
    $msg .= "<h2>Form submission email.</h2>";
    $msg .= "<h4>" . $firstname . "&nbsp;" . $lastname . " has sent you an email!</h4>";
    $msg .= "<p>" . $formMsg . "</p>";
    $msg .= "<p>This person submitted " . $email . " as a return email</p>";
    $msg .= "</div>";

    $to = "jay@jayperrone.com";
    $subject = "Portfolio Contact Form Submission";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: donotreply@jayperrone.com\r\n";

    mail($to, $subject, $msg, $headers);

    return true;


}//end of processForm