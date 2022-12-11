<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $image = $_FILES['image'] ['tmp_name'];
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'fadhilsultanandikasiregar@gmail.com';
    $mail->Password = 'twljwssqnufvcsgk'; //gmail app pw
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;

    $mail->setFrom('fadhilsultanandikasiregar@gmail.com'); 

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->AddAttachment($image, 'Testing_Files/Image');

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 
    "
    <script>
    alert('Sent Successfully'); 
    document.location.href = 'index.php';
    </script>
    ";
    }

}


?>
