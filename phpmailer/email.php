<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp-pt.securemail.pro';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'peter@barata.pt';                 // SMTP username
    $mail->Password = 'fx95N9ksm6HmUmgW5Ck4';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bricoltop@hotmail.com', 'formulario bricoltop.pt');
    $mail->addAddress('bricoltop@hotmail.com');     // Add a recipient
    $mail->addAddress('pedrobaratafernandes@gmail.com'); 
    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = date('Y-m-d H:i:s') . ' ' . 'novo contacto do bricoltop.pt ' . $_POST['telefone'];
    $mail->Body    = 'mensagem recebida de ' . $_POST['email']  . ' ' . $_POST['nome'] . ' ' . $_POST['mensagem'] . ' ' . $_POST['telefone'] ;
    

    $mail->send();
    header("Location: https://bricoltop.pt");
    echo '<script>';
    echo 'alert("mensagem enviada com sucesso!")';
    echo '</script>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}