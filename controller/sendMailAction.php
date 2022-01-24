<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('../library/constants.php');
require_once("../library/phpmailer/src/Exception.php");
require_once("../library/phpmailer/src/SMTP.php");
require_once("../library/phpmailer/src/PHPMailer.php");

function sendMail($email, $name, $token, $type)
{
    if ($type == EMAIL_VERIFY) {
        $subject = '[VUCAR] Kích hoạt tài khoản';
        $content = "
        Dear $name, <br>

        Chào mừng bạn đến với Vucar! Thông qua nền tảng vucar.net chúng tôi mong bạn sẽ tìm được chiếc xe mà bạn mong muốn.<br> Dưới đây là đường dẫn để bạn có thể kích hoạt tài khoản $email: 
        <br> <a href='http://localhost/vucar/view/active-result.php?e=$email&token=$token'>     Kích hoạt</a>
        <br>
        <br>
        Nếu bạn gặp bất kì trục trặc nào trong quá trình kích hoạt tài khoản bạn có thể gọi trực tiếp đến số hotline ở 000-000-0000 hoặc email đến xxxx@vucar.net!
        Chân thành cảm ơn bạn $name đã tin tưởng và lựa chọn Vucar!";
    }

    if ($type == 'send-price') {
      $subject = '[VUCAR] Định giá xe của bạn';
      $content = " Dear ....";
    }
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug  = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'son.vu@vucar.net';
        $mail->Password   = 'pykpbkqlyjwmoegm';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        //Recipients
        // $mail->setFrom('vucar', 'VUCAR');
        $mail->addAddress($email, $name);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo $e;
        return false;
    }
}
