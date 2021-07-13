<?php

require_once ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMPTAuth = true;
$mail->SMPTSecure = 'ss1';
$mail->Host = 'smpt.gmail.com';
$mail->Port ='465';
$mail->isHTML();
$mail->Username = 'clarkeconor07@gmail.com';
$mail->Password = 'Grannyt12';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject = 'Hellow World';
$mail->Body = 'A test email!';
$mail->AddAddress('clarkeconor07@gmail.com');

 
$mail->Send();
?>
