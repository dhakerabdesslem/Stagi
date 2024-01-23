<head>
    <meta charset="UTF-8">
    <title>page index</title>
    <link href="{{ asset('css/pfes/createpfe.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/pfes/createpfe.css">
  </head>

    <div class="container">
        <h2>Créer un nouveau PFE</h2>
        <form action="{{ route('pfes.store') }}" method="POST">
        @csrf
        @method('POST')

            <div class="form-group">
                <label for="Titre">Titre :</label>
                <input type="text" name="Titre" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="Description">Description :</label>
                <textarea name="Description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="DateD">Date de début :</label>
                <input type="date" name="DateD" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="DateF">Date de fin :</label>
                <input type="date" name="DateF" class="form-control" value="" required>
            </div>

    <div class="form-group">
        <label for="EnseignantID">Sélectionner l'Encadrant :</label>
        <select name="EnseignantID" class="form-control" required>
            @foreach($enseignants as $enseignant)
                <option value="{{ $enseignant->id }}">
                    {{ $enseignant->Nom }} {{ $enseignant->Prenom }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="SocieteID">Sélectionner la Société :</label>
        <select name="SocieteID" class="form-control" required>
            @foreach($societes as $societe)
                <option value="{{ $societe->id }}">
                    {{ $societe->Lib }}
                </option>
            @endforeach
        </select>
    </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
