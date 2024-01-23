<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des Encadrants</title>
  <link rel="stylesheet" href="css/encadrant.css">
</head>
<body>
                <h1>Liste des Enseignants</h1>
            
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <!-- Ajoutez d'autres colonnes en fonction de votre modèle -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pfes as $enseignant)
                            <tr>
                                <td>{{ $enseignant->id }}</td>
                                <td>{{ $enseignant->Nom }}</td>
                                <td>{{ $enseignant->Prenom }}</td>
                                <!-- Ajoutez d'autres colonnes en fonction de votre modèle -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </table>
</body>
</html>
