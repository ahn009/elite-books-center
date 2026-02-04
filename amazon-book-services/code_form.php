<?php

if (isset($_POST['popup_form'])) {
	$pop_name = isset($_POST['p_name']) ? $_POST['p_name'] : "";
	
	$pop_phone = isset($_POST['p_number']) ? $_POST['p_number'] : "";
	$pop_email = isset($_POST['p_email']) ? $_POST['p_email'] : "";
	$pop_message = isset($_POST['p_message']) ? $_POST['p_message'] : "";



	$to = 'info@elitebookwriters.com';

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$subject = "Contact from Elite Book Writers";
	$message = "Contact Form.
					<table border='2'>
				    	<tr><td>Name:</td><td>" . $pop_name . "</td></tr>
						<tr><td>Phone No:</td><td>" . $pop_phone . "</td></tr>	
						<tr><td>Email:</td><td>" . $pop_email . "</td></tr>
						<tr><td>Services:</td><td>" . $pop_message . "</td></tr>					
						
					</table>";
	$message = nl2br($message);
	if (mail($to, $subject, $message, $headers)) {
		header('location:https://elitebookwriters.com/amazon-book-services/thank-you.php');
	}
}




?>;

// <!-- contact us -->
