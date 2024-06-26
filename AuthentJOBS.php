<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }

        .login-container {
            margin-top: 20px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .forgot-password-link {
            color: #007bff;
            /* Couleur bleue par défaut de Bootstrap */
            text-decoration: none;
            /* Supprime le soulignement par défaut */
            display: block;
            /* Pour s'assurer que le lien est bien visible */
            margin-top: 10px;
            /* Ajoute un espacement en haut du lien */
        }

        #loading-spinner {
            border: 8px solid rgba(0, 0, 0, 0.1);
            border-left-color: #007bff; /* Couleur bleue pour le spinner, ajustez selon votre préférence */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center">Authentification</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" name="mail" class="form-control" id="email" placeholder="Entrez votre adresse e-mail">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>
            <div class="form-group">
                <a href="mot_de_passe_oublie.php" class="forgot-password-link">Mot de passe oublié ?</a>
            </div>
            <div class="form-group">
                <a href="CreationCompte.php" class="">Créer un compte</a>
            </div>
            <button type="submit" name="connexion" class="btn btn-primary btn-block">Se connecter</button>
        </form>
        <?php
        include_once("Models/Config.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mail = htmlspecialchars($_POST['mail']);
            $password = htmlspecialchars($_POST['password']);

            if ($mail == "" || $password == "") {
                echo "<p style='color: red;'>Remplissez les champs svp!</p>";
            } else {
                $query = "SELECT * FROM utlilisateur WHERE adressemail='$mail' AND mot_de_passe='$password'";
                $result = mysqli_query($connexion, $query);

                if (mysqli_num_rows($result) > 0) {
                    $user = mysqli_fetch_assoc($result);
                    $user_id = $user['id_ut'];
                    $nom_complet = $user['Nom_complet'];
                    // $photo_profil = $user['photo_profil']; // Récupérer le chemin de la photo de profil

                    // Démarrer la session et enregistrer l'ID de l'utilisateur connecté
                    session_start();
                    $_SESSION['user_id'] = $user_id;

                    // Script JavaScript pour afficher le message d'alerte au centre de la page
                    echo "<div id='loading-spinner'></div>"; // Div pour le spinner de chargement
                    echo "<script>
                            var alertBox = document.createElement('div');
                            alertBox.innerHTML = 'Vous êtes connecté avec succès: $nom_complet';
                            alertBox.style.position = 'fixed';
                            alertBox.style.left = '50%';
                            alertBox.style.top = '50%';
                            alertBox.style.transform = 'translate(-50%, -50%)';
                            alertBox.style.backgroundColor = '#f0f0f0';
                            alertBox.style.padding = '20px';
                            alertBox.style.border = '1px solid #ccc';
                            alertBox.style.borderRadius = '5px';
                            alertBox.style.zIndex = '9999';
                            document.body.appendChild(alertBox);

                            // Redirection après 10 secondes
                            setTimeout(function() {
                                window.location.href = 'MonCompte.php?ID=$user_id';
                            }, 10000); // 10 secondes
                          </script>";
                    exit; // Arrêter l'exécution du script après redirection
                } else {
                    echo "<p style='color: red;'>Entrez des bonnes informations</p>";
                }
            }
        }
        ?>
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
