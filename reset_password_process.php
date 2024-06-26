<?php
// Inclusion de la configuration de la base de données
include_once("Models/Config.php");

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de l'adresse e-mail soumise depuis le formulaire
    $email = mysqli_real_escape_string($connexion, $_POST['email']);

    // Vérification si l'adresse e-mail existe dans la base de données
    $query = "SELECT * FROM utlilisateur WHERE adressemail = '$email'";
    $result = mysqli_query($connexion, $query);

    if (mysqli_num_rows($result) > 0) {
        // Génération d'un jeton de réinitialisation sécurisé
        $token = bin2hex(random_bytes(32));

        // Timestamp actuel
        $now = date('Y-m-d H:i:s');

        // Insertion du jeton dans la base de données
        $insert_query = "INSERT INTO reset_tokens (email, token, created_at) VALUES ('$email', '$token', '$now')";
        $insert_result = mysqli_query($connexion, $insert_query);

        if ($insert_result) {
            // Configuration des paramètres SMTP pour l'envoi d'e-mail
            ini_set('SMTP', 'smtp.gmail.com');
            ini_set('smtp_port', 530-5.7);
            ini_set('sendmail_from', 'herveiragi80@gmail.com');

            // Envoi de l'e-mail de réinitialisation
            $reset_link = "reset_password.php?token=" . $token; // Lien vers votre page de réinitialisation
            $subject = "Réinitialisation de votre mot de passe";
            $message = "Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien suivant : $reset_link";
            $headers = "From: heveiragi80@gmail.com";

            if (mail($email, $subject, $message, $headers)) {
                echo "Un e-mail de réinitialisation a été envoyé à votre adresse.";
            } else {
                echo "Erreur lors de l'envoi de l'e-mail de réinitialisation.";
            }
        } else {
            echo "Erreur lors de l'insertion du jeton de réinitialisation dans la base de données.";
        }
    } else {
        echo "Aucun compte trouvé avec cette adresse e-mail.";
    }
}
?>
