<?php

namespace App\Controllers;

use App\Core\App;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class SendEmailController {

    // public $mailBody = require 'views/email.view.php';
    // public $customerName = $_SESSION['name'] . ' ' . $user['last_name'];
    // public $customerEmail = $user['email'];
    // public $id = $_SESSION['id'];
    // public $user = App::get('database')->checkoutUser($id);

    // public $mailBody = getHTML();
    // public $customerName = $_SESSION['name'] . ' ' . $user['last_name'];
    // public $customerEmail = $user['email'];

    public function index() {

        $id = $_SESSION['id'];
        $user = App::get('database')->checkoutUser($id);
    
        $mailBody = getHTML();
        $customerName = $_SESSION['name'] . ' ' . $user['last_name'];
        $customerEmail = $user['email'];
 

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '1f5c2f65499919';
        $mail->Password = '6436ff4e593028';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->SetFrom("freshmarkethub@example.com", "Fresh Market Hub");
        $mail->addReplyTo("reply@example.com", "Reply Address");
        $mail->addAddress($customerEmail, $customerName);
        $mail->Subject  = "Your Invoice";
        $mail->isHTML(true);
        $mail->Body = $mailBody;

 
        try {
            $mail->send();
            echo "Message has been sent successfully";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }
}
