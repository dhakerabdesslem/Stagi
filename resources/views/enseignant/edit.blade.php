<head>
    <meta charset="UTF-8">
    <title>page index</title>
    <link href="{{ asset('css/enseignants/edit.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/enseignants/edit.css">
  </head>
<!-- resources/views/enseignant/edit.blade.php -->

    <div class="container">
        <h1>Modifier l'enseignant</h1>

        <form action="{{ route('enseignants.update', $enseignant->id) }}" method="post">
            @csrf
            @method('PUT')

            {{-- Ajoutez ici les champs du formulaire pour modifier un enseignant --}}
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="Nom" class="form-control" value="{{ $enseignant->Nom }}" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" name="Prenom" class="form-control" value="{{ $enseignant->Prenom }}" required>
            </div>

            {{-- Ajoutez d'autres champs du formulaire en fonction de votre modèle 'Enseignant' --}}

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
