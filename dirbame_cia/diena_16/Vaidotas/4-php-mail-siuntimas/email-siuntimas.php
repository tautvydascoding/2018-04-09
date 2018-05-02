<?php


print_r($_POST);

$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];

echo $klientoVardas;

    $klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8' );
    $klientoPavarde = htmlspecialchars( $klientoPavarde, ENT_QUOTES, 'UTF-8' );
    $klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8' );
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {



  //------------------------------------------------------------------- importuoti nustatymai
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
        $mail->Username = 'etynga.mezga@gmail.com';                 // SMTP username
//------------------------------------------------------------------------

    //Server settings

    $mail->Password = 'agnyte123';                           // SMTP password


    //Recipients
    $mail->setFrom('etynga.mezga@gmail.com', 'Mailer');
    $mail->addAddress('etynga.mezga@gmail.com', 'Mezgimo katinas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoPastas, $klientoVardas);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send(); //emailo issiuntimas, be sitos funkcijos nieko nesiuncia!




    echo 'Laiska pavyko issiust!';
} catch (Exception $e) {
    echo 'Laisko nepavyko issiust. Klaida: ', $mail->ErrorInfo;
}

  finally {
    echo "&copy 2018";
  }
