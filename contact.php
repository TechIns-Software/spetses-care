<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$subject = "Spetses Care For Animals | ";

$message = "Όνομα: ";
$message .= $_POST['fullName'];
$message .= "<br>Email: ";
$message .= $_POST['email'];
$message .= "<br>Κινητό: ";
$message .= $_POST['phone'];

if ($_POST['whatForm'] == 'donationForm') {
    $subject .= " Φόρμα Επικοινωνίας Δωρεά ";
    $message .= "<br> Έχει επιλέξει να δωρήσει : ";
    $message .= $_POST['antikeimena'];
} else if ($_POST['whatForm'] == 'volunteerForm') {
    $subject .= " Φόρμα Επικοινωνίας Εθελοντή ";
}else if ($_POST['whatForm'] == 'adoptionForm') {
    $subject .= " Φόρμα Επικοινωνίας  ΥΙΟΘΕΣΙΑ / ΑΝΑΔΟΧΗ ";
    $message .= "<br> Έχει επιλέξει να : ";
    $message .= $_POST['selectChoice'] == '1' ? "Υιοθετήσει" : "γίνει ανάδοχος";
}else if ($_POST['whatForm'] == 'contactForm') {
    $subject .= " Φόρμα Επικοινωνίας ".$_POST['subject'];
    $message .= "<br>Μήνυμα: ";
    $message .= $_POST['message'];
}

$to = "nspanos@techins.gr";
$from= "autoinform@techins.gr";


use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$nameDisplayed = 'TechIns Website Form';
$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail ->CharSet = "UTF-8";
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = 'gsR5$tag';
$mail->setFrom($from, $nameDisplayed);
$mail->addReplyTo($from, $nameDisplayed);
$mail->addAddress($to, $to);


$mail->Subject = $subject;
$mail->Body = $message;
$mail->isHTML();
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}