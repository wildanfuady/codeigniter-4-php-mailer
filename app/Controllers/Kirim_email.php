<?php namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Kirim_email extends BaseController
{
	public function __construct()
	{
		helper(['form']);
	}

	public function index()
	{
		return view('v_form_kirim_email');
	}

	public function send()
	{
		$to 				= $this->request->getPost('to');
		$subject 			= $this->request->getPost('subject');
		$message 			= $this->request->getPost('message');

		$mail = new PHPMailer(true);

		try {
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		    $mail->isSMTP();
		    $mail->Host       = 'smtp.googlemail.com';   
		    $mail->SMTPAuth   = true;
		    $mail->Username   = 'username_email_anda@gmail.com'; // silahkan ganti dengan alamat email Anda
		    $mail->Password   = 'password_email_anda'; // silahkan ganti dengan password email Anda
		    $mail->SMTPSecure = 'ssl';
		    $mail->Port       = 465;

		    $mail->setFrom('username_email_anda@gmail.com', 'Ilmu Coding'); // silahkan ganti dengan alamat email Anda
		    $mail->addAddress($to);
		    $mail->addReplyTo('username_email_anda@gmail.com', 'Ilmu Coding'); // silahkan ganti dengan alamat email Anda
		    // Content
		    $mail->isHTML(true);
		    $mail->Subject = $subject;
		    $mail->Body    = $message;

		    $mail->send();
		    session()->setFlashdata('success', 'Send Email successfully');
	        return redirect()->to('/kirim_email'); 
		} catch (Exception $e) {
			session()->setFlashdata('error', "Send Email failed. Error: ".$mail->ErrorInfo);
            return redirect()->to('/kirim_email');
		}
	}
}