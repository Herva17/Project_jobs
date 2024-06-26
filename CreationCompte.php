<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; */
            background-color: #f0f0f0;
            margin: 0;
        }
        .register-container {
            margin-top: 40px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="text-center" style="color: rgb(10, 10, 66);">Création de Compte</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullName">Nom complet</label>
                <input type="text" name="nom" class="form-control" id="fullName" placeholder="Entrez votre nom complet" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" name="mail" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <div class="form-group">
                <label for="confirmPass">Confirmer mot de passe</label>
                <input type="password" name="confpass"  class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe" required>
            </div>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="address" placeholder="Entrez votre adresse" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" name="telephone" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="subject">Objet</label>
                <input type="text" name="objet" class="form-control" id="subject" placeholder="Entrez l'objet" required>
            </div>
            <div class="form-group">
                <label for="profileImage">Image de profil</label>
                <input type="file" name="image" class="form-control-file" id="profileImage" required>
            </div>
            <button type="submit" name="soumettre" class="btn btn-primary btn-block" style="background:rgb(10, 10, 66); font-size: 25px;">Soumettre</button>
            <?php
            include_once("Models/CreerCompter.php");
            ?>
        </form>
       
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
