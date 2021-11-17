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

$body = 'El usuario'.$nombre.' '.$apellido.' se contacto por medio del formulario de contacto del sitio web.<br>
                    Sus datos de contacto son: <br>'.
                    'Correo: '.$correo.'<br>'.
                    'Teléfono: '.$telefono.'.<br>'.
                    'Con residencia en la ciudad de '.$ciudad.'<br>'.
                    'Comentarios: '.$comentarios;

$mailTo = isset($decoded) ? $decoded['interesado'] : 0;
$mails = Array(
    'erangel@calidra.com.mx',
    'atencionaclientescentro@calidra.com.mx',
    'bolsadetrabajo@calidra.com.mx',
    'bolsadetrabajo@calidra.com.mx',
    'abastecimiento@calidra.com.mx',
);

$sending = mail($mails[$mailTo], 'Formulario de contacto', $body);

if ($sending) {
    $response = Array(
        'status' => 200,
        'msg' => "Tu mensaje se ha enviado correctamente"
    );
}else{
    $response = Array(
        'status' => 500,
        'msg' => "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}"
    );
}
print_r(json_encode($response));

?>