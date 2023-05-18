<?php 

if( !isset($_POST['name']) ){
    header("Location: ../index.php");
}else{

$nombre = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$body =  <<<HTML

        <h1>Contacto desde la web</h1>
        <p>De: $nombre / $email</p>
        <h2>Mensaje</h2>
        $message
HTML;

$headers= "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html;
 charset=utf-8 \r\n";
$headers.= "From: $nombre <$email> \r\n";
$headers.= "To: Sitio Web
<aldairleiva42@gmail.com> \r\n";

$respuesta = mail("aldairleiva42@gmail.com","Mensaje de la Web de: $nombre", $body, $headers);
var_dump($nombre,$email, $message, $headers);
header("Location: ../index.php");
}
?>