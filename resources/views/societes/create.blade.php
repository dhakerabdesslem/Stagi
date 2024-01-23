

    <div class="container">
        <h2>Créer une nouvelle société</h2>

        <form method="post" action="{{ route('societes.store') }}">
            @csrf

            <div class="form-group">
                <label for="Lib">Libellé :</label>
                <input type="text" name="Lib" class="form-control" value="{{ old('Lib') }}" required>
            </div>

            <div class="form-group">
                <label for="Adresse">Adresse :</label>
                <input type="text" name="Adresse" class="form-control" value="{{ old('Adresse') }}" required>
            </div>

            <div class="form-group">
                <label for="Tel">Téléphone :</label>
                <input type="text" name="Tel" class="form-control" value="{{ old('Tel') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer la société</button>
            <a href="{{ route('societes.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
