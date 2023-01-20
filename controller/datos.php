<?php

include "../model/conexion.php";

print_r($_POST);

$nombre = $_POST['nombre'];
$nombre_empresa = $_POST['nombre_empresa'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$estado = 1; //por responder

$sentencia = "INSERT INTO dato_persona(nombre,nombre_empresa,telefono,email,mensaje,estado) 
    VALUES('".$nombre."', '".$nombre_empresa."', '".$telefono."', '".$email."', '".$mensaje."', '".$estado."')";

$query = $conexion->query($sentencia);

if ($query == TRUE) {
    echo '1';
    header('Location: ../contact.php');
}

/*
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
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
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $mensaje;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

*/

?>