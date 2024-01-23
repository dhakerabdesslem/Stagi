<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des Encadrants</title>
  <link rel="stylesheet" href="css/encadrant.css">
</head>
<body>

    <div class="container">
        <h2>Liste des sociétés</h2>

        <a href="{{ route('societes.create') }}" class="btn btn-primary">Créer une nouvelle société</a>

        @if (count($societes) > 0)
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Libellé</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($societes as $societe)
                        <tr>
                            <td>{{ $societe->id }}</td>
                            <td>{{ $societe->Lib }}</td>
                            <td>{{ $societe->Adresse }}</td>
                            <td>{{ $societe->Tel }}</td>
                            <td>
                                <a href="{{ route('societes.show', $societe->id) }}" class="btn btn-info">Voir</a>
                                <a href="{{ route('societes.edit', $societe->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('societes.destroy', $societe->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette société ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune société n'a été enregistrée.</p>
        @endif
    </div>

</body>
</html>
