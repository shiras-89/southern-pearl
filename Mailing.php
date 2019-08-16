<?php

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $mailAddress = $_POST['email'];
    $contact = $_POST['telephone'];
    $comments = $_POST['comments'];
 
    $body = "<b> CUSTOMER NAME:  </b>".$fname." ".$lname. "<br>" . "<b>CUSTOMER E-MAIL:  </b>".$mailAddress. "<br>" . "<b>CONTACT NUMBER:  </b>".$contact."<br>".
            "<b>MESSAGE:  </b>". $comments;

	require_once('PHPMailer/PHPMailerAutoload.php');


		$mail = new PHPMailer();
		$mail ->isSMTP();
		$mail ->SMTPAuth = true;
		$mail ->SMTPSecure = 'ssl';
		$mail ->Host = 'smtp.gmail.com';
		$mail ->Port = '465';
		$mail ->isHTML();
		$mail ->Username = 'southernpearl524@gmail.com';
		$mail ->Password = 'Southern123';
		$mail ->SetFrom($mailAddress) ;
		$mail ->Subjact = 'Tour Booking' ;
		$mail ->Body = $body ;
		$mail ->AddAddress('southernpearl524@gmail.com');

		$mail ->Send();

   if(!$mail->Send())
   {
       echo "Booking Unsuccessful"; 
   }
   else
   {
       header("Location: mailSuccess.php ");
   }
