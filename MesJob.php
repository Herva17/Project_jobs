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
        .jobs-container {
            margin: 2rem auto;
            max-width: 800px;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .job-card {
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .job-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mon JOB</a>
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

    <div class="container jobs-container">
        <h2 class="text-center mb-4">Travail Publié</h2>
        <!-- Exemple de travail publié -->
        <div class="job-card">
            <img src="https://via.placeholder.com/600x300" alt="Photo de présentation du job">
            <h5>Nom du Job</h5>
            <p><strong>Nom complet :</strong> Nom complet de l'utilisateur</p>
            <p><strong>Présentation :</strong> Brève présentation du job...</p>
            <p><strong>Description :</strong> Description détaillée du job...</p>
            <p><strong>Adresse de l'entreprise :</strong> Adresse de l'entreprise...</p>
            <p><strong>E-mail de l'entreprise :</strong> email@entreprise.com</p>
            <p><strong>Téléphone :</strong> +1234567890</p>
            <button class="btn btn-primary">Éditer</button>
            <button class="btn btn-danger">Supprimer</button>
        </div>
        <!-- Ajoutez ici plus de travaux publiés de manière dynamique -->
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
