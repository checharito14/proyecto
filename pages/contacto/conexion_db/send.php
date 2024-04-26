<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing true enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'toleris.comany@gmail.com';                     //SMTP username
        $mail->Password   = 'fsbumvhjqfntsyfy';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

        //Recipients
        $mail->setFrom('toleris.comany@gmail.com');
        $mail->addAddress('vanessa.sherlyn123@gmail.com');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST["nombre"] . " quiere comunicarse contigo";
        // Obtener los datos del formulario POST
        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
        $pais = $_POST['pais'];
        $ciudad = $_POST['ciudad'];
        $comentario = $_POST['mensaje'];

        // Construir el mensaje con saltos de línea usando etiquetas <br>
        $mensaje = "Nombre: $nombre<br>" .
                "Correo: $correo<br>" .
                "Teléfono: $telefono<br>" .
                "País: $pais<br>" .
                "Ciudad: $ciudad<br>" .
                "Comentario: $comentario";

        // Asignar el mensaje al cuerpo del correo con formato HTML
        $mail->Body = $mensaje;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location: contacto.php?mensaje=exito");