<?php

if (isset($_POST['popup_form'])) {
	$pop_name = isset($_POST['p_name']) ? $_POST['p_name'] : "";
	$pop_email = isset($_POST['p_email']) ? $_POST['p_email'] : "";
	$pop_phone = isset($_POST['p_number']) ? $_POST['p_number'] : "";
	$pop_message = isset($_POST['p_message']) ? $_POST['p_message'] : "";



	$to = 'info@elitebookwriters.com';

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$subject = "Contact from Elite Book Writers";
	$message = "Contact Form.
					<table border='2'>
				    	<tr><td>Name:</td><td>" . $pop_name . "</td></tr>
						<tr><td>Email:</td><td>" . $pop_email . "</td></tr>
						<tr><td>Phone No:</td><td>" . $pop_phone . "</td></tr>	
						<tr><td>Services:</td><td>" . $pop_message . "</td></tr>					
						
					</table>";
	$message = nl2br($message);
	if (mail($to, $subject, $message, $headers)) {
		header('location:https://elitebookwriters.com/thank-you.php');
	}
}



if (isset($_POST['head_sub'])) {
	$head_publishser = isset($_POST['publish_services']) ? $_POST['publish_services'] : "";
	$head_yesser = isset($_POST['yes_services']) ? $_POST['yes_services'] : "";
	$head_bookser = isset($_POST['book_services']) ? $_POST['book_services'] : "";
	$head_publishing = isset($_POST['book_publishing']) ? $_POST['book_publishing'] : "";
	$head_Writing = isset($_POST['book_Writing']) ? $_POST['book_Writing'] : "";
	$head_ghostwrit = isset($_POST['ghost_writing']) ? $_POST['ghost_writing'] : "";
	$head_editing = isset($_POST['editing']) ? $_POST['editing'] : "";
	$head_cover = isset($_POST['cover_design']) ? $_POST['cover_design'] : "";
	$head_illustration = isset($_POST['illustration']) ? $_POST['illustration'] : "";
	$head_name = isset($_POST['top_name']) ? $_POST['top_name'] : "";
	$head_number = isset($_POST['top_number']) ? $_POST['top_number'] : "";
	$head_email = isset($_POST['top_email']) ? $_POST['top_email'] : "";




	$to = 'info@elitebookwriters.com';

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$subject = "Contact from Elite Book Writers";
	$message = "Contact Form.
					<table border='2'>
				    	<tr><td>Publishing services:</td><td>" . $head_publishser . "</td></tr>
						<tr><td>published before:</td><td>" . $head_yesser . "</td></tr>
						<tr><td>service looking-1:</td><td>" . $head_bookser . "</td></tr>	
						<tr><td>service looking-2:</td><td>" . $head_publishing . "</td></tr>	
						<tr><td>service looking-3:</td><td>" . $head_Writing . "</td></tr>	
						<tr><td>service looking-4:</td><td>" . $head_ghostwrit . "</td></tr>	
						<tr><td>service looking-5:</td><td>" . $head_editing . "</td></tr>		
							<tr><td>service looking-6:</td><td>" . $head_cover . "</td></tr>
							<tr><td>service looking-7:</td><td>" . $head_illustration . "</td></tr>
							<tr><td>name:</td><td>" . $head_name . "</td></tr>
							
							<tr><td>Number:</td><td>" . $head_number . "</td></tr>
							<tr><td>Email:</td><td>" . $head_email . "</td></tr>
							
					</table>";
	$message = nl2br($message);
	if (mail($to, $subject, $message, $headers)) {
		header('location:https://elitebookwriters.com/thank-you.php');
	}
}


// <!-- contact us -->
