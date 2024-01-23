    <div class="container">
        <h2>Détails de la société</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID : {{ $societe->id }}</h5>
                <p class="card-text"><strong>Libellé :</strong> {{ $societe->Lib }}</p>
                <p class="card-text"><strong>Adresse :</strong> {{ $societe->Adresse }}</p>
                <p class="card-text"><strong>Téléphone :</strong> {{ $societe->Tel }}</p>

                <a href="{{ route('societes.edit', $societe->id) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('societes.destroy', $societe->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette société ?')">Supprimer</button>
                </form>
            </div>
        </div>
        
        <a href="{{ route('societes.index') }}" class="btn btn-secondary mt-3">Retour à la liste des sociétés</a>
    </div>
