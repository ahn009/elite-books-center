<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if (isset($_POST['home-submit'])) {
    $contact_h_name = isset($_POST['h-name']) ? $_POST['h-name'] : "";
    $contact_h_email = isset($_POST['h-email']) ? $_POST['h-email'] : "";
    $contact_h_number = isset($_POST['h-phone']) ? $_POST['h-phone'] : "";
    $subject = "Contact Form";
    $message = "Contact from home page'.
    				<table border='2'>
    				    	<tr><td>Full Name:</td><td>" . $contact_h_name . "</td></tr>
    						<tr><td>Email:</td><td>" . $contact_h_email . "</td></tr>
    						<tr><td>Phone Number:</td><td>" . $contact_h_number . "</td></tr>
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
        header('location:https://elitebookwriters.com/thank-you.php');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
/*    ***********************  start  ***********************      */
if (isset($_POST['s-banner-submit'])) {
    $contact_s_banner_name = isset($_POST['s-banner-name']) ? $_POST['s-banner-name'] : "";
    $contact_s_banner_email = isset($_POST['s-banner-email']) ? $_POST['s-banner-email'] : "";
    $contact_s_banner_number = isset($_POST['s-banner-phone']) ? $_POST['s-banner-phone'] : "";
    $contact_s_banner_msg = isset($_POST['s-banner-msg']) ? $_POST['s-banner-msg'] : "";
    $subject = "Contact Form";
    $message = "Contact from Service page'.
                    <table border='2'>
                        <tr><td>Full Name:</td><td>" . $contact_s_banner_name . "</td></tr>
                        <tr><td>Email:</td><td>" . $contact_s_banner_email . "</td></tr>
                        <tr><td>Phone Number:</td><td>" . $contact_s_banner_number . "</td></tr>
                        <tr><td>Message:</td><td>" . $contact_s_banner_msg . "</td></tr>
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
        header('location:https://elitebookwriters.com/thank-you.php');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
/*    ***********************  End  ***********************      */

/*    ***********************  start  ***********************      */

if (isset($_POST['c-submit'])) {
    $contact_c_f_name = isset($_POST['c-f-name']) ? $_POST['c-f-name'] : "";
    $contact_c_l_name = isset($_POST['c-l-name']) ? $_POST['c-l-name'] : "";
    $contact_c_email = isset($_POST['c-email']) ? $_POST['c-email'] : "";
    $contact_c_number = isset($_POST['c-phone']) ? $_POST['c-phone'] : "";
    $contact_c_msg = isset($_POST['c-msg']) ? $_POST['c-msg'] : "";
    $subject = "Contact Form";
    $message = "Contact from Contact page'.
					<table border='2'>
				    	<tr><td>Full Name:</td><td>" . $contact_c_f_name . "</td></tr>
                        <tr><td>Full Name:</td><td>" . $contact_c_l_name . "</td></tr>
						<tr><td>Email:</td><td>" . $contact_c_email . "</td></tr>
						<tr><td>Phone Number:</td><td>" . $contact_c_number . "</td></tr>
                        <tr><td>Message:</td><td>" . $contact_c_msg . "</td></tr>
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
        header('location:https://elitebookwriters.com/thank-you.php');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}



if (isset($_POST['con_submit'])) {
    $contact_c_f_name = isset($_POST['con-f-name']) ? $_POST['con-f-name'] : "";
    $contact_c_l_name = isset($_POST['con-l-name']) ? $_POST['con-l-name'] : "";
    $contact_c_email = isset($_POST['con-email']) ? $_POST['con-email'] : "";
    $contact_c_number = isset($_POST['con-phone']) ? $_POST['con-phone'] : "";
    $contact_c_msg = isset($_POST['con-msg']) ? $_POST['con-msg'] : "";
    $privecy_c_icc = isset($_POST['con-pri']) ? $_POST['con-pri'] : "";
    $subject = "Contact Form";
    $message = "Contact from Contact page'.
					<table border='2'>
				    	<tr><td>Full Name:</td><td>" . $contact_c_f_name . "</td></tr>
                        <tr><td>Full Name:</td><td>" . $contact_c_l_name . "</td></tr>
						<tr><td>Email:</td><td>" . $contact_c_email . "</td></tr>
						<tr><td>Phone Number:</td><td>" . $contact_c_number . "</td></tr>
                        <tr><td>Message:</td><td>" . $contact_c_msg . "</td></tr>
                           <tr><td>Accept Terms:</td><td>" . $privecy_c_icc . "</td></tr>
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
        header('location:https://elitebookwriters.com/thank-you.php');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

/*    ***********************  End  ***********************      */

/*    ***********************  start  ***********************      */
// if (isset($_POST['home-submit'])) {
//     $contact_h_name = isset($_POST['h-name']) ? $_POST['h-name'] : "";
//     $contact_h_email = isset($_POST['h-email']) ? $_POST['h-email'] : "";
//     $contact_h_number = isset($_POST['h-phone']) ? $_POST['h-phone'] : "";

//     $to  = 'info@elitebookwriters.com';

//     $headers  = 'MIME-Version: 1.0' . "\r\n";
//     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//     $subject = "Contact Form";
//     $message = "Contact from home page'.
//          <table border='2'>
//               <tr><td>Full Name:</td><td>" . $contact_h_name . "</td></tr>
//               <tr><td>Email:</td><td>" . $contact_h_email . "</td></tr>
//               <tr><td>Phone Number:</td><td>" . $contact_h_number . "</td></tr>
//          </table>";
//     $message = nl2br($message);
//     if (mail($to, $subject, $message, $headers)) {
//         header('location:https://elitebookwriters.com/thank-you.php');
//     }
// }
/*    ***********************  End  ***********************      */

/*    ***********************  start  ***********************      */
// if (isset($_POST['s-banner-submit'])) {
//     $contact_s_banner_name = isset($_POST['s-banner-name']) ? $_POST['s-banner-name'] : "";
//     $contact_s_banner_email = isset($_POST['s-banner-email']) ? $_POST['s-banner-email'] : "";
//     $contact_s_banner_number = isset($_POST['s-banner-phone']) ? $_POST['s-banner-phone'] : "";
//     $contact_s_banner_msg = isset($_POST['s-banner-msg']) ? $_POST['s-banner-msg'] : "";

//     $to  = 'info@elitebookwriters.com';

//     $headers  = 'MIME-Version: 1.0' . "\r\n";
//     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//     $subject = "Contact Form";
//     $message = "Contact from Service page'.
// 					<table border='2'>
// 				    	<tr><td>Full Name:</td><td>" . $contact_s_banner_name . "</td></tr>
// 						<tr><td>Email:</td><td>" . $contact_s_banner_email . "</td></tr>
// 						<tr><td>Phone Number:</td><td>" . $contact_s_banner_number . "</td></tr>
//                         <tr><td>Message:</td><td>" . $contact_s_banner_msg . "</td></tr>
// 					</table>";
//     $message = nl2br($message);
//     if (mail($to, $subject, $message, $headers)) {
//         header('location:https://elitebookwriters.com/thank-you.php');
//     }
// }
/*    ***********************  End  ***********************      */

/*    ***********************  start  ***********************      */
// if (isset($_POST['c-submit'])) {
//     $contact_c_f_name = isset($_POST['c-f-name']) ? $_POST['c-f-name'] : "";
//     $contact_c_l_name = isset($_POST['c-l-name']) ? $_POST['c-l-name'] : "";
//     $contact_c_email = isset($_POST['c-email']) ? $_POST['c-email'] : "";
//     $contact_c_number = isset($_POST['c-phone']) ? $_POST['c-phone'] : "";
//     $contact_c_msg = isset($_POST['c-msg']) ? $_POST['c-msg'] : "";

//     $to  = 'info@elitebookwriters.com';

//     $headers  = 'MIME-Version: 1.0' . "\r\n";
//     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//     $subject = "Contact Form";
//     $message = "Contact from Contact page'.
// 					<table border='2'>
// 				    	<tr><td>Full Name:</td><td>" . $contact_c_f_name . "</td></tr>
//                         <tr><td>Full Name:</td><td>" . $contact_c_l_name . "</td></tr>
// 						<tr><td>Email:</td><td>" . $contact_c_email . "</td></tr>
// 						<tr><td>Phone Number:</td><td>" . $contact_c_number . "</td></tr>
//                         <tr><td>Message:</td><td>" . $contact_c_msg . "</td></tr>
// 					</table>";
//     $message = nl2br($message);
//     if (mail($to, $subject, $message, $headers)) {
//         header('location:https://elitebookwriters.com/thank-you.php');
//     }
// }
/*    ***********************  End  ***********************      */
?>