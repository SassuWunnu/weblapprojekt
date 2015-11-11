<?php
$oldalemail="valami@gmail.com";
$nev=trim($_POST["nev"]);
$email=trim($_POST["email"]);
$targy=trim($_POST["targy"]);
$uzenet=trim($_POST["uzenet"]);

$escape=false;
//üres mező szűrő
if($nev==="" || $email=== "" || $targy==="" || $uzenet==="" && !$escape){
    echo "Nem töltötte ki az összes mezőt!";
    $escape=true;
    
}

//injection hack védelem
    foreach($_POST as $value){
    if(!$escape && stripos($value,'Content-Type:') != FALSE)
    {
        echo "Kártékony program észlelve!";
        $escape=true;
        
    }
}
//automatikus kitoltő robot védelem
if (!$escape && $_POST["robotvedelem1"]!=""){
    echo "Kártékony program észlelve!";
    $escape=true;
}

require_once("Protected/Model/PHPMailer5.2.14/class.phpmailer.php");
$mail=new PHPMailer();

$email_torzs="Feladó Neve:" . $nev . "\n" . "E-mail címe:" . $email . "\n" . "Üzenet:" . "\n" . $uzenet;

$mail->setFrom($email, $nev);
$mail->addAddress($oldalemail, "Webshop");
$mail->Subject = $targy;
$mail->msgHTML($uzenet);

if(!$escape){
    if (!$mail->send()) {
        echo "Hiba az üzenet küldésekor:" . $mail->ErrorInfo;  
    }
    else
    {
        echo "Üzenet elküldve";
    }
}
