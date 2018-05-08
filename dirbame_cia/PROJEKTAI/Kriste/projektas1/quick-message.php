<?php

// var_dump($_POST);

$klientoVardas = $_POST['vardas'];
$klientoPastas = $_POST['pastas'];
$klientoKlausimas = $_POST['klausimas'];

$klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8');
$klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8');
$klientoKlausimas = htmlspecialchars( $klientoKlausimas, ENT_QUOTES, 'UTF-8');


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
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        // jeigu padarau 3 , tai isveda visa kelia;
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
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;



// !!!!!! sita eilute atsakinga uz laisko siuntima!!!!!!!
    $mail->send();
// echo 'Laiskas issiustas!';


} catch (Exception $e) {
    echo 'Nepavyko: ', $mail->ErrorInfo;
}

// catch suveikia tik tada kai try dalyje ivyksta klaidu.
// finally ivyksta bet kokiu atveju, kad ir kas nutiktu try dalyje;
// finally {
//  code...
// }


include_once('functions.php');

// print_r( $_POST );

$vard = $_POST['vardas'];
$past = $_POST['pastas'];
$klaus = $_POST['klausimas'];
createQuickMessage($vard, $past, $klaus);

// include_once('thank-you-qm.php');

// header('Location:  thank-you.php');
// exit();


// !!!!!! issiaiskinti kaip cia veikia!!!!!!!
    function redirect($url,$permanent = false)
    {
    	if($permanent)
    	{
    		header('HTTP/1.1 301 Moved Permanently');
    	}
    	header('Location: '.$url);
    	exit();
    }
    redirect('thank-you-qm.php');
