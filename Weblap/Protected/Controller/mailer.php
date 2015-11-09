<?php
$oldalemail="valami@gmail.com";
$nev=trim($_POST["nev"]);
$email=trim($_POST["email"]);
$targy=trim($_POST["targy"]);
$uzenet=trim($_POST["targy"]);

//üres mező szűrő
if($nev==="" || $email=== "" || $targy==="" || $uzenet===""){
    header("Location: Informaciok.php?page=mailerror");
    exit;
}

//injection hack védelem
foreach($_POST as $value){
    if(stripos($value,'Content-Type:') != FALSE)
    {
        header("Location: Informaciok.php?page=mailerror");
        exit;
    }
}
//automatikus kitoltő robot védelem
if ($_POST["robotvedelem1"]!=""){
    header("Location: Informaciok.php?page=mailerror");
    exit;
}

require_once("Protected/Model/PHPMailer5.2.14/class.phpmailer.php");
$mail=new PHPMailer();

$email_torzs="Feladó Neve:" . $nev . "\n" . "E-mail címe:" . $email . "\n" . "Üzenet:" . "\n" . $uzenet;

$mail->setFrom($email, $nev);
$mail->addAddress($oldalemail, "Webshop");
$mail->Subject = $targy;
$mail->msgHTML($uzenet);


if (!$mail->send()) {
    header("Location: Informaciok.php?page=mailerror");
    exit;
}

header("Location: Informaciok.php?page=elkuldve");
exit;

