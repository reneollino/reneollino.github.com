<?php 

	$email    = htmlentities($_POST['email']);
	$message  = htmlentities($_POST['message']);
	$subject  = "Mail from Awaken Website";
	$mailto   = 'rene.ollino@gmail.com';
	$headers  = 'Mime-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $name <$email>\r\n";
	$headers .= "Reply-to: $email\r\n";

	if (isset($_POST['submit'])) {	
		# might need to do isset check for each var seperetly :( ?
		#if(isset($email, $subject, $message, $name)) {
			if (mail($mailto, $subject, $message, $headers)) { 
				header("Location:../about.php?msg=success");
			} else { 
				header("Location:../about.php?msg=Something%20went%20wrong");
			}		
		#} else {
		#	header("Location:../contact.php?msg=You%20forgot%20something");
		#}
    } else {
            header("Location:../about.php?msg=Something%20went%20wrong");
    }

?>