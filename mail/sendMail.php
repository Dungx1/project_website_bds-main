<?php

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");


function guiMailBDS($tieuDe, $noiDung , $mailBDS)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "vunvph21089@fpt.edu.vn";
    $mail->Password = "tasivwpnckjycirr";
    $mail->SetFrom("vunvph21089@fpt.edu.vn");
    $mail->Subject = $tieuDe;
    $mail->Body = $noiDung;//$tieude1."<br>".$tieude2."<br>".$tieude3;
    $mail->AddAddress($mailBDS);

    
}

