<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactEmail {
    public $email;
    public $name;
    public $lastname;
    public $message;
    public $our_number;

    public function __construct($email, $name, $lastname, $message)
    {
        $this->email = $email;    
        $this->name = $name;    
        $this->lastname = $lastname;    
        $this->message = $message;
        
    }
    
    public function receive_message() {
        $email = new PHPMailer();
        try {
            //Server settings
            $email->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $email->isSMTP();                                            //Send using SMTP
            $email->Host = 'smtp.gmail.com';
            $email->SMTPAuth = true;
            $email->Port = 465;
            $email->Username = 'Info@rslcr.com';
            $email->Password = 'Rsl2023mam&';
            $email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        
            $email->setFrom($this->email);
            $email->addAddress('info@rslcr.com');
            $email->Subject = 'Nuevo mensaje de: ' . $this->name;
            //Content
            $email->isHTML(true);                                  //Set email format to HTML
            $email->CharSet = 'UTF-8';

            $content = '<html>';
            $content .= "<p>Nuevo mensaje recibido desde el formulario de contacto.";
            $content .= "<p><strong>Nombre:</strong> " . $this->name . "<br>";
            $content .= "<strong>Apellido:</strong> " . $this->lastname . "</p>";
            $content .= "<p><strong>Mensaje:</strong></p>";
            $content .= "<p>" . $this->message . "</p>";
            $content .= '</html>';
            $email->Body    = $content;

            $email->send();

        } catch (Exception $e) {
            echo "El Mensaje no pudo enviarse. Mailer Error: {$email->ErrorInfo}";
        }
    }

    public function automatic_response() {
        $our_number = "+506 4702-0720";
        $our_address = "Plaza Panorama, ";
        $our_address .= "segundo piso, local #11";
        $email = new PHPMailer();
        try {
            //Server settings
            $email->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $email->isSMTP();                                            //Send using SMTP
            $email->Host = 'smtp.gmail.com';
            $email->SMTPAuth = true;
            $email->Port = 465;
            $email->Username = 'Info@rslcr.com';
            $email->Password = 'Rsl2023mam&';
            $email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

            //Recipients
            $email->setFrom('info@rslcr.com');
            $email->addAddress($this->email);
            $email->Subject = 'Recibimos tu mensaje';
            //Content
            $email->isHTML(true);                                  //Set email format to HTML
            $email->CharSet = 'UTF-8';

            $content = '<html>';
            $content .= "<p>Hola <strong>" . $this->name . "</strong>, gracias por comunicarte con nosotros, hemos recibido tu mensaje y muy pronto  nos estaremos comunicando contigo al email que nos brindaste.</p>";
            $content .= "<p> Si tu no solicitaste que nos comunicaramos contigo o crees que esto puede ser un error, puedes indicarnoslo a este mismo correo para evitar futuras interacciones de nuestra parte.</p>";
            $content .= "<p><br></p>";
            $content .= "<p> Saludos cordiales,";
            $content .= "<p> Equipo de RSL Electromecanica. <br>";
            $content .= "Teléfono: " . $our_number . "<br>";
            $content .= "Dirección: " . $our_address . "</p>";
            $content .= '</html>';
            $email->Body    = $content;

            $email->send();

        } catch (Exception $e) {
            echo "El Mensaje no pudo enviarse. Mailer Error: {$email->ErrorInfo}";
        }
    }

    public function automatic_response_en() {
        $our_number = "+506 4702-0720";
        $our_address = "Plaza Panorama, ";
        $our_address .= "second floor, local #11";
        $email = new PHPMailer();
        try {
            //Server settings
            $email->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $email->isSMTP();                                            //Send using SMTP
            $email->Host = 'smtp.gmail.com';
            $email->SMTPAuth = true;
            $email->Port = 465;
            $email->Username = 'Info@rslcr.com';
            $email->Password = 'Rsl2023mam&';
            $email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    
            //Recipients
            $email->setFrom('info@rslcr.com');
            $email->addAddress($this->email);
            $email->Subject = 'We received your message';
            //Content
            $email->isHTML(true);                                  //Set email format to HTML
            $email->CharSet = 'UTF-8';
    
            $content = '<html>';
            $content .= "<p>Hello <strong>" . $this->name . "</strong>, thank you for contacting us, we have received your message and we will be in touch with you very soon at the email you provided.</p>";
            $content .= "<p> If you did not request us to contact you or believe this may be an error, you can let us know at this email to avoid future interactions from our part.</p>";
            $content .= "<p><br></p>";
            $content .= "<p> Best regards,";
            $content .= "<p> RSL Electromechanical Team. <br>";
            $content .= "Phone: " . $our_number . "<br>";
            $content .= "Address: " . $our_address . "</p>";
            $content .= '</html>';
            $email->Body    = $content;
    
            $email->send();
    
        } catch (Exception $e) {
            echo "The message could not be sent. Mailer Error: {$email->ErrorInfo}";
        }
    }
    

}