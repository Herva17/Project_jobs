<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page d'accueil - Dashboard</title>
  <!-- Lien vers Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f0f0f0;
      margin: 0;
    }

    .dashboard-container {
      margin: 2rem auto;
      max-width: 1200px;
      padding: 1rem;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card {
      margin-bottom: 1rem;
    }

    .navbar-nav .nav-item .profile-pic {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"">
    <a class=" navbar-brand" href="#">Dashboard</a>
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
            <img src="assets/img/Herve.jpg" alt="Photo de profil" class="profile-pic" />
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="ProfilUtlisateur.php">Voir Profil</a>
            <a class="dropdown-item" href="ParametreSite.php ">Paramètres</a>
            <a class="dropdown-item" href="MesJob.php">Voir mon job</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">Déconnexion</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container dashboard-container">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Vérifier les travaux publiés</h5>
            <p class="card-text">
              Consultez les travaux publiés et trouvez ce qui vous correspond.
            </p>
            <a href="#" class="btn btn-primary">Vérifier</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Promouvoir votre job</h5>
            <p class="card-text">
              Mettez en avant votre job et attirez plus de clients.
            </p>
            <a href="PromouvoiJob.php" class="btn btn-primary">Promouvoir</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Gestion de Compte</h5>
            <p class="card-text">
              Gérez les informations de votre compte et vos préférences.
            </p>
            <a href="ProfilUtlisateur.php" class="btn btn-primary">Gérer</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Lien vers Bootstrap JS et les dépendances Popper.js et jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>