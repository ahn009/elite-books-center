<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if (isset($_POST['send_reserve_req'])) {
	$pop_name = isset($_POST['name']) ? $_POST['name'] : "";
	$pop_email = isset($_POST['email']) ? $_POST['email'] : "";
	$pop_phone = isset($_POST['phone']) ? $_POST['phone'] : "";
	
	$pop_message = isset($_POST['message']) ? $_POST['message'] : "";



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

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = true;
    $mail->Username = "info@elitebookwriters.com"; //enter you email address
    $mail->Password = 'Hysshaikhani@321'; //enter you email password
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom("info@elitebookwriters.com", "Elite Book Writers");
    $mail->addAddress("info@elitebookwriters.com"); //enter you email address
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        header('location:https://elitebookwriters.com/book-publishing/thank-you.html');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
/*    ***********************  start  ***********************      */

/*    ***********************  End  ***********************      */
?>