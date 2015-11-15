<?php
function mailer(){  
    
$oldalemail="kivesgabor1991@gmail.com";

$nev=trim($_POST["nev"]);
$email=trim($_POST["email"]);
$targy=trim($_POST["targy"]);
$uzenet=trim($_POST["uzenet"]);

$returnszoveg=array("0","Ismeretlen hiba");

//üres mező szűrő
if($nev==="" || $email=== "" || $targy==="" || $uzenet===""){
    $returnszoveg[0]="0";
    $returnszoveg[1]="Nem töltötte ki az összes mezőt!";   
    return $returnszoveg;
}

//injection hack védelem
    foreach($_POST as $value){
    if(stripos($value,'Content-Type:') != FALSE)
    {
        $returnszoveg[0]="0";
        $returnszoveg[1]="Kártékony kód észlelve!";  
        return $returnszoveg;
    }
}
//automatikus kitoltő robot védelem
if ($_POST["robotvedelem1"]!=""){
    $returnszoveg[0]="0";
    $returnszoveg[1]="Kártékony kód észlelve!";
    return $returnszoveg;
}

require_once("Protected/Model/PHPMailer5.2.14/class.phpmailer.php");
$mail=new PHPMailer();
$mail->CharSet = "UTF-8";

$email_torzs="Feladó Neve:" . $nev . "\r\n" . "E-mail címe:" . $email . "\r\n" . "Üzenet:" . "\r\n" . $uzenet;

$mail->setFrom($email, $nev);
$mail->addAddress($oldalemail, "Webshop");
$mail->Subject = $targy;
$mail->msgHTML($email_torzs);

    if (!$mail->send()) {
        $returnszoveg[0]="0";
        $returnszoveg[1]="Hiba az üzenet küldésekor:" . $mail->ErrorInfo; 
        return $returnszoveg;
    }
    else
    {
        $returnszoveg[0]="1";
        $returnszoveg[1]="Üzenet elküldve";
        return $returnszoveg;
    }
}
