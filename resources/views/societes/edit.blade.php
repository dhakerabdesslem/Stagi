<head>
    <meta charset="UTF-8">
    <title>page index</title>
    <link href="{{ asset('css/enseignants/edit.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/enseignants/edit.css">
  </head>
<body>
    <div class="container">
        <h2>Modifier la société</h2>

        <form method="post" action="{{ route('societes.update', $societe->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Lib">Libellé :</label>
                <input type="text" name="Lib" class="form-control" value="{{ $societe->Lib }}" required>
            </div>

            <div class="form-group">
                <label for="Adresse">Adresse :</label>
                <input type="text" name="Adresse" class="form-control" value="{{ $societe->Adresse }}" required>
            </div>

            <div class="form-group">
                <label for="Tel">Téléphone :</label>
                <input type="text" name="Tel" class="form-control" value="{{ $societe->Tel }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            <a href="{{ route('societes.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>

</body>
