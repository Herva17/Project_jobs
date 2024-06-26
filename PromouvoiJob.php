<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promouvoir votre job</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            margin: 0;
        }
        .promote-job-container {
            margin: 2rem auto;
            max-width: 800px;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group img {
            display: block;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Promouvoir votre job</a>
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
                        <a class="dropdown-item" href="MonCompte.php">Voir Profil</a>
                        <a class="dropdown-item" href="ParametreSite.php">Paramètres</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container promote-job-container">
        <h2 class="text-center mb-4">Promouvoir votre job</h2>
        <form>
            <div class="form-group">
                <label for="fullName">Nom complet</label>
                <input type="text" class="form-control" id="fullName" placeholder="Entrez votre nom complet" required>
            </div>
            <div class="form-group">
                <label for="jobPresentation">Présentation du job</label>
                <textarea class="form-control" id="jobPresentation" rows="3" placeholder="Entrez une brève présentation du job" required></textarea>
            </div>
            <div class="form-group">
                <label for="jobDescription">Description du job</label>
                <textarea class="form-control" id="jobDescription" rows="5" placeholder="Entrez une description détaillée du job" required></textarea>
            </div>
            <div class="form-group">
                <label for="companyAddress">Adresse de l'entreprise</label>
                <input type="text" class="form-control" id="companyAddress" placeholder="Entrez l'adresse de l'entreprise" required>
            </div>
            <div class="form-group">
                <label for="companyEmail">Adresse e-mail de l'entreprise</label>
                <input type="email" class="form-control" id="companyEmail" placeholder="Entrez l'adresse e-mail de l'entreprise" required>
            </div>
            <div class="form-group">
                <label for="companyPhone">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="companyPhone" placeholder="Entrez le numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="jobImage">Photo de la présentation du job</label>
                <input type="file" class="form-control-file" id="jobImage" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
        </form>
        <div class="text-center mt-4">
            <a href="#">Voir vos informations</a>
        </div>
    </div>

    <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
