<?php

$okMessage = 'Successfully submitted - we will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

try{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $nombre = $_POST['name'];
    $_message = $_POST['message'];
    $to = "uzziel.bautista@bapstertc.com";
    $subject = "Email from bapstertc.com";
    $message = "Name: ".$nombre."\n";
    $message .= "Message: ".$_message;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "success";
}
catch(Exception $e){
        echo "danger";
      }
?>
