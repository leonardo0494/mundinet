<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Importa os arquivos do PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$assunto = $_POST['assunto'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$pagina = $_POST["pagina"] ?? "index.html";

// Instância do PHPMailer
$mail = new PHPMailer(true);

// Configurações do servidor SMTP
$mail->isSMTP();
$mail->Host = 'mailpit';
$mail->SMTPAuth = false;
$mail->Port = 1025;

// Remetente e destinatário
$mail->setFrom('seuemail@gmail.com', 'Site');
$mail->addAddress('meuemail@gmail.com'); // Email que vai receber

// Assunto
$mail->Subject = "[CONTATO SITE] - " . $assunto;

// Corpo do e-mail
$mail->isHTML(false); // Texto simples (sem HTML)
$mail->Body = "Contato enviado via site:\n\n"
    . "Nome: " . $nome . "\n"
    . "Email: " . $email . "\n"
    . "Assunto: " . $assunto . "\n"
    . "Mensagem: " . $mensagem . "\n";

// Envia

$mail->send();
return "E-mail enviado com sucesso.";
