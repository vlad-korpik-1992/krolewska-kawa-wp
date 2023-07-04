<?php
    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\SMTP;



    require 'phpmailer/Exception.php';

    require 'phpmailer/PHPMailer.php';

    require 'phpmailer/SMTP.php';

    $title = "Aplikacja z witryny internetowej Krolewska Kawa";

    $mail = new PHPMailer();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 

    $mail->isSMTP(); 

    $mail->Host = 'smtp.yandex.ru';

    $mail->SMTPAuth = true;

    //$mail->SMTPDebug = 2;

    $mail->Username = 'v.korpik2010@yandex.by';

    $mail->Password = 'plbdwyueftajxlkg';
    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->Port = 465;

    $mail->CharSet = 'UTF-8';

    $mail->Subject = $title;

    $mail->setFrom('v.korpik2010@yandex.by', 'Krolewska Kawa');

    $name = trim($_POST['name']);

    $phone = trim($_POST['phone']);

    $mail->msgHTML("

    <h2>Szczegóły aplikacji</h2>

    <b>Nazwa:</b> $name<br>

    <b>Telefon:</b> $phone<br>

    ");

    $mail->addAddress('v.korpik2010@yandex.com');

    if(!$mail->send()) {

        echo 'Wiadomość nie może zostać wysłana.';

        echo 'Błąd: ' . $mail->ErrorInfo;

        exit;

    }

    else{

        echo 'Wiadomość wysłana.';

    }
?>