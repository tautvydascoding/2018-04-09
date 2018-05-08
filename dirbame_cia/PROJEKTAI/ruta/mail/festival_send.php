<?php

// Check for empty fields
// if(empty($_POST['name'])      ||
//    empty($_POST['email'])     ||
//    empty($_POST['topic'])     ||
//    empty($_POST['message'])   ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
//    echo "No arguments Provided!";
//    return false;
//    }

 $fesName = $_POST['fesName'];
 $fesCountry = $_POST['fesCountry'];
 $fesCity = $_POST['fesCity'];
 $fesDescr = $_POST['fesDescr'];

// Create the email and send the message
$to = 'ruta.sipkauskaite@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New festival submission on whereisfestival.com";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFestival name: $fesName\n\nCountry: $fesCountry\n\nCity: $fesCity\n\nDescription:\n$fesDescr";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: ruta.sipkauskaite@gmail.com";
mail($to,$email_subject,$email_body,$headers);

if (mail($to,$email_subject,$email_body,$headers)){
    return true;
}else{
    return false;
}

 ?>
