<head>
    <meta charset="UTF-8">
    <title>page index</title>
    <link href="{{ asset('css/enseignants/create.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/enseignants/create.css">
  </head>
<!-- resources/views/enseignants/create.blade.php -->


    <div class="container">
        <h1>Créer un nouvel enseignant</h1>

        <form action="{{ route('enseignants.store') }}" method="post">
            @csrf
            {{-- Ajoutez ici les champs du formulaire pour créer un nouvel enseignant --}}
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="Nom" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" name="Prenom" class="form-control" required>
            </div>

            {{-- Ajoutez d'autres champs du formulaire en fonction de votre modèle 'Enseignant' --}}

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>