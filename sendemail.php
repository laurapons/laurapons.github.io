<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gràcies per escriure! Intentaré respondre't el més aviat possible. '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'lauraponslloret@gmail.com';//replace with your email

    $body = 'Nom: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Títol: ' . $subject . "\n\n" . 'Missatge: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;