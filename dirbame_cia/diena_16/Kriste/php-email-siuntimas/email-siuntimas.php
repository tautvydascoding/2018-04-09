<?php

// test.
// print_r($_POST); arba profesionaliau:
var_dump($_POST);

$klientoVardas = $_POST['vardas'];
$klientoKlausimas = $_POST['klausimas'];
$klientoPastas = $_POST['pastas'];

// mikro saugumas, kad nenulauztu svetaines;
$klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8');
$klientoKlausimas = htmlspecialchars( $klientoKlausimas, ENT_QUOTES, 'UTF-8');
$klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8');



//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
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
        $mail->Username = 'zylesdebesy@gmail.com';                 // SMTP username

// is standartiniu nustatymu liko tik passwordas; visa kita nukopijavome is turimo failo...
        $mail->Password = 'Piligrimas40+';                           // SMTP password


    //Recipients
    $mail->setFrom('zylesdebesy@gmail.com', 'Mailer');
    $mail->addAddress('zylesdebesy@gmail.com', 'Testuotoja');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo( $klientoPastas , $klientoVardas );
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // kolkas uzkomentuojame, nes mes kolkas nepridedame jokiu failu;
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;
// alternatyvus tekstas, jeigu kazkodel pas gaveja neveiktu html ir css, tai reiktu buti pasirasiusi alternatyvu teksta;


// !!!!!! sita eilute atsakinga uz laisko siuntima!!!!!!!
    $mail->send();

    echo 'Laiskas puikiai issiustas!';
} catch (Exception $e) {
    echo 'Nepavyko: ', $mail->ErrorInfo;
}

// catch suveikia tik tada kai try dalyje ivyksta klaidu.
// finally ivyksta bet kokiu atveju, kad ir kas nutiktu try dalyje;
finally {
  echo "Geros dienos!";
}
