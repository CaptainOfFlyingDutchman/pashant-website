<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

    $email_from = $email;
    $email_to = 'hello@pashant.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    if($success)
    {
        echo json_encode($status);
    }
    else{
       echo "Message not sent"; 
    }
    die;
?>