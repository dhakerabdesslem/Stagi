<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page de Connexion</title>
  <!-- Liens vers Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Liens vers votre fichier CSS personnalisé (optionnel) -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-center">Connexion</h3>
          </div>
          <div class="card-body">
            <!-- Formulaire de connexion -->
            <form id="loginForm">
              <div class="mb-3">
                <label for="username" class="form-label">adresse </label>
                <input type="text" class="form-control" id="username" placeholder="Entrez votre adresse" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
              </div>
              <div class="text-center">
              <a href="IMSET.blade.php"><button type="submit" class="btn btn-primary">Se connecter</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Liens vers Bootstrap JS et jQuery pour les fonctionnalités (nécessaires pour certains composants Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Votre logique JavaScript pour la gestion de la connexion ici
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // Récupération des données du formulaire
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      // Ici vous pouvez ajouter la logique de connexion
    });
  </script>
</body>
</html>
