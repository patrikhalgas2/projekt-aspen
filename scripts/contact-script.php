<?php

if ($_POST['mail']) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $subject = '=?UTF-8?B?'.base64_encode(filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)).'?=';
    $mailFrom = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $mailTo = "info@aspen-staff.com";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <' . $mailFrom . '>' . "\r\n";
    $headers .= 'Cc: ' . $mailTo . '' . "\r\n";
    $txt = "You have received an e-mail from ".$name.".<br>".$message;

    mail($mailTo, $subject, $txt, $headers);

    echo json_encode(
        [
            "name"=>$name,
            "mailfrom"=>$mailFrom,
            "subject"=>$subject,
            "message"=>$message
        ]
    );
}
