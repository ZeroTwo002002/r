<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


include_once('config_bdd.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Remplacez par l'adresse de votre serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'mohamedyani2019@gmail.com'; // Remplacez par votre nom d'utilisateur SMTP
    $mail->Password = 'dnvjbddgfkmploga'; // Remplacez par votre mot de passe SMTP
    $mail->SMTPSecure = 'tls'; // Vous pouvez utiliser 'ssl' au lieu de 'tls' si nécessaire
    $mail->Port = 587; // Utilisez le port approprié pour votre serveur SMTP
    $mail->setFrom($email, $nom, $subject);
        $mail->addAddress('mohamedyani2019@gmail.com', 'Hamdani Mohamed'); // Remplacez par votre adresse e-mail
        
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis le formulaire';
        $mail->Body = "Nom : $nom<br>Email : $email<br>Sujet : $subject"; // Vous pouvez ajouter d'autres informations
        $mail->send();
        echo 'E-mail envoyé avec succès';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
    }
}

?>