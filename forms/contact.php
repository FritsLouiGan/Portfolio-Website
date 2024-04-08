<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'C:\xampp\htdocs\Portfolio\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\Portfolio\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Portfolio\phpmailer\src\SMTP.php';

if (isset($_POST["send"])) {
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "noellynmariegan@gmail.com";
  $mail->Password = "yejljhcmpucnumak";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;

  $mail->setFrom('noellynmariegan@gmail.com');

  $mail->addAddress($_POST['email']);
  $mail->isHTML(true);

  $mail->Subject = $_POST['subject'];
  $mail->Body = $_POST['message'];

  $mail->send();



}
?>
