<?php
//
//
// // print_r( $_POST );
// // var_dump(  $_POST  );
//
$klientoVardas = $_POST['vardas'];
$klientoPavarde = $_POST['pavarde'];
$klientoPastas = $_POST['elpastas'];
$klientoTel = $_POST['tel'];
$klientoKomentaras = $_POST['komentaras'];
//
// // print_r($_POST);
//
//
//
$klientoVardas    = htmlspecialchars(    $klientoVardas,   ENT_QUOTES, 'UTF-8');
$klientoPavarde = htmlspecialchars( $klientoPavarde,   ENT_QUOTES, 'UTF-8');
$klientoPastas    = htmlspecialchars(    $klientoPastas,   ENT_QUOTES, 'UTF-8');
$klientoTel    = htmlspecialchars(    $klientoTel,   ENT_QUOTES, 'UTF-8');
$klientoKomentaras    = htmlspecialchars(    $klientoKomentaras,   ENT_QUOTES, 'UTF-8');

//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //===============================
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                      // TCP port to connect to

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'etynga.mezga@gmail.com';                 // SMTP username
    $mail->Password = 'agnyte123';                           // SMTP password
        //=============================

   //Recipients
   $mail->setFrom('etynga.mezga@gmail.com', 'Mailer');
   $mail->addAddress('etynga.mezga@gmail.com', 'Puslapiu kurejai');     // Add a recipient
   $mail->addReplyTo( $klientoPastas, $klientoVardas);

   //Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = 'Komentaras';
   $mail->Body    = $klientoKomentaras;
   $mail->AltBody = $klientoKomentaras;

   // !!!! laisko siuntimas
   $mail->send();


} catch (Exception $e) {
   echo 'error: Užklausa nepavyko, bandykite dar kartą. Mailer Error: ', $mail->ErrorInfo;
}
finally {
   echo "Jūsų užklausa sėkmingai išsiųsta ir yra apdorojama, susisieksime neužilgo!<br />";
}


include_once('php_kodas.php');

createRequest($klientoVardas, $klientoPavarde, $klientoPastas, $klientoTel, $klientoKomentaras);
