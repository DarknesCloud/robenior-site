<?php 



if( !isset($_POST['name']) ){
    header("Location: index.php");
}

$nombre = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

var_dump($nombre, $email, $message);

$respuesta = mail('aldairleiva42@gmail.com',"Mensaje de la Web: $nombre", $message);

?>