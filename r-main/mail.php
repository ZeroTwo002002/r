<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function verifdonnées($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que la demande HTTP est une méthode POST, ce qui signifie qu'un formulaire a été soumis.
    // Récupérer les données du formulaire
    $nom = verifdonnées($_POST['nom']); 
    // Récupère la valeur du champ 'nom' du formulaire et la stocke dans la variable $nom.
    
    $email = verifdonnées($_POST['mail']);
    // Récupère la valeur du champ 'mail' du formulaire et la stocke dans la variable $email.

    $subject = verifdonnées($_POST['subject']);
    // Récupère la valeur du champ 'subject' du formulaire et la stocke dans la variable $subject.

    $message = verifdonnées($_POST['message']);
    // Récupère la valeur du champ 'message' du formulaire et la stocke dans la variable $message.
var_dump(verifdonnées($_POST['nom']));
$mail = new PHPMailer(true);

include_once('config_bdd.php');
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Remplacez par l'adresse de votre serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'mohamedyani2019@gmail.com'; // Remplacez par votre nom d'utilisateur SMTP
    $mail->Password = 'dnvjbddgfkmploga'; // Remplacez par votre mot de passe SMTP
    $mail->SMTPSecure = 'tls'; // Vous pouvez utiliser 'ssl' au lieu de 'tls' si nécessaire
    $mail->Port = 587; // Utilisez le port approprié pour votre serveur SMTP
    $mail->setFrom($email, $nom);
        $mail->addAddress('mohamedyani2019@gmail.com', 'Hamdani Mohamed'); // Remplacez par votre adresse e-mail
        
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis le formulaire';
        $mail->Body = "Nom : $nom<br>Email : $email<br>Sujet : $subject<br> Message : $message"; // Vous pouvez ajouter d'autres informations
        $mail->send();
        echo 'E-mail envoyé avec succès';
        $stmt = $conn->prepare("INSERT INTO form (nom, mail, subject, message) VALUES (:nom, :mail, :subject, :message)");

    // Les valeurs à insérer
    $nom = $_POST['nom'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Lier les valeurs aux paramètres de la requête
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':mail', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);

    // Exécuter la requête d'insertion
    $stmt->execute();
    echo "Données insérées avec succès";
} catch (Exception $e) {
    echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
}
// Fermer la connexion à la base de données
$connexion = null;

?>