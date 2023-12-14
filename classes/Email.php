<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

#[\AllowDynamicProperties]
class Email {

    public $email;
    public $nombre;
    public $apellido;
    public $mensaje;
    
    public function __construct($email, $nombre, $apellido, $mensaje)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->mensaje = $mensaje;
    }

    public function enviarConfirmacion() {

         // create a new object
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];
     
         $mail->setFrom($_ENV['EMAIL_MAIL']);
         $mail->addAddress($this->email, $this->nombre);
         $mail->Subject = 'Confirmación';

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= " <p>Hola <strong>" . $this->nombre . " " . $this->apellido . "</strong></p><p>He recibido tu solicitud, en la brevedad posible me contactaré contigo.</p><p>Muchas gracias por tu tiempo.</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $confirmacion = $mail->send();
         return $confirmacion;
    }
}