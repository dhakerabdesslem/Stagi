<!-- resources/views/pfes/index.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Projets de Fin d'Études</title>
    <link rel="stylesheet" href="{{ asset('css/pfes/index.css') }}">
</head>
<body>
    <h1>Liste des Projets de Fin d'Études</h1>

    <a href="{{ route('pfes.create') }}">Ajouter un Projet de Fin d'Études</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Date de Début</th>
                <th>Date de Fin</th>
                <th>Encadrant</th>
                <th>Société</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pfes as $pfe)
                <tr>
                    <td>{{ $pfe->PFEID }}</td>
                    <td>{{ $pfe->Titre }}</td>
                    <td>{{ $pfe->Description }}</td>
                    <td>{{ $pfe->DateD }}</td>
                    <td>{{ $pfe->DateF }}</td>
                    <td>
                        @if($pfe->Enseignant)
                            {{ $pfe->Enseignant->Nom }} {{ $pfe->Enseignant->Prenom }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $pfe->societe->Lib }}</td>
                    <td>
                        <a href="{{ route('pfes.show', $pfe->PFEID) }}">Voir</a>
                        <a href="{{ route('pfes.edit', $pfe->PFEID) }}">Modifier</a>
                        <form method="POST" action="{{ route('pfes.destroy', $pfe->PFEID) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
