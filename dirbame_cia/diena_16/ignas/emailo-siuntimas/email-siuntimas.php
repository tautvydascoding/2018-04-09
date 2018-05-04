<?php 

print_r($_POST);
var_dump($_POST);

$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];

$klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8');
$klientoKlausimas = htmlspecialchars( $klientoKlausimas, ENT_QUOTES, 'UTF-8');
$klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8');



//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'a4724ae19a234e';                 // SMTP username
    $mail->Password = 'da3371f49927cb';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 2525;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ignas.radz@gmail.com', 'Mailer');
    $mail->addAddress('ignas.radz@gmail.com', 'Joe User');     // Add a recipient              // Name is optional
    $mail->addReplyTo("$klientoPastas", "$klientoVardas");
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'kliento klausimas';
    $mail->Body    = $klientoKlausimas . 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $klientoKlausimas . 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} finally  {
    echo "visada kzkas suveiks";
}
