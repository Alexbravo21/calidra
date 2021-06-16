<?php
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
  //Receive the RAW post data.
  $content = trim(file_get_contents("php://input"));

  $decoded = json_decode($content, true);
}

$nombre = isset($decoded) ? $decoded['nombre'] : NULL;
$apellido = isset($decoded) ? $decoded['apellido'] : NULL;
$correo = isset($decoded) ? $decoded['correo'] : NULL;
$telefono = isset($decoded) ? $decoded['telefono'] : NULL;
$ciudad = isset($decoded) ? $decoded['ciudad'] : NULL;
$comentarios = isset($decoded) && isset($decoded['comentarios']) ? $decoded['comentarios'] : 'Sin comentarios';
$mailTo = isset($decoded) ? $decoded['interesado'] : 0;
//print_r($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);
$mails = Array(
    'erangel@calidra.com.mx',
    'atencionaclientescentro@calidra.com.mx',
    'bolsadetrabajo@calidra.com.mx',
    'bolsadetrabajo@calidra.com.mx',
    'abastecimiento@calidra.com.mx',
);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'calidra.contacto.form@gmail.com';                     //SMTP username
    $mail->Password   = 'c4lidr4$cont4cto';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('calidra.contacto.form@gmail.com', 'Calidra contacto');
    $mail->addAddress('alexbravo21@gmail.com', 'Calidra');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo($mails[$mailTo], 'Más información');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Formulario de contacto';
    $mail->Body    = 'El usuario'.$nombre.' '.$apellido.' se contacto por medio del formulario de contacto del sitio web.<br>
                    Sus datos de contacto son: <br>'.
                    'Correo: '.$correo.'<br>'.
                    'Teléfono: '.$telefono.'.<br>'.
                    'Con residencia en la ciudad de '.$ciudad.'<br>'.
                    'Comentarios: '.$comentarios;

                    
    $mail->AltBody = 'El usuario'.$nombre.' '.$apellido.' se contacto por medio del formulario de contacto del sitio web. Datos de contacto: Correo: '.$correo.' Teléfono: '.$telefono.' Con residencia en la ciudad de '.$ciudad.' Comentarios: '.$comentarios;

    $mail->send();
    $response = Array(
        'status' => 200,
        'msg' => "Tu mensaje se ha enviado correctamente"
    );
} catch (Exception $e) {
    $response = Array(
        'status' => 500,
        'msg' => "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}"
    );
}
print_r(json_encode($response));

?>