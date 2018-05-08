<?php

// var_dump($_POST);

$klientoVardas = $_POST['vardasPart'];
$klientoPastas = $_POST['pastasPart'];
$klientoProduktas = $_POST['naujasProd'];
$klientoKaina = $_POST['kaina'];

$klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8');
$klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8');
$klientoProduktas = htmlspecialchars( $klientoProduktas, ENT_QUOTES, 'UTF-8');
$klientoKaina = htmlspecialchars( $klientoKaina, ENT_QUOTES, 'UTF-8');


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
        $mail->Password = 'Piligrimas40+';                           // SMTP password


    //Recipients
    $mail->setFrom('zylesdebesy@gmail.com', 'Mailer');
    $mail->addAddress('zylesdebesy@gmail.com', 'Testuotoja');     // Add a recipient
    $mail->addReplyTo( $klientoPastas , $klientoVardas );

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klientoProduktas;
    $mail->AltBody = $klientoProduktas;


// !!!!!! sita eilute atsakinga uz laisko siuntima!!!!!!!
    $mail->send();

    // echo 'Laiskas issiustas!';
} catch (Exception $e) {
    echo 'Nepavyko: ', $mail->ErrorInfo;
}

// catch suveikia tik tada kai try dalyje ivyksta klaidu.
// finally ivyksta bet kokiu atveju, kad ir kas nutiktu try dalyje;
// finally {
//   echo "Geros dienos!";
// }


include_once('functions.php');

// print_r( $_POST );

$vardP = $_POST['vardasPart'];
$pastP = $_POST['pastasPart'];
$produktas = $_POST['naujasProd'];
$price = $_POST['kaina'];
createNewProduct($vardP, $pastP, $produktas, $price);
