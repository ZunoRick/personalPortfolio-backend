<?php 
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{
    public $email;
    public $nombre;
    public $asunto;
    public $mensaje;

    public function __construct($email, $nombre, $asunto, $mensaje){
        $this->email = $email;
        $this->nombre = $nombre;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    public function enviarEmail(){
        //Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '6183892eb1c76b';
        $mail->Password = 'dc76e9e4748836';
        $mail->SMTPSecure = 'tls';

        $mail->setFrom('ricardo@ricardo.com');
        $mail->addAddress('ricardo@ricardo.com', 'Ricardo.com');
        $mail->Subject = 'Nuevo correo del sitio personal';

        //Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        $contenido = "<html>";
        $contenido .= "<p>Hola has recibido un correo de: <strong>". $this->nombre . "</strong></p>";
        $contenido .= "<p>Correo: <strong>". $this->email . "</strong></p>";
        $contenido .= "<p>Con el asunto: ". $this->asunto . "</p>";
        $contenido .= "<p>Mensaje: ". $this->mensaje ."</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}