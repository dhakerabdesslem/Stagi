<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <!-- Liens vers Bootstrap CSS ou votre propre fichier CSS -->
  <link href="css/inscrire.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-center">Inscription</h3>
          </div>
          <div class="card-body">
            <!-- Formulaire d'inscription -->
            <form id="registrationForm">
              <div class="mb-3">
                <label for="fname" class="form-label">nom</label>
                <input type="text" class="form-control" id="username" placeholder="Entrez votre nom " required>
              </div>
              <div class="mb-3">
                <label for="lname" class="form-label">prenom</label>
                <input type="text" class="form-control" id="username" placeholder="Entrez votre prenom " required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">numero telephone</label>
                <input type="number" class="form-control" id="number" placeholder="Entrez votre numero" required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">specialité</label>                <select class="form-control" id="specialite" required>
                  <option value="">Sélectionnez une spécialité</option>
                  <option value="informatique">developpement sur internet</option>
                  <option value="électronique">commerce internationale</option>
                  <option value="mécanique">architecture interieur</option>
                  <option value="mécanique">comptabilité</option>
                  <option value="mécanique">informatique de gestion</option>
                  </select>
              </div>
              <div class="mb-3">
              <label for="dateOfBirth" class="form-label">Date de naissance</label>
              <input type="date" class="form-control" id="dateOfBirth" required>
              </div>
    
              <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
              </div><br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
              </div><br>
              <div class="text-center">
                <button type="reset" class="btn btn-danger"> annulée </button>
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
    // Votre logique JavaScript pour la gestion de l'inscription ici
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // Récupération des données du formulaire
      var username = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      // Ici vous pouvez ajouter la logique d'inscription
    });
  </script>
</body>
</html>
