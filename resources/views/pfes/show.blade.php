<!-- resources/views/pfes/show.blade.php -->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Page Index</title>
    <link href="{{ asset('css/pfes/show.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/pfes/show.css">
  </head>
  <body>
    <div class="container">
        <h1>Détails du Projet de Fin d'Études</h1>

        <h2>{{ $pfe->Titre }}</h2>
        <p>Description: {{ $pfe->Description }}</p>
        <p>Date de Début: {{ $pfe->DateD }}</p>
        <p>Date de Fin: {{ $pfe->DateF }}</p>
        
        @if($pfe->encadrant)
            <p>Encadrant: {{ $pfe->encadrant->Nom }} {{ $pfe->encadrant->Prenom }}</p>
        @else
            <p>Encadrant: N/A</p>
        @endif

        <p>Société: {{ $pfe->societe->Lib }}</p>

        <!-- Add other details based on your model -->

        <a href="{{ route('pfes.index') }}">Retour à la liste des Projets de Fin d'Études</a>
    </div>
  </body>
</html>
