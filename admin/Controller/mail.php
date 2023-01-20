<?php
include "../Model/conexion_admin.php";
//print_r($_POST);

$nombre = $_POST['nombre'];
$id_dato_persona = $_POST['id_dato_persona'];
$email = $_POST['email'];
$respuesta = $_POST['respuesta'];
$estado = 0;


$sentenciaM = "UPDATE dato_persona SET estado = '".$estado."' WHERE id_dato_persona = '".$id_dato_persona."'";
$queryM = $conexion->query($sentenciaM);
if ($queryM === TRUE) {
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'polopositivo2023@gmail.com';                     //SMTP username
    $mail->Password   = 'drttndkfacwegalp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('polopositivo2023@gmail.com', 'PoloP');
    $mail->addAddress($email, $nombre);     //Add a recipient
   
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Polo Positivo';
    $mail->Body    = $respuesta;
    $mail->AltBody = $respuesta;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}






?>