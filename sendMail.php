<?php 

$txtNombre = $_POST["txtNombre"];
$txtmessage = $_POST["txtMensaje"];
$txtTelefono = $_POST["txtTelefono"];

$res = "";

if ($txtNombre != null && $txtmessage != null && $txtTelefono != null) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "admin_car@carksystems.com";
    $to = "carlosgs.trejo@gmail.com";
    $subject = "Nuevo mensaje desde carksystems.com";
    $message = $txtNombre . " " . $txtTelefono .  "\n" . $txtmessage;
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        $res = "Muchas gracias por contactarte , en breve me contactaré contigo";
    } else {
        $res =  "Ocurrió un error interno";
    }
} else {
    $res =  "Ocurrió un error";
}

$mail->Body = 'This is Test Mail';

echo "<script>
alert('" . $res .  "');
window.location.href='/Portfolio/';
</script>";


?>
