<?php


// print_r( $_POST );
var_dump(  $_POST  );

$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];




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
        $mail->SMTPDebug = 3;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'testascoding@gmail.com';                 // SMTP username
        //=============================
      $mail->Password = 'slaptazodis';                           // SMTP password

   //Recipients
   $mail->setFrom('testascoding@gmail.com', 'Mailer');
   $mail->addAddress('testascoding@gmail.com', 'Puslapiu kurejai');     // Add a recipient
   $mail->addReplyTo( $klientoPastas, $klientoVardas);

   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

   //Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = 'Klieto klausimas';
   $mail->Body    = $klientoKlausimas;
   $mail->AltBody = $klientoKlausimas;

   // !!!! laisko siuntimas
   $mail->send();

   echo 'LAISKA PAVYKO ISISUSTI';

} catch (Exception $e) {
   echo 'eroro: NEPAVYKO ISISUSTI. Mailer Error: ', $mail->ErrorInfo;
}
