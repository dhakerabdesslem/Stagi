<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des Encadrants</title>
  <link rel="stylesheet" href="css/encadrant.css">
</head>
<body>
    <h1>Liste des Enseignants</h1>

    <a href="{{ route('enseignant.create') }}">Ajouter un Enseignant</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <!-- Ajoutez d'autres colonnes en fonction de votre modèle -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enseignants as $enseignant)
                <tr>
                    <td>{{ $enseignant->id }}</td>
                    <td>{{ $enseignant->Nom }}</td>
                    <td>{{ $enseignant->Prenom }}</td>
                    <!-- Ajoutez d'autres colonnes en fonction de votre modèle -->
                    <td>
                        <form method="POST" action="{{ url('/deleteenseignant/' . $enseignant->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                        <a href="{{ route('enseignants.edit', $enseignant->id) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
