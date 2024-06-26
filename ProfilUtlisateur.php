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
            background-color: #f0f0f0;
            margin: 0;
        }
        .profile-container {
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
        .info-group {
            margin-bottom: 1rem;
        }
        .info-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mon profil</a>
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
                        <a class="dropdown-item" href="#">Voir Profil</a>
                        <a class="dropdown-item" href="ParametreSite.php">Paramètres</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container profile-container">
        <?php
        
         ?>
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/150" alt="Photo de profil" class="profile-pic">
            <h2>Nom complet de l'utilisateur</h2>
        </div>
        <div class="info-group">
            <label for="email">Adresse e-mail:</label>
            <p id="email">utilisateur@example.com</p>
        </div>
        <div class="info-group">
            <label for="address">Adresse:</label>
            <p id="address">123 Rue Exemple, Ville, Pays</p>
        </div>
        <div class="info-group">
            <label for="phone">Téléphone:</label>
            <p id="phone">+1234567890</p>
        </div>
        <div class="info-group">
            <label for="subject">Objet:</label>
            <p id="subject">Objet de l'utilisateur</p>
        </div>
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
