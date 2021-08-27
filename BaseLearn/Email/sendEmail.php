
<?php
	// include required
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
	// define name space
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	PHPMailer\PHPMailer\Exception;
	// create instane of phpmailer
	$mail = new PHPMailer();
	// set mailer to use smtp
	$mail->isSMTP();
	// define smtp host
	$mail->Host='smtp.gmail.com';
	// enable smtp authentication
	$mail->SMTPAuth=true;
	// set type of encryption (ssl/tls)
	$mail->SMTPSecure="tls";
	// set port to connect smtp
	$mail->Port=587;
	// set gmail username
	$mail->Username='thongdt@vega.com.vn';
	// set gmail password
	$mail->Password='Hoilamgi@2017';
	// set gmail subject
	$mail->Subject='Test email using PHPMailer';
	// set sender email
	$mail->setFrom('thongdt@vega.com.vn');
	// set email body
	$mail->Body='This is plan text email body';
	// add recipient
	$mail->addAddress('thongdt@vega.com.vn');
	// send
	if ($mail->Send()) {
		echo "email sent ...";
	}else{
		echo "Error....";
	}
	// close smtp connection
	$mail->smtpClose();

	//$result = mail("thongdt@vega.com.vn", "noidung", "message");
	//var_dump($result);


?>