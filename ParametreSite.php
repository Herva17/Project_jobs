<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres du Compte</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            margin: 0;
        }
        .settings-container {
            margin: 2rem auto;
            max-width: 800px;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .form-group img {
            display: block;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Paramètres du Compte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="MonCompte.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vérifier les travaux publiés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PromouvoiJob.php">Promouvoir votre job</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://via.placeholder.com/40" alt="Photo de profil" class="profile-pic">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ProfilUtlisateur.php">Voir Profil</a>
                        <a class="dropdown-item" href="ParametreSite.php">Paramètres</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container settings-container">
        <h2 class="text-center mb-4">Paramètres du Compte</h2>
        <form>
            <div class="form-group text-center">
                <img src="https://via.placeholder.com/150" alt="Photo de profil" class="profile-pic">
                <label for="profileImage">Changer l'image de profil</label>
                <input type="file" class="form-control-file" id="profileImage" accept="image/*">
            </div>
            <div class="form-group">
                <label for="fullName">Nom complet</label>
                <input type="text" class="form-control" id="fullName" placeholder="Entrez votre nom complet" value="Nom complet de l'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" value="utilisateur@example.com" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer mot de passe</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe">
            </div>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" placeholder="Entrez votre adresse" value="123 Rue Exemple, Ville, Pays" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone" value="+1234567890" required>
            </div>
            <div class="form-group">
                <label for="subject">Objet</label>
                <input type="text" class="form-control" id="subject" placeholder="Entrez l'objet" value="Objet de l'utilisateur" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enregistrer les modifications</button>
        </form>
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
