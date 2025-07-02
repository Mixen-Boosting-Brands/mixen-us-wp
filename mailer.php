<?php
/**
 * PHPMailer multiple files upload and send
 */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP();
$mail->Host = "smtp.hostinger.com";
$mail->SMTPAuth = true;
$mail->Username = "noreply@mixen.us";
$mail->Password = "A+n94zt=8";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

if (isset($_POST["nombre"])) {
    // Sanitización de todos los campos
    $nombre = strip_tags(trim($_POST["name"]));
    $correo = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = strip_tags(trim($_POST["message"]));

    // Eliminar saltos de línea
    $nombre = str_replace(["\r", "\n"], [" ", " "], $nombre);
    $apellido = str_replace(["\r", "\n"], [" ", " "], $apellido);

    try {
        //Recipients
        $mail->setFrom(
            "noreply@mixen.us",
            "Message from Mixen US contact form"
        );
        $mail->addAddress("luis.pando@mixen.mx");
        $mail->addReplyTo(
            $correo,
            "Hey Mixen US, I'd like to learn more about your services."
        );

        //Content
        $mail->isHTML(true);
        $mail->Subject = "New message from " . $nombre;

        // Construir el cuerpo del mensaje
        $mail->Body = "
            <strong>Contact information:</strong><br>
            Name: {$nombre}<br>
            Email: {$correo}<br>
            <br>
            <strong>Message:</strong><br>
            {$mensaje}<br>
            <br>
            This message was sent through the contact form of Mixen US.";

        $mail->send();
        echo "✅ Thank you for contacting us. We will get back to you shortly.";
    } catch (Exception $e) {
        echo "❌ Sorry, something went wrong. Please try again. Mailer Error: " .
            $mail->ErrorInfo;
    }
} else {
    echo "Please complete all required fields.";
}
