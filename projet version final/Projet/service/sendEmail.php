<?php 
// Assign Variables
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject= filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Creating Array of Errors
    $formErrors = array();
    if (strlen($name) <= 3) {
        $formErrors[] = 'Le nom utilisateur doit être supérieur à <strong> 3 </ strong> caractères';
    }
    if (strlen($msg) < 10) {
        $formErrors[] = 'Message ne peut être inférieur à <strong> 10 </ strong> Caractères';
    }
    // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
    $headers = 'From: ' . $email . '\r\n';
    $myEmail = 'karimihassan00@gmail.com';
    $message=$name . '\r\n';
    $message.=$msg;
    if (empty($formErrors)) {
        mail($myEmail, $subject, $message, $headers);
        header('location:../contact.php');
    }
?>