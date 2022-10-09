
<?php
$name =$_POST['nombres'];
$phone =$_POST['telefono'];
$message =$_POST['estado'];
$mail =$_POST['correo'];

$header='From:'.$mail."\r\n";
$header.="X-Mailer: PHP/".phpversion()."\r\n";
$header.="Mime-Version:1.0\r\n";
$header.="Content-Type:text/plain";

$message="Este mensaje fue enviado por:".$name."\r\n";
$message.="Teléfono de contacto:".$phone."\r\n";
$message.="Estado de la republica:".$_POST['message']."\r\n";
$message.="Su e-mail:".$mail."\r\n";
$message.="Enviado el:".date('d/m/Y',time());

$para='jfuentes@intermexusa.com';
$asunto='Nuevo prospecto de apertura hacia Pago Express';

mail($para,$asunto,utf8_decode($message), $header);

header("Location:index.html");

?>