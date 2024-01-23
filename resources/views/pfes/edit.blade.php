<head>
    <meta charset="UTF-8">
    <title>page index</title>
    <link href="{{ asset('css/pfes/edit.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/pfes/edit.css">
  </head>
<div class="container">
    <h1>Modifier le Projet de Fin d'Études</h1>

    <form method="POST" action="{{ route('pfes.update', $pfe->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="Titre">Titre :</label>
            <input type="text" name="Titre" class="form-control" value="{{ old('Titre', $pfe->Titre) }}" required>
        </div>

        <div class="form-group">
            <label for="Description">Description :</label>
            <textarea name="Description" class="form-control" required>{{ old('Description', $pfe->Description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="DateD">Date de début :</label>
            <input type="date" name="DateD" class="form-control" value="{{ old('DateD', $pfe->DateD) }}" required>
        </div>

        <div class="form-group">
            <label for="DateF">Date de fin :</label>
            <input type="date" name="DateF" class="form-control" value="{{ old('DateF', $pfe->DateF) }}" required>
        </div>

        <div class="form-group">
            <label for="EncadrantID">Sélectionner l'Encadrant :</label>
            <select name="EncadrantID" class="form-control" required>
                @foreach($enseignants as $enseignant)
                    <option value="{{ $enseignant->id }}" {{ old('EncadrantID', $pfe->EncadrantID) == $enseignant->id ? 'selected' : '' }}>
                        {{ $enseignant->Nom }} {{ $enseignant->Prenom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="SocieteID">Sélectionner la Société :</label>
            <select name="SocieteID" class="form-control" required>
                @foreach($societes as $societe)
                    <option value="{{ $societe->id }}" {{ old('SocieteID', $pfe->SocieteID) == $societe->id ? 'selected' : '' }}>
                        {{ $societe->Lib }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Ajoutez d'autres champs en fonction de votre modèle -->

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>

    <a href="{{ route('pfes.index') }}">Retour à la liste des Projets de Fin d'Études</a>
</div>
