<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';

$email = "greenwheelscs2@gmail.com";
$sub = "Work Enquiry - GWSCS";

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'greenwheelscs2@gmail.com';
    $mail->Password = 'plwzpaqcfexkgkqa';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('dragoncorexgamer@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $sub;
    $mail->Body = "Name : ".$_POST["firm_name"]."<br> Mail : ".$_POST["mail"]."<br> Number : ".$_POST["number"]."<br> Location : ".$_POST["location"]."<br> Purpose : ".$_POST["message"];

    $mail->send();
    
    echo "<script>
    alert('Sent Successfully');
    document.location.href='enquiry.html';
    </script>";
}
?>
