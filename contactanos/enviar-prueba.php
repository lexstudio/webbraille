<?php

//recibo las info del formalario contactos

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];


$body= "<b>Nombre:</b> ".$nombre. 
       "<br><b>Correo:</b> ".$correo.
       "<br><b>Telefono:</b> ".$telefono.
       "<br><b>Mensaje:</b> ".$mensaje;



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webbraille@gmail.com';                     // SMTP username
    $mail->Password   = '413x@nder';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webbraille@gmail.com', 'User-WebBraille '.$nombre);
    $mail->addAddress('webbraille@gmail.com');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje de contacto WebBraille';
    $mail->Body    = $body;
    $mail->CharSet='UTF-8';

    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>
                alert("El mensaje se envio correctamente");
                window.history.go(-1);
          </script>';


    $mail2 = new PHPMailer(true);
    $body2 = "Gracias por contactarnos <b>" .$nombre. "</b> estaremos en contacto contigo dentro de poco.
                <br><b>Correo:</b> ".$correo.
                "<br><b>Telefono:</b> ".$telefono.
                "<br><b>Mensaje:</b> ".$mensaje;
          
              //Server settings
              $mail2->SMTPDebug = 0;                      // Enable verbose debug output
              $mail2->isSMTP();                                            // Send using SMTP
              $mail2->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
              $mail2->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail2->Username   = 'webbraille@gmail.com';                     // SMTP username
              $mail2->Password   = '413x@nder';                               // SMTP password
              $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
              $mail2->Port       = 587;                                    // TCP port to connect to
          
              //Recipients
              $mail2->setFrom('webbraille@gmail.com', 'Admin-WebBraille ');
              $mail2->addAddress($correo);     // Add a recipient
              
          
              // Content
              $mail2->isHTML(true);                                  // Set email format to HTML
              $mail2->Subject = 'Gracias por contactarnos';
              $mail2->Body    = $body2;
              $mail2->CharSet='UTF-8';
          
              //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          
              $mail2->send();
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}